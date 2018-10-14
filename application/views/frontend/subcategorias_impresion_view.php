<?php
//echo count($productos);
// echo $banner_pagina ?>
<!-- ============================ BreadCrumb ============================= -->
<div class="breadcrumb">
  <div class="container">
    <ul>
      <li><a href="./">Inicio</a></li>
      <li><i class="fa fa-caret-right"></i></li>
      <li><a href="productos">Productos</a></li>
      <li><i class="fa fa-caret-right"></i></li>
      <li><?php echo '<a href="subcategorias/'.$categoria->id.'-'.$url.'/0">'.$categoria->titulo.'</a>'; ?></li>
    </ul>
  </div>
</div>  <!-- /breadcrumb -->

  <!-- ============================== Shop contianer ======================= -->
  <section class="shop_container ">
    <div class="container">
      <div class="col-md-3 services-page-section">
        <div class="side-navigation">
          <ul class="side-navigation-list">
          <?php 
            foreach($categorias as $value) 
            {
              if($value['tiene_subcats']=="SI")
              {
                  echo '<li><a class="continua" href="subcategorias_impresion/'.$value['id'].'-'.$value['url'].'/0"><div class="continua">'.$value['titulo'].'</div></a></li>';
              }
              else
              {
                  echo '<li><a class="continua" href="impresiones/'.$value['id'].'-'.$value['url'].'/0"><div class="continua">'.$value['titulo'].'</div></a></li>';
              }
            }
          ?>
          </ul>
        </div>
      </div>  

      <div class="product col-md-9">
        <div class="row">
          <?php 
            //var_dump($subcategorias);
            echo '<h1 class="tituloCategoria">'.$categoria->titulo.'</h1>';
            foreach($subcategorias as $value) 
            {
                echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">';
                  echo '<div class="single_product_item">';
                    echo '<a class="" href="impresiones/'.$value['id'].'-'.$value['url'].'">';
                    echo '<div class="img_holder">';
                    echo '<img src="files/categorias_impresion/'.$value['imagen'].'" alt="item" class="img-responsive">';
                    echo '</div><!-- /img_holder -->';
                    echo '</a>';
                    echo '<div class="item_details">';
                    echo '<h6><a class="continua" href="impresiones/'.$value['id'].'-'.$value['url'].'"><div style="min-height:45px !important;"class="">'.$value['titulo'].'</div></a></h6>';
                    echo '</div> <!-- /item_details -->';
                  echo '</div> <!-- /single_product_item -->';
                echo '</div>';
            }
            ?>
        </div> <!-- /row -->

      </div> <!-- /product -->
    </div> <!-- /container -->
  </section> <!-- /shop_container -->
<!-- ============================== /Shop contianer ======================= -->