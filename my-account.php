<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Mi cuenta</title>

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
                                <a href="#" title="">Home</a>
                                <span><img src="images/icons/arrow-right.png" alt=""></span>
                            </li>
                            <li class="trail-item">
                                <a href="#" title="">Mi cuenta</a>
                                <span><img src="images/icons/arrow-right.png" alt=""></span>
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
                        <div class="order-tracking">

                            <div class="widget widget-apps">
                                <div class="widget-title">
                                    <h3>Mi cuenta</h3>
                                </div>
                                <ul class="app-list">
                                    
                                    <li class="mis-pedidos">
                                        <a href="orders.php" title="">
                                            <div class="img">
                                                <img src="images/icons/box.svg" alt="">
                                            </div>
                                            <div class="text">
                                                <h4>Mis pedidos</h4>
                                                <p>Consulta los pedidos que haz realizado.</p>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- /.app-store -->
                                    <li class="seguridad">
                                        <a href="#" title="">
                                            <div class="img">
                                                <img src="images/icons/locked.svg" alt="">
                                            </div>
                                            <div class="text">
                                                <h4>Seguridad</h4>
                                                <p>Actualiza tu información personal y contraseña.</p>
                                            </div>
                                        </a>
                                    </li>
                                    
                                    <li class="direcciones">
                                        <a href="#" title="">
                                            <div class="img">
                                                <img src="images/icons/map-location.svg" alt="">
                                            </div>
                                            <div class="text">
                                                <h4>Direcciones</h4>
                                                <p>Edita las direcciones que tienes registradas para los pedidos.</p>
                                            </div>
                                        </a>
                                    </li>
                                    
                                    <li class="favoritos">
                                        <a href="wishlist.php" title="">
                                            <div class="img">
                                                <img src="images/icons/like.svg" alt="">
                                            </div>
                                            <div class="text">
                                                <h4>Favoritos</h4>
                                                <p>Lista de productos que te han gustado</p>
                                            </div>
                                        </a>
                                    </li>
                                    
                                </ul>
                                <!-- /.app-list -->
                            </div>
                            <!-- /.widget-apps -->

                        </div>
                        <!-- /.order-tracking -->
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
