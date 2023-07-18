<html>
	<head>
		<title>Add New User</title>
	</head>
	<body>
		<?php
			if(isset($_POST['Submit']))
			{
				$data_missing=array();
				if(empty($_POST['uname']))
				{
					$data_missing[]='User Name';
				}
				else
				{
					$user_name=trim($_POST['uname']);
				}
				if(empty($_POST['pname']))
				{
					$data_missing[]='Password';
				}
				else
				{
					$password=$_POST['pname'];
				}
				if(empty($_POST['ename']))
				{
					$data_missing[]='Email ID';
				}
				else
				{
					$email_id=trim($_POST['ename']);
				}

				if(empty($_POST['nname']))
				{
					$data_missing[]='Name';
				}
				else
				{
					$name=$_POST['nname'];
				}


				if(empty($data_missing))
				{
					require_once('Database Connection file/mysqli_connect.php');
					$query="INSERT INTO registration (username,password,email,name) VALUES (?,?,?,?)";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"ssss",$user_name,$password,$email_id,$name);
					mysqli_stmt_execute($stmt);
					$affected_rows=mysqli_stmt_affected_rows($stmt);
				
					mysqli_stmt_close($stmt);
					mysqli_close($dbc);
					/*
					$response=@mysqli_query($dbc,$query);
					*/
					if($affected_rows==1)
					{
						$message = "wrong answer";
            echo "<script type='text/javascript'>alert('$message');</script>";
						header('location:login.php');
					}
					else
					{
						echo "Submit Error";
						echo mysqli_error();
					}
				}
				else
				{
					echo "The following data fields were empty! <br>";
					foreach($data_missing as $missing)
					{
						echo $missing ."<br>";
					}
				}
			}
			else
			{
				echo "Submit request not received";
			}
		?>
	</body>
</html>
