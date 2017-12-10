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
	
}