<?php
defined('BASEPATH') OR exit("no direct script allowed");


class  Product extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('CategoryModel');
        $this->load->model('ProductModel');
    }
    public function index(){
        $this->form_validation->set_rules('pro_id','Product id','required|trim');
        $this->form_validation->set_rules('category','Category ','required|trim');
        $this->form_validation->set_rules('pro_name','Product Name','required|trim');
        $this->form_validation->set_rules('brand','Brand','required|trim');
        $this->form_validation->set_rules('featured',' Featured','required|trim');
        $this->form_validation->set_rules('description',' Description','required|trim');
        $this->form_validation->set_rules('highlight','Highlight','required|trim');
        $this->form_validation->set_rules('mrp','MRP ','required|trim');
        $this->form_validation->set_rules('selling_price','Selling Price ','required|trim');
        $this->form_validation->set_rules('status','Status ','required|trim');

        if(empty($_FILES['pro_main_image']['name'])){
        $this->form_validation->set_rules('pro_main_image','Product image','required|trim');
        }

        if($this->form_validation->run('')){
            $post = $this->input->post();

            $config = ['upload_path'=>'./uploads','allowed_types'=>'gif|png|jpeg|jpg'];

            $this->load->library('upload',$config);

            $this->upload->do_upload('pro_main_image');
            $data =   $this->upload->data();

            $post['pro_main_image'] = $data['raw_name'].$data['file_ext'];

            $check = $this->ProductModel->add_product($post);
            if($check){
                // print_r('hello');exit;
                 $this->session->set_flashdata('succMsg','Product added successfully');
                 redirect('product');
            }else{
                $this->session->set_flashdata('errMsg','Product is failed to added ');
                redirect('product');            }

            // echo '<pre>';
            // print_r($post);
        }else{
            $data['categories'] =  $this->CategoryModel->all_category();
            $this->load->view('product',$data);
        }
    }
}
