<div class="container">

    <div class="row">
    	<div class="col-sm-8  col-md-9 quanlyhoso ">
        	<div class="qlhs">
        		<h3> Quản Lý Việc Làm </h3>
            </div>
            <!--<div class="tt tths">
            	<label class="hidden-xs"> Bạn được tạo tối đa 02 hồ sơ (01 hồ sơ trực tuyến và 01 hồ sơ đính kèm từ máy tính). Trong đó chỉ có 01 hồ sơ được “cho phép tìm kiếm” bởi Nhà tuyển dụng. </label>
				<i> Tất cả các Hồ sơ ở trạng thái “Đã duyệt” đều có thể sử dụng để “Nộp hồ sơ” trực tuyến.</i> 
            </div>-->

            <div class=" tt tthoso">
            	<h3 class="red"> Danh sách việc làm đã đăng </h3>
                <div class="taohoso">
                	<div class="table-responsive">
						<table class="table table-hover table-bordered">
							<thead>
								<tr>
									<td>Tiêu đề</td>
									<td>Hạn hộp</td>
									<td>Lượt xem</td>
									<td>Tin Vip</td>
									<td colspan="3">Chỉnh sửa  </td>
									<td>Duyệt</td>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach($ds_vieclam as $tmp)
								{
								?>
								<tr>
									<td><?=$tmp['tieu_de']?></td>
									<td><?=date('d-m-Y', strtotime($tmp['ngay_hh'])) ?></td>
									<td><?=$tmp['luot_xem']?></td>
									<td><?php if($tmp['vip'] == 1) echo 'Vip'; ?></td>
									<td><a href="<?=base_url('nhatuyendung/thongtinvieclam/'.$tmp['id_vl']) ?>" class="btn btn-default"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
									<td><a href="<?=base_url('quanlynhatuyendung/chinhsuavieclam/'.$tmp['id_vl']) ?>" class="btn btn-default"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
									<td><button  class="btn btn-default" onClick="xoa_vl(<?=$tmp['id_vl'] ?>)"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
									<td><?php if($tmp['active_vl'] == 1) echo 'Đã duyệt'; else echo 'Chờ duyệt...'; ?></td>
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