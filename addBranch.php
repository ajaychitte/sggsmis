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
		
		$branchID= $_POST["branchID"];
		$branchName= $_POST["branchName"];

		$sql = "INSERT INTO branch (BranchId,BranchName)
				VALUES ('$branchID','$branchName')";
		$result= mysqli_query($con,$sql);

		if ($result === TRUE) {
  			echo "<script>if (confirm(' {$branchName} Added To Branch List')) {
   window.location.href = 'branchList.php';
}</script>";		
			} else {
 				 echo "<script>if (confirm('Error: Branch ID Already Exist! CLICK OK to see Branch List')) {
   window.location.href = 'branchList.php';
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
				<h2 class="mb-4 text-center pt-2">Add Branch</h2>
				
				<form method="post" action="addBranch.php" class="p-2">
	
					<div class="mb-3">
						<label for="branchID" class="form-label">Branch ID :</label>
						<input type="text" class="form-control" name="branchID" id="branchID" placeholder="Enter Branch ID" required>
                        
					</div>
					<div class="mb-3">
						
                            <label for="branchName" class="form-label">Branch Name :</label>
                            <input type="text" class="form-control" name="branchName" id="branchName" placeholder="Enter Branch Name" required>				
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
