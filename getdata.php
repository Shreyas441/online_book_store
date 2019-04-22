<?php session_start();
if(strlen($_POST['pc'])<6)
		{
			$msg.="<li>Plese Enter 6 Digit PIN CODE";
		}
		if(strlen($_POST['phone'])<10)
		{
			$msg.="<li>Plese Enter 10 Digit Mobile Number";
		}
		if($msg!="")
		{
			header("location:checkout.php?error=".$msg);
		}

else
		{
			

require('includes/config.php');
$name=$_POST['name'];
$address=$_POST['address'];
$pc=$_POST['pc'];
$city=$_POST['city'];
$state=$_POST['state'];
$phone=$_POST['phone'];

$query12="INSERT INTO orders VALUES(NULL,'$name','$address','$pc','$city','$state','$phone')";
if ($conn-> query($query12))
{ echo "inserted";
$query123="SELECT id FROM orders WHERE phone='$phone' and name='$name'";
$result123 =$conn->query($query123);
$data123 = $result123->fetch_object();
$oid=$data123->id;


									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										
											$cata=$x['cat'];
											$bname=$x['nm'];
											$quantity=$x['qty'];
											$price=$x['rate'];
											$query12="INSERT INTO order_cart VALUES(NULL,'$oid','$cata','$bname','$price','$quantity')";
											if ($conn-> query($query12))
											{ echo "cart inserted";}
										 else{
  	echo mysqli_error($conn);

  }


									
										
																			}
									}
  header('location:payment_details.php');
  }
  else{
  	echo mysqli_error($conn);

  }
}


 ?>
