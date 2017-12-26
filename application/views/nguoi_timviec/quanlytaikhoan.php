
<div class="container">

    <div class="row">
    	<div class="col-sm-8  col-md-9 quanlytaikhoan ">
        	<div class="qltk">
				<h3>Quản Lý Tài Khoản</h3>
             </div>   		
            <div class="ttdangnhap">
            	<h3><i class="fa fa-lock fa-lg fa-fw"></i> Thông Tin Đăng Nhập</h3>
                <div class="row ttemail">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Email</label>
                    
                    </div>
                    <div class=" col-xs-6 col-sm-6 col-md-6">
                    	<p> <?php echo $_SESSION['nguoitimviec']; ?></p>
                    </div>
                    <div class=" col-xs-2 col-sm-2 col-md-2">
                    	<a href="<?=base_url('Quanlynguoitimviec/chinhsuataikhoan/'.$nguoitimviec['id_ntv']); ?>">
                            <button class="btn btn-link btn_edit" onclick="">
                                <i class="fa fa-pencil fa-lg fa-fw"></i>
                            </button></a>
                    </div>
                </div>
                <div class="row ttsdt">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Số Điện Thoại</label>
                    
                    </div>
                    <div class=" col-xs-6 col-sm-6 col-md-6">
                    	<p> <?= $nguoitimviec['phone']; ?></p>
                    </div>
                </div>
                <div class="row ttmatkhau">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Mật Khẩu</label>
                    
                    </div>
                    <div class=" col-xs-6 col-sm-6 col-md-6">
                    	<p> ***********</p>
                    </div>
                </div>
            </div>
     	<form action="<?=base_url('Quanlynguoitimviec/chinhsuataikhoan/'.$nguoitimviec['id_ntv']); ?>">
            <div class="ttcanhan">
            	<h3><i class="fa fa-user-circle-o fa-lg fa-fw"></i> Thông Tin Cá Nhân</h3>
                <div class="row tt tthoten">
                	<div class=" col-xs-5 col-sm-4 col-md-4">
                    	<label>Họ Tên</label>
                    
                    </div>
                    <div class=" col-xs-7 col-sm-8 col-md-6">
                    	<p> <?= $nguoitimviec['ho']; ?> <?= $nguoitimviec['ten']; ?></p>
                    </div>
                	<div class="hidden-xs hidden-sm col-md-2">
                    	<a href="<?=base_url('Quanlynguoitimviec/chinhsuataikhoan/'.$nguoitimviec['id_ntv']); ?>">
                            <button class="btn btn-link btn_edit" onclick="">
                                <i class="fa fa-pencil fa-lg fa-fw"></i>
                            </button></a>
                    </div>
                </div>
                <div class="row tt ttngaysinh">
                	<div class=" col-xs-5 col-sm-4 col-md-4">
                    	<label>Ngày Sinh</label>
                    
                    </div>
                    <div class=" col-xs-7 col-sm-8 col-md-8">
                    	<p> <?= date('d-m-Y', strtotime($nguoitimviec['ngay_sinh'])); ?></p>
                    </div>
                </div>
                <div class="row tt ttgioitinh">
                	<div class=" col-xs-5 col-sm-4 col-md-4">
                    	<label>Giới Tính</label>
                    
                    </div>
                    <div class=" col-xs-7 col-sm-8 col-md-8">
                    	<p> <?= $nguoitimviec['gioi_tinh']; ?></p>
                    </div>
                </div>
                <div class="row tt tthonnhan">
                	<div class=" col-xs-5 col-sm-4 col-md-4">
                    	<label>Hôn Nhân</label>
                    
                    </div>
                    <div class=" col-xs-7 col-sm-8 col-md-8">
                    	<p><?= $nguoitimviec['hon_nhan']; ?></p>
                    </div>
                </div>
                <div class="row tt ttdiachi">
                	<div class=" col-xs-5 col-sm-4 col-md-4">
                    	<label>Địa Chỉ</label>
                    
                    </div>
                    <div class=" col-xs-7 col-sm-8 col-md-8">
                    	<p><?= $nguoitimviec['dia_chi']; ?></p>
                    </div>
                </div>
                <div class="row tt ttchinhsua">
                    <div class=" col-xs-7 col-sm-5 col-md-3">
                            
                     	<button class="btn btn-success btn-block btn_chinhsua" >
                        	<i class="fa fa-pencil fa-lg fa-fw"></i> 
                         	<b class="txt ">Chỉnh sửa</b>
                        </button>
                    </div>
                </div>
                
            </div>
        </form>
        </div>
 

    