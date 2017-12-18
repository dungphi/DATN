
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
                    	<p> <?=$nhatuyendung['email']?></p>
                    </div>
                    <div class=" col-xs-2 col-sm-2 col-md-2">
                    	<a href="<?=base_url('quanlynhatuyendung/chinhsuataikhoan/'.$nhatuyendung['id_ntd']); ?>">
                            <button class="btn btn-link btn_edit" onclick="">
                                <i class="fa fa-pencil fa-lg fa-fw"></i></br>
                                <span class="txt hidden-xs">Chỉnh sửa</span>
                            </button></a>
                    </div>
                </div>
                <div class="row ttsdt">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Số Điện Thoại</label>
                    
                    </div>
                    <div class=" col-xs-6 col-sm-6 col-md-6">
                    	<p> <?= $nhatuyendung['phone']; ?></p>
                    </div>
                    <div class=" col-xs-2 col-sm-2 col-md-2">
                    	<a href="<?=base_url('quanlynhatuyendung/chinhsuataikhoan/'.$nhatuyendung['id_ntd']); ?>">
                            <button class="btn btn-link btn_edit" onclick="">
                                <i class="fa fa-pencil fa-lg fa-fw"></i></br>
                                <span class="txt hidden-xs">Chỉnh sửa</span>
                            </button></a>
                    </div>
                </div>
                <div class="row ttmatkhau">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Mật Khẩu</label>
                    
                    </div>
                    <div class=" col-xs-6 col-sm-6 col-md-6">
                    	<p> ***********</p>
                    </div>
                    <div class=" col-xs-2 col-sm-2 col-md-2">
                    	<a href="<?=base_url('quanlynhatuyendung/chinhsuataikhoan/'.$nhatuyendung['id_ntd']); ?>">
                            <button class="btn btn-link btn_edit" onclick="">
                                <i class="fa fa-pencil fa-lg fa-fw"></i></br>
                                <span class="txt hidden-xs">Chỉnh sửa</span>
                            </button></a>
                    </div>
                </div>
            </div>
     	<form action="<?=base_url('quanlynhatuyendung/chinhsuataikhoan/'.$nhatuyendung['id_ntd']); ?>">
            <div class="ttcanhan">
            	<h3><i class="fa fa-user-circle-o fa-lg fa-fw"></i> Thông tin doanh nghiệp</h3>
				<div class="row">
					<div class="col-sm-4">
						<label>Ảnh đại diện</label>
					</div>
					<div class="col-sm-8">
						<img src="<?=base_url($nhatuyendung['avatar'])?>" width="300px" >
					</div>
				</div>
                <div class="row tt tthoten">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Tên công ty</label>
                    
                    </div>
                    <div class=" col-xs-8 col-sm-8 col-md-8">
                    	<p> <?= $nhatuyendung['ten_cty']; ?></p>
                    </div>
                </div>
                <div class="row tt ttngaysinh">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Địa chỉ</label>
                    
                    </div>
                    <div class=" col-xs-8 col-sm-8 col-md-8">
                    	<p> <?=$nhatuyendung['dia_chi']; ?></p>
                    </div>
                </div>
                <div class="row tt ttgioitinh">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Mã số thuế</label>
                    
                    </div>
                    <div class=" col-xs-8 col-sm-8 col-md-8">
                    	<p> <?= $nhatuyendung['ms_thue']; ?></p>
                    </div>
                </div>
                <div class="row tt tthonnhan">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Người liên hệ</label>
                    
                    </div>
                    <div class=" col-xs-8 col-sm-8 col-md-8">
                    	<p><?= $nhatuyendung['ten_lh']; ?></p>
                    </div>
                </div>
                <div class="row tt ttdiachi">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Email liên hệ</label>
                    
                    </div>
                    <div class=" col-xs-8 col-sm-8 col-md-8">
                    	<p><?= $nhatuyendung['email_lh']; ?></p>
                    </div>
                </div>
				<div class="row tt ttdiachi">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Số điện thoại liên hệ</label>
                    
                    </div>
                    <div class=" col-xs-8 col-sm-8 col-md-8">
                    	<p><?= $nhatuyendung['sdt_lh']; ?></p>
                    </div>
                </div>
                <div class="row tt ttchinhsua">
                    <div class=" col-xs-6 col-sm-4 col-md-3">
                            
                     	<a href="<?=base_url('quanlynhatuyendung/chinhsuataikhoan/'.$nhatuyendung['id_ntd']) ?>" class="btn btn-success btn-block btn_chinhsua" >
                        	<i class="fa fa-pencil fa-lg fa-fw"></i> 
                         	Chỉnh sửa
                        </a>
                    </div>
                </div>
                
            </div>
        </form>
        </div>
 

    