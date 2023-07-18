<!DOCTYPE html>
<html lang="en">
<head>
	<meta characterset="UTF-8">
	<title>Contact us form validation</title>
	<link rel="stylesheet" href="newstyle.css">
	<script src="contact.js"></script>
</head>

<body>

    <div>
    <section>
      <div id="main">
        <a href="homepage.php" id="main_name">< Go Back</a>
     </div>
    </section>



<div class="wrapper">
  <h2>Contact us</h2>
  <div id="error_message"></div>
 
  <form id="myform" onsubmit="return validation()">
    <div class="input_field">
        <input type="text" placeholder="Name" id="name">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Phone" id="phone">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Email" id="email">
    </div>
    <div class="input_field">
        <textarea placeholder="Message" id="message"></textarea>
    </div>
    <div class="btn">
        <input type="submit">
    </div>
  </form>
</div>

</body>