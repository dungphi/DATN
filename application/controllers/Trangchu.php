<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trangchu extends CI_Controller {

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
	{	if($this->uri->segment(1))
			$batdau = $this->uri->segment(1);
		else
			$batdau =0;
		$data['title'] = 'Trang việc làm Online';
		$data['content'] = 'layout/content';
		$data['active'] = 1;
		//cấu hình phân trang
		$config['per_page'] = 2;
		$config['uri_segment'] = 1;
		$config['num_links'] = 5;
		$config['reuse_query_string'] = TRUE;
	 	$config['suffix'] = '#vieclam';
			
		$data['vieclam'] = $this->viec_lam->vieclam($config['per_page'],$batdau);
		
		//phân trang
		$config['total_rows'] = $this->viec_lam->countAll();
        $config['base_url'] = base_url();

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul><!--pagination-->';

		$config['first_link'] = 'Trang đầu';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Trang cuối';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = 'Sau';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = 'Trước';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';

		// $config['display_pages'] = FALSE;
		// 
		$config['anchor_class'] = 'follow_link';  
        $this->load->library('pagination', $config);
		$data['nguoitimviec'] = $this->nguoi_tim_viec->nguoitimviec();
		$data['hosonoibat'] = $this->ho_so_ntv->hosonoibat(4);
		$data['hosotimviec'] = $this->ho_so_ntv->hosotimviec(5,2);
		$data['vieclamnoibat'] = $this->viec_lam->vieclamnoibat();
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$this->load->view('trangchu', $data);
		
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
