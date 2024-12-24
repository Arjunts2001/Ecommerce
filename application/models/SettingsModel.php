<?php
defined('BASEPATH') OR exit("no direct script allowed");

class SettingsModel extends CI_Model {

    public function add_pincode($post){
        
        $q = $this->db->insert('ec_pincode', $post);
        if($q){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function all_category(){
        $q = $this->db->where(['status' => 1,'parent_id'=>''])->get('ec_category');
        if($q->num_rows()){
            return $q->result();
        }
    }

}