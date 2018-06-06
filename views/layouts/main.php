<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

use app\assets\AppAsset;
use yii\widgets\Menu;
use yii\helpers\Html;

//AppAsset::register();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Travel Trip a Travel Category Bootstrap Responsive Web Template | Mail :: W3layouts </title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Travel Trip Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Barlow:100,200,300,400,500,600,700,800,900" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<div class="header">
		<div class="top_menu_w3layouts">
<div class="container">
			<div class="header_left">
				<ul>
				</ul>
			</div>
			<div class="header_right">
				

			</div>
			<div class="clearfix"> </div>
			</div>
		</div>

		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar" href="/">
							<h1> <?= Html::img('@web/img/color.png',['height'=>"150"])?> </h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="/">Inicio</a></li>
								<li><a href="/product/index">Conferencias</a></li>
								<li><a href="/product/index">Registrar Eventos</a></li>
							<!--	<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="codes.html">Codes</a></li>
										<li class="divider"></li>
										<li><a href="icons.html">Icons</a></li>
										<li class="divider"></li>
										
									</ul>
								</li>-->
								<li><a href="/site/login" class="active">Login</a></li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- banner -->

	
</div>
<?= $content ?>


<!-- footer start here -->
<div class="footer-agile">
		<div class="container">
			<div class="footer-btm-agileinfo">
				<div class="col-md-3 col-xs-3 footer-grid w3social">
					<h3>Nuestros link</h3>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html" >About</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="mail.html">Mail Us</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-3 footer-grid">
					<h3>Contacto</h3>
					<ul>
					<!--	<li><i class="fa fa-map-marker"></i>+012 345 6789</li> -->
						<li><i class="fa fa-fax"></i>809-731-1101</li>
						<li><i class="fa fa-phone"></i>(809)-731-1100</li>
						<li><i class="fa fa-envelope-o"></i><a href="mailto:info@mescyt.gob.do">info@mescyt.gob.do</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-xs-6 footer-grid footer-review">
					<h3>Nosotros</h3>
					<p>El Congreso Estudiantil de Investigación Científica y Tecnológica (CEICYT) es un espacio para dar a conocer las iniciativas de investigación de estudiantes universitarios de las áreas vinculadas a las ciencias básicas y aplicadas.  Santo Domingo.</p>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-agilem">
				<div class="col-sm-8 col-xs-9 copy-w3lsright">
                    <p>© 2018 MESCyT </a></p>
                    </div>
                    <p>Av. Máximo Gómez No. 31, esq. Pedro Henríquez Ureña, Santo Domingo, República Dominicana</p>
				
			<!--	<div class="col-sm-4 col-xs-3 social-w3licon">
					<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
					<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
					<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a>
                </div>
    -->
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //footer end here -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- Flexisel-js for-testimonials -->
<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems:1,
									animationSpeed: 1000,
									autoPlay: false,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:1
										},
										tablet: { 
											changePoint:768,
											visibleItems: 1
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!-- Flexisel-js for-testimonials -->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
</body>

</html>