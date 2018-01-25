<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timkiem extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent::__construct();
		$this->load->model('viec_lam');
		$this->load->model('nguoi_tim_viec');
		$this->load->model('ho_so_ntv');
		$this->load->model('nganh_nghe');
		$this->load->model('dia_diem');
		$this->load->model('muc_luong');
		$this->load->model('hinh_thuc_lam_viec');
		$this->load->model('kinh_nghiem');
		$this->load->model('trinh_do');
		$this->load->model('gioi_tinh');
		$this->load->model('tim_kiem');
	}
	public function index()
	{
		$data['title'] = 'Tìm kiếm việc làm';
		$dat = array();
		if($this->input->get('nganh_nghe') != 0)
		{
			$data['id_nn'] = $dat['id_nn'] = $this->input->get('nganh_nghe');
		}
		if($this->input->get('tinh_thanh') != 0)
		{
			$data['id_dd'] = $dat['id_dd'] = $this->input->get('tinh_thanh');
		}
		if($this->input->get('muc_luong') != 0)
		{
			$data['id_ml'] = $dat['id_ml'] = $this->input->get('muc_luong');
		}
		if($this->input->get('hinh_thuc') != 0)
		{
			$data['id_htlv'] = $dat['id_htlv'] = $this->input->get('hinh_thuc');
		}
		if($this->input->get('kinh_nghiem') != 0)
		{
			$data['id_kn'] = $dat['id_kn'] = $this->input->get('kinh_nghiem');
		}
		if($this->input->get('trinh_do') != 0)
		{
			$data['id_td'] = $dat['id_td'] = $this->input->get('trinh_do');
		}
		if($this->input->get('gioi_tinh') != 0)
		{
			$data['id_gt'] = $dat['id_gt'] = $this->input->get('gioi_tinh');
		}
		$data['tu_khoa'] = $tu_khoa = $this->input->get('tu_khoa');
		
		$data['content'] = 'layout/timkiem';
		$data['active'] = 0;
		$data['vieclam'] = $this->viec_lam->vieclam(5,0);
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$data['mucluong'] = $this->muc_luong->mucluong();
		$data['hinhthuc_lv'] = $this->hinh_thuc_lam_viec->hinhthuclamviec();
		$data['kinhnghiem'] = $this->kinh_nghiem->kinhnghiem();
		$data['trinhdo'] = $this->trinh_do->trinhdo();
		$data['gioitinh'] = $this->gioi_tinh->danhsach();
		$data['timkiem'] = $this->tim_kiem->timkiem($tu_khoa,$dat);
		$this->load->view('trangchu', $data);
		
	}	
	
		
	
	
}
