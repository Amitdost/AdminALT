<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index()
    {
        $this->load->model('Login_verify');
    }

    public function sign_up(){
        $this->load->view('common_welcome_page/top-nav');
        $this->load->view('Signup');
        
    }

    /**Login Validation */
    public function login_valid()
    {

         
        $this->form_validation->set_rules('username','Username','valid_email|trim');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if($this->form_validation->run()==true)
		{
			$data = array(
				'username'=>$this->input->post("username"),
				'password'=>$this->input->post("password")
             );
             //print_r($data);die;
            $this->load->model('login_verify');
            $login_id=$this->login_verify->valid_user($data);
			if($login_id)//cerate session for user if user validate
			{  
               // die("1"); 
					 $this->session->set_userdata('user_id',$login_id);
					 return redirect('Admin/dashboard');	
			    
			}
			else
			{
				$this->session->set_flashdata('login_fail','Invalid Username/Password');
				return redirect('Welcome/login');
			}
		}
        
        return redirect('Welcome/index');
    }

    /**Logout */
    public function logout()
    {
        $this->session->unset_userdata('user_id');
        redirect('Welcome/index');	
    }

    /**Register User */

    public function signup(){
        $this->form_validation->set_rules('fullname','fullname','trim');
        $this->form_validation->set_rules('email_id', 'email_id', 'valid_email|required|is_unique[user_info.email_id]');
		$this->form_validation->set_rules('password','password','trim');
        $this->form_validation->set_rules('repassword','repassword','trim');
        
		$this->form_validation->set_error_delimiters("<span class='text-danger'>","</span>");
		if($this->form_validation->run()==true)
		{
			//here insert data in db;
            $data_user_login = array(
                'fullname' =>$this->input->post('fullname'),
                'email_id' =>$this->input->post('email_id'),
                'password' =>$this->input->post('password')
            );

			$count_row1 = $this->db->insert('user_info',$data_user_login);
            if($count_row1>0)
            {
                $this->session->set_flashdata('signup_sucess','Account Created Successfully');
            }
            else{
                $this->session->set_flashdata('signup_fail','Please Try Again');
            }
        }
        return redirect('Login/sign_up');
    }
}
?>