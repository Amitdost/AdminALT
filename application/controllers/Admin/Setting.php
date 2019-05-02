<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Setting extends CI_Controller {

    public function __construct()
	{
        parent:: __construct();
		
        if(!$this->session->userdata('Admin')){
           header("Location:".base_url()."admin");
			exit;
        }

		$this->admin = $this->basic_model->getAdmin();
	}
	
	/**Add Post Category */
	public function add_post_cat_page()
	{
		$this->load->template('setting_view');
	}

	/**Save category of post */
	public function save_post_cat()
	{
		$data=array(
            'category'=>$this->input->post('cat')
        );

        $count_row = $this->db->insert('cat_post',$data);
			if($count_row>0)
                die('Record created successfully');
            else
				die('Somthing went wrong');
	}

	/**All Profile Setting Page */
	public function user_profile(){

		$data['admin'] = $this->admin;

		if( $this->input->post('update_profile') == "update_profile" ){

			$admin = $this->input->post('admin');

			$location = "assest/adminImages/";
		
			$result = $this->basic_model->uploadImage( $_FILES , 'site_logo', $location );

			$admin['site_logo'] = ''; 
			if( is_array( $result ) && count( $result ) > 0 ){

				if( $result['status'] == '1' ){

					$admin['site_logo'] = $result['image']; 
				}else{
					$admin['site_logo'] = $data['admin']['site_logo'];
				}
			}
			
			$admin['updated_on'] = time();
			$status = $this->basic_model->update('administrator', $admin , array('admin_id' => '1'));

			if( $status > 0 ){
	        		$success =  "Updated Successfully";
					$this->session->set_flashdata('success', $success );

                    header("Location:".base_url()."admin/profile");
					exit;
	        	}else{
	        		$error_msg[0] = "Something went wrong. Please try again";
					$this->session->set_flashdata('error', $error_msg );

                    header("Location:".base_url()."admin/profile");
					exit;

	        	}
		}
		
		$this->load->template("admin/profile", $data);
	}
}