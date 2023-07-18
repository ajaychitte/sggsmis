<?php
session_start();

// Redirect the user to the login page if they are not logged in
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Team Members</title>
  
  <?php include 'links.php' ?>
  

</head>
<body>
  <div>
    <span>
    <a class="btn btn-info mt-3 ms-3 me-1" href="student.php">Back To Dashboard</a>
</span>
  <span>
    <a class="btn btn-success mt-3 ms-3" href="addMember.php">Add Member</a>
</span>
  </div>
	<div class="container mt-5 ms-0">
		<div class="row">
			  <table  id="example" class="table display" data-pagination="true">
  <thead>
    <tr>
      <th scope="col">Reg ID</th>
      <th scope="col">First</th>
      <th scope="col">Middle</th>
      <th scope="col">Last</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">DoB</th>
      <th scope="col">Branch</th>
      <th scope="col">Acad Year</th>
      <th scope="col">College ID</th>
      <th scope="col">Status ID</th>
      <th scope="col">Joining Year</th>
      <th  scope="col">Edit</th>
     
    </tr>
  </thead>
  <tbody>
    <?php
    $con= mysqli_connect("sql111.epizy.com","epiz_34114828","h1aMXRVCMDM");
    $db= mysqli_select_db($con,'epiz_34114828_majorproject');

    $result=mysqli_query($con,"SELECT * FROM sae_cc_members");
    while($row=mysqli_fetch_assoc($result)){
      echo "
      <tr>
      <td>$row[RegId]</td>
      <td>$row[FiratName]</td>
      <td>$row[MiddleName]</td>
      <td>$row[LastName]</td>
      <td>$row[Gender]</td>
      <td>$row[Email]</td>
      <td>$row[ContactNumber]</td>
      <td>$row[DoB]</td>
      <td>$row[BranchId]</td>
      <td>$row[YearId]</td>
      <td>$row[CollegeId]</td>
      <td>$row[StatusId]</td>
      <td>$row[JoiningYear]</td>
      <td> <a href='updateMember.php?id=$row[RegId]' class='btn btn-info' >Edit</a></td>
     
      

      
    </tr>
      
      ";
    }
    
    ?>
  </tbody>

</table>
		</div>
	</div>

	<!-- Bootstrap JS -->
  <script>
  $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Blfrtip',
        buttons: [
          {extend:'copyHtml5',
        exportOptions:{
          columns:[0,1,2,3,4,5,6,7,8,9,10,11,12]
        }
      },
        {extend:'csvHtml5',
        exportOptions:{
          columns:[0,1,2,3,4,5,6,7,8,9,10,11,12]
        }
      },
        {extend:'excelHtml5',
        exportOptions:{
          columns:[0,1,2,3,4,5,6,7,8,9,10,11,12]
        }
      },
        {extend:'pdfHtml5',
        exportOptions:{
          columns:[0,1,2,3,4,5,6,7,8,9,10,11,12]
        }
      },
        
        
      'colvis'
      ,
        {
                extend: 'print',
                text: 'Print all',
                exportOptions: {
                    columns:':visible',
                    modifier: {
                        selected: null
                    }
                }
            },
            


            {
                

                extend: 'print',
                text: 'Print selected',
                exportOptions: {
                    columns:[0,1,2,3,4,5,6,7,8,9,10,11,12],
                    
                }
            }
        ],
        select: {
            style: 'multi'
        }
            
    } );
} );
</script>
 

	
</body>
</html>
