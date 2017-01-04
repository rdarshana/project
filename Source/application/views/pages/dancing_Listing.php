<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<div id="container">
<div id="body">
            
 <?php foreach ($dacingListing as $object){ ?>
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
                    <td><?php echo $object->group_name ?></td>
                </tr>
                <tr>
                    <td>User Name</td>
                    <td><?php echo $object->dancing_style ?></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><?php echo $object->contact_person_name ?></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><?php echo $object->contact_no ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo $object->address ?></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><?php echo $object->charges ?></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><?php echo $object->added_date ?></td>
                </tr>                
                <tr>
                    <td>Phone</td>
                    <td><?php echo $object->email ?></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><?php echo $object->group_details ?></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><?php echo $object->web ?></td>
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