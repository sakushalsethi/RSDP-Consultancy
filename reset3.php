<?php
$email = $_POST['email'];




$conn = new mysqli('localhost','root', '','rsdp');
if($conn->connect_error){
die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into reset3(email)
	values(?)");
	$stmt->bind_param("s",$email);
	$stmt->execute();
	header('location:reset4.php');
	$stmt->close();
	$conn->close();
}


?>
