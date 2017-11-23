<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viec_lam extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function vieclam()
	{
		$this->db->select('*');
<<<<<<< HEAD
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

=======
		$this->db->from('nha_tuyen_dung,viec_lam,nganh_nghe,dia_diem,kinh_nghiem,muc_luong,gioi_tinh,trinh_do');
		$this->db->where('nha_tuyen_dung.id_ntd = viec_lam.id_ntd');
		$this->db->where('viec_lam.id_nn = nganh_nghe.id_nn'); 
		$this->db->where('viec_lam.id_ddlv = dia_diem.id_dd');
		$this->db->where('viec_lam.id_kinh_nghiem = kinh_nghiem.id_kn');
		$this->db->where('viec_lam.id_muc_luong = muc_luong.id_ml');
		$this->db->where('viec_lam.yc_gioi_tinh = gioi_tinh.id_gt');
		$this->db->where('viec_lam.id_trinh_do = trinh_do.id_td');
		$this->db->order_by('nha_tuyen_dung.id_ntd', 'desc'); //asc
		//$this->db->limit('6');
		return $this->db->get()->result_array();
	}
	public function vieclamchitiet($id)
	{
		$this->db->select('*');
		$this->db->from('nha_tuyen_dung,viec_lam,nganh_nghe,dia_diem,kinh_nghiem,muc_luong,gioi_tinh,trinh_do');
		$this->db->where('nha_tuyen_dung.id_ntd = viec_lam.id_ntd');
		$this->db->where('viec_lam.id_nn = nganh_nghe.id_nn'); 
		$this->db->where('viec_lam.id_ddlv = dia_diem.id_dd');
		$this->db->where('viec_lam.id_kinh_nghiem = kinh_nghiem.id_kn');
		$this->db->where('viec_lam.id_muc_luong = muc_luong.id_ml');
		$this->db->where('viec_lam.yc_gioi_tinh = gioi_tinh.id_gt');
		$this->db->where('viec_lam.id_trinh_do = trinh_do.id_td');
		$this->db->where('viec_lam.id_ntd', $id); 
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
>>>>>>> 01fc3629827a60029113f6dd13ab660ab55f1f5a
//	public function countAll(){
//		return $this->db->count_all($this->_table); 
//	}

}