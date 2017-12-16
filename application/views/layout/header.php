<!-- header -->
<div class="header" id="top">
	<div class="container">
    	
		<div class="logo">
			<a href="<?=base_url(); ?>"><img src="<?=base_url('images/logo.png'); ?>" width="250px"/></a>
		</div>
		
      <div class="timkiem hidden-sm hidden-xs">
		  <form class="form-inline" action="<?=base_url('timkiem') ?>" method="get">
			<input type="hidden" id="project-id">
				<div class="form-group group-tu-khoa">
				   <input class="form-control search" name="tu_khoa" placeholder="Nhập từ khóa ..." type="text" value="<?php if(isset($tu_khoa)) echo($tu_khoa); ?>" autocomplete="off">
				</div>
				<div class="form-group group-nganh-nghe">
					<select class="select2-selectbox form-control select2-hidden-accessible" name="nganh_nghe" tabindex="-1" aria-hidden="true">
						<option value="0">Chọn ngành nghề</option>
					<?php
						foreach($nganhnghe as $nn)
						{
					?>
						<option value="<?=$nn['id_nn']; ?>" <?php if(isset($id_nn)) {if($id_nn == $nn['id_nn']) echo 'selected';} ?>><?=$nn['ten_nn'] ?></option>
					<?php
						}
					?>

					</select>

				</div>
			 <div class="form-group group-tinh-thanh">
				<select class="select2-selectbox form-control select2-hidden-accessible" name="tinh_thanh" tabindex="-1" aria-hidden="true">
					<option value="0">Chọn tỉnh thành</option>
				<?php
					foreach($diadiem as $dd)
					{
				?>
					<option value="<?=$dd['id_dd']?>" <?php if(isset($id_dd)) {if($id_dd == $dd['id_dd']) echo 'selected';} ?>><?=$dd['ten_dd']?></option>
				<?php
					}
				?>
				</select>
			</div>

			<button type="submit" class=" btn btn-defaul" id="btn_search" >
					   <span  class="glyphicon glyphicon-search"></span>
			</button>            
		 </form>
      </div>
       <button type="button" class="btn btn-default hidden-lg hidden-md" style="float: left; margin-left: 20px;" onclick="openNav()">Tìm kiếm <span class="glyphicon glyphicon-search"></span></button> 
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<form role="form" action="<?=base_url('timkiem') ?>" method="get">
				<div class="form-group">
					<label for="timkiem">Tìm việc</label>
					<input type="text" class="form-control" id="timkiem" placeholder="Nhập từ khóa ..." name="tu_khoa">
				</div>
				<div class="form-group">
					<label for="chonnganhnghe">Chọn ngành nghề</label>
					<select class="form-control" id="chonnganhnghe" name="nganh_nghe">
						<option value="0">Chọn ngành nghề</option>
						<?php
						foreach($nganhnghe as $nn)
						{
						?>
						<option value="<?=$nn['id_nn']; ?>" <?php if(isset($id_nn)) {if($id_nn == $nn['id_nn']) echo 'selected';} ?>><?=$nn['ten_nn'] ?></option>
						<?php
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="chontinh">Chọn tỉnh thành</label>
					<select class="form-control" id="chontinh" name="tinh_thanh">
						<option value="0">Chọn tỉnh thành</option>
						<?php
					foreach($diadiem as $dd)
					{
					?>
					<option value="<?=$dd['id_dd']?>" <?php if(isset($id_dd)) {if($id_dd == $dd['id_dd']) echo 'selected';} ?>><?=$dd['ten_dd']?></option>
					<?php
					}
					?>
					</select>
				</div>
				<button type="submit" class="btn btn-default">Tìm kiếm <span class="glyphicon glyphicon-search"></button>
			</form>
		</div>
			<?php
				if(isset($_SESSION['nguoitimviec']))
				{
			?>
			
			<div class="btn-group thongtindangnhap">
				<button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
					<?php echo $_SESSION['nguoitimviec']; ?> <span  class="glyphicon glyphicon-cog"></span><!--<span class="caret">-->
				</button>
				<ul class="dropdown-menu" role="menu">
                	<li><a href="<?=base_url('Quanlynguoitimviec/quanlytaikhoan'); ?>"><i  class="fa fa-user-o fa-lg fa-fw"></i> Quản lý tài khoản</a>
					</li>
					<li><a href="<?=base_url('Quanlynguoitimviec/quanlyhoso'); ?>"><i class="fa fa-file-text-o fa-lg fa-fw"></i> Quản lý hồ sơ</a>
					</li>
					<li><a href="<?=base_url('Quanlynguoitimviec/vieclamdaluu'); ?>"> <i  class="fa fa-star-o fa-lg fa-fw"></i> Việc làm đã lưu</a>
					</li>
                    <li><a href="<?=base_url('Quanlynguoitimviec/ntdxemhoso'); ?>"> <i class="fa fa-eye fa-lg fa-fw"></i>Nhà tuyển dụng xem hồ sơ</a>
					<li class="divider"></li>
					<li><a href="<?=base_url('trangchu/dangxuat'); ?>"><i class="fa fa-sign-out fa-lg fa-fw"></i> Đăng xuất</a>
					</li>
				</ul>
			</div>
			<?php
				}
				elseif(isset($_SESSION['nhatuyendung']))
				{
			?>
			<div class="btn-group thongtindangnhap">
				<button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
					<?php echo $_SESSION['nhatuyendung']; ?> <span  class="glyphicon glyphicon-cog"></span><!--<span class="caret">-->
				</button>
				<ul class="dropdown-menu" role="menu">
                	<li><a href="<?=base_url('quanlynhatuyendung/quanlytaikhoan'); ?>"><i  class="fa fa-user-o fa-lg fa-fw"></i> Quản lý tài khoản</a>
					</li>
					<li><a href="<?=base_url('quanlynhatuyendung/quanlyvieclam'); ?>"><i class="fa fa-file-text-o fa-lg fa-fw"></i> Quản lý việc làm</a>
					</li>
					<li><a href="<?=base_url('quanlynhatuyendung/ungviendaxem'); ?>"> <i  class="fa fa-star-o fa-lg fa-fw"></i> Ứng viên đã xem</a>
					</li>
                    <li><a href="<?=base_url('quanlynhatuyendung/dangtin'); ?>"> <i class="fa fa-eye fa-lg fa-fw"></i>Đăn tin tuyển dụng</a>
					<li class="divider"></li>
					<li><a href="<?=base_url('trangchu/dangxuat'); ?>"><i class="fa fa-sign-out fa-lg fa-fw"></i> Đăng xuất</a>
					</li>
				</ul>
			</div>
  			<?php
				}
				else {
			?>
            <div class="dangky" >
             	<a href="<?=base_url('Dangky'); ?>"><span class="fa fa-user-plus"></span> Đăng Ký </a>
             </div>
             <div class="dangnhap" >
             	<a href="#" data-toggle="modal" data-target="#dangnhap"><span class="glyphicon glyphicon-log-in"></span> Đăng Nhập </a>
             </div>
               
			<?php
				}
			?>
	</div>
		<div class="head-nav">
			<div class="container">
				<span class="menu"><span class="glyphicon glyphicon-list"></span> Menu</span>
					<ul class="cl-effect-7">
						<li <?php if($active == 1) echo 'class="active"'; ?>><a href="<?=base_url(); ?>"><span class="fa fa-home nav_icon"></span> Trang Chủ</a></li>
						<li <?php if($active == 2) echo 'class="active"'; ?>><a href="<?=base_url('nguoitimviec'); ?>"> Người Tìm Việc <span class="fa fa-id-card-o nav_icon "></span></a></li>
						<li <?php if($active == 3) echo 'class="active"'; ?>><a href="<?=base_url('nhatuyendung'); ?>">Nhà Tuyển Dụng <span class="fa fa-file-text-o nav_icon"></span></a></li>
						<li><a href="<?=base_url('thongtinchitiet');?>">Dịch Vụ Lao Động <span class="fa fa-handshake-o"></span></a></li>
						<li><a href="#">Tài Liệu Tham Khảo <span class="fa fa-book nav_icon"></span></a></li>
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
				<form class="form-horizontal" role="form" action="<?=base_url('trangchu/dangnhap'); ?>" enctype="multipart/form-data" method="post">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title" id="myModalLabel">Đăng Nhập</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10" title="Email">

									<input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
								</div>
							</div>
							<div class="form-group" title="Password">

								<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
									<input type="password" name="pass" class="form-control" id="inputPassword3" placeholder="Password">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<div class="radio">
										<label><input type="radio" name="tuychon" value="1" checked> Người tìm việc </label>
										<label><input type="radio" name="tuychon" value="2"> Nhà tuyển dụng </label>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
							<button type="submit" name="dangnhap" class="btn btn-primary">Đăng Nhập</button>
						</div>
					</div>
				</form>
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
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementById("mySidenav").style.paddingLeft = "30px";
    document.getElementById("mySidenav").style.paddingRight = "30px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
	document.getElementById("mySidenav").style.paddingLeft = "0";
    document.getElementById("mySidenav").style.paddingRight = "0";
}
</script>