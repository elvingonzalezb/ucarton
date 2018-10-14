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
    
    <link rel="shortcut icon" href="assets/frontend/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/frontend/images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/bootstrap/bootstrap.css" media="screen">

    <!-- Vendor css -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/frontend/css/revolution/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/revolution/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/revolution/navigation.css"> -->

    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="assets/frontend/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/frontend/css/owl.theme.css">

    <!-- Fancy box css -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/frontend/css/jquery.fancybox.css"> -->

    <!-- ui css -->
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/jquery-css/jquery-ui.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/frontend/fonts/font-awesome/css/font-awesome.min.css">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/custom/style.css">
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/responsive/responsive.css">
    <!-- Fancy box css -->
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/fancy-box/jquery.fancybox.css">

    <link rel="stylesheet" type="text/css" href="assets/frontend/css/custom.css">
            <!-- ******************************nuevo******************************** -->

</head>
    
<body class="home layout_changer ">
    <div id="top-bar" class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <ul class="top-info">
                        <li><i class="fa fa-map-marker">&nbsp;</i><p class="info-text"><?php echo getConfig("direccion")?></p></li>
                        <li><i class="fa fa-envelope-open-o">&nbsp;</i><p class="info-text"><?php echo getConfig("correo_from")?></p></li>
                    </ul>
                </div><!--/ Top info end -->

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 top-social text-right">
                    <ul class="header-rs">
                    <?php $facebook=getConfig('enlace_facebook'); if(!empty($facebook)): ?>
                        <li><a target="_blank" href="<?php echo getConfig('enlace_facebook')?>"><i class="fa fa-facebook"></i></a></li>
                    <?php  endif;   ?>

                    <?php $twitter=getConfig('enlace_twitter'); if(!empty($twitter)): ?>
                        <li><a target="_blank" href="<?php echo getConfig('enlace_twitter')?>"><i class="fa fa-twitter"></i></a></li>
                    <?php  endif;   ?>
                    <?php $youtube=getConfig('enlace_youtube'); if(!empty($youtube)): ?>
                        <li><a target="_blank" href="<?php echo getConfig('enlace_youtube')?>"><i class="fa fa-youtube"></i></a></li>
                    <?php  endif;   ?>
                    </ul>
                </div><!--/ Top social end -->
            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </div><!--/ Topbar end -->
    <!-- Header start -->
    <header id="header" class="nav-style-boxed">
        <div class="container">
            <div class="row">
                <div class="logo-area clearfix">
                    <div class="logo col-xs-12 col-md-4">
                         <a href="./">
                            <img src="assets/frontend/images/logo.png" alt="" class="img-responsive">
                         </a>
                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                    </div><!-- logo end -->

                    <div class="col-xs-12 col-md-8 header-right">
                        <div class="site-navigation">
                            <ul class="login-add">
                                <li>
                                    <?php if( $this-> session-> userdata('email') && $this->session->userdata('logued_in')==TRUE): ?>
                                        <label class=""><span><?php echo $this->session->userdata('nombres')?> / </label>
                                        <label class=""><a href="login/logout"><span>SALIR</a> / </label>                                  
                                        <label class=""> <a href="cotizacion/detalle"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i> PEDIDOS</span></a></label>
                                    <?php else:  ?> 
                                        <label class=""><a href="login"><span>REGISTRO</span> </a> / </label>
                                        <label class=""><a href="login"><span>INGRESO</span> </a></label>
                                        <label class="pedido"> <a href="cotizacion/detalle"><span>PEDIDOS</span></a></label>
                                    <?php endif  ?>
                                </li>
                            </ul>
                        </div>
                        <nav class="site-navigation navigation">
                            <div class="site-nav-inner pull-right">
                                <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button> -->
                                <div class="collapse navbar-collapse navbar-responsive-collapse">
                                    <ul class="nav navbar-nav">
                                        <li class="<?php if($seccion=='index'): echo 'active'; endif ?>">
                                            <a href="./">Inicio</a>
                                        </li>
                                        <li class="<?php if($seccion=='empresa'): echo 'active'; endif ?>">
                                            <a href="empresa">Nosotros</a>
                                        </li>
                                        <li class="<?php if($seccion=='productos'): echo 'active'; endif ?>">
                                            <a href="productos">Productos</a>
                                        </li>
                                        <li class="<?php if($seccion=='articulos'): echo 'active'; endif ?>">
                                            <a href="articulos">Artículos</a>
                                        </li>
                                        <li class="<?php if($seccion=='contacto'): echo 'active'; endif ?>">
                                            <a href="contacto">Contacto</a>
                                        </li>
                                        <!-- <li class="header-get-a-quote">
                                            <?php $facebook=getConfig('enlace_facebook'); if(!empty($facebook)): ?>
                                            <a title="Facebook" href="<?php echo getConfig('enlace_facebook')?>"><span class="social-icon"><i class="fa fa-facebook"></i></span></a>
                                            <?php  endif;   ?>
                                            <?php $twitter=getConfig('enlace_twitter'); if(!empty($twitter)): ?>
                                            <a title="Twitter" href="<?php echo getConfig('enlace_twitter')?>"><span class="social-icon"><i class="fa fa-twitter"></i></span></a>
                                            <?php  endif;   ?>
                                            <?php $youtube=getConfig('enlace_youtube'); if(!empty($youtube)): ?>
                                            <a title="Youtube" href="<?php echo getConfig('enlace_youtube')?>"><span class="social-icon"><i class="fa fa-youtube"></i></span></a>
                                            <?php  endif;   ?>
                                        </li> -->
                                    </ul>
                                </div>

                            </div>
                            <div class="clearfix"></div>
                        </nav>
                        <!-- <ul class="top-info-box">
                            <li>
                                <div class="info-box"><span class="info-icon"><i class="fa fa-map-marker">&nbsp;</i></span>
                                    <div class="info-box-content">
                                        <p class="info-box-title">Encuentranos</p>
                                        <p class="info-box-subtitle"><?php echo getConfig("direccion")?></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-box"><span class="info-icon"><i class="fa fa-phone">&nbsp;</i></span>
                                    <div class="info-box-content">
                                        <p class="info-box-title">Llámanos</p>
                                        <p class="info-box-subtitle"><?php echo getConfig("telefono_head")?></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-box last"><span class="info-icon"><i class="fa fa-compass">&nbsp;</i></span>
                                    <div class="info-box-content">
                                        <p class="info-box-title">Horario</p>
                                        <p class="info-box-subtitle"><?php echo getConfig("horario_semana")?></p>
                                    </div>
                                </div>
                            </li> -->
                             <!-- <li class="nav-search">
                                <span id="search"><i class="fa fa-search"></i></span>
                            </li>
                        </ul> -->
                        <!-- <div class="search" style="display: none;">
                            <input type="text" class="form-control" placeholder="Type what you want and enter">
                            <span class="search-close">&times;</span>
                        </div> --><!-- Site search end -->
                    </div><!-- header right end -->
                </div><!-- logo area end -->
                
            </div><!-- Row end -->
        </div><!-- Container end -->

        

    </header><!--/ Header end -->
