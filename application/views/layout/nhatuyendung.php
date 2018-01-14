
<div class="baidang">
        <div class="container">
            
            <div lass= "row">
                <div class="col-xs-12 col-sm-12 col-md-9 ">
                    <div class="baidang_left">
                    	<h3>Thông tin tuyển dụng trên Toàn Quốc</h3>
                    <?php
                   	 foreach($vieclam as $tam)
                    	{
                    ?>
                        <div class="row">
                        	<div class="baituyendung">
                        		<div class="col-sm-2 col-md-2 hidden-xs hinhanh">
                            		<a href="<?=base_url('nhatuyendung/thongtinvieclam/'.$tam['id_vl']); ?>"><img src="<?=base_url($tam['avatar']); ?>" class="img-responsive" alt="" width="150" height="100"></a>
                        		</div>
                        		<div class="col-xs-11 col-sm-9 col-md-9 thongtin">
                                    <a href="<?=base_url('nhatuyendung/thongtinvieclam/'.$tam['id_vl']); ?>"><h4> <?=$tam['tieu_de']; ?></h4></a>
                                    <h5 > <?=$tam['ten_cty'];?></h5>
                               
                                    <div class="col-xs-6 col-sm-3 col-md-3"> 
                                        <p class="glyphicon glyphicon-map-marker"></p> <?= $tam['ten_dd'];?>
                                    </div>
                                    <div class="col-xs-6 col-sm-3 col-md-3"> 
                                        <p class="glyphicon glyphicon-usd"></p> <?= $tam['muc_luong'];?>
                                    </div>
                                    <div class="col-xs-6 col-sm-3 col-md-3"> 
                                        <p class="glyphicon glyphicon-list-alt"></p> <?= $tam['trinh_do'];?>
                                    </div>
                                    <div class="col-xs-6 col-sm-3 col-md-3"> 
                                        <p class="glyphicon glyphicon-time"> <?=date('d-m-Y', strtotime($tam['ngay_dk'])); ?></p>
                                    </div>
                            
                        		</div> 
                                <div class="col-xs-1 col-sm-1 col-md-1 thongtin luuvieclam"> 
                                	<p class="glyphicon glyphicon-star-empty"> </p>
                                </div>   	
                        	</div>
                    	</div>
					<?php
							}
							echo $this->pagination->create_links();
					?> 
               </div>
               <div class="clearfix"> </div>
               
               </div>
                <div class="col-xs-12 col-sm-12 col-md-3 ">
                <div class ="tkvl">
                	<div class="taovieclam">
                	<a href="<?=base_url('Quanlynhatuyendung/dangtin'); ?>">
                		<button type="submit" class="hidden-xs btn btn-danger btn-block btn_taovieclam"><i class="fa fa-edit fa-lg fa-fw"></i> Đăng tin tuyển dụng
                    	</button></a>
               		 </div>
        	<div class="tieude_tkvl">
        		<h3><center>Tìm kiếm việc làm</center></h3>
            </div>
            
        	
            <form class="group-tim-kiem" action="<?=base_url('timkiem') ?>" method="get">
           	<div class="timkiemvl">
                <div class="input-group group-tu-khoa">
                    <input class="form-control tu_khoa" name="tu_khoa" placeholder="Nhập từ khóa ..." type="text" value="" autocomplete="off">
                    <span class="input-group-btn">
                        <button class="btn btn-default btn_tk" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </span>
                 
                </div>
                <div class="group-nganh-nghe">
                    <select class="form-control nganh_nghe" name="nganh_nghe" tabindex="-1" aria-hidden="true" >
                        <option value="0">Chọn ngành nghề</option>
                    </select>
                </div>
                <div class="form-group group-tinh-thanh">
                    <select class="form-control tinh_thanh" name="tinh_thanh" tabindex="-1" aria-hidden="true">
                        <option value="0">Chọn nơi làm việc</option>
                     </select>
                 </div>
                 <div class="form-group group-muc-luong">
                    <select class="form-control muc_luong" name="tinh_thanh" tabindex="-1" aria-hidden="true">
                        <option value="0">Chọn mức lương</option>
                     </select>
                 </div>
                 <div class="form-group group-hinh-thuc-lam-viec">
                    <select class="form-control hinh_thuc_lam_viec" name="tinh_thanh" tabindex="-1" aria-hidden="true">
                        <option value="0">Chọn hình thức làm việc</option>
                     </select>
                 </div>
                 
                 <div class="form-group group-kinh-nghiem">
                    <select class="form-control kinh_nghiem" name="tinh_thanh" tabindex="-1" aria-hidden="true">
                        <option value="0">Chọn kinh nghiệm</option>
                     </select>
                 </div>
                 
                 <div class="form-group group-trinh-do">
                    <select class="form-control trinh_do" name="tinh_thanh" tabindex="-1" aria-hidden="true">
                        <option value="0">Chọn trình độ</option>
                     </select>
                 </div>
                 <div class="form-group group-gioi-tinh">
                    <select class="form-control gioi_tinh" name="tinh_thanh" tabindex="-1" aria-hidden="true">
                        <option value="0">Chọn giới tính</option>
                     </select>
                 </div>
                 </div>
                 <div class="form-group btn_tim_kiem">
                    <button type="button" class="btn btn-danger btn-lg btn-block btn_tim_kiem " name="btntk"><i class="fa fa-search" aria-hidden="true"> TÌM KIẾM</i></button>
                 </div>
              </form>  
       		  	 </div>
        </div>
            </div>
         </div>
      </div>
              
               

