<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	session_start();

?>


<?php 

	include 'config.php';
	if(isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != ''){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$level = 1;
		$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' AND level = '$level' ";
		$user = mysqli_query($conn,$sql);
		if(mysqli_num_rows($user)>0){
			$_SESSION["se"]=$username;
			header("location:QLSP/index.php");
		}else{
			?><font color="red"> <?php echo "Nhập sai tài khoản hoặc mật khẩu";?></font> <?php
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
<title>admin</title>
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
<body style="background-image: url(images/banner2.jpg);" > 
	<!--header-->
	
	
	<!---->
	<div class="container">
		
      	   <div class="account_grid">
			   <div class=" login-right">
			  	<h3>Admin Login</h3>
				<form action="" method="POST" >
				  <div>
					<font color="white">Tài khoản<label>*</label></font>
					<input type="text" name="username"> 
				  </div>
				  <div>
					<font color="white">Mật khẩu<label>*</label></font>
					<input type="password" name="password"> 
				  </div>

				  <input type="submit" value="ĐĂNG NHẬP" name="submit">
			    </form>
			   </div>	


			 </div>
	<!---->

</body>
</html>