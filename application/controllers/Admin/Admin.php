<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model("settingmodel");//Call Setting model
        $this->load->model("usermodel");
        
        if(!$this->session->userdata('Admin')){
           header("Location:".base_url()."admin");
			exit;
        }

        $this->admin = $this->basic_model->getAdmin();
       
    }

    public function dashboard(){
        $data['admin'] = $this->admin;
        $this->load->template('Admin/dashboard', $data);
    }
}