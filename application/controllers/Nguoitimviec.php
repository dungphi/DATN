<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nguoitimviec extends CI_Controller {

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
		
	}
	public function index()
	{	
		if($this->uri->segment(2))
			$batdau = $this->uri->segment(2);
		else
			$batdau =0;
		$data['title'] = 'Trang Tìm việc';
		$data['content'] = 'layout/nguoitimviec';
		$data['active'] = 2;
		$data['vieclam'] = $this->viec_lam->vieclam();
		$data['nguoitimviec'] = $this->nguoi_tim_viec->nguoitimviec();
		//cấu hình phân trang
		$config['per_page'] = 2;
		$config['uri_segment'] = 2;
		$config['num_links'] = 5;
		
		$data['hosotimviec'] = $this->ho_so_ntv->hosotimviec($config['per_page'],$batdau);
		//phân trang
		$config['total_rows'] = $this->ho_so_ntv->countAll();
        $config['base_url'] = base_url()."nguoitimviec";

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
		
		$this->load->view('trangchu', $data);
		
	}	
	public function thongtinhoso($id)
	{
		$data['title'] = 'Thông tin Tìm việc';
		$data['content'] = 'layout/thongtinhoso';
		$data['active'] = 0;
		$data['thongtin'] = $this->ho_so_ntv->hosochitiet($id);
		$this->load->view('trangchu', $data);
		
	}		
	
}
