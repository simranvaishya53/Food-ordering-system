<?php
	include('Database Connection file/mysqli_connect.php');

	$cname=$_POST['cname'];

	$sql="insert into category (catname) values ('$cname')";
	$dbc->query($sql);

	header('location:category.php');

?>
