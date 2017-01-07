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
class model_dancing extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    function getDancingListData()
    {
        $query = $this->db->query("SELECT group_name,added_date,dancing_style,address,contact_no,contact_person_name,email,web,image_link FROM dancing_group");
        
        if($query->num_rows()>0){
            return $query->result();
        }
        else{
            return null;
        }
    }
}
