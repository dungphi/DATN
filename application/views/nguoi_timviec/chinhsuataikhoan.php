
<div class="container">

    <div class="row">
    	<div class="col-sm-8  col-md-9 chinhsuataikhoan ">
        	<div class="cstk">
				<h3>Chỉnh Sửa Tài Khoản</h3>
             </div> 
        <form action="">  		
            <div class="ttdangnhap">
            	<h3><i class="fa fa-lock fa-lg fa-fw"></i> Thông Tin Đăng Nhập<i class="red"> (Bắt buộc)</i></h3>
                <div class="row ttemail">
                	<div class=" col-sm-4 col-md-4">
                    	<label>Email<i class="red">*</i></label>
                    
                    </div>
                    <div class="col-sm-8 col-md-8">
                    	<input type="email" class="form-control" name="email" value="<?= $nguoitimviec['email']; ?> <?php echo set_value('email')?>"> 
						 <?php echo form_error('email', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                    
                </div>
                <div class="row ttsdt">
                	<div class="col-sm-4 col-md-4">
                    	<label>Số Điện Thoại<i class="red">*</i></label>
                    
                    </div>
                    <div class="col-sm-8 col-md-8">
                    	<input type="text" class="form-control" name="dt" placeholder="" value="<?= $nguoitimviec['phone']; ?> <?php echo set_value('dt')?>"> 
						<?php echo form_error('dt', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                    
                </div>
                <div class="row tt ttmatkhaucu">
                	<div class="col-sm-4 col-md-4">
                    	<label>Mật Khẩu hiện tại<i class="red">*</i></label>
                    
                    </div>
                    <div class="col-sm-8 col-md-8">
                   		<input type="password" class="form-control" name="pass" placeholder="" value="<?php echo set_value('pass')?>">
								<?php echo form_error('pass', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                </div>
                <div class="row tt ttmatkhaumoi">
                	<div class="  col-sm-4 col-md-4">
                    	<label>Mật Khẩu mới<i class="red">*</i></label>
                    
                    </div>
                    <div class="  col-sm-8 col-md-8">
                   		<input type="password" class="form-control" name="passnew" placeholder="" value="<?php echo set_value('pass')?>">
								<?php echo form_error('passnew', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                </div>
                    <div class="row tt ttnhaplaimatkhau">
                	<div class="  col-sm-4 col-md-4">
                    	<label>Nhập lại mật khẩu mới<i class="red">*</i></label>
                    
                   </div>
                   <div class="  col-sm-8 col-md-8">
                    	<input type="password" class="form-control" name="repass" placeholder="" value="<?php echo set_value('repass')?>">
								<?php echo form_error('repass', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                </div>
            </div>
     	
            <div class="ttcanhan">
            	<h3><i class="fa fa-user-circle-o fa-lg fa-fw"></i> Thông Tin Cá Nhân <i class="red">(Bắt buộc)</i></h3>
                <div class="row tt tthoten">
                	<div class="  col-sm-4 col-md-4">
                    	<label>Họ Tên<i class="red">*</i></label>
                    
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                    	<input type="text" class="form-control" name="ho" placeholder="" value="<?= $nguoitimviec['ho']; ?><?php echo set_value('ho')?>"> 
						<?php echo form_error('ho', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                    
                    <div class="col-xs-4 col-sm-4 col-md-4">
                    	<input type="text" class="form-control" name="ten" placeholder="" value="<?= $nguoitimviec['ten']; ?><?php echo set_value('ten')?>"> 
						<?php echo form_error('ten', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                </div>
                <div class="row tt ttngaysinh">
                	<div class="  col-sm-4 col-md-4">
                    	<label>Ngày Sinh<i class="red">*</i></label>
                    
                    </div>
                    <div class="  col-sm-8 col-md-8">
                    	<p> <?= $nguoitimviec['ngay_sinh']; ?></p>
                    </div>
                </div>
                <div class="row tt ttgioitinh">
                	<div class="  col-sm-4 col-md-4">
                    	<label>Giới Tính<i class="red">*</i></label>
                    
                    </div>
                    <div class="  col-sm-8 col-md-8">
  						<input type="radio" name="gioitinh" value="Nu"> Nữ
  						<input type="radio" name="gioitinh" value="Nam"> Nam
                    </div>
                </div>
                <div class="row tt tthonnhan">
                	<div class="  col-sm-4 col-md-4">
                    	<label>Hôn Nhân</label>
                    
                    </div>
                    <div class="  col-sm-8 col-md-8">
                    	<input type="radio" name="honnhan" value="lapgiadinh"> Đã lập gia đình
  						<input type="radio" name="honnhan" value="docthan"> Độc thân
                    </div>
                </div>
                <div class="row tt ttdiachi">
                	<div class="  col-sm-4 col-md-4">
                    	<label>Địa Chỉ<i class="red">*</i></label>
                    
                    </div>
                    <div class="  col-sm-8 col-md-8">
                    	<input type="text" class="form-control" name="dia_chi" placeholder="<?= $nguoitimviec['dia_chi']; ?>" value="<?php echo set_value('dia_chi')?>"> 
						<?php echo form_error('dia_chi', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                    
                </div>
                
            </div>
        
        	<div class="row" >
                    <div class="col-xs-5 col-xs-offset-2 col-sm-4 col-sm-offset-3 col-md-3 col-md-offset-3">
                        <button type="submit" class="btn btn-danger btn-block btn_red btn_luuchinhsua">
                            <i class="fa fa-save fa-lg fa-fw"></i> LƯU
                        </button>
                    </div>
          </form>
                    <div class="col-xs-3 col-sm-3 col-sm-offset-0 col-md-2 col-md-offset-0 huy">
                    	<a href="<?=base_url('Quanlynguoitimviec/quanlytaikhoan'); ?>">
                            <button type="submit" class="btn btn-danger btn-block btn_red btn_huy">
                                <i></i> HỦY
                            </button></a>
                    </div>
                 </div>
     </div>
 

    