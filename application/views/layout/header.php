<!-- header -->
	<div class="header" id="top">
    	
		<div class="logo">
			<a href="<?=base_url(); ?>"><img src="<?=base_url('images/logo.png'); ?>" width="250px"/></a>
		</div>
      <div class="timkiem">
      <form class="form-inline" action="#" method="get">
		<input type="hidden" id="project-id">
         	<div class="form-group group-tu-khoa">
               <input class="form-control search" name="tu_khoa" placeholder="Nhập từ khóa ..." type="text" value="" autocomplete="off">
         	</div>
         	<div class="form-group group-nganh-nghe">
                 <select class="select2-selectbox form-control select2-hidden-accessible" name="nganh_nghe" tabindex="-1" aria-hidden="true">
                 		<option value="0">Chọn ngành nghề</option>
                        <option value="10">Bán hàng</option>
                        <option value="11">Tư vấn bảo hiểm</option>
                        <option value="12">Báo chí/Biên tập viên</option>
                        <option value="13">Bất động sản</option>
                        <option value="14">Biên dịch/Phiên dịch</option>
                        <option value="15">Bưu chính viễn thông</option>
                        <option value="16">Cơ khí/Kĩ thuật ứng dụng</option>
                        <option value="17">Công nghệ thông tin</option>
                        <option value="18">Dầu khí/Địa chất</option>
                        <option value="19">Dệt may</option>
                        <option value="20">Bảo vệ/Vệ sĩ/An ninh</option>
               	</select>
            <!--   <span class="select2 select2-container select2-container--open select2-placeholder-selected" dir="ltr" style="width: 160px;">
                	<span class="selection">
                    	<span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="true" tabindex="0" aria-labelledby="select2-nganh_nghe-qe-container">
                        	<span class="select2-selection__rendered" id="select2-nganh_nghe-qe-container" title="Chọn ngành nghề">Chọn ngành nghề</span>
                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                        </span>
                    </span>
                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                 </span>-->
            </div>
         <div class="form-group group-tinh-thanh">
         	<select class="select2-selectbox form-control select2-hidden-accessible" name="tinh_thanh" tabindex="-1" aria-hidden="true">
         		<option value="0">Chọn tỉnh thành</option>
         		<option value="1">Hồ Chí Minh</option>
         		<option value="2">Hà Nội</option>
         		<option value="3">An Giang</option>
         		<option value="4">Bạc Liêu</option>
         		<option value="5">Bà Rịa-Vũng Tàu</option>
         		<option value="6">Bắc Cạn</option>
         		<option value="7">Bắc Giang</option>
         		<option value="8">Bắc Ninh</option>
         		<option value="9">Bến Tre</option>
         		<option value="10">Bình Dương</option>
                
        	</select>
         	<!--<span class="select2 select2-container select2-container--default select2-placeholder-selected" dir="ltr" style="width: 160px;">
                <span class="selection">
                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-tinh_thanh-b0-container">
                        <span class="select2-selection__rendered" id="select2-tinh_thanh-b0-container" title="Chọn tỉnh thành">Chọn tỉnh thành</span>
                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                    </span>
                </span>
                <span class="dropdown-wrapper" aria-hidden="true"></span>
           </span>-->
    </div>
    
    <button type="submit" class=" btn btn-defaul" id="btn_search" >
               <span  class="glyphicon glyphicon-search"></span>
    </button>            
                 
     </form>
      </div>      
                        
  
        <!--<div class="input_s" >
               <input type="text" class="form-control" id="input-keyword" name="tu_khoa" placeholder="Nhập tên công việc, vị trí, kỹ năng...">
            </div>
            <div class="btn_s" >
                <button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span> Tìm Kiếm
                                            
                </button>
             </div>-->
             
			<?php
				if(isset($_SESSION['login']))
				{
			?>
			<div class="header-right">
				
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="<?= base_url('images/9.png');?>" alt="" class="img-circle" width="50px"><?php echo $_SESSION['login']; ?></span> 
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
								<li> <a href="<?=base_url('trangchu/dangxuat');?> "><i class="fa fa-sign-out"></i> Đăng Xuất</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars">aa</i></button>
				<!--toggle button end-->
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
        <div class="sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right dev-page-sidebar mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" id="cbp-spmenu-s1">
					<div class="scrollbar scrollbar1">
						<ul class="nav" id="side-menu">
							<li>
								<a href="index.html" class="active"><i class="fa fa-home nav_icon"></i>Dashboard</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-cogs nav_icon"></i>Components <span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									<li>
										<a href="progressbar.html">Progressbar</a>
									</li>
									<li>
										<a href="grid.html">Grid</a>
									</li>
								</ul>
								<!-- /nav-second-level -->
							</li>
							<li>
								<a href="#"><i class="fa fa-book nav_icon"></i>Elements <span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									<li>
										<a href="buttons.html">Buttons</a>
									</li>
									<li>
										<a href="typography.html">Typography</a>
									</li>
								</ul>
								<!-- /nav-second-level -->
							</li>
							<li>
								<a href="widgets.html"><i class="fa fa-th-large nav_icon"></i>Widgets</a>
							</li>
							
							<li>
								<a href="#"><i class="fa fa-check-square-o nav_icon"></i>Forms<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									<li>
										<a href="inputs.html">Inputs</a>
									</li>
									<li>
										<a href="validation.html">Form Validation</a>
									</li>
								</ul>
								<!-- //nav-second-level -->
							</li>
							<li>
								<a href="#"><i class="fa fa-envelope nav_icon"></i>Mailbox<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									<li>
										<a href="inbox.html">Inbox</a>
									</li>
									<li>
										<a href="compose.html">Compose email</a>
									</li>
								</ul>
								<!-- //nav-second-level -->
							</li>
							<li>
								<a href="maps.html"><i class="fa fa-location-arrow nav_icon"></i>Maps</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-file-text-o nav_icon"></i>Pages<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									<li>
										<a href="login.html">Login</a>
									</li>
									<li>
										<a href="signup.html">SignUp</a>
									</li>
									<li>
										<a href="blank-page.html">Blank Page</a>
									</li>
								</ul>
								<!-- //nav-second-level -->
							</li>
							<li>
								<a href="charts.html" class="chart-nav"><i class="fa fa-bar-chart nav_icon"></i>Charts</a>
							</li>
							<li>
								<a href="#" class="chart-nav"><i class="fa fa-list-ul nav_icon"></i>Extras<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									<li>
										<a href="tables.html">Tables</a>
									</li>
									<li>
										<a href="404.html">404 Page</a>
									</li>
								</ul>
								<!-- //nav-second-level -->
							</li>
						</ul>
					</div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
        <!-- Classie -->
		<script src="<?=base_url(); ?>js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
			<!--<div class="btn-group thongtin">
				<button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
			<?php echo $_SESSION['login']; ?> <span  class="glyphicon glyphicon-cog"></span><!--<span class="caret">-->
			</button>
				<!--<ul class="dropdown-menu" role="menu">
                	<li><a href="#"><span  class="glyphicon glyphicon-floppy-saved"></span> Việc làm đã lưu</a>
					</li>
					<li><a href="#"><span  class="glyphicon glyphicon-user"></span> Thông tin cá nhân</a>
					</li>
					<li><a href="<?=base_url('nguoitimviec/thongtinntv'); ?>"><span  class="glyphicon glyphicon-compressed"></span> Quản lý tài khoản</a>
					</li>
					<li class="divider"></li>
					<li><a href="<?=base_url('trangchu/dangxuat'); ?>"><span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a>
					</li>
				</ul>
			</div>-->
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
		<div class="head-nav">
			<div class="container">
				<span class="menu"><span class="glyphicon glyphicon-list"></span> Menu</span>
					<ul class="cl-effect-7">
						<li <?php if($active == 1) echo 'class="active"'; ?></l><a href="<?=base_url(); ?>"><span class="fa fa-home nav_icon"></span> Trang Chủ</a></li>
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
								<div class="col-sm-10">
									<input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
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