<?php

		// session_start();
		//echo "your username is : " . $_SESSION['username'];
        //echo "<br>your id is : " . $_SESSION['userid'];
       //exit;

		$exScriptNameArray = explode('/',$_SERVER['SCRIPT_NAME']);
		// echo "<pre>";
		// print_r($exScriptNameArray);
		$DynamicUrl =  $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'].'/'.$exScriptNameArray[1]."/assets/";
		
?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
		<title>Farmland - Order water page</title>
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
				<!-- Collect the nav links, forms, and other content for toggling -->
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
							<li  class="active"><a href="orders" data-hover="Order">Order</a></li>
							<li class=""><a href="logout" data-hover="Logout">Logout</a></li>
							
						</ul>
						<?php foreach($userData as $value){  ?>
						<img src="<?php echo $value['photo']?>" height="50" width="50" style="margin-top:5px;margin-left:100px;">	
						<a href="viewProfile" style="margin-top:35px;margin-left:730px;">View profile</a>	
						<?php  }   ?>		
					</nav>
					<?php

                       }

                    else{
					 ?>
					 <script type="text/javascript">
					 	alert('First Must be login');
					 	document.location.href = 'login';
					 </script>

					 <?php
                       }

                       ?>
				</div>
			</nav>
		</div>
	</div>
<!-- //banner -->
	<div class="mail">
		<div class="container">
			<div class="agileits_w3layouts_mail">
				<div class="col-md-4 agileits_w3layouts_mail_left">
					<div class="w3_agileits_mail_left">
						
					</div>
				</div>
				
				<div class="col-md-4 agileits_w3layouts_mail_left">
					<div class="w3_agileits_mail_left">
						<h4><i class="fa fa-user" aria-hidden="true"></i>Welcome</h4>
						<p class="wthree_address"><b>
							<?php 
                                  foreach($userData as $value){
							           echo "<b>".$value['fullname']."</b>";   
									}
							?>
						</b></p>
					</div>
				</div>
				<div class="col-md-4 agileits_w3layouts_mail_left">
					<div class="">
						<center>
							<h4><a href="yourOrder" style="background-color:#435D7D; !important" class="btn btn-primary btn-lg">
							Manage orders</a></h4>
						</center>
					</div>
				</div>
				
				
				<div class="clearfix"> </div>
			</div>
	
			<p class="w3ls_para">Farmland</p>
			<h3 class="agileits_head">Order your water here</h3>
	
			<div class="w3_agile_mail_grids">	
				<form method="POST">
					<div class="col-md-3 w3_agile_mail_grid">
						
					</div>
					<div class="col-md-6 w3_agile_mail_grid">
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="text"
							name="location" id="input-25" placeholder="enter location for which you want water " required="" />
							<label class="input__label input__label--ichiro" for="input-25">
								<span class="input__label-content input__label-content--ichiro">Enter Location</span>
							</label>
						</span>
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="date" id="input-26" name="date" placeholder=" " required="" />
							<label class="input__label input__label--ichiro" for="input-26">
								<span class="input__label-content input__label-content--ichiro">Select date</span>
							</label>
						</span>
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="time" id="input-27" name="time" placeholder=" " required="" />
							<label class="input__label input__label--ichiro" for="input-27">
								<span class="input__label-content input__label-content--ichiro">Select time</span>
							</label>
						</span>
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="text" id="input-28" name="quantity" placeholder="enter your quantity of water" required="" />
							<label class="input__label input__label--ichiro" for="input-28">
								<span class="input__label-content input__label-content--ichiro">Enter water quantity (in liter)</span>
							</label>
						</span>
						<textarea name="address" placeholder="Enter your address here..." required=""></textarea>
						<input type="submit" value="Submit" name="order">
					</div>
					<div class="col-md-3 w3_agile_mail_grid">
						
					</div>
					<div class="clearfix"> </div>
				</form>
			</div>

		</div>
	</div>

	<?php

   include 'footer.php';

?>