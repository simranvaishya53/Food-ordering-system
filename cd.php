<?php
	
	if(isset($_POST['submit'])){

		$customer=$_POST['customer'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$sql="insert into c_details (c_name, c_email, c_phone, c_address) values ('$customer', '$email', '$phone', '$address')";
		$dbc->query($sql);
	}
		?>
