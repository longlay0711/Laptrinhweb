	<?php
	include 'config.php';
	if( isset($_POST['submit']) && $_POST["fullname"] != '' && $_POST["username"] != '' && $_POST["email"] != '' && $_POST["address"] != '' && $_POST["numphone"] != '' && $_POST["password"] != '' && $_POST["repassword"] != '' ){
		$fullname = $_POST["fullname"];
		$username = $_POST["username"];
		$email = $_POST["email"];
		$address = $_POST["address"];
		$numphone = $_POST["numphone"];
		$password = $_POST["password"];
		$repassword = $_POST["repassword"];
		$level = 0;

 		if( $password !== $repassword ){
 			header('location:register.php');
 		}else{
 		$sql = "SELECT * FROM user WHERE username = '$username' ";
 		$old = mysqli_query($conn,$sql);
 		$password = md5($password);
 		if(mysqli_num_rows($old) > 0){
 			header('location:register.php');	
 		}else{
 		$sql="INSERT INTO user (fullname,username,email,address,numphone,password,level) VALUES ('$fullname','$username','$email','$address','$numphone','$password','$level') ";
 		mysqli_query($conn,$sql);
 		header('location:login.php');
 		}
 		}
	}
	else {
		header('location:register.php');
	} 
 ?>

