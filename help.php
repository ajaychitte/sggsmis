
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
   
    <?php include 'links.php' ?>
     <link rel="stylesheet" href="style.css">
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
                    <a class="nav-link fs-4" aria-current="page" href="home.php">Home</a>
                    <a class="nav-link fs-4" href="about.php">About Us</a>
                    <a class="nav-link active fs-4" href="help.php">Help</a>

                </div>
                
            </div>
            <div class="d-flex">
                    <a href="logout.php" class="btn btn-danger btn-lg">Logout</a>
                </div>
        </div>
    </nav>
	<div class="container center-div">
        <h1 class="heading text-center">Welcome to MIS Help Desk</h1>
    <div class="d-flex">
        <button class="btn btn-primary container row mt-2 me-2">User Guide For MIS</button>
    <button class="btn btn-primary container row mt-2 ms-2"><a style="text-decoration:none;color:white;" href="#shorthandID">Shorthand ID</a></button>
    </div>
    
    </div>
    

  <div class="container center-div">
    <div class="row mt-4">
       <div class="col-md-3 bg-light"><h5>1. Show All :</h5></div>
        <div class="col-md-9 bg-light" style="text-align:justify;">
            On clicking this button the data related student and faculty is shown. We can get the data
of all students or the data of particular year by entering year. We can restrict the
number of entries shown in the table by using dropdown menu available on the web
page. We can also restrict the visibility of columns by using Column Visibility button.
We can add member by clicking on Add member button which is available on the top
left corner of web page. We can edit member details by clicking on edit button which
is available on the right side of each entry. We can easily search the required data by
using search bar. We can also sort data by clicking on the particular column. We can
download and print required data by using tabs like CSV, Excel, PDF, Print.
<p>
  I. Add Member to SAE CC:
This form is used add new student and faculty to the database. It contains
some mandatory field that need to be filled to successfully submit the form.
</p>
<p>
  II. Edit Member:
Through this we can edit the information of existing member in database.
</p>
        </div>  
       <div class="col-md-3 mt-2"><h5>2. Student List :</h5></div>
        <div class="col-md-9 mt-2" style="text-align:justify;">
            We can get the list of all student or year wise by using dropdown menu which will be
available when we click on student list. This displays a table of student information
fetched from database. It uses the DataTables plugin to enable search, sort,
and filter functionalities for the table. We can search data using search bar which is
available on right corner of the page. We can download and print required data by
using tabs like CSV, Excel, PDF, Print.

        </div>  
       <div class="col-md-3 mt-2 bg-light"><h5>3. Faculty List :</h5></div>
        <div class="col-md-9 mt-2 bg-light" style="text-align:justify;">
            We can get the list of all faculty members or year wise by using dropdown menu
which will be available when we click on Faculty list. This displays a table of faculty
information fetched from database. It also have all the functionalities to export the data.

        </div>  
       <div class="col-md-3 mt-2"><h5>4. Female List :</h5></div>
        <div class="col-md-9 mt-2" style="text-align:justify;">
           We can get the list of all female student or year wise by using dropdown menu which
will be available when we click on Female list. This displays a table of female
student information fetched from database. It also have all the functionalities to export the data.

        </div>  
       <div class="col-md-3 mt-2 bg-light"><h5>5. Team :</h5></div>
        <div class="col-md-9 mt-2 bg-light" style="text-align:justify;">
        <p>
            <b>a. Create Team:</b>

It that allows an admin to add a new team to a database. Through this form user to
enter Team Name along with year. Once team is created one can add members to that
team with Add Member tab which is available in Team button dropdown menu.
        </p>

<p>
  <b>b. Add member to the team:</b>
It that allows an admin to add a new member in team of particular year to a database.
Through this form user to enter the Team Name, Registration ID, Year, SAE ID,
Department ID, Role ID, Member ID which will be added into the database.
</p>

<p>
  <b>c. View Team:</b>
