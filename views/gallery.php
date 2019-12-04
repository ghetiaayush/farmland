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
<title>Farmland - Gallery page</title>
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
	<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Farmland - gallery</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Farmland Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link rel="stylesheet" href="css/colorbox.css" />
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
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
							<li><a href="services" data-hover="Services">Services</a></li>
							<li  class="active"><a href="gallery" data-hover="Gallery">Gallery</a></li>
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
							<li  class="active"><a href="gallery" data-hover="Gallery">Gallery</a></li>
							<li><a href="contactus" data-hover="Contact Us">Contact Us</a></li>
							<li ><a href="login" data-hover="Login">Login</a></li>
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
	
<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<p class="w3ls_para">Farmland</p>
			<h3 class="agileits_head">Gallery</h3>
	
			<div class="w3l_gallery_grids">
				<div class="bs-example bs-example-tabs wthree_example_tab" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Agriculture</a></li>
						<li role="presentation"><a href="#planting" role="tab" id="planting-tab" data-toggle="tab" aria-controls="planting">Planting</a></li>
						<li role="presentation"><a href="#gardening" role="tab" id="gardening-tab" data-toggle="tab" aria-controls="gardening">Gardening</a></li>
						<li role="presentation"><a href="#landscaping" role="tab" id="landscaping-tab" data-toggle="tab" aria-controls="landscaping">Landscaping</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<div class="w3l_gallery_grids1">
								<div class="col-md-4 w3l_gallery_grid">
									<div class="agileinfo_gallery_grid">
										<a class="group1" href="images/6.jpg" title="Farmland">
											<div class="hovereffect">
												<img src="<?php echo $DynamicUrl; ?>images/6.jpg" alt=" " class="img-responsive" />
												
											</div>
										</a>
									</div>
									<div class="agileinfo_gallery_grid">
										<a class="group1" href="images/9.jpg" title="Farmland">
											<div class="hovereffect">
												<img src="<?php echo $DynamicUrl; ?>images/9.jpg" alt=" " class="img-responsive" />
												
											</div>
										</a>
									</div>
									<div class="agileinfo_gallery_grid">
										<a class="group1" href="images/12.jpg" title="Farmland">
											<div class="hovereffect">
												<img src="<?php echo $DynamicUrl; ?>images/12.jpg" alt=" " class="img-responsive" />
												
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3l_gallery_grid">
									<div class="agileinfo_gallery_grid">
										<a class="group1" href="images/7.jpg" title="Farmland">
											<div class="hovereffect">
												<img src="<?php echo $DynamicUrl; ?>images/7.jpg" alt=" " class="img-responsive" />
												
											</div>
										</a>
									</div>
									<div class="agileinfo_gallery_grid">
										<a class="group1" href="images/11.jpg" title="Farmland">
											<div class="hovereffect">
												<img src="<?php echo $DynamicUrl; ?>images/11.jpg" alt=" " class="img-responsive" />
												
											</div>
										</a>
									</div>
									<div class="agileinfo_gallery_grid">
										<a class="group1" href="images/13.jpg" title="Farmland">
											<div class="hovereffect">
												<img src="<?php echo $DynamicUrl; ?>images/13.jpg" alt=" " class="img-responsive" />
												
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3l_gallery_grid">
									<div class="agileinfo_gallery_grid">
										<a class="group1" href="images/8.jpg" title="Farmland">
											<div class="hovereffect">
												<img src="<?php echo $DynamicUrl; ?>images/8.jpg" alt=" " class="img-responsive" />
												
											</div>
										</a>
									</div>
									<div class="agileinfo_gallery_grid">
										<a class="group1" href="images/14.jpg" title="Farmland">
											<div class="hovereffect">
												<img src="<?php echo $DynamicUrl; ?>images/14.jpg" alt=" " class="img-responsive" />
												
											</div>
										</a>
									</div>
									<div class="agileinfo_gallery_grid">
										<a class="group1" href="images/15.jpg" title="Farmland">
											<div class="hovereffect">
												<img src="<?php echo $DynamicUrl; ?>images/15.jpg" alt=" " class="img-responsive" />
												
											</div>
										</a>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="planting" aria-labelledby="planting-tab">
							<div class="col-md-4 w3l_gallery_grid">
								<div class="agileinfo_gallery_grid">
									<a class="group1" href="images/12.jpg" title="Farmland">
										<div class="hovereffect">
											<img src="<?php echo $DynamicUrl; ?>images/12.jpg" alt=" " class="img-responsive" />
											
										</div>
									</a>
								</div>
								<div class="agileinfo_gallery_grid">
									<a class="group1" href="images/14.jpg" title="Farmland">
										<div class="hovereffect">
											<img src="<?php echo $DynamicUrl; ?>images/14.jpg" alt=" " class="img-responsive" />
											
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 w3l_gallery_grid">
								<div class="agileinfo_gallery_grid">
									<a class="group1" href="images/8.jpg" title="Farmland">
										<div class="hovereffect">
											<img src="<?php echo $DynamicUrl; ?>images/8.jpg" alt=" " class="img-responsive" />
											
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 w3l_gallery_grid">
								<div class="agileinfo_gallery_grid">
									<a class="group1" href="images/13.jpg" title="Farmland">
										<div class="hovereffect">
											<img src="<?php echo $DynamicUrl; ?>images/13.jpg" alt=" " class="img-responsive" />
											
										</div>
									</a>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="gardening" aria-labelledby="gardening-tab">
							<div class="col-md-4 w3l_gallery_grid">
								<div class="agileinfo_gallery_grid">
									<a class="group1" href="images/7.jpg" title="Farmland">
										<div class="hovereffect">
											<img src="<?php echo $DynamicUrl; ?>images/7.jpg" alt=" " class="img-responsive" />
											
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 w3l_gallery_grid">
								<div class="agileinfo_gallery_grid">
									<a class="group1" href="images/14.jpg" title="Farmland">
										<div class="hovereffect">
											<img src="<?php echo $DynamicUrl; ?>images/14.jpg" alt=" " class="img-responsive" />
											
										</div>
									</a>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="landscaping" aria-labelledby="landscaping-tab">
							<div class="col-md-4 w3l_gallery_grid">
								<div class="agileinfo_gallery_grid">
									<a class="group1" href="images/6.jpg" title="Farmland">
										<div class="hovereffect">
											<img src="<?php echo $DynamicUrl; ?>images/6.jpg" alt=" " class="img-responsive" />
											
										</div>
									</a>
								</div>
								<div class="agileinfo_gallery_grid">
									<a class="group1" href="images/16.jpg" title="Farmland">
										<div class="hovereffect">
											<img src="<?php echo $DynamicUrl; ?>images/16.jpg" alt=" " class="img-responsive" />
											
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 w3l_gallery_grid">
								<div class="agileinfo_gallery_grid">
									<a class="group1" href="images/13.jpg" title="Farmland">
										<div class="hovereffect">
											<img src="<?php echo $DynamicUrl; ?>images/13.jpg" alt=" " class="img-responsive" />
											
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 w3l_gallery_grid">
								<div class="agileinfo_gallery_grid">
									<a class="group1" href="images/17.jpg" title="Farmland">
										<div class="hovereffect">
											<img src="<?php echo $DynamicUrl; ?>images/17.jpg" alt=" " class="img-responsive" />
											
										</div>
									</a>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<script src="js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
<!-- //gallery -->
	<?php

   include 'footer.php';

?>	