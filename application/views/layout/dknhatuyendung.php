<div class="main-1">
	<div class="container">	
			<div class="register">
		  	  <form action="<?=base_url('dangky/dknhatuyendung'); ?>" method="post" enctype="multipart/form-data" id="dangkyntd"> 
				<div class="register-top-grid">
					<h3>THÔNG TIN LIÊN HỆ</h3>
					<div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Họ Tên<label>*</label></span>
						<input type="text" name="hoten" placeholder="Họ tên người liên hệ" value="<?php echo set_value('hoten')?>"> 
						<?php echo form_error('hoten', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						 <span>Email liên hệ <label>*</label></span>
						 <input type="email" name="email_lh" placeholder="Email liên hệ" value="<?php echo set_value('email_lh')?>"> 
						 <?php echo form_error('email_lh', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
					 </div>
                      <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Điện Thoại <label>*</label></span>
						<input type="text" name="dtlh" placeholder="Điện thoại" value="<?php echo set_value('dtlh')?>"> 
						<?php echo form_error('dtlh', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?> 
					 </div>
					 
				</div>
                <div class="clearfix"> </div>
                <div class="register-mid-grid">
					<h3>THÔNG TIN CÔNG TY</h3>
					<div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Tên Công ty<label>*</label></span>
						<input type="text" name="tenct" placeholder="Tên Công ty" value="<?php echo set_value('tenct')?>"> 
						<?php echo form_error('tenct', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>  
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Điện thoại cố định <label>*</label></span>
						<input type="text" name="dtct" placeholder="Điện thoại" value="<?php echo set_value('dtct')?>">
						<?php echo form_error('dtct', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>  
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						 <span>Mã số thuế </span>
						 <input type="text" name="mst" placeholder="Mã số thuế" value="<?php echo set_value('mst')?>">
						<?php echo form_error('mst', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>   
					 </div>
                     <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Địa chỉ *</span>
						<input type="text" name="dcct" placeholder="Điện thoại công ty" value="<?php echo set_value('dcct')?>">
						<?php echo form_error('dcct', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>   
					 </div>
					
				</div>
                <div class="clearfix"> </div>
				<div class="register-bottom-grid">
					<h3>THÔNG TIN ĐĂNG NHẬP</h3>
                    <div class="wow fadeInLeft" data-wow-delay="0.4s">
						 		<span>Email Đăng nhập<label>*</label></span>
						 		<input type="email" name="email" placeholder="Nhập Email" value="<?php echo set_value('email')?>">
						<?php echo form_error('email', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>   
					</div>
					<div class="wow fadeInLeft" data-wow-delay="0.4s">
								<span>Mật Khẩu <label>*</label></span>
								<input type="password" name="pass" placeholder="Mật khẩu" value="<?php echo set_value('pass')?>">
								<?php echo form_error('pass', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
					</div>
					<div class="wow fadeInRight" data-wow-delay="0.4s">
								<span>Nhập lại Mật Khẩu <label>*</label></span>
								<input type="password" name="repass" placeholder="Nhập lại mật khẩu" value="<?php echo set_value('repass')?>">
								<?php echo form_error('repass', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
					</div>
				</div>
				
				<div class="clearfix"> </div>
				<div class="register-but">
				   	<i><center> (*) Thông tin bắt buộc nhập</center></i>
					<input type="submit" name="dangkyntd" class="btn btn-primary btn-lg" value="Đăng Ký">
					<div class="clearfix"> </div>
				  
				</div> 
             </form>
		   </div>
	</div>
</div>
