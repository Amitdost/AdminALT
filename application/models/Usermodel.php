<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usermodel extends CI_Model{
    /**Department Section */
    public function employees(){
		$this->db->select('*');
		$this->db->from('lc_user');
		$query = $this->db->get();
		return $query->result();
	}
}