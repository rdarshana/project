<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Profile View</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url();?>css/business-frontpage_other.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    
    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Other Supplier Registration</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo site_url()."/OtherRegistrationController" ?>">Add Supplier</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url()."/OtherRegistrationController/loadImagesAddView" ?>">Add Photos</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url()."/OtherRegistrationController/viewOtherGroup" ?>">Manage Supplier</a>
                        </li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Image Background Page Header -->
        <!-- Note: The background image is set within the business-casual.css file. -->
        <header class="business-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <div class="container">

            <hr>

            <div class="row">
                <div class="col-sm-8 well">
                    <form class="form-horizontal">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>View Light Supplier</legend>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textinput">Registration No</label>  
                                <div class="col-md-7">
                                    <label class="col-md-7 text-success control-label" for="textinput">
                                        <?php
                                        echo $registration_no;
                                        ?>
                                    </label>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textinput">Supplier Name</label>  
                                <div class="col-md-7">
                                    <label class="col-md-7 text-success control-label" for="textinput">
                                        <?php
                                        echo $supplier_name;
                                        ?>
                                    </label>
                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textarea">Address</label>
                                <div class="col-md-7">                     
                                    <label class="col-md-7 text-success control-label" for="textinput">
                                        <?php
                                        echo $address;
                                        ?>
                                    </label>  
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textinput">Contact Person</label>  
                                <div class="col-md-7">
                                    <label class="col-md-7 text-success control-label" for="textinput">
                                        <?php
                                        echo $contact_person_name;
                                        ?>
                                    </label>  

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textinput">Phone</label>  
                                <div class="col-md-7">
                                    <label class="col-md-7 text-success control-label" for="textinput">
                                        <?php
                                        echo $contact_no;
                                        ?>
                                    </label>  

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textinput">Email</label>  
                                <div class="col-md-7">
                                    <label class="col-md-7 text-success control-label" for="textinput">
                                        <?php
                                        echo $email;
                                        ?>
                                    </label>  

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textinput">Web</label>  
                                <div class="col-md-7">
                                    <label class="col-md-7 text-success control-label" for="textinput">
                                        <?php
                                        echo $web;
                                        ?>
                                    </label>  

                                </div>
                            </div>

                           
                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textarea">Supplier Details</label>
                                <div class="col-md-7">                     
                                    <label class="col-md-7 text-success control-label" for="textinput">
                                        <?php
                                        echo $supplier_details;
                                        ?>
                                    </label>  
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textinput">Charges</label>  
                                <div class="col-md-7">
                                    <label class="col-md-7 text-success control-label" for="textinput">
                                        <?php
                                        echo number_format($charges, 2, '.', '');
                                        ?>
                                    </label>  

                                </div>
                            </div>

                            <!-- File Button --> 
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="filebutton">Uploaded Photo</label>
                                <div class="col-md-9">
                                    <?php
                                  
                                    if ($images) {
                                       
                                        foreach ( $images as $img)  {
                                            ?>
                                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                                <a class="thumbnail fancybox" data-fancybox-group="gallery" href="<?php echo base_url();?>img/uploads/new_<?php echo $img->image_name; ?>">
                                                    <img class="img-responsive" src="<?php echo base_url();?>img/uploads/new_<?php echo $img->image_name; ?>" alt="">
                                                </a>
                                                <!--                                                <div class="caption" style="margin-top: -4%;">
                                                                                                            <p><a class="btn btn-danger btn-xs" role="button" onclick="">Delete</a></p>
                                                                                                        </div>-->
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>

                        </fieldset>
                    </form>   
                </div>
                <div class="col-sm-4">

                </div>
            </div>
            <!-- /.row -->




            <!-- /.row -->

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Your Website 2016</p>
                    </div>
                </div>
                <!-- /.row -->
            </footer>

        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="<?php echo base_url();?>js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="<?php echo base_url();?>fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="<?php echo base_url();?>fancyBox/source/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fancyBox/source/jquery.fancybox.css?v=2.1.5" media="screen" />


        <script type="text/javascript">
                                $(document).ready(function () {
                                    /*
                                     *  Simple image gallery. Uses default settings
                                     */

                                    $('.fancybox').fancybox();

                                    /*
                                     *  Different effects
                                     */

                                    // Change title type, overlay closing speed
                                    $(".fancybox-effects-a").fancybox({
                                        helpers: {
                                            title: {
                                                type: 'outside'
                                            },
                                            overlay: {
                                                speedOut: 0
                                            }
                                        }
                                    });

                                    // Disable opening and closing animations, change title type
                                    $(".fancybox-effects-b").fancybox({
                                        openEffect: 'none',
                                        closeEffect: 'none',
                                        helpers: {
                                            title: {
                                                type: 'over'
                                            }
                                        }
                                    });

                                    // Set custom style, close if clicked, change title type and overlay color
                                    $(".fancybox-effects-c").fancybox({
                                        wrapCSS: 'fancybox-custom',
                                        closeClick: true,
                                        openEffect: 'none',
                                        helpers: {
                                            title: {
                                                type: 'inside'
                                            },
                                            overlay: {
                                                css: {
                                                    'background': 'rgba(238,238,238,0.85)'
                                                }
                                            }
                                        }
                                    });

                                    // Remove padding, set opening and closing animations, close if clicked and disable overlay
                                    $(".fancybox-effects-d").fancybox({
                                        padding: 0,
                                        openEffect: 'elastic',
                                        openSpeed: 150,
                                        closeEffect: 'elastic',
                                        closeSpeed: 150,
                                        closeClick: true,
                                        helpers: {
                                            overlay: null
                                        }
                                    });

                                });
        </script>
        <style type="text/css">
            .fancybox-custom .fancybox-skin {
                box-shadow: 0 0 50px #222;
            }
        </style>

    </body>

</html>
