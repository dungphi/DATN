<div class="container">
		
	<button type="button" class="btn btn-link back">
		<a href="<?=base_url('nhatuyendung');?>"><i class="fa fa-history fa-lg fa-fw "></i> Trở về trang Nhà tuyển dụng </a>
    </button>
	<div class="tieu-de">
    	<div class="row">
        	<div class=" col-xs-9 col-sm-9 col-md-8 td-left ">
            	<h3><?=$thongtin['tieu_de']; ?></h3>
                <h4><?=$thongtin['ten_cty']; ?></h4>
                <div class="ngay-het-han">
                	<i class="fa fa-clock-o fa-lg fa-fw "></i>  
                    <label class="hidden-xs">Hạn nộp hồ sơ:</label> 
					<span class="red"><?=date('d-m-Y', strtotime($thongtin['ngay_hh'])); ?></span>
                </div>
            
            </div>
            <div class=" col-xs-3 col-sm-3 col-md-2 td-right">
            	<a href="#" id="nop_hs" class="btn luu-vl" onClick="nophoso(<?=$thongtin['id_vl'] ?>)" ><i class="fa fa-star-o fa-lg fa-fw "></i> <span class="hidden-xs">Nộp hồ sơ</span></a>
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
                	<h4><i class="fa fa-laptop fa-lg fa-fw "></i> <b>Số lượng: </b><?=$thongtin['so_luong']; ?></h4>
                    <h4><i class="fa fa-signal fa-lg fa-fw "></i> <b>Kinh nghiệm: </b><?=$thongtin['ten_kn']; ?></h4>
                    <h4><i class="fa fa-graduation-cap fa-lg fa-fw "></i> <b>Yêu cầu bằng cấp: </b> <?=$thongtin['trinh_do']; ?></h4>
                    <h4><i class="fa fa-transgender fa-lg fa-fw "></i> <b>Yêu cầu giới tính: </b><?=$thongtin['gioi_tinh']; ?></h4>
                    <h4><i class="fa fa-list-alt fa-lg fa-fw "></i> <b>Ngành nghề: </b><?=$thongtin['ten_nn']; ?></h4>
                   	
                </div>
                <div class="col-sm-6 col-md-6">
                	<h4><i class="fa fa-money fa-lg fa-fw " ></i> <b>Mức lương: </b><?=$thongtin['muc_luong']; ?></h4>
                    <h4><i class="fa fa-medkit fa-lg fa-fw "></i> <b>Chức vụ: </b><?=$thongtin['cap_bac']; ?></h4>
                    <h4><i class="fa fa-map-marker  fa-lg fa-fw "></i> <b> Địa điểm làm việc: </b> <?=$thongtin['ten_dd'];?></h4>
                    <h4><i class="fa fa-laptop fa-lg fa-fw "></i> <b>Hình thức làm việc: </b><?=$thongtin['hinh_thuc']; ?></h4>
                </div>
             </div>
             <div class="clearfix"></div>
             <?php if (isset($thongtin['mo_ta']))
			 			{
			 ?>
             <div class="thong-tin-khac">
             	<h3>Mô tả công việc</h3>
                <h4><?=$thongtin['mo_ta'];?></h4>
                <h5></h5>
             </div>
             <?php
						}
			 ?>
             <button type="button" class="hidden-xs hidden-sm btn btn-default btn-lg btn-block tro-ve" name="tro-ve" value="">
             	<a href="<?=base_url('nhatuyendung');?>"><span class="glyphicon glyphicon-arrow-left"></span> Trở về trang Nhà tuyển dụng </a>
             </button>
             
        </div>
        <div class="col-md-4">
        	<div class="avatar">
            	<center><img src="<?=base_url($thongtin['avatar']);?>" class="" alt="" width="180" height="160"></center>
                <h4><b><?=$thongtin['ten_cty']; ?></b></h4>
                <div class="tt-phu">
                	<label>Trụ sở: </label> <span><?=$thongtin['dia_chi'];?> </span>
                    <label>Quy mô:</label> <span><?=$thongtin['quy_mo'];?> </span>
                    
            	</div>
            </div>
        </div>
        	
    </div>
</div>
<script type="text/javascript">
	function nophoso(id){
        $.ajax({
            dataType: "json",
            type:"POST",
            url:"<?=base_url('nguoitimviec/nophoso'); ?>",
            data:{id:id},
            success: function(result){
                alert(result);
				$('#nop_hs').addClass('btn-warning');
				$('#nop_hs').removeClass('luu-vl');
            }
        });
    }
	$(document).ready(function(){
		$.ajax({
			dataType: "json",
			type:"POST",
			url:"<?=base_url('nguoitimviec/check_nophoso'); ?>",
			data:{id:<?=$thongtin['id_vl'] ?>},
			success: function(result){
				console.log(result);
				if(result == 1){
					$('#nop_hs').addClass('btn-warning');
					$('#nop_hs').removeClass('luu-vl');
				}
				else{
					$('#nop_hs').removeClass('btn-warning');
					$('#nop_hs').addClass('luu-vl');
				}
			}
		});
	}); 
</script>
 