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
        <li class="active"><a  href="productos/<?php echo $id_categoria ;?>-<?php echo $current ;?>"><?php echo $current ;?></a></li>
      </ul>
    </div>
  </div>  <!-- /breadcrumb -->
  <!-- ============================ /BreadCrumb ============================= -->
   <!-- <div class="project_gallery classic_gallery">
      <div class="container">
        <div class="gallery_menu"> <! Gallery menu >
          <ul>
            <li class="filter active hvr-sweep-to-right" data-filter="all">All Projects</li>
            <li class="filter hvr-sweep-to-right" data-filter=".lawn">Lawn Care</li>
            <li class="filter hvr-sweep-to-right" data-filter=".garden">Garden Care</li>
            <li class="filter hvr-sweep-to-right" data-filter=".snow">Snow Removal</li>
            <li class="filter hvr-sweep-to-right" data-filter=".planting">Planting</li>
            <li class="filter hvr-sweep-to-right" data-filter=".video"> Video Gallery</li>
          </ul>
        </div> <! End gallery menu>
      </div>
    </div>-->

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
                  echo '<li><a class="continua" href="subcategorias/'.$value['id'].'-'.$value['url'].'/0"><div class="continua">'.$value['titulo'].'</div></a></li>';
              }
              else
              {
                  echo '<li><a class="continua" href="productos/'.$value['id'].'-'.$value['url'].'/0"><div class="continua">'.$value['titulo'].'</div></a></li>';
              }
            }
          ?> 
            </ul>
            </div>
      </div>  
      <div class="product col-md-9">
        <div class="row">
          <?php  
            echo '<h1 class="tituloCategoria">'.$categoria->titulo.'</h1>';
            foreach($productos as $value): 
            ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="single_product_item  ">
                <a href="productos/<?php echo $current ;?>/<?php echo $value['id_foto']?>-<?php echo $value['url']?>";>
                  <div class="img_holder">
                    <img src="files/productos/<?php echo $value['imagen'] ;?>" alt="item" class="img-responsive">
                  </div> <!-- /img_holder -->
                <a>
                <div  aling="center" class="item_details">
                    <div class="" style="min-height:30px !important;"><h6><?php echo $value['titulo'] ;?></h6></div>
                      <!-- <h5><del></del> <span><?php// echo  number_format($value['precio'],2) ;?></span></h5> -->
                      <!-- <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                      </ul> -->
                      <div align="center">
                          <a href="productos/<?php echo $current ;?>/<?php echo $value['id_foto']?>-<?php echo $value['url']?>" class="add_to_cart button_inner transition3s mouse_hover3">DETALLES</a>
                      </div>
                </div> <!-- /item_details -->
              </div> <!-- /single_product_item -->
            </div>
          <?php endforeach; ?> 
        </div> <!-- /row -->



       <div style="text-align:center;">
          <?php  echo $paginacion; ?>
        </div>
      </div> <!-- /product -->
    </div> <!-- /container -->
  </section> <!-- /shop_container -->
  <!-- ============================== /Shop contianer ======================= -->