<?php
session_start();
header('location:adminlogin.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'rsdp');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from admin where name = '$name' && password = '$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $name;
	header('location:admin.php');
	}else{
	header('location:adminlogin.php');
	}
