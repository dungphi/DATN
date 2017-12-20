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
	public function check_pass($id,$pass)
	{
		$this->db->from('nguoi_tim_viec');
		$this->db->where('id_ntv', $id);
		$this->db->where('pass', md5($pass));
		$kq = $this->db->get()->result_array();
		if(count($kq) == 1)
			return TRUE;
		else
			return FALSE;
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
	public function thongtinnguoidung($user)
	{
		$this->db->select('*');
		$this->db->from('nguoi_tim_viec,gioi_tinh');
		$this->db->where('nguoi_tim_viec.id_gioi_tinh = gioi_tinh.id_gt');
		$this->db->where('email', $user);
		return $this->db->get()->row_array();
	}
	public function capnhat($data=array(),$id)
	{
		$this->db->where('id_ntv',$id);
        return $this->db->update('nguoi_tim_viec',$data);
	}
	public function thongtinhoso($user)
	{
		$this->db->select('*');
		$this->db->from('nguoi_tim_viec,ho_so_tim_viec,nganh_nghe,dia_diem,kinh_nghiem,muc_luong,gioi_tinh,trinh_do');
		$this->db->where('nguoi_tim_viec.id_hs = ho_so_tim_viec.id_hoso');
		$this->db->where('ho_so_tim_viec.id_nn = nganh_nghe.id_nn'); 
		$this->db->where('ho_so_tim_viec.id_ddlv = dia_diem.id_dd');
		$this->db->where('ho_so_tim_viec.id_kinh_nghiem = kinh_nghiem.id_kn');
		$this->db->where('ho_so_tim_viec.id_muc_luong = muc_luong.id_ml');
		$this->db->where('nguoi_tim_viec.id_gioi_tinh = gioi_tinh.id_gt');
		$this->db->where('ho_so_tim_viec.id_trinh_do = trinh_do.id_td');
		$this->db->where('email', $user);
		$this->db->order_by('nguoi_tim_viec.id_ntv', 'desc');
		return $this->db->get()->row_array();
	}
	public function taohoso($user)
	{
		$this->db->select('*');
		$this->db->from('nguoi_tim_viec');
		$this->db->where('email', $user);
		$this->db->order_by('nguoi_tim_viec.id_ntv', 'desc');
		return $this->db->get()->row_array();
	}
	public function xoahoso($id)
	{
		$this->db->where('id_hoso', $id);
		return $this->db->delete('ho_so_tim_viec');
	
	}
	public function themhoso($db = array(),$id)
	{
		return $this->db->insert('ho_so_tim_viec',$db);
		
	}
	public function capnhathoso($data=array(),$id)
	{
		$this->db->where('id_hoso',$id);
        return $this->db->update('ho_so_tim_viec',$data);
	}
	public function countAll(){
		return $this->db->count_all('nguoi_tim_viec'); 
	}
}