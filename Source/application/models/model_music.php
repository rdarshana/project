<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_dancing
 *
 * @author rukshan
 */
class model_music extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    //Get all dancing group details
    function getMusicListData()
    {
        $query = $this->db->query("SELECT DD.id,DD.group_name,DD.group_details,DD.contact_no,DD.web,DI.image_name from music_group_details as DD INNER JOIN music_group_images as DI ON DD.id = DI.group_details_id ");
        
        if($query->num_rows()>0){
            return $query->result();
        }
        else{
            return null;
        }
    }
    
     //Get dancing groups data by ID   
    function getMusicListDataById($ID)
    {
        $query = $this->db->query("SELECT DD.id,DD.group_name,DD.group_details,DD.added_date, DD.music_styles,DD.address,DD.contact_no,DD.contact_person_name,DD.email,DD.web,DI.image_name from music_group_details as DD INNER JOIN music_group_images as DI ON DD.id = DI.group_details_id where DD.id='". $ID."'");
        if($query->num_rows()>0){
                
            return $query->result();
        }
        else{
            return null;
        }
    }
}