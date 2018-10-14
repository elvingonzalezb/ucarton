<?php echo $banner_pagina; $i=0; //var_dump($current); return; ?>

<!-- ============================ BreadCrumb ============================= -->
  <div class="breadcrumb">
    <div class="container">
      <ul>

        <li><a href="./">Inicio</a></li>
        <li><i class="fa fa-caret-right"></i></li>
        <li><a href="productos">Productos</a></li>
        <li><i class="fa fa-caret-right"></i></li>
        <li><a href="productos/<?php echo $productos['id']?>-<?php echo $current ;?>"><?php echo $current;?></a></li>
        <li><i class="fa fa-caret-right"></i></li>
        <li class="active"><?php echo $productos['titulo']?></li>
      </ul>
    </div>
  </div> <!-- /breadcrumb -->
  <!-- ============================ /BreadCrumb ============================= -->



  <!-- ====================== Shop With Sidebar container ==================== -->
  <section class="shop_sidebar single_shop">
    <div class="container product">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-righting single_product_details">
          <form name="form" method="post" >
            <div class="product_container">
              <!-- <div class="img_holder">
                <img class="img-responsive" src="files/productos/IMAGEN" alt="item">
              </div> -->
              <!-- IMAGENIMAGEN -->
              <div class="col-lg-1 col-md-12 col-sm-hidden col-xs-hidden">
              </div>
              <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                 <!-- ========================================================================= -->
                  <!-- ===================          Galerya de productos    ================== -->
                  <!-- ========================================================================= -->
                      <div class="project_gallery classic_gallery"> 
                          <div class="project_gallery_img" id="mixitup_list">
                            <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> -->
                              <div class="mix garden planting"> <!-- mix -->
                                <div style="max-width: 80%;" class="img_holder">
                                  <img  class="img-responsive" src="files/productos/<?php echo $productos['imagen']?>" alt="image">
                                  <div class="hover_overlay transition3s">
                                    <div class="content">
                                      <a class="fancybox" href="files/productos/<?php echo $productos['imagen']?>"></a>
                                    </div>
                                  </div>
                                </div>
                              </div> <!-- /mix -->
                            <!-- </div> -->
                          </div> <!-- /project_gallery_img -->
                      </div>
                    <!-- ========================================================================= -->
                    <!-- ===================       termina   Galerya de productos    =========== -->
                    <!-- ========================================================================= -->
              </div>
              <!-- IMAGENIMAGEN -->

              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="product_history">
                    <div class="item_name">
                      <div class="item_review">
                        <h4><?php echo $productos['titulo']?></h4>
                        <ul class="product_rating">
                          <!-- <li><a href="#"><i class="fa fa-star"></i></a></li>
                          <li><a href="#"><i class="fa fa-star"></i></a></li>
                          <li><a href="#"><i class="fa fa-star"></i></a></li>
                          <li><a href="#"><i class="fa fa-star"></i></a></li>
                          <li><a href="#"><i class="fa fa-star"></i></a></li> -->
                        </ul> <!-- /product_rating -->
                        <!--<del>$ 35.99</del>-->
                        <span> <!-- < ? php// echo  number_format($productos['precio'],2) ;?> --></span>
                      </div> <!-- /item_review -->
                    </div> <!-- /item_name -->
                      <?php   if(empty($productos['descripcion_corta'])): 
                                  $productos['descripcion_corta']=" ";
                              endif;   
                              if(empty($productos['descripcion'])): 
                                  $productos['descripcion']=" ";
                              endif;
                      ?>
                    <p><?php echo $productos['descripcion']?></p>              
                    <div class="clear_fix"></div>
                                <input type="hidden" name="id_producto" id="id_producto" value="<?=$productos['id_foto']?>">
                                <input type="hidden" name="precio" id="precio" value="<?=$productos['precio']?>">
                                <input type="hidden" name="imagen" id="imagen" value="<?=$productos['imagen']?>">
                                <input type="hidden" name="nombre" id="nombre" value="<?=$productos['titulo']?>">
                                <input type="hidden"  id="num_producto-" value="">
                                <input type="number" id="cantidad" name="quantity" min="1" value="1">
                                <button onClick="agregaCotizacion()" class="add_to_cart button_inner transition3s mouse_hover2" type="button"><span>AGREGAR A COTIZACION</span></button>
                  </div> <!-- /product_history -->
                  <div class="clear_fix"></div>
              </div> 
            </div> <!-- /product_container -->
            <div class="product_tab">
              <!-- <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#description">Descripción</a></li> -->
                <!-- <li><a data-toggle="tab" href="#review">Reviews(6)</a></li> -->
             <!--  </ul> -->

              <!-- <div class="tab-content">
                <div id="description" class="tab-pane fade in active">
                  <h6><?php// echo $productos['titulo']?></h6>
                  <p><?php //echo $productos['descripcion']?></p>
                </div>
                
              </div> --> <!-- /tab-content -->
            </div> <!-- /product_tab -->
          </form>
        </div> <!-- /single_product_details -->
      </div> <!-- /row -->
    </div>
  </section>

  <!-- ====================== Shop With Sidebar container ==================== -->
