<!-- header -->
	<div class="header">
		<div class="logo">
			<a href="index.html"><img src="images/logo.png" class="img-responsive" alt="" /></a>
		</div>
		<div class="head-nav">
			<div class="container">
				<span class="menu">Menu</span>
					<ul class="cl-effect-7">
						<li class="active"><a href="index.php">Trang Chủ</a></li>
						<li><a href="<?=base_url('nguoitimviec'); ?>">Người Tìm Việc</a></li>
						<li><a href="<?=base_url('nhatuyendung'); ?>">Nhà Tuyển Dụng</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="services.html">Services</a></li>
						<li><a href="pages.html">Pages</a></li>
						<li><a href="404.html">Blog</a></li>
						<li><a href="contact.html">Contact</a></li>
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