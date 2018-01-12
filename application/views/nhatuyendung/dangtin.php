<div class="container">

    <div class="row">
    	<div class="col-sm-8  col-md-9 taohoso ">
        	<div class="ths">
				<h3>Đăng tin tuyển dụng</h3>
            </div>
        
        	<div class="tt tttaohoso">
        		<i> - Yêu cầu viết tiếng Việt <label>có dấu</label>, không viết chữ in hoa (trừ chữ cái đầu câu).</i></br>
				<i>- Các tin tuyển dụng không đúng quy định, không đạt chất lượng, nội dung không nghiêm túc sẽ bị xóa không cần báo trước.</i>
        	</div>
				<form action="<?=base_url('quanlynhatuyendung/dangtin')?>" method="post" enctype="multipart/form-data">
					<div class="tttongquan">
						<h3><i class=""></i> Thông Tin Tổng Quan <i class="red">( Bắt buộc)</i> ---- chưa xong</h3>

						<div class="row tt tieudehs">
							<div class="col-sm-4 col-md-4">
								<label class="">Tiêu đề<i class="red">*</i></label>

							</div>
							<div class="col-sm-8 col-md-8">
								<input type="text" name="tieu_de" placeholder="VD: Nhân viên Bán Hàng" class="form-control" value="<?php echo set_value('tieu_de')?>"> 
								<?php echo form_error('tieu_de', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
							</div>

						</div>
						<div class="row tt hs_nganhnghe">
							<div class="col-sm-4 col-md-4">
								<label class="">Ngành nghề<i class="red">*</i></label>

							</div>
							<div class="col-sm-8 col-md-8">
								<select class="form-control" name="id_nganh" tabindex="-1" aria-hidden="true">
									<option value="">Chọn ngành nghề</option>
								<?php
									foreach($nganhnghe as $nn)
									{
								?>
									<option value="<?=$nn['id_nn']; ?>" <?php if(set_value('id_nganh') == $nn['id_nn']) echo 'selected'; ?>><?=$nn['ten_nn'] ?></option>
								<?php
									}
								?>

								</select>
								<?php echo form_error('id_nganh', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
							</div>
						</div>
						<div class="row tt hs_kinhnghiem">
							<div class="col-sm-4 col-md-4">
								<label class="">Số năm kinh nghiệm<i class="red">*</i></label>

							</div>
							<div class="col-sm-8 col-md-8">
								<select class="form-control" name="id_kinh_nghiem" tabindex="-1" aria-hidden="true">
									<option value="">Chọn số năm</option>
								<?php
									foreach($kinhnghiem as $kn)
									{
								?>
									<option value="<?=$kn['id_kn']; ?>" <?php if(set_value('id_kinh_nghiem') == $kn['id_kn']) echo 'selected'; ?>><?=$kn['ten_kn'] ?></option>
								<?php
									}
								?>

								</select>
								<?php echo form_error('id_kinh_nghiem', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
							</div>
						</div>
						<div class="row tt hs_mucluong">
							<div class="col-sm-4 col-md-4">
								<label class="">Mức lương (VND/tháng)<i class="red">*</i></label>

							</div>
							<div class="col-sm-8 col-md-8">
								<select class="form-control" name="id_muc_luong" tabindex="-1" aria-hidden="true">
									<option value="">Chọn mức lương</option>
								 <?php
									foreach($mucluong as $ml)
									{
								?>
									<option value="<?=$ml['id_ml']; ?>" <?php if(set_value('id_muc_luong') == $ml['id_ml']) echo 'selected'; ?>><?=$ml['muc_luong'] ?></option>
								<?php
									}
								?>

								</select>
								<?php echo form_error('id_muc_luong', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
							</div>
						</div>
						<div class="row tt hs_diadiem">
							<div class="col-sm-4 col-md-4">
								<label class="">Địa điểm làm việc<i class="red">*</i></label>

							</div>
							<div class="col-sm-8 col-md-8">
								<select class="form-control" name="id_ddlv" tabindex="-1" aria-hidden="true">
									<option value="">Chọn nơi làm việc</option>
								 <?php
									foreach($diadiem as $dd)
									{
								?>
									<option value="<?=$dd['id_dd']; ?>" <?php if(set_value('id_ddlv') == $dd['id_dd']) echo 'selected'; ?>><?=$dd['ten_dd'] ?></option>
								<?php
									}
								?>

								</select>
								<?php echo form_error('id_ddlv', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
							</div>
						</div> 
						<div class="row tt hs_trinhdohs">
							<div class="col-sm-4 col-md-4">
								<label class="">Trình độ<i class="red">*</i></label>

							</div>
							<div class="col-sm-8 col-md-8">
								<select class="form-control" name="id_trinh_do" tabindex="-1" aria-hidden="true">
									<option value="">Chọn trình độ</option>
								<?php
									foreach($trinhdo as $td)
									{
								?>
									<option value="<?=$td['id_td']; ?>" <?php if(set_value('id_trinh_do') == $td['id_td']) echo 'selected'; ?>><?=$td['trinh_do'] ?></option>
								<?php
									}
								?>

								</select>
								<?php echo form_error('id_trinh_do', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
							</div>
						</div> 
						
						<div class="row tt hs_capbac">
							<div class="col-sm-4 col-md-4">
								<label class="">Chức vụ<i class="red">*</i></label>

							</div>
							<div class="col-sm-8 col-md-8">
								<select class="form-control" name="chuc_vu" tabindex="-1" aria-hidden="true">
									<option value="">Chọn cấp bậc</option>
								<?php
									foreach($capbac as $cb)
									{
								?>
									<option value="<?=$cb['id_cb']; ?>" <?php if(set_value('chuc_vu') == $cb['id_cb']) echo 'selected'; ?>><?=$cb['cap_bac'] ?></option>
								<?php
									}
								?>

								</select>
								<?php echo form_error('chuc_vu', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
							</div>
						</div>
						<div class="row tt hs_ngoaingu">
							<div class="col-sm-4 col-md-4">
								<label class="">Ngoại ngữ</label>

							</div>
							<div class="col-sm-8 col-md-8">
								<select class="form-control" name="id_ngoai_ngu" tabindex="-1" aria-hidden="true">
									<option value="">Chọn ngoại ngữ</option>
								<?php
									foreach($ngoaingu as $nn)
									{
								?>
									<option value="<?=$nn['id_ngoai_ngu']; ?>" <?php if(set_value('id_ngoai_ngu') == $nn['id_ngoai_ngu']) echo 'selected'; ?>><?=$nn['ten_ngoai_ngu'] ?></option>
								<?php
									}
								?>

								</select>
								<?php echo form_error('id_ngoai_ngu', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
							</div>
						</div>
						<div class="row tt hs_hinhthuclv">
							<div class="col-sm-4 col-md-4">
								<label class="">Hình thức làm việc<i class="red">*</i></label>

							</div>
							<div class="col-sm-8 col-md-8">
								<select class="form-control" name="hinh_thuc_lv" tabindex="-1" aria-hidden="true">
									<option value="">Chọn hình thức làm việc</option>
								 <?php
									foreach($hinhthuc as $htlv)
									{
								?>
									<option value="<?=$htlv['id_htlv']; ?>" <?php if(set_value('hinh_thuc_lv') == $htlv['id_htlv']) echo 'selected'; ?>><?=$htlv['hinh_thuc'] ?></option>
								<?php
									}
								?>

								</select>
								<?php echo form_error('hinh_thuc_lv', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
							</div>
						</div>
						<div class="row tt hs_hinhthuclv">
							<div class="col-sm-4 col-md-4">
								<label class="">Yêu cầu Giới tính<i class="red">*</i></label>

							</div>
							<div class="col-sm-8 col-md-8">
								<select class="form-control" name="yc_gioi_tinh" tabindex="-1" aria-hidden="true">
									<option value="">Chọn giới tính</option>
								 <?php
									foreach($gioitinh as $gt)
									{
								?>
									<option value="<?=$gt['id_gt']; ?>" <?php if(set_value('yc_gioi_tinh') == $gt['id_gt']) echo 'selected'; ?>><?=$gt['gioi_tinh'] ?></option>
								<?php
									}
								?>

								</select>
								<?php echo form_error('yc_gioi_tinh', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
							</div>
						</div>
						<div class="row tt hs_hinhthuclv">
							<div class="col-sm-4 col-md-4">
								<label class="">Hạn nộp<i class="red">*</i></label>
							</div>
							<div class="col-sm-8 col-md-8">
								<input type="date" name="ngay_hh" value="<?=set_value('ngay_hh') ?>" class="form-control">
								<?php echo form_error('ngay_hh', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
							</div>
						</div>
						<div class="row tt hs_hinhthuclv">
							<div class="col-sm-4 col-md-4">
								<label class="">Số lượng</label>

							</div>
							<div class="col-sm-8 col-md-8">
								<input type="number" name="so_luong" class="form-control" value="<?=set_value('so_luong') ?>">
							</div>
						</div>
						<div class="row tt hs_hinhthuclv">
							<div class="col-sm-4 tt">
								<label for="hinh_anh">Hình ảnh hiển thị</label>
							</div>
							<div class="col-sm-8">
								<label for="hinh_anh" onClick="return chonhinh()"><img src="<?=base_url('images/no-img.png') ?>" alt="" id="images" width="200px"></label>
								<input name="hinh_anh" id="hinh_anh" type="file" class="hidden-lg hidden-md hidden-sm hidden-xs">
							</div>
						</div>
						<div class="row tt hs_muctieu">
							<div class="col-sm-4 col-md-4">
								<label class="">Mô tả</label>
							</div>
							<div class="col-sm-8 col-md-8">
								<textarea name="mo_ta" id="mo_ta" value="" rows="7"><?=set_value('mo_ta') ?></textarea>
								<?php echo form_error('mo_ta', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
							</div>
						</div>
						<div class="row tt" >
							<div class="col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4">
								<button type="submit" class="btn btn-danger btn-block btn_luuhoso" name="dangtin">
									<i class="fa fa-save fa-lg fa-fw"></i> ĐĂNG TIN
								</button>
							</div>
						 </div>
					</div> <!-- end tttongquan-->  
            </form>
        </div>
<script type="text/javascript">
	function doi_pass(id){
        var pass   = $('#pass').val();
        var newpass   = $('#newpass').val();
        var renewpass   = $('#renewpass').val();
        $.ajax({
            dataType: "json",
            type:"POST",
            url:"<?=base_url('quanlynhatuyendung/doi_pass'); ?>",
            data:{id:id,pass:pass,newpass:newpass,renewpass:renewpass},
            success: function(result){
                if(result == 1){
                    alert("Đổi mật khẩu thành công");
					setTimeout(function(){
                        	location.reload();
                        },1000);
                }else if(result == 2){
					alert("Mật khẩu mới không trùng khớp!");
				}else if(result == 3){
					alert("Mật khẩu cũ không đúng!");
				}
				else{
					alert("Lỗi!")
				}
            }
        });
    }
	$(document).ready(function(){
		$("#luu").click(function(event){
			var email = $('#email').val();
			var phone = $('#phone').val();
			var ten_cty = $('#ten_cty').val();
			var dia_chi = $('#dia_chi').val();
			var ms_thue = $('#ms_thue').val();
			var email_lh = $('#email_lh').val();
			var sdt_lh = $('#sdt_lh').val();
			var check_email = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			var check_phone = /^([0-9]{10,11})$/;
			var check_number = /^[0-9]+$/;
			if(!check_email.test(email)){
				event.preventDefault();
				alert("Email không hợp lệ.");
				document.getElementById("email").style.border = '1px solid red';
			}else if(!check_phone.test(phone)){
				event.preventDefault();
				alert("Số điện thoại không hợp lệ.");
				document.getElementById("phone").style.border = '1px solid red';
			}else if(ten_cty == ''){
				event.preventDefault();
				alert("Bạn chưa nhập tên công ty.");
				document.getElementById("ten_cty").style.border = '1px solid red';
			}else if(dia_chi == ''){
				event.preventDefault();
				alert("Bạn chưa nhập địa chỉ.");
				document.getElementById("dia_chi").style.border = '1px solid red';
			}else if(!check_number.test(ms_thue)){
				event.preventDefault();
				alert("Mã số thuế là số.");
				document.getElementById("ms_thue").style.border = '1px solid red';
			}else if(!check_email.test(email_lh)){
				event.preventDefault();
				alert("Email không hợp lệ.");
				document.getElementById("email_lh").style.border = '1px solid red';
			}else if(!check_phone.test(sdt_lh)){
				event.preventDefault();
				alert("Số điện thoại không hợp lệ.");
				document.getElementById("sdt_lh").style.border = '1px solid red';
			}
		});
	});
	function chonhinh() 
	{
	$('#hinh_anh').change(function () {
        if ( window.FileReader ) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#images').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    })
	}
	tinymce.init({
		selector: 'textarea',
		height: 300,
		theme: 'modern',
		plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
		toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
		image_advtab: true,
		templates: [
		{ title: 'Test template 1', content: 'Test 1' },
		{ title: 'Test template 2', content: 'Test 2' }
		],
		content_css: [
		'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
		'//www.tinymce.com/css/codepen.min.css'
		]
	});
</script>