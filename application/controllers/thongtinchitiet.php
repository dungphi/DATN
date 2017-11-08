<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thongtinchitiet extends CI_Controller {

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
		$this->load->model('ho_so_ntv');
	}
	public function index()
	{
		$data['title'] = 'Thông Tin Chi tiết';
		$data['content'] = 'layout/thongtinntv';
		$data['active'] = 0;
		$data['vieclam'] = $this->viec_lam->vieclam();
		$data['hosotimviec'] = $this->ho_so_ntv->hosotimviec();
		$this->load->view('trangchu', $data);
		
	}	// CHUA XONG
	public function chitiet($id)
	{
		$this->load->model('nguoi_tim_viec');
		$this->load->model('nha_tuyen_dung');
		if(isset($_POST['dangnhap']))
		{
			$tuychon = $this->input->post('id');
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
