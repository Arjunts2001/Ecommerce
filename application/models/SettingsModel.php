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

    public function add_banner($post){
        $post['bann_id'] = mt_rand(11111,99999);
        $post['added_on'] = date('d ,M ,y');
        $q = $this->db->insert('ec_banner', $post);
        if($q){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}