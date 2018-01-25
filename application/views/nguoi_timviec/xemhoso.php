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
                            <center><img src="<?=base_url($nguoitimviec[0]['avatar']);?>" class="" alt="" width="140" height="160"></center>
                        </div>
                    <div class="col-md-8">
                        <div class="row tt">
                            <div class=" col-sm-6 col-md-6">
                                <label>Họ tên: </label> <span><?= $nguoitimviec[0]['ho'];?> <?= $nguoitimviec[0]['ten'];?></span>
                            
                            </div>
                            <div class=" col-sm-6 col-md-6">
                                <label>Ngày sinh: </label> <span><?= date('d-m-Y', strtotime($nguoitimviec[0]['ngay_sinh']));?></span>
                            </div>
                            
                        </div>
                        <div class="row tt">
                            <div class="col-sm-6 col-md-6">
                                <label>Giới tính:</label> <span><?= $nguoitimviec[0]['gioi_tinh'];?></span>
                            
                            </div>
                            <div class=" col-sm-6 col-md-6">
                                <label>Hôn nhân:</label> <span><?= $nguoitimviec[0]['hon_nhan'];?></span>
                            </div>
                            
                        </div>
                        <div class="row tt">
                            <div class="col-sm-6 col-md-6">
                                <label>Email:</label> <span><?= $nguoitimviec[0]['email'];?></span>
                            
                            </div>
                            <div class=" col-sm-6 col-md-6">
                                <label>Địa chỉ:</label> <span><?= $nguoitimviec[0]['dia_chi'];?></span>
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
                    	<p class="red"><?= $hoso['tieu_de'];?></p>
                    </div>
                </div>
                <div class="row tt xhoso">
                  	 <div class="col-sm-6 col-md-6">
                        <h4><i class="green fa fa-suitcase fa-lg fa-fw "></i> <label>Cấp bậc hiện tại: </label><?=$hoso['chuc_vu_ht']; ?></h4>
                        <h4><i class="green fa fa-list-alt fa-lg fa-fw "></i> <label>Ngành nghề: </label><?=$hoso['ten_nn']; ?></h4>
                        <h4><i class="green fa fa-signal fa-lg fa-fw "></i> <label>Kinh nghiệm: </label><?=$hoso['ten_kn']; ?></h4>
                        <h4><i class="green fa fa-graduation-cap fa-lg fa-fw "></i> <label>Trình độ cao nhất: </label> <?=$hoso['trinh_do']; ?></h4>
                        <h4><i class="green fa fa-commenting-o fa-lg fa-fw "></i> <label>Ngoại ngữ:  </label><?=$hoso['ngoai_ngu']; ?></h4>
                        
                	</div>
                	<div class="col-sm-6 col-md-6">
                        <h4><i class="green fa fa-medkit fa-lg fa-fw "></i> <label>Cấp bậc mong muốn: </label><?=$hoso['chuc_vu_mm']; ?></h4>
                        <h4><i class="green fa fa-map-marker  fa-lg fa-fw "></i> <label> Địa điểm làm việc: </label> <?=$hoso['ten_dd'];?></h4>
                        <h4><i class="green fa fa-money fa-lg fa-fw " ></i> <label>Mức lương mong muốn: </label><?=$hoso['muc_luong']; ?></h4>
                        <h4><i class="green fa fa-laptop fa-lg fa-fw "></i> <label>Hình thức làm việc: </label><?=$hoso['hinh_thuc_lam_viec']; ?></h4>
                 	</div>
                    
                    <div class="col-md-12 xmuctieu">
                         <label>Mục tiêu nghề nghiệp:</label>
                         <p><?= $hoso['muc_tieu'];?></p>
                   	</div>
                    
                </div>
                
           </div><!--end tthoso-->
           <?php
				if ($hoso['id_trinh_do']!=7)
				{
			?> 
           <div class="ttbangcap">
               <h3 class="blue"> Thông Tin Trình Độ & Bằng Cấp </h3>   
               <div class="row tt">
               	Chưa cập nhật
               </div>
           </div>
            <?php
				}
		    ?> 
           	
            <?php
				if ($hoso['id_kinh_nghiem']!=1)
				{
			?> 
           <div class="ttkinhnghiem">
               <h3 class="blue"> Thông Tin Kinh Nghiệm </h3>   
               <div class="row tt">
               	Chưa cập nhật
               </div>
           </div>
            <?php
				}
		    ?> 
            <div class="ttxemhs">
            	<?php
				 	if(!$hoso['duyet']==2)
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
                    	
                    	<button type="submit" class="btn btn-info btn-block btn_qlhs btn_xemhoso" onclick="xoa_hoso(<?=$hoso['id_hoso']?>)">
                             <i class="fa fa-trash fa-lg fa-fw"></i>XÓA HỒ SƠ
                        </button>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 xoahs">
                    	<button type="submit" class="btn btn-info btn-block btn_qlhs btn_xoahoso" onclick="javascript:window.history.go(-1)">
                             <i class="fa fa-history fa-lg fa-fw"></i>QUAY LẠI
                        </button>
                    </div>
                </div>
           </div>
        </div>
<script type="text/javascript">
	function xoa_hoso(id){
        if (confirm("Bạn có muốn xóa không?")) {
            $.ajax({
                dataType: "json",
                type:"POST",
                url:"<?=base_url('quanlynguoitimviec/xoa_hoso'); ?>",
                data:{id:id},
                success: function(result){
                    if(result == 1){
                        alert("Xóa thành công");
                        location.assign("<?=base_url('quanlynguoitimviec/quanlyhoso')?>");
                    }
					else{
						alert("Lỗi!");
					}
                }
            });
        }
    }
</script>