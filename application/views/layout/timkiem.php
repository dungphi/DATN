<div class="container">
	<div class="row">
    
        <div class ="col-xs-12 col-sm-8 col-md-8">
        	<div class="baidang-timkiem">
         <?php
                   	 foreach($timkiem as $tam)
                    	{
                    ?>
                        <div class="row">
                        	<div class="baituyendung">
                        		<div class="col-xs-2 col-sm-2 col-md-2 hinhanh">
                            		<a href="<?=base_url('nhatuyendung/thongtinvieclam/'.$tam['id_ntd']); ?>"><img src="<?=base_url($tam['hinh_anh']); ?>" class="img-responsive" alt="" width="150" height="100"></a>
                        		</div>
                        		<div class="col-xs-9 col-sm-9 col-md-9 thongtin">
                                    <h4> <a href="<?=base_url('nhatuyendung/thongtinvieclam/'.$tam['id_ntd']); ?>"><?=$tam['tieu_de']; ?></a></h4>
                                    <h5 > <?=$tam['ten_cty'];?></h5>
                               
                                    <div class="col-xs-3 col-sm-3 col-md-3"> 
                                        <p class="glyphicon glyphicon-map-marker"> <?= $tam['dia_chi'];?></p>
                                    </div>
                                    <div class="col-xs-3 col-sm-3 col-md-3"> 
                                        <p class="glyphicon glyphicon-usd"> <?= $tam['muc_luong'];?></p>
                                    </div>
                                    <div class="col-xs-3 col-sm-3 col-md-3"> 
                                        <p class="glyphicon glyphicon-list-alt"> <?= $tam['trinh_do'];?></p>
                                    </div>
                                    <div class="col-xs-3 col-sm-3 col-md-3"> 
                                        <p class="glyphicon glyphicon-time"> <?=date('d-m-Y', strtotime($tam['ngay_dk'])); ?></p>
                                    </div>
                            
                        		</div> 
                                <div class="col-xs-1 col-sm-1 col-md-1 thongtin"> 
                                	<p class="glyphicon glyphicon-star-empty"> </p>
                                </div>   	
                        	</div>
                    	</div>
					<?php
					}
					?>
                    </div>
        
      <!--<?php print_r($timkiem); ?>-->
      
      
      
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
        	<div class="tieude_tk">
        		<h3> <center>Tìm kiếm việc làm</center> </h3>
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