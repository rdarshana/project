<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
        
        table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
    
	</style>
        
       <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
        
</head>
<body>

<div id="container">
	<h1><?php echo $pageHeader?></h1>

	<div id="body">
            
            <?php                
                foreach ($users as $object){
            ?>
   <table>
    <tr>
	<!--<td>
            <img name="group" src="" width="32" height="32" alt="">
            <img src="../images/img1.jpeg" alt=""/>
            <img src="<?php echo base_url('images/img1.jpeg'); ?>" />
	</td>-->
	<td>
            <table>
		<tr>
                    <td>ID</td>
                    <td><?php echo $object->id ?></td>
                </tr>
                <tr>
                    <td>User Name</td>
                    <td><?php echo $object->username ?></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><?php echo $object->firstName ?></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><?php echo $object->lastName ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo $object->address ?></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><?php echo $object->phone ?></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
                
<?php
}
?>
            
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

    <script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-3.1.1.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>