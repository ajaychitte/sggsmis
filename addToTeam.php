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
        $TeamName=$_POST["TeamName"];
		$registrationID= $_POST["registrationID"];
		$year= $_POST["year"];
        $sae_id=$_POST["sae_id"];
        $dept_id=$_POST["dept_id"];
        $role_id=$_POST["role_id"];
        $member_id=$_POST["member_id"];
		
		$sql = "INSERT INTO `{$TeamName}`(`RegId`, `YearId`, `SAE_ID`, `DeptId`, `RoleId`, `MemberId`)
				VALUES ('$registrationID','$year','$sae_id','$dept_id','$role_id','$member_id')";
		$result= mysqli_query($con,$sql);

		
		if ($result === TRUE) {
  			echo "<script>if (confirm(' {$registrationID} Added To {$TeamName}')) {
   window.location.href = 'student.php';
}</script>";		
			} else {
 				 echo "<script>if (confirm('Error: Check if the Member is Added to SAE Member List Click OK to See the List')) {
   window.location.href = 'showALl.php';
}</script>";
			
			}
		
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Member To Team</title>
	<!-- Bootstrap CSS -->
    <?php include 'links.php' ?>
	
</head>
<body>
	<div class="container mt-2">
		<div class="row">
			<div class="col-md-6 offset-md-3" style="background-color: #e6e6e6;">
				<h2 class="mb-4 text-center pt-2">Add Member To Team</h2>
				<form method="post" action="addToTeam.php" class="p-3">
                      <div class="mb-3">
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
                        </div>
                      
					<div class="mb-3">
						<label for="registration" class="form-label">Registration ID :</label>
						<input type="text" class="form-control" name="registrationID" id="registration" placeholder="Enter Registration Number" required>
					</div>
				
					       
                        <div class="mb-3">
                            <label for="year" class="form-label">Year :</label>
						<select class="form-select" name="year" id="year" required>
							<option selected disabled>Select Year</option>
							<option>FY</option>
							<option>SY</option>
							<option>Third</option>
							<option>B.Tech</option>
							<option>PO</option>
						</select>
                        </div>

                        <div class="mb-3">
						<label for="saeID" class="form-label">SAE ID :</label>
						<input type="text" class="form-control" name="sae_id" id="saeID" placeholder="Enter SAE ID" required>
					</div>

                    <div class="mb-3">
                            <label for="deptID" class="form-label">Dept ID :</label>
						<select class="form-select" name="dept_id" id="deptID" required>
							<option selected disabled>Select Department</option>
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
                    <div class="mb-3">
                            <label for="role_id" class="form-label">Role ID :</label>
						<select class="form-select" name="role_id" id="role_id" required>
							<option selected disabled>Select Role</option>
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
                    <div class="mb-3">
						<label for="member_id" class="form-label">Member ID :</label>
						<input type="text" class="form-control" name="member_id" id="member_id" placeholder="Enter Member ID" required>
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
