<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="colorlib-regform-2/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Login here!</h2>
                  <form class="float_form" action="login_handler.php" method="POST">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Username" name="uuname" required>
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <input class="input--style-2" type="password" placeholder="Password" name="ppname" required>
                            </div>
                        </div>
                        <h4>User Type:</h4><br><br>
                        <div class="row row-space">
                            <div class="col-2">
                              <div class="input-group" style="display: inline-block"; "text-align: center;">

                      				Customer<br>
                              <input type='radio' name='user_type' value='Customer' checked/>

                            </div>
                          </div>
                          <div class="col-2">
                            <div class="input-group" style="display: inline-block"; "text-align: center;">
                              Administrator<br>
                              <input type='radio' name='user_type' value='Administrator'>
                      			</div>
                            </div>
                          </div>
                				<?php
                					if(isset($_GET['msg']) && $_GET['msg']=='failed')
                					{
                						echo "<br>
                						<strong style='color:red'>Invalid Username/Password</strong>
                						<br><br>";
                					}
                				?>

                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit" name="Login" value="Login">Login</button>
                        </div>
                        <br>
                        	<a href="register1.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Don't Have an Account?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
