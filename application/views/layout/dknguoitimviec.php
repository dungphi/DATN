<div class="main-1">
	<div class="container">	
			<div class="register">
		  	  <form action="<?=base_url('dangky/dknguoitimviec'); ?>" method="post" enctype="multipart/form-data" id="dangky"> 
				 <div class="register-top-grid">
					<h3>THÔNG TIN CÁ NHÂN</h3>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Họ <label>*</label></span>
						<input type="text" name="ho" placeholder="Họ" pattern="[A-Za-z]{2,}" value="<?php echo set_value('ho')?>"> 
						<?php echo form_error('ho', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Tên <label>*</label></span>
						<input type="text" name="ten" placeholder="Tên" value="<?php echo set_value('ten')?>"> 
						<?php echo form_error('ten', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						 <span>Địa chỉ Email <label>*</label></span>
						 <input type="email" name="email" placeholder="Email" value="<?php echo set_value('email')?>"> 
						 <?php echo form_error('email', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
					 </div>
                      <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Điện Thoại <label>*</label></span>
						<input type="text" name="dt" placeholder="Điện thoại" value="<?php echo set_value('dt')?>"> 
						<?php echo form_error('dt', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
					 </div>
					 
					 </div>
                     <div class="clearfix"> </div>
				     <div class="register-bottom-grid">
						    <h3>THÔNG TIN ĐĂNG NHẬP</h3>
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
					   <input type="submit" name="dangky" class="btn btn-primary btn-lg" value="Đăng Ký">
					   <div class="clearfix"> </div>
				  
				</div> 
                </form>
		   </div>
	</div>
	</div>
