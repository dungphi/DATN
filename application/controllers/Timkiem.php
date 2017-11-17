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
		$this->load->model('tim_kiem');
	}
	public function index()
	{
		$data['title'] = 'Tìm kiếm việc làm';
		$dat = array();
		if($this->input->get('nganh_nghe') != 0)
		{
			$data['id_nn'] = $dat['nganh'] = $this->input->get('nganh_nghe');
		}
		if($this->input->get('tinh_thanh') != 0)
		{
			$data['id_dd'] = $dat['vi_tri'] = $this->input->get('tinh_thanh');
		}
		$data['tu_khoa'] = $tu_khoa = $this->input->get('tu_khoa');
		
		$data['content'] = 'layout/timkiem';
		$data['active'] = 0;
		$data['vieclam'] = $this->viec_lam->vieclam();
		$data['nguoitimviec'] = $this->nguoi_tim_viec->nguoitimviec();
		$data['hosotimviec'] = $this->ho_so_ntv->hosotimviec();
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$data['timkiem'] = $this->tim_kiem->timkiem($tu_khoa,$dat);
		$this->load->view('trangchu', $data);
		
	}	
	public function dangnhap()
	{
		$this->load->model('nguoi_tim_viec');
		$this->load->model('nha_tuyen_dung');
		if(isset($_POST['dangnhap']))
		{
			$tuychon = $this->input->post('tuychon');
			$email = $this->input->post('email');
			$pass = md5($this->input->post('pass'));
			if($tuychon == 1)
			{
				$check = $this->nguoi_tim_viec->dangnhap($email,$pass);
				if($check == TRUE)
				{
					$this->session->set_userdata("login", $email);
					//echo $_SESSION['login'];
					redirect(base_url());
				}
				else
				{	
					$this->session->set_flashdata('notice','Đăng nhập không thành công, vui lòng kiểm tra lại tài khoản hoặc mật khẩu');
				}
			}
			else
			{
				
				$check = $this->nha_tuyen_dung->dangnhap($email,$pass);
				if($check == TRUE)
				{
					$this->session->set_userdata("login", $email);
					//echo $_SESSION['login'];
					redirect(base_url());
				}
				else
				{
					echo '<script>alert("Email hoặc Mật khẩu không đúng")</script>';
					
					
					
				}
			}
		}
	}
	public function dangxuat()
	{
		//đăng xuất
		$this->session->unset_userdata("login");
		redirect(base_url());
		//view
		
	}
}
