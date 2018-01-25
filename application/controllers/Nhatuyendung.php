<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nhatuyendung extends CI_Controller {

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
		$this->load->model('Viec_lam');
		$this->load->model('nguoi_tim_viec');
		$this->load->model('ho_so_ntv');
		$this->load->model('nganh_nghe');
		$this->load->model('dia_diem');
		$this->load->model('muc_luong');
		$this->load->model('hinh_thuc_lam_viec');
		$this->load->model('kinh_nghiem');
		$this->load->model('trinh_do');
		$this->load->model('gioi_tinh');
	}
	public function index()
	{	
		if($this->uri->segment(2))
			$batdau = $this->uri->segment(2);
		else
			$batdau =0;
		$data['title'] = 'Trang nhà tuyển dụng';
		$data['content'] = 'layout/nhatuyendung';
		$data['active'] = 3;
		//cấu hình phân trang
		$config['per_page'] = 5;
		$config['uri_segment'] = 2;
		$config['num_links'] = 3;
		
		$data['vieclam'] = $this->Viec_lam->vieclam($config['per_page'],$batdau);
		
		//phân trang
		$config['total_rows'] = $this->Viec_lam->countAll();
        $config['base_url'] = base_url()."nhatuyendung";

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
		
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$data['mucluong'] = $this->muc_luong->mucluong();
		$data['hinhthuc_lv'] = $this->hinh_thuc_lam_viec->hinhthuclamviec();
		$data['kinhnghiem'] = $this->kinh_nghiem->kinhnghiem();
		$data['trinhdo'] = $this->trinh_do->trinhdo();
		$data['gioitinh'] = $this->gioi_tinh->danhsach();

		$this->load->view('trangchu', $data);

	}	
	public function thongtinvieclam($id)
	{
		$data['title'] = 'Thông tin Việc làm';
		$data['content'] = 'layout/thongtinvieclam';
		$data['active'] = 0;
		$data['thongtin'] = $thongtin = $this->Viec_lam->vieclamchitiet($id);
		$view = $thongtin['luot_xem'];
		$view++;
		$dat = array(
			'luot_xem' => $view
			);
		$this-> Viec_lam -> capnhatluotxem($dat,$id);
		$this->load->view('trangchu', $data);
		
	}
	
}
