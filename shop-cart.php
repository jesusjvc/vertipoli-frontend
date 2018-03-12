<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Techno Store - Carrito de Compras</title>

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
								<a href="#" title="">Carrito de compras</a>
							</li>
						</ul><!-- /.breacrumbs -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-breadcrumb -->

		<section class="flat-shop-cart">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="flat-row-title style1">
							<h3>Carrito de Compra</h3>
						</div>
						<div class="table-cart">
							<table>
								<thead>
									<tr>
										<th>Producto</th>
										<th>Cantidad</th>
										<th>Precio</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="img-product">
												<img src="images/product/other/12.jpg" alt="">
											</div>
											<div class="name-product">
												Apple iPad Mini <br />G2356
											</div>
											<div class="price">
												$1,250.00
											</div>
											<div class="clearfix"></div>
										</td>
										<td>
											<div class="quanlity">
											  <input type="number" name="cantidad" value="1" min="1" max="100" placeholder="Cantidad" required>	
											</div>
										</td>
										<td>
											<div class="total">
												$6,250.00
											</div>
										</td>
										<td>
											<a href="#" title="">
												<img src="images/icons/delete.png" alt="">
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<div class="img-product">
												<img src="images/product/other/11.jpg" alt="">
											</div>
											<div class="name-product">
												Beats Pill+ Portable<br />Speaker
											</div>
											<div class="price">
												$1,250.00
											</div>
											<div class="clearfix"></div>
										</td>
										<td>
											<div class="quanlity">
											  <input type="number" name="cantidad" value="1" min="1" max="100" placeholder="Cantidad" required>	
											</div>
										</td>
										<td>
											<div class="total">
												$6,250.00
											</div>
										</td>
										<td>
											<span>
												<img src="images/icons/delete.png" alt="">
											</span>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="form-coupon">
								<form action="#" method="get" accept-charset="utf-8">
									<div class="coupon-input">
										<input type="text" name="coupon code" placeholder="Código del Cupón">
										<button type="submit">Canjear Cupón</button>
									</div>
								</form>
							</div><!-- /.form-coupon -->
						</div><!-- /.table-cart -->
					</div><!-- /.col-lg-8 -->
					<div class="col-lg-4">
						<div class="cart-totals">
							<h3>Costo de tu Carrito</h3>
							<form action="#" method="get" accept-charset="utf-8">
								<table>
									<tbody>
										<tr>
											<td>Subtotal</td>
											<td class="subtotal">$2,589.00</td>
										</tr>
										<tr>
											<td>Envío</td>
											<td class="btn-radio">
												<div class="radio-info">
													<input type="radio" id="flat-rate" checked name="radio-flat-rate">
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
											<td class="price-total">$1,591.00</td>
										</tr>
									</tbody>
								</table>
								<div class="btn-cart-totals">
									<a href="#" class="update" title="">Actualizar Carrito</a>
									<a href="#" class="checkout" title="">Finalizar Pedido</a>
								</div><!-- /.btn-cart-totals -->
							</form><!-- /form -->
						</div><!-- /.cart-totals -->
					</div><!-- /.col-lg-4 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-shop-cart -->

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