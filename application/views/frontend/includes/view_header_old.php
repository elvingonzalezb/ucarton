<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title><?php  echo $title?></title>

    <base href="<?php  echo base_url()?>">



    <?php  if(!empty($description)): ?>

        <meta name="description" content="<?php echo $description;?>">                                

        <meta name="keywords" content="fashion, store, E-commerce,<?php echo $description;?>">

    <?php  endif;   ?>

    <!-- For IE -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <!-- For Resposive Device -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>Gardener</title>



    <!-- Favicon -->

    <!--<link rel="apple-touch-icon" sizes="57x57" href="assets/frontend/images/fav-icon/apple-icon-57x57.png">

    <link rel="apple-touch-icon" sizes="60x60" href="assets/frontend/images/fav-icon/apple-icon-60x60.png">

    <link rel="apple-touch-icon" sizes="72x72" href="assets/frontend/images/fav-icon/apple-icon-72x72.png">

    <link rel="apple-touch-icon" sizes="76x76" href="assets/frontend/images/fav-icon/apple-icon-76x76.png">

    <link rel="apple-touch-icon" sizes="114x114" href="assets/frontend/images/fav-icon/apple-icon-114x114.png">

    <link rel="apple-touch-icon" sizes="120x120" href="assets/frontend/images/fav-icon/apple-icon-120x120.png">

    <link rel="apple-touch-icon" sizes="144x144" href="assets/frontend/images/fav-icon/apple-icon-144x144.png">

    <link rel="apple-touch-icon" sizes="152x152" href="assets/frontend/images/fav-icon/apple-icon-152x152.png">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/frontend/images/fav-icon/apple-icon-180x180.png">

    <link rel="icon" type="image/png" sizes="192x192"  href="assets/frontend/images/fav-icon/android-icon-192x192.png">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/frontend/images/fav-icon/favicon-32x32.png">

    <link rel="icon" type="image/png" sizes="96x96" href="assets/frontend/images/fav-icon/favicon-96x96.png">-->

    <link rel="icon" type="image/png" sizes="16x16" href="assets/frontend/images/favicon.png">





    <!-- Bootstrap CSS -->

    <link rel="stylesheet" type="text/css" href="assets/frontend/css/bootstrap/bootstrap.css" media="screen">



    <!-- Vendor css -->

    <link rel="stylesheet" type="text/css" href="assets/frontend/css/revolution/settings.css">

    <link rel="stylesheet" type="text/css" href="assets/frontend/css/revolution/layers.css">

    <link rel="stylesheet" type="text/css" href="assets/frontend/css/revolution/navigation.css">



    <!-- Important Owl stylesheet -->

    <link rel="stylesheet" href="assets/frontend/css/owl.carousel.css">

    <link rel="stylesheet" href="assets/frontend/css/owl.theme.css">



    <!-- Fancy box css -->

    <link rel="stylesheet" type="text/css" href="assets/frontend/css/fancy-box/jquery.fancybox.css">



    <!-- ui css -->

    <link rel="stylesheet" type="text/css" href="assets/frontend/css/jquery-css/jquery-ui.css">

    

    <!-- Font Awesome -->

    <link rel="stylesheet" href="assets/frontend/fonts/font-awesome/css/font-awesome.min.css">



    <!-- Fonts -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>



    <!-- Custom Css -->

    <link rel="stylesheet" type="text/css" href="assets/frontend/css/custom/style.css">

    <link rel="stylesheet" type="text/css" href="assets/frontend/css/responsive/responsive.css">





    <!--[if lt IE 9]>

        <script src="js/html5shiv.js"></script>

    <![endif]-->







