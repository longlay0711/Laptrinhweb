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
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible " content=" IE=edge">
<title>ĐĂNG KÝ</title>
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
			         
		<div class="register">
		  	  <form action="regsiter_submit.php" method="POST"> 
				 <div class="  register-top-grid">
					<h3>ĐĂNG KÝ TÀI KHOẢN</h3>
					<div class="mation">
						<span>Họ tên<label>*</label></span>
						<input type="text" name="fullname"> 
					
						<span>Tài khoản<label>*</label></span>
						<input type="text" name="username"> 
					 
						 <span>Địa chỉ Email<label>*</label></span>
						 <input type="email" name="email">

						 <span>Địa chỉ nhà<label>*</label></span>
						 <input type="text" name="address">

						 <span>Số điện thoại<label>*</label></span>
						 <input type="text" name="numphone">
   

						<span>Mật khẩu<label>*</label></span>
						<input type="password" name="password" >

						<span>Nhập lại mật khẩu<label>*</label></span>
						<input type="password" name="repassword" >
					</div>
					 <div class="clearfix"> </div>
				</div>

					 	<div class="clearfix"> </div>
					<div class="formnutdangky">
					   <input  type="submit" name="submit" value="ĐĂNG KÝ" >
					   <div class="clearfix"> </div>

					</div>
				</form>

		   </div>

	<!---->
		<?php
		include 'layout/left.php';
		 include 'layout/footer.php'; ?>
</html>
