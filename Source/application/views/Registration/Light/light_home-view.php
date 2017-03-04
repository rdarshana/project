<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Add Light Supplier</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url();?>css/business-frontpage_light.css" rel="stylesheet">
        <link href="<?php echo base_url();?>js/alertifyjs/css/alertify.min.css" rel="stylesheet" type="text/css"/>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style type="text/css">
            .abcd{
                text-align:center;
                float: left;
            }
            .abcd img{
                height:75px;
                width:75px;
                padding:5px;
                border:1px solid #e8debd;
            }
            #img{
                width:20px;
                border:none;
                height:20px;
            }
        </style>

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
                    <a class="navbar-brand" href="#">Light Supplier Registration</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="<?php echo site_url()."/LightsRegistrationController" ?>">Add Supplier</a>
                        </li>
                        <li >
                            <a href="<?php echo site_url()."/LightsRegistrationController/loadImagesAddView" ?>">Add Photos</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url()."/LightsRegistrationController/viewLightGroup" ?>">Manage Supplier</a>
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
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" id="dancing_group_form">
                        <input type="hidden" name="gid" id="gid" value="<?php
                        if (isset($id)) {
                            echo $id;
                        }
                        ?>" />
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Add Light Supplier</legend>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textinput">Registration No</label>  
                                <div class="col-md-7">
                                    <input name="reg_no" id="reg_no" type="text" placeholder="" readonly value="<?php
                                    if (isset($id)) {
                                        echo $registration_no;
                                    }
                                    else
                                    {
                                         echo $regNo;
                                    }
                                    ?>" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textinput">Supplier Name</label>  
                                <div class="col-md-7">
                                    <input name="supplier_name" id="supplier_name" type="text" placeholder="" value="<?php
                                    if (isset($id)) {
                                        echo $supplier_name;
                                    }
                                    ?>" required class="form-control input-md">

                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textarea">Address</label>
                                <div class="col-md-7">                     
                                    <textarea class="form-control" id="address" name="address" required><?php
                                    if (isset($id)) {
                                        echo $address;
                                    }
                                    ?></textarea>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textinput">Contact Person</label>  
                                <div class="col-md-7">
                                    <input id="person_name" name="person_name" type="text" placeholder="" value="<?php
                                    if (isset($id)) {
                                        echo $contact_person_name;
                                    }
                                    ?>" required class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textinput">Phone</label>  
                                <div class="col-md-7">
                                    <input id="phone" name="phone" type="text" placeholder="" value="<?php
                                    if (isset($id)) {
                                        echo $contact_no;
                                    }
                                    ?>" required class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textinput">Email</label>  
                                <div class="col-md-7">
                                    <input id="email" name="email" type="email" placeholder="" value="<?php
                                           if (isset($id)) {
                                               echo $email;
                                           }
                                           ?>" required class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textinput">Web</label>  
                                <div class="col-md-7">
                                    <input id="web" name="web" type="text" placeholder="" value="<?php
                                           if (isset($id)) {
                                               echo $web;
                                           }
                                           ?>" class="form-control input-md">

                                </div>
                            </div>

                           

                            

                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textarea">Supplier Details</label>
                                <div class="col-md-7">                     
                                    <textarea class="form-control" id="supplier_details" name="supplier_details" required><?php
                                    if (isset($id)) {
                                        echo $supplier_details;
                                    }
                                           ?></textarea>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textinput">Charges</label>  
                                <div class="col-md-7">
                                    <input id="charge" name="charge" type="text" placeholder="" value="<?php
                                    if (isset($id)) {
                                        echo $charges;
                                    }
                                           ?>" required class="form-control input-md">

                                </div>
                            </div>

                            <!-- Button (Double) -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="button1id"></label>
                                <div class="col-md-7">
                                    <div class="pull-left" id="loding_div"></div>
                                    <button type="reset" id="button1id" name="button1id" class="btn btn-warning">Cancel</button>
                                    <button type="submit" id="button2id" class="btn btn-success">Submit</button>
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
        <script src="<?php echo base_url();?>js/jquery.form.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>js/alertifyjs/alertify.min.js" type="text/javascript"></script>
        <script>
            $("#dancing_group_form").attr("action", "<?php echo site_url()."/LightsRegistrationController/createLightGroup" ?>");
            $(document).ready(function () {
                $("#dancing_group_form").ajaxForm({
                    beforeSend: function () {
                        $("#loding_div").html('<img src="<?php echo "img/ajax-loader.gif"; ?>">');
                        $("#button2id").attr("disabled", true);
                        $("#dancing_group_form").attr("action", "<?php echo site_url()."/LightsRegistrationController/createLightGroup" ?>");
                    },
                    success: function (data) {
                        var msg1 = data.indexOf("success");
                        var msg2 = data.indexOf("1");
                        if (msg1 != "-1") {
                            alertify.success('Data Saved Successfully !');
                            $("#dancing_group_form").resetForm();
                            $("#button2id").attr("disabled", false);
                            setTimeout(function () {
                                window.location.href = "<?php echo site_url()."/LightsRegistrationController/viewLightGroup" ?>";
                            }, 1000);
                        } else if (msg2 != "-1") {
                            alertify.success('Data Update Successfully !');
                            $("#dancing_group_form").resetForm();
                            $("#button2id").attr("disabled", false);
                            setTimeout(function () {
                                window.location.href = "<?php echo site_url()."/LightsRegistrationController/viewLightGroup" ?>";
                            }, 1000);
                        } else
                        {
                            alertify.error(data);
                            $("#button2id").attr("disabled", false);
                            $("#loding_div").html('');
                        }
                    },
                    error: function (err) {

                        alertify.error(err);
                        $("#button2id").attr("disabled", false);
                    }
                });
            });
        </script>
    </body>

</html>
