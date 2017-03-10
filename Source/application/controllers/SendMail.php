<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DancingInquiry
 *
 * @author rukshan
 */
class SendMail extends CI_Controller{
    
    public function SendMailTo()
    {
        $data = array (
            'name' => $this->input->post('u_name'),
            'phone' => $this->input->post('u_phone')
        );
        
        print_r($data);
    }
    
}

?>