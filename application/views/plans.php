<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Quamax A Web Hosting Category Flat Bootstarp Resposive Website Template | Hosting Plans :: w3layouts</title>
<link href="<?=base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?=base_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Quamax Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
       <script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
	
  </script>
</head>
<body>
<!-- header -->
	<div class="header">
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" class="img-responsive" alt="" /></a>
		</div>
		<div class="head-nav">
			<div class="container">
				<span class="menu">Menu</span>
					<ul class="cl-effect-7">
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="plans.php">Hosting Plans</a></li>
						<li><a href="domain.php">Domain</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="pages.php">Pages</a></li>
						<li><a href="404.php">Blog</a></li>
						<li><a href="contact.php">Contact</a></li>
							<div class="clearfix"> </div>
					</ul>
			</div>
		</div>
		<!-- script-for-nav -->
			<script>
				$( "span.menu" ).click(function() {
				$( ".head-nav ul" ).slideToggle(300, function() {
				// Animation complete.
				});
				});
			</script>
		<!-- script-for-nav -->
	</div>
<!-- header -->
<div class="about_grid">
	<div class="container">
		<h4 class="tz-title-4 tzcolor-blue">
            <p class="tzweight_Bold"><span class="m_1">Follow<br></span>Steps</p>
        </h4>
		<div class="plans_grid">
		    <div class="col-md-4">
				<ul class="project_box">
				  <li class="mini-post-meta1">1</li>
				  <li class="desc"><h5><a href="#">Choose Your Plan</a></h5>
				  	 <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
				  </li>	
				  <div class="clearfix"> </div>
				</ul>
			</div>
			<div class="col-md-4">
				<ul class="project_box">
				  <li class="mini-post-meta1">2</li>
				  <li class="desc"><h5><a href="#">Creative Your Account</a></h5>
				  	 <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
				  </li>	
				  <div class="clearfix"> </div>
				</ul>
			</div>
			<div class="col-md-4">
				<ul class="project_box">
				  <li class="mini-post-meta1">3</li>
				  <li class="desc"><h5><a href="#">Launch Your Hosting</a></h5>
				  	 <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
				  </li>	
				  <div class="clearfix"> </div>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
     </div>
</div>
<div class="about_grid1">
	<div class="container">
	        <h4 class="tz-title-4 tzcolor-blue">
               <p class="tzweight_Bold"><span class="m_1">Our<br></span>Hosting</p>
            </h4>
        	 <div class="col-md-3 thumb_2">
							<div class="pricing-table-grid plan_box">
								<h3><span class="dollar">$</span>5<br><span class="month">Per Month</span></h3>
								<ul>
									<li><span>Standard Plan</span></li>
									<li><a href="#">10GB Disk Space</a></li>
									<li><a href="#">1TB Bandwidth</a></li>
									<li><a href="#">Free DDoS Protection</a></li>
									<li><a href="#">Free Daily Backups</a></li>
									<li><a href="#">Managed Hosting</a></li>
								</ul>
								<a class="order-btn" href="login.php">Sign Up</a>
							</div>
		     </div>
             <div class="col-md-3 thumb_2">
							<div class="pricing-table-grid plan_box">
								<h3><span class="dollar">$</span>6<br><span class="month">Per Month</span></h3>
								<ul>
									<li><span>Advanced Plan</span></li>
									<li><a href="#">10GB Disk Space</a></li>
									<li><a href="#">1TB Bandwidth</a></li>
									<li><a href="#">Free DDoS Protection</a></li>
									<li><a href="#">Free Daily Backups</a></li>
									<li><a href="#">Managed Hosting</a></li>
								</ul>
								<a class="order-btn" href="login.php">Sign Up</a>
							</div>
		     </div>	
	         <div class="col-md-3 thumb_2">
							<div class="pricing-table-grid plan_box">
								<h3><span class="dollar">$</span>8<br><span class="month">Per Month</span></h3>
								<ul>
									<li><span>Business Plan</span></li>
									<li><a href="#">10GB Disk Space</a></li>
									<li><a href="#">1TB Bandwidth</a></li>
									<li><a href="#">Free DDoS Protection</a></li>
									<li><a href="#">Free Daily Backups</a></li>
									<li><a href="#">Managed Hosting</a></li>
								</ul>
								<a class="order-btn" href="login.php">Sign Up</a>
							</div>
		    </div>
	        <div class="col-md-3 thumb_2">
							<div class="pricing-table-grid plan_box">
								<h3><span class="dollar">$</span>9<br><span class="month">Per Month</span></h3>
								<ul>
									<li><span>Gold Plan</span></li>
									<li><a href="#">10GB Disk Space</a></li>
									<li><a href="#">1TB Bandwidth</a></li>
									<li><a href="#">Free DDoS Protection</a></li>
									<li><a href="#">Free Daily Backups</a></li>
									<li><a href="#">Managed Hosting</a></li>
								</ul>
								<a class="order-btn" href="login.php">Sign Up</a>
							</div>
		    </div>	
		    <div class="clearfix"> </div>						
	 </div>
