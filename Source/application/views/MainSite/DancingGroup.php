<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Dancing Listing</title>
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
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/Contact")?>">Contact</a></li>
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/Payment")?>">Payment</a></li>
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/PaymentOld")?>">PaymentOld<span class="caret"></span></a></li>
							<li class="menu-item"><a href="<?php echo base_url("index.php/homeControll/Test")?>">Test</a></li>
                                                        <li class="menu-item current-menu-item"><a href="<?php echo base_url("index.php/homeControll/Category")?>">Category</a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->
			
                        <main>
                            <div class="main-top-padding"></div>
                            <div class="col-md-2"></div>
                            
                            <div class="col-md-7">
                                <?php foreach ($dancingGroup as $object){ ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo base_url();?>img/uploads/new_<?php echo $object->image_name ?>" alt="thumbnail 1" height="300" width="350">
                                    </div>
                                    <div class="col-md-6">
                                        <h2 style="color: #fd5927"> <?php echo $object->group_name ; ?></h2>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <p class="text-left">Contact Person </p>
                                                <p class="text-left">Contact Number </p>
                                                <p class="text-left">E-mail </p>
                                                <p class="text-left">Web Site </p>
                                                <p class="text-left">Dancing Style</p>
                                                <p class="text-left">Address </p>
                                            </div>
                                            <div class="col-md-7">
                                                <p class="text-left">: <?php echo $object->contact_person_name; ?></p>
                                                <p class="text-left">: <?php echo $object->contact_no; ?></p>
                                                <p class="text-left">: <?php echo $object->email; ?></p>
                                                <p class="text-left">: <a href="<?php echo $object->web; ?>"><?php echo $object->web; ?></a></p>
                                                <p class="text-left">: <?php echo $object->dancing_styles; ?></p>
                                                <p class="text-left">: <?php echo $object->address; ?></p>
                                            </div>
                                        </div>

                                    </div> 
                                </div>
                                <p class="text-left"><?php echo $object->group_details; ?></p>
                                    
                                <?php } ?>
                            </div>
                            
                            <div class="col-md-3"></div>
                           
                        </main> 
                        
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