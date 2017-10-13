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
	<!-- Feature -->
<div class="Feature">
		<div class="container">
			<h3>Tin Nổi Bật</h3>
			<div class="feature-top">
			<?php
				foreach($vieclam as $tam)
				{
			?>
				<div class="col-md-3 service-left">
					<img src="<?=base_url($tam['hinh_anh']); ?>" class="img-responsive" alt="">
					<h3>Tuyển <?=$tam['ten_viec']; ?></h3>
					
				</div>
			<?php
				}
			?>
            
            <?php
				foreach($nguoitimviec as $tam)
				
				{
			?>
				<div class="col-md-3 service-left">
					<img src="<?=base_url(); ?>images/10.png" class="img-responsive" alt="">
					<h3><?=$tam['ten']?> ,giới tính <?=$tam['gioi_tinh']; ?>,ở <?=$tam['dia_chi']; ?></h3>
                </div>
            <?php
				}
			?>
			
			<!--	<div class="col-md-3 service-left">
					<img src="<?=base_url(); ?>images/11.png" class="img-responsive" alt="">
					<h3> chua xong</h3>
				</div>
            
				
				<div class="col-md-3 service-left">
					<img src="<?=base_url(); ?>images/12.png" class="img-responsive" alt="">
					<p>with the release of Letraset sheets Letraset sheets Lorem Ipsum containing containing Lorem</p>
				</div>-->
					<div class="clearfix"> </div>
			</div>
		<!--	<div class="feature-top">
				<div class="col-md-3 service-left">
					<img src="<?=base_url(); ?>images/5.png" class="img-responsive" alt="">
					<p>containing Lorem sheets containing Lorem Ipsum passages, and more release Letraset rece</p>
				</div>
				<div class="col-md-3 service-left">
					<img src="<?=base_url(); ?>images/6.png" class="img-responsive" alt="">
					<p>with the release Letraset sheets Lorem Ipsum passages containing of Letraset sheets  </p>
				</div>
				<div class="col-md-3 service-left">
					<img src="<?=base_url(); ?>images/7.png" class="img-responsive" alt="">
					<p>with the release of Letraset sheets Letraset sheets Lorem Ipsum containing containing Lorem</p>
				</div>
				<div class="col-md-3 service-left">
					<img src="<?=base_url(); ?>images/8.png" class="img-responsive" alt="">
					<p> Letraset sheets with the release Letraset sheets Lorem Ipsum containing Lorem Ipsum passages</p>
				</div>
					<div class="clearfix"> </div>
			</div>-->
		</div> 
	</div>    
	<!-- Feature -->
    
    <ul id="flexiselDemo3">
    	<li><div class="feature-top">
			<?php
				foreach($vieclam as $tam)
				{
			?>
				<div class="col-md-3 service-left">
					<img src="<?=base_url(); ?>images/login.png" class="img-responsive" alt="">
					<h3>Tuyển <?=$tam['ten_viec']; ?></h3>
					
				</div>
			<?php
				}
			?> </div>
            </li>
    <li><img src="images/3.jpg" /></li>
    <li><img src="images/4.jpg" /></li>                                              
</ul>    
<div class="clearout">
</div>

    <script>
    $("#flexiselDemo3").flexisel({
        visibleItems: 3,
        itemsToScroll: 1,         
        autoPlay: {
            enable: true,
            interval: 5000,
            pauseOnHover: true
        }        
    });
    </script>
	<!-- hello -->
	<div class="hello">
		<div class="container">
		<h3>HELLO THERE!</h3>
			<div class="col-md-8 hello-left">
				
				<h5>Welcome To Our Business Company Site</h5>
				<div class="hello-1">
					<img src="<?=base_url(); ?>images/7.jpg" class="img-responsive" alt="">
				</div>
				<div class="hello-2">
					<h4>Mescuml dia sed integer alies dolore ipasum ame mod ictor utligulat.</h4>
					<p>Mes cuml dia sed in lacus ut eniascet ingerto aliiqt es site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen lusto dolor ltissim comes cuml dia sed inertio lacusueni ascet dolingerto aliiqt sit amet eism com odictor ut ligulate cot ameti dapibu emo enim ipsam voluptatem voluptas sit aspernatur aut odit aut fugit sed quia consequuntur</p>
				</div>
					<div class="clearfix"> </div>
			</div>
			<div class="col-md-4 hello-right">
				<h5>What We Offer</h5>
				<div class="hello-3">
					<img src="<?=base_url(); ?>images/1.jpg" class="img-responsive" alt="">
				</div>
				<h4>Mes cuml diased commete ipsum</h4>
				<p>Dolor nunc vule putateulr ips dol consec.Donecsemp ertet laciniate ultricie.Dolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upien dicomete dolo lectus fgilla itollicil tua ludin dolor nec met quam accumsan dolorecondime.</p>
				<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
	<!-- hello -->
	
	<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3>SUCCESS STORIES</h3>
			<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="what-top">
									<img src="<?=base_url(); ?>images/man.jpg" class="img-responsive" alt="">
										<h5>John Buch</h5>
										<p> simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</li>
								<li>
									<div class="what-top">
										<img src="<?=base_url(); ?>images/women.jpg" class="img-responsive" alt="">
										<h5>Nickie Bella</h5>
										<p>Lorem Ipsum has been the simply dummy text of the printing and typesetting industry.  industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</li>
								<li>
									<div class="what-top">
										<img src="<?=base_url(); ?>images/man.jpg" class="img-responsive" alt="">
										<h5>John Buch</h5>
										<p> simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</li>
								<div class="clearfix"> </div>
							</ul>
						</div>
					</section>
					<!-- FlexSlider -->
							  <script defer src="js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
						<!-- FlexSlider -->
		</div>
	</div>
	<!-- testimonials -->
	<!-- device -->
	<div class="device">
		<div class="container">
			<h2>Latest News</h2>
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