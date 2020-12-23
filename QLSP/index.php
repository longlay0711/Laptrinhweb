<?php 
	require_once 'sanpham/config.php';
 ?>

<?php
session_start();
if(!isset($_SESSION["se"])){
		header("location:../admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
	<title>QLSP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		if(isset($_GET['page_layout'])){
			switch ($_GET['page_layout']) {
				case 'danhsach':
					require_once 'sanpham/danhsach.php';
					break;

				case 'them':
					require_once 'sanpham/them.php';
					break;

				case 'xoa':
					require_once 'sanpham/xoa.php';
					break;

				case 'sua':
					require_once 'sanpham/sua.php';
					break;

				default:
					require_once 'sanpham/danhsach.php';
					break;
			}
		}else{
			require_once 'sanpham/danhsach.php';
		}
	?>
</body>
</html>
