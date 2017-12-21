<div class="container">

    <div class="row">
    	<div class="col-sm-8  col-md-9 quanlyhoso ">
        	<div class="qlhs">
        		<h3> Quản Lý Hồ Sơ </h3>
            </div>
            <div class="tt tths">
            	<label class="hidden-xs"> Bạn được tạo tối đa 02 hồ sơ (01 hồ sơ trực tuyến và 01 hồ sơ đính kèm từ máy tính). Trong đó chỉ có 01 hồ sơ được “cho phép tìm kiếm” bởi Nhà tuyển dụng. </label>
				<i> Tất cả các Hồ sơ ở trạng thái “Đã duyệt” đều có thể sử dụng để “Nộp hồ sơ” trực tuyến.</i> 
            </div>
            <?php 
			if(count($hoso) == 0)
			{
						
			?>
            <div class=" tt tthoso">
            	<h3 class="red"> Bạn Chưa Có Hồ Sơ </h3>
                <i> Tạo hồ sơ ngay để nâng cao cơ hội tìm việc phù hợp</i>
                <div class="taohoso">
                	<a href="<?=base_url('Quanlynguoitimviec/taohoso/').$timviec['id_ntv']; ?>">
                        <button type="submit" class="btn btn-danger btn-block btn_taohoso"><i class="fa fa-plus fa-lg fa-fw"></i> TẠO HỒ SƠ NGAY
                        </button></a>
                </div>
            </div>
            <?php
			}
			else
			{
				foreach($hoso as $nguoitimviec)
				{
			?>
            <div class=" tt tthoso">
            	 <h3 class="blue"><i class="red">Hồ Sơ:</i> <?=$nguoitimviec['tieu_de'];?></h3>
                <div class="row tt">
                	<div class="col-sm-6 col-md-6">
                    	<label>Loại hồ sơ: </label>
                        <span> Tạo trực tuyến</span>
                    
                    </div>
                    <div class="col-sm-6 col-md-6">
                    	<label>Tình Trạng: </label>
                        <?php 
							if($nguoitimviec['duyet']==1)
								{
						?>
                        <span class="green"> Đã duyệt</span>
                        <?php
								}
							else if($nguoitimviec['duyet']==2)
								{
						?>
                        <span class="red"> Không duyệt</span>
                        <?php
								}
							else 
								{
						?>
                        <span class="red"> Đang chờ duyệt</span>
                        <?php
								}
						?>
                    </div>
                </div>
                
                <div class="row">
                	<div class="col-sm-6 col-md-6">
                    	<label>Ngày tạo: </label>
                        <span> <?= date('d-m-Y', strtotime($nguoitimviec['ngay_dk'])); ?></span>
                    
                    </div>
                    <div class="col-sm-6 col-md-6">
                    	<label>lượt xem: </label>
                        <span> <?= $nguoitimviec['luot_xem']; ?></span>
                    </div>
                </div>
                <?php
				 	if($nguoitimviec['duyet']==1)
						{
				?>
                <div class="chotimkiem">
           			<input type="radio" name="cho_tim_kiem" value="<?=$nguoitimviec['id_hoso'] ?>" <?php if($nguoitimviec['id_hs'] == $nguoitimviec['id_hoso']) echo 'checked'; ?> onClick="check(<?=$nguoitimviec['id_ntv']?>,<?=$nguoitimviec['id_hoso']?>)" id="radio_<?=$nguoitimviec['id_hoso']?>" > 
					<i class="red">Cho phép nhà tuyển dụng tìm kiếm hồ sơ và liên hệ với bạn</i>
                </div>
                <?php
						}
				?>
                <div class="row">
                	<div class="col-md-4 chinhsuahs">
                    	<a href="<?=base_url('quanlynguoitimviec/chinhsuahoso/'.$nguoitimviec['id_hoso']);?>">
                            <button type="submit" class="btn btn-info btn-block btn_qlhs btn_chinhsuahoso">
                                <i class="fa fa-edit fa-lg fa-fw"></i> CHỈNH SỬA
                            </button></a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 xemhs">
                    	<a href="<?=base_url('quanlynguoitimviec/xemhoso');?>">
                            <button type="submit" class="btn btn-info btn-block btn_qlhs btn_xemhoso">
                                <i class="fa fa-eye fa-lg fa-fw"></i> XEM
                            </button></a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 xoahs">
                    	<a href="<?=base_url('quanlynguoitimviec/xoahoso/'.$nguoitimviec['id_hoso']);?>">
                            <button type="submit" class="btn btn-info btn-block btn_qlhs btn_xoahoso">
                                <i class="fa fa-trash fa-lg fa-fw"></i> XÓA
                            </button></a>
                    </div>
                </div>
            </div><!--end tthoso-->
            <?php
				}
			}
			?>
        </div>
<script>
	function check(id_ntv,id_hs){
        $.ajax({
            method:"POST",
            url:"<?=base_url('quanlynguoitimviec/select'); ?>",
            data:{id_ntv:id_ntv,id_hs:id_hs},
			success: function(result)
			{
				if(result == 1)
					alert('Hoàn tất!');
				else
					alert('Lỗi!');
			}
        });
    }
</script>