With is dropdown menu tab we can view all the team members and faculty adviser of
that particular year. Once we selected year, we get all the data of that year. We can
edit and delete data. It uses the DataTables plugin to enable search, sort, and filter
functionalities for the table. We can search data using search bar which is available on
right corner of the page. We can download and print required data by using tabs like
CSV, Excel, PDF, Print.
</p>

        </div>  
       <div class="col-md-3 mt-2"><h5>6. Export List :</h5></div>
        <div class="col-md-9 mt-2" style="text-align:justify;">
        This tab is used to get data related to collage, department, role, and branch:
        <p>
            <b>a. Collage:</b>

This gives list of collage DTE codes and collage names. It uses the DataTables plugin
to enable search, sort, filter and export functionalities for the table.
        </p>

<p>
  <b>b. Department:</b>
This gives list of department ID and department names. It uses the DataTables plugin
to enable search, sort, filter and export functionalities for the table.
</p>

<p>
  <b>c. Branch:</b>
This gives list of branch ID and Branch names. It uses the DataTables plugin to enable
search, sort, filter and export functionalities for the table.
</p>
<p>
  <b>d. Role:</b>
This gives list of role ID and role names. It uses the DataTables plugin to enable
search, sort, and filter functionalities for the table.
</p>

        </div>  
        <div class="col-md-3 bg-light"><h5>7. Add :</h5></div>
        <div class="col-md-9 bg-light" style="text-align:justify;">
            Add tab is used to add member to SAE CC , collage, branch, department, and role by
clicking on the tab we get dropdown menu by selecting one we get a form to add the
particular information.
<p>
 I. Add Member:
This form is used add new student and faculty to the database. It contains
some mandatory field that need to be filled to successfully submit the form.
</p>
<p>
 II. Add collage:
Through this form we can add new collage. This contain two field one is
Collage ID and another is Collage Name. In Collage ID field need to add
collage DTE code.
</p>
<p>
 III. Add branch:
Through this form we can add new branch. This contain two field one is
Branch ID and another is Branch Name.
</p>
<p>
IV. Add department:
Through this form we can add new department. This contain two field one is
Department ID, and another is Department Name.
</p>
<p>
V. Add Role:
Through this form we can add new role. This contain two field one is Role ID,
and another is Role Name.
</p>
        </div>  
        <div class="col-md-3 mt-2"><h5>8. Logout :</h5></div>
        <div class="col-md-9 mt-2" style="text-align:justify;">
            On clicking logout button the admin redirects to login page and logout the session for the admin.

        </div>

    </div>
      

  </div>
  <hr/> <hr/> 

    <div id="shorthandID" class="container center-div bg-light">
        <div class="row mt-4">
        <div class="col-md-3"><h5>1. Reg_ID :</h5></div>
        <div class="col-md-9">
            Reg_ID is the Registration Number of the student provided by the Institute.
        </div>             
    </div>
    <div class="row mt-2">
        <div class="col-md-3"><h5>2. SAE_ID :</h5></div>
        <div class="col-md-9">
            SAE_ID is provided to member when they register for SAE India Website.
        </div>             
    </div>
    <div class="row mt-2">
         <div class="col-md-3"><h5>3. Branch_ID :</h5></div>
        <div class="col-md-9">
            Branch_ID is the ID for the particular branch of the student. You can select the Branch_ID for your branch. <br>
<table class="table table-striped mt-2" >
  <tr>
    <th>Branch_ID</th>
    <th>Branch</th>
    </tr>
  <tr>
    <td>MECH</td>
    <td>Mechanical Engineering</td>   
  </tr>
  <tr>
    <td>PROD</td>
    <td>Production Engineering</td>   
  </tr>
  <tr>
    <td>CHEM</td>
    <td>Chemical Engineering</td>   
  </tr>
  <tr>
    <td>TEXT</td>
    <td>Textile Engineering</td>   
  </tr>
  <tr>
    <td>CSE</td>
    <td>Computer Science Engineering</td>   
  </tr>
  <tr>
    <td>IT</td>
    <td>Information Technology</td>   
  </tr>
  <tr>
    <td>CIVIL</td>
    <td>Civil Engineering</td>   
  </tr>
  <tr>
    <td>EXTC</td>
    <td>Electronics & Telecommunication Engineering</td>   
  </tr>
  <tr>
    <td>EE</td>
    <td>Electrical Engineering</td>   
  </tr>
  <tr>
    <td>INSTRU</td>
    <td>Instrumentation Engineering</td>   
  </tr>
