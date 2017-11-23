<div class="col-sm-4 col-sm-offset-8 col-md-3 col-md-offset-9 sidebar">
	<div class="top-navigation">
		<div class="t-menu">Trung tâm quản lý</div>
		<div class="clearfix"> </div>
	</div>
		<div class="drop-navigation drop-navigation">
		  <ul class="nav nav-sidebar">
			<li <?php if($active == 5) echo('class="active"'); ?></l><a href="<?=base_url('#'); ?>" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Quản lý tài khoản</a></li>
			<li <?php if($active == 6) echo('class="active"'); ?>><a href="<?=base_url('lophoc/cap1'); ?>" class="user-icon"><span class="glyphicon glyphicon-home glyphicon-blackboard" aria-hidden="true"></span>Quản lý hồ sơ</a></li>
			<li <?php if($active == 7) echo('class="active"'); ?>><a href="<?=base_url('lophoc/cap2'); ?>" class="user-icon"><span class="glyphicon glyphicon-home glyphicon-blackboard" aria-hidden="true"></span>Việc làm đã lưu</a></li>
		
			<li <?php if($active == 8) echo('class="active"'); ?>><a href="<?=base_url('lophoc/cap3'); ?>" class="user-icon"><span class="glyphicon glyphicon-home glyphicon-blackboard" aria-hidden="true"></span>!!</a></li>
				
			<li <?php if($active == 9) echo('class="active"'); ?>><a href="<?=base_url('lophoc/cap4'); ?>" class="user-icon"><span class="glyphicon glyphicon-home glyphicon-blackboard" aria-hidden="true"></span>Nhà tuyển dụng xem hồ sơ</a></li>
			<li><a href="news.html" class="news-icon"><span class="glyphicon glyphicon-home glyphicon-blackboard" aria-hidden="true"></span>Liên Kết Làm Việc</a></li>
		  </ul>
		  <!-- script-for-menu -->
				<script>
					$( ".top-navigation" ).click(function() {
					$( ".drop-navigation" ).slideToggle( 300, function() {
					// Animation complete.
					});
					});
				</script>
		
		</div>
</div>