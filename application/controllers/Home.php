<?php
defined('BASEPATH') OR exit("No direct script access allowed");

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('HomeModel'); // Ensure the model file is named `HomeModel.php`
    }
    
    public function index() {
        $data['banner'] = $this->HomeModel->get_banner(); // Ensure correct capitalization
        $this->load->view('frond/index', $data);
    }
}
