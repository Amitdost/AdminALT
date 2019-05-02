<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

	public function __construct(){
        parent:: __construct();
        $this->load->model("postmodel");//Call Setting model
	}
	
	public function index()
	{
		$data['post_data'] = array('live_post' => $this->postmodel->live_post(), 
		'recent_post' =>$this->postmodel->recent_post());

		$cat['post_cat'] = $this->postmodel->get_all_post_cat();
		$this->load->view('common_welcome_page/top-nav');
		$this->load->view('index',$data);
		$this->load->view('common_welcome_page/footer',$cat);
	}

	public function login(){
        $this->load->view('common_welcome_page/top-nav');
	$this->load->view('Admin/Login');
	$this->load->view('common_welcome_page/footer');
    }
}
