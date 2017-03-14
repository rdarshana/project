<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Music Group</title>
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
                            <?php foreach ($musicGroup as $object){ ?>
                            <div class="row">
                            <div class="col-md-2"></div>
                            
                            <div class="col-md-7">
                                
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
                                                <p class="text-left">: <?php echo $object->music_styles; ?></p>
                                                <p class="text-left">: <?php echo $object->address; ?></p>
                                            </div>
                                        </div>

                                    </div> 
                                </div>
                                <div style="margin-top: 20px"></div>
                                <p class="text-left"><?php echo $object->group_details; ?></p>
                            </div>
                            
                            <div class="col-md-3"></div>
                            </div>
                            
                            <div style="margin-top: 35px"></div>
                            
                            <div class="row">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-7 well">
                                    <!--<form method="get" action="SendMail/SendMailTo" class="form-horizontal">-->
                                      <?php 
                                        $attributes = array("class" => "form-horizontal", "id" => "employeeform", "name" => "employeeform");
                                        echo form_open("SendMail/SendMailTo", $attributes);?>
                                        <fieldset>
                                            <!-- Form Name -->
                                            <legend>Send Booking Request to <?php echo $object->group_name; ?></legend>
                                            
                                            <!-- Text input -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="textinput">Name</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" name="u_name" id="txtname" placeholder="Name">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="textinput">Phone</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" name="u_phone" id="txtphone" placeholder="Phone">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="email">E-mail</label>
                                                <div class="col-md-7">
                                                    <input type="email" class="form-control" name="u_email" id="txtemail" placeholder="Email">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="textinput">Message</label>
                                                <div class="col-md-7">
                                                    <textarea class="form-control" name="u_message" id="txtmessage" rows="4" placeholder="message" required="true"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="textimnput">Wedding Date</label>
                                                <div class="col-md-7">
                                                     <input type="text" class="form-control" name="u_wedingDate" id="txtphone" placeholder="mm / dd/ yyyy">
                                                </div>
                                            </div>
                                           
                                            
                                            
                                            <div class="form-group">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <div class="col-md-1">
                                                            <input id="checkbox-0" name="u_sendMail" style="vertical-align: middle; margin: 17px;" class="styled" value="yes" type="checkbox">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="col-md-3 control-label" for="checkbox-0"> E-Mail </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input id="checkbox-0" name="u_needCall" style="vertical-align: middle; margin: 17px;" class="styled  align-right" value="yes" type="checkbox">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="control-label align-left" for="checkbox-0">Need Call Back</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            
                                            <div class="form-group">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <!--<button class="btn btn-large btn-block btn-default" value="submit" style="color: #00aeaf;">Book Now</button>-->
                                                    <button class="btn btn-large btn-block btn-success" value="submit">Book Now</button>
                                                    <!--<button type="submit" id="button2id" class="btn btn-success">Submit</button> -->
                                                </div>
                                            </div>
                                            
                                            <!--<div class="input-group date" data-provide="datepicker">
                                                <input type="text" class="form-control">
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-th"></span>
                                                </div>
                                            </div>-->
                                            
                                            <!--<input size="16" type="text" value="2012-06-15 14:45" readonly class="form_datetime">-->
                                            
                                            <!--<div class="input-append date form_datetime">
                                                    <input size="16" type="text" value="" readonly>
                                                    <span class="add-on"><i class="icon-th"></i></span>
                                            </div>-->

                                        </fieldset>
                                    </form>
                                </div>
                                <div class="col-md-3">
                                    
                                </div>
                            </div>
                           <?php } ?>
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

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.min.css" />
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    
		<!--<script src="<?php echo asset_url();?>js/jquery-1.11.1.min.js"></script>-->
               <!-- <script src="<?php echo base_url();?>js/jquery.js"></script>-->
                <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
		<script src="<?php echo asset_url();?>js/plugins.js"></script>
		<script src="<?php echo asset_url();?>js/app.js"></script>
                
                <script type="text/javascript">
                   
               /* $(document).ready(function () {
                    
                     $('.datepicker').datepicker();
                     
                      $(".form_datetime").datetimepicker({
                           format: "dd MM yyyy - hh:ii"
                        });
                        
                        alert('hi');
                  });
                  */
                  </script>
		
	</body>

</html>