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
}
