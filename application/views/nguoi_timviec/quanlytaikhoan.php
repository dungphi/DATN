
<div class="container">

    <div class="row">
    	<div class="col-sm-8  col-md-9 quanlytaikhoan ">
        	<div class="qltk">
				<h3>Quản Lý Tài Khoản</h3>
             </div>   		
            <div class="ttdangnhap">
            	<h3><i class="fa fa-lock fa-lg fa-fw"></i> Thông Tin Đăng Nhập</h3>
                <div class="row ttemail">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Email</label>
                    
                    </div>
                    <div class=" col-xs-6 col-sm-6 col-md-6">
                    	<p> <?php echo $_SESSION['nguoitimviec']; ?></p>
                    </div>
                    <div class=" col-xs-2 col-sm-2 col-md-2">
                    	<button class="btn btn-link btn_edit" onclick="">
                        	<i class="fa fa-pencil fa-lg fa-fw"></i></br>
                            <span class="txt hidden-xs">Chỉnh sửa</span>
                        </button>
                    </div>
                </div>
                <div class="row ttsdt">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Số Điện Thoại</label>
                    
                    </div>
                    <div class=" col-xs-6 col-sm-6 col-md-6">
                    	<p> thông tin SDT</p>
                    </div>
                    <div class=" col-xs-2 col-sm-2 col-md-2">
                    	<button class="btn btn-link btn_edit" onclick="">
                        	<i class="fa fa-pencil fa-lg fa-fw"></i></br>
                            <span class="txt hidden-xs">Chỉnh sửa</span>
                        </button>
                    </div>
                </div>
                <div class="row ttmatkhau">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Mật Khẩu</label>
                    
                    </div>
                    <div class=" col-xs-6 col-sm-6 col-md-6">
                    	<p> ***********</p>
                    </div>
                    <div class=" col-xs-2 col-sm-2 col-md-2">
                    	<button class="btn btn-link btn_edit" onclick="">
                        	<i class="fa fa-pencil fa-lg fa-fw"></i></br>
                            <span class="txt hidden-xs">Chỉnh sửa</span>
                        </button>
                    </div>
                </div>
            </div>
     	<form action="">
            <div class="ttcanhan">
            	<h3><i class="fa fa-user-circle-o fa-lg fa-fw"></i> Thông Tin Cá Nhân</h3>
                <div class="row tt tthoten">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Họ Tên</label>
                    
                    </div>
                    <div class=" col-xs-8 col-sm-8 col-md-8">
                    	<p> Thông tin</p>
                    </div>
                </div>
                <div class="row tt ttngaysinh">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Ngày Sinh</label>
                    
                    </div>
                    <div class=" col-xs-8 col-sm-8 col-md-8">
                    	<p> Thông tin</p>
                    </div>
                </div>
                <div class="row tt ttgioitinh">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Giới Tính</label>
                    
                    </div>
                    <div class=" col-xs-8 col-sm-8 col-md-8">
                    	<p> Thông tin</p>
                    </div>
                </div>
                <div class="row tt tthonnhan">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Hôn Nhân</label>
                    
                    </div>
                    <div class=" col-xs-8 col-sm-8 col-md-8">
                    	<p> Thông tin</p>
                    </div>
                </div>
                <div class="row tt ttdiachi">
                	<div class=" col-xs-4 col-sm-4 col-md-4">
                    	<label>Địa Chỉ</label>
                    
                    </div>
                    <div class=" col-xs-8 col-sm-8 col-md-8">
                    	<p> Thông tin</p>
                    </div>
                </div>
                <div class="row tt ttchinhsua">
                    <div class=" col-xs-3 col-sm-3 col-md-3">
                            <button class="btn btn-success btn-block btn_chinhsua" onclick="">
                                <i class="fa fa-pencil fa-lg fa-fw"></i> 
                                <span class="txt hidden-xs">Chỉnh sửa</span>
                            </button>
                    </div>
                </div>
                
            </div>
        </form>
        </div>
 

    