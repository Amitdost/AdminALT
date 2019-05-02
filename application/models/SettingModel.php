<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class SettingModel extends CI_Model{
    /**Department Section */
    public function getDepart(){
		$query=$this->db->get('department');
				return $query->result();
    }
    
    /**Desigation Section */
    public function getDesigation(){
        $this->db->select('*');
        $this->db->from('designation');
        $this->db->join('department', 'designation.departID=department.deptID','inner');
        $query = $this->db->get();
        return $query->result();
    }

    public function department_details($id1)
	{
		$this->db->select('*');
		$this->db->from('designation');
		$this->db->join('department', 'department.deptID=designation.departID');            
		$this->db->where('deptName', $id1);
		$query = $this->db->get();
        return $query->result();
	}
}