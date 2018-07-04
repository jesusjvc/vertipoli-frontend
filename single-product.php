<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Techno Store - Single Product</title>

    <meta name="author" content="EsBrillante">

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
        </div>
        <!-- /.preloader -->

        <div class="popup-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">

                    </div>
                    <div class="col-sm-8">
                        <div class="popup">
                            <span></span>

                            <h2>Confirmo que quiero hacer una alianza con {{NOMBRETIENDA}} para comercializar este producto</h2>
                            <form action="">

                                <textarea name="mensaje">Hola me interesa realizar una alianza para vender este producto en mi tienda</textarea>

                                <div class="form-box checkbox">
                                    <input type="checkbox" id="politicas" name="politicas" required>
                                    <label for="politicas"><a href="#" target="_blank">Acepto las politicas de alianzas</a></label>
                                </div>

                                <div class="flex">
                                    <div class="columna">
                                        <div class="btn-submit">
                                            <button type="button" class="cerrar btn-danger">Cancelar</button>
                                        </div>
                                    </div>
                                    <div class="columna">
                                        <div class="btn-submit">
                                            <button type="submit" class="btn-success">Continuar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.popup -->
                    </div>
                    <!-- /.col-sm-8 -->
                    <div class="col-sm-2">

                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.popup-newsletter -->
        
        

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
                                <a href="#" title="">Smartphones</a>
                            </li>
                        </ul>
                        <!-- /.breacrumbs -->
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.flat-breadcrumb -->

        <section class="flat-product-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="flexslider">
                            <ul class="slides">
                                <li data-thumb="images/product/flexslider/thumb/2.jpg">
                                    <a href='#' id="zoom" class='zoom'><img src="images/product/flexslider/big-size.jpg" alt='' width='400' height='300' /></a>
                                    <span>NUEVO</span>
                                </li>
                                <li data-thumb="images/product/flexslider/thumb/3.jpg">
                                    <a href='#' id="zoom1" class='zoom'><img src="images/product/flexslider/big-size.jpg" alt='' width='400' height='300' /></a>
                                </li>
                                <li data-thumb="images/product/flexslider/thumb/4.jpg">
                                    <a href='#' id="zoom2" class='zoom'><img src="images/product/flexslider/big-size.jpg" alt='' width='400' height='300' /></a>
                                    <span>NUEVO</span>
                                </li>
                                <li data-thumb="images/product/flexslider/thumb/5.jpg">
                                    <a href='#' id="zoom3" class='zoom'><img src="images/product/flexslider/big-size.jpg" alt='' width='400' height='300' /></a>
                                </li>
                                <li data-thumb="images/product/flexslider/thumb/6.jpg">
                                    <a href='#' id="zoom4" class='zoom'><img src="images/product/flexslider/big-size.jpg" alt='' width='400' height='300' /></a>
                                </li>
                            </ul>
                            <!-- /.slides -->
                        </div>
                        <!-- /.flexslider -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <div class="product-detail">
                            <div class="header-detail">
                                <h4 class="name">Warch 42 mm Smart Watches</h4>
                                <div class="category">
                                    Smart Watches
                                </div>
                                <div class="reviewed">
                                    <div class="review">
                                        <div class="queue">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="text">
                                            <span>3 Opiniones</span>
                                            <span class="add-review">Agrega tu Opinión</span>
                                        </div>
                                    </div>
                                    <!-- /.review -->
                                    <div class="status-product">
                                        Disponibilidad <span>En existencia</span>
                                    </div>
                                </div>
                                <!-- /.reviewed -->
                            </div>
                            <!-- /.header-detail -->
                            <div class="content-detail">
                                <div class="price">
                                    <div class="regular">
                                        $2,999.00
                                    </div>
                                    <div class="sale">
                                        $1,589.00
                                    </div>
                                </div>
                                <div class="info-text">
                                    Vivamus in tempor eros. Phasellus rhoncus in nunc sit amet mattis. Integer in ipsum vestibulum, molestie arcu ac, efficitur tellus. Phasellus id vulputate erat.
                                </div>
                                <div class="product-id">
                                    ID de Producto: <span class="id">FW511948218</span>
                                </div>
                            </div>
                            <!-- /.content-detail -->
                            <div class="footer-detail">
                                <div class="quanlity-box">
                                    <div class="colors">
                                        <select name="color">
											<option value="">Seleccionar Color</option>
											<option value="">Negro</option>
											<option value="">Rojo</option>
											<option value="">Blanco</option>
										</select>
                                    </div>
                                    <div class="quanlity">
                                        <input type="number" name="cantidad" value="1" min="1" max="100" placeholder="Cantidad" required>
                                    </div>
                                </div>
                                <!-- /.quanlity-box -->
                                <div class="box-cart style2">
                                    <div class="btn-add-cart">
                                        <a href="#" title=""><img src="images/icons/add-cart.png" alt="">Agregar al Carrito</a>
                                    </div>
                                    <div class="compare-wishlist">
                                        <a href="compare.html" class="wishlist" title=""><img src="images/icons/wishlist.png" alt="">Favoritos</a>
                                    </div>
                                </div>
                                <!-- /.box-cart -->
                                <div class="social-single">
                                    <a href="#" id="alianza"><span>Quiero hacer una alianza para vender este producto</span> </a>
                                    <!-- /.social-list -->
                                </div>
                                <!-- /.social-single -->
                            </div>
                            <!-- /.footer-detail -->
                        </div>
                        <!-- /.product-detail -->
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.flat-product-detail -->

        <section class="info-tienda">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 vendedor">
                        <h2>Vendedor</h2>
                        <a href="#">
                            <img src="images/tiendas/logo-tienda2.jpg" alt="NOMBRE DEL VENDEDOR">
                        </a>
                    </div>
                    <div class="col-md-4 rate rating">
                        <h2>Valuaciones</h2>
                        <h3>4.5</h3>
                        <!--Stars-->
                        <div class="stars">
                            <ul class="queue-box">
                                <!--Aqui nadamas hay que cambiar el nombre de la clase -->
                                <li class="four-star">
                                    <span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-4 distintivos">
                        <h2>Distintivos</h2>
                        <ul class="flex">
                            <li><img src="images/icons/distintivo-1.svg" alt="Confiable"> <small>Confiable</small></li>
                            <li><img src="images/icons/distintivo-2.svg" alt="Servicio distinguido">
                                <small>Seguro</small></li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>
        <section class="flat-product-content">
            <ul class="product-detail-bar">
                <li class="active">Descripción</li>
                <li>Características</li>
                <li>Opiniones</li>
            </ul>
            <!-- /.product-detail-bar -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="description-text">
                            <div class="box-text">
                                <h4>Nuqqam Et Massa</h4>
                                <p>Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="box-text wireless">
                                <h4>Wireless</h4>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece <br />of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                            </div>
                            <div class="box-text design">
                                <h4>Fresh Design</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of <br />a page when looking at its layout. The point of using Lorem Ipsum is that it has a <br />more-or-less normal distribution of letters, as opposed to using</p>
                            </div>
                            <div class="box-text sound">
                                <h4>Fabolous Sound</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the <br />majority have suffered alteration in some form, by injected humour, or <br />randomised words which don't look even slightly believable.</p>
                            </div>
                        </div>
                        <!-- /.description-text -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <div class="description-image">
                            <div class="box-image">
                                <img src="images/product/single/01.png" alt="">
                            </div>
                            <div class="box-text">
                                <h4>Nuqqam Et Massa</h4>
                                <p>Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <!-- /.description-image -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-12">
                        <div class="different-color">
                            <div class="title">
                                Distintos Colores
                            </div>
                            <p>
                                Sed sodales sed orci<br />molestie
                            </p>
                        </div>
                        <!-- /.different-color -->
                    </div>
                    <!-- /.col-md-12 -->
                    <div class="col-md-6">
                        <div class="box-left">
                            <div class="img-line">
                                <img src="images/product/single/line-1.png" alt="">
                            </div>
                            <div class="img-product">
                                <img src="images/product/single/06.png" alt="">
                            </div>
                        </div>
                        <!-- /.box-left -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <div class="box-right">
                            <div class="img-line">
                                <img src="images/product/single/line-2.png" alt="">
                                <img src="images/product/single/04.png" alt="">
                            </div>
                            <div class="img-product">

                            </div>
                            <div class="box-text">
                                <h4>Nuqqam Et Massa</h4>
                                <p>Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <!-- /.box-right -->
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="tecnical-specs">
                            <h4 class="name">
                                Warch 42 mm Smart Watches
                            </h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Largo</td>
                                        <td>38.6mm</td>
                                    </tr>
                                    <tr>
                                        <td>Material</td>
                                        <td>Stainless Stee</td>
                                    </tr>
                                    <tr>
                                        <td>Peso</td>
                                        <td>40g</td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>blue, gray, green, light blue, lime, purple, red, yellow</td>
                                    </tr>
                                    <tr>
                                        <td>Profundidad</td>
                                        <td>10.5mm</td>
                                    </tr>
                                    <tr>
                                        <td>Ancho</td>
                                        <td>33.3mm</td>
                                    </tr>
                                    <tr>
                                        <td>Tamaños</td>
                                        <td>Large, Medium, Small</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /.table -->
                        </div>
                        <!-- /.tecnical-specs -->
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="rating">
                            <div class="title">
                                Con base en tres opiniones
                            </div>
                            <div class="score">
                                <div class="average-score">
                                    <p class="numb">4.3</p>
                                    <p class="text">Puntaje Promedio </p>
                                </div>
                                <div class="queue">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <!-- /.score -->
                            <ul class="queue-box">
                                <li class="five-star">
                                    <span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</span>
                                    <span class="numb-star">3</span>
                                </li>
                                <!-- /.five-star -->
                                <li class="four-star">
                                    <span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</span>
                                    <span class="numb-star">4</span>
                                </li>
                                <!-- /.four-star -->
                                <li class="three-star">
                                    <span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</span>
                                    <span class="numb-star">3</span>
                                </li>
                                <!-- /.three-star -->
                                <li class="two-star">
                                    <span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</span>
                                    <span class="numb-star">2</span>
                                </li>
                                <!-- /.two-star -->
                                <li class="one-star">
                                    <span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</span>
                                    <span class="numb-star">0</span>
                                </li>
                                <!-- /.one-star -->
                            </ul>
                            <!-- /.queue-box -->
                        </div>
                        <!-- /.rating -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <div class="form-review">
                            <div class="title">
                                Opinar Acerca del Producto
                            </div>
                            <div class="your-rating queue">
                                <span>Calificación</span>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <form action="#" method="get" accept-charset="utf-8">
                                <div class="review-form-name">
                                    <input type="text" name="name-author" value="" placeholder="Name">
                                </div>
                                <div class="review-form-email">
                                    <input type="text" name="email-author" value="" placeholder="Email">
                                </div>
                                <div class="review-form-comment">
                                    <textarea name="review-text" placeholder="Your Name"></textarea>
                                </div>
                                <div class="btn-submit">
                                    <button type="submit">Opinar</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.form-review -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-12">
                        <ul class="review-list">
                            <li>
                                <div class="review-metadata">
                                    <div class="name">
                                        Ali Tufan : <span>April 3, 2016</span>
                                    </div>
                                    <div class="queue">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <!-- /.review-metadata -->
                                <div class="review-content">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </p>
                                </div>
                                <!-- /.review-content -->
                            </li>
                            <li>
                                <div class="review-metadata">
                                    <div class="name">
                                        Peter Tufan : <span>April 3, 2016</span>
                                    </div>
                                    <div class="queue">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <!-- /.review-metadata -->
                                <div class="review-content">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </p>
                                </div>
                                <!-- /.review-content -->
                            </li>
                            <li>
                                <div class="review-metadata">
                                    <div class="name">
                                        Jon Tufan : <span>April 3, 2016</span>
                                    </div>
                                    <div class="queue">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <!-- /.review-metadata -->
                                <div class="review-content">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </p>
                                </div>
                                <!-- /.review-content -->
                            </li>
                        </ul>
                        <!-- /.review-list -->
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.flat-product-content -->

        <section class="flat-imagebox style4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flat-row-title">
                            <h3>Productos Recientes</h3>
                        </div>
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel-3">
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/09.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/10.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/11.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/12.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/13.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/09.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/10.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/11.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/12.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/13.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/09.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/10.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/11.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/12.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/13.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/09.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/10.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/11.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/12.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/13.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/09.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/10.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/11.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/12.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/13.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/09.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/10.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/11.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/12.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="#" title="">
										<img src="images/product/other/13.jpg" alt="">
									</a>
                                </div>
                                <!-- /.box-image -->
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
                                </div>
                                <!-- /.box-content -->
                            </div>
                            <!-- /.imagebox style4 -->
                        </div>
                        <!-- /.owl-carousel-3 -->
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.flat-imagebox style4 -->

        <?php include("footer.php"); ?>

    </div>
    <!-- /.boxed -->

    <!-- Javascript -->
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/tether.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/waypoints.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.circlechart.js"></script>
    <script type="text/javascript" src="javascript/easing.js"></script>
    <script type="text/javascript" src="javascript/jquery.zoom.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.zoom.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="javascript/owl.carousel.js"></script>
    <script type="text/javascript" src="javascript/smoothscroll.js"></script>
    <script type="text/javascript" src="javascript/jquery-ui.js"></script>
    <script type="text/javascript" src="javascript/jquery.mCustomScrollbar.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtRmXKclfDp20TvfQnpgXSDPjut14x5wk&region=GB"></script>
    <script type="text/javascript" src="javascript/gmap3.min.js"></script>
    <script type="text/javascript" src="javascript/waves.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.countdown.js"></script>

    <script type="text/javascript" src="javascript/main.js"></script>


</body>

</html>
