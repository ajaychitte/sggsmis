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
		$collegeID= $_POST["collegeID"];
		$collegeName= $_POST["collegeName"];

		$sql = "INSERT INTO college (CollegeId,CollegeName)
				VALUES ('$collegeID','$collegeName')";
		$result= mysqli_query($con,$sql);

		if ($result === TRUE) {
  			echo "<script>if (confirm(' {$collegeName} Added To College List')) {
   window.location.href = 'collegeList.php';
}</script>";		
			} else {
 				 echo "<script>if (confirm('Error: College ID Already Exist! CLICK OK to see College List')) {
   window.location.href = 'collegeList.php';
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
				<h2 class="mb-4 text-center pt-2">Add College</h2>
				<form method="post" action="addCollege.php" class="p-3">
					<div class="mb-3">
						<label for="collegeCode" class="form-label">College ID :</label>
						<input type="text" class="form-control" name="collegeID" id="collegeCode" placeholder="Enter DTE College Code" required>
						<a href="http://www.dtemaharashtra.gov.in/StaticPages/frmInstituteList.aspx?did=63" target="_blank">Click Here for DTE Codes.</a>
					</div>
					<div class="mb-3">
						
                            <label for="collegeName" class="form-label">College Name :</label>
                            <input type="text" class="form-control" name="collegeName" id="collegeName" placeholder="Enter College Name" required>				
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
