<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ho_so_ntv extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function hosotimviec($tong,$batdau)
	{
		$this->db->select('*');
		$this->db->from('nguoi_tim_viec,ho_so_tim_viec,nganh_nghe,dia_diem,kinh_nghiem,muc_luong,gioi_tinh,trinh_do');
		$this->db->where('nguoi_tim_viec.id_ntv = ho_so_tim_viec.id_ntv');
		$this->db->where('ho_so_tim_viec.id_nn = nganh_nghe.id_nn'); 
		$this->db->where('ho_so_tim_viec.id_ddlv = dia_diem.id_dd');
		$this->db->where('ho_so_tim_viec.id_kinh_nghiem = kinh_nghiem.id_kn');
		$this->db->where('ho_so_tim_viec.id_muc_luong = muc_luong.id_ml');
		$this->db->where('nguoi_tim_viec.id_gioi_tinh = gioi_tinh.id_gt');
		$this->db->where('ho_so_tim_viec.id_trinh_do = trinh_do.id_td');
		$this->db->order_by('nguoi_tim_viec.id_ntv', 'desc'); //asc
		$this->db->limit($tong, $batdau);
		return $this->db->get()->result_array();
	
	
	}
	
	public function hosochitiet($id)
	{
		$this->db->select('*');
		$this->db->from('nguoi_tim_viec,ho_so_tim_viec,nganh_nghe,dia_diem,kinh_nghiem,muc_luong,gioi_tinh,trinh_do');
		$this->db->where('nguoi_tim_viec.id_ntv = ho_so_tim_viec.id_ntv');
		$this->db->where('ho_so_tim_viec.id_nn = nganh_nghe.id_nn'); 
		$this->db->where('ho_so_tim_viec.id_ddlv = dia_diem.id_dd');
		$this->db->where('ho_so_tim_viec.id_kinh_nghiem = kinh_nghiem.id_kn');
		$this->db->where('ho_so_tim_viec.id_muc_luong = muc_luong.id_ml');
		$this->db->where('nguoi_tim_viec.id_gioi_tinh = gioi_tinh.id_gt');
		$this->db->where('ho_so_tim_viec.id_trinh_do = trinh_do.id_td');
		$this->db->where('ho_so_tim_viec.id_ntv', $id); 
		//$this->db->limit('6');
		return $this->db->get()->row_array();
	
	
	}
	
	
	//public function phim_play($id)
//	{
//		$this->db->select('*');
//		$this->db->from('phim');
//		$this->db->where('idphim', $id);
//		return $this->db->get()->row_array();
//	}
//
	public function countAll(){
		$this->db->from('nguoi_tim_viec,ho_so_tim_viec,nganh_nghe,dia_diem,kinh_nghiem,muc_luong,gioi_tinh,trinh_do');
		$this->db->where('nguoi_tim_viec.id_ntv = ho_so_tim_viec.id_ntv');
		$this->db->where('ho_so_tim_viec.id_nn = nganh_nghe.id_nn'); 
		$this->db->where('ho_so_tim_viec.id_ddlv = dia_diem.id_dd');
		$this->db->where('ho_so_tim_viec.id_kinh_nghiem = kinh_nghiem.id_kn');
		$this->db->where('ho_so_tim_viec.id_muc_luong = muc_luong.id_ml');
		$this->db->where('nguoi_tim_viec.id_gioi_tinh = gioi_tinh.id_gt');
		$this->db->where('ho_so_tim_viec.id_trinh_do = trinh_do.id_td');
		//$this->db->order_by('nguoi_tim_viec.id_ntv', 'desc'); //asc
		$kq = $this->db->get()->result_array();
		return count($kq);
	}
}