<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dia_diem extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function diadiem()
	{
		$this->db->select('*');
		$this->db->from('dia_diem');
		$this->db->order_by('ten_dd', 'asc'); //asc
		//$this->db->limit('6');
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