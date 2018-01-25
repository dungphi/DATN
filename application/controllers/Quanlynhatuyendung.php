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
		$this->load->model('gioi_tinh');
		$this->load->model('mungtuyen');
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
		$data['ds_vieclam'] = $this->nha_tuyen_dung->ds_vieclam($user);
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
	public function dangtin()
	{
		$data['title'] = 'Đăng tin tuyển dụng';
		$data['content'] = 'nhatuyendung/dangtin';
		$data['active'] = 6;
		$data['trungtamquanly'] ='nhatuyendung/trungtamquanly';
		$data['ngoaingu'] = $this->ngoai_ngu->ngoaingu();
		$data['capbac'] = $this->cap_bac->capbac();
		$data['hinhthuc'] = $this->hinh_thuc_lam_viec->hinhthuclamviec();
		$data['trinhdo'] = $this->Trinh_do->trinhdo();
		$data['kinhnghiem'] = $this->kinh_nghiem->kinhnghiem();
		$data['mucluong'] = $this->muc_luong->mucluong();
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$data['gioitinh'] = $this->gioi_tinh->danhsach();
		if(isset($_POST['dangtin']))
		{
			//kiểm tra dữ liệu nhập
			$this->form_validation->set_rules('tieu_de', 'Tiêu đề', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('id_nganh', 'ngành nghề', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('id_kinh_nghiem', 'kinh nghiệm', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('id_muc_luong', 'mức lương', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('id_ddlv', 'địa điểm', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('id_trinh_do', 'trình độ', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('chuc_vu', 'chức vụ', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('id_ngoai_ngu', 'ngoại ngữ', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('hinh_thuc_lv', 'hình thức làm việc', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('yc_gioi_tinh', 'giới tính', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('ngay_hh', 'hạn nộp', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('mo_ta', 'mô tả', 'required|min_length[10]', array('required' => 'Bạn chưa nhập %s.', 'min_length' => 'Tối thiểu 10 ký tự'));
			
			
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			if($this->form_validation->run() == TRUE && isset($_SESSION['nhatuyendung']))
			{
				$user = $_SESSION['nhatuyendung'];
				$nhatuyendung = $this->nha_tuyen_dung->get($user);
				$id_ntd = $nhatuyendung['id_ntd'];
				$tieu_de = $this->input->post('tieu_de');
				$id_nganh = $this->input->post('id_nganh');
				$id_kinh_nghiem = $this->input->post('id_kinh_nghiem');
				$id_muc_luong = $this->input->post('id_muc_luong');
				$id_ddlv = $this->input->post('id_ddlv');
				$id_trinh_do = $this->input->post('id_trinh_do');
				$chuc_vu = $this->input->post('chuc_vu');
				$id_ngoai_ngu = $this->input->post('id_ngoai_ngu');
				$hinh_thuc_lv = $this->input->post('hinh_thuc_lv');
				$yc_gioi_tinh = $this->input->post('yc_gioi_tinh');
				$ngay_hh = $this->input->post('ngay_hh');
				$so_luong = $this->input->post('so_luong');
				$mo_ta = $this->input->post('mo_ta');
				
				$dat = array(
					'id_ntd' => $id_ntd,
					'tieu_de' => $tieu_de,
					'id_nganh' => $id_nganh,
					'id_kinh_nghiem' => $id_kinh_nghiem,
					'id_muc_luong' => $id_muc_luong,
					'id_ddlv' => $id_ddlv,
					'id_trinh_do' => $id_trinh_do,
					'chuc_vu' => $chuc_vu,
					'id_ngoai_ngu' => $id_ngoai_ngu,
					'hinh_thuc_lv' => $hinh_thuc_lv,
					'yc_gioi_tinh' => $yc_gioi_tinh,
					'ngay_hh' => $ngay_hh,
					'so_luong' => $so_luong,
					'mo_ta' => $mo_ta,
					'ngay_dk' => date('Y-m-d'),
					'active_vl' => 0,

				);
				$kq = $this->viec_lam->them_vl($dat);
				if($kq == 1) 
					echo '<script>alert("Đăng tin thành công.");location.reload("'.base_url('quanlynhatuyendung/quanlyvieclam').'");</script>';
				else 
					echo '<script>alert("Lỗi cơ sở dữ liệu.");location.reload("'.base_url('quanlynhatuyendung/quanlyvieclam').'");</script>';
						
			}
			else
				$this->session->set_flashdata('flash_message', 'Lỗi đăng tin');

		}
		$this->load->view('trangchu', $data);
	}
	public function chinhsuavieclam($id)
	{
		$data['title'] = 'Chỉnh sửa việc làm';
		$data['content'] = 'nhatuyendung/chinhsua';
		$data['active'] = 6;
		$data['trungtamquanly'] ='nhatuyendung/trungtamquanly';
		$data['ngoaingu'] = $this->ngoai_ngu->ngoaingu();
		$data['capbac'] = $this->cap_bac->capbac();
		$data['hinhthuc'] = $this->hinh_thuc_lam_viec->hinhthuclamviec();
		$data['trinhdo'] = $this->Trinh_do->trinhdo();
		$data['kinhnghiem'] = $this->kinh_nghiem->kinhnghiem();
		$data['mucluong'] = $this->muc_luong->mucluong();
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$data['gioitinh'] = $this->gioi_tinh->danhsach();
		$data['vieclam'] = $this->viec_lam->get($id);
		if(isset($_POST['luu']))
		{
			//kiểm tra dữ liệu nhập
			$this->form_validation->set_rules('tieu_de', 'Tiêu đề', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('id_nganh', 'ngành nghề', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('id_kinh_nghiem', 'kinh nghiệm', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('id_muc_luong', 'mức lương', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('id_ddlv', 'địa điểm', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('id_trinh_do', 'trình độ', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('chuc_vu', 'chức vụ', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('id_ngoai_ngu', 'ngoại ngữ', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('hinh_thuc_lv', 'hình thức làm việc', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('yc_gioi_tinh', 'giới tính', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('ngay_hh', 'hạn nộp', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('mo_ta', 'mô tả', 'required|min_length[10]', array('required' => 'Bạn chưa nhập %s.', 'min_length' => 'Tối thiểu 10 ký tự'));
			
			
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			if($this->form_validation->run() == TRUE && isset($_SESSION['nhatuyendung']))
			{
				$user = $_SESSION['nhatuyendung'];
				$nhatuyendung = $this->nha_tuyen_dung->get($user);
				$id_ntd = $nhatuyendung['id_ntd'];
				$tieu_de = $this->input->post('tieu_de');
				$id_nganh = $this->input->post('id_nganh');
				$id_kinh_nghiem = $this->input->post('id_kinh_nghiem');
				$id_muc_luong = $this->input->post('id_muc_luong');
				$id_ddlv = $this->input->post('id_ddlv');
				$id_trinh_do = $this->input->post('id_trinh_do');
				$chuc_vu = $this->input->post('chuc_vu');
				$id_ngoai_ngu = $this->input->post('id_ngoai_ngu');
				$hinh_thuc_lv = $this->input->post('hinh_thuc_lv');
				$yc_gioi_tinh = $this->input->post('yc_gioi_tinh');
				$ngay_hh = $this->input->post('ngay_hh');
				$so_luong = $this->input->post('so_luong');
				$mo_ta = $this->input->post('mo_ta');
				
				//upload hình
				$config['upload_path'] = 'images/vieclam/';
				$config['allowed_types'] = 'gif|jpg|png';
				$this->load->library("upload", $config);
				if($this->upload->do_upload("hinh_anh"))
				{
					$img = $this->upload->data();
					$hinh_anh = $config['upload_path'].$img['file_name'];
				}
				else 
				{
					$hinh_anh = $this->input->post('img_upload');
					if($hinh_anh == '')
						$hinh_anh = 'images/no-img.png';
				}
				
				$dat = array(
					'id_ntd' => $id_ntd,
					'tieu_de' => $tieu_de,
					'id_nganh' => $id_nganh,
					'id_kinh_nghiem' => $id_kinh_nghiem,
					'id_muc_luong' => $id_muc_luong,
					'id_ddlv' => $id_ddlv,
					'id_trinh_do' => $id_trinh_do,
					'chuc_vu' => $chuc_vu,
					'id_ngoai_ngu' => $id_ngoai_ngu,
					'hinh_thuc_lv' => $hinh_thuc_lv,
					'yc_gioi_tinh' => $yc_gioi_tinh,
					'ngay_hh' => $ngay_hh,
					'so_luong' => $so_luong,
					'mo_ta' => $mo_ta,
					'ngay_dk' => date('Y-m-d'),
					'active_vl' => 0,

				);
				$kq = $this->viec_lam->capnhat_vl($dat, $id);
				if($kq == 1) 
					echo '<script>alert("Chỉnh sửa thành công.");location.reload("'.base_url('quanlynhatuyendung/quanlyvieclam').'");</script>';
				else 
					echo '<script>alert("Lỗi cơ sở dữ liệu.");location.reload("'.base_url('quanlynhatuyendung/quanlyvieclam').'");</script>';
						
			}
			else
				$this->session->set_flashdata('flash_message', 'Lỗi đăng tin');

		}
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
	public function xoa_vl()
	{
		$id = $this->input->post('id');
		$kq = $this->viec_lam->xoa_vl($id);
		echo $kq;
	}
	public function xoa_ungvien()
	{
		$id = $this->input->post('id');
		$kq = $this->mungtuyen->xoa($id);
		echo $kq;
	}
	public function ungvien()
	{
		$data['title'] = 'Danh sách ứng viên';
		$data['active'] = 7;
		$data['trungtamquanly'] ='nhatuyendung/trungtamquanly';
		$data['content'] = 'nhatuyendung/ungvien';
		$user = $_SESSION['nhatuyendung'];
		$ds_vieclam = $this->nha_tuyen_dung->ds_vieclam($user);
		$i = 0;
		foreach($ds_vieclam as $ds)
		{
			$ds_ungvien = $this->nha_tuyen_dung->ds_ungvien($ds['id_vl']);
			foreach($ds_ungvien as $ds_uv)
			{
				$data['ungvien'][$i]['tieu_de'] = $ds_uv['tieu_de'];
				$data['ungvien'][$i]['ten_uv'] = $ds_uv['ho'].' '.$ds_uv['ten'];
				$data['ungvien'][$i]['tg_nop'] = date('d-m-Y H:i:s', strtotime($ds_uv['ngay_ut']));
				$data['ungvien'][$i]['id_hoso'] = $ds_uv['id_hs'];
				$data['ungvien'][$i]['id_ut'] = $ds_uv['id_ut'];
				$i++;
			}
		}
		$this->load->view('trangchu', $data);
	}
}
?>
