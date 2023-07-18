<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<head><style type="text/css">
	
	body{
		background-image:url('category.jpg');
			height: 100%;
  			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
  			background-attachment: fixed;
	}

	h1{
			text-align: center;
			padding-top: 120px;
			font-size: 35pt;
			font-style: bold;
			color: #3c2a1e;
			font-family: Jazz LET, fantasy;
		}
		td,th{
			color:black;
			font-family: 'Londrina Solid', cursive;
			font-style: bold;
			font-size: 200%;
			font-weight: 900;
		}
	
</style></head>
<body>
<div class="container" >
	<h1 >CATEGORY CRUD</h1>
	<div class="row">
		<div class="col-md-12">
			<a href="#addcategory" data-toggle="modal" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Category</a>
		</div>
	</div>
	<div style="margin-top:10px;">
		<table class="table table-bordered">
			<thead>
				<th>Category Name</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
					$sql="select * from category order by categoryid asc";
					$query=$dbc->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td><?php echo $row['catname']; ?></td>
							<td>
								<a href="#editcategory<?php echo $row['categoryid']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a> || <a href="#deletecategory<?php echo $row['categoryid']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
								<?php include('category_modal.php'); ?>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>
<?php include('modal.php'); ?>
</body>
</html>
