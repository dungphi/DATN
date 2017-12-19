<div class="container">

    <div class="row">
    	<div class="col-sm-8  col-md-9 xemhoso ">
        	<div class="xhs">
				<h3>Xem Hồ Sơ</h3>
            </div>
            <div class="ttlienhe">
            	<h3 class="blue"> Thông Tin Liên hệ </h3>
            	<div class="row"> 
                    <div class="hidden-xs col-md-3">
                            <center><img src="<?=base_url($nguoitimviec['avatar']);?>" class="" alt="" width="140" height="160"></center>
                        </div>
                    <div class="col-md-8">
                        <div class="row tt">
                            <div class=" col-sm-6 col-md-6">
                                <label>Họ tên: </label> <span><?= $nguoitimviec['ho'];?> <?= $nguoitimviec['ten'];?></span>
                            
                            </div>
                            <div class=" col-sm-6 col-md-6">
                                <label>Ngày sinh: </label> <span><?= date('d-m-Y', strtotime($nguoitimviec['ngay_sinh']));?></span>
                            </div>
                            
                        </div>
                        <div class="row tt">
                            <div class="col-sm-6 col-md-6">
                                <label>Giới tính:</label> <span><?= $nguoitimviec['gioi_tinh'];?></span>
                            
                            </div>
                            <div class=" col-sm-6 col-md-6">
                                <label>Hôn nhân:</label> <span><?= $nguoitimviec['hon_nhan'];?></span>
                            </div>
                            
                        </div>
                        <div class="row tt">
                            <div class="col-sm-6 col-md-6">
                                <label>Email:</label> <span><?= $nguoitimviec['email'];?></span>
                            
                            </div>
                            <div class=" col-sm-6 col-md-6">
                                <label>Địa chỉ:</label> <span><?= $nguoitimviec['dia_chi'];?></span>
                            </div>
                        </div>
                        
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
                        <h4><i class="green fa fa-suitcase fa-lg fa-fw "></i> <label>Cấp bậc hiện tại: </label><?=$nguoitimviec['chuc_vu_ht']; ?></h4>
                        <h4><i class="green fa fa-list-alt fa-lg fa-fw "></i> <label>Ngành nghề: </label><?=$nguoitimviec['ten_nn']; ?></h4>
                        <h4><i class="green fa fa-signal fa-lg fa-fw "></i> <label>Kinh nghiệm: </label><?=$nguoitimviec['ten_kn']; ?></h4>
                        <h4><i class="green fa fa-graduation-cap fa-lg fa-fw "></i> <label>Trình độ cao nhất: </label> <?=$nguoitimviec['trinh_do']; ?></h4>
                        <h4><i class="green fa fa-commenting-o fa-lg fa-fw "></i> <label>Ngoại ngữ:  </label><?=$nguoitimviec['ngoai_ngu']; ?></h4>
                        
                	</div>
                	<div class="col-sm-6 col-md-6">
                        <h4><i class="green fa fa-medkit fa-lg fa-fw "></i> <label>Cấp bậc mong muốn: </label><?=$nguoitimviec['chuc_vu_mm']; ?></h4>
                        <h4><i class="green fa fa-map-marker  fa-lg fa-fw "></i> <label> Địa điểm làm việc: </label> <?=$nguoitimviec['ten_dd'];?></h4>
                        <h4><i class="green fa fa-money fa-lg fa-fw " ></i> <label>Mức lương mong muốn: </label><?=$nguoitimviec['muc_luong']; ?></h4>
                        <h4><i class="green fa fa-laptop fa-lg fa-fw "></i> <label>Hình thức làm việc: </label><?=$nguoitimviec['hinh_thuc_lam_viec']; ?></h4>
                 	</div>
                    
                    <div class="col-md-12 xmuctieu">
                         <label>Mục tiêu nghề nghiệp:</label>
                         <p><?= $nguoitimviec['muc_tieu'];?></p>
                   	</div>
                    
                </div>
                
           </div><!--end tthoso-->
           <?php
				if ($nguoitimviec['id_trinh_do']!=7)
				{
			?> 
           <div class="ttbangcap">
               <h3 class="blue"> Thông Tin Trình Độ & Bằng Cấp </h3>   
               <div class="row tt">
               	Chưa xong
               </div>
           </div>
            <?php
				}
		    ?> 
           	
            <?php
				if ($nguoitimviec['id_kinh_nghiem']!=1)
				{
			?> 
           <div class="ttkinhnghiem">
               <h3 class="blue"> Thông Tin Kinh Nghiệm </h3>   
               <div class="row tt">
               	Chưa xong
               </div>
           </div>
            <?php
				}
		    ?> 
            <div class="ttxemhs">
            	<?php
				 	if(!$nguoitimviec['duyet']==2)
						{
				?>
            	<div class="tt chotimkiem">
           				<input type="checkbox" name="cho_tim_kiem" value="yes"/> <i class="red">Cho phép nhà tuyển dụng tìm kiếm hồ sơ và liên hệ với bạn</i>
                </div>
                <?php
						}
				?>
           		 <div class="row">
                	<div class="col-md-4 chinhsuahs">
                    	<a href="<?=base_url('quanlynguoitimviec/quanlyhoso');?>">
                            <button type="submit" class="btn btn-info btn-block btn_qlhs btn_chinhsuahoso">
                                <i class="fa fa-upload fa-lg fa-fw"></i> ĐĂNG HỒ SƠ
                            </button></a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 xemhs">
                    	<a href="<?=base_url('quanlynguoitimviec/xemhoso');?>">
                    	<button type="submit" class="btn btn-info btn-block btn_qlhs btn_xemhoso">
                             <i class="fa fa-trash fa-lg fa-fw"></i>XÓA HỒ SƠ
                        </button></a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 xoahs">
                    	<button type="submit" class="btn btn-info btn-block btn_qlhs btn_xoahoso" onclick="javascript:window.history.go(-1)">
                             <i class="fa fa-history fa-lg fa-fw"></i>QUAY LẠI
                        </button>
                    </div>
                </div>
           </div>
        </div>