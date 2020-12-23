<div class="sub-cate">
					<div class=" top-nav rsidebar span_1_of_left">
					<h3 class="cate">DANH MỤC</h3>
		  <ul class="menu">
		  				<ul class="kid-menu">
				<li>
					<a href="product.php">Tất cả sản phẩm</a>
				</li>
						</ul>
		  	<?php
			$sql_nsx="SELECT * FROM nsx ";
			$sql_loai="SELECT * FROM loai ";
	 		$squery_nsx=mysqli_query($conn,$sql_nsx);
	 		$squery_loai=mysqli_query($conn,$sql_loai);
		  	 while($row_nsx=mysqli_fetch_assoc($squery_nsx)){ ?>
		<li class="item">

			<a href="#"><?php echo $row_nsx['tennsx']; ?><img src="images/arrow1.png" alt=""/> </a>

			<?php } ?>
			
			<ul class="cute">
				
				<li class="subitem1"><a href="product.php"></a>  </li>

			</ul>

		</li>
					</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
					<div class=" chain-grid menu-chain">
	   		     		<a href="single.php"><img class="img-responsive chain" src="images/wat.jpg" alt=" " /></a>	   		     		
	   		     		<div class="grid-chain-bottom chain-watch">
		   		     		<span class="actual dolor-left-grid">300$</span>
		   		     		<span class="reducedfrom">500$</span>  
		   		     		<h6><a href="single.php">Lorem ipsum dolor</a></h6>  		     			   		     										
	   		     		</div>
	   		     	</div>
	   		     	 <a class="view-all all-product" href="product.php">VIEW ALL PRODUCTS<span> </span></a> 	
			</div>
	   		    <div class="clearfix"> </div>