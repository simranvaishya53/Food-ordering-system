<?php include('header.php'); ?>

<html>
	<head>
		<title>
			D'crepes cafe Order
		</title>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	<style type="text/css">

		body{
			background-image: url('order-img1.jpg');
		  	height: 100%;
  			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
  			background-attachment: fixed;
		}

		h1{

			padding-top: 80px;
			font-size: 40pt;
			font-style: bold;
			color: #3c2a1e;
		}

		td,th{
			padding: 15px;
			color:#3c2a1e ;
			font-style: bold;
			text-align: center;
					}

		.container{

			padding-left: 100px;
			text-align: center;
		}
		.glow-on-hover {
		    width: 220px;
		    height: 50px;
		    border: none;
		    outline: none;
		    color: #fff;
		    background: #111;
		    cursor: pointer;
		    position: relative;
		    z-index: 0;
		    border-radius: 10px;
		}

		.glow-on-hover:before {
		    content: '';
		    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
		    position: absolute;
		    top: -2px;
		    left:-2px;
		    background-size: 400%;
		    z-index: -1;
		    filter: blur(5px);
		    width: calc(100% + 4px);
		    height: calc(100% + 4px);
		    animation: glowing 20s linear infinite;
		    opacity: 0;
		    transition: opacity .3s ease-in-out;
		    border-radius: 10px;
		}

		.glow-on-hover:active {
		    color: #000
		}

		.glow-on-hover:active:after {
		    background: transparent;
		}

		.glow-on-hover:hover:before {
		    opacity: 1;
		}

		.glow-on-hover:after {
		    z-index: -1;
		    content: '';
		    position: absolute;
		    width: 100%;
		    height: 100%;
		    background: #111;
		    left: 0;
		    top: 0;
		    border-radius: 10px;
		}

		@keyframes glowing {
		    0% { background-position: 0 0; }
		    50% { background-position: 400% 0; }
		    100% { background-position: 0 0; }
		}

</style>
</head>
<body>

<?php include('navorder.php'); ?>
<div class="container">
	<h1>ORDER</h1><br>
	<form method="POST" action="purchase.php">
		<table class="order-table">
			<thead>
				<th class="text-center"><input type="checkbox" id="checkAll"></th>
				<th>Category</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Quantity</th>
			</thead>
			<tbody>
				<?php
					$sql="select * from product left join category on category.categoryid=product.categoryid order by product.categoryid asc, productname asc";
					$query=$dbc->query($sql);
					$iterate=0;
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td class="text-center"><input type="checkbox" value="<?php echo $row['productid']; ?>||<?php echo $iterate; ?>" name="productid[]" style=""></td>
							<td><?php echo $row['catname']; ?></td>
							<td><?php echo $row['productname']; ?></td>
							<td class="text-center">&#x20A8; <?php echo number_format($row['price'], 2); ?></td>
							<td><input type="text" class="form-control" size="2" name="quantity_<?php echo $iterate; ?>"></td>
						</tr>
						<?php
						$iterate++;
					}
				?>
			</tbody>
		</table>

		<div class="row">
			<div class="col-md-3">
				<input type="text" name="customer" class="form-control" placeholder="Customer Name" required>
			</div>

			<div class="col-md-2" style="">
				<button type="submit" class="glow-on-hover">PAY NOW</button>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#checkAll").click(function(){
	    	$('input:checkbox').not(this).prop('checked', this.checked);
		});
	});
</script>
</body>
</html>
