<?php 


class Basic_model extends CI_Model 
{
    
        function __construct() {
            parent::__construct();
            $this->load->database();
        }

       public function update( $table, $data, $condition ){

	       $this->db->update( $table, $data, $condition );

	       return  $this->db->affected_rows();

       }

       public function insert( $table,  $data ){

        $this->db->insert( $table, $data);
        return $this->db->insert_id();

       }

       public function delete( $table, $condition ){

        $this->db->delete( $table,$condition );

        return $this->db->affected_rows();

       }

       public function validateAdmin( $email, $password ){

          $this->db->select('*');
          $this->db->from('lc_administrator');
          $this->db->where('admin_email', $email);
          $this->db->where('admin_password', $password);

          $query = $this->db->get();
          $result = $query->row_array();
          
          if( is_array($result) && count($result) > 0 ){
            return $result;
          }else{
            return false;
          }

       }


      public function getAdmin(){

          $this->db->select('*');
          $this->db->from('lc_administrator');
         
          $query = $this->db->get();
          $result = $query->row_array();

          return $result;

      }

      public function uploadImage( $FILES = array(), $array_name, $location ){

        
                
                $path = $FILES[$array_name]['name'];
                $new_name = time().uniqid().'.'.pathinfo($path, PATHINFO_EXTENSION); 
                $filepath = $new_name;


                $config['file_name']            = $new_name;
                $config['upload_path']          = $location;
                $config['allowed_types']        = '*';
                $config['max_size']             = 200000;
                // $config['max_width']            = 10000;
                // $config['max_height']           = 10000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload($array_name))
                {
                    
                    return array("status" => '0', 'error' => $this->upload->display_errors() );
                   
                }else{
                    
                        $datasuccess = array('upload_data' => $this->upload->data());
                        $pantry_path = $filepath;

                        //code to resize image

                        $imgconfig['image_library']     = 'gd2';
                        $imgconfig['source_image']      = $location.$filepath;
                        $imgconfig['create_thumb']      = TRUE;
                        $imgconfig['maintain_ratio']    = TRUE;
                        $imgconfig['width']             = 180;
                        $imgconfig['height']            = 60;

                        $this->load->library('image_lib', $imgconfig);

                        // resize image
                            $this->image_lib->resize();
                            // handle if there is any problem
                            if ( ! $this->image_lib->resize()){
                            echo $this->image_lib->display_errors();
                            exit;
                            }
                        

                        $ext = explode(".",$filepath);

                        $image = $ext[0]."_thumb.".$ext[1];

                        
                        //code to resize image end

                        
                        if( @file_exists($location.$filepath) ){
                            @unlink( $location.$filepath );
                        }

                        return array("status" => '1', 'image' => $image  );

                }
            
            
      }

}