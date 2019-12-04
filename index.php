<?php

include 'controller/MyController.php';

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
<title>Farmland - Home page</title>
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
	<div class="banner">
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
					<nav>
						<ul class="nav navbar-nav link-effect-5" id="link-effect-5">
							<li class="active"><a href="home" data-hover="Home">Home</a></li>
							<li><a href="services" data-hover="Services">Services</a></li>
							<li><a href="gallery" data-hover="Gallery">Gallery</a></li>
							<li><a href="contactus" data-hover="Contact Us">Contact Us</a></li>
							<li><a href="login" data-hover="Login">Login</a></li>
						
						</ul>
						<div class="w3_social_icons">
							<ul class="w3layouts_social">	
								<li><a href="#" class="w3l_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3l_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3l_instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</nav>
				</div>
			</nav>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="banner_info">
								<h3>we grow best organic food</h3>
								<p></p>
							</div>
						</li>
						<li>
							<div class="banner_info">
								<h3>we can raise your farming</h3>
								<p></p>
							</div>
						</li>
						<li>
							<div class="banner_info">
								<h3>grow your crops</h3>
								<p></p>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<script defer src="<?php echo $DynamicUrl; ?>js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
			<!-- //flexSlider -->
		</div>
	</div>
<!-- //banner -->
	
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-6 w3layouts_banner_bottom_left">
				<img src="<?php echo $DynamicUrl; ?>images/1.jpg" alt=" " class="img-responsive" />
			</div>
			<div class="col-md-6 w3layouts_banner_bottom_right">
				<h4>About us</h4>
				<h3>welcome to Farmland</h3>
				<p>A farm is an area of land that is devoted primarily to agricultural processes with the primary objective of producing food and other crops; it is the basic facility in food production.
					<br>We are providing water for your farm as per your requirement.
				On time delivery with satisfaction</p>
				<div class="w3_more">
					<a href="#" class="link link--yaku" data-toggle="modal" data-target="#myModal">
						<span>R</span><span>e</span><span>a</span><span>d</span> <span>M</span><span>o</span><span>r</span><span>e</span>
					</a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //banner-bottom -->
	
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
						<p>A farm is an area of land that is devoted primarily to agricultural processes with the primary objective of producing food and other crops; it is the basic facility in food production.The name is used for specialised units such as arable farms, vegetable farms, fruit farms, dairy, pig and poultry farms, and land used for the production of natural fibres, biofuel and other commodities. It includes ranches, feedlots, orchards, plantations and estates, smallholdings and hobby farms, and includes the farmhouse and agricultural buildings as well as the land. In modern times the term has been extended so as to include such industrial operations as wind farms and fish farms, both of which can operate on land or sea.
Farming originated independently in different parts of the world, as hunter gatherer societies transitioned to food production rather than, food capture. It may have started about 12,000 years ago with the domestication of livestock in the Fertile Crescent in western Asia, soon to be followed by the cultivation of crops.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- about -->
	<div class="about">
		<div class="container">
			<h2>organic products grown with love</h2>
			<p>when quality matters to you and your customers</p>
			<div class="w3l_about_pos">
				<img src="<?php echo $DynamicUrl; ?>images/1.png" alt=" " class="img-responsive" />
			</div>
		</div>
	</div>
<!-- //about -->
	

<!-- testimonials -->
	<div class="testimonials">
		<div class="container"> 
			<p class="w3ls_para">Farmland</p>
			<h3 class="agileits_head">What Our Clients Say</h3>
			<div class="agile_testimonials_grids">
				<ul id="flexiselDemo1">	
					<li>
						<div class="agile_testimonials_grid">
							<div class="agile_testimonials_grid1">
								<p>Supportive organisation for farmer.Thank you for your all support</p>
								<div class="w3_agile_testimonials_grid">
									<div class="w3_agile_testimonials_grid_left">
										<img src="<?php echo $DynamicUrl; ?>images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="w3_agile_testimonials_grid_right">
										<h4>Michael Rick</h4>
										<h5>Farmer</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="agile_testimonials_grid">
							<div class="agile_testimonials_grid1">
								<p>Good service provider. I am very thankful to you.</p>
								<div class="w3_agile_testimonials_grid">
									<div class="w3_agile_testimonials_grid_left">
										<img src="<?php echo $DynamicUrl; ?>images/4.png" alt=" " class="img-responsive" />
									</div>
									<div class="w3_agile_testimonials_grid_right">
										<h4>Andria Paul</h4>
										<h5>Farmer</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="agile_testimonials_grid">
							<div class="agile_testimonials_grid1">
								<p>Great work. Thank you.</p>
								<div class="w3_agile_testimonials_grid">
									<div class="w3_agile_testimonials_grid_left">
										<img src="<?php echo $DynamicUrl; ?>images/3.png" alt=" " class="img-responsive" />
									</div>
									<div class="w3_agile_testimonials_grid_right">
										<h4>Winsten Carl</h4>
										<h5>Farmer</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</li>
				</ul>
					<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 2,
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
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 2
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="<?php echo $DynamicUrl; ?>js/jquery.flexisel.js"></script>
			</div>
		</div>
	</div>
<!-- //testimonials -->
<?php

   include 'views/footer.php';

?>