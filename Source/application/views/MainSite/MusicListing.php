<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Music Listing</title>
                 <!-- Bootstrap Core CSS -->
                <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
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
							<li class="menu-item current-menu-item"><a href="<?php echo base_url("index.php/homeControll/DancingListing")?>">Dancing<span class="caret"></span></a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
                            
                            
 <!--                           
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
	-->		</header> <!-- .site-header -->
			                      
                        
                        <main>
                            </br>
                            
                            <div class="row">
                                <div class="col-md-2">
                                    
                                </div>
                                <div class="col-md-7">
                                    <h1>Music Listing</h1>
                                    <?php foreach ($musicListing as $object){ ?>
                                    <div class="category_listing">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="<?php echo base_url();?>img/uploads/new_<?php echo $object->image_name ?>" alt="thumbnail 1" height="190" width="200">
                                            </div>
                                            <div class="col-md-9">
                                                <ul>
                                                    <li style="list-style-type: none;"><h3><a href="<?php echo base_url("index.php/homeControll/DancingLoadById/MusicGroup/$object->id")?>"><?php echo $object->group_name ?></a></h3></li>                                       
                                                    <li style="list-style-type: none;"><?php echo $object->group_details ?></li>
                                                    
                                                    <li style="list-style-type: none ; margin-top: 10px;"><?php echo $object->contact_no ?></li>
                                                    <li style="list-style-type: none; margin-top: 10px;"><a href="<?php echo base_url("index.php/homeControll/MusicLoadById/MusicGroup/$object->id")?>" class="btn btn-default btn-sm center-block">View More Details</a></li>
                                               </ul>
                                            </div>
                                        </div>
                                    </div>
                                    </br>
                                    <?php } ?>
                                </div>
                                <div class="col-md-3">
                                    
                                </div>
                            </div>
                            
                        </main>
                        
                        <div class="main-bottom-padding"></div>
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
       
        <!-- Bootstrap Core JavaScript -->
        
		<script src="<?php echo asset_url();?>js/jquery-1.11.1.min.js"></script>
                <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
		<script src="<?php echo asset_url();?>js/plugins.js"></script>
		<script src="<?php echo asset_url();?>js/app.js"></script>
		
	</body>

</html>