<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {

    public function __construct(){
            parent:: __construct();
            
            if(!$this->session->userdata('Admin')){
            header("Location:".base_url()."admin");
                exit;
            }

            $this->perPage = 20;
            $this->load->model('role_model');
    }

    public function index(){

        $data['title'] = "Role";

		$data['admin']  = $this->basic_model->getAdmin();
		
		$conditions['returnType'] = 'count';
        $totalRec = $this->role_model->getrows($conditions);

        if( $this->input->post('search_role')){

        	$conditions['title'] = $this->input->post('search_role');
        }


		//pagination config
        $config['base_url']    = '../admin/role-list';
        $config['uri_segment'] = 2;
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        
        //styling
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['next_tag_open'] = '<li class="pg-next">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="pg-prev">';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        
        //initialize pagination library
        $this->pagination->initialize($config);
        
        //define offset
        $page = $this->uri->segment(2);

        $offset = !$page?0:$page;

        //get rows
        $conditions['returnType'] = '';
        $conditions['start'] = $offset;
        $conditions['limit'] = $this->perPage;
        
        $data['role']  = $this->role_model->getrows( $conditions );
        $data['pages']   = $this->pagination->create_links();


		$this->load->template("admin/roles/roles_list", $data);
    }


}   