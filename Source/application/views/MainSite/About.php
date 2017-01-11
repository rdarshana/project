<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>About Us</title>
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
							<li class="menu-item current-menu-item"><a href="<?php echo base_url("index.php/homeControll/AboutUs")?>">About</a></li>
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/Gallery")?>">Gallery</a></li>
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/Download")?>">Download</a></li>
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/Blog")?>">Blog</a></li>
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/Contact")?>">Contact</a></li>
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/Payment")?>">Payment</a></li>
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/PaymentOld")?>">PaymentOld<span class="caret"></span></a></li>
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/Test")?>">Test</a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->
			
			<main class="main-content">
				<div class="fullwidth-block inner-content">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<div class="content">
									<h2 class="entry-title">Our History</h2>
									<figure class="featured-image">
										<img src="<?php echo asset_url();?>dummy/group1.jpg" alt="post image">
									</figure>
									<p class="leading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat odio autem iste neque architecto alias culpa, ab libero, praesentium esse natus quae possimus sed qui dolorum laudantium illum, incidunt eligendi?</p>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>

									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
								</div>
							</div>
							<div class="col-md-4 col-md-push-1">
								<aside class="sidebar">
									<div class="widget">
										<h3 class="widget-title">Discography</h3>
										<ul class="discography-list">
											<li>
												<figure class="cover"><img src="<?php echo asset_url();?>dummy/thumbnail-1.jpg" alt="thumbnail 1"></figure>
												<div class="detail">
													<h3><a href="#">Deserunt mollitia animi</a></h3>
													<span class="year">2004</span>
													<span class="track">17 tracks</span>
												</div>
											</li>
											<li>
												<figure class="cover"><img src="<?php echo asset_url();?>dummy/thumbnail-2.jpg" alt="thumbnail 2"></figure>
												<div class="detail">
													<h3><a href="#">Deserunt mollitia animi</a></h3>
													<span class="year">2004</span>
													<span class="track">17 tracks</span>
												</div>
											</li>
											<li>
												<figure class="cover"><img src="<?php echo asset_url();?>dummy/thumbnail-3.jpg" alt="thumbnail 3"></figure>
												<div class="detail">
													<h3><a href="#">Deserunt mollitia animi</a></h3>
													<span class="year">2004</span>
													<span class="track">17 tracks</span>
												</div>
											</li>
											<li>
												<figure class="cover"><img src="<?php echo asset_url();?>dummy/thumbnail-4.jpg" alt="thumbnail 4"></figure>
												<div class="detail">
													<h3><a href="#">Deserunt mollitia animi</a></h3>
													<span class="year">2004</span>
													<span class="track">17 tracks</span>
												</div>
											</li>
											<li>
												<figure class="cover"><img src="<?php echo asset_url();?>dummy/thumbnail-5.jpg" alt="thumbnail 5"></figure>
												<div class="detail">
													<h3><a href="#">Deserunt mollitia animi</a></h3>
													<span class="year">2004</span>
													<span class="track">17 tracks</span>
												</div>
											</li>
										</ul>
									</div>
								</aside>
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