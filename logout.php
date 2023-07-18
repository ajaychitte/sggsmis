<?php 
session_start();
session_destroy();
echo "<script>if (confirm('Logout SUCCESSFUL !')) {
   window.location.href = 'index.php';
}</script>";



?>