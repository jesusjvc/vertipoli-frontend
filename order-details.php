<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Detalles del pedido</title>

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
        </div>
        <!-- /.preloader -->

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
                                <a href="orders.php" title="">Mis pedidos</a>
                                <span><img src="images/icons/arrow-right.png" alt=""></span>
                            </li>
                            <li class="trail-item">
                                <a href="#" title="">Detalles del pedido</a>
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

        <section class="flat-tracking background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="order-details">
                            <h3>Información del pedido #000</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="details">
                                        <p><strong>Fecha: </strong> 13/03/2018</p>
                                        <p><strong>Dirección de envío:</strong> Av. Garcia #4 Col. Los manzanos. Delegación Alvaro Obregon 03260.</p>
                                        <p><strong>Estado del pedido:</strong> Entregado vía DHL </p>

                                        <h4>Datos del vendedor</h4>
                                        <p><strong>Vendido por:</strong> <a href="#">Servicios Comerciales Amazon México S. de R.L. de C.V.</a></p>
                                        <p><strong>Teléfono:</strong> 777 222 55 33</p>
                                    </div>

                                </div>
                                <div class="col-md-6">                                    
                                    <a class="btn btn-info btn-sm btn-block" href="#" role="button">Escribir una opinión del producto</a>
                                    <a class="btn btn-warning btn-sm btn-block" href="#" role="button">Tengo un problema</a>
                                </div>
                            </div>



                            <div class="details-content">
                                <h3>Resumen de compra</h3>
                                <table class="table-details">
                                    <thead>
                                        <tr>
                                            <th>Producto</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="product">
                                                    <div class="image">
                                                        <img src="images/product/other/01.jpg" alt="">
                                                    </div>
                                                    <div class="name">
                                                        Lomas FL7751 Calentador Sumergible con Termostato Thermo-Jet 25W
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="price">
                                                    $6,250.00
                                                </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="product">
                                                    <div class="image">
                                                        <img src="images/product/other/01.jpg" alt="">
                                                    </div>
                                                    <div class="name">
                                                        Lomas FL7751 Calentador Sumergible con Termostato Thermo-Jet 45W
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="price">
                                                    $8,250.00
                                                </div>

                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Subtotal:</th>
                                            <th>
                                                <div class="price">$18,500.00 </div>
                                            </th>
                                        </tr>

                                        <tr>
                                            <th>Costo de envío:</th>
                                            <th>
                                                <div class="price">$500.00 </div>
                                            </th>
                                        </tr>

                                        <tr>
                                            <th>Total:</th>
                                            <th>
                                                <div class="price">$19,000.00 </div>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <!-- /.table-wishlist -->
                            </div>
                            <!-- /.wishlist-content -->


                        </div>

                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.flat-tracking -->


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
