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
		

		$sql = "INSERT INTO sae_cc_members(RegId,FiratName,MiddleName,LastName,Gender,Email,ContactNumber,DoB,BranchId,YearId,CollegeId,StatusId,JoiningYear)
				VALUES ('$registrationID','$firstName','$middleName','$lastName','$gender','$email','$contact','$dob','$branchID','$year','$collegeID','$memberStatus','$joiningYear')";
		$result= mysqli_query($con,$sql);

		
		if ($result === TRUE) {
  			echo "<script>if (confirm(' {$registrationID} Added To Member List')) {
   window.location.href = 'showAll.php';
}</script>";		
			} else {
 				 echo "<script>if (confirm('Error: Check Your Resgistration ID and other Fields.')) {
   window.location.href = 'student.php';
}</script>";
			
			}
		//header("location: student.php");
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Member</title>
	<!-- Bootstrap CSS -->
    <?php include 'links.php' ?>
    <style>
		.formu {
    display: block;
    width: 41rem;
    margin: 0 auto;
    background-color: #e6e6e6;
}
	</style>
	
	<script src="script.js"></script>
</head>
<body>
	<div class="container mt-5" >
		<div class="row">
			<div class="formu offset-md-3" style="background-color: #e6e6e6;">
				<h2 class="mb-3 text-center pt-2">Add Member To SAE CC List</h2>
				<form method="post" action="addMember.php" class="p-2">
					<div class="mb-3">
						<label for="registration" class="form-label">Registration ID :</label>
						<input type="text" class="form-control" name="registrationID" id="registration" placeholder="Enter Registration Number" required>
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
                            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Enter First Name" required>
                        </div>
						<div class="d-grid me-2">
                           <label for="middleName" class="form-label">Middle Name :</label> 
						
						<input type="text" class="form-control" name="middleName" id="middleName" placeholder="Enter Middle Name" required>
						
                        </div>
                        <div class="d-grid">
                            <label for="lastName" class="form-label">Last Name :</label>
						<input type="text" class="form-control" name="lastName" id="lastName" placeholder="Enter Last Name" required>
                        </div>
						
					</div>
					<div class="d-flex justify-content-between mb-3">
                        <div class="d-grid me-2">
                            <label for="email" class="form-label">Email address :</label>
						    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Institute Email" required>
                        </div>
						<div class="d-grid me-2">
                            <label for="contact" class="form-label">Contact Number :</label>
						    <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter contact number" required>
                        </div>
                        
                        <div class="d-grid">
                            <label for="year" class="form-label">Acad Year :</label>
						<select class="form-select" name="year" id="year" required>
							<option selected disabled>Select Year</option>
							<option>FY</option>
							<option>SY</option>
							<option>TY</option>
							<option>B.Tech</option>
							<option>PO</option>
							<option>FA</option>
						</select>
                        </div>
					</div>

					<div class="d-flex justify-content-between mb-3">
						<div>
                            <label for="gender" class="form-label">Gender :</label>
						<select class="form-select" name="gender" id="gender" required>
							<option selected disabled>Select Gender</option>
							<option value="M">Male</option>
							<option value="F">Female</option>
							<option>Other</option>
						</select>
                        </div>
                        <div>
                            <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="dob" id="dob" required>
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
							<option selected disabled>Select Joining Year</option>
                            
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
							<option selected disabled>Select College</option>
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
							<option selected disabled>Select Branch</option>
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
							<option selected disabled>Select Status</option>
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
