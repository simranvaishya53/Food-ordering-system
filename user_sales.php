<?php include('header.php'); ?>
<?php include('navorder.php'); ?>
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
	background-image: url('user_sales.jpg');
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
	color: #e0e0e0;
	}
	.sales-table-a{
	color:#8B4513;
	font-style: bold;
	font-size: 200%;
	font-weight: 600;
	text-align: center;
	}
	@import url("https://fonts.googleapis.com/css?family=Rubik:500");
	* {
	  padding: 0;
	  margin: 0;
	}


	.button {
	  padding: 16px 42px;
	  box-shadow: 0px 0px 12px -2px rgba(0, 0, 0, 0.5);
	  line-height: 1.25;
	  background: #FC6E51;
	  text-decoration: none;
	  color: white;
	  font-size: 16px;
	  letter-spacing: 0.08em;
	  text-transform: uppercase;
	  position: relative;
	  transition: background-color 0.6s ease;
	  overflow: hidden;
	}
	.button:after {
	  content: "";
	  position: absolute;
	  width: 0;
	  height: 0;
	  top: 50%;
	  left: 50%;
	  transform-style: flat;
	  transform: translate3d(-50%, -50%, 0);
	  background: rgba(255, 255, 255, 0.1);
	  border-radius: 100%;
	  transition: width 0.3s ease, height 0.3s ease;
	}
	.button:focus, .button:hover {
	  background: #fb512e;
	}
	.button:active:after {
	  width: 200px;
	  height: 200px;
	}

	</style>
	</head>

<body >

<div class="container">

	<h1 class="page-header text-center" style="font-family: 'Londrina Solid', cursive; font-style: bold; font-size: 300%;
	font-weight: 900;">MY ORDER</h1>
	<table class="table table-bordered" >
		<thead class="sales-table">
			<th>DATE</th>
			<th>NAME</th>
			<th>TOTAL SALES</th>
			<th>DETAILS</th>

		</thead>
		<tbody>
		<?php
				$sql="select * from orders order by orderid desc limit 1";
				$query=$dbc->query($sql);
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td class="sales-table-a"><?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?></td>
						<td class="sales-table-a"><?php echo $row['customer']; ?></td>
						<td class="sales-table-a text-right">&#8369; <?php echo number_format($row['total'], 2); ?></td>
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
<br>
<a href="end.php" class="button">Done</a>

</body>
</html>
