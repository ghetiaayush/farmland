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
<title>Farmland - Services page</title>
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
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<?php
                    
                       if(isset($_SESSION['username'])){
					?>
					<nav> 
						<ul class="nav navbar-nav link-effect-5" id="link-effect-5">
							<li><a href="home" data-hover="Home">Home</a></li>
							<li  class="active"><a href="services" data-hover="Services">Services</a></li>
							<li><a href="gallery" data-hover="Gallery">Gallery</a></li>
							<li><a href="contactus" data-hover="Contact Us">Contact Us</a></li>
							<li><a href="orders" data-hover="Order">Order</a></li>
							<li><a href="logout" data-hover="Logout">Logout</a></li>
						</ul>				
					</nav>
					<?php

                       }

                    else{
					?>
					<nav>
						<ul class="nav navbar-nav link-effect-5" id="link-effect-5">
							<li><a href="home" data-hover="Home">Home</a></li>
							<li  class="active"><a href="services" data-hover="Services">Services</a></li>
							<li><a href="gallery" data-hover="Gallery">Gallery</a></li>
							<li><a href="contactus" data-hover="Contact Us">Contact Us</a></li>
							<li><a href="login" data-hover="Login">Login</a></li>
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
	
<!-- services -->
	<div class="services">
		<div class="container">
			<p class="w3ls_para">Farmland</p>
			<h3 class="agileits_head">Special Services</h3>
			<div class="w3l_services_grids">
				<div id="verticalTab">
					<ul class="resp-tabs-list">
						<li>Agriculture</li>
						<li>Gardening Care</li>
						<li>Plant Care</li>
					</ul>
					<div class="resp-tabs-container">
						<div class="w3layouts_vertical_tab">
							<div class="col-md-7 w3layouts_vertical_tab">
								<p style="margin-top: 60px; !important">
									<b>Agriculture</b> is the science and art of cultivating plants and livestock.Agriculture was the key development in the rise of sedentary human civilization, whereby farming of domesticated species created food surpluses that enabled people to live in cities. 
									<br>
								The major agricultural products can be broadly grouped into foods, fibers, fuels and raw materials (such as rubber). Food classes include cereals (grains), vegetables, fruits, oils, meat, milk, fungi and eggs.</p>
							</div>
							<div class="col-md-5 w3layouts_vertical_tab_right">	
								<img src="<?php echo $DynamicUrl; ?>images/6.jpg" alt=" " class="img-responsive" style="height:280px; !important" />
							</div><br>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_vertical_tab">
							<div class="col-md-7 w3layouts_vertical_tab">
								<p style="margin-top: 20px; !important">
									<b>Gardening</b>  is the practice of growing and cultivating plants as part of horticulture. In gardens, ornamental plants are often grown for their flowers, foliage, or overall appearance; useful plants, such as root vegetables, leaf vegetables, fruits, and herbs, are grown for consumption, for use as dyes, or for medicinal or cosmetic use. Gardening is considered by many people to be a relaxing activity.
									   <br>
									Gardening ranges in scale from fruit orchards, to long boulevard plantings with one or more different types of shrubs, trees, and herbaceous plants, to residential back gardens including lawns and foundation plantings, and to container gardens grown inside or outside. </p>
							</div>
							<div class="col-md-5 w3layouts_vertical_tab_right">	
								<img src="<?php echo $DynamicUrl; ?>images/8.jpg" alt=" " class="img-responsive" style="margin-top: 10px;height:280px; ! important" />
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_vertical_tab">
							<div class="col-md-7 w3layouts_vertical_tab">
								<p style="margin-top: 60px; !important">

									<b>Plant care</b> is a plant that is grown indoors in places such as residences and offices, namely for decorative purposes, but studies have also shown them to have positive psychological effects and as well as help with indoor air purification, since some species, and the soil-dwelling microbes associated with them, reduce indoor air pollution by absorbing volatile organic compounds including benzene, formaldehyde, and trichloroethylene. While generally toxic to humans, such pollutants are absorbed by the plant and its soil-dwelling microbes without harm</p>
							</div>
							<div class="col-md-5 w3layouts_vertical_tab_right">	
								<img src="<?php echo $DynamicUrl; ?>images/7.jpg" alt=" " class="img-responsive" style="margin-top: 10px;height:280px; ! important"/>
							</div>
							<div class="c`learfix"> </div>
						</div>
					
					</div>
				</div>
				<script src="js/easy-responsive-tabs.js"></script>
				<script>
					$(document).ready(function () {
					$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
					});
					});
				</script>
			</div>
		</div>
	</div>
<!-- //services -->
	
<!-- services-bottom -->
	<div class="services-bottom">
		<div class="container">
			<p class="w3ls_para">Farmland</p>
			<h3 class="agileits_head agileits_head_w3">What We Offer</h3>
			<div class="w3l_services_bottom_grids">
				<div class="col-md-3 w3l_services_bottom_grid">
					<div class="w3ls_services_bottom_grid hvr-rectangle-out">
						<i class="fa fa-users" aria-hidden="true"></i>
					</div>
					<h4>Satisfied customers</h4>
					<p></p>
				</div>
				<div class="col-md-3 w3l_services_bottom_grid">
					<div class="w3ls_services_bottom_grid hvr-rectangle-out">
						<i class="fa fa-building" aria-hidden="true"></i>
					</div>
					<h4>guaranteed work</h4>
					<p></p>
				</div>
				<div class="col-md-3 w3l_services_bottom_grid">
					<div class="w3ls_services_bottom_grid hvr-rectangle-out">
						<i class="fa fa-pagelines" aria-hidden="true"></i>
					</div>
					<h4>Water supplying</h4>
					<p></p>
				</div>
				<div class="col-md-3 w3l_services_bottom_grid">
					<div class="w3ls_services_bottom_grid hvr-rectangle-out">
						<i class="fa fa-certificate" aria-hidden="true"></i>
					</div>
					<h4>On time delivery</h4>
					<p></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services-bottom -->
	
<!-- featured-services -->
	<div class="featured-services">
		<div class="container">
			<p class="w3ls_para">Farmland</p>
			<h3 class="agileits_head">Featured Services</h3>
			<div class="agileits_featured_services_grids">
				<div class="col-md-4 agileits_featured_services_grid">
					<img src="<?php echo $DynamicUrl; ?>images/7.jpg" alt=" " class="img-responsive" />
					<h4>Plant care</h4>
					<p></p>
					<div class="w3_more">
						
					</div>
				</div>
				<div class="col-md-4 agileits_featured_services_grid">
					<img src="<?php echo $DynamicUrl; ?>images/8.jpg" alt=" " class="img-responsive" />
					<h4>Gardening care</h4>
					<p></p>
					<div class="w3_more">
						
					</div>
				</div>
				<div class="col-md-4 agileits_featured_services_grid">
					<img src="<?php echo $DynamicUrl; ?>images/9.jpg" alt=" " class="img-responsive" />
					<h4>Excellent services</h4>
					<p></p>
					<div class="w3_more">
						
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //featured-services -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Farmland
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="<?php echo $DynamicUrl; ?>images/banner.jpg" alt=" " class="img-responsive" />
						<p></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<?php

   include 'views/footer.php';

?>