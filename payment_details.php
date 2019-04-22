<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="zxx">
<head>
	<title>Online Book Store</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
			<!-- Header section -->
		<?php 
	require('includes/menu.inc.php');
	 ?>

	<!-- Header section end -->
			<font style="font-size:30px;margin-left:260px">Payment options</font>
<div class="container">			
			<hr style="margin-left:260px;margin-right:260px;"></hr>
			<!-- <div style="border-radius:5px 5px 5px 5px; background-color: #F51167; margin-left:160px;margin-right:160px;font-size:20px;"><a href="#" style="color: white; ">Secure Online Payment</a></div></br>
			<div style="border-radius:5px 5px 5px 5px; background-color: #F51167; margin-left:160px;margin-right:160px;font-size:20px;"><a href="#" style="color: white; ">PayUmoney</a></div></br>
			<div style="border-radius:5px 5px 5px 5px; background-color: #F51167; margin-left:160px;margin-right:160px;font-size:20px;"><a href="#" style="color: white; ">PAYTM Wallet</a></div></br>
			<div style="border-radius:5px 5px 5px 5px; background-color: #F51167; margin-left:160px;margin-right:160px;font-size:20px;"><a href="#" style="color: white; ">Mobikwik</a></div></br> -->
			<div style="border-radius:5px 5px 5px 5px; background-color: #F51167; margin-left:160px;margin-right:160px;font-size:20px;"><a href="cod.php" style="color: white; ">Cash On Delivery</a></div></br>

</div>
				<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="index.html"><img src="./img/logo-light.png" alt=""></a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>About</h2>
						<p>BOOK STORE is a design-minded, multi-disciplinary brand offering objects, events, and experiences related to books and reading.  We are based in the Nagpur. </p>
						<img src="img/cards.png" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<ul>
							<li><a href="">About Us</a></li>
							<li><a href="">Track Orders</a></li>
							<li><a href="">Returns</a></li>
							<li><a href="">Jobs</a></li>
							<li><a href="">Shipping</a></li>
							<li><a href="">Blog</a></li>
						</ul>
						<ul>
							<li><a href="">Partners</a></li>
							<li><a href="">Bloggers</a></li>
							<li><a href="">Support</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Press</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Blogs</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/1.jpg"></div>
								<div class="lp-content">
									<h6>which book to read</h6>
									<span>Jan 21, 2019</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>
								<div class="lp-content">
									<h6>best book of this year</h6>
									<span>Jan 21, 2019</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Office</h2>
						<div class="con-info">
							<span>C.</span>
							<p>Dr. Ambedkar College, Nagpur  </p>
						</div>
						<div class="con-info">
							<span>B.</span>
							<p>Deekshabhoomi, Nagpur, Maharashtra 440010</p>
						</div>
						<div class="con-info">
							<span>T.</span>
							<p>+91 123456789</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>office@bookstore.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">TheMk9</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
