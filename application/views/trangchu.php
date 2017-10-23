
<!DOCTYPE HTML>
<html>
<head>
<title><?=$title; ?></title>
<link href="<?=base_url(); ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?=base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" >
<link href="<?=base_url(); ?>css/select2" rel="stylesheet" type="text/css" media="all" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Quamax Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>-->
<link rel="stylesheet" href="<?=base_url(); ?>css/flexslider.css" type="text/css" media="screen" />
<!--<script src="<?=base_url(); ?>js/jquery.min.js" type="text/javascript"></script>-->
<script src="<?=base_url(); ?>js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>js/jquery-migrate-3.0.0.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>js/jquery.flexisel.js" type="text/javascript"></script>
<!--<script type="text/javascript" src="<?=base_url(); ?>js/move-top.js"></script>-->
       <script type="text/javascript" src="<?=base_url(); ?>js/easing.js"></script>
		<!--<script type="text/javascript">
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
</script>-->
<script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#toTop").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
</script>
<script src="<?=base_url(); ?>js/responsiveslides.min.js"></script>
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

<?php
	$this->load->view('layout/header');
	$this->load->view($content);
	$this->load->view('layout/footer');
?>

</body>
</html>