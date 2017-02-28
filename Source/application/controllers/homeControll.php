<?php
class homeControll extends CI_Controller {

    public function index() {
        //$this->load->view('HomeTemplate/header');
        $this->load->view('MainSite/Home');
    }
	public function AboutUs() {
        $this->load->view('MainSite/About');
    }
	public function Gallery() {
        $this->load->view('MainSite/Gallery');
    }
	public function Download() {
        $this->load->view('MainSite/Download');
    }
	public function Blog() {
        $this->load->view('MainSite/Blog');
    }
	public function Contact() {
        $this->load->view('MainSite/Contact');
    }
    public function Header() {
        $this->load->view('HomeTemplate/header');
    }
	public function Payment() {
        $this->load->view('PaymentView/Payment');
    }
    public function PaymentOld() {
        $this->load->view('PaymentView/PaymentOld');
    }
	public function Test() {
        $this->load->view('MainSite/Test');
    }
    
    public function Category($page = 'Category'){
        if(!file_exists('application/views/MainSite/'.$page.'.php')){
            echo "Sory, File Filedoes not exist";
        }
        else {  
           $this->load->model('model_dancing');
           $data['dancingListing']=$this->model_dancing->getDancingListData();
           
           $this->load->view('MainSite/'.$page, $data);

        }
    }
    
    public function MusicLoadById($page,$ID){
        if(!file_exists('application/views/MainSite/'.$page.'.php')){
            echo "Sory, File Filedoes not exist";
        }
        else {  
           $this->load->model('model_dancing');
           $data['dancingGroup']=$this->model_dancing->getDancingListDataById($ID);
           
           $this->load->view('MainSite/'.$page, $data);

        }
    }
}
?>