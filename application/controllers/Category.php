<?php
defined('BASEPATH') OR exit("no direct script allowed");


class  Category extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('CategoryModel');
    }
    public function index(){
        $this->form_validation->set_rules('status','Status','required|trim');
        $this->form_validation->set_rules('cate_name','Category Name','required');

        if($this->form_validation->run('')){
            $post = $this->input->post();

            $config = ['upload_path'=>'./uploads','allowed_types'=>'gif|png|jpeg|jpg'];

            $this->load->library('upload',$config);

            $this->upload->do_upload('image');
            $data =   $this->upload->data();

            $post['image'] = $data['raw_name'].$data['file_ext'];

            $check = $this->CategoryModel->add_category($post);
            if($check){
                $this->session->set_flashdata('SuccMsg','Data inserted successfully');
                redirect('category');
            }
        }else{
            $data['categories'] =  $this->CategoryModel->all_category();
            $this->load->view('category',$data);
        }
    }

    public function get_sub_cate(){
        $cate_id =  $this->input->post('cate_id');
        echo $this->CategoryModel->get_sub_cate($cate_id);
        // print_r($this->CategoryModel->get_sub_cate($cate_id));exit;
        // print_r('hello');exit;
    }
}
