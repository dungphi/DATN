<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ngoai_ngu extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function ngoaingu()
	{
		$this->db->select('*');
		$this->db->from('ngoai_ngu');
		$this->db->order_by('id_ngoai_ngu', 'asc'); //asc
		//$this->db->limit('6');
		return $this->db->get()->result_array();
	}
	public function them_ngoaingu($ngoaingu)
	{
		$data = array(
			'ten_ngoai_ngu' => $ngoaingu
		);
		return $this->db->insert('ngoai_ngu',$data);
	}
	public function xoa_ngoaingu($id)
	{
		$this->db->where('id_ngoai_ngu', $id);
		return $this->db->delete('ngoai_ngu');
	}
	public function chinhsua_ngoaingu($id)
	{
		$this->db->select('*');
		$this->db->from('ngoai_ngu');
		$this->db->where('id_ngoai_ngu', $id); 
		return $this->db->get()->row_array();
	}
	public function luu_ngoaingu($id,$ngoai_ngu){
        $data = array(
            'ten_ngoai_ngu' => $ngoai_ngu,
        );
        $this->db->where('id_ngoai_ngu',$id);
        return $this->db->update('ngoai_ngu',$data);
    }
}