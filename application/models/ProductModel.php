<?php
defined('BASEPATH') OR exit("no direct script allowed");

class ProductModel extends CI_Model {

    public function add_product($post){
        // $post['bann_id'] = mt_rand(11111,99999);
        // $post['added_on'] = date('d ,M ,y');
        $q = $this->db->insert('ec_product', $post);
        if($q){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    // public function all_product(){
    //     $q = $this->db->where(['status' => 1,'parent_id'=>''])->get('ec_category');
    //     if($q->num_rows()){
    //         return $q->result();
    //     }
    // }

}