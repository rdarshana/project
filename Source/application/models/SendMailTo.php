<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SendMailTo
 *
 * @author rukshan
 */
class SendMailTo extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->library('email');
    }
    
    function sendMailToOwners($data)
    {
        $needMail = 'No';
        $needCall = 'No';
        
        if($data['needemail']){
            print_r($data['email']);
            $needMail ='Yes';
        }
        
        if($data['needCall'])
        {
            $needCall = 'Yes';
        }
        $from_email = 'rukshan.asela87@gmail.com';
        $subject = 'Service Reservation Request';
        $message = $data['name']. 'need to discuss booking regarding below details,<br /><br />Phone'.$data['message'].'<br /><br /> Name: '.$data['name'] . '<br /><br />Phone: '.$data['phone'].'<br />Email '. $data['email'].'</br>Needed Respond Type</br>Email :'.$needMail.'</br>Phone :'.$needCall.'</br>Thanks<br />Mydomain Team';        
        
         //configure email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name
        $config['smtp_port'] = '465'; //smtp port number
        $config['smtp_user'] = $from_email;
        $config['smtp_pass'] = '123'; //$from_email password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes
        $this->email->initialize($config);
        
        //send mail
        $this->email->from($from_email, 'Mydomain');
        $this->email->to($data['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
    }
}
