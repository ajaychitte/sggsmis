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
    $search_team = $_GET['team'];
    $sql = "SELECT * FROM `{$search_team}` WHERE RegId ='$search_id'";

	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);

if (isset($_GET['id'])) {
    $id = $_GET["id"];
    $team = $_GET["team"];
    
    $sqll = "DELETE FROM `$team` WHERE `$team`.`RegId` = '$id';";
    $resultt = mysqli_query($con, $sqll);
    if($resultt===true){
        echo"<script>if (confirm(' {$id} Deleted from Member List')) {
   window.location.href = 'student.php';
}</script>";
    }
    else{
        echo "Can't Delete";
        die(mysqli_error($con));
    }
}

//header('Location: showall.php');
// exit();

?>