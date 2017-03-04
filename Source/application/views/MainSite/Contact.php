<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Contact</title>
		<!-- Loading third party fonts -->
		<link href="<?php echo asset_url();?>css/homefont.css" rel="stylesheet" type="text/css">
		<link href="<?php echo asset_url();?>fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="<?php echo asset_url();?>style.css">
		
		<!--[if lt IE 9]>
		<script src="<?php echo asset_url();?>js/ie-support/html5.js"></script>
		<script src="<?php echo asset_url();?>js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body>
		
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="<?php echo base_url("index.php/homeControll")?>" id="branding">
						<img src="<?php echo asset_url();?>dummy/logo.png" alt="Site Title">
						<small class="site-description">Music & Other Entertainment Mgt. For Any Occassion</small>
					</a> <!-- #branding -->
					
					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll")?>">Home</a></li>
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/AboutUs")?>">About</a></li>
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/Gallery")?>">Gallery</a></li>
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/Download")?>">Download</a></li>
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/Blog")?>">Blog</a></li>
							<li class="menu-item current-menu-item"><a href="<?php echo base_url("index.php/homeControll/Contact")?>">Contact</a></li>
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/Payment")?>">Payment</a></li>
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/PaymentOld")?>">PaymentOld<span class="caret"></span></a></li>
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/Test")?>">Test</a></li>
                                                        <li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/Category")?>">Category</a></li>
                                                        
                                                        
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->

			<main class="main-content">
				<div class="fullwidth-block inner-content">
					<div class="container">
						<h2 class="page-title">Contact Us</h2>
						<div class="row">
							<div class="col-md-6">
								<form action="#" class="contact-form">
									<input type="text" placeholder="Your name"..>
									<input type="text" placeholder="Email Address..">
									<input type="text" placeholder="Website...">
									<textarea name="#" placeholder="Message..."></textarea>
									<input type="submit" value="Send message">
								</form>
							</div>
							<div class="col-md-6">
								<div class="map-wrapper">
<!--									<div class="map"></div>-->
									<div>
										<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyD57VIbxC_SutbRex6Dtvv-P0HFrvGqnkQ'></script><div style='overflow:hidden;height:325px;width:555px;'><div id='gmap_canvas' style='height:325px;width:555px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://mapswebsite.net/'>embedding google maps</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=c34c037fe1f3cc97dc4e0cf4399baa3864acb213'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(6.709182905933762,80.00803662341762),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(6.709182905933762,80.00803662341762)});infowindow = new google.maps.InfoWindow({content:'<strong>Music SHA</strong><br>Raigama, Bandaragama, Sri lanka<br> <br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
									</div>
									<address>
										<div class="row">
											<div class="col-sm-6">
												<strong>Music SHA, </strong>
												<span>Raigama, Bandaragama.</span>
											</div>
											<div class="col-sm-6">
												<a href="mailto:wtrathnayake@yahoo.com">wtrathnayake@yahoo.com</a> <br>
												(+94) 429 234 890
											</div>
										</div>
									</address>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .testimonial-section -->

				
			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<img src="<?php echo asset_url();?>dummy/logo-footer.png" alt="Site Name">
					
					<address>
						<p>Raigama, Bandaragama <br><a href="tel:354543543">(+94) 429 234 890</a> <br> <a href="mailto:wtrathnayake@yahoo.com">wtrathnayake@yahoo.com</a></p> 
					</address> 
					
					<form action="#" class="newsletter-form">
						<input type="email" placeholder="Enter your email to join newsletter...">
						<input type="submit" class="button cut-corner" value="Subscribe">
					</form> <!-- .newsletter-form -->
					
					<div class="social-links">
						<a href="#"><i class="fa fa-facebook-square"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div> <!-- .social-links -->
					
					<p class="copy">All right reserved</p>
				</div>
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->

		<script src="<?php echo asset_url();?>js/jquery-1.11.1.min.js"></script>
		<script src="<?php echo asset_url();?>js/plugins.js"></script>
		<script src="<?php echo asset_url();?>js/app.js"></script>

<!--		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>-->

	</body>

</html>