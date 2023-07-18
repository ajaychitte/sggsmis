<!DOCTYPE html>
<html>
<head>
	<title>Department List</title>
    <?php include 'links.php' ?>
	
</head>
<body>
    <div>
    <a class="btn btn-info mt-3 ms-3" href="student.php">Back To Dashboard</a>
  </div>
	<div class="container mt-5">
		<div class="row">
			  <table id="example" class="table display" >
  <thead>
    <tr>
      <th scope="col">Department ID</th>
      <th scope="col">Department Name</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    $con= mysqli_connect("sql111.epizy.com","epiz_34114828","h1aMXRVCMDM");
    $db= mysqli_select_db($con,'epiz_34114828_majorproject');
    $result=mysqli_query($con,"SELECT * FROM `dept`");
    while($row=mysqli_fetch_assoc($result)){
      echo "
      <tr>
      <td>$row[DeptId]</td>
      <td>$row[DeptName]</td>

      
    </tr>
      
      ";
    }
    
    ?>
  </tbody>

</table>
		</div>
	</div>


  <script>
  $(document).ready(function () {
    $('#example').DataTable({
       dom: 'Blfrtip',
      buttons: [
        'copy','csv','excel','pdf','print'
      ]
    });
});
</script>
	
</body>
</html>
