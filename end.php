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
			h2{
				  font-family: Brush Script MT, Brush Script Std, cursive;
				  font-size: 500%;
				  padding: 30px 15px;
				  left: 550px;
				  width: 600px;
  				  height: 100px;
				  background: white;
				  position: relative;
				  animation: mymove 5s infinite;
			}
			h3{
				  font-family: Jazz LET, fantasy;font-family: 'Londrina Solid', cursive;
				  font-style: bold;
				  font-size: 220%;
				  font-weight: 900;
				  color:#8B4513;
				  padding: 30px 15px;
				  text-align: center;
				  top:150px;
				  left: 550px;
				  width: 600px;
  				  height: 100px;
				  background: white;
				  position: relative;
			}

			@keyframes mymove{
 				 from {top: 0px;}
 				 to {top: 150px;}}

		</style>
  </head>
  <body>
  <?php include('navorder.php'); ?>

<h2> Thank you for ordering, </h2>
<?php
				$sql="select * from orders order by orderid desc limit 1";
				$query=$dbc->query($sql);
				while($row=$query->fetch_array()){
					?>
<h2><?php echo $row['customer']; ?> !</h2><h3><br>Your order-id is : <?php echo $row['orderid']; ?><br><br><br>Your food is being prepared</h3>
<?php
		}
			?>
<div>
<img src="https://tenor.com/view/siamese-cat-cook-ilove-cooking-ilove-food-gif-16836764.gif">
</div>

</body>
</html>
