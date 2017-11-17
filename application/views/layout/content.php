<!-- banner -->

<div class="banner">
	<div class="header-slider">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<li>
						<img src="<?=base_url(); ?>images/viec1.jpg" class="img-responsive" alt="">

					</li>
					<li>
						<img src="<?=base_url(); ?>images/viec2.jpg" class="img-responsive" alt="">

					</li>
					<li>
						<img src="<?=base_url(); ?>images/viec3.jpg" class="img-responsive" alt="">

					</li>


				</ul>
			</div>
		 </div>
	</div>
</div>
<!-- banner -->	

<!-- lorem -->
<div class="container">
	<div class="lorem">
		<div class="lo-rm">
			<div class="col-md-6 lorem-top">
				<a href="<?=base_url('nguoitimviec'); ?>">
					<div class="lorem-left">
						<h3>Người Tìm Việc</h3>
						<p>Hơn 45,000 nhân sự cần tìm việc làm với đầy đủ thông tin, kinh nghiệm làm việc,ngành nghề, mức lương,... được cập nhật 24/7 tại Việc Làm Online </p>
					</div>

					<div class="lorem-right">
						<img src="<?=base_url(); ?>images/tvl.png" class="img-responsive" alt=""/>
					</div>
				</a>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-6 lorem-top1">
				<a href="<?=base_url('nhatuyendung'); ?>">
					<div class="lorem-left">
						<h3>Nhà Tuyển Dụng</h3>
						<p>Tìm việc nhanh với hơn 200,000 bản tin tìm việc làm thuộc gần 50 nhóm ngành nghề khác nhau với đầy đủ các lĩnh vực cập nhật 24/7 tại Việc Làm Online </p>
					</div>

					<div class="lorem-right">
						<img src="<?=base_url(); ?>images/ntd.png" class="img-responsive" alt=""/>
					</div>
				</a>
				<div class="clearfix"> </div>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- lorem -->
</div>

    <div class="container Demo3" ><!--class=Demo3>-->
    <h3>Tin Nổi Bật</h3>
    <ul id="flexiselDemo3">
    	
			<?php
				foreach($vieclam as $tam)
				{
			
			?>
            	<li>
					<div class="tintuyendung">
						<img src="<?=base_url($tam['hinh_anh']); ?>" class="img-rounded" alt="" width="250" height="150">
						<h4 class="text" data-toggle="tooltip" title="<?=$tam['tieu_de']; ?>"><?=$tam['tieu_de']; ?></h4>
                        <h5 class="text" data-toggle="tooltip" title="<?=$tam['ten_cty']; ?>"> <?=$tam['ten_cty'];?></h5>
					</div>
					
                </li>
			<?php
				}
			?> 
        
         
			<?php
				foreach($hosotimviec as $tam)
				{
					
    
			?>
            	<li>
					<div class="tintimviec">
						<img src="<?=base_url($tam['avatar']); ?>" class="img-rounded" alt="" width="250" height="150">
						<h4 class="text" data-toggle="tooltip" title="<?=$tam['tieu_de']; ?>"><?=$tam['tieu_de']; ?></h4>
                        <h5 class="text" data-toggle="tooltip" title="<?=$tam['ten']?>, <?=getAge($tam['ngay_sinh']);?> tuổi giới tính <?=$tam['gioi_tinh']; ?>, ở <?=$tam['dia_chi']; ?>"><?=$tam['ten']?>, <?=getAge($tam['ngay_sinh']);?> tuổi, giới tính <?=$tam['gioi_tinh']; ?>, ở <?=$tam['dia_chi']; ?></h5>
                        
					</div>
                </li>
			<?php
				}
			?> 
                                                         
	</ul>    
<div class="clearout">
</div>
 </div>
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
<script>
    $("#flexiselDemo3").flexisel({
        visibleItems: 5,
        itemsToScroll: 1,         
        autoPlay: {
            enable: true,
            interval: 5000,
            pauseOnHover: true
        }        
    });
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip(); 
	});
