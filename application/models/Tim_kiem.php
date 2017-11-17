<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tim_kiem extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function timkiem($tu_khoa,$data=array())
	{
		$this->db->select('*');
		$this->db->from('viec_lam');
		$this->db->like('tieu_de', $tu_khoa);
		$this->db->where($data);
		return $this->db->get()->result_array();
	}
	//public function phim_play($id)
//	{
//		$this->db->select('*');
//		$this->db->from('phim');
//		$this->db->where('idphim', $id);
//		return $this->db->get()->row_array();
//	}
//
//	public function countAll(){
//		return $this->db->count_all($this->_table); 
//	}
}