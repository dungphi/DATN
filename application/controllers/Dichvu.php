<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dichvu extends CI_Controller {

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
	}
	public function index()
	{	
		echo 'Trang đang được phát trển, vui lòng trở lại sau. <a href="'.base_url().'">Trở lại trang chủ</a>';
	}	
	public function dangnhap()
	{
		$this->load->model('nguoi_tim_viec');
		$this->load->model('nha_tuyen_dung');
		$data['title'] = 'Trang việc làm Online';
		$data['content'] = 'layout/content';
		$data['active'] = 1;
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
					$this->session->set_userdata("nguoitimviec", $email);
					//echo $_SESSION['login'];
					redirect(base_url());
				}
				else
				{	
					$data['dangnhap']='<script>alert("Đăng nhập không thành công, vui lòng kiểm tra lại tài khoản hoặc mật khẩu!");location.assign("'.base_url('dangnhap/NTV').'");</script>';
				}
			}
			else
			{
				
				$check = $this->nha_tuyen_dung->dangnhap($email,$pass);
				if($check == TRUE)
				{
					$this->session->set_userdata("nhatuyendung", $email);
					echo $_SESSION['nhatuyendung'];
					redirect(base_url());
				}
				else
				
				$data['dangnhap']='<script>alert("Đăng nhập không thành công, vui lòng kiểm tra lại tài khoản hoặc mật khẩu!")</script>';
			}
		}
		$this->load->view('trangchu', $data);
	}
	public function dangxuat()
	{
		//đăng xuất
		$this->session->unset_userdata("nguoitimviec");
		$this->session->unset_userdata("nhatuyendung");
		redirect(base_url());
		//view
		
	}
}
