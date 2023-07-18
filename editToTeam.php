<?php
session_start();

// Redirect the user to the login page if they are not logged in
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}
    $con= mysqli_connect("sql111.epizy.com","epiz_34114828","h1aMXRVCMDM");
    $db= mysqli_select_db($con,'epiz_34114828_majorproject');

   
    

if (isset($_GET['id'])&&isset($_GET['team'])) {

    $search_id = $_GET["id"];
    $searchTeam = $_GET["team"];
    $sql = "SELECT * FROM `{$searchTeam}` WHERE RegId ='$search_id'";

	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);


}

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$teamName=$_POST["teamName"];
		$registrationID=$_POST["registrationID"];
		$saeid= $_POST["saeid"];
		$memberID= $_POST["memberID"];
		$departmentID= $_POST["departmentID"];
		$year= $_POST["year"];
		$roleID= $_POST["roleID"];

		$sqll = "UPDATE `$teamName` SET `SAE_ID`=$saeid,`YearId`='$year',
    `MemberId`='$memberID',`DeptId`='$departmentID',`RoleId`='$roleID' WHERE `$teamName`.`RegId`= '$registrationID' ";
		$result1= mysqli_query($con,$sqll);

		
		if ($result1=== TRUE) {
  echo "<script>if (confirm(' {$registrationID} Updated Successfully!')) {
   window.location.href = 'student.php';
}</script>";
} else {
  echo "Error: " . $sqll . "<br>" . $con->error;
}
    
		//header("location: student.php");
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Update Member</title>
    <?php include 'links.php' ?>
	
</head>
<body>
	<div class="container mt-2" >
		<div class="row">
			<div class="col-md-7 offset-md-3" style="background-color: #e6e6e6;">
				<h2 class="mb-4 text-center pt-2">Update Member</h2>
				<form method="post" action="editToTeam.php" class="p-2">
					<div class="mb-3">
						<label for="teamName" class="form-label">Team Name :</label>
						<input type="text" class="form-control" name="teamName" id="teamName" value="<?php echo $_GET['team'];?>" readonly>

					</div>
					<div class="mb-3">
						<label for="registration" class="form-label">Registration ID :</label>
						<input type="text" class="form-control" name="registrationID" id="registration"  value="<?php echo $_GET['id']; ?>" readonly>
                         <p style="color:red;">*You can change Registration ID from SAE List only.</p>
						<script>
							var nameInput = document.getElementById("registration");

								nameInput.addEventListener("input", function () {
									this.value = this.value.trim().toUpperCase();
								});
						</script>

					</div>
					
					<div class="mb-3">
						<label for="saeid" class="form-label">SAE ID :</label>
						<input type="text" class="form-control" name="saeid" id="saeID"  value="<?php echo $_GET['saeid']; ?>" required>
				
					</div>
					<div class="mb-3">
						<label for="memberID" class="form-label">Member ID :</label>
						<input type="text" class="form-control" name="memberID" id="memberID"  value="<?php echo $_GET['memberid']; ?>" required>
				
					</div>
                    <div class="mb-3">
                            <label for="departmentID" class="form-label">Department :</label>
						<select class="form-select" name="departmentID" id="departmentID" required>
							<option selected value="<?php echo $row['DeptId'];?>"><?php echo $_GET['dept']; ?></option>
							 <?php
                    $query = "SELECT * FROM dept";
                    $results=mysqli_query($con, $query);
                    //loop
                    foreach ($results as $dept){
                ?>
                        <option value="<?php echo $dept["DeptId"];?>"><?php echo $dept["DeptName"];?></option>
                <?php
                    }
                ?>
							
						</select>
                        </div>
					
					
                        <div class="d-grid">
                            <label for="year" class="form-label">Year :</label>
						<select class="form-select" name="year" id="year" required>
							<option value="<?php echo $row["YearId"];?>" selected ><?php echo $_GET['year']; ?></option>
							<option>FY</option>
							<option>SY</option>
							<option>TY</option>
							<option>B.Tech</option>
							<option>PO</option>
						</select>
                        </div>
					
                        <div class="d-grid">
                            <label for="roleID" class="form-label">Role :</label>
						<select class="form-select" name="roleID" id="roleID" required>
							<option value="<?php echo $row['RoleId'];?>" selected ><?php echo $_GET['role']; ?></option>
							 <?php
                    $query = "SELECT * FROM roles";
                    $results=mysqli_query($con, $query);
                    //loop
                    foreach ($results as $roles){
                ?>
                        <option value="<?php echo $roles["RoleId"];?>"><?php echo $roles["RoleName"];?></option>
                <?php
                    }
                ?>
				
						</select>
                        </div>
                    <div class="d-grid gap-2 mt-4">
						<button type="submit" class="btn btn-primary">Update</button>
						<button onclick="window.location.href='student.php'" type="button" class="btn btn-danger">Cancel</button>
					</div>
                        
                        
					</div>
                    
				
					

				</form>
			</div>
		</div>
	</div>

	<!-- Bootstrap JS -->
	
</body>
</html>
