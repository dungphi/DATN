<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viec_lam extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function vieclam($tong,$batdau)
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
		$this->db->order_by('nha_tuyen_dung.id_ntd', 'desc'); //asc
		$this->db->limit($tong, $batdau);
		//$this->db->limit('6');
		return $this->db->get()->result_array();
	}
	public function vieclamnoibat()
	{
		$this->db->select('*');
		$this->db->from('nha_tuyen_dung,viec_lam,nganh_nghe,dia_diem,kinh_nghiem,muc_luong,gioi_tinh,trinh_do');
		$this->db->where('nha_tuyen_dung.id_vl = viec_lam.id_vl');
		$this->db->where('viec_lam.id_nganh = nganh_nghe.id_nn'); 
		$this->db->where('viec_lam.id_ddlv = dia_diem.id_dd');
		$this->db->where('viec_lam.id_kinh_nghiem = kinh_nghiem.id_kn');
		$this->db->where('viec_lam.id_muc_luong = muc_luong.id_ml');
		$this->db->where('viec_lam.yc_gioi_tinh = gioi_tinh.id_gt');
		$this->db->where('viec_lam.id_trinh_do = trinh_do.id_td');
		$this->db->where('viec_lam.vip',1);
		$this->db->order_by('nha_tuyen_dung.id_ntd', 'desc'); //asc
		
		//$this->db->limit('6');
		return $this->db->get()->result_array();
	}
	public function capnhat_vl($data=array(),$id)
	{
		$this->db->where('id_vl',$id);
        return $this->db->update('viec_lam',$data);
	}
	public function capnhatluotxem($data=array(),$id)
	{
		$this->db->where('id_vl',$id);
        return $this->db->update('viec_lam',$data);
	}
		
	public function vieclamchitiet($id)
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
		$this->db->where('viec_lam.id_vl', $id); 
		//$this->db->limit('6');
		return $this->db->get()->row_array();
	}
	public function get($id)
	{
		$this->db->select('*');
		$this->db->from('viec_lam');
		$this->db->where('id_vl', $id); 
		return $this->db->get()->row_array();
	}
	public function countAll(){
		$this->db->from('nha_tuyen_dung,viec_lam,nganh_nghe,dia_diem,kinh_nghiem,muc_luong,gioi_tinh,trinh_do');
		$this->db->where('nha_tuyen_dung.id_ntd = viec_lam.id_ntd');
		$this->db->where('viec_lam.id_nganh = nganh_nghe.id_nn'); 
		$this->db->where('viec_lam.id_ddlv = dia_diem.id_dd');
		$this->db->where('viec_lam.id_kinh_nghiem = kinh_nghiem.id_kn');
		$this->db->where('viec_lam.id_muc_luong = muc_luong.id_ml');
		$this->db->where('viec_lam.yc_gioi_tinh = gioi_tinh.id_gt');
		$this->db->where('viec_lam.id_trinh_do = trinh_do.id_td');
		//$this->db->order_by('nguoi_tim_viec.id_ntv', 'desc'); //asc
		$kq = $this->db->get()->result_array();
		return count($kq);
	}
	public function them_vl($db = array())
	{
		return $this->db->insert('viec_lam',$db);
	}
	public function xoa_vl($id)
	{
		$this->db->where('id_vl', $id);
		return $this->db->delete('viec_lam');
	}
}