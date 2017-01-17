<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Gallery</title>
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
							<li class="menu-item current-menu-item"><a href="<?php echo base_url("index.php/homeControll/Gallery")?>">Gallery</a></li>
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/Download")?>">Download</a></li>
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/Blog")?>">Blog</a></li>
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/Contact")?>">Contact</a></li>
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
				<div class="fullwidth-block gallery">
					<div class="container">
						<div class="content fullwidth">
							<h2 class="entry-title">Gallery</h2>
							<div class="filter-links filterable-nav">
								<select class="mobile-filter">
									<option value="*">Show all</option>
									<option value=".concert">Concert</option>
									<option value=".band">Band</option>
									<option value=".stuff">Stuff</option>
								</select>
								<a href="#" class="current" data-filter="*">Show all</a>
								<a href="#" data-filter=".concert">Concert</a>
								<a href="#" data-filter=".band">Band</a>
								<a href="#" data-filter=".stuff">Stuff</a>
							</div>
							<div class="filterable-items">
								<div class="filterable-item concert">
									<a href="<?php echo asset_url();?>dummy/large-gallery/gc1.jpg"><figure><img src="<?php echo asset_url();?>dummy/gc1.jpg" alt="gallery 1"></figure></a>
								</div>
								<div class="filterable-item concert">
									<a href="<?php echo asset_url();?>dummy/large-gallery/gc2.jpg"><figure><img src="<?php echo asset_url();?>dummy/gc2.jpg" alt="gallery 2"></figure></a>
								</div>
								<div class="filterable-item stuff">
									<a href="<?php echo asset_url();?>dummy/large-gallery/gs1.jpg"><figure><img src="<?php echo asset_url();?>dummy/gs1.jpg" alt="gallery 3"></figure></a>
								</div>
								<div class="filterable-item concert">
									<a href="<?php echo asset_url();?>dummy/large-gallery/gc3.jpg"><figure><img src="<?php echo asset_url();?>dummy/gc3.jpg" alt="gallery 4"></figure></a>
								</div>
								<div class="filterable-item band">
									<a href="<?php echo asset_url();?>dummy/large-gallery/gb1.jpg"><figure><img src="<?php echo asset_url();?>dummy/gb1.jpg" alt="gallery 5"></figure></a>
								</div>
								<div class="filterable-item stuff">
									<a href="<?php echo asset_url();?>dummy/large-gallery/gs2.jpg"><figure><img src="<?php echo asset_url();?>dummy/gs2.jpg" alt="gallery 6"></figure></a>
								</div>
								<div class="filterable-item concert">
									<a href="<?php echo asset_url();?>dummy/large-gallery/gc4.jpg"><figure><img src="<?php echo asset_url();?>dummy/gc4.jpg" alt="gallery 7"></figure></a>
								</div>
								<div class="filterable-item band">
									<a href="<?php echo asset_url();?>dummy/large-gallery/gb2.jpg"><figure><img src="<?php echo asset_url();?>dummy/gb2.jpg" alt="gallery 8"></figure></a>
								</div>
								<div class="filterable-item band">
									<a href="<?php echo asset_url();?>dummy/large-gallery/gb3.jpg"><figure><img src="<?php echo asset_url();?>dummy/gb3.jpg" alt="gallery 9"></figure></a>
								</div>
								<div class="filterable-item stuff">
									<a href="<?php echo asset_url();?>dummy/large-gallery/gs3.jpg"><figure><img src="<?php echo asset_url();?>dummy/gs3.jpg" alt="gallery 10"></figure></a>
								</div>
								<div class="filterable-item band">
									<a href="<?php echo asset_url();?>dummy/large-gallery/gb4.jpg"><figure><img src="<?php echo asset_url();?>dummy/gb4.jpg" alt="gallery 11"></figure></a>
								</div>
								<div class="filterable-item stuff">
									<a href="<?php echo asset_url();?>dummy/large-gallery/gs4.jpg"><figure><img src="<?php echo asset_url();?>dummy/gs4.jpg" alt="gallery 12"></figure></a>
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
		
	</body>

</html>