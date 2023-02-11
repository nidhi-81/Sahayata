<?php
session_start();
header('location:login.html');

$con = mysqli_connect('localhost','root','','complaints_database');
if($con){
echo" connected";
}
else{
	echo"not connected";
}

$name = $_POST['email'];
$pass = $_POST['password'];

if(empty($name)){
	echo "Authentication error,username is required";
	header("Location: login.html");
	exit();
}
else if(empty($pass)){
	header("Location: login_form.html");
	echo "Authentication error,password is required";
	exit();
}
else{
$q = "select * from register where email ='$name' and psw= '$pass'";
}

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num==1)
{
	$_SESSION['email'] = $name;
	header('location:welcome.php');
}
?>
