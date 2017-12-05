<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tim_kiem extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function timkiem($tu_khoa,$data=array())
	{
		$this->db->select('*');
		$this->db->from('nha_tuyen_dung,viec_lam,nganh_nghe,dia_diem,kinh_nghiem,muc_luong,gioi_tinh,trinh_do');
		$this->db->where('nha_tuyen_dung.id_ntd = viec_lam.id_ntd');
		$this->db->where('viec_lam.id_nganh = nganh_nghe.id_nn'); 
		$this->db->where('viec_lam.id_ddlv = dia_diem.id_dd');
		$this->db->where('viec_lam.id_kinh_nghiem = kinh_nghiem.id_kn');
		$this->db->where('viec_lam.id_muc_luong = muc_luong.id_ml');
		$this->db->where('viec_lam.yc_gioi_tinh = gioi_tinh.id_gt');
		$this->db->where('viec_lam.id_trinh_do = trinh_do.id_td');
		$this->db->like('tieu_de', $tu_khoa);
		$this->db->where($data);
		return $this->db->get()->result_array();
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