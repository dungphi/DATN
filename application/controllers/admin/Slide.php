<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slide extends CI_Controller {

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
		$this->load->model('mslide');
	}

	public function index()
	{
		$data['title'] = 'Danh sách slide';
		$data['content'] = 'admin/slide/danhsach';
		$data['slide'] = $this->mslide->danhsach();
		$this->load->view('admin/index', $data);

	}
	public function them()
	{
		$data['title'] = 'Danh sách slide';
		$data['content'] = 'admin/slide/them';
		$data['slide'] = $this->mslide->danhsach();
		$this->load->view('admin/index', $data);
	}
	public function xoa_slide()
	{
		$id = $this->input->post('id');
		$kq = $this->ngoai_ngu->xoa_slide($id);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function chinhsua_slide()
	{
		$id = $this->input->post('id');
		$kq = $this->ngoai_ngu->chinhsua_slide($id);
		if(isset($kq))
			die(json_encode($kq));
		else
			die(json_encode(0));
	}
	public function luu_slide()
	{
		$id = $this->input->post('id');
		$slide = $this->input->post('slide');
		$kq = $this->ngoai_ngu->luu_slide($id, $slide);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	//két thúc ngoại ngữ
	
}
