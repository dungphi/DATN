<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ntv extends CI_Controller {

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
		$this->load->model('mntv');
		$this->load->model('madmin');
	}
	public function index()
	{
		
		$data['title'] = 'Danh sách người tìm việc';
		$data['content'] = 'admin/ntv/danhsach';
		$data['ntv'] = $this->mntv->danhsach();
		$this->load->view('admin/index', $data);

	}
	public function chinhsua($id)
	{
		$data['title'] = 'Chỉnh sửa thông tin nhà tuyển dụng';
		$data['content'] = 'admin/ntd/chinhsua';
		
		if(isset($_POST['luu']))
		{
			$ten_cty = $this->input->post('ten_cty');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$dia_chi = $this->input->post('dia_chi');
			$ms_thue = $this->input->post('ms_thue');
			$ten_lh = $this->input->post('ten_lh');
			$email_lh = $this->input->post('email_lh');
			$sdt_lh = $this->input->post('sdt_lh');
			if(isset($_POST['active']))
				$active = $this->input->post('active');
			else
				$active = 0;
			$dat = array(
				'ten_cty' => $ten_cty,
				'email' => $email,
				'phone' => $phone,
				'dia_chi' => $dia_chi,
				'ms_thue' => $ms_thue,
				'ten_lh' => $ten_lh,
				'email_lh' => $email_lh,
				'sdt_lh' => $sdt_lh,
				'active' => $active,
			);
			$kq = $this->mntv->capnhat($dat, $id);
			if(isset($kq))
				echo '<script>alert("Lưu thành công!")</script>';
			else
				echo '<script>alert("Lỗi!")</script>';
		}
		$data['ntd'] = $this->mntv->chinhsua($id);
		$this->load->view('admin/index', $data);

	}
	public function xoa()
	{
		$id = $this->input->post('id');
		$kq = $this->mntv->xoa($id);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function xoa_hoso()
	{
		$id = $this->input->post('id');
		$kq = $this->mntv->xoa_hoso($id);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function active()
	{
		$id = $this->input->post('id');
		$active = $this->input->post('active');
		$dat = array(
			'active' => $active
		);
		$kq = $this->mntv->capnhat($dat, $id);
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
		$kq = $this->mntv->capnhat_hoso($dat, $id);
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
		if($pass == $repass)
		{
			$dat = array(
			'pass' => md5($pass)
			);
			$kq = $this->mntv->capnhat($dat, $id);
			if(isset($kq))
				die(json_encode(1));
			else
				die(json_encode(0));

		}
		else
			die(json_encode(2));
	}
	public function hoso($id)
	{
		$data['title'] = 'Danh sách hồ sơ';
		$data['content'] = 'admin/ntv/hoso';
		$data['hoso'] = $this->mntv->hoso($id);
		$data['ntv'] = $this->mntv->ntv($id);
		$this->load->view('admin/index', $data);
	}
}
