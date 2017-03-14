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
    
    public function DancingListing($page = 'DancingListing'){
        if(!file_exists('application/views/MainSite/'.$page.'.php')){
            echo "Sory, File Filedoes not exist";
        }
        else {  
           $this->load->model('model_dancing');
           $data['dancingListing']=$this->model_dancing->getDancingListData();
           
           $this->load->view('MainSite/'.$page, $data);
        }
    }
    
    public function DancingLoadById($page,$ID){
        if(!file_exists('application/views/MainSite/'.$page.'.php')){
            echo "Sory, File Filedoes not exist";
        }
        else {  
           $this->load->model('model_dancing');
           $data['dancingGroup']=$this->model_dancing->getDancingListDataById($ID);
           
           $this->load->view('MainSite/'.$page, $data);

        }
    }
    
        public function MusicListing($page = 'MusicListing'){
        if(!file_exists('application/views/MainSite/'.$page.'.php')){
            echo "Sory, File Filedoes not exist";
        }
        else {  
           $this->load->model('model_music');
           $data['musicListing']=$this->model_music->getMusicListData();
           
           $this->load->view('MainSite/'.$page, $data);

        }
    }
    
    public function MusicLoadById($page,$ID){
        if(!file_exists('application/views/MainSite/'.$page.'.php')){
            echo "Sory, File Filedoes not exist";
        }
        else {  
           $this->load->model('model_music');
           $data['musicGroup']=$this->model_music->getMusicListDataById($ID);
           
           $this->load->view('MainSite/'.$page, $data);

        }
    }
    
    public function LightListing($page = 'LightListing'){
        if(!file_exists('application/views/MainSite/'.$page.'.php')){
            echo "Sory, File Filedoes not exist";
        }
        else {  
           $this->load->model('model_light');
           $data['lightListing']=$this->model_light->getLightListData();
           
           $this->load->view('MainSite/'.$page, $data);

        }
    }
    
    public function LightLoadById($page,$ID){
        if(!file_exists('application/views/MainSite/'.$page.'.php')){
            echo "Sory, File Filedoes not exist";
        }
        else {  
           $this->load->model('model_light');
           $data['lightGroup']=$this->model_light->getLightListDataById($ID);
           
           $this->load->view('MainSite/'.$page, $data);
        }
    }
    
    public function SoundListing($page = 'SoundListing'){
        if(!file_exists('application/views/MainSite/'.$page.'.php')){
            echo "Sory, File Filedoes not exist";
        }
        else {  
           $this->load->model('model_sound');
           $data['soundListing']=$this->model_sound->getSoundListData();
           
           $this->load->view('MainSite/'.$page, $data);

        }
    }
    
    public function SoundLoadById($page,$ID){
        if(!file_exists('application/views/MainSite/'.$page.'.php')){
            echo "Sory, File Filedoes not exist";
        }
        else {  
           $this->load->model('model_sound');
           $data['soundGroup']=$this->model_sound->getSoundListDataById($ID);
           
           $this->load->view('MainSite/'.$page, $data);
        }
    }
    
    
    public function OtherListing($page = 'OtherListing'){
        if(!file_exists('application/views/MainSite/'.$page.'.php')){
            echo "Sory, File Filedoes not exist";
        }
        else {  
           $this->load->model('model_other');
           $data['otherListing']=$this->model_other->getOtherListData();
           
           $this->load->view('MainSite/'.$page, $data);

        }
    }
    
    public function OtherLoadById($page,$ID){
        if(!file_exists('application/views/MainSite/'.$page.'.php')){
            echo "Sory, File Filedoes not exist";
        }
        else {  
           $this->load->model('model_other');
           $data['otherGroup']=$this->model_other->getOtherListDataById($ID);
           
           $this->load->view('MainSite/'.$page, $data);
        }
    }
}
?>