<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nganh_nghe extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function nganhnghe()
	{
		$this->db->select('*');
		$this->db->from('nganh_nghe');
		$this->db->order_by('ten_nn', 'asc'); //asc
		//$this->db->limit('6');
		return $this->db->get()->result_array();
	}
	public function them_nganhnghe($nganhnghe)
	{
		$data = array(
			'ten_nn' => $nganhnghe
		);
		return $this->db->insert('nganh_nghe',$data);
	}
	public function xoa_nganhnghe($id)
	{
		$this->db->where('id_nn', $id);
		return $this->db->delete('nganh_nghe');
	}
	public function chinhsua_nganhnghe($id)
	{
		$this->db->select('*');
		$this->db->from('nganh_nghe');
		$this->db->where('id_nn', $id); 
		return $this->db->get()->row_array();
	}
	public function luu_nganhnghe($id,$ten_nn){
        $data = array(
            'ten_nn' => $ten_nn,
        );
        $this->db->where('id_nn',$id);
        return $this->db->update('nganh_nghe',$data);
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