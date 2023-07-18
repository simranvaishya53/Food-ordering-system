<?php include('header.php'); ?>

<html>
<head>
<title>Customer details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('food bg.jpg');
  opacity: 100%;
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;

}


.bg-img{
  
}

input[type=text], textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=email] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=tel] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

.button {
  background-color: grey;
  border: none;
  color: white;
  border-radius: 5px;
  transform: translate(300%, 50%);
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  padding: 5px 5px;
}

.example_e {
border: none;
background: #404040;
color: #ffffff !important;
font-weight: 100;
padding: 20px;
text-transform: uppercase;
border-radius: 6px;
display: inline-block;
transition: all 0.3s ease 0s;
}

.example_e:hover {
color: #404040 !important;
font-weight: 700 !important;
letter-spacing: 3px;
background: none;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.3s ease 0s;
}

form {
  width: 300px;
  margin: 0 auto;
  font-size: 130%;
  font-style: bold;
  color: black;
}

.error {color: white;}


</style>
</head>
<body>
<div class="bg-img">
<?php include('navorder.php'); ?>
<a href="order.php" class="button">Back to my order</a>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $phoneErr = $addressError="";
$customer = $email = $address =$phone = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["customer"])) {
    $nameErr = "Name is required";
  } else {
    $customer = test_input($_POST["customer"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$customer)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
              $emailErr = "Email is required";
      } else {
              $email = test_input($_POST["email"]);
              // check that the e-mail address is well-formed
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format";
              }
       }

  if (empty($_POST["phone"])) {
             $phoneErr = "Mobile no is required";
     } else {
             $phone = test_input($_POST["phone"]);
             // check if mobile no is well-formed
             if (!preg_match ("/^[0-9]*$/", $phone) ) {
             $phoneErr = "Only numeric value is allowed.";
             }
         //check mobile no length should not be less and greator than 10
         if (strlen ($phone) != 10) {
             $phoneErr = "Mobile no must contain 10 digits.";
             }
     }

  if (empty($_POST["address"])) {
    $addressError = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2 style="text-align:center; padding-top:20px;" >ENTER CUSTOMER DETAILS</h2>


<div class="container">

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
  <p><span class="error">* required field </span></p>

  <label for="customer">Name</label>
  <input type="text" name="customer" placeholder="Name" value="<?php echo $customer;?>">
  <span class="error">* <?php echo $nameErr; ?> </span>
  <br><br>

  <label for="text">Email</label>
  <input type="email" name="email" placeholder="Email" value="<?php echo $email;?>" >
  <span class="error">* <?php echo $emailErr; ?> </span>
  <br><br>

  <label for="phone">Phone</label>
  <input type="tel" name="phone" placeholder="Phone No." value="<?php echo $phone;?>">
  <span class="error">* <?php echo $phoneErr; ?> </span>
  <br><br>

  <label for="address">Address</label>
  <textarea name="address" rows="5" cols="40" placeholder="Address"><?php echo $address;?></textarea>
  <span class="error">* <?php echo $addressError; ?> </span>
  <br>

 <input class="example_e" type="submit" name="submit" value="Submit">
</form>
</div>

<?php
    if(isset($_POST['submit'])) {
    if($nameErr == "" && $emailErr == "" && $phoneErr == "" && $addressError=="") {
        	include('cd.php');
    } else {
        echo '<script>alert(" You didnt fill the form correctly")</script>';
    }
    }
?>
</div>
</body>
</html>
