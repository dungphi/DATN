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
	public function xoa_hoso($id)
	{
		$this->db->where('id_hoso', $id);
		return $this->db->delete('ho_so_tim_viec');
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
	public function capnhat_hoso($data=array(),$id)
	{
		$this->db->where('id_hoso',$id);
        return $this->db->update('ho_so_tim_viec',$data);
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
	public function hoso ($id_ntv){
		$this->db->from('nguoi_tim_viec, ho_so_tim_viec, nganh_nghe, dia_diem, kinh_nghiem, trinh_do, muc_luong');
		$this->db->where('nguoi_tim_viec.id_hs = ho_so_tim_viec.id_hoso');
		$this->db->where('nganh_nghe.id_nn = ho_so_tim_viec.id_nn');
		$this->db->where('dia_diem.id_dd = ho_so_tim_viec.id_ddlv');
		$this->db->where('kinh_nghiem.id_kn = ho_so_tim_viec.id_kinh_nghiem');
		$this->db->where('trinh_do.id_td = ho_so_tim_viec.id_trinh_do');
		$this->db->where('muc_luong.id_ml = ho_so_tim_viec.id_muc_luong');
		$this->db->where('nguoi_tim_viec.id_ntv',$id_ntv);
		return $this->db->get()->result_array();
	}
	public function ntv ($id_ntv){
		$this->db->from('nguoi_tim_viec');
		$this->db->where('id_ntv',$id_ntv);
		return $this->db->get()->row_array();
	}
}