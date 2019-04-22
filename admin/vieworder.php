<?php session_start();

	if(!(isset($_SESSION['status'])&& $_SESSION['unm']=="admin"))
	{
		header("location:../index.php");
	}
$id=$_GET['id'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
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
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/flaticon.css"/>
	<link rel="stylesheet" href="../css/slicknav.min.css"/>
	<link rel="stylesheet" href="../css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="../css/animate.css"/>
	<link rel="stylesheet" href="../css/style.css"/>


</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<?php
			include("includes/menu.inc.php");
		?>
	</div>
</div>
<div id="logo-wrap">
<div id="logo">
		<?php
			include("includes/logo.inc.php");
		?>
</div>
</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title">Welcome to Admin .....</h1>
			<div class="entry">
				<table border="1px">
	<tr>
		<td>ID</td>
		<td>Order Id</td>
		<td>Catigory</td>
		<td>Book Name</td>
		<td>Price</td>
	
		
		<td>Quantity</td>
		



	</tr>
				<?php 
				$total=0;
require('includes/config.php');

$query="SELECT * FROM order_cart WHERE order_id='$id'";
$result= $conn->query($query);

while($data=$result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>".$data['id']."</td>";
		echo "<td>".$data['order_id']."</td>";
		echo "<td>".$data['cat']."</td>";
		echo "<td>".$data['b_name']."</td>";
		echo "<td>".$data['price']."</td>";
		
		echo "<td>".$data['quantity']."</td>";

		// echo "<td><a href=vieworder.php?id=".$data['id'].">View Cart</a></td>";

		echo "</tr>";
$total+=$data['price']*$data['quantity'];

	} echo "Total Ammount = ".$total." &#8377";
				 ?>
				</table>
				<a href="index.php">Place Order</a>
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<!-- <div id="footer">
			<?php
				include("includes/footer.inc.php");
			?>
</div> -->
<!-- end footer -->
</body>
</html>
