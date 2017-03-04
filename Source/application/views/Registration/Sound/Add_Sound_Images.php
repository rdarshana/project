<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Add Profile Images</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url();?>css/business-frontpage_sound.css" rel="stylesheet">
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
                    <a class="navbar-brand" href="#">Sound Supplier Registration</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li >
                            <a href="<?php echo site_url()."/SoundsRegistrationController" ?>">Add Supplier</a>
                        </li>
                        <li class="active">
                            <a href="<?php echo site_url()."/SoundsRegistrationController/loadImagesAddView" ?>">Add Photos</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url()."/SoundsRegistrationController/viewSoundGroup" ?>">Manage Supplier</a>
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
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" id="photo_form">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Add Sound Supplier Images</legend>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textinput">Sound Supplier</label>  
                                <div class="col-md-7">
                                    <select name="group" id="group" required class="form-control">
                                        <option value=""> - Please Select Supplier - </option>
                                        <?php
                                        if ($allDetails) {
                                            foreach ($allDetails as $imgData) {
                                                ?>
                                                <option value="<?php echo $imgData->id; ?>"> <?php echo $imgData->group_name; ?> </option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <!-- File Button --> 
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="filebutton">Upload Photo</label>
                                <div class="col-md-7">
                                        <input id="file" name="userFiles[]" class="input-file" style="margin-top:10px;" type="file">
                                        <span>Image Size :- 800 x 600</span>
                                </div>
                            </div>
                            <!-- Button (Double) -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="button1id"></label>
                                <div class="col-md-7">
                                    <div class="pull-left" id="loding_div"></div>
                                    <button type="submit" id="button2id" class="btn btn-success">Add</button>
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
            $("#photo_form").attr("action", "<?php echo site_url()."/SoundsRegistrationController/uploadImages" ?>");
            $(document).ready(function () {
                $("#photo_form").ajaxForm({
                    beforeSend: function () {
                        $("#loding_div").html('<img src="<?php echo "img/ajax-loader.gif"; ?>">');
                        $("#button2id").attr("disabled", true);
                        $("#photo_form").attr("action", "<?php echo site_url()."/SoundsRegistrationController/uploadImages" ?>");
                    },
                    success: function (data) {
                        var msg1 = data.indexOf("success");
                        var msg2 = data.indexOf("1");
                        if (msg1 != "-1") {
                            alertify.success('Image Saved Successfully !');
                            $("#photo_form").resetForm();
                            $("#button2id").attr("disabled", false);
                            $("#loding_div").html('');
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
