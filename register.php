<?php session_start(); ?>

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

	<?php 
	require('includes/menu.inc.php');
	 ?>

			
			<!-- start page -->

				<div id="page">
						<!-- start content -->
				
							<div id="content">
					
								<div class="post">
									<h1 class="title">Welcome to Registeration.</h1>
						
									<div class="entry">
									<br><br>
										<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<font color="blue">You are successfully Registered..</font>';
												echo '<br><br>';
											}
										
										?>
									
										<table style="margin-left:100px; ">
											<form class="promo-code-form" action="process_register.php" method="POST" style="background-color: red;">
						
											<!-- <form action="process_register.php" method="POST"> -->
												<tr>
													<td><b>Full Name :</b>&nbsp;&nbsp;</td>
													<td><input type='text' size="30" maxlength="30" name='fnm' required></td>
												
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													 <td><b>User Name :</b>&nbsp;&nbsp;</td>
													 <td><input type='text' size="30" maxlength="30" name='unm' required></td>
													 <td>&nbsp;</td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Password :</b>&nbsp;&nbsp;</td>
													<td><input type='password' name='pwd' size="30" required></td>
													 
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Confirm Password:</b>&nbsp;&nbsp;</td>
													<td><input type='password' name='cpwd' size="30" required></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Gender:</b>&nbsp;&nbsp;</td>
													<td><input type="radio"  value="Male" name="gender" id='m' required><label> Male</label>&nbsp;&nbsp;&nbsp;
														<input type="radio" value="Female" name="gender" id='f' required><label>Female</label></td>
														<td>&nbsp;</td>
												</tr>
												
												<tr><td>&nbsp;</tr>
																				
												<tr>
													<td><b>E-mail Address:</b>&nbsp;&nbsp;</td>
													<td><input type='email' name='mail' size="30" required></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Contact No.:</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='contact' id="i3" size="30" maxlength="10" required></td>
													<span id="error3"></span>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												
												<tr>
													<td><b>City:</b>&nbsp;&nbsp;</td>
													<td>
													<select style="    height: 29px;width: 278px;" name="city" required>
														
															<option>Nagpur
															<option>Mumbai
															<option>Pune
															<option>Kolhapur
															<option>Thane
															<option>Pune
															<option>Wrdha
															<option>Chandrapur
															<option>Nanded 
															<option>Nashik
															<option>Palghar
																<option>Aurangabad
																	<option>Thane
																		<option>Solapur
																			<option>Dhule
																				<option>Amravati
																					<option>Sangli
																						<option>Akola
																							<option>Latur
																								<option>Ahmednagar
																									<option>Jalgaon
																										<option>Parbhani
																											<option>Jalna
																												<option>Jalgaon
																													<option>Panvel
																														<option>Satara
																															<option>Beed
																																<option>Yavatmal
																																	<option>Gondia
																																		<option>Osmanabad

																																			






															
														
													</select>
												
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												
												
												<tr>
													<td colspan='2' align='center'>
														<input type='submit' value="Submit" onclick="val3()">
													</td>
												</tr>
											</form>
										</table>
									</div>
									
								</div>
					
					
							</div>
				
						<!-- end content -->
						
						<!-- start sidebar -->
						<!-- <div id="sidebar">
								<?php
									include("includes/search.inc.php");
								?>
						</div> -->
						<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
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
</body>

<script type="text/javascript">

</script>
</html>
