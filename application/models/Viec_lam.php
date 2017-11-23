<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viec_lam extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function vieclam()
	{
		$this->db->select('*');
		$this->db->from('viec_lam,nha_tuyen_dung,nganh_nghe,dia_diem');
		$this->db->where('viec_lam.id_ntd = nha_tuyen_dung.id');
		$this->db->where('viec_lam.nganh = nganh_nghe.id_nn');
		$this->db->where('viec_lam.vi_tri = dia_diem.id_dd');
		$this->db->order_by('nha_tuyen_dung.id', 'desc'); //asc
		//$this->db->limit('6');
		return $this->db->get()->result_array();
	}
	public function capnhat_vl($data=array(),$id)
	{
		$this->db->where('id_vl',$id);
        return $this->db->update('viec_lam',$data);
	}

//	public function countAll(){
//		return $this->db->count_all($this->_table); 
//	}
}