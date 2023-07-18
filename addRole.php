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
		$roleID= $_POST["roleID"];
		$roleName= $_POST["roleName"];

		$sql = "INSERT INTO roles (RoleId,RoleName)
				VALUES ('$roleID','$roleName')";
		$result= mysqli_query($con,$sql);

		if ($result === TRUE) {
  			echo "<script>if (confirm(' {$roleName} Added To Role List')) {
   window.location.href = 'roleList.php';
}</script>";		
			} else {
 				 echo "<script>if (confirm('Error: Role ID Already Exist! Click OK to see Role ID')) {
   window.location.href = 'roleList.php';
}</script>";
			
			}
		//header("location: student.php");
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Form Example</title>
	<!-- Bootstrap CSS -->
    <?php include 'links.php' ?>
	
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3" style="background-color: #e6e6e6;">
				<h2 class="mb-4 text-center pt-2">Add Role</h2>
				<form method="post" action="addRole.php" class="p-3">
					<div class="mb-3">
						<label for="roleID" class="form-label">Role ID :</label>
						<input type="text" class="form-control" name="roleID" id="roleID" placeholder="Enter Role ID" required>
					</div>
					<div class="mb-3">
						
                            <label for="roleName" class="form-label">Role Name :</label>
                            <input type="text" class="form-control" name="roleName" id="roleName" placeholder="Enter Role Name" required>				
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
