<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Quamax A Web Hosting Category Flat Bootstarp Resposive Website Template | Contact :: w3layouts</title>
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
			<a href="trangchu.php"><img src="images/logo.png" class="img-responsive" alt="" /></a>
		</div>
		<div class="head-nav">
			<div class="container">
				<span class="menu">Menu</span>
					<ul class="cl-effect-7">
						<li><a href="trangchu.php">Home</a></li>
						<li><a href="nguoitimviec.php">Hosting Plans</a></li>
						<li><a href="nhatruyendung.php">Domain</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="pages.php">Pages</a></li>
						<li><a href="404.php">Blog</a></li>
						<li class="active"><a href="contact.php">Contact</a></li>
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
<!-- contact -->
	<div class="contact">
	<div class="container">
	<h2>Contact</h2>
		<div class="col-md-6 contact-left">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27081.841070275364!2d115.85266200000001!3d-31.954652850000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32bad5293bd573%3A0x504f0b535df4ee0!2sPerth+WA%2C+Australia!5e0!3m2!1sen!2sin!4v1435128768538" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		<div class="con-left">
					 <h4>Address</h4>
						<p>500 Lorem Ipsum Dolor Sit,</p>
						<p>22-56-2-9 Sit Amet, Lorem,</p>
						<p>Perth</p>
						<p>Phone : (00) 222 666 444</p>
					<p>Email : <a href="mailto:info@example.com">info@mycompany.com</a></p>
			</div>
		</div>
		<div class="col-md-6 contact-right">
				<form>
						<div class="form_details">
							<input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
							<input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
							<input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
							<textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
								<div class="clearfix"> </div>
							<div class="sub-button">
								<input type="submit" value="Send Message">
							</div>
						</div>
					</form>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- //contact -->
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
				<li><a href="dangnhap.php">Sign In</a></li>
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