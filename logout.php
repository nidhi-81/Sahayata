<?php
session_start();
echo $_SESSION['username'];
session_unset();
session_destroy();

echo " you have logged out successfully";
//header('location:login.php');

?>
