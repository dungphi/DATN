<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mslide extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function danhsach()
	{
		$this->db->select('*');
		$this->db->from('slide');
		$this->db->order_by('stt', 'asc'); //asc
		//$this->db->limit('6');
		return $this->db->get()->result_array();
	}
	public function them_slide($hinhanh,$noidung,$stt)
	{
		$data = array(
			'hinh_anh' => $hinhanh,
			'noi_dung' => $noidung,
			'stt' => $stt,
			'active' => 1,
		);
		return $this->db->insert('slide',$data);
	}
	public function xoa_slide($id)
	{
		$this->db->where('id_slide', $id);
		return $this->db->delete('slide');
	}
	public function chinhsua_slide($id)
	{
		$this->db->select('*');
		$this->db->from('slide');
		$this->db->where('id_slide', $id); 
		return $this->db->get()->row_array();
	}
	public function luu_slide($id,$slide){
        $data = array(
            'slide' => $slide,
        );
        $this->db->where('id_slide',$id);
        return $this->db->update('slide',$data);
    }
}