<?php echo $banner_pagina; $i=0; //var_dump($current); return; ?>

<!-- ============================ BreadCrumb ============================= -->
  <div class="breadcrumb">
    <div class="container">
      <ul>

        <li><a href="./">Inicio</a></li>
        <li><i class="fa fa-caret-right"></i></li>
        <li><a href="impresiones">impresiones</a></li>
        <li><i class="fa fa-caret-right"></i></li>
        <li><a href="impresiones/<?php echo $impresiones['id']?>-<?php echo $current ;?>"><?php echo $current;?></a></li>
        <li><i class="fa fa-caret-right"></i></li>
        <li class="active"><?php echo $impresiones['titulo']?></li>
      </ul>
    </div>
  </div> <!-- /breadcrumb -->
  <!-- ============================ /BreadCrumb ============================= -->


       
  <!-- ====================== Shop With Sidebar container ==================== -->
  <section class="shop_sidebar single_shop">
    <div class="container product">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-righting single_product_details">
          <!-- <form name="form" method="post" > -->
            <div class="product_container">
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <!-- ========================================================================= -->
                  <!-- ===================          Galerya de Impresiones    ================== -->
                  <!-- ========================================================================= -->
                      <div class="project_gallery classic_gallery"> 
                          <div class="project_gallery_img" id="mixitup_list">
                            <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> -->
                              <div class="mix garden planting"> <!-- mix -->
                                <div style="max-width: 65%;" class="img_holder">
                                  <img  class="img-responsive" src="files/impresiones/<?php echo $impresiones['imagen']?>" alt="image">
                                  <div class="hover_overlay transition3s">
                                    <div class="content">
                                      <a class="fancybox" href="files/impresiones/<?php echo $impresiones['imagen']?>"></a>
                                    </div>
                                  </div>
                                </div>
                              </div> <!-- /mix -->
                            <!-- </div> -->
                          </div> <!-- /project_gallery_img -->
                      </div>
                    <!-- ========================================================================= -->
                    <!-- ===================       termina   Galerya de Impresiones    =========== -->
                    <!-- ========================================================================= -->
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="product_history ">
                    <div class="item_name">
                      <div class="item_review">
                        <h4><?php echo $impresiones['titulo']?></h4>
                        <ul class="product_rating">
                          <!-- <li><a href="#"><i class="fa fa-star"></i></a></li>
                          <li><a href="#"><i class="fa fa-star"></i></a></li>
                          <li><a href="#"><i class="fa fa-star"></i></a></li>
                          <li><a href="#"><i class="fa fa-star"></i></a></li>
                          <li><a href="#"><i class="fa fa-star"></i></a></li> -->
                        </ul> <!-- /product_rating -->
                        <!--<del>$ 35.99</del>-->
                        <span> <!-- < ? php// echo  number_format($impresiones['precio'],2) ;?> --></span>
                      </div> <!-- /item_review -->
                    </div> <!-- /item_name -->
                      <?php   if(empty($impresiones['descripcion_corta'])): 
                                  $impresiones['descripcion_corta']=" ";
                              endif;   
                              if(empty($impresiones['descripcion'])): 
                                  $impresiones['descripcion']=" ";
                              endif;
                      ?>
                    <p><?php echo $impresiones['descripcion']?></p>              
                    <div class="clear_fix"></div>
                                <input type="hidden" name="id_producto" id="id_producto" value="<?=$impresiones['id_foto']?>">
                                <input type="hidden" name="precio" id="precio" value="<?=$impresiones['precio']?>">
                                <input type="hidden" name="imagen" id="imagen" value="<?=$impresiones['imagen']?>">
                                <input type="hidden" name="nombre" id="nombre" value="<?=$impresiones['titulo']?>">
                                <input type="hidden"  id="num_producto-" value="">
                                <!-- <input type="number" id="cantidad" name="quantity" min="1" value="1">
                                <button onClick="agregaCotizacion()" class="add_to_cart button_inner transition3s mouse_hover2" type="button"><span>AGREGAR A COTIZACION</span></button> -->
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
                  <h6><?php// echo $impresiones['titulo']?></h6>
                  <p><?php //echo $impresiones['descripcion']?></p>
                </div>
                
              </div> --> <!-- /tab-content -->
            </div> <!-- /product_tab -->
         <!--  </form> -->
        </div> <!-- /single_product_details -->
      </div> <!-- /row -->
    </div>
  </section>

  <!-- ====================== Shop With Sidebar container ==================== -->

  <!-- ============================== /seccion cotizacion ======================= -->
  <section class="contact_us">
    <div class="container">

      <div class="row contact_deatils">
        <div class="col-lg-12 col-md-7 col-sm-6 col-xs-12 pull-right submit_form">
         <div class="title_holder2">
              <h3 style="margin-top:0; line-height:50px;"><?php echo $texto_web3->titulo?></h3>
            </div>
              <div style="margin-bottom:20px; " class="texto_mediano">
              <?php echo $texto_web3->texto?>
              </div>
              
            <div  class=""> 
                <?php
                    if($this->session->userdata('success'))
                    {
                      ?>
                        <div id="success" class="alert alert-success">
                            <span class="green textcenter">
                                <p><?php echo $this->session->userdata('success') ?></p>
                                <?php $this->session->unset_userdata('success') ?>
                            </span>
                        </div>
                    <?php
                    }
                    if($this->session->userdata('error'))
                    {
                    ?>
                      <div id="error" class="alert alert-danger">
                          <span class="red textcenter">
                              <p><?php echo $this->session->userdata('error');?></p>
                              <?php $this->session->unset_userdata('error');?>
                          </span>
                      </div>
                    <?php                            
                    }
                    if($this->session->userdata('captchaError'))
                    {
                    ?>
                      <div id="error" class="alert alert-danger">
                          <span class="red textcenter">
                              <p><?php echo $this->session->userdata('captchaError');?></p>
                              <?php $this->session->unset_userdata('captchaError');?>
                          </span>
                      </div>
                    <?php                            
                    }               
                ?>   
              <form style="background: #C6C6C6 !important;" method="post" action="impresiones/send" class="aSubmit">
                <div align="center" class="" style="margin:0 auto;">


                  <div class="row col-xs-9 col-md-9"  align="center" style="float:none;" >
                      <div class="form-group col-xs-12 col-md-6">
                        <input type="text" placeholder="Nombres*" aria-invalid="false" aria-required="true" size="40" value="<?=$this->session->userdata('nombre_contacto')?>" name="nombre" required>
                      </div>
                    
                      <div class="form-group col-xs-12 col-md-6">
                        <input type="text" placeholder="Apellidos*" aria-invalid="false" aria-required="true" size="40" value="<?=$this->session->userdata('apellido_contacto')?>" name="apellido" required>
                      
                    </div>
                  </div>
                  <div  class="row col-xs-9 col-md-9"  align="center" style="float:none;">
                    <div class="form-group col-xs-12 col-md-6">
                      
                        <input type="email" placeholder="Email*" aria-invalid="false" aria-required="true" size="40" value="<?=$this->session->userdata('correo_contacto')?>" name="email" required>
                      
                    </div>
                    <div class="form-group col-xs-12 col-md-6">
                      
                        <input type="tel" placeholder="Teléfono" aria-invalid="false" aria-required="true" size="40" value="<?=$this->session->userdata('telefono_contacto')?>" name="telefono">
                      
                    </div>
                  </div>
                  <div class="row col-xs-9 col-md-9"  align="center" style="float:none;">
                    <div class="form-group col-xs-12 col-md-12">
                      
                        <input type="text" placeholder="Asunto*" aria-invalid="false" size="40" value="<?=$this->session->userdata('asunto_contacto')?>" name="asunto" required>
                      
                    </div>
                    <div class="form-group col-xs-12 col-md-12">
                      <textarea placeholder="Mensaje*" aria-invalid="false" rows="10" cols="40" name="mensaje" required><?=$this->session->userdata('mensaje_contacto')?></textarea>
                        
                    </div>
                  </div>
                            <!-- editable -->
                                      <div class="row col-xs-9 col-md-9"  align="center" style="float:none;">
                                                  
                                                  <div class="col-xs-12 col-md-6">
                                                    <div class="form-group">
                                                      <input style="width: 250px; " name="codigo" value="" size="40" aria-invalid="false" placeholder="Ingrese el código de la imagen*" type="text" required>
                                                  <?php echo $cap_img?>
                                                    </div>
                                                  </div>
                                                  <input type="submit" class=" transition3s mouse_hover2 green_button" value="ENVIAR">
                                     </div>             

                            <!-- editable -->


                </div>          
              </form>
            </div> 
        </div>
      </div> <!-- /contact_deatils -->
    </div> <!-- /container -->
  </section>

  <!-- ============================== /seccion cotizacion ======================= -->