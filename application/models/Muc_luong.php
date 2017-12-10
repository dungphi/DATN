<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muc_luong extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function mucluong()
	{
		$this->db->select('*');
		$this->db->from('muc_luong');
		$this->db->order_by('id_ml', 'asc'); //asc
		//$this->db->limit('6');
		return $this->db->get()->result_array();
	}
	public function them_mucluong($mucluong)
	{
		$data = array(
			'muc_luong' => $mucluong
		);
		return $this->db->insert('muc_luong',$data);
	}
	public function xoa_mucluong($id)
	{
		$this->db->where('id_ml', $id);
		return $this->db->delete('muc_luong');
	}
	public function chinhsua_mucluong($id)
	{
		$this->db->select('*');
		$this->db->from('muc_luong');
		$this->db->where('id_ml', $id); 
		return $this->db->get()->row_array();
	}
	public function luu_mucluong($id,$muc_luong){
        $data = array(
            'muc_luong' => $muc_luong,
        );
        $this->db->where('id_ml',$id);
        return $this->db->update('muc_luong',$data);
    }
}