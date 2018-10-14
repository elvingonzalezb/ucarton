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
                  echo '<li><a class="continua" href="subcategorias/'.$value['id'].'-'.$value['url'].'"><div class="continua">'.$value['titulo'].'</div></a></li>';
              }
              else
              {
                  echo '<li><a class="continua" href="productos/'.$value['id'].'-'.$value['url'].'"><div class="continua">'.$value['titulo'].'</div></a></li>';
              }
            }
          ?>
          </ul>
        </div>
      </div>  

      <div class="product col-md-9">
        <div class="row">
          <?php 
            echo '<h1 class="tituloCategoria">Categorías de Productos</h1>';
            foreach($categoria as $value) { ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="single_product_item">
                <?php
                  if($value['tiene_subcats']=="SI")
                  {
                      echo '<a class="" href="subcategorias/'.$value['id'].'-'.$value['url'].'/0">';
                      echo '<div class="img_holder">';
                      echo '<img src="files/categorias/'.$value['imagen'].'" alt="item" class="img-responsive">';
                      echo '</div><!-- /img_holder -->';
                      echo '</a>';
                      echo '<div class="item_details">';
                      echo '<h6><a class="continua" href="subcategorias/'.$value['id'].'-'.$value['url'].'/0"><div style="min-height:45px !important;"class="">'.$value['titulo'].'</div></a></h6>';
                      echo '</div> <!-- /item_details -->';
                  }
                  else
                  {
                      echo '<a class="" href="productos/'.$value['id'].'-'.$value['url'].'">';
                      echo '<div class="img_holder">';
                      echo '<img src="files/categorias/'.$value['imagen'].'" alt="item" class="img-responsive">';
                      echo '</div><!-- /img_holder -->';
                      echo '</a>';
                      echo '<div class="item_details">';
                      echo '<h6><a class="continua" href="productos/'.$value['id'].'-'.$value['url'].'"><div style="min-height:45px !important;"class="">'.$value['titulo'].'</div></a></h6>';
                      echo '</div> <!-- /item_details -->';
                  }
                ?>
              </div> <!-- /single_product_item -->

            </div>

          <?php } ?> 

        </div> <!-- /row -->

        <div style="text-align:center;">
          <?php  echo $paginacion; ?>
        </div>
      </div> <!-- /product -->
    </div> <!-- /container -->
  </section> <!-- /shop_container -->
<!-- ============================== /Shop contianer ======================= -->