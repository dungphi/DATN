<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dangnhap extends CI_Controller {

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
		$this->load->model('nguoi_tim_viec');
		$this->load->model('nha_tuyen_dung');
	}
	
	public function NTV()
	{
		$data['title'] = 'Đăng nhập Người Tìm Việc';
		
		if(isset($_POST['dangnhap']))
		{
			$user = $this->input->post('email');
			$pass = md5($this->input->post('pass'));
			$check = $this->nguoi_tim_viec->dangnhap($user,$pass);
			if($check == TRUE)
			{
				$this->session->set_userdata("nguoitimviec", $user);
				echo $_SESSION['nguoitimviec'];
				redirect(base_url('quanlynguoitimviec/quanlytaikhoan'));
			}
			else
			{
				echo '<script>alert("Tài khoản không đúng!")</script>';
			}
		}
		$this->load->view('dangnhapntv');
		
	}	
	
	public function NTD()
	{
		$data['title'] = 'Đăng nhập Nhà tuyển dụng';
		
		if(isset($_POST['dangnhap']))
		{
			$user = $this->input->post('email');
			$pass = md5($this->input->post('pass'));
			$check = $this->nha_tuyen_dung->dangnhap($user,$pass);
			if($check == TRUE)
			{
				$this->session->set_userdata("nhatuyendung", $user);
				echo $_SESSION['nhatuyendung'];
				redirect(base_url('quanlynhatuyendung/quanlytaikhoan'));
			}
			else
			{
				echo '<script>alert("Tài khoản không đúng!")</script>';
			}
		}
		$this->load->view('dangnhapntd');
		
	}	
	
}
?>
