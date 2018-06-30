<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Lista de Productos</title>

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
								<a href="#" title="">Smartphones</a>
							</li>
						</ul><!-- /.breacrumbs -->
					
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-breadcrumb -->

		<main id="shop">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-lg-3">
						<div class="sidebar ">
							<div class="widget widget-categories">
								<div class="widget-title">
									<h3>Categorías<span></span></h3>
								</div>
								<ul class="cat-list style1 widget-content">
									<li>
										<span>Accesorios<i>(03)</i></span>
										<ul class="cat-child">
											<li>
												<a href="#" title="">TV</a>
											</li>
											<li>
												<a href="#" title="">Monitors</a>
											</li>
											<li>
												<a href="#" title="">Software</a>
											</li>
										</ul>
									</li>
									<li>
										<span>Camaras<i>(19)</i></span>
										<ul class="cat-child">
											<li>
												<a href="#" title="">Go Pro</a>
											</li>
											<li>
												<a href="#" title="">Video</a>
											</li>
											<li>
												<a href="#" title="">Software</a>
											</li>
										</ul>
									</li>
									<li class="">
										<span>Computers<i>(56)</i></span>
										<ul class="cat-child">
											<li>
												<a href="#" title="">Desktop</a>
											</li>
											<li>
												<a href="#" title="">Monitors</a>
											</li>
											<li>
												<a href="#" title="">Software</a>
											</li>
										</ul>
									</li>
									<li>
										<span>Laptops<i>(03)</i></span>
										<ul class="cat-child">
											<li>
												<a href="#" title="">Desktop</a>
											</li>
											<li>
												<a href="#" title="">Monitors</a>
											</li>
											<li>
												<a href="#" title="">Software</a>
											</li>
										</ul>
									</li>
									<li>
										<span>Networking<i>(03)</i></span>
										<ul class="cat-child">
											<li>
												<a href="#" title="">Monitors</a>
											</li>
											<li>
												<a href="#" title="">Software</a>
											</li>
										</ul>
									</li>
									<li>
										<span>Old Products<i>(89)</i></span>
										<ul class="cat-child">
											<li>
												<a href="#" title="">Monitors</a>
											</li>
											<li>
												<a href="#" title="">Software</a>
											</li>
										</ul>
									</li>
									<li>
										<span>Smartphones<i>(90)</i></span>
										<ul class="cat-child">
											<li>
												<a href="#" title="">Apple</a>
											</li>
											<li>
												<a href="#" title="">HTC</a>
											</li>
											<li>
												<a href="#" title="">Sony</a>
											</li>
											<li>
												<a href="#" title="">Samsung</a>
											</li>
											<li>
												<a href="#" title="">LG</a>
											</li>
										</ul>
									</li>
									<li>
										<span>Software<i>(23)</i></span>
										<ul class="cat-child">
											<li>
												<a href="#" title="">Desktop</a>
											</li>
											<li>
												<a href="#" title="">Monitors</a>
											</li>
											<li>
												<a href="#" title="">BKAV</a>
											</li>
										</ul>
									</li>
								</ul><!-- /.cat-list -->
							</div><!-- /.widget-categories -->
							<div class="widget widget-price">
								<div class="widget-title">
									<h3>Precio<span></span></h3>
								</div>
								<div class="widget-content">
									<p>Precio</p>
									<div class="price search-filter-input">
                                        <div id="slider-range" class="price-slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" ></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span></div>
                                        <p class="amount">
                                          <input type="text" id="amount" disabled="">
                                        </p>
                                   </div>
								</div>
							</div><!-- /.widget widget-price -->
							<div class="widget widget-brands">
								<div class="widget-title">
									<h3>Marcas<span></span></h3>
								</div>
								<div class="widget-content">
									<form action="#" method="get" accept-charset="utf-8">
										<input type="text" name="brands" placeholder="Búsqueda por Marca">
									</form>
									<ul class="box-checkbox scroll">
										<li class="check-box">
											<input type="checkbox" id="checkbox1" name="checkbox1">
											<label for="checkbox1">Apple <span>(4)</span></label>
										</li>
										<li class="check-box">
											<input type="checkbox" id="checkbox2" name="checkbox2">
											<label for="checkbox2">Samsung <span>(2)</span></label>
										</li>
										<li class="check-box">
											<input type="checkbox" id="checkbox3" name="checkbox3">
											<label for="checkbox3">HTC <span>(2)</span></label>
										</li>
										<li class="check-box">
											<input type="checkbox" id="checkbox4" name="checkbox4">
											<label for="checkbox4">LG <span>(2)</span></label>
										</li>
										<li class="check-box">
											<input type="checkbox" id="checkbox5" name="checkbox5">
											<label for="checkbox5">Dell <span>(1)</span></label>
										</li>
										<li class="check-box">
											<input type="checkbox" id="checkbox6" name="checkbox6">
											<label for="checkbox6">Sony <span>(3)</span></label>
										</li>
										<li class="check-box">
											<input type="checkbox" id="checkbox7" name="checkbox7">
											<label for="checkbox7">Bphone <span>(4)</span></label>
										</li>
										<li class="check-box">
											<input type="checkbox" id="checkbox8" name="checkbox8">
											<label for="checkbox8">Oppo <span>(4)</span></label>
										</li>
									</ul>
								</div>
							</div><!-- /.widget widget-brands -->
							<div class="widget widget-color">
								<div class="widget-title">
									<h3>Color<span></span></h3>
									<div style="height: 2px"></div>
								</div>
								<div class="widget-content">
									<form action="#" method="get" accept-charset="utf-8">
										<input type="text" name="color" placeholder="Búsqueda por Color">
									</form>
									<div style="height: 5px"></div>
									<ul class="box-checkbox scroll">
										<li class="check-box">
											<input type="checkbox" id="check1" name="check1">
											<label for="check1">Black <span>(4)</span></label>
										</li>
										<li class="check-box">
											<input type="checkbox" id="check2" name="check2">
											<label for="check2">Yellow <span>(2)</span></label>
										</li>
										<li class="check-box">
											<input type="checkbox" id="check3" name="check3">
											<label for="check3">White <span>(2)</span></label>
										</li>
										<li class="check-box">
											<input type="checkbox" id="check4" name="check4">
											<label for="check4">Blue <span>(2)</span></label>
										</li>
										<li class="check-box">
											<input type="checkbox" id="check5" name="check5">
											<label for="check5">Red <span>(1)</span></label>
										</li>
										<li class="check-box">
											<input type="checkbox" id="check6" name="check6">
											<label for="check6">Pink <span>(3)</span></label>
										</li>
										<li class="check-box">
											<input type="checkbox" id="check7" name="check7">
											<label for="check7">Green <span>(4)</span></label>
										</li>
										<li class="check-box">
											<input type="checkbox" id="check8" name="check8">
											<label for="check8">Gold <span>(4)</span></label>
										</li>
									</ul>
								</div>
							</div><!-- /.widget widget-color -->
							<div class="widget widget-products">
								<div class="widget-title">
									<h3>Más Vendidos<span></span></h3>
								</div>
								<ul class="product-list widget-content">
									<li>
										<div class="img-product">
											<a href="#" title="">
												<img src="images/blog/14.jpg" alt="">
											</a>
										</div>
										<div class="info-product">
											<div class="name">
												<a href="#" title="">Razer RZ02-01071 <br/>500-R3M1</a>
											</div>
											<div class="queue">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="price">
												<span class="sale">$50.00</span>
												<span class="regular">$2,999.00</span>
											</div>
										</div>
									</li>	
									<li>
										<div class="img-product">
											<a href="#" title="">
												<img src="images/blog/13.jpg" alt="">
											</a>
										</div>
										<div class="info-product">
											<div class="name">
												<a href="#" title="">Notebook Black Spire <br/>V Nitro VN7-591G</a>
											</div>
											<div class="queue">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="price">
												<span class="sale">$24.00</span>
												<span class="regular">$2,999.00</span>
											</div>
										</div>
									</li>
									<li>
										
										<div class="img-product">
											<a href="#" title="">
												<img src="images/blog/12.jpg" alt="">
											</a>
										</div>
										<div class="info-product">
											<div class="name">
												<a href="#" title="">Apple iPad Mini <br/>G2356</a>
											</div>
											<div class="queue">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="price">
												<span class="sale">$90.00</span>
												<span class="regular">$2,999.00</span>
											</div>
										</div>
									</li>	
								</ul>
							</div><!-- /.widget widget-products -->
							<div class="widget widget-banner">
								<div class="banner-box">
									<div class="inner-box">
										<a href="#" title="">
											<img src="images/banner_boxes/06.png" alt="">
										</a>
									</div>
								</div>
							</div><!-- /.widget widget-banner -->
						</div><!-- /.sidebar -->
					</div><!-- /.col-md-4 col-lg-3 -->
					<div class="col-md-8 col-lg-9">
						<div class="main-shop">
							<div class="slider owl-carousel-16 style1">
								<div class="slider-item style9">
									<div class="item-text">
										<div class="header-item">
											<p>Puedes construir el banner para otra categoría</p>
											<h2 class="name">Banner de Tienda</h2>
										</div>
									</div>
									<div class="item-image">
										<img src="images/banner_boxes/07.png" alt="">
									</div>
									<div class="clearfix"></div>
								</div><!-- /.slider-item style9 -->
								<div class="slider-item style9">
									<div class="item-text">
										<div class="header-item">
											<p>Puedes construir el banner para otra categoría</p>
											<h2 class="name">Banner de Tienda</h2>
										</div>
									</div>
									<div class="item-image">
										<img src="images/banner_boxes/05.png" alt="">
									</div>
									<div class="clearfix"></div>
								</div><!-- /.slider-item style9 -->
								<div class="slider-item style9">
									<div class="item-text">
										<div class="header-item">
											<p>Puedes construir el banner para otra categoría</p>
											<h2 class="name">Banner de Tienda</h2>
										</div>
									</div>
									<div class="item-image">
										<img src="images/banner_boxes/07.png" alt="">
									</div>
									<div class="clearfix"></div>
								</div><!-- /.slider-item style9 -->
								<div class="slider-item style9">
									<div class="item-text">
										<div class="header-item">
											<p>You can build the banner for other category</p>
											<h2 class="name">Shop Banner</h2>
										</div>
									</div>
									<div class="item-image">
										<img src="images/banner_boxes/05.png" alt="">
									</div>
									<div class="clearfix"></div>
								</div><!-- /.slider-item style9 -->
								<div class="slider-item style9">
									<div class="item-text">
										<div class="header-item">
											<p>You can build the banner for other category</p>
											<h2 class="name">Shop Banner</h2>
										</div>
									</div>
									<div class="item-image">
										<img src="images/banner_boxes/07.png" alt="">
									</div>
									<div class="clearfix"></div>
								</div><!-- /.slider-item style9 -->
								<div class="slider-item style9">
									<div class="item-text">
										<div class="header-item">
											<p>You can build the banner for other category</p>
											<h2 class="name">Shop Banner</h2>
										</div>
									</div>
									<div class="item-image">
										<img src="images/banner_boxes/07.png" alt="">
									</div>
									<div class="clearfix"></div>
								</div><!-- /.slider-item style9 -->
							</div><!-- /.slider -->
							<div class="wrap-imagebox">
								<div class="flat-row-title style1">
									<h3>Mobile & Tablet</h3>
									<span>
										Mostrando 1–15 de 20 resultados
									</span>
									<div class="clearfix"></div>
								</div>
								<div class="sort-product">
									<ul class="icons">
										<li>
											<img src="images/icons/list-1.png" alt="">
										</li>
										<li>
											<img src="images/icons/list-2.png" alt="">
										</li>
									</ul><!-- /.icons -->
									<div class="sort">
										<div class="popularity">
											<select name="popularity">
												<option value="">Ordenar por Popularidad</option>
												<option value="">Sort by popularity</option>
												<option value="">Sort by popularity</option>
												<option value="">Sort by popularity</option>
											</select>
										</div>
										<div class="showed">
											<select name="showed">
												<option value="">Mostrar 15</option>
												<option value="">Show 15</option>
												<option value="">Show 15</option>
												<option value="">Show 15</option>
											</select>
										</div>
									</div><!-- /.sort -->
									<div class="clearfix"></div>
								</div><!-- /.sort-product -->
								<div class="tab-product">
									<div class="sort-box">
										<div class="product-box style3">
											<div class="imagebox style1 v3">
												<div class="box-image">
													<a href="#" title="">
														<img src="images/product/other/s02.jpg" alt="">
													</a>
												</div><!-- /.box-image -->
												<div class="box-content">
													<div class="cat-name">
														<a href="#" title="">Cameras</a>
													</div>
													<div class="product-name">
														<a href="#" title="">Apple iPad Air Lenta<br />Tablet</a>
													</div>
													<div class="status">
														Dispnibilidad: En exsitencia
													</div>
													<div class="info">
														<p>
															The iPhone 5c replaces the iPhone 5 in the Apple stable, inheriting its internals, like the A6 processor, 4" screen...
														</p>
													</div>
												</div><!-- /.box-content -->
												<div class="box-price">
													<div class="price">
														<span class="regular">$2,999.00</span>
														<span class="sale">$1,999.00</span>
													</div>
													<div class="btn-add-cart">
														<a href="#" title="">
															<img src="images/icons/add-cart.png" alt="">Agregar
														</a>
													</div>
													<div class="compare-wishlist">
														<a href="#" class="wishlist" title="">
															<img src="images/icons/wishlist.png" alt="">Favoritos
														</a>
													</div>
												</div><!-- /.box-price -->
											</div><!-- /.imagebox -->
										</div><!-- /.product-box -->
										<div class="product-box style3">
											<div class="imagebox style1 v3">
												<div class="box-image">
													<a href="#" title="">
														<img src="images/product/other/s02.jpg" alt="">
													</a>
												</div><!-- /.box-image -->
												<div class="box-content">
													<div class="cat-name">
														<a href="#" title="">Cameras</a>
													</div>
													<div class="product-name">
														<a href="#" title="">Apple iPad Air 2 32GB 9.7"<br />Tablet</a>
													</div>
													<div class="status">
														Dispnibilidad: En exsitencia
													</div>
													<div class="info">
														<p>
															The iPhone 5c replaces the iPhone 5 in the Apple stable, inheriting its internals, like the A6 processor, 4" screen...
														</p>
													</div>
												</div><!-- /.box-content -->
												<div class="box-price">
													<div class="price">
														<span class="regular">$2,999.00</span>
														<span class="sale">$1,999.00</span>
													</div>
													<div class="btn-add-cart">
														<a href="#" title="">
															<img src="images/icons/add-cart.png" alt="">Agregar
														</a>
													</div>
													<div class="compare-wishlist">
														<a href="#" class="wishlist" title="">
															<img src="images/icons/wishlist.png" alt="">Favoritos
														</a>
													</div>
												</div><!-- /.box-price -->
											</div><!-- /.imagebox -->
										</div><!-- /.product-box -->
										<div class="product-box style3">
											<div class="imagebox style1 v3">
												<div class="box-image">
													<a href="#" title="">
														<img src="images/product/other/s02.jpg" alt="">
													</a>
												</div><!-- /.box-image -->
												<div class="box-content">
													<div class="cat-name">
														<a href="#" title="">Cameras</a>
													</div>
													<div class="product-name">
														<a href="#" title="">Apple iPad Air 2 32GB 9.7"<br />Tablet</a>
													</div>
													<div class="status">
														Dispnibilidad: En exsitencia
													</div>
													<div class="info">
														<p>
															The iPhone 5c replaces the iPhone 5 in the Apple stable, inheriting its internals, like the A6 processor, 4" screen...
														</p>
													</div>
												</div><!-- /.box-content -->
												<div class="box-price">
													<div class="price">
														<span class="regular">$2,999.00</span>
														<span class="sale">$1,999.00</span>
													</div>
													<div class="btn-add-cart">
														<a href="#" title="">
															<img src="images/icons/add-cart.png" alt="">Agregar
														</a>
													</div>
													<div class="compare-wishlist">
														<a href="#" class="wishlist" title="">
															<img src="images/icons/wishlist.png" alt="">Favoritos
														</a>
													</div>
												</div><!-- /.box-price -->
											</div><!-- /.imagebox -->
										</div><!-- /.product-box -->
										<div class="product-box style3">
											<div class="imagebox style1 v3">
												<div class="box-image">
													<a href="#" title="">
														<img src="images/product/other/s02.jpg" alt="">
													</a>
												</div><!-- /.box-image -->
												<div class="box-content">
													<div class="cat-name">
														<a href="#" title="">Cameras</a>
													</div>
													<div class="product-name">
														<a href="#" title="">Apple iPad Air 2 32GB 9.7"<br />Tablet</a>
													</div>
													<div class="status">
														Dispnibilidad: En exsitencia
													</div>
													<div class="info">
														<p>
															The iPhone 5c replaces the iPhone 5 in the Apple stable, inheriting its internals, like the A6 processor, 4" screen...
														</p>
													</div>
												</div><!-- /.box-content -->
												<div class="box-price">
													<div class="price">
														<span class="regular">$2,999.00</span>
														<span class="sale">$1,999.00</span>
													</div>
													<div class="btn-add-cart">
														<a href="#" title="">
															<img src="images/icons/add-cart.png" alt="">Agregar
														</a>
													</div>
													<div class="compare-wishlist">
														<a href="#" class="wishlist" title="">
															<img src="images/icons/wishlist.png" alt="">Favoritos
														</a>
													</div>
												</div><!-- /.box-price -->
											</div><!-- /.imagebox -->
										</div><!-- /.product-box -->
										<div class="product-box style3">
											<div class="imagebox style1 v3">
												<div class="box-image">
													<a href="#" title="">
														<img src="images/product/other/s02.jpg" alt="">
													</a>
												</div><!-- /.box-image -->
												<div class="box-content">
													<div class="cat-name">
														<a href="#" title="">Cameras</a>
													</div>
													<div class="product-name">
														<a href="#" title="">Apple iPad Air 2 32GB 9.7"<br />Tablet</a>
													</div>
													<div class="status">
														Dispnibilidad: En exsitencia
													</div>
													<div class="info">
														<p>
															The iPhone 5c replaces the iPhone 5 in the Apple stable, inheriting its internals, like the A6 processor, 4" screen...
														</p>
													</div>
												</div><!-- /.box-content -->
												<div class="box-price">
													<div class="price">
														<span class="regular">$2,999.00</span>
														<span class="sale">$1,999.00</span>
													</div>
													<div class="btn-add-cart">
														<a href="#" title="">
															<img src="images/icons/add-cart.png" alt="">Agregar
														</a>
													</div>
													<div class="compare-wishlist">
														<a href="#" class="wishlist" title="">
															<img src="images/icons/wishlist.png" alt="">Favoritos
														</a>
													</div>
												</div><!-- /.box-price -->
											</div><!-- /.imagebox -->
										</div><!-- /.product-box -->
										<div style="height: 9px;"></div>
									</div><!-- /.sort-box -->
									<div class="row sort-box">
										<div class="col-lg-4 col-sm-6">
											<div class="product-box">
												<div class="imagebox">
													<div class="box-image owl-carousel-1">
														<a href="#" title="">
															<img src="images/product/other/02.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/02.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/02.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Cameras</a>
														</div>
														<div class="product-name">
															<a href="#" title="">Sopa X5C-1 2.4Ghz Gyro<br />RC Quadcopter Drone</a>
														</div>
														<div class="price">
															<span class="sale">$2,009.00</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
																<img src="images/icons/add-cart.png" alt="">Add to Cart
															</a>
														</div>
														<div class="compare-wishlist">
															<a href="#" class="compare" title="">
																<img src="images/icons/compare.png" alt="">Compare
															</a>
															<a href="#" class="wishlist" title="">
																<img src="images/icons/wishlist.png" alt="">Wishlist
															</a>
														</div>
													</div><!-- /.box-bottom -->
												</div><!-- /.imagebox -->
											</div>
										</div><!-- /.col-lg-4 col-sm-6 -->
										<div class="col-lg-4 col-sm-6">
											<div class="product-box">
												<div class="imagebox">
													<div class="box-image owl-carousel-1">
														<a href="#" title="">
															<img src="images/product/other/03.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/03.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/03.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Headphones</a>
														</div>
														<div class="product-name">
															<a href="#" title="">Beats Solo<br />HD</a>
														</div>
														<div class="price">
															<span class="sale">$1,999.00</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
																<img src="images/icons/add-cart.png" alt="">Add to Cart
															</a>
														</div>
														<div class="compare-wishlist">
															<a href="#" class="compare" title="">
																<img src="images/icons/compare.png" alt="">Compare
															</a>
															<a href="#" class="wishlist" title="">
																<img src="images/icons/wishlist.png" alt="">Wishlist
															</a>
														</div>
													</div><!-- /.box-bottom -->
												</div><!-- /.imagebox -->
											</div>
										</div><!-- /.col-lg-4 col-sm-6 -->
										<div class="col-lg-4 col-sm-6">
											<div class="product-box">
												<div class="imagebox">
													<span class="item-sale">DE OFERTA</span>
													<div class="box-image owl-carousel-1">
														<a href="#" title="">
															<img src="images/product/other/04.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/04.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/04.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Computers</a>
														</div>
														<div class="product-name">
															<a href="#" title="">Apple İmac Z0SC4824<br />Retina</a>
														</div>
														<div class="price">
															<span class="sale">$5,759.68</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
																<img src="images/icons/add-cart.png" alt="">Agregar al Carrito
															</a>
														</div>
														<div class="compare-wishlist">
															<a href="#" class="wishlist" title="">
																<img src="images/icons/wishlist.png" alt="">Favoritos
															</a>
														</div>
													</div><!-- /.box-bottom -->
												</div><!-- /.imagebox -->
											</div>
										</div><!-- /.col-lg-4 col-sm-6 -->
										<div class="col-lg-4 col-sm-6">
											<div class="product-box">
												<div class="imagebox">
													<div class="box-image owl-carousel-1">
														<a href="#" title="">
															<img src="images/product/other/06.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/06.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/06.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Cameras</a>
														</div>
														<div class="product-name">
															<a href="#" title="">New X5C-1 2.4Ghz Gyro <br />RC Quadcopter Drone</a>
														</div>
														<div class="price">
															<span class="sale">$2,009.00</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
																<img src="images/icons/add-cart.png" alt="">Add to Cart
															</a>
														</div>
														<div class="compare-wishlist">
															<span class="compare">
																<a href="#" title="">
																	<img src="images/icons/compare.png" alt="">Compare
																</a>
															</span>
															<span class="wishlist">
																<a href="#" title="">
																	<img src="images/icons/wishlist.png" alt="">Wishlist
																</a>
															</span>
														</div>
													</div><!-- /.box-bottom -->
												</div><!-- /.imagebox -->
											</div>
										</div><!-- /.col-lg-4 col-sm-6 -->
										<div class="col-lg-4 col-sm-6">
											<div class="product-box">
												<div class="imagebox">
													<div class="box-image owl-carousel-1">
														<a href="#" title="">
															<img src="images/product/other/07.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/07.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/07.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Computers</a>
														</div>
														<div class="product-name">
															<a href="#" title="">Apple iPad Air 2 32GB 9.7" <br />Tablet</a>
														</div>
														<div class="price">
															<span class="sale">$5,759.68</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
																<img src="images/icons/add-cart.png" alt="">Add to Cart
															</a>
														</div>
														<div class="compare-wishlist">
															<a href="#" class="compare" title="">
																<img src="images/icons/compare.png" alt="">Compare
															</a>
															<a href="#" class="wishlist" title="">
																<img src="images/icons/wishlist.png" alt="">Wishlist
															</a>
														</div>
													</div><!-- /.box-bottom -->
												</div><!-- /.imagebox -->
											</div>
										</div><!-- /.col-lg-4 col-sm-6 -->
										<div class="col-lg-4 col-sm-6">
											<div class="product-box">
												<div class="imagebox">
													<div class="box-image owl-carousel-1">
														<a href="#" title="">
															<img src="images/product/other/08.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/08.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/08.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Computers</a>
														</div>
														<div class="product-name">
															<a href="#" title="">Apple İmac Z0SC4824<br />Retina</a>
														</div>
														<div class="price">
															<span class="sale">$5,759.68</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
																<img src="images/icons/add-cart.png" alt="">Add to Cart
															</a>
														</div>
														<div class="compare-wishlist">
															<a href="#" class="compare" title="">
																<img src="images/icons/compare.png" alt="">Compare
															</a>
															<a href="#" class="wishlist" title="">
																<img src="images/icons/wishlist.png" alt="">Wishlist
															</a>
														</div>
													</div><!-- /.box-bottom -->
												</div><!-- /.imagebox -->
											</div>
										</div><!-- /.col-lg-4 col-sm-6 -->
										<div class="col-lg-4 col-sm-6">
											<div class="product-box">
												<div class="imagebox">
													<span class="item-new">NEW</span>
													<div class="box-image owl-carousel-1">
														<a href="#" title="">
															<img src="images/product/other/01.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/01.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/01.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Laptops</a>
														</div>
														<div class="product-name">
															<a href="#" title="">Apple iPad Mini<br />G2356</a>
														</div>
														<div class="price">
															<span class="sale">$1,250.00</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
																<img src="images/icons/add-cart.png" alt="">Add to Cart
															</a>
														</div>
														<div class="compare-wishlist">
															<a href="#" class="compare" title="">
																<img src="images/icons/compare.png" alt="">Compare
															</a>
															<a href="#" class="wishlist" title="">
																<img src="images/icons/wishlist.png" alt="">Wishlist
															</a>
														</div>
													</div><!-- /.box-bottom -->
												</div><!-- /.imagebox -->
											</div>
										</div><!-- /.col-lg-4 col-sm-6 -->
										<div class="col-lg-4 col-sm-6">
											<div class="product-box">
												<div class="imagebox">
													<div class="box-image owl-carousel-1">
														<a href="#" title="">
															<img src="images/product/other/05.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/05.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/05.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Cameras</a>
														</div>
														<div class="product-name">
															<a href="#" title="">Apple iPad Mini<br />G2356</a>
														</div>
														<div class="price">
															<span class="sale">$1,250.00</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
																<img src="images/icons/add-cart.png" alt="">Add to Cart
															</a>
														</div>
														<div class="compare-wishlist">
															<span class="compare">
																<a href="#" title="">
																	<img src="images/icons/compare.png" alt="">Compare
																</a>
															</span>
															<span class="wishlist">
																<a href="#" title="">
																	<img src="images/icons/wishlist.png" alt="">Wishlist
																</a>
															</span>
														</div>
													</div><!-- /.box-bottom -->
												</div><!-- /.imagebox -->
											</div>
										</div><!-- /.col-lg-4 col-sm-6 -->
										<div class="col-lg-4 col-sm-6">
											<div class="product-box">
												<div class="imagebox">
													<div class="box-image owl-carousel-1">
														<a href="#" title="">
															<img src="images/product/other/l03.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/l03.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/l03.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Laptops</a>
														</div>
														<div class="product-name">
															<a href="#" title="">Apple iPad Mini<br />G2356</a>
														</div>
														<div class="price">
															<span class="sale">$1,250.00</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
																<img src="images/icons/add-cart.png" alt="">Add to Cart
															</a>
														</div>
														<div class="compare-wishlist">
															<a href="#" class="compare" title="">
																<img src="images/icons/compare.png" alt="">Compare
															</a>
															<a href="#" class="wishlist" title="">
																<img src="images/icons/wishlist.png" alt="">Wishlist
															</a>
														</div>
													</div><!-- /.box-bottom -->
												</div><!-- /.imagebox -->
											</div>
										</div><!-- /.col-lg-4 col-sm-6 -->
										<div class="col-lg-4 col-sm-6">
											<div class="product-box">
												<div class="imagebox">
													<div class="box-image owl-carousel-1">
														<a href="#" title="">
															<img src="images/product/other/l02.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/l02.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/l02.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Laptops</a>
														</div>
														<div class="product-name">
															<a href="#" title="">Apple iPad Mini <br />G2356</a>
														</div>
														<div class="price">
															<span class="sale">$1,250.00</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
																<img src="images/icons/add-cart.png" alt="">Add to Cart
															</a>
														</div>
														<div class="compare-wishlist">
															<a href="#" class="compare" title="">
																<img src="images/icons/compare.png" alt="">Compare
															</a>
															<a href="#" class="wishlist" title="">
																<img src="images/icons/wishlist.png" alt="">Wishlist
															</a>
														</div>
													</div><!-- /.box-bottom -->
												</div><!-- /.imagebox -->
											</div>
										</div><!-- /.col-lg-4 col-sm-6 -->
										<div class="col-lg-4 col-sm-6">
											<div class="product-box">
												<div class="imagebox">
													<div class="box-image owl-carousel-1">
														<a href="#" title="">
															<img src="images/product/other/l04.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/l04.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/l04.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Cameras</a>
														</div>
														<div class="product-name">
															<a href="#" title="">HTC One M8</a>
														</div>
														<div class="price">
															<span class="sale">$2,009.00</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
																<img src="images/icons/add-cart.png" alt="">Add to Cart
															</a>
														</div>
														<div class="compare-wishlist">
															<a href="#" class="compare" title="">
																<img src="images/icons/compare.png" alt="">Compare
															</a>
															<a href="#" class="wishlist" title="">
																<img src="images/icons/wishlist.png" alt="">Wishlist
															</a>
														</div>
													</div><!-- /.box-bottom -->
												</div><!-- /.imagebox -->
											</div>
										</div><!-- /.col-lg-4 col-sm-6 -->
										<div class="col-lg-4 col-sm-6">
											<div class="product-box">
												<div class="imagebox">
													<div class="box-image owl-carousel-1">
														<a href="#" title="">
															<img src="images/product/other/l05.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/l05.jpg" alt="">
														</a>
														<a href="#" title="">
															<img src="images/product/other/l05.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Computers</a>
														</div>
														<div class="product-name">
															<a href="#" title="">Apple macbook pro Z0SC4824<br />Retina</a>
														</div>
														<div class="price">
															<span class="sale">$5,759.68</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
																<img src="images/icons/add-cart.png" alt="">Add to Cart
															</a>
														</div>
														<div class="compare-wishlist">
															<a href="#" class="compare" title="">
																<img src="images/icons/compare.png" alt="">Compare
															</a>
															<a href="#" class="wishlist" title="">
																<img src="images/icons/wishlist.png" alt="">Wishlist
															</a>
														</div>
													</div><!-- /.box-bottom -->
												</div><!-- /.imagebox -->
											</div>
										</div><!-- /.col-lg-4 col-sm-6 -->
									</div><!-- /.sort-box -->
								</div><!-- /.tab-product -->
							</div><!-- /.wrap-imagebox -->
							<div class="blog-pagination">
								<span>
									Mostrando 1–15 de 20 resultados
								</span>
								<ul class="flat-pagination style1">
									<li class="prev">
										<a href="#" title="">
											<img src="images/icons/left-1.png" alt="">Página anterior
										</a>
									</li>
									<li>
										<a href="#" class="waves-effect" title="">01</a>
									</li>
									<li>
										<a href="#" class="waves-effect" title="">02</a>
									</li>
									<li class="active">
										<a href="#" class="waves-effect" title="">03</a>
									</li>
									<li>
										<a href="#" class="waves-effect" title="">04</a>
									</li>
									<li class="next">
										<a href="#" title="">
											Siguiente página<img src="images/icons/right-1.png" alt="">
										</a>
									</li>
								</ul><!-- /.flat-pagination style1 -->
								<div class="clearfix"></div>
							</div><!-- /.blog-pagination -->
						</div><!-- /.main-shop -->
					</div><!-- /.col-md-8 col-lg-9 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</main><!-- /#shop -->

		<section class="flat-imagebox style4">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="flat-row-title">
							<h3>Productos Recientes</h3>
						</div>
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
				<div class="row">
					<div class="col-md-12">
						<div class="owl-carousel-3 style3">
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/09.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Apple iPad Mini<br />G2356</a>
									</div>
									<div class="price">
										<span class="sale">$50.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/10.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Apple iPad Mini<br />G2356</a>
									</div>
									<div class="price">
										<span class="sale">$600.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/11.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
									</div>
									<div class="price">
										<span class="sale">$1,023.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/12.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Apple iPad Mini<br />G2356</a>
									</div>
									<div class="price">
										<span class="sale">$1,489.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/13.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats EP On-Ear<br />Headphones - Blue</a>
									</div>
									<div class="price">
										<span class="sale">$1,749.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/09.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Apple iPad Mini<br />G2356</a>
									</div>
									<div class="price">
										<span class="sale">$50.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/10.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Apple iPad Mini<br />G2356</a>
									</div>
									<div class="price">
										<span class="sale">$600.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/11.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
									</div>
									<div class="price">
										<span class="sale">$1,023.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/12.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Apple iPad Mini<br />G2356</a>
									</div>
									<div class="price">
										<span class="sale">$1,489.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/13.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats EP On-Ear<br />Headphones - Blue</a>
									</div>
									<div class="price">
										<span class="sale">$1,749.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/09.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Apple iPad Mini<br />G2356</a>
									</div>
									<div class="price">
										<span class="sale">$50.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/10.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Apple iPad Mini<br />G2356</a>
									</div>
									<div class="price">
										<span class="sale">$600.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/11.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
									</div>
									<div class="price">
										<span class="sale">$1,023.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/12.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Apple iPad Mini<br />G2356</a>
									</div>
									<div class="price">
										<span class="sale">$1,489.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/13.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats EP On-Ear<br />Headphones - Blue</a>
									</div>
									<div class="price">
										<span class="sale">$1,749.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/09.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Apple iPad Mini<br />G2356</a>
									</div>
									<div class="price">
										<span class="sale">$50.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/10.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Apple iPad Mini<br />G2356</a>
									</div>
									<div class="price">
										<span class="sale">$600.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/11.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
									</div>
									<div class="price">
										<span class="sale">$1,023.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/12.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Apple iPad Mini<br />G2356</a>
									</div>
									<div class="price">
										<span class="sale">$1,489.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/13.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats EP On-Ear<br />Headphones - Blue</a>
									</div>
									<div class="price">
										<span class="sale">$1,749.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/09.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Apple iPad Mini<br />G2356</a>
									</div>
									<div class="price">
										<span class="sale">$50.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/10.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Apple iPad Mini<br />G2356</a>
									</div>
									<div class="price">
										<span class="sale">$600.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/11.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
									</div>
									<div class="price">
										<span class="sale">$1,023.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/12.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Apple iPad Mini<br />G2356</a>
									</div>
									<div class="price">
										<span class="sale">$1,489.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/13.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats EP On-Ear<br />Headphones - Blue</a>
									</div>
									<div class="price">
										<span class="sale">$1,749.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/09.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Apple iPad Mini<br />G2356</a>
									</div>
									<div class="price">
										<span class="sale">$50.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/10.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Apple iPad Mini<br />G2356</a>
									</div>
									<div class="price">
										<span class="sale">$600.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/11.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
									</div>
									<div class="price">
										<span class="sale">$1,023.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/12.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Apple iPad Mini<br />G2356</a>
									</div>
									<div class="price">
										<span class="sale">$1,489.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/13.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats EP On-Ear<br />Headphones - Blue</a>
									</div>
									<div class="price">
										<span class="sale">$1,749.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
						</div><!-- /.owl-carousel-3 style3 -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-imagebox style4 -->

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