<?php
	include('Database Connection file/mysqli_connect.php');
	if(isset($_POST['productid'])){

		$customer=$_POST['customer'];
		$sql="insert into orders (customer, date_purchase) values ('$customer', NOW())";
		$dbc->query($sql);
		$pid=$dbc->insert_id;

		$total=0;

		foreach($_POST['productid'] as $product):
		$proinfo=explode("||",$product);
		$productid=$proinfo[0];
		$iterate=$proinfo[1];
		$sql="select * from product where productid='$productid'";
		$query=$dbc->query($sql);
		$row=$query->fetch_array();

		if (isset($_POST['quantity_'.$iterate])){
			$subt=$row['price']*$_POST['quantity_'.$iterate];
			$total+=$subt;

			$sql="insert into purchase_detail (orderid, productid, quantity) values ('$pid', '$productid', '".$_POST['quantity_'.$iterate]."')";
			$dbc->query($sql);
		}
		endforeach;

 		$sql="update orders set total='$total' where orderid='$pid'";
 		$dbc->query($sql);
		header('location:user_sales.php');
	}
	else{
		?>
		<script>
			window.alert('Please select a product');
			window.location.href='order.php';
		</script>
		<?php
	}
?>
