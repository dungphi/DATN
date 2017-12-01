<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mntd extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function danhsach()
	{
		$this->db->select('*');
		$this->db->from('nha_tuyen_dung');
		return $this->db->get()->result_array();
	}
	public function check_user($user)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('user', $user);
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
	public function dangnhap($user, $pass)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('user', $user);
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
	public function them_ad($db = array())
	{
		return $this->db->insert('admin',$db);
	}
	public function xoa_ad($id)
	{
		$this->db->where('id_admin', $id);
		return $this->db->delete('admin');
	}
	public function chinhsua($id)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('id_admin', $id);
		return $this->db->get()->row_array();
	}
	public function capnhat($data=array(),$id)
	{
		$this->db->where('id_ntd',$id);
        return $this->db->update('nha_tuyen_dung',$data);
	}
}