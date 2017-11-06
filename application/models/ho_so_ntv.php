<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ho_so_ntv extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function hosotimviec()
	{
		$this->db->select('*');
		$this->db->from('nguoi_tim_viec,ho_so_tim_viec');
		$this->db->where('nguoi_tim_viec.id = ho_so_tim_viec.id_ntv and ho_so_tim_viec.vip=1');
		$this->db->order_by('nguoi_tim_viec.id', 'desc'); //asc
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