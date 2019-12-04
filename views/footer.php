<!-- footer -->
	<div class="footer">
		<div class="container"> 
			<div class="col-md-4 w3_footer_grid">
				<h3>About Us</h3>
				<p>Our oraganisation is best in service providing.
					We are providing water for grow your food as per your requirement.
				On time delivery with satisfaction.</p>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Navigation</h3>
				<ul>
					<li class="active"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="home">Home</a></li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="services">Services</a></li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="gallery">Gallery</a></li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="contactus">Contact Us</a></li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
			<div class="w3layouts_footer_grid">
				<div class="w3layouts_footer_grid_left">
					<h2><a href="home"><span>F</span>armland</a></h2>
				</div>
				<div class="w3layouts_footer_grid_right">
					<p>© 2019 Farmland. All rights reserved | Design by Me</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
<!-- //footer -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="<?php echo $DynamicUrl; ?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo $DynamicUrl; ?>js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="<?php echo $DynamicUrl; ?>js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>