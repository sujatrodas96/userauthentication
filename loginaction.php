<?php
session_start();
include("connection.php");
$email=$_REQUEST['email'];
$password=md5($_REQUEST['password']);
$sql="SELECT * FROM `users` WHERE email='$email' AND password='$password'";
$data=mysqli_query($conn,$sql);// Performs a query on the database
$res=mysqli_num_rows($data);//return the number of rows present in the result set
if($res)
{
	$result=mysqli_fetch_assoc($data);//fetches a result row as an associative array.
	$_SESSION['id']=$result['id'];
	header("location:display.php");
	// echo "login success";
}
else
{
	echo "login failure";
}
?>