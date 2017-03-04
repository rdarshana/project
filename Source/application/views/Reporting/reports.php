<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
#tdwidth {width:80% !important;}
#data_filter {display:none !important;}
#data2_filter {display:none !important;}
#data3_filter {display:none !important;}
#data4_filter {display:none !important;}


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
               <a class="navbar-brand" href="#">Dancing Group Registration</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li >
                        <a href="index.php">Add Group</a>
                    </li>
                    <li class="active">
                        <a href="manage.php">Manage group</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Image Background Page Header -->
    <!-- Note: The background image is set within the business-casual.css file. -->
   

    <!-- Page Content -->
    <div class="container">
<br><br><br>
<h3>Admin Panel - Reports</h3>
        <hr>

        <div class="row">
            <div class="col-sm-12">
             <div class="col-md-12">
		
		  
		  
		  
				
				
					<div class="tab-pane active" id="panel-322806">
						<br>
						 <table width='100%' id="data" class="table table-striped table-bordered">
       <thead>
		<tr>
		<center>
           
           <td id="tdwidth">Group Name</td>
            
			  
			  <td>Action</td>
			  </center>
            </tr>
       </thead>
	    <tbody>
       <tr>
 <td>0</td>
          
          
			 
			 
			  <td><center><a href="#" class="btn btn-xs btn-success">View</a>  </center> </td>
</tr>	
 <tr>
 <td>0</td>
          
         
			
			 
			   <td><center><a href="#" class="btn btn-xs btn-success">View</a>  </center> </td>
</tr>	
 <tr>
 <td>0</td>
          
          
			
			 
			   <td><center><a href="#" class="btn btn-xs btn-success">View</a>  </center> </td>
</tr>	

            
       
		 </tbody>
    </table>
						
					</div>
					
		  
		  
		  
		  
		  
		
               
            </div>
        </div>
        <!-- /.row -->

      

        
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                  
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.js"></script>
        <script src="js/dataTables.bootstrap.js"></script>
<script>
$(document).ready(function() {
	
	
	
	
   var table = $('#data').DataTable( {
              
                "pagingType": "simple_numbers"
          });
		   var table = $('#data2').DataTable( {
              
                "pagingType": "simple_numbers"
          });
		   var table = $('#data3').DataTable( {
              
                "pagingType": "simple_numbers"
          });
		   var table = $('#data4').DataTable( {
              
                "pagingType": "simple_numbers"
          });
    
} );

</script>
</body>

</html>
