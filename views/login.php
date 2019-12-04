<?php


$exScriptNameArray = explode('/',$_SERVER['SCRIPT_NAME']);
// echo "<pre>";
// print_r($exScriptNameArray);
$DynamicUrl =  $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'].'/'.$exScriptNameArray[1]."/assets/";
// echo "<br>";
// echo "http://localhost/june5/PHP/mvc/assets/";

  //echo $DynamicUrl;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Farmland - Login page</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Farmland Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> 
	addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo $DynamicUrl; ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $DynamicUrl; ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="<?php echo $DynamicUrl; ?>js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link rel="stylesheet" href="<?php echo $DynamicUrl; ?>css/flexslider.css" type="text/css" media="screen" property="" />
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo $DynamicUrl; ?>css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Alegreya:400,400i,700,700i,900,900i&subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="wthree_logo">
						<h1><a class="navbar-brand" href="home"><span>F</span>armland</a></h1>
					</div>
				</div>
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<?php
                    
                       if(isset($_SESSION['username'])){
					?>
					<nav> 
						<ul class="nav navbar-nav link-effect-5" id="link-effect-5">
							<li><a href="home" data-hover="Home">Home</a></li>
							<li><a href="services" data-hover="Services">Services</a></li>
							<li><a href="gallery" data-hover="Gallery">Gallery</a></li>
							<li><a href="contactus" data-hover="Contact Us">Contact Us</a></li>
							<li><a href="orders" data-hover="Order">Order</a></li>
							<li class=""><a href="logout" data-hover="Logout">Logout</a></li>
						</ul>				
					</nav>
					<?php

                       }

                    else{
					?>
					<nav>
						<ul class="nav navbar-nav link-effect-5" id="link-effect-5">
							<li><a href="home" data-hover="Home">Home</a></li>
							<li><a href="services" data-hover="Services">Services</a></li>
							<li><a href="gallery" data-hover="Gallery">Gallery</a></li>
							<li><a href="contactus" data-hover="Contact Us">Contact Us</a></li>
							<li  class="active"><a href="login" data-hover="Login">Login</a></li>
						</ul>		
					</nav>
					<?php

                       }

                       ?>
				</div>
			</nav>
		</div>
	</div>
<!-- //banner -->
	
<!-- mail -->
	<div class="mail">
		<div class="container">			
	
			<p class="w3ls_para">Farmland</p>
			<h3 class="agileits_head">Login</h3>
	
			<div class="w3_agile_mail_grids">	
				<form  method="POST">
					<div class="col-md-3 w3_agile_mail_grid">

					</div>
					<div class="col-md-6 w3_agile_mail_grid">
						
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="text" id="input-26" placeholder="enter your email or mobile " name="email" required="" />
							<label class="input__label input__label--ichiro" for="input-26">
								<span class="input__label-content input__label-content--ichiro">Your Email or Mobile</span>
							</label>
						</span>
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="password" id="input-27" placeholder="enter your password" name="password" required="" />
							<label class="input__label input__label--ichiro" for="input-27">
								<span class="input__label-content input__label-content--ichiro">Your Password</span>
							</label>
						</span>

						<input type="submit" name="login" value="Login">
						<h3 style="margin-top: 10px;text-align: center; !important">Forgot Password ??<a href="forgotPassword"> Click Here</a></h3>
					</div>
					<div class="col-md-3 w3_agile_mail_grid">
					</div>					
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>
	</div>

	<div class="mail" style="padding:0em 0;" !important>
		<div class="container" style="padding:0em 0;" !important>
			<div>	
				<div class="col-md-3 w3_agile_mail_grid"></div>
				<div class="col-md-6 w3_agile_mail_grid">
					<h3 class="agileits_head">
						Don't have an account ??
					</h3>
		           <center>
		           	  <a href="register" class="btn-lg" style="color:#87B200;font-size:30px;">Register</a>
		           </center>
		       </div> 
		       <div class="col-md-3 w3_agile_mail_grid"></div>
	    </div>
    </div>
</div>
	
<!-- //mail -->
<?php

   include 'footer.php';

?>