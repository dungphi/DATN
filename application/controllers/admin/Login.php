<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->model('madmin');
	}
	public function index()
	{
		$data['title'] = 'Đăng nhập trang quản trị';
		if(isset($_POST['dangnhap']))
		{
			$user = $this->input->post('user');
			$pass = md5($this->input->post('pass'));
			$check = $this->madmin->dangnhap($user,$pass);
			if($check == TRUE)
			{
				$this->session->set_userdata("admin", $user);
				//echo $_SESSION['login'];
				redirect(base_url('admin'));
			}
			else
			{
				echo '<script>alert("Tài khoản không dúng!")</script>';
			}
		}
		$this->load->view('admin/login', $data);
		
	}	
	
	public function dangxuat()
	{
		//đăng xuất
		$this->session->unset_userdata("admin");
		redirect(base_url('admin/login'));
		//view
		
	}
}
?>
