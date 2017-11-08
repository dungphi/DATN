	<!-- baidang -->
    <div class="baidang">
        <div class="container">
            
            <div lass= "row">
                <div class="col-xs-9 col-sm-9 col-md-9 ">
                    <div class="baidang_left">
                    	<h3>Hồ sơ người tìm việc trên Toàn Quốc</h3>
                   
                    
					<?php
						foreach($hosotimviec as $tam)
							{
					?>
							<div class="row">
                            <div class= "hosotimviec">
								<div class="col-md-2 hinhanh">
									<a href="<?=base_url('nguoitimviec/thongtinntv/'.$tam['id_ntv']); ?>"><img src="<?=base_url($tam['avatar']); ?>" class="img-responsive" alt=""></a>
								</div>
								<div class=" col-md-9 thongtin">
									<a href="<?=base_url('nguoitimviec/thongtinntv/'.$tam['id_ntv']); ?>"><h4 class="text" data-toggle="tooltip" title="<?=$tam['tieu_de']; ?>"><?=$tam['tieu_de']; ?></h4></a>
                       				<h5 class="text" data-toggle="tooltip" title="<?=$tam['ho'];?> <?=$tam['ten'];?> <?=getAge($tam['ngay_sinh']);?> tuổi giới tính <?=$tam['gioi_tinh']; ?> <?=$tam['kinh_nghiem']; ?> kinh nghiệm"><?=$tam['ten']?> <?=getAge($tam['ngay_sinh']);?> tuổi giới tính <?=$tam['gioi_tinh']; ?> <?=$tam['kinh_nghiem']; ?> kinh nghiệm</h5>
                                    <div class="col-xs-3 col-sm-3 col-md-3"> 
                        					<p class="glyphicon glyphicon-map-marker"> <?= $tam['dia_chi'];?></p>
                                    </div>
                                    <div class="col-xs-3 col-sm-3 col-md-3"> 
                                            <p class="glyphicon glyphicon-usd"> <?= $tam['muc_luong'];?></p>
                                    </div>
                                    <div class="col-xs-3 col-sm-3 col-md-3"> 
                                            <p class="glyphicon glyphicon-list-alt"> <?= $tam['bang_cap'];?></p>
                                    </div>
                                    <div class="col-xs-3 col-sm-3 col-md-3"> 
                                            <p class="glyphicon glyphicon-time"> <?= $tam['ngay_dk'];?></p>
                                    </div>
                                    <div class="clearfix"> </div>
									
								</div>
                                <div class="col-xs-1 col-sm-1 col-md-1 thongtin"> 
                                	<p class="glyphicon glyphicon-star-empty"> </p>
                                </div>	
								</div>
								</div>
						   
						<?php
							}
						?> 
                        </div>
					<div class="clearfix"> </div>
                      
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 baidang_right">
                <h3>Tin quảng cáo</h3>
                	<?php
				foreach($hosotimviec as $tam)
				{
					
    
			?>
            		<div class="hosotimviec">
					<div class="hinhanhqc">
						<img src="<?=base_url($tam['avatar']); ?>" class="img-responsive" alt="" width="200">
                    </div>
                    <div class="thongtinqc">
                    
						<h4 class="text" data-toggle="tooltip" title="<?=$tam['tieu_de']; ?>"><?=$tam['tieu_de']; ?></h4>
                        <h5 class="text" data-toggle="tooltip" title="<?=$tam['ten']?>, <?=getAge($tam['ngay_sinh']);?> tuổi giới tính <?=$tam['gioi_tinh']; ?>, ở <?=$tam['dia_chi']; ?>"><?=$tam['ten']?>, <?=getAge($tam['ngay_sinh']);?> tuổi, giới tính <?=$tam['gioi_tinh']; ?>, ở <?=$tam['dia_chi']; ?></h5>
                        
					</div>
                    </div>
               
			<?php
				}
			?> 
                <div class="clearfix"> </div>
                </div>
            </div>
         </div>
	</div>        	
	<!-- bài đăng-->
      
 <!-- hàm tính tuổi-->
 <?php
 function getAge($birthdate = '0000-00-00')
	{
    if ($birthdate == '0000-00-00') return 'Unknown';
 
    $bits = explode('-', $birthdate);
    $age = date('Y') - $bits[0] - 1;
 
    $arr[1] = 'm';
    $arr[2] = 'd';
 
    for ($i = 1; $arr[$i]; $i++) {
        $n = date($arr[$i]);
        if ($n < $bits[$i])
            break;
        if ($n > $bits[$i]) {
            ++$age;
            break;
        }
    }
    return $age;
	}
    ?>      

