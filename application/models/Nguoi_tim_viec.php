<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nguoi_tim_viec extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function vieclam()
	{
		$this->db->select('*');
		$this->db->from('nguoi_tim_viec');
		$this->db->order_by('id', 'desc'); //asc
		$this->db->limit('2');
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