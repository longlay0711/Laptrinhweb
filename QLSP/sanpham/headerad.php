<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
					<div class="logo">
						<a href="index.php"><img src="../images/logo.png" alt=" " /></a>
					</div>
				
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">
					<div class="account"><a href="login.php"><span> </span><?php echo $_SESSION["se"] ?></a></div>
							<ul class="login">
								<li><a href="logout.php"><span> </span>LOGOUT</a></li> 
							</ul>
							


					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
</body>
</html>