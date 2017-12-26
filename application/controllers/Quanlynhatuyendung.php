<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quanlynhatuyendung extends CI_Controller {

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
		if(!isset($_SESSION['nhatuyendung']))
		{
			redirect(base_url('dangnhap/NTD'));
		}
		$this->load->model('viec_lam');
		$this->load->model('nguoi_tim_viec');
		$this->load->model('nha_tuyen_dung');
		$this->load->model('ho_so_ntv');
		$this->load->model('nganh_nghe');
		$this->load->model('dia_diem');
		$this->load->model('muc_luong');
		$this->load->model('kinh_nghiem');
		$this->load->model('Trinh_do');
		$this->load->model('hinh_thuc_lam_viec');
		$this->load->model('cap_bac');
		$this->load->model('ngoai_ngu');
	}
	public function quanlytaikhoan()
	{
		
		$data['title'] = 'Quản lý tài khoản';
		$data['content'] = 'nhatuyendung/quanlytaikhoan';
		$data['active'] = 5;
		$data['trungtamquanly'] ='nhatuyendung/trungtamquanly';
		$user = $_SESSION['nhatuyendung'];
		$data['nhatuyendung'] = $this->nha_tuyen_dung->get($user);
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$this->load->view('trangchu', $data);
		
	}
	public function chinhsuataikhoan($id)
	{
		$user = $_SESSION['nhatuyendung'];
		if(isset($_POST['luu']))
		{
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$ten_cty = $this->input->post('ten_cty');
			$dia_chi = $this->input->post('dia_chi');
			$ms_thue = $this->input->post('ms_thue');
			$ten_lh = $this->input->post('ten_lh');
			$email_lh = $this->input->post('email_lh');
			$sdt_lh = $this->input->post('sdt_lh');
			//upload hình
            $config['upload_path'] = 'images/vieclam/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library("upload", $config);
            if($this->upload->do_upload("avatar"))
			{
				$img = $this->upload->data();
				$avatar = $config['upload_path'].$img['file_name'];
			}
			else 

			{
				$avatar = $this->input->post('img_upload');
				if($avatar == '')
					$avatar = 'images/no-img.png';
			}
			if($email == $user)
			{
				$dat = array(
					'email' => $email,
					'phone' => $phone,
					'ten_cty' => $ten_cty,
					'dia_chi' => $dia_chi,
					'ms_thue' => $ms_thue,
					'ten_lh' => $ten_lh,
					'email_lh' => $email_lh,
					'sdt_lh' => $sdt_lh,
					'avatar' => $avatar,
				);
				$kq = $this->nha_tuyen_dung->capnhat($id, $dat);
				if(isset($kq))
					$data['thongbao'] = '<script>alert("Chỉnh sửa thành công.");location.assign("'.base_url('quanlynhatuyendung/quanlytaikhoan').'");</script>';
				else
					$data['thongbao'] = '<script>alert("Lỗi.")</script>';
			}
			else
			{
				if($this->nha_tuyen_dung->check_mail($email) == TRUE)
				{
					$dat = array(
						'email' => $email,
						'phone' => $phone,
						'ten_cty' => $ten_cty,
						'dia_chi' => $dia_chi,
						'ms_thue' => $ms_thue,
						'ten_lh' => $ten_lh,
						'email_lh' => $email_lh,
						'sdt_lh' => $sdt_lh,
						'avatar' => $avatar,
					);
					$kq = $this->nha_tuyen_dung->capnhat($id, $dat);
					if(isset($kq))
					{
						$data['thongbao'] = '<script>alert("Chỉnh sửa thành công.");location.reload("'.base_url('quanlynhatuyendung/quanlytaikhoan').'");</script>';
						$this->session->set_userdata("nhatuyendung", $email);
					}
					else
						$data['thongbao'] = '<script>alert("Lỗi.")</script>';
				}
				else
					$data['thongbao'] = '<script>alert("Email này đã được người khác sử dụng.")</script>';
			}
		}
		$data['title'] = 'Chỉnh sửa tài khoản';
		$data['content'] = 'nhatuyendung/chinhsuataikhoan';
		$data['active'] = 5;
		$data['trungtamquanly'] ='nhatuyendung/trungtamquanly';
		$data['nhatuyendung'] = $this->nha_tuyen_dung->get($user);
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$this->load->view('trangchu', $data);
		
	}
	public function quanlyvieclam()
	{
		$user = $_SESSION['nhatuyendung'];
		$data['title'] = 'Quản lý việc làm';
		$data['content'] = 'nhatuyendung/quanlyvieclam';
		$data['active'] = 6;
		$data['trungtamquanly'] ='nhatuyendung/trungtamquanly';
		$this->load->view('trangchu', $data);
	}
	public function doi_pass()
	{
		$id = $this->input->post('id');
		$pass = $this->input->post('pass');
		$newpass = $this->input->post('newpass');
		$renewpass = $this->input->post('renewpass');
		if($this->nha_tuyen_dung->check_pass($id,$pass) == TRUE)
		{
			if($newpass == $renewpass)
			{
				$dat = array(
				'pass' => md5($newpass)
				);
				$kq = $this->nha_tuyen_dung->capnhat($id, $dat);
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
	public function quanlyhoso()
	{
		$data['title'] = 'Quản lý hồ sơ';
		$data['content'] = 'nguoi_timviec/quanlyhoso';
		$data['active'] = 6;
		$data['trungtamquanly'] ='nguoi_timviec/trungtamquanly';
		$user = $_SESSION['nguoitimviec'];
		$data['nguoitimviec'] = $this->nguoi_tim_viec->chinhsuahoso($user);
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$this->load->view('trangchu', $data);
		
	}
	public function taohoso()
	{
		$data['title'] = 'Tạo hồ sơ';
		$data['content'] = 'nguoi_timviec/taohoso';
		$data['active'] = 6;
		$data['trungtamquanly'] ='nguoi_timviec/trungtamquanly';
		$data['ngoaingu'] = $this->ngoai_ngu->ngoaingu();
		$data['capbac'] = $this->cap_bac->capbac();
		$data['hinhthuc'] = $this->hinh_thuc_lam_viec->hinhthuclamviec();
		$data['trinhdo'] = $this->Trinh_do->trinhdo();
		$data['kinhnghiem'] = $this->kinh_nghiem->kinhnghiem();
		$data['mucluong'] = $this->muc_luong->mucluong();
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$this->load->view('trangchu', $data);
	}
	public function chinhsuahoso()
	{
		
		$data['title'] = 'Chỉnh sửa hồ sơ';
		$data['content'] = 'nguoi_timviec/chinhsuahoso';
		$data['active'] = 6;
		$data['trungtamquanly'] ='nguoi_timviec/trungtamquanly';
		$user = $_SESSION['nguoitimviec'];
		$data['nguoitimviec'] = $this->nguoi_tim_viec->chinhsuahoso($user);
		$data['capbac'] = $this->cap_bac->capbac();
		$data['hinhthuc'] = $this->hinh_thuc_lam_viec->hinhthuclamviec();
		$data['trinhdo'] = $this->Trinh_do->trinhdo();
		$data['kinhnghiem'] = $this->kinh_nghiem->kinhnghiem();
		$data['mucluong'] = $this->muc_luong->mucluong();
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$this->load->view('trangchu', $data);
		
	}
		public function xemhoso()
	{
		
		$data['title'] = 'Xem hồ sơ';
		$data['content'] = 'nguoi_timviec/xemhoso';
		$data['active'] = 6;
		$data['trungtamquanly'] ='nguoi_timviec/trungtamquanly';
		$user = $_SESSION['nguoitimviec'];
		$data['nguoitimviec'] = $this->nguoi_tim_viec->chinhsuahoso($user);
		$data['capbac'] = $this->cap_bac->capbac();
		$data['hinhthuc'] = $this->hinh_thuc_lam_viec->hinhthuclamviec();
		$data['trinhdo'] = $this->Trinh_do->trinhdo();
		$data['kinhnghiem'] = $this->kinh_nghiem->kinhnghiem();
		$data['mucluong'] = $this->muc_luong->mucluong();
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$this->load->view('trangchu', $data);
		
	}
	public function vieclamdaluu()
	{
		$data['title'] = 'Việc làm đã lưu';
		$data['content'] = 'nguoi_timviec/vieclamdaluu';
		$data['active'] = 7;
		$data['trungtamquanly'] ='nguoi_timviec/trungtamquanly';
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$this->load->view('trangchu', $data);
		
	}
	public function ntdxemhoso()
	{
		$data['title'] = 'Nhà tuyển dụng xem hồ sơ';
		$data['content'] = 'nguoi_timviec/ntdxemhoso';
		$data['active'] = 8;
		$data['trungtamquanly'] ='nguoi_timviec/trungtamquanly';
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$this->load->view('trangchu', $data);
		
	}
}
?>
