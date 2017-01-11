<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pages
 *test
 * @author rukshan
 */
class Pages extends CI_Controller{
    public function home($page = 'home'){
        if(!file_exists('application/views/pages/'.$page.'.php')){
            echo "Sory, File Filedoes not exist";
        }
        else {
              $data['title']=ucfirst($page);  
              $this->load->view('templates/header',$data);
              $this->load->view('pages/'.$page,$data);
              $this->load->view('templates/footer',$data);
        }
    }
    
    public function dancingListing($page = 'dancing_Listing'){
        if(!file_exists('application/views/pages/'.$page.'.php')){
            echo "Sory, File Filedoes not exist";
        }
        else {
              $this->load->model('model_dancing');
              $data['dacingListing']=$this->model_dancing->getDancingListData();
              $data['title']=ucfirst($page);  
              $this->load->view('templates/header',$data);
              $this->load->view('pages/'.$page,$data);
              $this->load->view('templates/footer',$data);
        }
    }
}
 