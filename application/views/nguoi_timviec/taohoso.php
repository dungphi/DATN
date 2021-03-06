  <?php
if(isset($thongbao))
	echo $thongbao;
?>
  <div class="container">

    <div class="row">
    	<div class="col-sm-8  col-md-9 taohoso ">
        	<div class="ths">
				<h3>Tạo Hồ Sơ Trực tuyến</h3>
            </div>
        
        	<div class="tt tttaohoso">
        		<i> - Yêu cầu viết tiếng Việt <label>có dấu</label>, không viết chữ in hoa (trừ chữ cái đầu câu).</i></br>
				<i> - Các hồ sơ không đúng quy định, không đạt chất lượng, nội dung không nghiêm túc sẽ bị xóa không cần báo trước.</i>
        	</div>
            <form action="<?=base_url('Quanlynguoitimviec/taohoso/'.$timviec['id_ntv']);?>" method="post" enctype="multipart/form-data">
            <div class="tttongquan">
            	<h3><i class=""></i> Thông Tin Tổng Quan <i class="red">( Bắt buộc)</i></h3>
            
            	<div class="row tt tieudehs">
                	<div class="col-sm-4 col-md-4">
                    	<label class="">Tiêu đề hồ sơ <i class="red">*</i></label>
                    
                    </div>
                    <div class="col-sm-8 col-md-8">
                    	<input type="text" name="tieu_de" placeholder="VD: Nhân viên Bán Hàng" class="form-control" value="<?php echo set_value('tieu_de')?>"> 
						 <?php echo form_error('tieu_de', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                    
                </div>
                <div class="row tt hs_trinhdohs">
                	<div class="col-sm-4 col-md-4">
                    	<label class="">Trình độ cao nhất<i class="red">*</i></label>
                    
                    </div>
                    <div class="col-sm-8 col-md-8">
                    	<select class="form-control" name="trinh_do" tabindex="-1" aria-hidden="true">
                            <option value="0">Chọn trình độ</option>
                       	<?php
                            foreach($trinhdo as $td)
                            {
                        ?>
                            <option value="<?=$td['id_td']; ?>" <?php if(isset($id_td)) {if($id_td == $td['id_td']) echo 'selected';} ?>><?=$td['trinh_do'] ?></option>
						<?php
                            }
                        ?>
                       
               			</select>
            
                    </div>
                </div> 
                <div class="row tt hs_kinhnghiem">
                	<div class="col-sm-4 col-md-4">
                    	<label class="">Số năm kinh nghiệm<i class="red">*</i></label>
                    
                    </div>
                    <div class="col-sm-8 col-md-8">
                    	<select class="form-control" name="kinh_nghiem" tabindex="-1" aria-hidden="true">
                            <option value="0">Chọn số năm</option>
                       	<?php
                            foreach($kinhnghiem as $kn)
                            {
                        ?>
                            <option value="<?=$kn['id_kn']; ?>" <?php if(isset($id_kn)) {if($id_kn == $kn['id_kn']) echo 'selected';} ?>><?=$kn['ten_kn'] ?></option>
						<?php
                            }
                        ?>
                       
               			</select>
            
                    </div>
                </div> 
                <div class="row tt hs_capbac">
                	<div class="col-sm-4 col-md-4">
                    	<label class="">Cấp bậc hiện tại<i class="red">*</i></label>
                    
                    </div>
                    <div class="col-sm-8 col-md-8">
                    	<select class="form-control" name="cap_hien_tai" tabindex="-1" aria-hidden="true">
                            <option value="0">Chọn cấp bậc</option>
                       	<?php
                            foreach($capbac as $cb)
                            {
                        ?>
                            <option value="<?=$cb['cap_bac']; ?>"><?=$cb['cap_bac'] ?></option>
						<?php
                            }
                        ?>
                       
               			</select>
            
                    </div>
                </div>
                <div class="row tt hs_capbacmm">
                	<div class="col-sm-4 col-md-4">
                    	<label class="">Cấp bậc mong muốn<i class="red">*</i></label>
                    
                    </div>
                    <div class="col-sm-8 col-md-8">
                    	<select class="form-control" name="cap_mong_muon" tabindex="-1" aria-hidden="true">
                            <option value="0">Chọn cấp bậc</option>
                       	<?php
                            foreach($capbac as $cb)
                            {
                        ?>
                            <option value="<?=$cb['cap_bac']; ?>"><?=$cb['cap_bac'] ?></option>
						<?php
                            }
                        ?>
                       
               			</select>
            
                    </div>
                </div>  
                <div class="row tt hs_nganhnghe">
                	<div class="col-sm-4 col-md-4">
                    	<label class="">Ngành nghề mong muốn<i class="red">*</i></label>
                    
                    </div>
                    <div class="col-sm-8 col-md-8">
                    	<select class="form-control" name="nganh_nghe" tabindex="-1" aria-hidden="true">
                            <option value="0">Chọn ngành nghề</option>
                       	<?php
                            foreach($nganhnghe as $nn)
                            {
                        ?>
                            <option value="<?=$nn['id_nn']; ?>" <?php if(isset($id_nn)) {if($id_nn == $nn['id_nn']) echo 'selected';} ?>><?=$nn['ten_nn'] ?></option>
						<?php
                            }
                        ?>
                       
               			</select>
            
                    </div>
                </div>
                <div class="row tt hs_ngoaingu">
                	<div class="col-sm-4 col-md-4">
                    	<label class="">Ngoại ngữ</label>
                    
                    </div>
                    <div class="col-sm-8 col-md-8">
                    	<select class="form-control" name="ngoai_ngu" tabindex="-1" aria-hidden="true">
                            <option value="0">Chọn ngoại ngữ</option>
                       	<?php
                            foreach($ngoaingu as $nn)
                            {
                        ?>
                            <option value="<?=$nn['id_ngoai_ngu']; ?>" <?php if(isset($id_ngoai_ngu)) {if($id_nguoi_ngu == $nn['id_ngoai_ngu']) echo 'selected';} ?>><?=$nn['ten_ngoai_ngu'] ?></option>
						<?php
                            }
                        ?>
                       
               			</select>
            
                    </div>
                </div>
                <div class="row tt hs_diadiem">
                	<div class="col-sm-4 col-md-4">
                    	<label class="">Chọn nơi làm việc<i class="red">*</i></label>
                    
                    </div>
                    <div class="col-sm-8 col-md-8">
                    	<select class="form-control" name="dia_diem" tabindex="-1" aria-hidden="true">
                            <option value="0">Chọn nơi làm việc</option>
                         <?php
                            foreach($diadiem as $dd)
                            {
                        ?>
                            <option value="<?=$dd['id_dd']; ?>" <?php if(isset($id_dd)) {if($id_dd == $dd['id_dd']) echo 'selected';} ?>><?=$dd['ten_dd'] ?></option>
						<?php
                            }
                        ?>
                     
               			</select>
            
                    </div>
                </div> 
                <div class="row tt hs_hinhthuclv">
                	<div class="col-sm-4 col-md-4">
                    	<label class="">Hình thức làm việc<i class="red">*</i></label>
                    
                    </div>
                    <div class="col-sm-8 col-md-8">
                    	<select class="form-control" name="hinh_thuc" tabindex="-1" aria-hidden="true">
                            <option value="0">Chọn hình thức làm việc</option>
                         <?php
                            foreach($hinhthuc as $htlv)
                            {
                        ?>
                            <option value="<?=$htlv['hinh_thuc']; ?>"><?=$htlv['hinh_thuc'] ?></option>
						<?php
                            }
                        ?>
                     
               			</select>
            
                    </div>
                </div>
                <div class="row tt hs_mucluong">
                	<div class="col-sm-4 col-md-4">
                    	<label class="">Mong muốn mức lương tối thiểu (VND/tháng)<i class="red">*</i></label>
                    
                    </div>
                    <div class="col-sm-8 col-md-8">
                    	<select class="form-control" name="muc_luong" tabindex="-1" aria-hidden="true">
                            <option value="0">Chọn mức lương</option>
                         <?php
                            foreach($mucluong as $ml)
                            {
                        ?>
                            <option value="<?=$ml['id_ml']; ?>" <?php if(isset($id_ml)) {if($id_ml== $ml['id_ml']) echo 'selected';} ?>><?=$ml['muc_luong'] ?></option>
						<?php
                            }
                        ?>
                     
               			</select>
            
                    </div>
                </div>
                <div class="row tt hs_muctieu">
                	<div class="col-sm-4 col-md-4">
                    	<label class="">Mục tiêu nghề nghiệp</label>
                    
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <textarea name="muc_tieu" placeholder="Gợi ý: 
                   - Mục tiêu nghề nghiệp của bạn trong một vài năm tới là gì? VD: Tìm được môi trường làm việc giúp mình học hỏi thêm kinh nghiệm...
                   - Mục tiêu nghề nghiệp của bạn trong dài hạn (5-10 năm tới) là gì? VD: Trở thành lãnh đạo cấp cao của công ty, có chuyên môn và thu nhập tốt.." class="form-control" value="<?php echo set_value('muctieu')?>" rows="7"></textarea>						
                   		<input type="date"class="hidden" name="ngay_dk" placeholder="" value="<?=date("Y-m-d");?>" />
                     
                    </div>
                </div>
                <div class="row tt" >
                    <div class="col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4">
                        <button type="submit" name="luuhoso" class="btn btn-danger btn-block btn_luuhoso">
                            <i class="fa fa-save fa-lg fa-fw"></i> LƯU
                        </button>
                    </div>
                 </div>
            </div> <!-- end tttongquan-->  
            </form>
            <div class="ttkinhnghiem">
            	<h3><i class=""></i> Kinh Nghiệm Làm Việc <i>(Không bắt buộc)</i></h3>
            
            	<div class="row tt tttencty">
                	<div class="col-sm-4 col-md-4">
                    	<label class="">Tên công ty<i class="red">*</i></label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                    	<input type="text" name="ten_cty" class="form-control"placeholder="Nhập tên Công ty"value="<?php echo set_value('tencty')?>"> 
						 <?php echo form_error('tencty', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                </div>
                <div class="row tt ttchucdanh">
                	<div class="col-sm-4 col-md-4">
                    	<label class="">Chức danh<i class="red">*</i></label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                    	<input type="text" name="chuc_danh" class="form-control"placeholder="Nhập chức danh"value="<?php echo set_value('chucdanh')?>"> 
						 <?php echo form_error('chucdanh', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                </div>
                <div class="row tt ttthoigian">
                	<div class="col-sm-4 col-md-4">
                    	<label class="">Thời gian làm việc<i class="red">*</i></label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                    	<i>Thông tin</i>
                    </div>
                </div>
                <div class="row tt ttmucluong">
                	<div class="col-sm-4 col-md-4">
                    	<label class="">Mức lương</label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                    	<select class="form-control" name="muc_luong_kn" tabindex="-1" aria-hidden="true">
                            <option value="0">Chọn mức lương</option>
                         <?php
                            foreach($mucluong as $ml)
                            {
                        ?>
                            <option value="<?=$ml['id_ml']; ?>" <?php if(isset($id_ml)) {if($id_ml== $ml['id_ml']) echo 'selected';} ?>><?=$ml['muc_luong'] ?></option>
						<?php
                            }
                        ?>
                     
               			</select>
                    </div>
                </div>
                <div class="row tt ttmota">
                	<div class="col-sm-4 col-md-4">
                    	<label class="">Mô tả công việc</label>
                    
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <textarea name="mo_ta" placeholder="" class="form-control" value="<?php echo set_value('mota')?>" rows="5"></textarea>
                     
                    </div>
                </div>
                <div class="row tt ttthanhtich">
                	<div class="col-sm-4 col-md-4">
                    	<label class="">Thành tích đạt được</label>
                    
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <textarea name="thanh_tich" placeholder="" class="form-control" value="<?php echo set_value('thanhtich')?>" rows="5"></textarea>
                     
                    </div>
                </div>
                <div class="row tt" >
                    <div class="col-xs-5 col-xs-offset-2 col-sm-4 col-sm-offset-3 col-md-3 col-md-offset-3">
                        <button type="submit" class="btn btn-danger btn-block btn_red btn_luukinhnghiem">
                            <i class="fa fa-save fa-lg fa-fw"></i> LƯU
                        </button>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-sm-offset-0 col-md-2 col-md-offset-0">
                        <button type="submit" class="btn btn-danger btn-block btn_red btn_huykinhnghiem">
                            <i></i> HỦY
                        </button>
                    </div>
                 </div>
            </div><!-- end ttkinhnghiem--> 
            <div class="tttrinhdo">
            	<h3><i class=""></i> Trình Độ & Bằng Cấp <i>(Không bắt buộc)</i></h3>
            
            	<div class="row tt tttenbangcap">
                	<div class="col-sm-4 col-md-4">
                    	<label>Tên bằng cấp/ Chứng chỉ<i class="red">*</i></label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <input type="text" name="ten_bang_cap" placeholder="" class="form-control" value="<?php echo set_value('tenbangcap')?>"> 
						 <?php echo form_error('tenbangcap', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                     
                    </div>
                </div>
                <div class="row tt tttentruong">
                	<div class="col-sm-4 col-md-4">
                    	<label>Trường/Đơn vị cấp<i class="red">*</i></label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <input type="text" name="ten_truong" placeholder="" class="form-control" value="<?php echo set_value('tentruong')?>"> 
						 <?php echo form_error('tentruong', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                     
                    </div>
                </div>
                <div class="row tt ttthoigian">
                	<div class="col-sm-4 col-md-4">
                    	<label>Thời gian<i class="red">*</i></label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <i> thông tin</i>
                     
                    </div>
                </div>
                <div class="row tt ttchuyennganh">
                	<div class="col-sm-4 col-md-4">
                    	<label>Chuyên ngành<i class="red">*</i></label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <input type="text" name="chuyen_nganh" placeholder="" class="form-control" value="<?php echo set_value('chuyennganh')?>"> 
						 <?php echo form_error('chuyennganh', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                     
                    </div>
                </div>
                <div class="row tt ttxeploai">
                	<div class="col-sm-4 col-md-4">
                    	<label class="">Loại tốt nghiệp<i class="red">*</i></label>
                    
                    </div>
                    <div class="col-sm-8 col-md-8">
                    	<select class="form-control" name="xep_loai" tabindex="-1" aria-hidden="true">
                            <option value="0">Chọn xếp loại </option>
                        </select>
                         
            
                    </div>
                </div>
                <div class="row tt" >
                    <div class="col-xs-5 col-xs-offset-2 col-sm-4 col-sm-offset-3 col-md-3 col-md-offset-3">
                        <button type="submit" class="btn btn-danger btn-block btn_red btn_luubangcap">
                            <i class="fa fa-save fa-lg fa-fw"></i> LƯU
                        </button>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-sm-offset-0 col-md-2 col-md-offset-0">
                        <button type="submit" class="btn btn-danger btn-block btn_red btn_huybangcap">
                            <i></i> HỦY
                        </button>
                    </div>
                 </div>
             </div><!-- end ttbangcap-->
        </div>