</head>

    

        <body class="home layout_changer ">



     <!--[if lt IE 8]>

            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

        <![endif]-->



    <div class="body_container">

    <!-- ============================= Header ================================ -->

                <!-- ================ Top Header =================-->

    <div class="top_header" id="top">

        <div class="container">

            <div class="row">

                <div class="col-lg-7 col-md-4 col-sm-12 col-xs-12">

                    <p>

                    <label class="col-xs-5">Correo: <span><?php echo getConfig("correo_from")?></span></label>

                    <label class="col-xs-4">Telefono: <span><?php echo getConfig("telefono_head")?></span> </label>

                    </p>

                </div>

                        

                <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12 col-sm-12 col-xs-12">

                        <div  class="derecha">

                            <p>

                                <?php if( $this-> session-> userdata('email') && $this->session->userdata('logued_in')==TRUE): ?>                                  

                                      <!--echo '';-->

                                        <label class=""><a href="javascript:void(0)"><span><?php echo $this->session-> userdata('nombres')?>|</span></a><a href="login/logout"><i class="icon-sign-out"></i><span>SALIR</span></a></label>

                                      <!--echo '';-->

                                <?php endif  ?>   

                            </p>

                        </div>



                    <!--<ul>

                        <li><a class="transition3s" href="about-gardener.html">Carrers</a></li>

                                        <label class="col-xs-4"><a href="login/logout"><i class="icon-sign-out"></i><span>SALIR</span></a></label>

                        <li><a class="transition3s" href="#"> Purchase Now</a></li>

                        <li>

                            <div class="dropdown">

                              <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownMenu2001" data-toggle="dropdown" aria-haspopup="true">

                                <span>Language</span>

                              </button>

                              <ul class="dropdown-menu" aria-labelledby="dropdownMenu2001">

                                <li>English(UK)</li>

                                <li>English(USA)</li>

                                <li>Arabic</li>

                                <li>Spanish</li>

                              </ul>

                            </div>

                        </li>

                    </ul>-->

                </div>

            </div> <!-- /row -->

        </div> <!-- /container -->

    </div> <!-- /top_header -->



                <!-- ================ /Top Header =================-->



                <!-- ================ Bottom header ============= -->

    <div class="bottom_header">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-3 col-md-12 col-sm-12 col-xs-12">

                    <div class="logo_holder">

                        <a href="./"><img src="assets//frontend/images/logo.png" alt="logo" class="img-responsive"></a>

                    </div> <!-- /logo_holder -->

                </div>

                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">

                    <div class="address">

                        <p><?php echo getConfig("direccion")?></p>

                        <span><?php echo getConfig("distrito")?></span>

                    </div><!--  /address -->

                </div>

                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">

                    <div class="time_schedule">

                        <p>Lun-Vier <?php echo getConfig("horario_semana")?></p>

                        <span>Sabado <?php echo getConfig("horario_sabado")?></span>

                    </div><!--  /time_schedule -->

                </div>

                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

                    <div class="social_icon_header">

                        <ul>

                            <?php $facebook=getConfig('enlace_facebook'); if(!empty($facebook)): ?>

                                <li class="transition3s border_round"><a href="<?php echo getConfig('enlace_facebook')?>"><i class="fa fa-facebook border_round"></i></a></li>

                            <?php  endif;   ?>



                            <?php $twitter=getConfig('enlace_twitter'); if(!empty($twitter)): ?>

                                <li class="transition3s border_round"><a href="<?php echo getConfig('enlace_twitter')?>"><i class="fa fa-twitter border_round"></i></a></li>

                            <?php  endif;   ?>



                            <?php $youtube=getConfig('enlace_youtube'); if(!empty($youtube)): ?>

                                <li class="transition3s border_round"><a href="<?php echo getConfig('enlace_youtube')?>"><i class="fa fa-youtube border_round"></i></a></li>

                            <?php  endif;   ?>

                        </ul>

                    </div><!--  /social_icon_header -->

                </div>

            </div> <!-- /row -->

        </div> <!-- /container -->

    </div> <!-- /bottom_header -->



                <!-- ================ /Bottom header ============= -->



    <!-- ============================= /Header ============================== -->



    <!-- ================================ Menu ============================== -->

    <div class="main_menu menu_fixed">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <nav class="navbar navbar-default">

                       

                       <!-- Collect the nav links, forms, and other content for toggling -->

                       <div class="collapse navbar-collapse flt_left" id="navbar-collapse-1">

                         <ul class="nav navbar-nav">

                           <li><a class="transition-ease <?php if($seccion=='index'): echo 'active'; endif ?>" href="./">Inicio</a></li>

                           <li class="transition-ease"><a class="transition-ease <?php if($seccion=='empresa'): echo 'active'; endif ?>" href="empresa">Nosotros</a>

                                <!--<ul class="sub_menu">

                                    <li><a href="client-testimonals.html" class="transition-ease">Testimonals</a></li>

                                    <li><a href="faq.html" class="transition-ease">FAQ</a></li>

                                    <li><a href="404.html" class="transition-ease">404 Page</a></li>

                                    <li><a href="price.html" class="transition-ease">Prices & Delivery</a></li>

                                    <li><a href="checkout-page.html" class="transition-ease">Request Quote</a></li>

                                </ul>-->

                           </li>

                           <li class="sub_dropdown"><a class="transition-ease <?php if($seccion=='productos'): echo 'active'; endif ?>" href="productos">Productos</a>

                                <ul class="sub_menu">

                                    <li><a href="impresiones" class="transition-ease <?php if($seccion=='productos'): echo 'active'; endif ?>">Impresiones</a></li>

                                    <!-- <li><a href="productos" class="transition-ease <?php //if($seccion=='productos'): echo 'active'; endif ?>">Industrial V&G</a></li>

                                    <li><a href="grafica" class="transition-ease <?php //if($seccion=='productos'): echo 'active'; endif ?>">Grafica Jesus</a></li> -->

                                   <!-- <li><a href="irrigation-and-drainage.html" class="transition-ease">Irrigation & Drainage</a></li>

                                    <li><a href="snow-and-ice-removal.html" class="transition-ease">Snow & Ice Removal</a></li>

                                    <li><a href="spring-fall-cleanup.html" class="transition-ease">Spring & Fall Cleanup</a></li>

                                    <li><a href="stone-and-hardscaping.html" class="transition-ease">Stone & Hardscaping</a></li>

                                    <li><a href="all-services.html" class="transition-ease">All Services</a></li>-->

                                </ul>

                           </li>

                               <!-- <ul class="sub_menu">

                           <li class="sub_dropdown"><a class="transition-ease" href="impresiones">Impresiones</a>

                                    <li><a href="classic-gallery.html" class="transition-ease">Classic Gallery</a></li>

                                    <li><a href="fullwidth-gallery.html" class="transition-ease">Fullwidth Gallery</a></li>

                                    <li><a href="masanory_gallery.html" class="transition-ease">Masonary Style </a></li>

                                    <li><a href="fullwidth-detail-page.html" class="transition-ease">Fullwidth Detail Page</a></li>

                                </ul>

                           </li>-->

                           <li class="transition-ease"><a class="transition-ease <?php if($seccion=='articulos'): echo 'active'; endif ?>" href="articulos">Articulos</a>

                               <!-- <ul class="sub_menu">

                                    <li><a href="blog-fullwidth-sidebar.html" class="transition-ease">Grid View With Sidebar</a></li>

                                    <li><a href="blog-grid-without-sidebar.html" class="transition-ease">Grid View Without Sidebar</a></li>

                                    <li><a href="blog-list-view.html" class="transition-ease">List View With Sidebar</a></li>

                                    <li><a href="blog-single-post.html" class="transition-ease">Blog Single Post</a></li>

                                </ul>-->

                           </li>

                           <li class="transition-ease"><a class="pedidos <?php if($seccion=='pedidos'): echo 'active'; endif ?>" href="cotizacion/detalle">Pedidos</a>

                               <!-- <ul class="sub_menu">

                                    <li><a href="shop.html" class="transition-ease">Shop Products</a></li>

                                    <li><a href="shop-with-sidebar.html" class="transition-ease">Shop Products With Sidebar</a></li>

                                    <li><a href="single-shop.html" class="transition-ease">Product Details</a></li>

                                    <li><a href="cart.html" class="transition-ease">Cart Page</a></li>

                                    <li><a href="checkout-page.html" class="transition-ease">Checkout Page</a></li>

                                    <li><a href="login.html" class="transition-ease">Login / Register</a></li>

                                </ul>-->

                           </li>

                           <li><a class="transition-ease <?php if($seccion=='contacto'): echo 'active'; endif ?>" href="contacto">Contactenos</a></li>

                         </ul>

                       </div><!-- /.navbar-collapse -->

                       <!-- Brand and toggle get grouped for better mobile display -->

                       <div class="navbar-header">

                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">

                           <span class="sr-only">Toggle navigation</span>

                           <span class="icon-bar"></span>

                           <span class="icon-bar"></span>

                           <span class="icon-bar"></span>

                         </button>

                       </div>

                        <p class="navbar-text flt_left"><a href="tel:+515 <?php echo getConfig('telefono_head')?> " class="transition4s"><i class="fa fa-phone"></i><?php echo getConfig('telefono_head')?></a></p>

                    </nav> <!-- /navbar-default -->

                </div>

            </div> <!-- /row -->

        </div> <!-- /container -->

    </div> <!-- /main_menu -->

    <!-- ================================ /Menu ============================== -->