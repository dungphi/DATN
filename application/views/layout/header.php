<!-- header -->
	<div class="header">
    	
			<div class="logo">
				<a href="trangchu.php"><img src="images/logo.png" /></a>
			</div>
            <div class="input_s" >
                <input type="text" class="form-control" id="input-keyword" name="tu_khoa" placeholder="Nhập tên công việc, vị trí, kỹ năng...">
            </div>
            <div class="btn_s" >
                <button type="submit" class="btn"> <img src="images/search.png" /> Tìm Kiếm
                                            
                </button>
             </div>
             
             <div class="dangtin" >
             	<a href="trangchu.php"><img src="images/dangtin.png"/>ĐĂNG TIN MIỄN PHÍ </a>
             </div>
             <div class="dangnhap" >
             	<a href="trangchu.php"><img src="images/login.png"/>Đăng Nhập </a>
             </div>
             <div class="dangky" >
             	<a href="trangchu.php"><img src="images/add_user.png"/>Đăng ký </a>
             </div>
        
		<div class="head-nav">
			<div class="container">
				<span class="menu">Menu</span>
					<ul class="cl-effect-7">
						<li <?php if($active == 1) echo 'class="active"'; ?></l><a href="trangchu.php"><img src="images/home.png"/>Trang Chủ</a></li>
						<li <?php if($active == 2) echo 'class="active"'; ?>><a href="<?=base_url('nguoitimviec'); ?>">Người Tìm Việc</a></li>
						<li <?php if($active == 3) echo 'class="active"'; ?>><a href="<?=base_url('nhatuyendung'); ?>">Nhà Tuyển Dụng</a></li>
						<li><a href="about.html">Dịch Vụ Lao Động</a></li>
						<li><a href="services.html">Tài Liệu Tham Khảo</a></li>
						<!--
                        <li><a href="pages.html">Pages</a></li>
						<li><a href="404.html">Blog</a></li>
						<li><a href="contact.html">Contact</a></li>
                        -->
							<div class="clearfix"> </div>
					</ul>
			</div>
		</div>
		<!-- script-for-nav -->
			<script>
				$( "span.menu" ).click(function() {
				$( ".head-nav ul" ).slideToggle(300, function() {
				// Animation complete.
				});
				});
			</script>
		<!-- script-for-nav -->
	</div>
<!-- header -->