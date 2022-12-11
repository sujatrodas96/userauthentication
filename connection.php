<?php

$servername="localhost";
$user="root";
$password="";
$db="authentication";
$conn=mysqli_connect($servername,$user,$password,$db);
if($conn)
{
	//echo "connected";
}
else
{
	die("connection error".mysqli_connect_error());
}
?>