<?php
$name = $_POST['name'];
$feedback = $_POST['feedback'];
$comments = $_POST['comments'];



$conn = new mysqli('localhost','root', '','rsdp');
if($conn->connect_error){
die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into review(name, feedback, comments)
	values(?, ?, ?)");
	$stmt->bind_param("sss",$name, $feedback, $comments);
	$stmt->execute();
	header('location:review3.php');
	$stmt->close();
	$conn->close();
}


?>
