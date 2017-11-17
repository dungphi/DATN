<div class="container">
		
	<button type="button" class="btn btn-link back">
		<a href="<?=base_url('nhatuyendung');?>"><i class="fa fa-undo fa-lg fa-fw "></i> Trở về trang Nhà tuyển dụng </a>
    </button>
	<div class="tieu-de">
    	<div class="row">
        	<div class=" col-xs-9 col-sm-9 col-md-8 td-left ">
            	<h3><?=$thongtin['tieu_de']; ?></h3>
                <h4><?=$thongtin['ten_cty']; ?></h4>
                <h5><i class="fa fa-clock-o fa-spin fa-lg fa-fw "></i>  <b>Hạn nộp hồ sơ:</b> <?=date('d-m-Y', strtotime($thongtin['ngay_hh'])); ?></h5>
            
            </div>
            <div class=" col-xs-3 col-sm-3 col-md-2 td-right">
            	<a href="#" class="btn luu-vl"><i class="fa fa-star-o fa-lg fa-fw "></i> lưu việc làm</a>
                <h5><i class="fa fa-eye fa-lg fa-fw "></i> lượt xem: <?=$thongtin['luot_xem']; ?></h5>
                
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
	<div class="row">
    	<div class="col-xs-8 col-sm-8 col-md-8 ">
            <div class=" row thong-tin">
                <div class="col-xs-6 col-sm-6 col-md-6">
                	<h4><i class="fa fa-laptop fa-lg fa-fw "></i> <b>Số lượng: </b><?=$thongtin['so_luong']; ?></h4>
                    <h4><i class="fa fa-signal fa-lg fa-fw "></i> <b>Kinh nghiệm: </b><?=$thongtin['kinh_nghiem']; ?></h4>
                    <h4><i class="fa fa-graduation-cap fa-lg fa-fw "></i> <b>Yêu cầu bằng cấp: </b> <?=$thongtin['bang_cap']; ?></h4>
                    <h4><i class="fa fa-transgender fa-lg fa-fw "></i> <b>Yêu cầu giới tính: </b><?=$thongtin['yc_gioi_tinh']; ?></h4>
                    <h4><i class="fa fa-list-alt fa-lg fa-fw "></i> <b>Ngành nghề: </b><?=$thongtin['nganh']; ?></h4>
                   	
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                	<h4><i class="fa fa-money fa-lg fa-fw " ></i> <b>Mức lương: </b><?=$thongtin['muc_luong']; ?></h4>
                    <h4><i class="fa fa-medkit fa-lg fa-fw "></i> <b>Chức vụ: </b><?=$thongtin['chuc_vu']; ?></h4>
                    <h4><i class="fa fa-map-marker  fa-lg fa-fw "></i> <b> Địa điểm làm việc: </b> <?=$thongtin['dia_diem_lv'];?></h4>
                    <h4><i class="fa fa-laptop fa-lg fa-fw "></i> <b>Hình thức làm việc: </b><?=$thongtin['hinh_thuc_lv']; ?></h4>
                </div>
             </div>
             <div class="clearfix"></div>
             <div class="thong-tin-khac">
             	<h3>Mô tả công việc</h3>
                <h4><?=$thongtin['mo_ta'];?></h4>
                <h5></h5>
             </div>
             <button type="button" class="btn btn-default btn-lg btn-block tro-ve" name="tro-ve" value="">
             	<a href="<?=base_url('nhatuyendung');?>"><span class="glyphicon glyphicon-arrow-left"></span> Trở về trang Nhà tuyển dụng </a>
             </button>
             
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
        	<div class="avatar">
            	<center><img src="<?=base_url($thongtin['hinh_anh']);?>" class="" alt="" width="180" height="160"></center>
                <h4><b><?=$thongtin['ten_cty']; ?></b></h4>
                <h5><i class="fa fa-map-marker fa-fw "></i><b> Trụ sở: </b> <?=$thongtin['dia_chi'];?></h5>
                <h5><b>Quy mô công ty</b>: <?=$thongtin['quy_mo']; ?></h5>
            </div>
        </div>
        	
    </div>
</div>
 