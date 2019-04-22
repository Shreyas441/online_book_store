	
			
		<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.php" class="site-logo">
							<img src="../img/logo.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<!-- <form  class="header-search-form" method="GET" action="search_result.php">
		
					<input type="text" id="s" name="s" value="" placeholder="Search on Book Store...." />
					<button type="submit" id="x" value="Search" ><i class="flaticon-search"></i></button>
					
					</form> -->
						
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<!-- <div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="#">Sign</a> In or <a href="#">Create Account</a>
							</div> -->
							<!-- <div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span><?php if(isset($_SESSION['carta'])){echo $_SESSION['carta']; }else{echo '0';}?></span>
								</div>
								<a href="viewcart.php">Shopping Cart</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li class="current_page_item"><a href="index.php">Dashboard</a></li>
					<li><a href="category.php">Category</a></li>
			<li><a href="subcategory.php">Sub_Category</a></li>
			<li><a href="all_book.php">Books</a></li>
			<li class="last"><a href="contact.php">Contact</a></li>
					<?php 

					if(isset($_SESSION['status']))

					{
						
						echo '<li><a href="../logout.php">Logout</a></li>';
					}
					else
					{
						echo '<li><a href="register.php">Register</a></li>';
					}
			?>
					
					<li id="login" >
				
						<?php
						require('includes/config.php');
							if(isset($_SESSION['status']))
							{
								echo '<h4 style="color:white;float:right; margin-top:10px;">Hello :  '.$_SESSION['unm'].'</h4>';
							}
							else
							{
								echo '<form action="process_login.php" method="POST">
										
											<h5 style="color:white;display:inline;">Username:</h5>
											<input type="text" name="usernm" style="width:150px;">

											<h5 style="color:white; display:inline;">Password:</h5>
											<input type="password" name="pwd" style="width:150px;">
											<input type="submit" id="x" value="Login" />
											
										
											
											
											
										</form>';
							}
						?>
			</li>
					
					
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->