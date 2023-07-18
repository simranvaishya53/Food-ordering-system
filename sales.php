<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<html>
	<head>
		<title>
			D'crepes cafe Sales
		</title>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	<style type="text/css">
	body{
	text-align: center;
	background-image: url('sales_img.jpg');
	background-position: center;
 	background-repeat: no-repeat;
  	background-size: cover;
  	background-attachment: fixed;
	}

	.container{
	text-align: center;
	color: black;
	font-style: bold;
	}

	td, th {
	font-family: 'Londrina Solid', cursive;
	font-style: bold;
	font-size: 100%;
	color:black;
  	text-align: center;
  	padding: 40 px;
	}
	.sales-table{
	font-style: bold;
	font-size: 200%;
	font-weight: 900;
	color:black;
	}

	</style>
	</head>

<body >

<div class="container">

	<h1 class="page-header text-center" style="font-family: 'Londrina Solid', cursive; font-style: bold; font-size: 300%;
	font-weight: 900;">SALES</h1>
	<table class="table table-bordered" >
		<thead class="sales-table">
			<th>DATE</th>
			<th>CUSTOMER</th>
			<th>TOTAL SALES</th>
			<th>DETAILS</th>

		</thead>
		<tbody>
		<?php
				$sql="select * from orders order by orderid desc";
				$query=$dbc->query($sql);
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td class="sales-table"><?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?></td>
						<td class="sales-table"><?php echo $row['customer']; ?></td>
						<td class="sales-table text-right">&#8369; <?php echo number_format($row['total'], 2); ?></td>
						<td><a href="#details<?php echo $row['orderid']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> View </a>
							<?php include('sales_modal.php'); ?>
						</td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
</div>

</body>
</html>
