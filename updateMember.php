<?php
session_start();

// Redirect the user to the login page if they are not logged in
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}


	$con= mysqli_connect("sql111.epizy.com","epiz_34114828","h1aMXRVCMDM");
    $db= mysqli_select_db($con,'epiz_34114828_majorproject');


	$search_id = $_GET['id'];
    $sql = "SELECT * FROM sae_cc_members WHERE RegId ='$search_id'";

	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);


	if($_SERVER['REQUEST_METHOD']=='POST'){
		$oldregistrationID= $_POST["oldregistrationID"];
		$registrationID= $_POST["registrationID"];
		$firstName= $_POST["firstName"];
		$middleName= $_POST["middleName"];
		$lastName= $_POST["lastName"];
		$email= $_POST["email"];
		$contact= $_POST["contact"];
		$year= $_POST["year"];
		$gender= $_POST["gender"];
		$dob= $_POST["dob"];
		$joiningYear= $_POST["joiningYear"];
		$collegeID= $_POST["collegeID"];
		$branchID= $_POST["branchID"];
		$memberStatus= $_POST["memberStatus"];


		

		$sqll = "UPDATE `sae_cc_members` SET `RegId`='$registrationID',`FiratName`='$firstName',`MiddleName`='$middleName',`LastName`='$lastName',`Gender`='$gender',
    `Email`='$email',`ContactNumber`=$contact,`DoB`='$dob',`BranchId`='$branchID',`YearId`='$year',
    `CollegeId`='$collegeID',`StatusId`='$memberStatus',`JoiningYear`='$joiningYear' WHERE `sae_cc_members`.`RegId`= '$oldregistrationID' ";
		$result1= mysqli_query($con,$sqll);

		
		if ($result1 === TRUE) {
  			echo "<script>if (confirm(' {$registrationID} Updated Successfully!')) {
   window.location.href = 'showAll.php';}</script>";
		
			} else {
 				 echo "<script>if (confirm('Error: Check Your Resgistration ID and other Fields Again.')) {
   window.location.href = 'showAll.php';}</script>";

			
			}
		//header("location: student.php");
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Update Member</title>
    <?php include 'links.php' ?>
    <style>
		.formu{
		display: block;
    	width: 41rem;
    	margin: 0 auto;
    	background-color: #e6e6e6;
		}
	</style>
	
