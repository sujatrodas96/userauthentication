<?php
session_start();
include("connection.php");
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=md5($_REQUEST['password']);
$phnno=$_REQUEST['phone'];
$sql="INSERT INTO `users`(`id`, `name`, `email`, `password`, `phone`) VALUES ('','$name','$email','$password','$phnno')";
$data=mysqli_query($conn,$sql);
if($data)
{
	header('location:login.php');
}
else
{
	echo "data not inserted";
}
?>