<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cap_bac extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function capbac()
	{
		$this->db->select('*');
		$this->db->from('cap_bac');
		$this->db->order_by('id_cb', 'asc'); //asc
		//$this->db->limit('6');
		return $this->db->get()->result_array();
	}
	public function them_capbac($capbac)
	{
		$data = array(
			'cap_bac' => $capbac
		);
		return $this->db->insert('cap_bac',$data);
	}
	public function xoa_capbac($id)
	{
		$this->db->where('id_cb', $id);
		return $this->db->delete('cap_bac');
	}
	public function chinhsua_capbac($id)
	{
		$this->db->select('*');
		$this->db->from('cap_bac');
		$this->db->where('id_cb', $id); 
		return $this->db->get()->row_array();
	}
	public function luu_capbac($id,$cap_bac){
        $data = array(
            'cap_bac' => $cap_bac,
        );
        $this->db->where('id_cb',$id);
        return $this->db->update('cap_bac',$data);
    }
}