<?php
	include('Database Connection file/mysqli_connect.php');

	$id = $_GET['product'];

	$sql="delete from product where productid='$id'";
	$dbc->query($sql);

	header('location:product.php');
?>
