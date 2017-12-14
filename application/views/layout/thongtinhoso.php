<div class="container">
		
	<button type="button" class="btn btn-link back">
		<a href="<?=base_url('nguoitimviec');?>"><i class="fa fa-history fa-lg fa-fw "></i> Trở về trang Người Tìm Việc </a>
    </button>
	<div class="tieu-de">
    	<div class="row">
        	<div class=" col-xs-9 col-sm-9 col-md-8 td-left ">
            	<h3><?=$thongtin['tieu_de']; ?></h3>
                <h4><?=$thongtin['ho'];?> <?=$thongtin['ten']; ?></h4>
                <h5><i class="fa fa-clock-o fa-spin fa-lg fa-fw "></i>  <b>Ngày cập nhật:</b> <?=date('d-m-Y', strtotime($thongtin['ngay_dk'])); ?></h5>
            
            </div>
            <div class=" col-xs-3 col-sm-3 col-md-2 td-right">
            	<a href="#" class="btn luu-vl"><i class="fa fa-star-o fa-lg fa-fw "></i> <span class="hidden-xs">lưu hồ sơ</span></a>
                <h5><i class="fa fa-eye fa-lg fa-fw "></i> <span class="hidden-xs">Lượt xem:</span> <?=$thongtin['luot_xem']; ?></h5>
                
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
	<div class="row">
    	<div class="col-sm-8 col-md-8 ">
            <div class=" row thong-tin">
                <div class="col-sm-6 col-md-6">
                    <h4><i class="fa fa-suitcase fa-lg fa-fw "></i> <b>Cấp bậc hiện tại: </b><?=$thongtin['chuc_vu_ht']; ?></h4>
                    <h4><i class="fa fa-signal fa-lg fa-fw "></i> <b>Kinh nghiệm: </b><?=$thongtin['ten_kn']; ?></h4>
                    <h4><i class="fa fa-graduation-cap fa-lg fa-fw "></i> <b>Trình độ cao nhất: </b> <?=$thongtin['trinh_do']; ?></h4>
                    <h4><i class="fa fa-commenting-o fa-lg fa-fw "></i> <b>Ngoại ngữ:  </b><?=$thongtin['ngoai_ngu']; ?></h4>
                    <h4><i class="fa fa-transgender fa-lg fa-fw "></i> <b>Giới tính: </b><?=$thongtin['gioi_tinh']; ?></h4>
                    <h4><i class="fa fa-venus-mars fa-lg fa-fw "></i> <b>Hôn nhân: </b><?=$thongtin['hon_nhan']; ?></h4>
                    
                </div>
                <div class="col-sm-6 col-md-6">
                    <h4><i class="fa fa-medkit fa-lg fa-fw "></i> <b>Cấp bậc mong muốn: </b><?=$thongtin['chuc_vu_mm']; ?></h4>
                    <h4><i class="fa fa-map-marker  fa-lg fa-fw "></i> <b> Địa điểm làm việc: </b> <?=$thongtin['ten_dd'];?></h4>
                    <h4><i class="fa fa-list-alt fa-lg fa-fw "></i> <b>Ngành nghề: </b><?=$thongtin['ten_nn']; ?></h4>
                    <h4><i class="fa fa-money fa-lg fa-fw " ></i> <b>Mức lương mong muốn: </b><?=$thongtin['muc_luong']; ?></h4>
                    <h4><i class="fa fa-laptop fa-lg fa-fw "></i> <b>Hình thức làm việc: </b><?=$thongtin['hinh_thuc_lam_viec']; ?></h4>
                </div>
             </div>
             <div class="clearfix"></div>
             <div class="thong-tin-khac">
             	<h3>Mục tiêu nghề nghiệp</h3>
                <h4><?=$thongtin['muc_tieu'];?></h4>
                <h5></h5>
             </div>
             <button type="button" class="btn btn-default btn-lg btn-block tro-ve" name="tro-ve" value="">
             	<a href="<?=base_url('nguoitimviec');?>"><span class="glyphicon glyphicon-arrow-left"></span> Trở về trang Người Tìm Việc </a>
             </button>
             
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
        	<div class="avatar">
            	<center><img src="<?=base_url($thongtin['avatar']);?>" class="" alt="" width="150" height="180"></center>
                <h4><b><?=$thongtin['ho'];?> <?=$thongtin['ten']; ?></b></h4>
                <h5><i class="fa fa-birthday-cake fa-fw "></i><b> Ngày sinh:</b> <?=date('d-m-Y', strtotime($thongtin['ngay_sinh'])); ?></h5>
                <h5><i class="fa fa-map-marker fa-fw "></i><b> Địa chỉ hiện tại: </b> <?=$thongtin['dia_chi'];?></h5>
            </div>
        </div>
        	
    </div>
</div>
