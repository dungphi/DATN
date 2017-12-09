
<div class="container">

    <div class="row">
    	<div class="col-sm-8  col-md-9 quanlytaikhoan ">
        	<div class="qltk">
				<h3>Quản Lý Tài Khoản</h3>
             </div> 
        <form action="">  		
            <div class="ttdangnhap">
            	<h3><i class="fa fa-lock fa-lg fa-fw"></i> Thông Tin Đăng Nhập</h3>
                <div class="row ttemail">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Email</label>
                    
                    </div>
                    <div class=" col-xs-8 col-sm-8 col-md-8">
                    	<input type="email" name="email" placeholder="<?= $nguoitimviec['email']; ?>" value="<?php echo set_value('email')?>"> 
						 <?php echo form_error('email', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                    
                </div>
                <div class="row ttsdt">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Số Điện Thoại</label>
                    
                    </div>
                    <div class=" col-xs-8 col-sm-8 col-md-8">
                    	<input type="text" name="dt" placeholder="<?= $nguoitimviec['phone']; ?>" value="<?php echo set_value('dt')?>"> 
						<?php echo form_error('dt', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                    
                </div>
                <div class="row tt ttmatkhaucu">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Mật Khẩu hiện tại</label>
                    
                    </div>
                    <div class=" col-xs-8 col-sm-8 col-md-8">
                   		<input type="password" name="pass" placeholder="" value="<?php echo set_value('pass')?>">
								<?php echo form_error('pass', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                </div>
                <div class="row tt ttmatkhaumoi">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Mật Khẩu mới</label>
                    
                    </div>
                    <div class=" col-xs-8 col-sm-8 col-md-8">
                   		<input type="password" name="passnew" placeholder="" value="<?php echo set_value('pass')?>">
								<?php echo form_error('pass', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                </div>
                    <div class="row tt ttnhaplaimatkhau">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Mật Khẩu mới</label>
                    
                   </div>
                   <div class=" col-xs-8 col-sm-8 col-md-8">
                    	<input type="password" name="repass" placeholder="" value="<?php echo set_value('repass')?>">
								<?php echo form_error('repass', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                </div>
            </div>
     	
            <div class="ttcanhan">
            	<h3><i class="fa fa-user-circle-o fa-lg fa-fw"></i> Thông Tin Cá Nhân</h3>
                <div class="row tt tthoten">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Họ Tên</label>
                    
                    </div>
                    <div class=" col-xs-4 col-sm-4 col-md-4">
                    	<input type="text" name="ho" placeholder="<?= $nguoitimviec['ho']; ?>" value="<?php echo set_value('ho')?>"> 
						<?php echo form_error('ho', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                    
                    <div class=" col-xs-4 col-sm-4 col-md-4">
                    	<input type="text" name="ten" placeholder="<?= $nguoitimviec['ten']; ?>" value="<?php echo set_value('ten')?>"> 
						<?php echo form_error('ten', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                </div>
                <div class="row tt ttngaysinh">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Ngày Sinh</label>
                    
                    </div>
                    <div class=" col-xs-8 col-sm-8 col-md-8">
                    	<p> <?= $nguoitimviec['ngay_sinh']; ?></p>
                    </div>
                </div>
                <div class="row tt ttgioitinh">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Giới Tính</label>
                    
                    </div>
                    <div class=" col-xs-8 col-sm-8 col-md-8">
                    	<p> Thông tin</p>
                    </div>
                </div>
                <div class="row tt tthonnhan">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Hôn Nhân</label>
                    
                    </div>
                    <div class=" col-xs-8 col-sm-8 col-md-8">
                    	<p> Thông tin</p>
                    </div>
                </div>
                <div class="row tt ttdiachi">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Địa Chỉ</label>
                    
                    </div>
                    <div class=" col-xs-8 col-sm-8 col-md-8">
                    	<p> Thông tin</p>
                    </div>
                </div>
                <div class="row tt ttchinhsua">
                    <div class=" col-xs-3 col-sm-3 col-md-3">
                            <button class="btn btn-success btn-block btn_chinhsua" onclick="">
                                <span class="txt hidden-xs">Lưu Thay Đổi</span>
                            </button>
                    </div>
                </div>
                
            </div>
        </form>
     </div>
 

    