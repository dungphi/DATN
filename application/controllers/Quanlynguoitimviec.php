<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quanlynguoitimviec extends CI_Controller {

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
		if(!isset($_SESSION['nguoitimviec']))
		{
			redirect(base_url('dangnhap/NTV'));
		}
		$this->load->model('viec_lam');
		$this->load->model('nguoi_tim_viec');
		$this->load->model('ho_so_ntv');
		$this->load->model('nganh_nghe');
		$this->load->model('dia_diem');
	}
public function quanlytaikhoan()
	{
		
		$data['title'] = 'Quản lý tài khoản';
		$data['content'] = 'nguoi_timviec/quanlytaikhoan';
		$data['active'] = 5;
		$data['trungtamquanly'] ='nguoi_timviec/trungtamquanly';
		$user = $_SESSION['nguoitimviec'];
		$data['nguoitimviec'] = $this->nguoi_tim_viec->chinhsuataikhoan($user);
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$this->load->view('trangchu', $data);
		
	}
	public function chinhsuataikhoan()
	{
		
		$data['title'] = 'Chỉnh sửa tài khoản';
		$data['content'] = 'nguoi_timviec/chinhsuataikhoan';
		$data['active'] = 5;
		$data['trungtamquanly'] ='nguoi_timviec/trungtamquanly';
		$user = $_SESSION['nguoitimviec'];
		$data['nguoitimviec'] = $this->nguoi_tim_viec->chinhsuataikhoan($user);
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$this->load->view('trangchu', $data);
		
	}
	public function quanlyhoso()
	{
		$data['title'] = 'Quản lý hồ sơ';
		$data['content'] = 'nguoi_timviec/quanlyhoso';
		$data['active'] = 6;
		$data['trungtamquanly'] ='nguoi_timviec/trungtamquanly';
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$this->load->view('trangchu', $data);
		
	}	
	public function vieclamdaluu()
	{
		$data['title'] = 'Việc làm đã lưu';
		$data['content'] = 'nguoi_timviec/vieclamdaluu';
		$data['active'] = 7;
		$data['trungtamquanly'] ='nguoi_timviec/trungtamquanly';
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$this->load->view('trangchu', $data);
		
	}
	public function ntdxemhoso()
	{
		$data['title'] = 'Nhà tuyển dụng xem hồ sơ';
		$data['content'] = 'nguoi_timviec/ntdxemhoso';
		$data['active'] = 8;
		$data['trungtamquanly'] ='nguoi_timviec/trungtamquanly';
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$this->load->view('trangchu', $data);
		
	}
}