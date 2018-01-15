<div class="container">

    <div class="row">
    	<div class="col-sm-8  col-md-9 quanlyhoso ">
        	<div class="qlhs">
        		<h3> Quản Lý Việc Làm Đã Nộp </h3>
            </div>

            <div class=" tt tthoso">
            	<h3 class="red"> Danh sách việc làm đã nộp </h3>
                <div class="taohoso">
                	<div class="table-responsive">
						<table class="table table-hover table-bordered">
							<thead>
								<tr>
									<td>Tên việc làm</td>
									<td>Tên công ty</td>
									<td>Ngày hết hạn</td>
									<td colspan="2">Chỉnh sửa</td>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach($ds_vl as $tmp)
								{
								?>
								<tr>
									<td><?=$tmp['tieu_de']?></td>
									<td><?=$tmp['ten_cty']?></td>
									<td><?=date('d-m-Y', strtotime($tmp['ngay_hh'])) ?></td>
									<td><a href="<?=base_url('nhatuyendung/thongtinvieclam/'.$tmp['id_vl']) ?>" class="btn btn-default"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
									<td><button  class="btn btn-default" onClick="xoa_vl(<?=$tmp['id_vl'] ?>)"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
								</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
                </div>
            </div>
            
                
                
                
                
		</div><!--end tthoso-->
<script type="text/javascript">
	function xoa_vl(id){
        if (confirm("Bạn có muốn xóa không?")) {
            $.ajax({
                dataType: "json",
                type:"POST",
                url:"<?=base_url('quanlynhatuyendung/xoa_vl'); ?>",
                data:{id:id},
                success: function(result){
                    if(result == 1){
                        alert("Xóa thành công");
                        setTimeout(function(){
                        	location.reload();
                        },1000);
                    }
					else{
						alert("Lỗi!");
					}
                }
            });
        }
    }
</script>