<?php include('header.php'); ?>

<body>

<div class="bg-image img1"></div>
<div class="bg-image img2"></div>
<div class="bg-text">
  <img src="./assets/imgs/logo.jpg" width="20%" height="20%" >
<div class="container">
	<h1 class="page-header text-center" style="font family:Bradley Hand, cursive">MENU</h1>
	<ul class="nav nav-tabs">
    <?php include('navorder.php'); ?>
		<?php
			$sql="select * from category order by categoryid asc limit 1";
			$fquery=$dbc->query($sql);
			$frow=$fquery->fetch_array();
			?>
				<li class="active"><a data-toggle="tab" href="#<?php echo $frow['catname'] ?>"><?php echo $frow['catname'] ?></a></li>
			<?php

			$sql="select * from category order by categoryid asc";
			$nquery=$dbc->query($sql);
			$num=$nquery->num_rows-1;

			$sql="select * from category order by categoryid asc limit 1, $num";
			$query=$dbc->query($sql);
			while($row=$query->fetch_array()){
				?>
				<li><a data-toggle="tab" href="#<?php echo $row['catname'] ?>"><?php echo $row['catname'] ?></a></li>
				<?php
			}
		?>
	</ul>

	<div class="tab-content">
		<?php
			$sql="select * from category order by categoryid asc limit 1";
			$fquery=$dbc->query($sql);
			$ftrow=$fquery->fetch_array();
			?>
				<div id="<?php echo $ftrow['catname']; ?>" class="tab-pane fade in active" style="margin-top:20px;">
					<?php



						$sql="select * from product where categoryid='".$ftrow['categoryid']."'";
						$pfquery=$dbc->query($sql);
						$inc=4;
						while($pfrow=$pfquery->fetch_array()){
							$inc = ($inc == 4) ? 1 : $inc+1;
							if($inc == 1) echo "<div class='row'>";
							?>

								<div class="col-md-3">
									<div class="panel panel-default">
										<div class="panel-heading text-center">
											<b><?php echo $pfrow['productname']; ?></b>
										</div>
										<div class="panel-body">
											<img src="<?php if(empty($pfrow['photo'])){echo "upload/noimage.jpg";} else{echo $pfrow['photo'];} ?>" height="225px;" width="100%">
										</div>
										<div class="panel-footer text-center" style="color: black";>
											&#x20A8; <?php echo number_format($pfrow['price'], 2); ?>
										</div>

									</div>
								</div>

							<?php
							if($inc == 4) echo "</div>";
						}
						if($inc == 1) echo "<div class='col-md-3'></div><div class='col-md-3'></div><div class='col-md-3'></div></div>";
						if($inc == 2) echo "<div class='col-md-3'></div><div class='col-md-3'></div></div>";
						if($inc == 3) echo "<div class='col-md-3'></div></div>";
					?>
		    	</div>
			<?php

			$sql="select * from category order by categoryid asc";
			$tquery=$dbc->query($sql);
			$tnum=$tquery->num_rows-1;

			$sql="select * from category order by categoryid asc limit 1, $tnum";
			$cquery=$dbc->query($sql);
			while($trow=$cquery->fetch_array()){
				?>
				<div id="<?php echo $trow['catname']; ?>" class="tab-pane fade" style="margin-top:20px;">
					<?php


						$sql="select * from product where categoryid='".$trow['categoryid']."'";
						$pquery=$dbc->query($sql);
						$inc=4;
						while($prow=$pquery->fetch_array()){
							$inc = ($inc == 4) ? 1 : $inc+1;
							if($inc == 1) echo "<div class='row'>";
							?>

								<div class="col-md-3" >
									<div class="panel panel-default" >
										<div class="panel-heading text-center">
											<b><?php echo $prow['productname']; ?></b>
										</div>
										<div class="panel-body">
											<img src="<?php if($prow['photo']==''){echo "upload/noimage.jpg";} else{echo $prow['photo'];} ?>" height="225px;" width="100%">
										</div>
										<div class="panel-footer text-center" style="color: black";>
											&#x20A8; <?php echo number_format($prow['price'], 2); ?>
										</div>

									</div>
								</div>

							<?php
							if($inc == 4) echo "</div>";
						}
						if($inc == 1) echo "<div class='col-md-3'></div><div class='col-md-3'></div><div class='col-md-3'></div></div>";
						if($inc == 2) echo "<div class='col-md-3'></div><div class='col-md-3'></div></div>";
						if($inc == 3) echo "<div class='col-md-3'></div></div>";
					?>
		    	</div>
				<?php
			}
		?>
	</div>

</div>
</div>
</body>

</html>
