<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Mis pedidos</title>

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

		<?php include("header.php"); ?>

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
								<a href="#" title="">Mis pedidos</a>
							</li>
						</ul><!-- /.breacrumbs -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-breadcrumb -->

		<section class="flat-wishlist">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="wishlist">
							<div class="title">
								<h3>Mis Pedidos</h3>
							</div>
							<div class="wishlist-content">
								<table class="table-orders">
									<thead>
										<tr>
											<th>Fecha de pedido</th>
											<th>Número de pedido</th>
											<th>Total</th>
											<th>Estado del pedido</th>
											<th>Acción</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>											
												<div class="product">
													<div class="image">
														<img src="images/product/other/01.jpg" alt="">
													</div>
													<div class="date">
														13/03/2018
													</div>
												</div>
											</td>
											<td>
												701-5939659-9160206
											</td>
											<td>
											<div class="price">
													$6,250.00
												</div>
												
											</td>
											<td>
												<div class="status-order">
													<span class="complete">Entregado</span>
												</div>
											</td>
											
											<td>
											    <a class="btn btn-primary btn-sm btn-block" href="order-details.php" role="button ">Detalles del pedido</a>
											    <a class="btn btn-info btn-sm btn-block" href="#" role="button">Escribir una opinión del producto</a>
											    <a class="btn btn-warning btn-sm btn-block" href="#" role="button">Tengo un problema</a>
											</td>
											
										</tr>
										
										<tr>
											<td>											
												<div class="product">
													<div class="image">
														<img src="images/product/other/01.jpg" alt="">
													</div>
													<div class="date">
														19/03/2018
													</div>
												</div>
											</td>
											<td>
												701-5939659-9160208
											</td>
											<td>
											<div class="price">
													$9,250.00
												</div>
												
											</td>
											<td>
												<div class="status-order">
													<span class="delivering">En camino</span>
												</div>
											</td>
											
											<td>
											    <a class="btn btn-primary btn-sm btn-block" href="order-details.php" role="button ">Detalles del pedido</a>
											    <a class="btn btn-info btn-sm btn-block" href="#" role="button">Escribir una opinión del producto</a>
											    <a class="btn btn-warning btn-sm btn-block" href="#" role="button">Tengo un problema</a>
											</td>
											
										</tr>
										
										<tr>
											<td>											
												<div class="product">
													<div class="image">
														<img src="images/product/other/01.jpg" alt="">
													</div>
													<div class="date">
														19/03/2018
													</div>
												</div>
											</td>
											<td>
												701-5939659-9160208
											</td>
											<td>
											<div class="price">
													$9,250.00
												</div>
												
											</td>
											<td>
												<div class="status-order">
													<span class="cancel">Cancelado</span>
												</div>
											</td>
											
											<td>
											    <a class="btn btn-primary btn-sm btn-block" href="order-details.php" role="button ">Detalles del pedido</a>
											    <a class="btn btn-info btn-sm btn-block" href="#" role="button">Escribir una opinión del producto</a>
											    <a class="btn btn-warning btn-sm btn-block" href="#" role="button">Tengo un problema</a>
											</td>
											
										</tr>
										
								
									</tbody>
								</table><!-- /.table-wishlist -->
							</div><!-- /.wishlist-content -->
						</div><!-- /.wishlist -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-wishlish -->

	<?php include("footer.php"); ?>

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