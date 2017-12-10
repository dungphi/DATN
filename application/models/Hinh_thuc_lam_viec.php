<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hinh_thuc_lam_viec extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function hinhthuclamviec()
	{
		$this->db->select('*');
		$this->db->from('hinh_thuc_lam_viec');
		$this->db->order_by('id_htlv', 'asc'); //asc
		//$this->db->limit('6');
		return $this->db->get()->result_array();
	}
	
}