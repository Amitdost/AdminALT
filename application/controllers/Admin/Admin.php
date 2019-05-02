<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model("settingmodel");//Call Setting model
        $this->load->model("usermodel");
        $this->load->model("Postmodel");
        $user_session=$this->session->userdata('Admin');

        if(!$this->session->userdata('Admin')){
           header("Location:".base_url()."admin");
			exit;
        }
    }

    public function dashboard()
    {
        $this->load->template('Admin/dashboard');
    }
    
    /**Write Post */
    public function write_post()
    {
        //get post category
        $data['post'] = array('cat' =>$this->Postmodel->get_all_post_cat() , 'parent_post' => $this->Postmodel->published_post( $this->session->userdata('user_id')->id));
        $this->load->template('Post/index' , $data);
    }

    /**Save Post */
    public function save_post()
    {
        $current_user = $this->session->userdata('user_id');
       // print_r( $current_user);die;
        $data=array(
            'author_id' => $current_user->id,
            'parent_post' => $this->input-> post("parent_post"),
            'title' => $this->input-> post('title'),
            'post' => $this->input->post('post_content'),
            'cat' => $this->input -> post('parent_post')
        );

        $count_row = $this->db->insert('post',$data);
			if($count_row>0)
        		{
                    $this->session->set_flashdata('item', array('message' => 'Record created successfully','class' => 'alert alert-success alert-dismissible fade in'));
                    return redirect('Post/unpublished_post');
                }
            else{
                $this->session->set_flashdata('item', array('message' => 'Record created successfully','class' => 'success'));
                }

        return redirect('Admin/write_post');
    }
}