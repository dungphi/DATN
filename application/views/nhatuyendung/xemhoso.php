<div class="container">

    <div class="row">
    	<div class="col-sm-8  col-md-9 xemhoso ">
        	<div class="xhs">
				<h3>Xem Hồ Sơ</h3>
            </div>
            <div class="ttlienhe">
            	<h3 class="blue"> Thông Tin Liên hệ </h3>
            
            	<div class="row tt">
                	<div class="col-xs-6 col-sm-6 col-md-6">
                    	<label>Họ tên: </label> <span><?= $nguoitimviec['ho'];?> <?= $nguoitimviec['ten'];?></span>
                    
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                    	<label>Ngày sinh: </label> <span><?= date('d-m-Y', strtotime($nguoitimviec['ngay_sinh']));?></span>
                    </div>
                    
                </div>
                <div class="row tt">
                	<div class="col-xs-6 col-sm-6 col-md-6">
                    	<label>Giới tính:</label> <span><?= $nguoitimviec['gioi_tinh'];?></span>
                    
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                    	<label>Hôn nhân:</label> <span><?= $nguoitimviec['hon_nhan'];?></span>
                    </div>
                    
                </div>
                <div class="row tt">
                	<div class="col-xs-6 col-sm-6 col-md-6">
                    	<label>Email:</label> <span><?= $nguoitimviec['email'];?></span>
                    
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                    	<label>Địa chỉ:</label> <span><?= $nguoitimviec['dia_chi'];?></span>
                    </div>
                    
                </div>
           </div><!-- end ttlienhe-->
           <div class="tthoso">
            	<h3 class="blue"> Thông Tin Hồ Sơ </h3>
            
            	<div class="row xtieudehs">
                	<div class="col-sm-4 col-md-3">
                    	<label>Tiêu đề hồ sơ:</label>
                    
                    </div>
                    <div class="col-sm-8 col-md-9">
                    	<p class="red"><?= $nguoitimviec['tieu_de'];?></p>
                    </div>
                </div>
                <div class="row tt xhoso">
                  	 <div class="col-sm-6 col-md-6">
                        <h4><i class="green fa fa-suitcase fa-lg fa-fw "></i> <b>Cấp bậc hiện tại: </b><?=$nguoitimviec['chuc_vu_ht']; ?></h4>
                        <h4><i class="green fa fa-list-alt fa-lg fa-fw "></i> <b>Ngành nghề: </b><?=$nguoitimviec['ten_nn']; ?></h4>
                        <h4><i class="green fa fa-signal fa-lg fa-fw "></i> <b>Kinh nghiệm: </b><?=$nguoitimviec['ten_kn']; ?></h4>
                        <h4><i class="green fa fa-graduation-cap fa-lg fa-fw "></i> <b>Trình độ cao nhất: </b> <?=$nguoitimviec['trinh_do']; ?></h4>
                        <h4><i class="green fa fa-commenting-o fa-lg fa-fw "></i> <b>Ngoại ngữ:  </b><?=$nguoitimviec['ngoai_ngu']; ?></h4>
                        
                	</div>
                	<div class="col-sm-6 col-md-6">
                        <h4><i class="green fa fa-medkit fa-lg fa-fw "></i> <b>Cấp bậc mong muốn: </b><?=$nguoitimviec['chuc_vu_mm']; ?></h4>
                        <h4><i class="green fa fa-map-marker  fa-lg fa-fw "></i> <b> Địa điểm làm việc: </b> <?=$nguoitimviec['ten_dd'];?></h4>
                        <h4><i class="green fa fa-money fa-lg fa-fw " ></i> <b>Mức lương mong muốn: </b><?=$nguoitimviec['muc_luong']; ?></h4>
                        <h4><i class="green fa fa-laptop fa-lg fa-fw "></i> <b>Hình thức làm việc: </b><?=$nguoitimviec['hinh_thuc_lam_viec']; ?></h4>
                 	</div>
                    
                    <div class="col-md-12 xmuctieu">
                         <label>Mục tiêu nghề nghiệp:</label>
                         <p><?= $nguoitimviec['muc_tieu'];?></p>
                   	</div>
                    
                </div>
                
           </div><!--end tthoso-->
           <?php
				if ($nguoitimviec['id_kinh_nghiem']!=1)
				{
			?> 
           <div class="ttkinhnghiem">
               <h3 class="blue"> Thông Tin Kinh Nghiệm </h3>   
               <div class="row tt">
               	sssssssssssssssssss
               </div>
            <?php
				}
		    ?> 
           	</div>
        </div>