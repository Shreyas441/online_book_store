<?php session_start();

require('includes/config.php');
	
	if(!empty($_POST))
	{
		
			
	
			
			$unm=$_POST['usernm'];
			
			$q="select * from user where u_unm='$unm'";
			
			$res=mysqli_query($conn,$q) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
			
			if(!empty($row))
			{
				if($_POST['pwd']==$row['u_pwd'])
				{
					$_SESSION=array();
					$_SESSION['unm']=$row['u_unm'];
					$_SESSION['uid']=$row['u_pwd'];
					$_SESSION['status']=true;
					
					if($_SESSION['unm']!="admin")
					{
						header("location:index.php?err=Welcome ".$_SESSION['unm']);
					}
					else
					{
						header("location:admin/index.php");
					}
				}
				
				else
				{
					echo 'Incorrect Password....';
					header("location:index.php?err=Incorrect Password");
				}
			}
			else
			{
				echo 'Invalid User';
				header("location:index.php?err=Incorrect User");
			}
		
	
	}
	else
	{
		header("location:index.php");
	}
			
?>