</table>
 </div>
 </div>
    <div class="row mt-2">
        <div class="col-md-3">
           <h5>4. Dept_ID :</h5>
        </div>
        <div class="col-md-9">Dept_ID is the ID for the department of student in the Team Phoenix.
             <table class="table table-striped mt-2">
  <tr>
    <th>Dept_ID</th>
    <th>Department</th>
    </tr>
  <tr>
    <td>CAE</td>
    <td>Computer Aided Engineering</td>   
  </tr>
  <tr>
    <td>BRK</td>
    <td>Braking Department</td>   
  </tr>
  <tr>
    <td>DA</td>
    <td>Design & Analysis Department</td>   
  </tr>
  <tr>
    <td>SS</td>
    <td>Steering & Suspension Department</td>   
  </tr>
  <tr>
    <td>TRANS</td>
    <td>Transmission Department</td>   
  </tr>
</table>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-3"><h5>5. College_ID :</h5></div>
        <div class="col-md-9">
            College_ID is the DTE code of the Institute provided by the Government. For SGGS it is 2020. <a href="http://www.dtemaharashtra.gov.in/StaticPages/frmInstituteList.aspx?did=63" target="_blank">Click Here for DTE Codes.</a> 
        </div>     
    </div>
    <div class="row mt-2">
        <div class="col-md-3"><h5>6. Role_ID :</h5></div>
        <div class="col-md-9">
            Role_ID is for the Role of member in the Team.
             <table class="table table-striped mt-2">
                  <tr>
                    <th>Role_ID</th>
                    <th>Role/Postion</th>
                    </tr>
                  <tr>
                    <td>CPT</td>
                    <td>Captain</td>   
                  </tr>
                  <tr>
                    <td>VCPT</td>
                    <td>Vice Captain</td>   
                  </tr>
                  <tr>
                    <td>DR1</td>
                    <td>Primary Driver</td>   
                  </tr>
                  <tr>
                    <td>DR2</td>
                    <td>Secondary Driver</td>   
                  </tr>
                  <tr>
                    <td>TMG</td>
                    <td>Team Manager</td>   
                  </tr>
                  <tr>
                    <td>TM</td>
                    <td>Team Member</td>   
                  </tr>
                  <tr>
                    <td>FA1</td>
                    <td>Faculty Advisor</td>   
                  </tr>
                  <tr>
                    <td>FA2</td>
                    <td>Faculty Advisor</td>   
                  </tr>
</table> 
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-3"><h5>7. Status_ID :</h5></div>
        <div class="col-md-9">
            Status_ID is used to show the current status of the member in the Team.
             <table class="table table-striped mt-2">
  <tr>
    <th>Status_ID</th>
    <th>Member Status</th>
    </tr>
  <tr>
    <td>SW</td>
    <td>Student Studying & Working in the Team</td>   
  </tr>
  <tr>
    <td>SNW</td>
    <td>Student Currently studying but not Working in the Team</td>   
  </tr>
  <tr>
    <td>FA</td>
    <td>Faculty Advisor</td>   
  </tr>
  <tr>
    <td>AL</td>
    <td>Alumni</td>   
  </tr>
</table> 
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-3"><h5>8. Year_ID :</h5></div>
        <div class="col-md-9">
            Year_ID is used to show the current Academic Year of the member.
             <table class="table table-striped mt-2">
  <tr>
    <th>Year_ID</th>
    <th>Academic Year</th>
    </tr>
  <tr>
    <td>FY</td>
    <td>First Year</td>   
  </tr>
  <tr>
    <td>SY</td>
    <td>Second Year</td>   
  </tr>
  <tr>
    <td>TY</td>
    <td>Third Year</td>   
  </tr>
  <tr>
    <td>B.Tech</td>
    <td>Final Year</td> 
  </tr>
  <tr>
    <td>PO</td>
    <td>Passed Out</td> 
  </tr>
</table> 
        </div>
    </div>

    </div>
    
</body>
</html>
