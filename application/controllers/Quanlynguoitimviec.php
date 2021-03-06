<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quanlynguoitimviec extends CI_Controller {

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
		if(!isset($_SESSION['nguoitimviec']))
		{
			redirect(base_url('dangnhap/NTV'));
		}
		$this->load->model('viec_lam');
		$this->load->model('nguoi_tim_viec');
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
		
		$data['title'] = 'Quản lý tài khoản Người tìm việc';
		$data['content'] = 'nguoi_timviec/quanlytaikhoan';
		$data['active'] = 5;
		$data['trungtamquanly'] ='nguoi_timviec/trungtamquanly';
		$user = $_SESSION['nguoitimviec'];
		$data['nguoitimviec'] = $this->nguoi_tim_viec->thongtinnguoidung($user);
		$data['timviec'] = $this->nguoi_tim_viec->taohoso($user);//ttql
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$this->load->view('trangchu', $data);
		
	}
	public function Chinhsuataikhoan($id)
	{
		
		$data['title'] = 'Chỉnh sửa tài khoản Người tìm việc';
		$data['content'] = 'nguoi_timviec/chinhsuataikhoan';
		$data['active'] = 5;
		$data['trungtamquanly'] ='nguoi_timviec/trungtamquanly';
		$user = $_SESSION['nguoitimviec'];
		$data['nguoitimviec'] = $this->nguoi_tim_viec->thongtinnguoidung($user);
		$data['timviec'] = $this->nguoi_tim_viec->taohoso($user);
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		if(isset($_POST['luu']))
		{
			//kiểm tra dữ liệu nhập
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('dt', 'Số điện thoại', 'required|min_length[10]|max_length[11]|integer', array('required' => 'Bạn chưa nhập %s.', 'min_length'=>"Tối thiểu 10 số", 'max_length'=>'Tối đa 11 số','integer'=>'Phải nhập số'));
			$this->form_validation->set_rules('ho', 'Họ', 'required', array('required' => 'Bạn chưa nhập %s.'));
			$this->form_validation->set_rules('ten', 'Tên', 'required', array('required' => 'Bạn chưa nhập %s.'));
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			//
			
			$email = $this->input->post('email');
			$sdt = $this->input->post('dt');
			$ho = $this->input->post('ho');
			$ten = $this->input->post('ten');
			$ngaysinh = $this->input->post('ngay_sinh');
			$gioitinh = $this->input->post('gioi_tinh');
			$honnhan = $this->input->post('hon_nhan');
			$diachi = $this->input->post('dia_chi');
			//upload hình
            $config['upload_path'] = 'images/hoso/';
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
			
			if($this->form_validation->run() == TRUE)
			{
				if($email == $user)
				{
					$dat = array(
						
						'email' => $email,
						'phone' => $sdt,
						'ho' => $ho,
						'ten' => $ten,
						'ngay_sinh' => $ngaysinh,
						'id_gioi_tinh' => $gioitinh,
						'hon_nhan' => $honnhan,
						'dia_chi' => $diachi,
						'avatar' => $avatar,
						);
						$kq = $this->nguoi_tim_viec->capnhat($dat, $id);
						if(isset($kq))
							$data['thongbao'] = '<script>alert("Chỉnh sửa thành công.");location.assign("'.base_url('Quanlynguoitimviec/quanlytaikhoan').'");</script>';
						
						else
						
							$data['thongbao'] = '<script>alert("Lỗi.")</script>';
					
				}
				else
				{
					if($this->nguoi_tim_viec->check_mail($email) == TRUE)
					{
						$dat = array(
						
						'email' => $email,
						'phone' => $sdt,
						'ho' => $ho,
						'ten' => $ten,
						'ngay_sinh' => $ngaysinh,
						'id_gioi_tinh' => $gioitinh,
						'hon_nhan' => $honnhan,
						'dia_chi' => $diachi,
						'avatar' => $avatar,
						);	
						$kq = $this->nguoi_tim_viec->capnhat($dat, $id);
						if(isset($kq))
							$data['thongbao'] = '<script>alert("Chỉnh sửa thành công.");location.assign("'.base_url('quanlynguoitimviec/quanlytaikhoan').'");</script>';
						else
							$data['thongbao'] = '<script>alert("Lỗi.")</script>';
					}
					else 
						$data['thongbao'] = '<script>alert("Email này đã được người khác sử dụng.");</script>';
				}
			}
		else 
			$data['thongbao'] = '<script>alert("Lỗi! Kiểm tra lại nội dung nhập.")</script>';
		}
		
		$this->load->view('trangchu', $data);
	}
	public function doi_pass()
	{
		$id = $this->input->post('id');
		$pass = $this->input->post('pass');
		$newpass = $this->input->post('newpass');
		$renewpass = $this->input->post('renewpass');
		if($this->nguoi_tim_viec->check_pass($id,$pass) == TRUE)
		{
			if($newpass == $renewpass)
			{
				$dat = array(
				'pass' => md5($newpass)
				);
				$kq = $this->nguoi_tim_viec->capnhat($dat,$id);
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
		$data['hoso'] = $this->nguoi_tim_viec->thongtinhoso($user);
		$data['timviec'] = $this->nguoi_tim_viec->taohoso($user);
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$this->load->view('trangchu', $data);
		
	}
	public function xoa_hoso()
	{
		$id = $this->input->post('id');
		$kq = $this->ho_so_ntv->xoa_hs($id);
		echo $kq;
	}
	public function taohoso($id)
	{
		$data['title'] = 'Tạo hồ sơ';
		$data['content'] = 'nguoi_timviec/taohoso';
		$data['active'] = 6;
		$data['trungtamquanly'] ='nguoi_timviec/trungtamquanly';
		$user = $_SESSION['nguoitimviec'];
		$data['timviec'] = $this->nguoi_tim_viec->taohoso($user);
		$data['nguoitimviec'] = $this->nguoi_tim_viec->thongtinhoso($user);
		$data['ngoaingu'] = $this->ngoai_ngu->ngoaingu();
		$data['capbac'] = $this->cap_bac->capbac();
		$data['hinhthuc'] = $this->hinh_thuc_lam_viec->hinhthuclamviec();
		$data['trinhdo'] = $this->Trinh_do->trinhdo();
		$data['kinhnghiem'] = $this->kinh_nghiem->kinhnghiem();
		$data['mucluong'] = $this->muc_luong->mucluong();
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		if(isset($_POST['luuhoso']))
		{	

				// Kiểm tra dữ liệu nhập
				$this->form_validation->set_rules('tieu_de', 'Tiêu đề', 'required|min_length[10]|max_length[70]', array('required' => 'Bạn chưa nhập %s.', 'min_length'=>"%s tối thiểu 10 kí tự", 'max_length'=>'%s tối đa 70 kí tự'));
				
				$tieude = $this->input->post('tieu_de');
				$trinhdo = $this->input->post('trinh_do');
				$kinhnghiem = $this->input->post('kinh_nghiem');
				$caphientai = $this->input->post('cap_hien_tai');
				$capmongmuon = $this->input->post('cap_mong_muon');
				$nganhnghe = $this->input->post('nganh_nghe');
				$diadiem = $this->input->post('dia_diem');
				$hinhthuclv = $this->input->post('hinh_thuc');
				$mucluong = $this->input->post('muc_luong');
				$muctieu = $this->input->post('muc_tieu');
				$ngaydk = $this->input->post('ngay_dk');
				
				if ($this->form_validation->run() == TRUE)
				{
					$dat = array(
						'id_ntimviec' => $id,
						'tieu_de' => $tieude,
						'id_trinh_do'=> $trinhdo,
						'id_kinh_nghiem'=>$kinhnghiem,
						'chuc_vu_ht'=>$caphientai,
						'chuc_vu_mm'=>$capmongmuon,
						'id_nn'=>$nganhnghe,
						'id_ddlv' => $diadiem,
						'hinh_thuc_lam_viec' => $hinhthuclv,
						'id_muc_luong' => $mucluong,
						'muc_tieu' => $muctieu,
						'ngay_dk' => $ngaydk,
						);
					$a = $this->nguoi_tim_viec->themhoso($dat);
					$data['thongbao'] ='<script>alert("Tạo Hồ Sơ thành công");location.assign("'.base_url('quanlynguoitimviec/xemhoso/'.$a).'");</script>';
					
				}
				else 
				{
					$data['thongbao'] ='<script>alert("Tạo hồ sơ Không thành công! Kiểm tra lại nội dung nhập.")</script>';
				}
		}		
		$this->load->view('trangchu', $data);
	}
	public function chinhsuahoso($id)
	{
		
		$data['title'] = 'Chỉnh sửa hồ sơ Người tìm việc';
		$data['content'] = 'nguoi_timviec/chinhsuahoso';
		$data['active'] = 6;
		$data['trungtamquanly'] ='nguoi_timviec/trungtamquanly';
		$user = $_SESSION['nguoitimviec'];
		$data['nguoitimviec'] = $this->nguoi_tim_viec->thongtinhoso($user);
		$data['timviec'] = $this->nguoi_tim_viec->taohoso($user);
		$data['hoso'] = $this->nguoi_tim_viec->xemhoso($id);
		$data['capbac'] = $this->cap_bac->capbac();
		$data['hinhthuc'] = $this->hinh_thuc_lam_viec->hinhthuclamviec();
		$data['trinhdo'] = $this->Trinh_do->trinhdo();
		$data['kinhnghiem'] = $this->kinh_nghiem->kinhnghiem();
		$data['mucluong'] = $this->muc_luong->mucluong();
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		if(isset($_POST['luuhoso']))
		{
			// Kiểm tra dữ liệu nhập
			$this->form_validation->set_rules('tieu_de', 'Tiêu đề', 'required|min_length[10]|max_length[70]', array('required' => 'Bạn chưa nhập %s.', 'min_length'=>"%s tối thiểu 10 kí tự", 'max_length'=>'%s tối đa 70 kí tự'));
			
			//
			$tieude = $this->input->post('tieu_de');
			$trinhdo = $this->input->post('trinh_do');
			$kinhnghiem = $this->input->post('kinh_nghiem');
			$caphientai = $this->input->post('cap_hien_tai');
			$capmongmuon = $this->input->post('cap_mong_muon');
			$nganhnghe = $this->input->post('nganh_nghe');
			$diadiem = $this->input->post('dia_diem');
			$hinhthuclv = $this->input->post('hinh_thuc');
			$mucluong = $this->input->post('muc_luong');
			$muctieu = $this->input->post('muc_tieu');
			$ngaydk = $this->input->post('ngay_dk');
			
			if ($this->form_validation->run() == TRUE)
			{
				$dat = array(
					
					'tieu_de' => $tieude,
					'id_trinh_do'=> $trinhdo,
					'id_kinh_nghiem'=>$kinhnghiem,
					'chuc_vu_ht'=>$caphientai,
					'chuc_vu_mm'=>$capmongmuon,
					'id_nn'=>$nganhnghe,
					'id_ddlv' => $diadiem,
					'hinh_thuc_lam_viec' => $hinhthuclv,
					'id_muc_luong' => $mucluong,
					'muc_tieu' => $muctieu,
					'ngay_dk' => $ngaydk,
					);
				$kq = $this->nguoi_tim_viec->capnhathoso($dat, $id);
				if(isset($kq))
					$data['thongbao'] = '<script>alert("Chỉnh sửa thành công.");location.assign("'.base_url('quanlynguoitimviec/xemhoso/'.$id).'");</script>';
				else
					$data['thongbao'] ='<script>alert("Lỗi.")</script>';
				
			}
			else 
			{
				$data['thongbao'] ='<script>alert("Lỗi Chỉnh sửa! Kiểm tra lại nội dung nhập")</script>';
			}
		}
		$this->load->view('trangchu', $data);
		
	}
		public function xemhoso($id)
	{
		
		$data['title'] = 'Xem hồ sơ';
		$data['content'] = 'nguoi_timviec/xemhoso';
		$data['active'] = 6;
		$data['trungtamquanly'] ='nguoi_timviec/trungtamquanly';
		$user = $_SESSION['nguoitimviec'];
		$data['nguoitimviec'] = $this->nguoi_tim_viec->thongtinhoso($user);
		$data['hoso'] = $this->nguoi_tim_viec->xemhoso($id);
		$data['timviec'] = $this->nguoi_tim_viec->taohoso($user);
		$data['capbac'] = $this->cap_bac->capbac();
		$data['hinhthuc'] = $this->hinh_thuc_lam_viec->hinhthuclamviec();
		$data['trinhdo'] = $this->Trinh_do->trinhdo();
		$data['kinhnghiem'] = $this->kinh_nghiem->kinhnghiem();
		$data['mucluong'] = $this->muc_luong->mucluong();
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$this->load->view('trangchu', $data);
		
	}
	
	public function vieclamdanop()
	{
		$data['title'] = 'Việc làm đã nộp';
		$data['content'] = 'nguoi_timviec/vieclamdanop';
		$data['active'] = 7;
		$data['trungtamquanly'] ='nguoi_timviec/trungtamquanly';
		$user = $_SESSION['nguoitimviec'];
		$data['timviec'] = $this->nguoi_tim_viec->taohoso($user);
		$ntv = $this->nguoi_tim_viec->thongtinnguoidung($user);
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$data['ds_vl'] = $this->nguoi_tim_viec->danhsach_vl($ntv['id_ntv']);
		$this->load->view('trangchu', $data);
		
	}
	public function ntdxemhoso()
	{
		$data['title'] = 'Nhà tuyển dụng xem hồ sơ';
		$data['content'] = 'nguoi_timviec/ntdxemhoso';
		$data['active'] = 8;
		$data['trungtamquanly'] ='nguoi_timviec/trungtamquanly';
		$data['timviec'] = $this->nguoi_tim_viec->taohoso($user);
		$data['nganhnghe'] = $this->nganh_nghe->nganhnghe();
		$data['diadiem'] = $this->dia_diem->diadiem();
		$this->load->view('trangchu', $data);
		
	}
	public function select()
	{
		$id_ntv = $this->input->post('id_ntv');
		$id_hs = $this->input->post('id_hs');
		$dat = array(
			'id_hs' => $id_hs,
		);
		$kq = $this->nguoi_tim_viec->capnhat($dat,$id_ntv);
		echo $kq;
	}
	
}