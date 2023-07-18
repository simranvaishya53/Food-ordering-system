<?php
	include('Database Connection file/mysqli_connect.php');

	$id = $_GET['category'];

	$sql="delete from category where categoryid='$id'";
	$dbc->query($sql);

	header('location:category.php');
?>
