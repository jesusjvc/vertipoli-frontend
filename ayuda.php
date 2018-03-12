<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Ayuda - Vertipoli</title>

	<meta name="author" content="CreativeLayers">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Boostrap style -->
	<link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css">

	<!-- Reponsive -->
	<link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

	<link rel="shortcut icon" href="favicon/favicon.png">
	
</head>
<body class="header_sticky">
	<div class="boxed">

		<div class="overlay"></div>

		<!-- Preloader -->
		<div class="preloader">
			<div class="clear-loading loading-effect-2">
				<span></span>
			</div>
		</div><!-- /.preloader -->

		<?php include('header.php'); ?>

		<section class="flat-breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumbs">
							<li class="trail-item">
								<a href="#" title="">Inicio</a>
								<span><img src="images/icons/arrow-right.png" alt=""></span>
							</li>
							<li class="trail-item">
								<a href="#" title="">Tienda</a>
								<span><img src="images/icons/arrow-right.png" alt=""></span>
							</li>
							<li class="trail-end">
								<a href="#" title="">Ayuda</a>
							</li>
						</ul><!-- /.breacrumbs -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-breadcrumb -->

        <section class="flat-contact style2">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="form-contact left">
        					<div class="form-contact-header">
        						<h3>¿Tienes algún problema con un vendedor o comprador?</h3>
        						<p>
        							Por favor llena el siguiente formulario, para ayudarte a resolver el problema.
        						</p>
        					</div><!-- /.form-contact-header -->
        					<div class="form-contact-content">
        						<form action="#" method="get" id="form-contact" accept-charset="utf-8">
									<div class="form-box one-half name-contact">
										<label for="name-contact">Tengo un problema con un: </label>	
										<select name="tipo-problema" class="select">
										    <option value="Vendedor">Vendedor</option>
										    <option value="Comprador">Comprador</option>
										</select>
									</div>
									<div class="form-box">
										<label for="password-contact">Número de Operación</label>
										<input type="text" id="password-contact" name="password-contact" placeholder="">
									</div>								
									<div class="form-box">
										<label for="comment-contact">Describe el problema</label>
										<textarea id="comment-contact"></textarea>
									</div>
									<div class="form-box">
										<button type="submit" class="contact">Enviar</button>
									</div>
								</form><!-- /#form-contact -->
        					</div><!-- /.form-contact-content -->
        				</div><!-- /.form-contact left -->
        			</div><!-- /.col-md-12 -->
        		
        		</div><!-- /.row -->
        	</div><!-- /.container -->
        </section><!-- /.flat-contact style2 -->

	<?php include('footer.php'); ?>

	</div><!-- /.boxed -->

		<!-- Javascript -->
		<script type="text/javascript" src="javascript/jquery.min.js"></script>
		<script type="text/javascript" src="javascript/tether.min.js"></script>
		<script type="text/javascript" src="javascript/bootstrap.min.js"></script>
		<script type="text/javascript" src="javascript/waypoints.min.js"></script>
		<script type="text/javascript" src="javascript/jquery.circlechart.js"></script>
		<script type="text/javascript" src="javascript/easing.js"></script>
<script type="text/javascript" src="javascript/jquery.zoom.min.js"></script>
		<script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
		<script type="text/javascript" src="javascript/owl.carousel.js"></script>
		
		<script type="text/javascript" src="javascript/jquery-ui.js"></script>
		<script type="text/javascript" src="javascript/jquery.mCustomScrollbar.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtRmXKclfDp20TvfQnpgXSDPjut14x5wk&region=GB"></script>
	   	<script type="text/javascript" src="javascript/gmap3.min.js"></script>
	   	<script type="text/javascript" src="javascript/waves.min.js"></script>
		<script type="text/javascript" src="javascript/jquery.countdown.js"></script>

		<script type="text/javascript" src="javascript/main.js"></script>

</body>	
</html>