<?php
defined('BASEPATH') OR exit("no direct script allowed");

class CategoryModel extends CI_Model {

    public function add_category($post){
        
        $post['cate_id'] = mt_rand(11111,99999);
        $post['added_on'] = date('d ,M ,y');
        // unset($post["submit"]);

        $q = $this->db->insert('ec_category', $post);
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

    // public function update_data($post){
        
    //     $post['updated_on'] = date('d ,M ,y');
    //     $post['status'] = 1;
    //     unset($post["submit"]);

    //     $q = $this->db->where('id',$post['id'])->update('register', $post);
    //     if($q){
    //         return TRUE;
    //     }else{
    //         return FALSE;
    //     }
    // }


    // public function all_data($id=''){ 
    //     if($id!=''){
    //         $q = $this->db->where('id',$id)->get('register');
    //         if($q->num_rows()){
    //             return $q->row();
    //     }else{
    //         return false;
    //     }
    // }
    //     $q = $this->db->order_by('id','desc')->get('register');
    //     if($q->num_rows()){
    //         return $q->result();
    //     }else{
    //         return false; 
    //     }
    // }

    // public function delete_data($id){
    //     $q = $this->db->where('id',$id)->delete('register');
    //     if($q){
    //         return TRUE;
    //     }
    // }
}

        

