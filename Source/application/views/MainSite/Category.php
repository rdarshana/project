<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Blog</title>
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
							<li class="menu-item current-menu-item"><a href="<?php echo base_url("index.php/homeControll/Blog")?>">Blog</a></li>
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
									<h2 class="entry-title">Blog</h2>

									<div class="post">
										<div class="entry-date">
											<div class="date">23</div>
											<span class="month">Jun</span>
										</div>
										<div class="featured-image">
											<img src="<?php echo asset_url();?>dummy/featured-image-1.jpg" alt="">
										</div>
										<h2 class="entry-title"><a href="#">Sed et persipiatis unde omnis iste natus</a></h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati officia quo dicta, similique, reiciendis beatae enim adipisci voluptates molestiae iusto, totam harum aliquid. Non officiis nobis, ut nesciunt eligendi asperiores.</p>
										<a href="#">Read more</a>
									</div>

									<div class="post">
										<div class="entry-date">
											<div class="date">23</div>
											<span class="month">Jun</span>
										</div>
										<div class="featured-image">
											<img src="<?php echo asset_url();?>dummy/featured-image-2.jpg" alt="">
										</div>
										<h2 class="entry-title"><a href="#">Consectetur adipisicing elit</a></h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati officia quo dicta, similique, reiciendis beatae enim adipisci voluptates molestiae iusto, totam harum aliquid. Non officiis nobis, ut nesciunt eligendi asperiores.</p>
										<a href="#">Read more</a>
									</div>

									<div class="post">
										<div class="entry-date">
											<div class="date">23</div>
											<span class="month">Jun</span>
										</div>
										<div class="featured-image">
											<img src="<?php echo asset_url();?>dummy/featured-image-3.jpg" alt="">
										</div>
										<h2 class="entry-title"><a href="#">Adipisci voluptates molestiae iusto</a></h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati officia quo dicta, similique, reiciendis beatae enim adipisci voluptates molestiae iusto, totam harum aliquid. Non officiis nobis, ut nesciunt eligendi asperiores.</p>
										<a href="#">Read more</a>
									</div>

									<div class="post">
										<div class="entry-date">
											<div class="date">23</div>
											<span class="month">Jun</span>
										</div>
										<div class="featured-image">
											<img src="<?php echo asset_url();?>dummy/featured-image-4.jpg" alt="">
										</div>
										<h2 class="entry-title"><a href="#">Obcaecati officia quo dicta</a></h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati officia quo dicta, similique, reiciendis beatae enim adipisci voluptates molestiae iusto, totam harum aliquid. Non officiis nobis, ut nesciunt eligendi asperiores.</p>
										<a href="#">Read more</a>
									</div>

									<div class="post">
										<div class="entry-date">
											<div class="date">23</div>
											<span class="month">Jun</span>
										</div>
										<div class="featured-image">
											<img src="<?php echo asset_url();?>dummy/featured-image-5.jpg" alt="">
										</div>
										<h2 class="entry-title"><a href="#">Nesciunt eligendi asperiores</a></h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati officia quo dicta, similique, reiciendis beatae enim adipisci voluptates molestiae iusto, totam harum aliquid. Non officiis nobis, ut nesciunt eligendi asperiores.</p>
										<a href="#">Read more</a>
									</div>
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