<?php
session_start();

$con = mysqli_connect('localhost','root','','complaints_database');
if($con){
echo" connected";
}
else{
	echo"not connected";
}

$name = $_POST['email'];
$pass = $_POST['psw'];
$locality= $_POST['locality'];

if(empty($name)){
	echo "Authentication error,username is required";
	
	exit();
}
else if(empty($pass)){
	;
	echo "Authentication error,password is required";
	exit();
}

$q = "select * from register where email ='$name' and psw= '$pass'";
echo " the email is  and psw is: ". $name . $pass;

$result = mysqli_query($con,$q);
echo "result is : ".$result;

if($result!=0)
{
	echo " incorrect id or password.";
}

else{

	echo " name had value : ".$name;
	$_SESSION['username'] = $name;
	$_SESSION['locality'] = $locality;

	header('location:welcome.php');
	
}

?>
