<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nguoi_tim_viec extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function nguoitimviec()
	{
		$this->db->select('*');
		$this->db->from('nguoi_tim_viec');
		$this->db->order_by('id_ntv', 'desc'); //asc
		//$this->db->limit('2');
		return $this->db->get()->result_array();
	}
	public function check_mail($email)
	{
		$this->db->select('*');
		$this->db->from('nguoi_tim_viec');
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
		$this->db->from('nguoi_tim_viec');
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
	public function dangky($db = array())
	{
		$this->db->insert('nguoi_tim_viec',$db);
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