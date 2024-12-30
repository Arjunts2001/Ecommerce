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
    
    // code is used to display category in parent category 
    public function all_category(){
        $q = $this->db->where(['status' => 1,'parent_id'=>''])->get('ec_category');
        if($q->num_rows()){
            return $q->result();
        }
    }

    public function get_sub_cate($cate_id){
        $q = $this->db->where(['status' => 1,'parent_id'=>$cate_id])->get('ec_category');
        if($q->num_rows()){
            // return $q->result();
            $output ='';
            foreach($q->result() as $val){
                $output.= '<option value="'.$val->cate_id.'" selected>' .$val->cate_name. '</option>';
            }
            echo $output;
        }
    }
}

        

