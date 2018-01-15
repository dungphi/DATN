        <div class="col-sm-4 col-sm-offset-0 col-md-3 col-md-offset-0">
        		<div class="taohoso">
                	<a href="<?=base_url('Quanlynhatuyendung/dangtin'); ?>">
                		<button type="submit" class="hidden-xs btn btn-danger btn-block btn_taohoso"><i class="fa fa-edit fa-lg fa-fw"></i> Đăng tin tuyển dụng
                    	</button></a>
                </div>
                <div class="trungtamquanly">
                    <div class="t-menu"> 
                        <h3>Trung tâm quản lý</h3>
                    </div>
                    <div class="clearfix"> </div>
                
                    <div class="quanly">
                      <ul class="nav nav-sidebar">
                        <li <?php if($active == 5) echo 'class="active"'; ?>>
                            <a href="<?=base_url('Quanlynhatuyendung/quanlytaikhoan'); ?>"> <i  class="fa fa-user-o fa-lg fa-fw"></i> Quản lý tài khoản</a>
                        </li>
                        <li <?php if($active == 6) echo('class="active"'); ?>>
                            <a href="<?=base_url('Quanlynhatuyendung/quanlyvieclam'); ?>"> <i class="fa fa-file-text-o fa-lg fa-fw"></i> Quản lý việc làm</a></li>
                        <li <?php if($active == 7) echo('class="active"'); ?>>
                            <a href="<?=base_url('Quanlynhatuyendung/ungvien/'); ?>"> <i  class="fa fa-star-o fa-lg fa-fw"></i> Ứng viên đã nộp hồ sơ</a>
                        </li>
                        <li class="btop"></li>
                        <li><a href="<?=base_url('trangchu/dangxuat'); ?>"><i class="fa fa-sign-out fa-lg fa-fw"></i> Đăng xuất</a>
                        </li>
                      </ul>
                </div>
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
	</div>
</div>