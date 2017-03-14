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
    
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
    }
    
    public function SendMailTo()
    {
        $data = array (
            'name' => $this->input->post('u_name'),
            'phone' => $this->input->post('u_phone'),
            'email' => $this->input->post('u_email'),
            'message' => $this->input->post('u_message'),
            'needemail' => $this->input->post('u_sendMail'),
            'needCall' => $this->input->post('u_needCall')
        );
        
        $this->load->model('SendMailTo');
        $this->SendMailTo->sendMailToOwners($data);
        
         //display success message
        //$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Employee details added to Database!!!</div>');
       // redirect('employee/index');
        
        print_r($data);
    }
}

