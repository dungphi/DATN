<!-- header -->
	<div class="header" id="top">
    	
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" width="300px"/></a>
			</div>
            <div class="input_s" >
                <input type="text" class="form-control" id="input-keyword" name="tu_khoa" placeholder="Nhập tên công việc, vị trí, kỹ năng...">
            </div>
            <div class="btn_s" >
                <button type="submit" class="btn"> <img src="images/search.png" /> Tìm Kiếm
                                            
                </button>
             </div>
             
             <div class="dangtin" >
             	<a href="index.php"><img src="images/dangtin.png"/>ĐĂNG TIN MIỄN PHÍ </a>
             </div>
             <div class="dangnhap" >
             	<a href="#" data-toggle="modal" data-target="#dangnhap"><img src="images/login.png"/>Đăng Nhập </a>
             </div>
             <div class="dangky" >
             	<a href="index.php"><img src="images/add_user.png"/>Đăng Ký </a>
             </div>        
		<div class="head-nav">
			<div class="container">
				<span class="menu">Menu</span>
					<ul class="cl-effect-7">
						<li <?php if($active == 1) echo 'class="active"'; ?></l><a href="<?=base_url(); ?>"><img src="images/home.png"/> Trang Chủ</a></li>
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
		<!-- Modal đăng nhập-->
		<div class="modal fade" id="dangnhap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="myModalLabel">Đăng Nhập</h4>
                        
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<div class="checkbox">
										<label><input type="checkbox" checked> Nhớ Mật Khẩu </label>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
						<button type="button" class="btn btn-primary">Đăng Nhập</button>
					</div>
				</div>
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