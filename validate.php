<?php
session_start();
 //header('location:login.html');

$con = mysqli_connect('localhost','root','','complaints_database');
if($con){
echo" connected";
}
else{
	echo"not connected";
}

$name = $_POST['email'];
$pass = $_POST['psw'];

if(empty($name)){
	echo "Authentication error,username is required";
	//header("Location: login.html");
	exit();
}
else if(empty($pass)){
	//header("Location: login.html");
	echo "Authentication error,password is required";
	exit();
}

$q = "select * from register where email ='$name' and psw= '$pass'";
echo " the email is  and psw is: ". $name . $pass;

$result = mysqli_query($con,$q);
echo "result is : ".$result;
//$num = mysqli_num_rows($result);
 

if($result!=0)
{
	echo " incorrect id or password.";
}


else{

	echo " name had value : ".$name;
	$_SESSION['username'] = $name;
	header('location:welcome.php');
	
}

	

?>

