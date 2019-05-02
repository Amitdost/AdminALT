<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Postmodel extends CI_Model{
    /**Top New 2 Post */
    public function live_post()
    {
        $this->db->select('*');
		$this->db->from('post');         
        $this->db->where('active',0);
        $this->db->order_by('created', 'desc');
        $this->db->limit(2);
		$query = $this->db->get();
        return $query->result();
    }

    /**Recent Post */
    public function recent_post()
    {
        $this->db->select('*');
		$this->db->from('post');         
        $this->db->where('active',0);
        $this->db->order_by('created', 'desc');
		$query = $this->db->get();
        return $query->result();
    }

    public function full_post($id)
    {
        $this->db->select('*');
		$this->db->from('post');         
        $this->db->where('id', $id);
		$query = $this->db->get();
        return $query->result();
    }

    public function get_all_post_of_cat($id)
    {
        $this->db->select('*');
		$this->db->from('post');         
        $this->db->where('active',0);
        $this->db->where('cat', $id);
        $this->db->limit(10);
		$query = $this->db->get();
        return $query->result();
    }
    public function get_all_post_cat(){
        $this->db->select('*');
		$this->db->from('cat_post');         
		$query = $this->db->get();
        return $query->result();
    }

    /**Get published post of author for parent post */
    public function published_post($id)
    {
        $this->db->select('id, title');
        $this->db->from('post');
        $this->db->where('author_id', $id);    
		$query = $this->db->get();
        return $query->result();
    }

    /**Un Published post of author */
    public function unpublished_data($id)
    {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->where('author_id', $id);
        $this->db->where('active', '0');
		$query = $this->db->get();
        return $query->result();
    }
}
?>