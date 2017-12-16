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
						<div class=" col-sm-4 col-md-4">
							<label>Email<i class="red">*</i></label>
						</div>
						<div class="col-sm-8 col-md-8">
							<input type="email" class="form-control" name="email" value="<?= $nhatuyendung['email']; ?>" placeholder="Email">
						</div>
					</div>
					<div class="row ttsdt">
						<div class="col-sm-4 col-md-4">
							<label>Số Điện Thoại<i class="red">*</i></label>
						</div>
						<div class="col-sm-8 col-md-8">
							<input type="text" class="form-control" name="phone" placeholder="Số điện thoại" value="<?= $nhatuyendung['phone']; ?>">
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
					<div class="row tt tthoten">
						<div class="  col-sm-4 col-md-4">
							<label>Tên công ty<i class="red">*</i></label>

						</div>
						<div class="col-sm-8 col-md-8">
							<input type="text" class="form-control" name="ten_cty" value="<?= $nhatuyendung['ten_cty']; ?>" placeholder="Tên công ty">
						</div>
					</div>
					<div class="row tt ttngaysinh">
						<div class="  col-sm-4 col-md-4">
							<label>Đia chỉ<i class="red">*</i></label>
						</div>
						<div class="  col-sm-8 col-md-8">
							<input type="text" class="form-control" name="dia_chi" value="<?= $nhatuyendung['dia_chi']; ?>" placeholder="Địa chỉ">
						</div>
					</div>
					<div class="row tt ttgioitinh">
						<div class="  col-sm-4 col-md-4">
							<label>Mã số thuế<i class="red">*</i></label>

						</div>
						<div class="  col-sm-8 col-md-8">
							<input type="text" name="ms_thue" class="form-control" value="<?=$nhatuyendung['ms_thue'] ?>" placeholder="Mã số thuế">
						</div>
					</div>
					<div class="row tt tthonnhan">
						<div class="  col-sm-4 col-md-4">
							<label>Người liên hệ</label>

						</div>
						<div class="  col-sm-8 col-md-8">
							<input type="text" name="ten_lh" class="form-control" value="<?=$nhatuyendung['ten_lh'] ?>" placeholder="Người liên hệ">
						</div>
					</div>
					<div class="row tt ttdiachi">
						<div class="  col-sm-4 col-md-4">
							<label>Email liên hệ<i class="red">*</i></label>

						</div>
						<div class="  col-sm-8 col-md-8">
							<input type="email" class="form-control" name="email_lh" placeholder="Email liên hệ" value="<?=$nhatuyendung['email_lh']; ?>">
						</div>
					</div>
					<div class="row tt tthonnhan">
						<div class="  col-sm-4 col-md-4">
							<label>Điện thoại liên hệ</label>
						</div>
						<div class="  col-sm-8 col-md-8">
							<input type="text" name="sdt_lh" class="form-control" value="<?=$nhatuyendung['sdt_lh'] ?>" placeholder="Điện thoại liên hệ">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-5 col-xs-offset-2 col-sm-4 col-sm-offset-3 col-md-3 col-md-offset-3">
						<button type="submit" class="btn btn-danger btn-block btn_red btn_luuchinhsua" name="luu">
                            <i class="fa fa-save fa-lg fa-fw"></i> LƯU
                        </button>
					</div>
					<div class="col-xs-3 col-sm-3 col-sm-offset-0 col-md-2 col-md-offset-0 huy">
						<a href="<?=base_url('Quanlynhatuyendung/quanlytaikhoan'); ?>">
							<a type="submit" class="btn btn-danger btn-block btn_red btn_huy" href="<?=base_url('quanlynhatuyendung/quanlytaikhoan')?>">
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
					alert("Mật khẩu cũ không dúng!");
				}
				else{
					alert("Lỗi!")
				}
            }
        });
    }
</script>