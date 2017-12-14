<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ngoai_ngu extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function ngoaingu()
	{
		$this->db->select('*');
		$this->db->from('ngoai_ngu');
		$this->db->order_by('id_ngoai_ngu', 'asc'); //asc
		//$this->db->limit('6');
		return $this->db->get()->result_array();
	}
	
}