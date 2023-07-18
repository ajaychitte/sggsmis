<?php
session_start();

// Redirect the user to the login page if they are not logged in
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}



	$con= mysqli_connect("sql111.epizy.com","epiz_34114828","h1aMXRVCMDM");
    $db= mysqli_select_db($con,'epiz_34114828_majorproject');

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$TeamName = $_POST['TeamName'];

		$sql = "CREATE TABLE `{$TeamName}` LIKE team22_23;
        ALTER TABLE `{$TeamName}`
        ADD CONSTRAINT `fk_dept_{$TeamName}` FOREIGN KEY (`DeptId`) REFERENCES `dept` (`DeptId`),
        ADD CONSTRAINT `fk_role_{$TeamName}` FOREIGN KEY (`RoleId`) REFERENCES `roles` (`RoleId`),
        ADD CONSTRAINT `fk_{$TeamName}_sae_cc_member` FOREIGN KEY (`RegId`) REFERENCES `sae_cc_members` (`RegId`);
        INSERT INTO `teamlist`(`teamName`) VALUES ('{$TeamName}')";
		
		// $result= mysqli_query($con,$sql)

        // $con->multi_query($sql)

		if($con->multi_query($sql)){
			
			echo "<script>if (confirm(' {$TeamName} Added to Team List')) {
   window.location.href = 'student.php';
}</script>";
		}
		else{
			echo "<script>if (confirm('Error: {$TeamName} Already exist to Team List')) {
   window.location.href = 'student.php';
}</script>";
		}

		//header("location: student.php");

	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Add Team</title>
	<!-- Bootstrap CSS -->
    <?php include 'links.php' ?>
	
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3" style="background-color: #e6e6e6;">
				<h2 class="mb-4 text-center pt-2">Add Team</h2>
				<form method="post" action="addTeam.php" class="p-3">
					<div class="mb-3">
						<label for="TeamName" class="form-label">Team Name: *(e.g team22_23)</label>
						<input type="text" class="form-control" name="TeamName" id="TeamName" placeholder="Enter TeamName like team22_23 " required>
					</div>
					
					
					<div class="d-grid gap-2 mt-4">
						<button type="submit" class="btn btn-primary">Add</button>
						<button type="button" class="btn btn-danger"><a style="text-decoration: none;color:white; padding:0px 50px;" href="student.php">Cancel</a></button>
					</div>

				</form>
			</div>
		</div>
	</div>

	<!-- Bootstrap JS -->
	
</body>
</html>
