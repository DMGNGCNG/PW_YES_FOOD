<?php
$this->load->helper('url');
?>

<!DOCTYPE html>
<html>
<head>
<title>YES FOOD</title>
<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Food Court Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
	<link href="<?php echo base_url('css/bootstrap.css" type="text/css') ?>" rel="stylesheet" media="all">
	<link href="<?php echo base_url('css/style.css" type="text/css') ?>" rel="stylesheet" media="all">
	<link rel="stylesheet" href="<?php echo base_url('css/swipebox.css') ?>">
	<link href="<?php echo base_url('css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" media="all" />
<!-- Font-Awesome-Icons-File -->
	<link href='fonts/fontawesome-webfont.ttf' rel='stylesheet' type='text/css'>
<!-- //Font-Awesome-Icons-File -->
<!-- js -->
	<script src="<?php echo base_url('js/jquery-1.11.1.min.js') ?>"></script> 
<!-- //js -->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<!-- start-smooth-scrolling-->
<script type="text/javascript" src="<?php echo base_url('js/move-top.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/easing.js') ?>"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->	
</head>
<body>
	
	<!--banner-->
	<div class="banner">		
		<!--header-->
		<div class="header">
			<div class="container">
				<div class="header-left">	
					<h1><a href="<?php echo base_url('home')?>">YES FOOD</a></h1>
				</div> 
				<div class="header-right">	
					<ul>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+00 111 222 3333</li>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:example@mail.com">mail@example.com</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="banner-text agileits">
			
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">	
					<li>					
						<h3 class="bh">YES FOOD</h3>
						
					</li>						
				</ul>
			</div>
		</div>
		<div class="top-nav">
		<nav class="navbar navbar-default">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="hvr-bounce-to-bottom"><a href="<?php echo base_url('home')?>">Home</a></li>
						<li class="hvr-bounce-to-bottom"><a href="<?php echo base_url('about')?>">About</a></li>
						<li class="hvr-bounce-to-bottom"><a href="<?php echo base_url('tempat_makan')?>">Tempat Makan</a></li>
						<li class="hvr-bounce-to-bottom"><a href="<?php echo base_url('mari_bergabung')?>">Mari Bergabung</a></li>
						<li class="hvr-bounce-to-bottom"><a href="<?php echo base_url('contact_us')?>">Contact Us</a></li>
						<li class="hvr-bounce-to-bottom"><a href="<?php echo base_url('login')?>">SignIn & SignUp</a></li>
					</ul>	
					<div class="clearfix"> </div>
				</div>	
			</div>
		</nav>		
	</div>	
	</div>
	
	<!--//banner-->