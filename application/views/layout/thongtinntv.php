<div class="container">
	<div class="tieu-de">
    	<div class="row">
        	<div class=" col-xs-9 col-sm-9 col-md-9 ">
            	<h3><?=$thongtin['tieu_de']; ?></h3>
                <h4><?=$thongtin['ten']; ?></h4>
                <h5><?=date('d-m-Y', strtotime($thongtin['ngay_dk'])); ?></h5>
            
            </div>
            <div class=" col-xs-3 col-sm-3 col-md-3">
            	<h4><span class="glyphicon glyphicon-star-empty"></span> lưu hồ sơ</h4>
                <h5><span class="glyphicon glyphicon-eye-open"></span> lượt xem</h5>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
	<div class="row">
    	<div class="col-xs-8 col-sm-8 col-md-8 ">
            <div class=" row thong-tin">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <h4>chi tiết tại đây</h4>
                    <h4>chi tiết tại đây</h4>
                    <h4>chi tiết tại đây</h4>
                    <h4>chi tiết tại đây</h4>
                    <h4>chi tiết tại đây</h4>
                    <h4>chi tiết tại đây</h4>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <h4>chi tiết tại đây</h4>
                    <h4>chi tiết tại đây</h4>
                    <h4>chi tiết tại đây</h4>
                    <h4>chi tiết tại đây</h4>
                    <h4>chi tiết tại đây</h4>
                    <h4>chi tiết tại đây</h4>
                </div>
             </div>
             <div class="clearfix"></div>
             <div class="thong-tin-khac">
             	<h3>chi tiết tại đây</h3>
                <h4>chi tiết tại đây</h4>
                <h5>chi tiết tại đây</h5>
             </div>
             <button type="button" class="btn btn-default btn-lg btn-block tro-ve" name="tro-ve" value="">
             	<a href="<?=base_url('nguoitimviec');?>"><span class="glyphicon glyphicon-arrow-left"></span> Trở về trang Người Tìm Việc </a>
             </button>
             
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
        	<div class="avatar">
            	<h4>chi tiết tại đây</h4>
                <h4>chi tiết tại đây</h4>
                <h4>chi tiết tại đây</h4>
            </div>
        </div>
        	
    </div>
</div>
 