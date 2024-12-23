<?php
defined('BASEPATH') OR exit("no direct script allowed");


class  Dashboard extends CI_Controller{
    public function index(){
        $this->load->view('index');

    }
}