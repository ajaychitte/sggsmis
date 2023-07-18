<?php
session_start();

// Redirect the user to the login page if they are not logged in
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Module</title>
  <link rel="stylesheet" href="style.css">
  
    <?php include 'links.php' ?>  
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
      
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="navbar-brand" href="#"><img src="https://www.sggs.ac.in/uploads/logos/logo.jpeg" alt="University of Education and knowledge" width="50" height="35"></a>
                    <a class="nav-link fs-4 active" aria-current="page" href="home.php">Home</a>
                    <a class="nav-link fs-4"  href="about.php">About Us</a>
                    <a class="nav-link fs-4"  href="help.php">Help</a>

                </div>
                
            </div>
            <div class="d-flex">
                    <a href="logout.php" class="btn btn-danger btn-lg">Logout</a>
                </div>
        </div>
    </nav>


	<div class="container center-div mb-4 mt-2">
        <h1 class="heading text-center">Welcome to Student Module</h1>    
  </div>
   
      <div class="row">
        <div class="col-md-12">
                <div class="d-flex gap-2 m-4">
                  <div class="input-group ">
  
  <button class="btn btn-primary btn-lg dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">Show All</button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item" id="showAll"  href="showAll.php">Show All</a></li>
    
    </ul>
</div>

<div class="input-group ">  
  <button class="btn btn-primary btn-lg dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">Student List</button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item" id="studentList" href="studentList.php">All</a></li>
    <li><a onclick="getContent('popup.php', 'container')" class="dropdown-item" id="popup"  href="#">Year</a></li>
         
  </ul>
</div>
<div class="input-group ">
  
  <button class="btn btn-primary btn-lg dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">Faculty List</button>
  <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" id="studentList" href="facultyList.php">All</a></li>
        <li><a onclick="getContent('popup1.php', 'container')" class="dropdown-item" id="popup1"  href="#">Year</a></li>
   
  </ul>
</div>
<div class="input-group ">
  
  <button class="btn btn-primary btn-lg dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">Female List</button>
  <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" id="studentList" href="femaleList.php">All</a></li>
        <li><a onclick="getContent('popup2.php', 'container')" class="dropdown-item" id="popup2"  href="#">Year</a></li>

    </ul>
</div>




  </div>

  <div class="row mb-3">
    <div class="col-md-12">
      <div class="d-flex gap-2 ms-4 me-4">
        <div class="input-group">
  
  <button class="btn btn-primary btn-lg dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">Team</button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a onclick="getContent('addTeam.php', 'container')" class="dropdown-item" id="addTeam" href="#">Create Team</a></li>
    <li><a onclick="getContent('addToTeam.php', 'container')" class="dropdown-item" id="editTeam" href="#">Add Member</a></li>
    <li><a onclick="getContent('popup3.php', 'container')" class="dropdown-item" id="popup3"  href="#">View Team</a></li>
    
    </ul>
</div>
        
        <div class="input-group ">
  
  <button class="btn btn-primary btn-lg dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">Export List</button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item" href="collegeList.php">College</a></li>
    <li><a class="dropdown-item" href="departmentList.php">Department</a></li>
    <li><a class="dropdown-item" href="branchList.php">Branch</a></li>
    <li><a class="dropdown-item" href="roleList.php">Roles</a></li>
    </ul>
</div>
        <div class="input-group ">
  
  <button class="btn btn-primary btn-lg dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">Add</button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a onclick="getContent('addMember.php', 'container')" class="dropdown-item" id="addMember"  href="#">Member</a></li>
    <li><a onclick="getContent('addCollege.php', 'container')" class="dropdown-item"  id="addCollege" href="#">College</a></li>
    <li><a onclick="getContent('addBranch.php', 'container')" class="dropdown-item" id="addBranch" href="#">Branch</a></li>
    <li><a onclick="getContent('addDepartment.php', 'container')" class="dropdown-item" id="addDepartment" href="#">Department</a></li>
    <li><a onclick="getContent('addRole.php', 'container')" class="dropdown-item" id="addRole" href="#">Role</a></li>
    </ul>
</div>
        
        <!-- <div class="input-group">
  
  <button class="btn btn-primary btn-lg dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">Delete</button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item" href="#">Member</a></li>
    <li><a class="dropdown-item" href="#">College</a></li>
    <li><a class="dropdown-item" href="#">Branch</a></li>
    <li><a class="dropdown-item" href="#">Department</a></li>
    <li><a class="dropdown-item" href="#">Role</a></li>
    </ul>
</div> -->

      </div>

    </div>

  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="container" id="container">

      </div>

    </div>
  </div>

    
<script src="script.js"></script>
</body>
</html>
