<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Manage Supplier</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url();?>css/business-frontpage_other.css" rel="stylesheet">
        <link href="<?php echo base_url();?>js/alertifyjs/css/alertify.min.css" rel="stylesheet" type="text/css"/>

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
                        <li class="active">
                            <a href="<?php echo site_url()."/OtherRegistrationController" ?>">Add Supplier</a>
                        </li>
                        <li >
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
                <div class="col-sm-12">
                    <div class="col-md-12" id="search_div">
                        <?php
                        if ($allDetails) {
                            ?>
                            <table id="data" class="table table-striped table-bordered table-responsive table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Registration No</th>
                                        <th class="text-center">Supplier Name</th>
                                        <th class="text-center">Contact Person</th>
                                        <th class="text-center">Phone</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">SupplierDetails</th>
                                        <th class="text-right">Charges</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($allDetails as $details) {
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $details->registration_no; ?></td>
                                            <td class="text-center"><?php echo $details->supplier_name; ?></td>
                                            <td class="text-center"><?php echo $details->contact_person_name; ?></td>
                                            <td class="text-center"><?php echo $details->contact_no; ?></td>
                                            <td class="text-center"><?php echo $details->email; ?></td>
                                            <td class="text-center"><?php echo $details->supplier_details; ?></td>
                                            <td class="text-right"><?php echo number_format($details->charges, 2, '.', ''); ?></td>
                                            <td class="text-center">
                                                <a href="<?php echo site_url()."/OtherRegistrationController/editOtherGroup/".$details->id ?>">
                                                    <i class='glyphicon glyphicon-edit'></i>
                                                </a> | 
                                                <a href="<?php echo site_url()."/OtherRegistrationController/viewOtherGroupDetails/".$details->id ?>" >
                                                    <i class='glyphicon glyphicon-eye-open'></i>
                                                </a> | 
                                                <a href="#" onclick="deleteGroup('<?php echo $details->id; ?>');" >
                                                    <i class='glyphicon glyphicon-trash'></i>
                                                </a>
                                            </td>
                                        </tr>	
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <?php
                        } else {
                            ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="text-center" style="color: #f39c12;">There are no more groups!</h4>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
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
            <script src="<?php echo base_url();?>js/jquery.min.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
            <script src="<?php echo base_url();?>js/jquery.dataTables.js"></script>
            <script src="<?php echo base_url();?>js/dataTables.bootstrap.js"></script>
            <script src="<?php echo base_url();?>js/alertifyjs/alertify.min.js" type="text/javascript"></script>
            <script>
                                                    $(document).ready(function () {
                                                        var table = $('#data').DataTable({
                                                            "pagingType": "simple_numbers"
                                                        });

                                                    });


                                                    function deleteGroup(id) {

                                                        alertify.confirm("Warning", "Are you sure, you want to Remove This Group ?",
                                                                function () {
                                                                    $.post("<?php echo site_url()."/OtherRegistrationController/deleteGroup/" ?>" + id)
                                                                            .done(function (data) {
                                                                                if (data == "success") {
                                                                                    alertify.success('Group Delete Successful !');
                                                                                   window.location.reload();
                                                                                } else
                                                                                {
                                                                                    alertify.error(data);
                                                                                }

                                                                            });
                                                                },
                                                                function () {
                                                                    //alertify.error('Cancel');
                                                                });
                                                    }

                                                    

            </script>
    </body>

</html>