</script>
	<!-- baidang -->
    <div class="baidang">
        <div class="container">
            
            <div lass= "row">
                <div class="col-xs-9 col-sm-9 col-md-9 ">
                    <div class="baidang_left">
                    	<h3>Thông tin tìm việc làm,tuyển dụng trên Toàn Quốc</h3>
                    <?php
                   	 foreach($vieclam as $tam)
                    	{
                    ?>
                        <div class="row">
                        	<div class="baituyendung">
                        		<div class="col-xs-2 col-sm-2 col-md-2 hinhanh">
                            		<img src="<?=base_url($tam['hinh_anh']); ?>" class="img-responsive" alt="" width="150" height="100">
                        		</div>
                        		<div class="col-xs-9 col-sm-9 col-md-9 thongtin">
                                    <h4 class="text"  title="<?=$tam['tieu_de']; ?>"><?=$tam['tieu_de']; ?></h4>
                                    <h5 class="text"  title="<?=$tam['ten_cty'];?>"><?=$tam['ten_cty'];?></h5>
                               
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
                            
                        		</div> 
                                <div class="col-xs-1 col-sm-1 col-md-1 thongtin"> 
                                	<p class="glyphicon glyphicon-star-empty"> </p>
                                </div>  	
                        	</div>
                    	</div>
					<?php
					}
					?>
                    
					<?php
						foreach($hosotimviec as $tam)
							{
					?>
							<div class="row">
                            <div class= "hosotimviec">
								<div class="col-md-2 hinhanh">
									<img src="<?=base_url($tam['avatar']); ?>" class="img-responsive" alt="">
								</div>
								<div class=" col-md-9 thongtin">
									<h4 class="text"  title="<?=$tam['tieu_de']; ?>"><?=$tam['tieu_de']; ?></h4>
                        			<h5 class="text"  title="<?=$tam['ho'];?> <?=$tam['ten'];?> <?=getAge($tam['ngay_sinh']);?> tuổi giới tính <?=$tam['gioi_tinh']; ?> <?=$tam['kinh_nghiem']; ?> kinh nghiệm"><?=$tam['ten']?> <?=getAge($tam['ngay_sinh']);?> tuổi giới tính <?=$tam['gioi_tinh']; ?> <?=$tam['kinh_nghiem']; ?> kinh nghiệm</h5>
                                    <div class="col-xs-3 col-sm-3 col-md-3"> 
                        					<p class="glyphicon glyphicon-map-marker"> <?= $tam['dia_chi'];?></p>
                                    </div>
                                    <div class="col-xs-3 col-sm-3 col-md-3"> 
                                            <p class="glyphicon glyphicon-usd"> <?= $tam['muc_luong'];?></p>
                                    </div>
                                    <div class="col-xs-3 col-sm-3 col-md-3"> 
                                            <p class="glyphicon glyphicon-list-alt"> <?= $tam['trinh_do'];?></p>
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
                    
						<h4 class="text"  title="<?=$tam['tieu_de']; ?>"><?=$tam['tieu_de']; ?></h4>
                        <h5 class="text"  title="<?=$tam['ten']?>, <?=getAge($tam['ngay_sinh']);?> tuổi giới tính <?=$tam['gioi_tinh']; ?>, ở <?=$tam['dia_chi']; ?>"><?=$tam['ten']?>, <?=getAge($tam['ngay_sinh']);?> tuổi, giới tính <?=$tam['gioi_tinh']; ?>, ở <?=$tam['dia_chi']; ?></h5>
                        
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
	<!-- device -->
	<div class="device">
		<div class="container">
			<h2>Cẩm nang nghề nghiệp</h2>
				<div class="col-md-4 devic-left">
				
					<img src="<?=base_url(); ?>images/4.jpg" class="img-responsive" alt="">
					
					<h4><span>25/</span>March</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever </p>
				</div>
				<div class="col-md-4 devic-left">
					<img src="<?=base_url(); ?>images/3.jpg" class="img-responsive" alt="">
					<h4><span>25/</span>April</h4>
					<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap</p>
				</div>
				<div class="col-md-4 devic-left">
					<img src="<?=base_url(); ?>images/6.jpg" class="img-responsive" alt="">
					<h4><span>25/</span>May</h4>
					<p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing </p>
				</div>
				<div class="clearfix"> </div>
		</div>
	</div>
	<!-- device -->