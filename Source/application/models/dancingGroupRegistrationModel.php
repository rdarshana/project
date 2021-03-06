<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class dancingGroupRegistrationModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }
//insert dancing group data
    public function insertDancingGroup($data) {
        $this->db->insert('dancing_group_details', $data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    //update dancing group data
    public function updateDancingGroup($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('dancing_group_details', $data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
//get the dancing group regisration no
    public function getRegistrationNumber() {
        $query = $this->db->select('id')
                ->from('dancing_group_details')
                ->order_by('id', 'DESC')
                ->limit(1)
                ->get();
        if ($query->num_rows() == 1) {
            $sub = $query->result();
            return $sub[0]->id;
        } else {
            return false;
        }
    }
//get dancing group details
    public function getGroupDetails($id) {
        $query = $this->db->select('*')
                ->from('dancing_group_details')
                ->where('id', $id)
                ->limit(1)
                ->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getAllGroupDetails() {
        $query = $this->db->select('*')
                ->from('dancing_group_details')
                ->get();

        if ($query->num_rows() >0) {
            return $query->result();
        } else {
            return false;
        }
    }

     public function getImages($img) {
        $query = $this->db->select('*')
                ->from('dancing_group_images')
                ->where('group_details_id',$img)
                ->get();

        if ($query->num_rows() >0) {
            return $query->result();
        } else {
            return false;
        }
    }
    
    public function deleteData($table,$feild,$value) {
        $this->db->where($feild,$value);
        $this->db->delete($table);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
      public function insertImages($data) {
        $this->db->insert('dancing_group_images', $data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
     

}
