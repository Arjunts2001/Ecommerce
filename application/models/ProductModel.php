<?php
defined('BASEPATH') OR exit("no direct script allowed");

class ProductModel extends CI_Model {

    public function add_product($post){

        $post['added_on'] = date('d ,M ,y');
        $post['slug'] = $this->slug($post['pro_name']);
        $query = $this->db->insert('ec_product',$post);
        if($query){
            $this->session->unset_userdata('pro_id');
            return true;
        }else{
            return false;
        }

    }

    public function slug($string){
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
        return $slug;
    }

}

        

