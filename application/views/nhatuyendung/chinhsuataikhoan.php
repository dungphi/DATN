<?php
if(isset($thongbao))
	echo $thongbao;
?>
<div class="container">
	<div class="row">
		<div class="col-sm-8  col-md-9 chinhsuataikhoan ">
			<div class="cstk">
				<h3>Chỉnh Sửa Tài Khoản</h3>
			</div>
			<form action="<?=base_url('quanlynhatuyendung/chinhsuataikhoan/'.$nhatuyendung['id_ntd'])?>" method="post" enctype="multipart/form-data">
				<div class="ttdangnhap">
					<h3><i class="fa fa-lock fa-lg fa-fw"></i> Thông Tin Đăng Nhập<i class="red"> (Bắt buộc)</i></h3>
					<div class="row ttemail">
						<div class="col-sm-4 col-md-4">
							<label for="email">Email<i class="red">*</i></label>
						</div>
						<div class="col-sm-8 col-md-8">
							<input type="email" class="form-control" name="email" id="email" value="<?= $nhatuyendung['email']; ?>" placeholder="">
						</div>
					</div>
					<div class="row ttsdt">
						<div class="col-sm-4 col-md-4">
							<label>Số Điện Thoại<i class="red">*</i></label>
						</div>
						<div class="col-sm-8 col-md-8">
							<input type="text" class="form-control" name="phone" id="phone" placeholder="" value="<?= $nhatuyendung['phone']; ?>">
						</div>
					</div>
					<div class="row tt ttnhaplaimatkhau">
						<div class="  col-sm-4 col-md-4">
							<label>Đổi mật khẩu</label>
						</div>
						<div class="  col-sm-8 col-md-8">
							<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#doipass">Đổi mật khẩu</button>
						</div>
					</div>
				</div>
				<div class="ttcanhan">
					<h3><i class="fa fa-user-circle-o fa-lg fa-fw"></i> Thông Tin Doanh Nghiệp <i class="red">(Bắt buộc)</i></h3>
					<div class="row">
						<div class="col-sm-4 tt">
							<label for="avatar">Hình đại diện</label>
						</div>
						<div class="col-sm-8">
							<label for="avatar" onClick="return chonhinh()"><img src="<?php if($nhatuyendung['avatar'] == '') {echo base_url('images/no-img.png');} else echo base_url().$nhatuyendung['avatar']; ?>" alt="" id="images" width="200px"></label>
							<input name="avatar" id="avatar" type="file" class="hidden-lg hidden-md hidden-sm hidden-xs">
							<input name="img_upload" id="avatar" type="text" class="hidden-lg hidden-md hidden-sm hidden-xs" value="<?=$nhatuyendung['avatar'];?>">
                        </div>
					</div>
					<div class="row tt tthoten">
						<div class="  col-sm-4 col-md-4">
							<label>Tên công ty<i class="red">*</i></label>

						</div>
						<div class="col-sm-8 col-md-8">
							<input type="text" class="form-control" name="ten_cty" id="ten_cty" value="<?= $nhatuyendung['ten_cty']; ?>" placeholder="">
						</div>
					</div>
					<div class="row tt ttngaysinh">
						<div class="  col-sm-4 col-md-4">
							<label>Đia chỉ<i class="red">*</i></label>
						</div>
						<div class="  col-sm-8 col-md-8">
							<input type="text" class="form-control" name="dia_chi" id="dia_chi" value="<?= $nhatuyendung['dia_chi']; ?>" placeholder="">
						</div>
					</div>
					<div class="row tt ttgioitinh">
						<div class="  col-sm-4 col-md-4">
							<label>Mã số thuế<i class="red"></i></label>

						</div>
						<div class="  col-sm-8 col-md-8">
							<input type="text" name="ms_thue" id="ms_thue" class="form-control" value="<?=$nhatuyendung['ms_thue'] ?>" placeholder="">
						</div>
					</div>
					<div class="row tt tthonnhan">
						<div class="  col-sm-4 col-md-4">
							<label>Người liên hệ</label>

						</div>
						<div class="  col-sm-8 col-md-8">
							<input type="text" name="ten_lh" class="form-control" value="<?=$nhatuyendung['ten_lh'] ?>" placeholder="">
						</div>
					</div>
					<div class="row tt ttdiachi">
						<div class="  col-sm-4 col-md-4">
							<label>Email liên hệ<i class="red"></i></label>

						</div>
						<div class="  col-sm-8 col-md-8">
							<input type="email" class="form-control" name="email_lh"  id="email_lh"placeholder="" value="<?=$nhatuyendung['email_lh']; ?>">
						</div>
					</div>
					<div class="row tt tthonnhan">
						<div class="  col-sm-4 col-md-4">
							<label>Điện thoại liên hệ</label>
						</div>
						<div class="  col-sm-8 col-md-8">
							<input type="text" name="sdt_lh" id="sdt_lh" class="form-control" value="<?=$nhatuyendung['sdt_lh'] ?>" placeholder="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-5 col-xs-offset-2 col-sm-4 col-sm-offset-3 col-md-3 col-md-offset-3">
						<button type="submit" class="btn btn-danger btn-block btn_red btn_luuchinhsua" name="luu" id="luu">
                            <i class="fa fa-save fa-lg fa-fw"></i> LƯU
                        </button>
					</div>
					<div class="col-xs-3 col-sm-3 col-sm-offset-0 col-md-2 col-md-offset-0 huy">
						<a href="<?=base_url('Quanlynhatuyendung/quanlytaikhoan'); ?>">
							<a class="btn btn-danger btn-block btn_red btn_huy" href="<?=base_url('quanlynhatuyendung/quanlytaikhoan')?>">
								<i></i> HỦY
							</a>
						</a>
					</div>
				</div>
			</form>
		</div>

<!--modal đổi mật khẩu-->
<div id="doipass" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Đổi mật khẩu</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-sm-3" for="pass">Mật khẩu cũ:</label>
						<div class="col-sm-9">
							<input type="password" class="form-control" id="pass" placeholder="Mật khẩu cũ">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="newpass">Mật khẩu mới:</label>
						<div class="col-sm-9">
							<input type="password" class="form-control" id="newpass" placeholder="Mật khẩu mới">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="renewpass">nhập lại mật khẩu mới:</label>
						<div class="col-sm-9">
							<input type="password" class="form-control" id="renewpass" placeholder="Nhập lại mật khẩu mới">
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onclick="return doi_pass(<?=$nhatuyendung['id_ntd']?>);">Lưu</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
			</div>
		</div>

	</div>
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
	$('#avatar').change(function () {
        if ( window.FileReader ) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#images').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    })
	}
</script>