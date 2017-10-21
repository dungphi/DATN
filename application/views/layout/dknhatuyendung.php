<div class="main-1">
	<div class="container">	
			<div class="register">
		  	  <form action="<?=base_url('dangky/dknguoituyendung'); ?>" method="post" enctype="multipart/form-data" id="dangky"> 
				 <div class="register-top-grid">
					<h3>THÔNG TIN CHỦ TÀI KHOẢN</h3>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Họ <label>*</label></span>
						<input type="text" name="ho" placeholder="Họ" pattern="[A-Za-z]{10}"> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Tên <label>*</label></span>
						<input type="text" name="ten" placeholder="Tên"> 
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						 <span>Địa chỉ Email liên hệ <label>*</label></span>
						 <input type="email" name="email" placeholder="Email liên hệ"> 
					 </div>
                      <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Điện Thoại <label>*</label></span>
						<input type="text" name="dt" placeholder="Điện thoại"> 
					 </div>
					 
					 </div>
                     <div class="clearfix"> </div>
                  <div class="register-mid-grid">
					<h3>THÔNG TIN CÔNG TY</h3>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Tên Công ty<label>*</label></span>
						<input type="text" name="ho" placeholder="Tên Công ty" pattern="[A-Za-z]{10}"> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Điện thoại cố định <label>*</label></span>
						<input type="text" name="ten" placeholder="Điện thoại cố định"> 
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						 <span>Mã số thuế </span>
						 <input type="text" name="mst" placeholder="Mã số thuế"> 
					 </div>
                      <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Địa chỉ <label>*</label></span>
						<input type="text" name="dt" placeholder="Địa chỉ"> 
					 </div>
					
					 </div>
                     <div class="clearfix"> </div>
				     <div class="register-bottom-grid">
						    <h3>THÔNG TIN ĐĂNG NHẬP</h3>
							 <div class="wow fadeInLeft" data-wow-delay="0.4s">
								<span>Mật Khẩu <label>*</label></span>
								<input type="password" name="pass" placeholder="Mật khẩu">
							 </div>
							 <div class="wow fadeInRight" data-wow-delay="0.4s">
								<span>Nhập lại Mật Khẩu <label>*</label></span>
								<input type="password" name="repass" placeholder="Nhập lại mật khẩu">
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
