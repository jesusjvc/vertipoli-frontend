<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Registro</title>

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
							<li class="trail-end">
								<a href="#" title="">Registro</a>
							</li>
						</ul><!-- /.breacrumbs -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-breadcrumb -->

		<section class="flat-account background">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="form???"> <!-- Esta clase traía problemas, hacía que el fomulario no cupiera en la pantalla -->
							<div class="title">
								<h3>Regístrate</h3>
							</div>
							<form action="#" method="get" id="form-register" accept-charset="utf-8">
								<div class="form-box">
									<label for="name-register">Nombre Completo * </label>
									<input type="text" id="name-register" name="name-register">
								</div><!-- /.form-box -->
								<div class="form-box">
									<label for="name-register">Nombre de Usuario * </label>
									<input type="text" id="name-register" name="name-register">
								</div><!-- /.form-box -->
								<div class="form-box">
									<label for="name-register">Correo Electrónico * </label>
									<input type="text" id="name-register" name="name-register">
								</div><!-- /.form-box -->
								<div class="form-box">
									<label for="name-register">Contraseña * </label>
									<input type="text" id="name-register" name="name-register">
								</div><!-- /.form-box -->
								<div class="form-box">
									<label for="password-register">Confirmar Contraseña *</label>
									<input type="text" id="password-register" name="password-register">
								</div><!-- /.form-box -->
								<div class="form-box">
									<label for="password-register">Teléfono *</label>
									<input type="text" id="password-register" name="password-register">
								</div><!-- /.form-box -->

								<div class="checkbox">
	 								 <input class="form-check-input" type="checkbox" id="mayor" value="mayor">
	 								 <label class="form-check-label" for="mayor"> Soy mayor de 18 años y acepto los términos y condiciones</label>
								</div><!-- /#checkbox -->

								<div class="checkbox">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Vendedor">
									  <label class="form-check-label" for="inlineCheckbox1">Vendedor</label>
									</div>
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Comprador">
									  <label class="form-check-label" for="inlineCheckbox2">Comprador</label>
									</div>
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="check-pick" value="Pick">
									  <label class="form-check-label" for="check-pick">Pick</label>
									</div>
								</div>
								<div class="campos-adicionales" id="ad">
									
									<div class="title">
										<p>Información requerida para ser Pick *</p>
									</div>

									<div class="form-box">	
										<label for="credencial">Fotografía</label>						
										<input type="file" id="foto" name="foto">
									</div><!-- /.form-box -->
									<div class="form-box">	
										<label for="credencial">Comprobante de domicilio, PDF o imagen legible </label>
										<input type="file" id="direccion" name="direccion">
									</div><!-- /.form-box -->
									<div class="form-box">
										<label for="credencial">INE o Identificación oficial </label>	
										<input type="file" id="credencial" name="credencial">
									</div><!-- /.form-box -->
									<div class="form-box">	
										<label for="fiscal">Régimen fiscal</label>
										<input type="text" id="fiscal" name="fiscal">									
									</div><!-- /.form-box -->
								</div><!-- /.campos-adicionales -->
								<div class="form-box">
									<button type="submit" class="register btn-danger">Crear Cuenta</button>
								</div><!-- /.form-box -->
							</form><!-- /#form-register -->
						</div><!-- /.form-register??? traía problemas -->
					</div><!-- /.col-md-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->	
		</section><!-- /.flat-account -->

	</div><!-- /.boxed -->

	<?php include('footer.php'); ?>

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
		<script type="text/javascript">
		var form = $('#form-register'),
				checkbox = $('#check-pick'),
				chShipBlock = $('#ad');

				chShipBlock.hide();

				checkbox.on('click', function() {
				   if($(this).is(':checked')) {
				      chShipBlock.show();
				      chShipBlock.find('input').attr('required', true);
				   } else {
				      chShipBlock.hide();
				      chShipBlock.find('input').attr('required', false);
				   }
				});
		</script>

</body>	
</html>