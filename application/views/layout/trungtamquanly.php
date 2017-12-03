<div class="col-sm-4 col-sm-offset-8 col-md-3 col-md-offset-9 sidebar">
	<div class="top-navigation">
		<div class="t-menu"> 
        	<h3>Trung tâm quản lý</h3>
        </div>
		<div class="clearfix"> </div>
	</div>
		<div class="drop-navigation drop-navigation">
		  <ul class="nav nav-sidebar">
			<li <?php if($active == 5) echo('class="active"'); ?>>
            	<a href="<?=base_url('#'); ?>"> <i  class="fa fa-user-o fa-lg fa-fw"></i> Quản lý tài khoản</a>
            </li>
			<li <?php if($active == 6) echo('class="active"'); ?>>
            	<a href="<?=base_url('lophoc/cap1'); ?>"> <i class="fa fa-file-text-o fa-lg fa-fw"></i> Quản lý hồ sơ</a></li>
			<li <?php if($active == 7) echo('class="active"'); ?>>
            	<a href="<?=base_url('lophoc/cap2'); ?>"> <i  class="fa fa-star-o fa-lg fa-fw"></i> Việc làm đã lưu</a>
            </li>
				
			<li <?php if($active == 9) echo('class="active"'); ?>>
            	<a href="<?=base_url('lophoc/cap4'); ?>"> <i class="fa fa-eye fa-lg fa-fw"></i>Nhà tuyển dụng xem hồ sơ</a>
            </li>
            <li class="divider"></li>
			<li><a href="<?=base_url('trangchu/dangxuat'); ?>"><i class="fa fa-sign-out fa-lg fa-fw"></i> Đăng xuất</a>
			</li>
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
<div class="clearfix"> </div>
