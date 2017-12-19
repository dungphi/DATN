<div class="container">
		
	<button type="button" class="btn btn-link back">
		<a href="<?=base_url('nguoitimviec');?>"><i class="fa fa-history fa-lg fa-fw "></i> Trở về trang Người Tìm Việc </a>
    </button>
	<div class="tieu-de">
    	<div class="row">
        	<div class=" col-xs-9 col-sm-9 col-md-8 td-left ">
            	<h3><?=$thongtin['tieu_de']; ?></h3>
                <h4><?=$thongtin['ho'];?> <?=$thongtin['ten']; ?></h4>
                <div class="ngay-cap-nhat">
                    <i class="fa fa-clock-o fa-lg fa-fw "></i>  
                    <label class="hidden-xs">Ngày cập nhật:</label>
                    <span class="green"> <?=date('d-m-Y', strtotime($thongtin['ngay_dk'])); ?></span>
                </div>
            
            </div>
            <div class=" col-xs-3 col-sm-3 col-md-2 td-right">
            	<a href="#" class="btn luu-vl"><i class="fa fa-star-o fa-lg fa-fw "></i> <span class="hidden-xs">lưu hồ sơ</span></a>
                <div class="luotxem">
                    <i class="fa fa-eye fa-lg fa-fw "></i> 
                    <label class="hidden-xs">Lượt xem:</label>
                    <span><?=$thongtin['luot_xem']; ?></span>
                </div>
                
                
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
	<div class="row">
    	<div class="col-md-8 ">
            <div class=" row thong-tin">
                <div class="col-sm-6 col-md-6">
                    <h4><label><i class="fa fa-suitcase fa-lg fa-fw "></i> Cấp bậc hiện tại:</label><?=$thongtin['chuc_vu_ht']; ?></h4>
                    <h4><label><i class="fa fa-signal fa-lg fa-fw "></i> Kinh nghiệm: </label><?=$thongtin['ten_kn']; ?></h4>
                    <h4><label><i class="fa fa-graduation-cap fa-lg fa-fw "></i> Trình độ cao nhất: </label> <?=$thongtin['trinh_do']; ?></h4>
                    <h4><label><i class="fa fa-commenting-o fa-lg fa-fw "></i> Ngoại ngữ:  </label><?=$thongtin['ngoai_ngu']; ?></h4>
                    <h4><label><i class="fa fa-transgender fa-lg fa-fw "></i> Giới tính: </label><?=$thongtin['gioi_tinh']; ?></h4>
                    <h4><label><i class="fa fa-venus-mars fa-lg fa-fw "></i> Hôn nhân: </label><?=$thongtin['hon_nhan']; ?></h4>
                    
                </div>
                <div class="col-sm-6 col-md-6">
                    <h4><label><i class="fa fa-medkit fa-lg fa-fw "></i> Cấp bậc mong muốn: </label><?=$thongtin['chuc_vu_mm']; ?></h4>
                    <h4><label><i class="fa fa-map-marker  fa-lg fa-fw "></i> Địa điểm làm việc: </label> <?=$thongtin['ten_dd'];?></h4>
                    <h4><label><i class="fa fa-list-alt fa-lg fa-fw "></i> Ngành nghề: </label><?=$thongtin['ten_nn']; ?></h4>
                    <h4><label><i class="fa fa-money fa-lg fa-fw " ></i> Mức lương mong muốn: </label><?=$thongtin['muc_luong']; ?></h4>
                    <h4><label><i class="fa fa-laptop fa-lg fa-fw "></i> Hình thức làm việc: </label><?=$thongtin['hinh_thuc_lam_viec']; ?></h4>
                </div>
             </div>
             <div class="clearfix"></div>
             <div class="thong-tin-khac">
             	<h3>Mục tiêu nghề nghiệp</h3>
                <h4><?=$thongtin['muc_tieu'];?></h4>
                <h5></h5>
             </div>
             <button type="button" class="hidden-xs hidden-sm btn btn-default btn-lg btn-block tro-ve" name="tro-ve" value="">
             	<a href="<?=base_url('nguoitimviec');?>"><span class="glyphicon glyphicon-arrow-left"></span> Trở về trang Người Tìm Việc </a>
             </button>
             
        </div>
        <div class="col-md-4">
        	<div class="avatar">
            	<center><img src="<?=base_url($thongtin['avatar']);?>" class="" alt="" width="160" height="180"></center>
                <h4><label><?=$thongtin['ho'];?> <?=$thongtin['ten']; ?></label></h4>
                <div class="tt-phu">
                    <label><i class="fa fa-birthday-cake fa-fw "></i> Ngày sinh:</label> <span><?=date('d-m-Y', strtotime($thongtin['ngay_sinh'])); ?></span>
                    <label><i class="fa fa-map-marker fa-fw "></i> Địa chỉ hiện tại: </label> <?=$thongtin['dia_chi'];?>
            	</div>
            </div>
        </div>
        	
    </div>
</div>
