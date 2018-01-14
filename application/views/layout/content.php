<!-- banner -->

<?php
if(isset($dangnhap))
	echo $dangnhap;
?>
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
    <h3>Việc Làm Nổi Bật</h3>
    <ul id="flexiselDemo3">
    	
			<?php
				foreach($vieclamnoibat as $tam)
				{
			
			?>
            	<li>
                	
					<div class="tintuyendung">
                    	<a href="<?=base_url('nhatuyendung/thongtinvieclam/'.$tam['id_vl']); ?>">
						<img src="<?=base_url($tam['avatar']); ?>" class="img-rounded" alt="" width="250" height="150">
						<h4 class="text" data-toggle="tooltip" title="<?=$tam['tieu_de']; ?>"><?=$tam['tieu_de']; ?></h4></a>
                        <h5 class="text" data-toggle="tooltip" title="<?=$tam['ten_cty']; ?>"> <?=$tam['ten_cty'];?></h5>
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
    <div class="baidang" id="vieclam">
        <div class="container">
            
            <div lass= "row">
                <div class="col-xs-12 col-sm-9 col-md-9 ">
                    <div class="baidang_left">
                    	<h3>Thông tin tuyển dụng trên Toàn Quốc</h3>
                    <?php
                   	 foreach($vieclam as $tam)
                    	{
                    ?>
                        <div class="row">
                        	<div class="baituyendung">
                        		<div class="hidden-xs col-sm-2 col-md-2 hinhanh">
                            		<a href="<?=base_url('nhatuyendung/thongtinvieclam/'.$tam['id_vl']); ?>">
                                    <img src="<?=base_url($tam['avatar']); ?>" class="img-responsive" width="150"
                                     height="100"></a></div>
                        		<div class="col-xs-11 col-sm-9 col-md-9 thongtin">
                                    <a href="<?=base_url('nhatuyendung/thongtinvieclam/'.$tam['id_vl']); ?>">
                                    	<h4> <?=$tam['tieu_de']; ?></h4></a>
                                    <h5 class="text"  title="<?=$tam['ten_cty'];?>"><?=$tam['ten_cty'];?></h5>
                                    <div class="col-xs-5 col-sm-3 col-md-3"> 
                                        <p class="glyphicon glyphicon-map-marker"></p> <?= $tam['ten_dd'];?>
                                    </div>
                                    <div class="col-xs-5 col-sm-3 col-md-3"> 
                                        <p class="glyphicon glyphicon-usd"></p> <?= $tam['muc_luong'];?>
                                    </div>
                                    <div class="col-xs-5 col-sm-3 col-md-3"> 
                                        <p class="glyphicon glyphicon-list-alt"></p> <?= $tam['trinh_do'];?>
                                    </div>
                                    <div class="col-xs-5 col-sm-3 col-md-3"> 
                                        <p class="glyphicon glyphicon-time"></p> <?=date('d-m-Y', strtotime($tam['ngay_dk'])); ?>
                                    </div>
                        		</div> 
                                <div class="col-xs-1 col-sm-1 col-md-1 thongtin luuvieclam"> 
                                	<p class="glyphicon glyphicon-star-empty"> </p>
                                </div>
                                <div class="clearfix"> </div>  	
                        	</div>
                    	</div>
					<?php
					}
					echo $this->pagination->create_links();
					?>
                    <div class="clearfix"> </div>
                    </div>
                        
					
                    <div class="baidang_left">
                    	<h3>Hồ sơ người tìm việc trên Toàn Quốc</h3>
					<?php
						foreach($hosotimviec as $tam)
							{
					?>
							<div class="row">
                            <div class= "hosotimviec">
								<div class="col-sm-2 col-md-2 hinhanh">
									<a href="<?=base_url('nguoitimviec/thongtinhoso/'.$tam['id_hs']); ?>"><img src="<?=base_url($tam['avatar']); ?>" class="hidden-xs img-responsive" alt=""></a>
								</div>
								<div class="col-xs-11 col-md-9 thongtin">
									<a href="<?=base_url('nguoitimviec/thongtinhoso/'.$tam['id_hs']); ?>"><h4 class="text" data-toggle="tooltip" title="<?=$tam['tieu_de']; ?>"><?=$tam['tieu_de']; ?></h4></a>
                        			<h5 class="text"  title="<?=$tam['ho'];?> <?=$tam['ten'];?> <?=getAge($tam['ngay_sinh']);?> tuổi giới tính <?=$tam['gioi_tinh']; ?> <?=$tam['ten_kn']; ?> kinh nghiệm"><?=$tam['ten']?> <?=getAge($tam['ngay_sinh']);?> tuổi giới tính <?=$tam['gioi_tinh']; ?> <?=$tam['ten_kn']; ?> kinh nghiệm</h5>
                                    <div class="col-xs-6 col-sm-3 col-md-3"> 
                        					<p class="glyphicon glyphicon-map-marker"></p> <?= $tam['ten_dd'];?>
                                    </div>
                                    <div class="col-xs-6 col-sm-3 col-md-3"> 
                                            <p class="glyphicon glyphicon-usd"></p> <?= $tam['muc_luong'];?>
                                    </div>
                                    <div class="col-xs-6 col-sm-3 col-md-3"> 
                                            <p class="glyphicon glyphicon-list-alt"></p> <?= $tam['trinh_do'];?>
                                    </div>
                                    <div class="col-xs-6 col-sm-3 col-md-3"> 
                                            <p class="glyphicon glyphicon-time"></p> <?= $tam['ngay_dk'];?>
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
                    <div class="col-xs-12 col-md-6 col-md-offset-3 xemthemhoso">
                		<a href=<?=base_url('nguoitimviec'); ?>>
                        	<button type="submit" class="btn btn_default btn-block btn_xemthemhoso" onclick=""> <i class="fa fa-plus fa-lg fa-fw"></i> XEM THÊM HỒ SƠ NGƯỜI TÌM VIỆC
                    		</button></a>
                </div>
                </div>
                <div class="col-sm-3 col-md-3 hidden-xs baidang_right">
                <h3>Hồ Sơ Nổi Bật</h3>
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
                        <h5 class="text"  title="<?=$tam['ten']?>, <?=getAge($tam['ngay_sinh']);?> tuổi giới tính <?=$tam['gioi_tinh']; ?>, ở <?=$tam['ten_dd']; ?>"><?=$tam['ten']?>, <?=getAge($tam['ngay_sinh']);?> tuổi, giới tính <?=$tam['gioi_tinh']; ?>, ở <?=$tam['ten_dd']; ?></h5>
                        
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
			<h2>Cẩm nan nghề nghiệp</h2>
				<div class="col-sm-4 col-md-4 devic-left">
				
					<img src="<?=base_url(); ?>images/camnan/tham-quoc-quan.jpeg" class="" width="300" height="200" alt="">
					
					<h4>Thẩm Quốc Quân: Từ chàng trai nghèo cho đến đối tác lớn của Jack Ma</h4>
					<p>Từ khi còn nhỏ, chàng trai nghèo Thẩm Quốc Quân đã phải lăn lộn nhiều nghề để kiếm tiền. 10 năm sau khi khởi nghiệp, ông đã sở hữu khối tài sản khổng lồ và trở thành đối tác lớn của Jack Ma...</p>
				</div>
				<div class="col-sm-4 col-md-4 devic-left">
					<img src="<?=base_url(); ?>images/camnan/anh1.jpg" class="" width="300" height="200" alt="">
					<h4>Bật mí 4 bí quyết chọn công việc phù hợp cho giới trẻ</h4>
					<p>Nhiều bạn trẻ khi được hỏi “Bạn thích làm gì?” hoặc “Bạn muốn làm gì?”, câu trả lời nhận lại thường là “Tôi không biết!”, “Tôi chưa biết!” hoặc “Làm gì cũng được, miễn có việc!”...</p>
				</div>
				<div class="col-sm-4 col-md-4 devic-left">
					<img src="<?=base_url(); ?>images/camnan/anh2.jpg" class="" width="300" height="200" alt="">
					<h4>Những nỗi khổ của nhà tuyển dụng mùa cuối năm</h4>
					<p> Cuối năm. Những tưởng các công ty rơi vào trạng thái bão hòa, tập trung tổng kết các hoạt động và tạm ngưng việc tuyển dụng thì các doanh nghiệp trong lĩnh vực nhà hàng – khách sạn lại thi đua “treo bảng cần người”... </p>
				</div>
				<div class="clearfix"> </div>
                <div class="col-xs-12 col-md-4 col-md-offset-4 xemthemhoso">
                	<a href=<?=base_url('#'); ?>>
                        	<button type="submit" class="btn btn_default btn-block btn_xemthemhoso" onclick=""> <i class="fa fa-plus fa-lg fa-fw"></i> XEM THÊM CẦM NAN NGHỀ NGHIỆP
                    		</button></a>
                </div>
		</div>
	</div>
	<!-- device -->