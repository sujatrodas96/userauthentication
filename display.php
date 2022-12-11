<?php
session_start();
include('connection.php');
$id=$_SESSION['id'];
$sql="SELECT * FROM users WHERE id='$id' ";
$data=mysqli_query($conn,$sql);// Performs a query on the database
$res=mysqli_fetch_assoc($data);//return the number of rows present in the result set
?>
<h1>profile</h1><h2><a href="logout.php">logout</a></h2>
<table border="1" cellpadding="10">
	<tr>
		<th>ID</th>
		<th>name</th>
		<th>email</th>
		<th>phone</th>
	</tr>
	<tr>
		<td><?php echo $res['id']?></td>
		<td><?php echo $res['name']?></td>
		<td><?php echo $res['email']?></td>
		<td><?php echo $res['phone']?></td>
	</tr>
</table>

    