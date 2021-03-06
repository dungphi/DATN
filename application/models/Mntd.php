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
	public function xoa($id)
	{
		$this->db->where('id_ntd', $id);
		return $this->db->delete('nha_tuyen_dung');
	}
	public function chinhsua($id)
	{
		$this->db->select('*');
		$this->db->from('nha_tuyen_dung');
		$this->db->where('id_ntd', $id);
		return $this->db->get()->row_array();
	}
	public function capnhat($data=array(),$id)
	{
		$this->db->where('id_ntd',$id);
        return $this->db->update('nha_tuyen_dung',$data);
	}
	public function check_pass($pass,$id)
	{
		$this->db->select('*');
		$this->db->from('nha_tuyen_dung');
		$this->db->where('pass', md5($pass));
		$this->db->where('id_ntd', $id);
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
}