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
<title>SẢN PHẨM</title>
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


<!--script-->
</head>

	<!---->
	<!-- start content -->
	<div class="container">
		
	<div class="women-product">
		<div class=" w_content">
			<div class="women">
				<a href="#"><h4>Enthecwear - <span>4449 itemms</span> </h4></a>
				<ul class="w_nav">
					<li>Sort : </li>
			     	<li><a class="active" href="#">popular</a></li> |
			     	<li><a href="#">new </a></li> |
			     	<li><a href="#">discount</a></li> |
			     	<li><a href="#">price: Low High </a></li> 
			     <div class="clearfix"> </div>	
			     </ul>
			     <div class="clearfix"> </div>	
			</div>
		</div>
		<!-- grids_of_4 -->
		<div class="grid-product">
			<?php
				$sql = "SELECT * FROM sanpham";
				$squery = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_assoc($squery)){


			?>

		  <div class="  product-grid">
			<div class="content_box"><a href="single.php?&id=<?php echo $row['masp']; ?>">
			   	<div class="left-grid-view grid-view-left">
			   	   	 <img style="width: 210px;height: 285px;" src="<?php echo 'QLSP/img/'.$row['anh']; ?>" class="img-responsive watch-right" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				</div>
				    <h4><a href="single.php?&id=<?php echo $row['masp']; ?>"> <?php echo $row['tensp']; ?> </a></h4>
				     <p>Men's Shoe</p>
				     <font color="#F97E76">Giá:</font><b> <?php echo $row['gia'] ?> </b>VNĐ
		</div>
              </div>

              <?php
              }
              ?>


			<div class="clearfix"> </div>
		</div>
	</div>
	
	<!---->
<?php
include 'layout/left.php';
 include 'layout/footer.php'; ?>
</html>