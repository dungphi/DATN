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
		$this->load->model('viec_lam');
		$this->load->model('nguoi_tim_viec');
		$this->load->model('ho_so_ntv');
		
	}
	public function index()
	{
		$data['title'] = 'Trang nhà tuyển dụng';
		$data['content'] = 'layout/nhatuyendung';
		$data['active'] = 3;
		$data['vieclam'] = $this->viec_lam->vieclam();
		$data['nguoitimviec'] = $this->nguoi_tim_viec->nguoitimviec();
		$data['hosotimviec'] = $this->ho_so_ntv->hosotimviec();
		$this->load->view('trangchu', $data);

	}	
	
}
