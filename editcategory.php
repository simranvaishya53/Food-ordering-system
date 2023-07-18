<?php
	include('Database Connection file/mysqli_connect.php');

	$id=$_GET['category'];

	$cname=$_POST['cname'];

	$sql="update category set catname='$cname' where categoryid='$id'";
	$dbc->query($sql);

	header('location:category.php');
?>
