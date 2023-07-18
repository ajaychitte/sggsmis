<?php
session_start();
$con= mysqli_connect("sql111.epizy.com","epiz_34114828","h1aMXRVCMDM");
    


if(!$con){
    echo "Failed";
}
$db= mysqli_select_db($con,'epiz_34114828_majorproject');

if(isset($_POST['submit'])){
    $username= $_POST['userName'];
    $password= $_POST['password'];


    $sql= "select * from admintable where BINARY username= '$username' and BINARY password= '$password' ";

    $query = mysqli_query($con, $sql);
    $row= mysqli_num_rows($query);
        if($row==1){
            $_SESSION['loggedin'] = true;
            echo "<script>if (confirm('Welcome {$username}!')) {
   window.location.href = 'home.php';
}</script>";
            //$_SESSION['user']=$username;
            //header('location:home.php');
            exit();
        }
        else{
            echo "<script>if (confirm('Error: Login Failed for {$username}! Check your Credentials.')) {
   window.location.href = 'index.php';
}</script>";
            //header('location: index.php');
            exit();
        }
    

}

?>