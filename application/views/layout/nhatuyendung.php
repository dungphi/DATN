
<div class="baidang">
        <div class="container">
            
            <div lass= "row">
                <div class="col-xs-9 col-sm-9 col-md-9 ">
                    <div class="baidang_left">
                    	<h3>Thông tin tuyển dụng trên Toàn Quốc</h3>
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
                                    <h4> <?=$tam['tieu_de']; ?></h4>
                                    <h5 > <?=$tam['ten_cty'];?></h5>
                               
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
               </div>
               </div>
               </div>
               </div>
               </div>
               

