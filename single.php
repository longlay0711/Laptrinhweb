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



 	 	<?php
	 		$id=$_GET['id'];
	 		$sql="SELECT * FROM sanpham inner join nsx on sanpham.mansx = nsx.mansx WHERE masp = $id";
	 		$squery= mysqli_query($conn,$sql);
	 		$row=mysqli_fetch_row($squery);

	 		

	 	?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $row[1];?></title>
<link rel="shortcut icon"  type="image/icon" href="images/favicon.ico" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link rel="stylesheet" href="css/etalage.css" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/jquery.min.js"></script>

<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

</head>

	<!---->
	
	 <div class="container"> 

	 	
	 	<div class=" single_top">
	      <div class="single_grid">
				<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_source_image" src=" QLSP/img/<?php echo $row[4];?>" class="img-responsive" title="" />
								</a>
							</li>
						</ul>
						 <div class="clearfix"> </div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
				  
					
				<h2><?php echo $row[1];?></h2>
				<div class="cart-b">
					<div class="left-n "><?php echo $row[2];?> </div>VNĐ
				    <a class="now-get get-cart-in" href="#">ADD TO CART</a> 
				    <div class="clearfix"></div>
				 </div>
				 <h6>Thương hiệu: <?php echo $row[8];?></h6>
			   	<p><?php echo $row[3];?></p>
			   	<div class="share">
							<h5>Share Product :</h5>
							<ul class="share_nav">
								<li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
								<li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
								<li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
								<li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
				    		</ul>
						</div>
			   
				
				</div>
          	    <div class="clearfix"> </div>
          	   </div>
          	   <ul id="flexiselDemo1">
			<li><img src="images/pi.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
			<li><img src="images/pi1.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
			<li><img src="images/pi2.jpg" /><div class="grid-flex"><a href="#">Zumba</a><p>Rs 850</p></div></li>
			<li><img src="images/pi3.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
			<li><img src="images/pi4.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
		 </ul>
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>

          	    	<div class="toogle">
				     	<h3 class="m_3">Sản phẩm cùng loại</h3>
				     			
			<?php
				$sql_th = "SELECT * FROM sanpham inner join nsx on sanpham.mansx = nsx.mansx WHERE tennsx = '$row[8]' AND masp != '$id'";
				$squery_th = mysqli_query($conn,$sql_th);
				while ($row = mysqli_fetch_assoc($squery_th)){
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

				     	

				     </div>	
				    
          	   </div>


          	   
          	   <!---->

	<!---->
		<?php
		include 'layout/left.php';
		 include 'layout/footer.php'; ?>
</html>