</head>
<body>
	<div class="container mt-2" >
		<div class="row">
			<div class="formu offset-md-3" style="background-color: #e6e6e6;">
				<h2 class=" text-center pt-2">Update Member</h2>
				<form method="post" action="updateMember.php" class="p-2">
					<div class="mb-3">
						<label for="oldregistration" class="form-label">Existing Registration ID :</label>
						<input type="text" class="form-control" name="oldregistrationID" id="oldregistration"  value="<?php echo $row['RegId']; ?>" readonly>
					</div>
					<div class="mb-3">
						<label for="registration" class="form-label">Registration ID :</label>
						<input type="text" class="form-control" name="registrationID" id="registration"  value="<?php echo $row['RegId']; ?>" required>
						<p style="color:red;">*If you want to Update the Registration ID Update in above input bar.</p>
						<script>
							var nameInput = document.getElementById("registration");

								nameInput.addEventListener("input", function () {
									this.value = this.value.trim().toUpperCase();
								});

						</script>

					</div>
					<div class="mb-3 d-flex">
						<div class="d-grid me-2">
                            <label for="firstName" class="form-label">First Name :</label>
                            <input type="text" class="form-control" name="firstName" id="firstName" value="<?php echo $row['FiratName'];?>" required>
                        </div>
						<div class="d-grid me-2">
                           <label for="middleName" class="form-label">Middle Name :</label> 
						
						<input type="text" class="form-control" name="middleName" id="middleName" value="<?php echo $row['MiddleName'];?>" required>
						
                        </div>
                        <div class="d-grid">
                            <label for="lastName" class="form-label">Last Name :</label>
						<input type="text" class="form-control" name="lastName" id="lastName" value="<?php echo $row['LastName'];?>" required>
                        </div>
						
					</div>
					<div class="d-flex justify-content-between mb-3">
                        <div class="d-grid me-2">
                            <label for="email" class="form-label">Email address :</label>
						    <input type="text" class="form-control" name="email" id="email" value="<?php echo $row['Email']; ?>" required>
                        </div>
						<div class="d-grid me-2">
                            <label for="contact" class="form-label">Contact Number :</label>
						    <input type="text" class="form-control" name="contact" id="contact" value="<?php echo $row['ContactNumber']; ?>" required>
                        </div>
                        
                        <div class="d-grid">
                            <label for="year" class="form-label">Year :</label>
						<select class="form-select" name="year" id="year" required>
							<option value="<?php echo $row['YearId'];?>" selected ><?php echo $row['YearId']; ?></option>
							<option>FY</option>
							<option>SY</option>
							<option>TY</option>
							<option>B.Tech</option>
							<option>PO</option>
						</select>
                        </div>
					</div>

					<div class="d-flex justify-content-between mb-3">
						<div>
                            <label for="gender" class="form-label">Gender :</label>
						<select class="form-select" name="gender" id="gender" required>
							<option value="<?php echo $row['Gender'];?>" selected ><?php echo $row['Gender']; ?></option>
							<option value="M">Male</option>
							<option value="F">Female</option>
							<option>Other</option>
						</select>
                        </div>
                        <div>
                            <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="dob" id="dob" value="<?php echo $row['DoB'];?>" placeholder="<?php echo $row['DoB']; ?>" required>
                        <script>
                                var input = document.getElementById("dob");
                                input.addEventListener("input", function() {
                                var dateValue = input.value;
                                var date = new Date(dateValue);
                                var year = date.getFullYear();
                                var month = ("0" + (date.getMonth() + 1)).slice(-2);
                                var day = ("0" + date.getDate()).slice(-2);
                                input.value = year + "-" + month + "-" + day;
                                });
                        </script>
                        </div>
                        <div>
                            <label for="joiningYear" class="form-label">Joining Year :</label>
						<select class="form-select" name="joiningYear" id="joiningYear" required>
							<option value="<?php echo $row['JoiningYear'];?>" selected ><?php echo $row['JoiningYear']; ?></option>
                            
									<?php
									$min = 2010;
									$max = 2050;
									for ($i = $min; $i <= $max; $i++) {
										echo "<option value=\"$i\">$i</option>";
									}
									?>
							
						</select>
                        </div>
                        
					</div>


                    <div class="d-flex justify-content-between mb-3">
						
                        <div class="d-grid">
                            <label for="collegeID" class="form-label">College Name :</label>
						<select class="form-select" name="collegeID" id="collegeID" required>
							<option value="<?php echo $row['CollegeId'];?>" selected ><?php echo $row['CollegeId']; ?></option>
							 <?php
                    $query = "SELECT * FROM college";
                    $results=mysqli_query($con, $query);
                    //loop
                    foreach ($results as $college){
                ?>
                        <option value="<?php echo $college["CollegeId"];?>"><?php echo $college["CollegeName"];?></option>
                <?php
                    }
                ?>
							
						</select>
                        </div>
                        <div class="d-grid">
                            <label for="branchID" class="form-label">Branch :</label>
						<select class="form-select" name="branchID" id="branchID" required>
							<option value="<?php echo $row['BranchId'];?>" selected ><?php echo $row['BranchId']; ?></option>
							 <?php
                    $query = "SELECT * FROM branch";
                    $results=mysqli_query($con, $query);
                    //loop
                    foreach ($results as $branch){
                ?>
                        <option value="<?php echo $branch["BranchID"];?>"><?php echo $branch["BranchName"];?></option>
                <?php
                    }
                ?>
							
						</select>
                        </div>
                        <div class="d-grid">
                            <label for="memberStatus" class="form-label">Member Status :</label>
						<select class="form-select" name="memberStatus" id="memberStatus" required>
							<option value="<?php echo $row['StatusId'];?>" selected ><?php echo $row['StatusId']; ?></option>
							 <?php
                    $query = "SELECT * FROM membertype";
                    $results=mysqli_query($con, $query);
                    //loop
                    foreach ($results as $membertype){
                ?>
                        <option value="<?php echo $membertype["StatusId"];?>"><?php echo $membertype["MemberStatus"];?></option>
                <?php
                    }
                ?>
				
						</select>
                        </div>
                        
                        
					</div>
                    
				
					<div class="d-grid gap-2 mt-4">
						<button type="submit" class="btn btn-primary">Update</button>
						<button onclick="window.location.href='student.php'" type="button" class="btn btn-danger">Cancel</button>
					</div>

				</form>
			</div>
		</div>
	</div>

	<!-- Bootstrap JS -->
	
</body>
</html>
