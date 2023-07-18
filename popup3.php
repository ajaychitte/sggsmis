<?php
session_start();

// Redirect the user to the login page if they are not logged in
if (!isset($_SESSION['loggedin'])) {
	header('Location: adminlogin.php');
	exit();
}
    $con= mysqli_connect("sql111.epizy.com","epiz_34114828","h1aMXRVCMDM");
    $db= mysqli_select_db($con,'epiz_34114828_majorproject');


	
?>



<!DOCTYPE html>
<html>
<head>
	<title>Search Team</title>
	<!-- Bootstrap CSS -->
    <?php include 'links.php' ?>
	
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3" style="background-color: #e6e6e6;">
				<h2 class="mb-4 text-center pt-2">Enter Year</h2>
				
				 <form action="yearWiseTeam.php" method="get">
                        <label for="TeamName" class="form-label">Team Name :</label>
						<select class="form-select" name="TeamName" id="TeamName" required>
							<option selected disabled>Select Team</option>
							<?php
                    $query = "SELECT * FROM teamlist";
                    $results=mysqli_query($con, $query);
                    //loop
                    foreach ($results as $teams){
                ?>
                        <option value="<?php echo $teams["teamName"];?>"><?php echo $teams["teamName"];?></option>
                <?php
                    }
                ?>
							
						</select>

                    <div class="d-flex mt-3">
                        <a class="btn btn-danger me-2" id="submit-btn2"  href="student.php">Cancel</a>
                        <button class="btn btn-primary" id="cancel-btn">Submit</button>
   
                    </div>
                </form>
			</div>
		</div>
	</div>
   
</body>
</html>
