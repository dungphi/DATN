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
	}
	public function index()
	{
		$data['title'] = 'Trang việc làm Online';
		$data['content'] = 'layout/content';
		$data['active'] = 1;
		$data['vieclam'] = $this->viec_lam->vieclam();
		$data['nguoitimviec'] = $this->nguoi_tim_viec->vieclam();
		$this->load->view('trangchu', $data);
		
	}	
	public function nguoitimviec()
	{
		$data['title'] = 'Tiêu đề trang';
		$data['content'] = 'layout/nguoitimviec';
		$this->load->view('trangchu', $data);
	}
	public function nhatuyendung()
	{
		$data['title'] = 'Tiêu đề trang';
		$this->load->view('nhatuyendung');
		$this->load->view('trangchu', $data);

	}
	
}
