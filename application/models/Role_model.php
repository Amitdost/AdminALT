<?php 


class Role_model extends CI_Model 
{
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getrows( $params = array() ){

        $this->db->select('*');
        $this->db->from('usersrole');


        //searching code
        if( array_key_exists("title",$params) && !empty($params['title'])){

          $this->db->like('title', $params['title']);
        }

        //searching code end


        $order = "DESC";
        $order_by = "created_on";
        
         $this->db->order_by($order_by, $order );


         
        if( is_array($params) && $params['returnType'] == 'count'){

            $result = $this->db->get()->num_rows();
        }else{

           
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }


            $query = $this->db->get();
            $result = $query->result_array();
        }

        
        return $result;

    }

}