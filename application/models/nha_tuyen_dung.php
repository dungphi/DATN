<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nha_tuyen_dung extends CI_Model{

	public function __construct() {
	parent::__construct();
	}
	public function vieclam()
	{
		$this->db->select('*');
		$this->db->from('lien_he,nha_tuyen_dung');
		$this->db->where('lien_he.id_ntd = nha_tuyen_dung.id');
		$this->db->order_by('nha_tuyen_dung.id', 'desc'); //asc
		//$this->db->limit('6');
		return $this->db->get()->result_array();
	}
	
		public function check_mail($email)
	{
		$this->db->select('*');
		$this->db->from('lien_he');
		$this->db->where('email', $email);
		$kq = $this->db->get()->row_array();
		if(count($kq) != 0)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
}