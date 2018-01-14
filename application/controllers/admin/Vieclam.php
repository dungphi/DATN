<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vieclam extends CI_Controller {

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
		if(!isset($_SESSION['admin']))
		{
			redirect(base_url('admin/login'));
		}
		$this->load->model('viec_lam');
		$this->load->model('nganh_nghe');
		$this->load->model('dia_diem');
		$this->load->model('kinh_nghiem');
		$this->load->model('muc_luong');
		$this->load->model('trinh_do');
		$this->load->model('madmin');
	}
	//việc làm
	public function index()
	{
		
		$data['title'] = 'Danh sách việc làm';
		$data['vl_ds'] = 'class="active"';
		$data['content'] = 'admin/vieclam/danhsach';
		$data['vieclam'] = $this->viec_lam->vieclam(0,0);
		$this->load->view('admin/index', $data);

	}
	public function active_vl()
	{
		$id = $this->input->post('id');
		$active = $this->input->post('active');
		$dat = array(
			'active_vl' => $active
		);
		$kq = $this->viec_lam->capnhat_vl($dat, $id);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function vip()
	{
		$id = $this->input->post('id');
		$vip = $this->input->post('vip');
		$dat = array(
			'vip' => $vip
		);
		$kq = $this->viec_lam->capnhat_vl($dat, $id);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function xoa_vl()
	{
		$id = $this->input->post('id');
		$kq = $this->viec_lam->xoa_vl($id);
		echo $kq;
	}
	//kết thúc việc làm
	//Ngành nghề
	public function nn()
	{
		$data['title'] = 'Danh sách ngành nghề';
		$data['vl_nn'] = 'class="active"';
		$data['content'] = 'admin/vieclam/nganhnghe';
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$this->load->view('admin/index', $data);

	}
	public function them_nn()
	{
		$nganhghe = $this->input->post('nganhnghe');
		$kq = $this->nganh_nghe->them_nganhnghe($nganhghe);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function xoa_nn()
	{
		$id = $this->input->post('id');
		$kq = $this->nganh_nghe->xoa_nganhnghe($id);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function chinhsua_nn()
	{
		$id = $this->input->post('id');
		$kq = $this->nganh_nghe->chinhsua_nganhnghe($id);
		if(isset($kq))
			die(json_encode($kq));
		else
			die(json_encode(0));
	}
	public function luu_nn()
	{
		$id = $this->input->post('id');
		$nganhnghe = $this->input->post('nganhnghe');
		$kq = $this->nganh_nghe->luu_nganhnghe($id, $nganhnghe);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	// kết thúc ngành nghề
	//địa điểm
	public function dd()
	{
		$data['title'] = 'Danh sách địa điểm';
		$data['vl_dd'] = 'class="active"';
		$data['content'] = 'admin/vieclam/diadiem';
		$data['diadiem'] = $this->dia_diem->diadiem();
		$this->load->view('admin/index', $data);

	}
	public function them_dd()
	{
		$diadiem = $this->input->post('diadiem');
		$kq = $this->dia_diem->them_diadiem($diadiem);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function xoa_dd()
	{
		$id = $this->input->post('id');
		$kq = $this->dia_diem->xoa_diadiem($id);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function chinhsua_dd()
	{
		$id = $this->input->post('id');
		$kq = $this->dia_diem->chinhsua_diadiem($id);
		if(isset($kq))
			die(json_encode($kq));
		else
			die(json_encode(0));
	}
	public function luu_dd()
	{
		$id = $this->input->post('id');
		$diadiem = $this->input->post('diadiem');
		$kq = $this->dia_diem->luu_diadiem($id, $diadiem);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	//kết thúc địa điểm
	//Kinh nghiệm
	public function kn()
	{
		$data['title'] = 'Danh sách kinh nghiệm';
		$data['content'] = 'admin/vieclam/kinhnghiem';
		$data['kinhnghiem'] = $this->kinh_nghiem->kinhnghiem();
		$this->load->view('admin/index', $data);

	}
	public function them_kn()
	{
		$kinhnghiem = $this->input->post('kinhnghiem');
		$kq = $this->kinh_nghiem->them_kinhnghiem($kinhnghiem);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function xoa_kn()
	{
		$id = $this->input->post('id');
		$kq = $this->kinh_nghiem->xoa_kinhnghiem($id);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function chinhsua_kn()
	{
		$id = $this->input->post('id');
		$kq = $this->kinh_nghiem->chinhsua_kinhnghiem($id);
		if(isset($kq))
			die(json_encode($kq));
		else
			die(json_encode(0));
	}
	public function luu_kn()
	{
		$id = $this->input->post('id');
		$kinhnghiem = $this->input->post('kinhnghiem');
		$kq = $this->kinh_nghiem->luu_kinhnghiem($id, $kinhnghiem);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	//kết thúc kinh nghiệm
	//mức lương
	public function ml()
	{
		$data['title'] = 'Danh sách mức lương';
		$data['content'] = 'admin/vieclam/mucluong';
		$data['mucluong'] = $this->muc_luong->mucluong();
		$this->load->view('admin/index', $data);

	}
	public function them_ml()
	{
		$mucluong = $this->input->post('mucluong');
		$kq = $this->muc_luong->them_mucluong($mucluong);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function xoa_ml()
	{
		$id = $this->input->post('id');
		$kq = $this->muc_luong->xoa_mucluong($id);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function chinhsua_ml()
	{
		$id = $this->input->post('id');
		$kq = $this->muc_luong->chinhsua_mucluong($id);
		if(isset($kq))
			die(json_encode($kq));
		else
			die(json_encode(0));
	}
	public function luu_ml()
	{
		$id = $this->input->post('id');
		$mucluong = $this->input->post('mucluong');
		$kq = $this->muc_luong->luu_mucluong($id, $mucluong);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	//kết thúc mức lương
	//trình độ
	public function td()
	{
		$data['title'] = 'Danh sách trình độ';
		$data['content'] = 'admin/vieclam/trinhdo';
		$data['trinhdo'] = $this->trinh_do->trinhdo();
		$this->load->view('admin/index', $data);

	}
	public function them_td()
	{
		$trinhdo = $this->input->post('trinhdo');
		$kq = $this->trinh_do->them_trinhdo($trinhdo);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function xoa_td()
	{
		$id = $this->input->post('id');
		$kq = $this->trinh_do->xoa_trinhdo($id);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function chinhsua_td()
	{
		$id = $this->input->post('id');
		$kq = $this->trinh_do->chinhsua_trinhdo($id);
		if(isset($kq))
			die(json_encode($kq));
		else
			die(json_encode(0));
	}
	public function luu_td()
	{
		$id = $this->input->post('id');
		$trinhdo = $this->input->post('trinhdo');
		$kq = $this->trinh_do->luu_trinhdo($id, $trinhdo);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	//kết thúc trình độ
}
