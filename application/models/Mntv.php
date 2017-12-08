<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mntv extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function danhsach()
	{
		$this->db->select('*');
		$this->db->from('nguoi_tim_viec, gioi_tinh');
		$this->db->where('nguoi_tim_viec.id_gioi_tinh = gioi_tinh.id_gt');
		return $this->db->get()->result_array();
	}
	public function xoa($id)
	{
		$this->db->where('id_ntv', $id);
		return $this->db->delete('nguoi_tim_viec');
	}
	public function chinhsua($id)
	{
		$this->db->select('*');
		$this->db->from('nguoi_tim_viec');
		$this->db->where('id_ntv', $id);
		return $this->db->get()->row_array();
	}
	public function capnhat($data=array(),$id)
	{
		$this->db->where('id_ntv',$id);
        return $this->db->update('nguoi_tim_viec',$data);
	}
	public function check_pass($pass,$id)
	{
		$this->db->select('*');
		$this->db->from('nguoi_tim_viec');
		$this->db->where('pass', md5($pass));
		$this->db->where('id_ntv', $id);
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