<?php
defined('BASEPATH') OR exit("no direct script allowed");


class  Settings extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('SettingsModel');
    }
    public function pincode(){
        $this->form_validation->set_rules('status','Status','required|trim');
        $this->form_validation->set_rules('pincode','Pincode','required|trim');
        $this->form_validation->set_rules('delivery_charge',' Delivery Charges','required|trim');


        if($this->form_validation->run('')){
            $post = $this->input->post();
            $check = $this->SettingsModel->add_pincode($post);
            if($check){
                $this->session->set_flashdata('SuccMsg','Data inserted successfully');
                redirect('settings/pincode');
            }
        }else{
            // $data['categories'] =  $this->CategoryModel->all_category();
            $this->load->view('pincode');
        }
    }

    public function banner(){
        if(empty($_FILES['bann_image']['name'])){
            $this->form_validation->set_rules('bann_image','Banner Image','required|trim');
        }
        $this->form_validation->set_rules('status','Status','required|trim');

        if($this->form_validation->run('')){
            $post = $this->input->post();
            $config = ['upload_path'=>'./uploads','allowed_types'=>'gif|png|jpeg|jpg'];
            $this->load->library('upload',$config);
            $this->upload->do_upload('bann_image');
            $image =   $this->upload->data();
            $post['bann_image'] = $image['file_name'];
  
            $check = $this->SettingsModel->add_banner($post);
            if($check){
                $this->session->set_flashdata('SuccMsg','Data inserted successfully');
                redirect('settings/banner');
            }
        }else{
            $this->load->view('banner');
        }
    }
}
