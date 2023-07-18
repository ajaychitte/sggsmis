<!DOCTYPE html>
<html>
<head>
	<title>Faculty List</title>
	<!-- Bootstrap CSS -->
    <?php include 'links.php' ?>
	
</head>
<body>
  <div>
    <a class="btn btn-info mt-3 ms-3" href="student.php">Back To Dashboard</a>
  </div>
	<div class="container mt-5 ms-0">
		<div class="row">
			  <table class="table display" id="example">
  <thead>
    <tr>
      <th scope="col">Reg ID</th>
      <th scope="col">Name</th>  
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Branch</th>
      <th scope="col">Joining Year</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $con= mysqli_connect("sql111.epizy.com","epiz_34114828","h1aMXRVCMDM");
    $db= mysqli_select_db($con,'epiz_34114828_majorproject');

    $result=mysqli_query($con,"SELECT `sae_cc_members`.`RegId` ,concat(`sae_cc_members`.`FiratName`,' ' ,`sae_cc_members`.`LastName`) As `Name`,`sae_cc_members`.`Gender`,`sae_cc_members`.`BranchId` as `Branch`,`sae_cc_members`.`ContactNumber` As `Contact` ,`sae_cc_members`.`Email`,`sae_cc_members`.`StatusId`,`sae_cc_members`.`JoiningYear` FROM `sae_cc_members` WHERE  `sae_cc_members`.`StatusId` = 'FA'");
    while($row=mysqli_fetch_assoc($result)){
      echo "
      <tr>
      <td>$row[RegId]</td>
      <td>$row[Name]</td>
      <td>$row[Gender]</td>
      <td>$row[Email]</td>
      <td>$row[Contact]</td>
      <td>$row[Branch]</td>
      <td>$row[JoiningYear]</td>
      
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
  $(document).ready(function () {
    $('#example').DataTable({
        dom: 'Blfrtip',
        buttons: [
          {extend:'copyHtml5',
        exportOptions:{
          columns:':visible'
        }
      },
        {extend:'csvHtml5',
        exportOptions:{
          columns:':visible'
        }
      },
        {extend:'excelHtml5',
        exportOptions:{
          columns: ':visible'
        }
      },
        {extend:'pdfHtml5',
        exportOptions:{
          columns:':visible'
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
                text: 'Print selected'
            }
        ],
        select: {
            style: 'multi'
        }
    });
});
</script>
	
</body>
</html>
