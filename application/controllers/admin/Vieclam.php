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
		$this->load->model('viec_lam');
		$this->load->model('nganh_nghe');
		$this->load->model('dia_diem');
	}
	public function index()
	{
		if(!isset($_SESSION['admin']))
		{
			redirect(base_url('admin/login'));
		}
		$data['title'] = 'Danh sách việc làm';
		$data['vl_ds'] = 'class="active"';
		$data['content'] = 'admin/vieclam/list';
		$data['active'] = 1;
		$data['vieclam'] = $this->viec_lam->vieclam();
		$this->load->view('admin/layout', $data);

	}
	
	//Ngành nghề
	public function nn()
	{
		if(!isset($_SESSION['admin']))
		{
			redirect(base_url('admin/login'));
		}
		$data['title'] = 'Danh sách ngành nghề';
		$data['vl_nn'] = 'class="active"';
		$data['content'] = 'admin/vieclam/nganhnghe';
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$this->load->view('admin/layout', $data);

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
	
	//start Địa điểm
		public function dd()
	{
		if(!isset($_SESSION['admin']))
		{
			redirect(base_url('admin/login'));
		}
		$data['title'] = 'Danh sách địa điểm';
		$data['vl_dd'] = 'class="active"';
		$data['content'] = 'admin/vieclam/diadiem';
		$data['diadiem'] = $this->dia_diem->diadiem();
		$this->load->view('admin/layout', $data);

	}
	public function them_dd()
	{
		$nganhghe = $this->input->post('diadiem');
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
		$kq = $this->dia_diem->chinhsua_dd($id);
		if(isset($kq))
			die(json_encode($kq));
		else
			die(json_encode(0));
	}
	public function luu_dd()
	{
		$id = $this->input->post('id');
		$nganhnghe = $this->input->post('diadiem');
		$kq = $this->dia_diem->luudiadiem($id, $diadiem);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	//end địa điểm
}
