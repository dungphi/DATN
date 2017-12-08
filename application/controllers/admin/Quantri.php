<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quantri extends CI_Controller {

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
		$this->load->model('madmin');
	}
	public function index()
	{
		
		$data['title'] = 'Danh sách quản trị viên';
		$data['content'] = 'admin/admin/danhsach';
		$data['admin'] = $this->madmin->danhsach();
		$this->load->view('admin/index', $data);

	}
	public function chinhsua($id)
	{
		$data['title'] = 'Chỉnh sửa quản trị viên';
		$data['content'] = 'admin/admin/chinhsua';
		if(isset($_POST['luu']))
		{
			$ten = $this->input->post('ten');
			$user = $this->input->post('user');
			if(isset($_POST['active']))
				$active = $this->input->post('active');
			else
				$active = 0;
			if($ten != '' && $user != '')
			{
				$dat = array(
					'ten' => $ten,
					'user' => $user,
				);
				$kq = $this->madmin->capnhat($dat, $id);
				if(isset($kq))
					echo '<script>alert("Lưu thành công!")</script>';
				else
					echo '<script>alert("Lỗi!")</script>';
			}
		}
		$data['admin'] = $this->madmin->chinhsua($id);
		$this->load->view('admin/index', $data);

	}
	public function them_ad()
	{
		$ten = $this->input->post('ten');
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$repass = $this->input->post('repass');
		if($this->madmin->check_user($user) == TRUE)
		{
			if($pass == $repass)
			{
				$dat = array(
					'ten' => $ten,
					'user' => $user,
					'pass' => md5($pass),
				);
				$kq = $this->madmin->them_ad($dat);
				if(isset($kq))
					die(json_encode(1));
				else
					die(json_encode(0));
			}
			else
				die(json_encode(2));
		}
		else
			die(json_encode(3));
	}
	public function xoa_ad()
	{
		$id = $this->input->post('id');
		$kq = $this->madmin->xoa_ad($id);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function luu_pass()
	{
		$id = $this->input->post('id');
		$mk = $this->input->post('mk');
		$pass = $this->input->post('pass');
		$repass = $this->input->post('repass');
		if($this->madmin->check_pass($mk,$id) == TRUE)
		{
			if($pass == $repass)
			{
				$dat = array(
				'pass' => md5($pass)
				);
				$kq = $this->madmin->capnhat($dat, $id);
				if(isset($kq))
					die(json_encode(1));
				else
					die(json_encode(0));
				
			}
			else
				die(json_encode(3));
		}
		else
			die(json_encode(2));
	}
	public function edit()
	{
		$data['title'] = 'Chỉnh sửa quản trị viên';
		$data['content'] = 'admin/admin/chinhsua';
		$user = $_SESSION['admin'];
		$data['admin'] = $this->madmin->edit($user);
		$this->load->view('admin/index', $data);
	}
}
?>
