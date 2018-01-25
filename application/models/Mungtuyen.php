<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mungtuyen extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function danhsach()
	{
		$this->db->select('*');
		$this->db->from('ung_tuyen');
		return $this->db->get()->result_array();
	}
	public function check_ungtuyen($id_ntv, $id_vl)
	{
		$this->db->from('ung_tuyen');
		$this->db->where('id_ntv', $id_ntv);
		$this->db->where('id_vl', $id_vl);
		$kq = $this->db->get()->result_array();
		return count($kq);
	}
	public function them($db = array())
	{
		return $this->db->insert('ung_tuyen',$db);
	}
	public function xoa($id)
	{
		$this->db->where('id_ut', $id);
		return $this->db->delete('ung_tuyen');
	}
	public function chinhsua($id)
	{
		$this->db->select('*');
		$this->db->from('ung_tuyen');
		$this->db->where('id_ut', $id);
		return $this->db->get()->row_array();
	}
	public function capnhat($data=array(),$id)
	{
		$this->db->where('id_ut',$id);
        return $this->db->update('ung_tuyen',$data);
	}
	public function edit($user)
	{
		$this->db->select('*');
		$this->db->from('ung_tuyen');
		$this->db->where('user', $user);
		return $this->db->get()->row_array();
	}
}