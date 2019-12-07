<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
        parent:: __construct();
		if($this->session->userdata('Admin')){
           header("Location:".base_url()."admin/dashboard");
			exit;
        }
	}

	public function index(){
        
		if( $this->input->post('loginAmin') == "loginAmin"){

				$this->form_validation->set_rules('username','Username','valid_email|trim');
				$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
				
				if($this->form_validation->run()==true){
					
					
					$admin = $this->basic_model->validateAdmin( $this->input->post("username"), md5($this->input->post("password")) );

									
					if( is_array($admin) && count($admin) > 0 ){  
					
						$this->session->set_userdata('Admin',$admin);
						header("Location:".base_url()."admin/dashboard");
						exit;
					}else{
						$this->session->set_flashdata('login_fail','Invalid Username/Password');
						header("Location:".base_url()."admin");
						exit;
					}
				}
				
				header("Location:".base_url()."admin");
				exit;
		}
        
	    $this->load->view('Admin/Login');
	    
    }

	public function logout(){

        $this->session->unset_userdata('user_id');
        header("Location:".base_url()."admin");
		exit;	
    }
}
