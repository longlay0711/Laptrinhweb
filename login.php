<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
	require_once 'config.php' ;
	include 'layout/header.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<title>ĐĂNG NHẬP</title>
<link rel="shortcut icon"  type="image/icon" href="images/favicon.ico" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/jquery.min.js"></script>
</head>

	<!---->
	<div class="container">
		
      	   <div class="account_grid">
			   <div class=" login-right">
			  	<h3>ĐĂNG NHẬP</h3>
				<p>Nếu bạn đã có tài khoản, hãy đăng nhập !</p>
				<form action="login_submit.php" method="POST" >
				  <div>
					<span>Tài khoản<label>*</label></span>
					<input type="text" name="username"> 
				  </div>
				  <div>
					<span>Mật khẩu<label>*</label></span>
					<input type="password" name="password"> 
				  </div>
				  <a class="forgot" href="#">Bạn quên mật khẩu ?</a>
				  <input type="submit" value="ĐĂNG NHẬP" name="dangnhap">
			    </form>
			   </div>	
			    <div class=" login-left">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="register.php">Create an Account</a>
			   </div>
			   <div class="clearfix"> </div>
			 </div>

	<!---->
		<?php
		include 'layout/left.php';
		 include 'layout/footer.php'; ?>
</html>