<?php
defined('BASEPATH') OR exit("no direct script allowed");

class HomeModel extends CI_Model {
    public function add_data1($postdata) {  
        // Prepare the data in an array
        $data = [
            // 'userid' => mt_rand(11111, 99999),  
            'uname' => $postdata['uname'],
            'uemail' => $postdata['uemail'],
            'upassword' => $postdata['upassword'],
            'image' => $postdata['file_name']
        ];

        // Insert data into the 'Data' table
        $this->db->insert('data', $data);

        // Check if the query executed successfully
        // if ($this->db->affected_rows() > 0) {
        //     return true; // Success
        // } else {
        //     return false; // Failure
        // }
    }

    public function add_data2($postdata) {  
        // Prepare the data in an array
            $postdata['userid'] = mt_rand(11111, 99999);
            //  $postdata['uname'] = $postdata['uname'];
            // 'uemail' => $postdata['uemail'];
            // 'upassword' => $postdata['upassword'];
            // 'image' => $postdata['file_name'];
            // echo"<pre>";
            // print_r($postdata);

        $this->db->insert('data', $postdata);

    }
    public function add_data($post){
        
        $post['added_on'] = date('d ,M ,y');
        $post['status'] = 1;
        unset($post["submit"]);

        $q = $this->db->insert('register', $post);
        if($q){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function update_data($post){
        
        $post['updated_on'] = date('d ,M ,y');
        $post['status'] = 1;
        unset($post["submit"]);

        $q = $this->db->where('id',$post['id'])->update('register', $post);
        if($q){
            return TRUE;
        }else{
            return FALSE;
        }
    }


    public function all_data($id=''){ 
        if($id!=''){
            $q = $this->db->where('id',$id)->get('register');
            if($q->num_rows()){
                return $q->row();
        }else{
            return false;
        }
    }
        $q = $this->db->order_by('id','desc')->get('register');
        if($q->num_rows()){
            return $q->result();
        }else{
            return false; 
        }
    }

    public function delete_data($id){
        $q = $this->db->where('id',$id)->delete('register');
        if($q){
            return TRUE;
        }
    }
}

        

