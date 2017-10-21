<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dangky extends CI_Controller {

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
		$this->load->helper('url');
		
	}
	public function index()
	{
		$data['title'] = 'Đăng Ký';
		$data['content'] = 'layout/dangky';
		$data['active']=0;
		$this->load->view('trangchu', $data);
		
	}	
	
	public function dknguoitimviec()
	{
		$data['title'] = 'Đăng Ký Người Tìm Việc';
		$data['content'] = 'layout/dknguoitimviec';
		$data['active']=0;
		$this->load->model('nguoi_tim_viec');
		if($this->input->post('dangky'))
		{
			$ho = $this->input->post('ho');
			$ten = $this->input->post('ten');
			$email = $this->input->post('email');
			$dt = $this->input->post('dt');
			$pass = $this->input->post('pass');
			$repass = $this->input->post('repass');
			$check_mail = $this->nguoi_tim_viec->check_mail($email);
			if($check_mail == TRUE)
			{
				if($pass == $repass)
				{
					$db = array(
						'ho' => $ho,
						'ten' => $ten,
						'phone' => $dt,
						'pass' => $pass,
						
					);
					$this->nguoi_tim_viec->dangky($db);
					echo '<script>alert("Đăng ký thành công")</script>';
				}
				else
				{
					echo '<script>alert("Mật khẩu không dúng")</script>';
				}
			}
			else
			{
				echo '<script>alert("Email đã tồn tại")</script>';
			}
		}
		$this->load->view('trangchu', $data);
		
	}
	public function dkntv()
	{
		$data['title'] = 'Đăng Ký Người Tìm Việc';
		$data['content'] = 'layout/dknguoitimviec';
		$data['active']=0;
		$this->load->view('trangchu', $data);
		
	}
	public function dknhatuyendung()
	{
		$data['title'] = 'Đăng Ký Nhà Tuyển Dụng';
		$data['content'] = 'layout/dknhatuyendung';
		$data['active']=0;
		$this->load->view('trangchu', $data);
	}
}
?>
