<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Quamax A Web Hosting Category Flat Bootstarp Resposive Website Template | Pages :: w3layouts</title>
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
						<li class="active"><a href="pages.php">Pages</a></li>
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
<!-- pages -->
	<div class="pages">
		<div class="container">
			<div class="headdings">
				<h3 class="ghj">Headings</h3>
					<div class="bs-example">
						<table class="table">
						  <tbody>
							<tr>
							  <td><h1 id="h1.-bootstrap-heading">h1. Bootstrap heading<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h1></td>
							  <td class="type-info">Semibold 36px</td>
							</tr>
							<tr>
							  <td><h2 id="h2.-bootstrap-heading">h2. Bootstrap heading<a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2></td>
							  <td class="type-info">Semibold 30px</td>
							</tr>
							<tr>
							  <td><h3 id="h3.-bootstrap-heading">h3. Bootstrap heading<a class="anchorjs-link" href="#h3.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h3></td>
							  <td class="type-info">Semibold 24px</td>
							</tr>
							<tr>
							  <td><h4 id="h4.-bootstrap-heading">h4. Bootstrap heading<a class="anchorjs-link" href="#h4.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
							  <td class="type-info">Semibold 18px</td>
							</tr>
							<tr>
							  <td><h5 id="h5.-bootstrap-heading">h5. Bootstrap heading<a class="anchorjs-link" href="#h5.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h5></td>
							  <td class="type-info">Semibold 14px</td>
							</tr>
							<tr>
							  <td><h6>h6. Bootstrap heading</h6></td>
							  <td class="type-info">Semibold 12px</td>
							</tr>
						  </tbody>
						</table>
					</div>
			</div>
			<div class="Buttons">
				<h3 class="ghj">Buttons</h3>
				  <h1>
					<a href="#"><span class="label label-default">Default</span></a>
					<a href="#"><span class="label label-primary">Primary</span></a>
					<a href="#"><span class="label label-success">Success</span></a>
					<a href="#"><span class="label label-info">Info</span></a>
					<a href="#"><span class="label label-warning">Warning</span></a>
					<a href="#"><span class="label label-danger">Danger</span></a>
				  </h1>
				  <h2>
					<a href="#"><span class="label label-default">Default</span></a>
					<a href="#"><span class="label label-primary">Primary</span></a>
					<a href="#"><span class="label label-success">Success</span></a>
					<a href="#"><span class="label label-info">Info</span></a>
					<a href="#"><span class="label label-warning">Warning</span></a>
					<a href="#"><span class="label label-danger">Danger</span></a>
				  </h2>
				  <h3>
					<a href="#"><span class="label label-default">Default</span></a>
					<a href="#"><span class="label label-primary">Primary</span></a>
					<a href="#"><span class="label label-success">Success</span></a>
					<a href="#"><span class="label label-info">Info</span></a>
					<a href="#"><span class="label label-warning">Warning</span></a>
					<a href="#"><span class="label label-danger">Danger</span></a>
				  </h3>
				  <h4>
					<a href="#"><span class="label label-default">Default</span></a>
					<a href="#"><span class="label label-primary">Primary</span></a>
					<a href="#"><span class="label label-success">Success</span></a>
					<a href="#"><span class="label label-info">Info</span></a>
					<a href="#"><span class="label label-warning">Warning</span></a>
					<a href="#"><span class="label label-danger">Danger</span></a>
				  </h4>
				  <h5>
					<a href="#"><span class="label label-default">Default</span></a>
					<a href="#"><span class="label label-primary">Primary</span></a>
					<a href="#"><span class="label label-success">Success</span></a>
					<a href="#"><span class="label label-info">Info</span></a>
					<a href="#"><span class="label label-warning">Warning</span></a>
					<a href="#"><span class="label label-danger">Danger</span></a>
				  </h5>
				  <h6>
					<a href="#"><span class="label label-default">Default</span></a>
					<a href="#"><span class="label label-primary">Primary</span></a>
					<a href="#"><span class="label label-success">Success</span></a>
					<a href="#"><span class="label label-info">Info</span></a>
					<a href="#"><span class="label label-warning">Warning</span></a>
					<a href="#"><span class="label label-danger">Danger</span></a>
				  </h6>
		    </div>
		    <div class="progress-bars">
			 <h3 class="ghj">Progress Bars</h3>
				 <div class="tab-content">
					  <div class="tab-pane active" id="domprogress">
						  <div class="progress">    
							<div class="progress-bar progress-bar-primary" style="width: 20%"></div>
						  </div>
						  <p>Info with <code>progress-bar-info</code> class.</p>
						  <div class="progress">    
							<div class="progress-bar progress-bar-info" style="width: 60%"></div>
						  </div>
						  <p>Success with <code>progress-bar-success</code> class.</p>
						  <div class="progress">
							<div class="progress-bar progress-bar-success" style="width: 30%"></div>
						  </div>
						  <p>Warning with <code>progress-bar-warning</code> class.</p>
						  <div class="progress">
							<div class="progress-bar progress-bar-warning" style="width: 70%"></div>
						  </div>
						  <p>Danger with <code>progress-bar-danger</code> class.</p>
						  <div class="progress">
							<div class="progress-bar progress-bar-danger" style="width: 50%"></div>
						  </div>
						  <p>Inverse with <code>progress-bar-inverse</code> class.</p>
						  <div class="progress">
							<div class="progress-bar progress-bar-inverse" style="width: 40%"></div>
						  </div>
						   <p>Inverse with <code>progress-bar-inverse</code> class.</p>
						  <div class="progress">
							<div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
							<div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
							<div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
						  </div>
					</div>
			   </div>
		    </div>
		    <div class="alerts">
			  <h3 class="ghj">Alerts</h3>
			   <div class="alert alert-success" role="alert">
				<strong>Well done!</strong> You successfully read this important alert message.
			   </div>
			   <div class="alert alert-info" role="alert">
				<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
			   </div>
			   <div class="alert alert-warning" role="alert">
				<strong>Warning!</strong> Best check yo self, you're not looking too good.
			   </div>
			   <div class="alert alert-danger" role="alert">
				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			   </div>
		    </div>
			<div class="pagenatin">
				<h3 class="ghj">Pagination</h3>
					<div class="col-md-6">
					  <nav>
					  <ul class="pagination pagination-lg">
						<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
					  </ul>
					  </nav>
					  <nav>
					  <ul class="pagination">
						<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
					  </ul>
					  </nav>
					  <nav>
						<ul class="pagination pagination-sm">
							<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
						</ul>
					  </nav>
					</div>
					<div class="col-md-6">
						<nav>
							<ul class="pagination pagination-lg">
									<li class="disabled"><a href="#"><i class="fa fa-angle-left">«</i></a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#"><i class="fa fa-angle-right">»</i></a></li>
							</ul>
						</nav>
						<nav>
						  <ul class="pagination">
							<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
							<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
						 </ul>
					    </nav>
					    <nav>
							 <ul class="pagination pagination-sm">
								<li class="disabled"><a href="#"><i class="fa fa-angle-left"></i>«</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>»</a></li>
							</ul>
						</nav>
					</div>
					<div class="clearfix"> </div>
			</div>
			<div class="bread-crumbs">
				 <h3 class="ghj">Breadcrumbs</h3>
				   <ol class="breadcrumb">
				  <li class="active">Home</li>
				</ol>
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Library</li>
				</ol>
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li><a href="#">Library</a></li>
				  <li class="active">Data</li>
				</ol>
		    </div>
			<div class="appearance">
			 <h3 class="ghj">Badges</h3>
				<div class="col-md-6">
					<p>Add modifier classes to change the appearance of a badge.</p>
					  <table class="table table-bordered">
						<thead>
							<tr>
								<th width="50%">Classes</th>
								<th width="50%">Badges</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>No modifiers</td>
								<td><span class="badge">42</span></td>
							</tr>
							<tr>
								<td><code>.badge-primary</code></td>
								<td><span class="badge badge-primary">1</span></td>
							</tr>
							<tr>
								<td><code>.badge-success</code></td>
								<td><span class="badge badge-success">22</span></td>
							</tr>
							<tr>
								<td><code>.badge-info</code></td>
								<td><span class="badge badge-info">30</span></td>
							</tr>
							<tr>
								<td><code>.badge-warning</code></td>
								<td><span class="badge badge-warning">412</span></td>
							</tr>
							<tr>
								<td><code>.badge-danger</code></td>
								<td><span class="badge badge-danger">999</span></td>
							</tr>
						</tbody>
					  </table>                    
				</div>
				<div class="col-md-6">
				  <p>Easily highlight new or unread items with the <code>.badge</code> class</p>
					<div class="list-group list-group-alternate"> 
						<a href="#" class="list-group-item"><span class="badge">201</span> <i class="ti ti-email"></i> Inbox </a> 
						<a href="#" class="list-group-item"><span class="badge badge-primary">5021</span> <i class="ti ti-eye"></i> Profile visits </a> 
						<a href="#" class="list-group-item"><span class="badge">14</span> <i class="ti ti-headphone-alt"></i> Call </a> 
						<a href="#" class="list-group-item"><span class="badge">20</span> <i class="ti ti-comments"></i> Messages </a> 
						<a href="#" class="list-group-item"><span class="badge badge-warning">14</span> <i class="ti ti-bookmark"></i> Bookmarks </a> 
						<a href="#" class="list-group-item"><span class="badge badge-danger">30</span> <i class="ti ti-bell"></i> Notifications </a> 
					</div>
			    </div>
			   <div class="clearfix"> </div>
			</div>
			<div class="distracted">
			  <h3 class="ghj">Wells</h3>
				   <div class="well">
					There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
				   </div>
				   <div class="well">
					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here
				   </div>
				   <div class="well">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
				   </div>
		    </div>
		</div>
	</div>
<!-- //pages -->
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