</div>
<div class="about_grid">
	<div class="container">
		<h4 class="tz-title-4 tzcolor-blue">
            <p class="tzweight_Bold"><span class="m_1">Hosting<br></span>3 Column</p>
        </h4>
		<div class="col-md-4">
							<div class="pricing-table-grid plan_box">
								<h3><span class="dollar">$</span>11<br><span class="month">Per Month</span></h3>
								<ul>
									<li><span>Next Gen Host</span></li>
									<li><a href="#">10GB Disk Space</a></li>
									<li><a href="#">1TB Bandwidth</a></li>
									<li><a href="#">Free DDoS Protection</a></li>
									<li><a href="#">Free Daily Backups</a></li>
									<li><a href="#">Managed Hosting</a></li>
								</ul>
								<a class="order-btn" href="login.php">Sign Up</a>
							</div>
			
		     </div>
             <div class="col-md-4">
							<div class="pricing-table-grid plan_box">
								<h3><span class="dollar">$</span>12<br><span class="month">Per Month</span></h3>
								<ul>
									<li><span>Resellers Hosting</span></li>
									<li><a href="#">10GB Disk Space</a></li>
									<li><a href="#">1TB Bandwidth</a></li>
									<li><a href="#">Free DDoS Protection</a></li>
									<li><a href="#">Free Daily Backups</a></li>
									<li><a href="#">Managed Hosting</a></li>
								</ul>
								<a class="order-btn" href="login.php">Sign Up</a>
							</div>
		     </div>	
	         <div class="col-md-4">
							<div class="pricing-table-grid plan_box">
								<h3><span class="dollar">$</span>10<br><span class="month">Per Month</span></h3>
								<ul>
									<li><span>Grid Web Hosting</span></li>
									<li><a href="#">10GB Disk Space</a></li>
									<li><a href="#">1TB Bandwidth</a></li>
									<li><a href="#">Free DDoS Protection</a></li>
									<li><a href="#">Free Daily Backups</a></li>
									<li><a href="#">Managed Hosting</a></li>
								</ul>
								<a class="order-btn" href="login.php">Sign Up</a>
							</div>
		    </div>
		    <div class="clearfix"> </div>
	</div>
</div>
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-left">
				<h3>Navigation</h3>
				<li><a href="about.php">About</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="404">Blog</a></li>
				<li><a href="contact.php">Contact</a></li>
			</div>
			<div class="col-md-3 footer-left">
				<h3>For Members</h3>
				<li><a href="#">Forums</a></li>
				<li><a href="#">Promotions</a></li>
				<li><a href="login.php">Sign In</a></li>
				<li><a href="#">News</a></li>
			</div>
			<div class="col-md-3 soci">
				<h3>Follow Us</h3>
				<ul>
						<li><a href="#"><i class="facebk"> </i></a></li>
						<li><a href="#"><i class="twter"> </i></a></li>
						<li><a href="#"><i class="goopl"> </i></a></li>
						<li><a href="#"><i class="insta"> </i></a></li>
							<div class="clearfix"></div>	
					</ul>
			</div>
			<div class="col-md-3 footer-left">
				<h3>Our Location</h3>
				<li><i class="add"> </i>lorem ipsum</li>
				<li><i class="phone"> </i>1234567890</li>
				<li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>
			</div>
				<div class="clearfix"> </div>
		<p>Copyrights © 2015 Quamax. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
		<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 0;"> </span></a>
	</div>
<!-- footer -->
</body>
</html>