<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
 $uid=$_SESSION['unm'];
 
require('includes/config.php'); 	
	//echo $uid;
	// if(isset($submit))
	// {
	// $query="insert into shipping_details(name,address,postal_code,city,state,phone,f_id) values('$name','$address','$pc','$city','$state','$phone','$uid')";
	
	// $res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	// header("location:payment_details.php");
	// }
// $query=" SELECT * FROM user WHERE u_unm='$uid'";
// $res=mysqli_query($conn,$query);
// $data = $res->fetch_object();
// echo $data->u_contact;

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
			<!------------------------------->
			<font style="font-size:30px;margin-left:420px">Shipping Details</font>	
			<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <div class="clr"></div>
				
            </div><!--/ freshdesignweb top bar -->    
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
										
										?>      <div  class="form">
    		<form id="contactform" method="post" action="getdata.php"> 
    			
    			<p class="contact"><label for="name">Name</label> 
    			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"></p> 
    			 
    			<p class="contact"><label for="email">Address</label>
    			<textarea id="address" name="address" placeholder="Address" required="" cols="55" row="10"type="text"> </textarea></p> 
                
                <p class="contact"><label for="username">Postal Code</label>
    			<input id="pc" name="pc" placeholder="pin code" required="" tabindex="2" type="text" maxlength="6"></p>  
    			 
                <p class="contact"><label for="city">City</label>
    			<input type="text" id="city" name="city" required="" placeholder="city"> </p> 
                <p class="contact"><label for="state">State</label>
    			<input type="text" id="state" name="state" required="" placeholder="state"> </p> 
            <p class="contact"><label for="phone">Mobile phone</label>
            <input id="phone" name="phone" placeholder="phone number" required="" type="text" maxlength="10"></p>  <br>


            <input class="buttom" name="submit" id="submit" tabindex="5" value="Confirm & Proceed" type="submit"> 	 
   </form> 
</div>      
</div>
</body>