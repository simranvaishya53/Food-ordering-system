<?php
	session_start();
?>
<html>
	<head>
		<title>
			Welcome to D'crepes cafe
		</title>
		  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="homepage.css">

		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">


		</head>
	<body style="background-color:#e0e0e0;
	background-image: url('fc4.jpeg');
	background-position: center;
 	background-repeat: no-repeat;
  	background-size: cover;
  	background-attachment: fixed;">
		<div class="topbar">
		<img class="logo" src="dclogo.jpeg">
		<h1 id="title">
		D'crepes Cafe
		</h1>
	</div>

		<div>
			<ul>
				<li><a href="homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="login.php"><i class="fa fa-ticket\" aria-hidden="true"></i>Orders</a></li>
				<li><a href="#aboutus"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="faq.php"><i class="fa fa-phone" aria-hidden="true"></i> FAQs</a></li>
				<li><a href="cont.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li class ="loginsym"><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>


		</ul>
		</div>
		<div class="container">
			<div class="welcome_text">Welcome to D'crepes Cafe!</div>


<div class="slideshow-container">
  <div class="mySlides fade">
  <img src="dc shop.jpg" style="width:100%">

</div>

<div class="mySlides fade">
  <img src="dc.jpg" style="width:100%">

</div>

<div class="mySlides fade">
<img src="dc1.jpg" style="width:100%">

</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

			</div>
		</div>
		<!--check out addling local host in links and other places

			shift login/logout buttons to right side
		-->

		<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>


<div id="aboutus" class="about-us">
     <img src="dc-aboutus.jpg" alt="Table Setting">
    </div>
    <div class="about-us-text">
<h2 style=" text-align: center; padding-left: 950px; padding-right: 10px">ABOUT US</h2>
	<h2 style="text-align: center; padding-left: 950px; padding-right: 10px">Bienvenue!!!</h2>
	<p style="font-style: arial; text-align: center; padding-left: 950px; padding-right: 10px">
Our love for Crepes and all its possibilities is the reason why we have opened our first café location. We strive to provide you with the “Classic Crepes” and featuring extraordinary sweet & savory delights. We are here to share our love of Crepes with you.

We Offer A Relaxed Atmosphere to conduct business, relax on a date or to spend time reading your favorite book. Dcrepes cafe has a slightly European feel and is the perfect hot spot for all generations.

The reason that you came to D’Crepes Cafe is for the unique experience you will not get anywhere else combined with the fresh taste and delicious ingredients from our savory Indian Summer Crepe to our delightful desserts like the Austrian mud pie or Red velvet cupcakes. Every crepe is prepared Just for You so the wait may be a little longer.<br><br>WTL Project By: <br>PC 19 - Ritika Bhosale<br>PC 25 - Simran Vaishya<br>PC 14 - Abhishek Patil<br>PC 10 - Abhishek Patil</p>

</div>

	</body>
</html>
