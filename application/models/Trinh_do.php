<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trinh_do extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function trinhdo()
	{
		$this->db->select('*');
		$this->db->from('trinh_do');
		$this->db->order_by('id_td', 'asc'); //asc
		//$this->db->limit('6');
		return $this->db->get()->result_array();
	}
	public function them_trinhdo($trinhdo)
	{
		$data = array(
			'trinh_do' => $trinhdo
		);
		return $this->db->insert('trinh_do',$data);
	}
	public function xoa_trinhdo($id)
	{
		$this->db->where('id_td', $id);
		return $this->db->delete('trinh_do');
	}
	public function chinhsua_trinhdo($id)
	{
		$this->db->select('*');
		$this->db->from('trinh_do');
		$this->db->where('id_td', $id); 
		return $this->db->get()->row_array();
	}
	public function luu_trinhdo($id,$trinh_do){
        $data = array(
            'trinh_do' => $trinh_do,
        );
        $this->db->where('id_td',$id);
        return $this->db->update('trinh_do',$data);
    }
}