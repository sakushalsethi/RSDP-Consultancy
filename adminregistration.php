<?php
session_start();
header('location:adminregister.php');
header('location:adminlogin.php');
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'rsdp');

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];


$s = " select * from admin where name = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo"Username Already Taken";
}else{
	$reg="insert into admin(name, email, password) values ('$name','$email','$pass')";
	mysqli_query($con,$reg);
	echo"Registration Successful";
}
