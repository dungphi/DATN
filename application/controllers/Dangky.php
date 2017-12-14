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
			//kiểm tra dữ liệu nhập
			$this->form_validation->set_rules('ho', 'Họ', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('ten', 'Tên', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('dt', 'Số điện thoại', 'required|min_length[10]|max_length[11]|integer', array('required' => 'Bạn chưa nhập %s.', 'min_length'=>"Tối thiểu 10 số", 'max_length'=>'Tối đa 11 số', 'integer'=>'Phải là số'));
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('pass', 'Mật khẩu', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('repass', 'Nhập lại mật khẩu', 'required', array('required' => 'Bạn chưa nhập %s.'));
			
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			if($this->form_validation->run() == TRUE)
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
							'email' => $email,
							'phone' => $dt,
							'pass' => md5($pass),

						);
						$this->nguoi_tim_viec->dangky($db);
						echo '<script>alert("Đăng ký thành công")</script>';
					}
					else
					{
						echo '<script>alert("Mật khẩu không đúng")</script>';
					}
				}
				else
				{
					echo '<script>alert("Email đã tồn tại")</script>';
				}
			}
			else
				$this->session->set_flashdata('flash_message', 'Lỗi đăng ký');

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
		$this->load->model('nha_tuyen_dung');
		if($this->input->post('dangkyntd'))
		{
			//kiểm tra dữ liệu nhập
			$this->form_validation->set_rules('hoten', 'Họ Tên', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('email_lh', 'email', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('dtlh', 'Số điện thoại', 'required|min_length[10]|max_length[11]|integer', array('required' => 'Bạn chưa nhập %s.', 'min_length'=>"Tối thiểu 10 số", 'max_length'=>'Tối đa 11 số', 'integer'=>'Phải là số'));
			$this->form_validation->set_rules('tenct', 'Tên Công Ty', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('dtct', 'Số điện thoại', 'required|min_length[10]|max_length[11]|integer', array('required' => 'Bạn chưa nhập %s.', 'min_length'=>"Tối thiểu 10 số", 'max_length'=>'Tối đa 11 số', 'integer'=>'Phải là số'));
			
			$this->form_validation->set_rules('dcct', 'Địa chỉ', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('pass', 'Mật khẩu', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('repass', 'Nhập lại mật khẩu', 'required', array('required' => 'Bạn chưa nhập %s.'));
			
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			if($this->form_validation->run() == TRUE)
			{
				$hoten = $this->input->post('hoten');
				$email_lh = $this->input->post('email_lh');
				$dtlh = $this->input->post('dtlh');
				$tenct = $this->input->post('tenct');
				$dtct= $this->input->post('dtct');
				$mst = $this->input->post('mst');
				$diachi= $this->input->post('dcct');
				$email = $this->input->post('email');
				$pass = $this->input->post('pass');
				$repass = $this->input->post('repass');
				$check_mail = $this->nha_tuyen_dung->check_mail($email);
				if($check_mail == TRUE)
				{
					if($pass == $repass)
					{
						$db = array(
							'ten_lh' => $hoten,
							'email_lh' => $email_lh,
							'sdt_lh' => $dtlh,
							'ten_cty' => $tenct,
							'ms_thue' => $mst,
							'dia_chi' => $diachi,
							'email' => $email,
							'phone' => $dtct,
							'pass' => md5($pass),

						);
						$this->nha_tuyen_dung->dangkyntd($db);
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
			else
				$this->session->set_flashdata('flash_message', 'Lỗi đăng ký');

		}
		
	 	$this->load->view('trangchu', $data);
	}
	
}
?>
