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
        <form action="<?= base_url('quanlynguoitimviec/chinhsuataikhoan/'.$nguoitimviec['id_ntv']);?>" method="post" enctype="multipart/form-data">		
            <div class="ttdangnhap">
            	<h3><i class="fa fa-lock fa-lg fa-fw"></i> Thông Tin Đăng Nhập<i class="red"> (Bắt buộc)</i></h3>
                <div class="row ttemail">
                	<div class=" col-sm-4 col-md-4">
                    	<label>Email<i class="red">*</i></label>
                    
                    </div>
                    <div class="col-sm-8 col-md-8">
                    	<input type="email" class="form-control" name="email" value="<?= $nguoitimviec['email'];?><?php set_value('email')?>">
						 <?php echo form_error('email', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                    
                </div>
                <div class="row ttsdt">
                	<div class="col-sm-4 col-md-4">
                    	<label>Số Điện Thoại<i class="red">*</i></label>
                    
                    </div>
                    <div class="col-sm-8 col-md-8">
                 <input type="text" class="form-control" name="dt" placeholder="" value="<?= $nguoitimviec['phone'];?><?php set_value('dt')?>"> 
						<?php echo form_error('dt', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                    
                </div>
                
                
                <div class="row tt ttdoimatkhau">
                	<div class="  col-sm-4 col-md-4">
                    	<label>Đổi mật khẩu<i class="red">*</i></label>
                        
                </div>
              		<div class="  col-sm-8 col-md-8">
						<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#doipass">Đổi mật khẩu</button>
					</div>
                </div>
            </div>
     		
            <div class="ttcanhan">
            	<h3><i class="fa fa-user-circle-o fa-lg fa-fw"></i> Thông Tin Cá Nhân <i class="red">(Bắt buộc)</i></h3>
                <div class="row tt tthoten">
                	<div class="  col-sm-4 col-md-4">
                    	<label>Họ Tên<i class="red">*</i></label>
                    
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                		<input type="text" class="form-control" name="ho" placeholder="" value="<?= $nguoitimviec['ho']; ?><?php set_value('ho')?>"> 
						<?php echo form_error('ho', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                    
                    <div class="col-xs-4 col-sm-4 col-md-4">
                  <input type="text" class="form-control" name="ten" placeholder="" value="<?= $nguoitimviec['ten']; ?><?php set_value('ten');?>"> 
						<?php echo form_error('ten', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                </div>
                <div class="row tt ttngaysinh">
                	<div class="  col-sm-4 col-md-4">
                    	<label>Ngày Sinh<i class="red">*</i></label>
                    
                    </div>
                    <div class="  col-sm-8 col-md-8">
                    <input type="date"class="form-control" name="ngay_sinh" placeholder="" value="<?= $nguoitimviec['ngay_sinh']; ?>" />
                    </div>
                </div>
                <?php
						function checked($value, $v_compare){
						if($value==$v_compare)
							$rs =  'checked="checked"';
						else
							$rs = '';
						return $rs;
							}
					$value = $nguoitimviec['id_gioi_tinh'];
				?>
                <div class="row tt ttgioitinh">
                	<div class="  col-sm-4 col-md-4">
                    	<label>Giới Tính<i class="red">*</i></label>
                    
                    </div>
                    <div class="  col-sm-8 col-md-8">
  						<input type="radio" name="gioi_tinh"<?php echo checked($value,"1") ?>  value="1"> Nam
  						<input type="radio" name="gioi_tinh" <?php echo checked($value,"2") ?> value="2"> Nữ
                    </div>
                    
                </div>
                <?php
					$value = $nguoitimviec['hon_nhan'];
				?>
                <div class="row tt tthonnhan">
                	<div class="  col-sm-4 col-md-4">
                    	<label>Hôn Nhân</label>
                    
                    </div>
                    <div class="  col-sm-8 col-md-8">
                    	<input type="radio" name="hon_nhan" <?php echo checked($value,"Đã lập gia đình") ?> value="Đã lập gia đình"> Đã lập gia đình
  						<input type="radio" name="hon_nhan" <?php echo checked($value,"Độc thân") ?> value="Độc thân"> Độc thân
                    </div>
                </div>
                <div class="row tt ttdiachi">
                	<div class="  col-sm-4 col-md-4">
                    	<label>Địa Chỉ<i class="red">*</i></label>
                    
                    </div>
                    <div class="  col-sm-8 col-md-8">
                    	<input type="text" class="form-control" name="dia_chi" value="<?= $nguoitimviec['dia_chi']; ?>" /> 
						<?php echo form_error('dia_chi', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>'); ?>
                    </div>
                    
                </div>
                
            </div>
        
        	<div class="row" >
                    <div class="col-xs-5 col-xs-offset-2 col-sm-4 col-sm-offset-3 col-md-3 col-md-offset-3">
                        <button type="submit" class="btn btn-danger btn-block btn_red btn_luuchinhsua" name="luu">
                            <i class="fa fa-save fa-lg fa-fw"></i> LƯU
                        </button>
                    </div>
          </form>
                    <div class="col-xs-3 col-sm-3 col-sm-offset-0 col-md-2 col-md-offset-0 huy">
                    	<a href="<?=base_url('Quanlynguoitimviec/quanlytaikhoan'); ?>">
                            <button type="submit" class="btn btn-danger btn-block btn_red btn_huy">
                                <i></i> HỦY
                            </button></a>
                    </div>
                 </div>
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
						<label class="control-label col-sm-3" for="renewpass">Nhập lại mật khẩu:</label>
						<div class="col-sm-9">
							<input type="password" class="form-control" id="renewpass" placeholder="Nhập lại mật khẩu mới">
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onclick="return doi_pass(<?=$nguoitimviec['id_ntv']?>);">Lưu</button>
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
            url:"<?=base_url('quanlynguoitimviec/doi_pass'); ?>",
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

 

  