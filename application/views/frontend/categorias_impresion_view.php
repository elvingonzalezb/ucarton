<?php
//echo count($categoria);
// echo $banner_pagina ?>
<!-- ============================ Texto Impresiones ============================= -->
  <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 empresa col-xs-12 text pull-right texto_mediano">
            <div class="title_holder2">
              <h3 style="margin-top:0; line-height:50px;"><?php //echo $texto_web->titulo?> </h3>
            </div> <!-- /title_holder2 -->
            <p ><?php echo $texto_web->texto?></p>
          </div> 
        </div> 
  </div> 
  <!-- ============================ Texto Impresiones ============================= -->
  <!-- ============================ BreadCrumb ============================= -->
 <!-- <div class="breadcrumb">
    <div class="container">
     <ul>
        <li><a href="./">Inicio</a></li>
        <li><i class="fa fa-caret-right"></i></li>
        <li><a href="impresiones">Impresiones</a></li>
      </ul>
    </div>
  </div>  --> <!-- /breadcrumb -->
             <!-- /title_holder2 -->
  <!-- ============================== Shop contianer ======================= -->
  <section class="shop_container ">
    <div class="container">
    <div class="title_holder2 ">
              <h3 style="margin-top:0; line-height:50px;"><p><?php echo $texto_web2->titulo?></p></h3>
            </div>
      <!-- <div class="col-md-3 services-page-section">
            <div class="side-navigation">
              <ul class="side-navigation-list">
                <?php// foreach($categorias as $value): ?>
                <li><a class="continua" href="productos/<?php// echo $value['id'] ;?>-<?php// echo $value['url'];?>"><div class="continua"><?php// echo $value['titulo'] ;?></div></a></li> 
                 
                 <?php //endforeach; ?>
                 
              </ul>
            </div>
      </div>  --> 
      <p class="texto_mediano"><?php echo $texto_web2->texto?></p>
      <div class="product col-md-12">
        <div class="row">     

      
        </div> <!-- /row -->
        
      </div> <!-- /product -->
    </div> <!-- /container -->
  </section> <!-- /shop_container -->

  <!-- ========================================================================= -->
        <!-- ===================          Galerya de Impresiones    ================== -->
        <!-- ========================================================================= -->
        <!-- ============================ BreadCrumb ============================= -->
 <div class="breadcrumb">
    <div class="container">
     <ul>
        <li><a href="./">Inicio</a></li>
        <li><i class="fa fa-caret-right"></i></li>
        <li><a href="impresiones">impresiones</a></li>
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
                foreach($categorias_impresion as $value) 
                {
                  if($value['tiene_subcats']=="SI")
                  {
                      echo '<li><a class="continua" href="subcategorias_impresion/'.$value['id'].'-'.$value['url'].'"><div class="continua">'.$value['titulo'].'</div></a></li>';
                  }
                  else
                  {
                      echo '<li><a class="continua" href="impresiones/'.$value['id'].'-'.$value['url'].'"><div class="continua">'.$value['titulo'].'</div></a></li>';
                  }
                }
              ?>                 
              </ul>
            </div>
      </div>  
      <div class="product col-md-9">
        <div class="row">
          <?php foreach($categoria as $value) { ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="single_product_item">
                <?php
                  if($value['tiene_subcats']=="SI")
                  {
                      echo '<a class="" href="subcategorias_impresion/'.$value['id'].'-'.$value['url'].'/0">';
                      echo '<div class="img_holder">';
                      echo '<img src="files/categorias_impresion/'.$value['imagen'].'" alt="item" class="img-responsive">';
                      echo '</div><!-- /img_holder -->';
                      echo '</a>';
                      echo '<div class="item_details">';
                      echo '<h6><a class="continua" href="subcategorias_impresion/'.$value['id'].'-'.$value['url'].'/0"><div style="min-height:45px !important;"class="">'.$value['titulo'].'</div></a></h6>';
                      echo '</div> <!-- /item_details -->';
                  }
                  else
                  {
                      echo '<a class="" href="impresiones/'.$value['id'].'-'.$value['url'].'">';
                      echo '<div class="img_holder">';
                      echo '<img src="files/categorias_impresion/'.$value['imagen'].'" alt="item" class="img-responsive">';
                      echo '</div><!-- /img_holder -->';
                      echo '</a>';
                      echo '<div class="item_details">';
                      echo '<h6><a class="continua" href="impresiones/'.$value['id'].'-'.$value['url'].'"><div style="min-height:45px !important;"class="">'.$value['titulo'].'</div></a></h6>';
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

          <!-- ========================================================================= -->
          <!-- ===================       termina   Galerya de Impresiones    =========== -->
          <!-- ========================================================================= -->

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