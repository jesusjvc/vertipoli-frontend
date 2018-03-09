<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Techno Store - Finalizar Pedido</title>

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
								<a href="#" title="">Home</a>
								<span><img src="images/icons/arrow-right.png" alt=""></span>
							</li>
							<li class="trail-item">
								<a href="#" title="">Tienda</a>
								<span><img src="images/icons/arrow-right.png" alt=""></span>
							</li>
							<li class="trail-item">
								<a href="#" title="">Carrito de compras</a>
								<span><img src="images/icons/arrow-right.png" alt=""></span>
							</li>
							<li class="trail-end">
								<a href="#" title="">Finalizar pedido</a>
							</li>
						</ul><!-- /.breacrumbs -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-breadcrumb -->

		<section class="flat-checkout">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="box-checkout">
							<h3 class="title">Finalizar Pedido</h3>
							<div class="checkout-login">
								¿Ya eres cliente? <a href="#" title="">Haz click aquí para ingresar</a>
							</div>
							<form action="#" method="get" class="checkout" accept-charset="utf-8">
								<div class="billing-fields">
									<div class="fields-title">
										<h3>Detalles de Facturación</h3>
										<span></span>
										<div class="clearfix"></div>
									</div><!-- /.fields-title -->
									<div class="fields-content">
										<div class="field-row">
											<p class="field-one-half">
												<label for="first-name">Nombre(s) *</label>
												<input type="text" id="first-name" name="first-name" placeholder="">
											</p>
											<p class="field-one-half">
												<label for="last-name">Apellido(s) *</label>
												<input type="text" id="last-name" name="last-name" placeholder="">
											</p>
											<div class="clearfix"></div>
										</div>
										<div class="field-row">
											<label for="company-name">Nombre de la Compañía</label>
											<input type="text" id="company-name" name="company-name">
										</div>
										<div class="field-row">
											<p class="field-one-half">
												<label for="email-address">Correo Electrónico *</label>
												<input type="email" id="email-address" name="email-address">
											</p>
											<p class="field-one-half">
												<label for="phone">Teléfono *</label>
												<input type="text" id="phone" name="phone">
											</p>
											<div class="clearfix"></div>
										</div>
										<div class="field-row">
											<label>País *</label>
											<select name="country">
												<option value="">México</option>
											</select>
										</div>
										<div class="field-row">
											<label for="address">Dirección *</label>
											<input type="text" id="address" name="address" placeholder="Calle">
											<input type="text" id="address-2" name="address" placeholder="Número">
										</div>
										<div class="field-row">
											<label for="town-city">Ciudad*</label>
											<input type="text" id="town-city" name="town-city">
										</div>
										<div class="field-row">
											<p class="field-one-half">
												<label for="state-country">Estado *</label>
												<input type="text" id="state-country" name="state-country">
											</p>
											<p class="field-one-half">
												<label for="post-code">Código Postal*</label>
												<input type="text" id="post-code" name="post-code">
											</p>
											<div class="clearfix"></div>
										</div>
										<div class="checkbox">
											<input type="checkbox" id="create-account" name="create-account" checked>
											<label for="create-account">Crear Cuenta</label>
										</div>
									</div><!-- /.fields-content -->
								</div><!-- /.billing-fields -->
								<div class="shipping-address-fields">
									<div class="fields-title">
										<h3>Dirección de Envío</h3>
										<span></span>
										<div class="clearfix"></div>
									</div><!-- /.fields-title -->
									<div class="fields-content">
										<div class="checkbox">
											<input type="checkbox" id="create-account-2" name="create-account-2" checked>
											<label for="create-account-2">¿ Enviar a una ubicación distinta ?</label>
										</div>
										<div class="field-row">
											<p class="field-one-half">
												<label for="first-name-2">Nombre(s) *</label>
												<input type="text" id="first-name-2" name="first-name-2" placeholder="">
											</p>
											<p class="field-one-half">
												<label for="last-name-2">Apellido(s)  *</label>
												<input type="text" id="last-name-2" name="last-name-2" placeholder="">
											</p>
											<div class="clearfix"></div>
										</div>
										<div class="field-row">
											<label for="company-name-2">Nombre de la Compañía</label>
											<input type="text" id="company-name-2" name="company-name-2">
										</div>
										<div class="field-row">
											<label>País *</label>
											<select name="country-2">
												<option value="">México</option>
											</select>
										</div>
										<div class="field-row">
											<label for="address-3">Dirección *</label>
											<input type="text" id="address-3" name="address-3" placeholder="Calle">
											<input type="text" id="address-4" name="address2" placeholder="Número">
										</div>
										<div class="field-row">
											<label for="town-city-2">Ciudad *</label>
											<input type="text" id="town-city-2" name="town-city-2">
										</div>
										<div class="field-row">
											<p class="field-one-half">
												<label for="state-country-2">Estado *</label>
												<input type="text" id="state-country-2" name="state-country-2">
											</p>
											<p class="field-one-half">
												<label for="post-code-2">Código Postal*</label>
												<input type="text" id="post-code-2" name="post-code-2">
											</p>
											<div class="clearfix"></div>
										</div>
										<div class="field-row">
											<label for="notes">Información Adicional</label>
											<textarea id="notes" placeholder="Información adicional sobre tu pedido, ej. Información adicional para ubicar el lugar de entrega."></textarea>
										</div>
									</div><!-- /.fields-content -->
								</div><!-- /.shipping-address-fields -->
							</form><!-- /.checkout -->
						</div><!-- /.box-checkout -->
					</div><!-- /.col-md-7 -->
					<div class="col-md-5">
						<div class="cart-totals style2">
							<h3>Tu Pedido</h3>
							<form action="#" method="get" accept-charset="utf-8">
								<table class="product">
									<thead>
										<tr>
											<th>Producto</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Apple iPad Mini<br />G2356</td>
											<td>$99.00</td>
										</tr>
										<tr>
											<td>Beats Pill + Portable<br />Speaker</td>
											<td>$100.00</td>
										</tr>
									</tbody>
								</table><!-- /.product -->
								<table>
									<tbody>
										<tr>
											<td>Total</td>
											<td class="subtotal">$1,999.00</td>
										</tr>
										<tr>
											<td>Envío</td>
											<td class="btn-radio">
												<div class="radio-info">
													<input type="radio" checked id="flat-rate" name="radio-flat-rate">
													<label for="flat-rate">Tasa de Tarifa: <span>$3.00</span></label>
												</div>
												<div class="radio-info">
													<input type="radio" id="free-shipping" name="radio-flat-rate">
													<label for="free-shipping">Envío Gratis</label>
												</div>
												<div class="btn-shipping">
													<a href="#" title="">Calcular Envío</a>
												</div>
											</td><!-- /.btn-radio -->
										</tr>
										<tr>
											<td>Total</td>
											<td class="price-total">$1,999.00</td>
										</tr>
									</tbody>
								</table>
								<div class="btn-radio style2">
									<div class="radio-info">
										<input type="radio" id="flat-payment" checked name="radio-cash-2">
										<label for="flat-payment">Pago con Cheque</label>
										<p>Porfavor dirigir el cheque a Nombre de la Tienda, Calle de la Tienda, <br />Ciudad de la tienda, Estado de la tienda / País, Código postal de la tienda.</p>
									</div>
									<div class="radio-info">
										<input type="radio" id="bank-transfer" name="radio-cash-2">
										<label for="bank-transfer">Transferencia Bancaria</label>
									</div>
									<div class="radio-info">
										<input type="radio" id="cash-delivery" name="radio-cash-2">
										<label for="cash-delivery">Pago en Efectivo Durante la Entrega</label>
									</div>
									<div class="radio-info">
										<input type="radio" id="paypal" name="radio-cash-2">
										<label for="paypal">Paypal</label>
									</div>
								</div><!-- /.btn-radio style2 -->
								<div class="checkbox">
									<input type="checkbox" id="checked-order" name="checked-order" checked>
									<label for="checked-order">He leído y acepto los términos y condiciones *</label>
								</div><!-- /.checkbox -->
								<div class="btn-order">
									<a href="#" class="order" title="">Realizar Pedido</a>
								</div><!-- /.btn-order -->
							</form>
						</div><!-- /.cart-totals style2 -->
					</div><!-- /.col-md-5 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-checkout -->



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