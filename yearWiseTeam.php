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
	<title>Team</title>
   <?php include 'links.php' ?>
 
	
</head>
<body>
  <div>
    <span>
    <a class="btn btn-info mt-3 ms-3 me-1" href="student.php">Back To Dashboard</a>
</span>
  <span>
    <a class="btn btn-success mt-3 ms-3" href="addToTeam.php">Add Member</a>
</span>
  </div>
	<div class="container mt-5 ms-3">
		<div class="row">
			
                  <table class="table display" id="example">
  <thead>
    <tr>
      <th scope="col">Reg ID</th>
      <th scope="col">Name</th>  
      <th scope="col">Gender</th>
      <th scope="col">Branch</th>
      <th scope="col">Contact</th>
      <th scope="col">Acad Year</th>
      <th scope="col">SAE ID</th>
      <th scope="col">Department</th>
      <th scope="col">Role</th>
      <th scope="col">Member ID</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $con= mysqli_connect("sql111.epizy.com","epiz_34114828","h1aMXRVCMDM");
    $db= mysqli_select_db($con,'epiz_34114828_majorproject');

    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        $TeamName = $_GET['TeamName'];
        $sql = "SELECT `{$TeamName}`.`RegId` ,concat(`sae_cc_members`.`FiratName`,' ' ,`sae_cc_members`.`LastName`) As `Name`,`sae_cc_members`.`Gender`,`sae_cc_members`.`BranchId` As `Branch`,`sae_cc_members`.`ContactNumber` as `Contact`,`{$TeamName}`.`YearId` AS `Year`,`{$TeamName}`.`SAE_ID`,`{$TeamName}`.`DeptId` AS `Dept`,`{$TeamName}`.`RoleId` AS `Role`,`{$TeamName}`.`MemberId` FROM  `{$TeamName}` INNER JOIN  `sae_cc_members` ON `{$TeamName}`.`RegId` = sae_cc_members.RegId;";

        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo "
      <tr>
      <td>$row[RegId]</td>
      <td>$row[Name]</td>     
      <td>$row[Gender]</td>
      <td>$row[Branch]</td>
      <td>$row[Contact]</td>
      <td>$row[Year]</td>
      <td>$row[SAE_ID]</td>
      <td>$row[Dept]</td>
      <td>$row[Role]</td>
      <td>$row[MemberId]</td>
      <td><a href='editToTeam.php?id=$row[RegId]&team=$TeamName&year=$row[Year]&saeid=$row[SAE_ID]&dept=$row[Dept]&role=$row[Role]&memberid=$row[MemberId]' class='btn btn-info'>Edit</a></td>     
      <td><a href='delete.php?id=$row[RegId]&team=$TeamName' class='btn btn-danger'>Delete</a></td>

      
    </tr>
      
      ";
    }
} else {
    echo 'No results found';
}      
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
          columns:[0,1,2,3,4,5,6,7,8,9]
        }
      },
        {extend:'csvHtml5',
        exportOptions:{
          columns:[0,1,2,3,4,5,6,7,8,9]
        }
      },
        {extend:'excelHtml5',
        exportOptions:{
          columns:[0,1,2,3,4,5,6,7,8,9]
        }
      },
        {extend:'pdfHtml5',
        exportOptions:{
          columns:[0,1,2,3,4,5,6,7,8,9]
        }
      },
        
        
      'colvis'
      ,
            {
                extend: 'print',
                text: 'Print all',
                exportOptions: {
                    columns:[0,1,2,3,4,5,6,7,8,9],
                    modifier: {
                        selected: null
                    }
                }
            },
            {
                extend: 'print',
                text: 'Print selected',
                exportOptions: {
                    columns:[0,1,2,3,4,5,6,7,8,9],
                    
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
