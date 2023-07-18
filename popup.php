<?php
session_start();

// Redirect the user to the login page if they are not logged in
if (!isset($_SESSION['loggedin'])) {
	header('Location: adminlogin.php');
	exit();
}
	
?>



<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<!-- Bootstrap CSS -->
    <?php include 'links.php' ?>
	
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3" style="background-color: #e6e6e6;">
				<h2 class="mb-4 text-center pt-2">Enter Year</h2>
				
				 <form action="yearWiseStudent.php" method="post">
                    <label for="joiningYear" class="form-label">Joining Year :(e.g. 2024)*</label>
	                <input type="text" class="form-control" minlength="4" name="joiningYear" id="joiningYear" placeholder="Enter Joining Year" required>
  
                    <div class="d-flex mt-3">
                    <a class="btn btn-danger me-2" id="submit-btn" href="student.php">Cancel</a>
                    <button type="submit" class="btn btn-primary" id="cancel-btn">Submit</button>  
                    </div>
                </form>
			</div>
		</div>
	</div>
    

	<!-- Bootstrap JS -->
	
</body>
</html>
