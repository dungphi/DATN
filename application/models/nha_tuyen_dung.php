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
		$kq = $this->db->get()->result_array();
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
	public function get($email)
	{
		$this->db->from('nha_tuyen_dung');
		$this->db->where('email', $email);
		return $this->db->get()->row_array();
	}
	public function ds_vieclam($email)
	{
		$this->db->from('nha_tuyen_dung, viec_lam');
		$this->db->where('email', $email);
		$this->db->where('nha_tuyen_dung.id_ntd = viec_lam.id_ntd');
		return $this->db->get()->result_array();
	}
	public function ds_ungvien($id_vl)
	{
		$this->db->from('ung_tuyen, viec_lam, nguoi_tim_viec');
		$this->db->where('ung_tuyen.id_vl', $id_vl);
		$this->db->where('ung_tuyen.id_vl = viec_lam.id_vl');
		$this->db->where('ung_tuyen.id_ntv = nguoi_tim_viec.id_ntv');
		return $this->db->get()->result_array();
	}
	public function check_pass($id,$pass)
	{
		$this->db->from('nha_tuyen_dung');
		$this->db->where('id_ntd', $id);
		$this->db->where('pass', md5($pass));
		$kq = $this->db->get()->result_array();
		if(count($kq) == 1)
			return TRUE;
		else
			return FALSE;
	}
	
	public function capnhat($id, $data=array())
	{
		$this->db->where('id_ntd',$id);
        return $this->db->update('nha_tuyen_dung',$data);
	}
	public function countAll(){
		return $this->db->count_all('nha_tuyen_dung'); 
	}
}