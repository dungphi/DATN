<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kinh_nghiem extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function kinhnghiem()
	{
		$this->db->select('*');
		$this->db->from('kinh_nghiem');
		$this->db->order_by('ten_kn', 'asc'); //asc
		//$this->db->limit('6');
		return $this->db->get()->result_array();
	}
	public function them_kinhnghiem($kinhnghiem)
	{
		$data = array(
			'ten_kn' => $kinhnghiem
		);
		return $this->db->insert('kinh_nghiem',$data);
	}
	public function xoa_kinhnghiem($id)
	{
		$this->db->where('id_kn', $id);
		return $this->db->delete('kinh_nghiem');
	}
	public function chinhsua_kinhnghiem($id)
	{
		$this->db->select('*');
		$this->db->from('kinh_nghiem');
		$this->db->where('id_kn', $id); 
		return $this->db->get()->row_array();
	}
	public function luu_kinhnghiem($id,$ten_kn){
        $data = array(
            'ten_kn' => $ten_kn,
        );
        $this->db->where('id_kn',$id);
        return $this->db->update('kinh_nghiem',$data);
    }
}