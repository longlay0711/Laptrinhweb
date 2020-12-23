<?php
	session_start();
?>

<body> 
	<!--header-->
	<div class="header">
		<div class="top-header">
			<div class="container">
				<div class="top-header-left">
					<ul class="support">
						<li><a href="#"><label> </label></a></li>
						<li><a href="#">24x7 live<span class="live"> support</span></a></li>
					</ul>
					<ul class="support">
						<li class="van"><a href="#"><label> </label></a></li>
						<li><a href="#">Free shipping <span class="live">on order over 500</span></a></li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="top-header-right">
				 <div class="down-top">		
						  <select class="in-drop">
							  <option value="English" class="in-of">English</option>
							  <option value="Japanese" class="in-of">Japanese</option>
							  <option value="French" class="in-of">French</option>
							  <option value="German" class="in-of">German</option>
							</select>
					 </div>
					<div class="down-top top-down">
						  <select class="in-drop">
						  
						  <option value="Dollar" class="in-of">Dollar</option>
						  <option value="Yen" class="in-of">Yen</option>
						  <option value="Euro" class="in-of">Euro</option>
							</select>
					 </div>
					 <!---->
					<div class="clearfix"> </div>	
				</div>
				<div class="clearfix"> </div>		
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
					<div class="logo">
						<a href="index.php"><img src="images/logo.png" alt=" " /></a>
					</div>
					<div class="search">
						<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="SEARCH">

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">
				<?php
					if(isset($_SESSION["se"])){
				?>					
						<div class="account"><a href="login.php"><span> </span><?php echo $_SESSION["se"] ?></a></div>
							<ul class="login">
								<li><a href="logout.php"><span> </span>LOGOUT</a></li> 
							</ul>
						<?php } else { ?>
						<div class="account"><a href="login.php"><span> </span>YOUR ACCOUNT</a></div>
							<ul class="login">
								<li><a href="login.php"><span> </span>LOGIN</a></li> |
								<li ><a href="register.php">SIGNUP</a></li>
							</ul>
						<?php } ?>
						<?php
							if(isset($_SESSION["se"])){
						?>
						<div class="cart"><a href="giohang.php"><span> </span>CART</a></div>
						<?php } else { ?>
							<div class="cart"><a href="login.php"><span> </span>CART</a></div>
						<?php } ?>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>