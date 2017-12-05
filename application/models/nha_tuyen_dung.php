<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nha_tuyen_dung extends CI_Model{

	public function __construct() {
	parent::__construct();
	}
	public function vieclam()
	{
		$this->db->select('*');
		$this->db->from('nha_tuyen_dung');
		$this->db->order_by('id', 'desc'); //asc
		//$this->db->limit('6');
		return $this->db->get()->result_array();
	}
	
		public function check_mail($email)
	{
		$this->db->select('*');
		$this->db->from('nha_tuyen_dung');
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
	
		public function dangnhap($email, $pass)
	{
		$this->db->select('*');
		$this->db->from('nha_tuyen_dung');
		$this->db->where('email', $email);
		$this->db->where('pass', $pass);
		$kq = $this->db->get()->row_array();
		if(count($kq) == 0)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
		public function dangkyntd($db = array())
	{
		$this->db->insert('nha_tuyen_dung',$db);
		
	}
	public function countAll(){
		return $this->db->count_all('nha_tuyen_dung'); 
	}
}