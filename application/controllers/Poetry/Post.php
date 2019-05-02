<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Post extends CI_Controller {
        
        public function __construct(){
            parent:: __construct();
            $this->load->model("postmodel");//Call Setting model
        }

        public function sub_page()
        {
            $post_id = $_GET['post'];
            $category_id=$_GET['cat'];
            $full_post=$this->postmodel->full_post($post_id);
            $releated_post=$this->postmodel->get_all_post_of_cat($category_id);
            $sub_page['subpage']=array('0'=>$full_post,'1'=>$releated_post);
            $cat['post_cat'] = $this->postmodel->get_all_post_cat();
            $this->load->view('common_welcome_page/top-nav');
            $this->load->view('subpage',$sub_page);
            $this->load->view('common_welcome_page/footer',$cat);
        }

        /**Unpublished Post */

        public function unpublished_post()
        {
            $data['unpublished_data'] = $this->postmodel->unpublished_data($this->session->userdata('user_id')->id);
            $this->load->template('Post/unpublished' , $data);
        }
    }
?>