<?php echo $banner_pagina ?>
<!-- ============================ BreadCrumb ============================= -->
  <div class="breadcrumb">
    <div class="container">
      <ul>
        <li><a href="./">Inicio</a></li>
        <li><i class="fa fa-caret-right"></i></li>
        <li class="active">Contactenos</li>
      </ul>
    </div>
  </div> <!-- /breadcrumb -->
  <!-- ============================ /BreadCrumb ============================= -->
            
<section class="contact_us">
    <div class="container">
      <div class="row contact_deatils">
        <div class="col-lg-8 col-md-7 col-sm-6 col-xs-12 pull-right submit_form">
         <?php echo $texto_web->texto?>
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
          <form method="post" action="contacto/send" class="aSubmit">
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <input type="text" placeholder="Nombres*" aria-invalid="false" aria-required="true" size="40" value="<?=$this->session->userdata('nombre_contacto')?>" name="nombre" required>
                </div>
              </div>
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <input type="text" placeholder="Apellidos*" aria-invalid="false" aria-required="true" size="40" value="<?=$this->session->userdata('apellido_contacto')?>" name="apellido" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <input type="email" placeholder="Email*" aria-invalid="false" aria-required="true" size="40" value="<?=$this->session->userdata('correo_contacto')?>" name="email" required>
                </div>
              </div>
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <input type="tel" placeholder="Teléfono" aria-invalid="false" aria-required="true" size="40" value="<?=$this->session->userdata('telefono_contacto')?>" name="telefono">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-md-8">
                <div class="form-group">
                  <input type="text" placeholder="Asunto*" aria-invalid="false" size="40" value="<?=$this->session->userdata('asunto_contacto')?>" name="asunto" required>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="form-group">
                  <textarea placeholder="Mensaje*" aria-invalid="false" rows="10" cols="40" name="mensaje" required><?=$this->session->userdata('mensaje_contacto')?></textarea>
                </div>
                <div class="col-xs-12 col-md-6">
                  <div class="form-group">
                <?php echo $cap_img?>
                    <input style="width: 250px; " name="codigo" value="" size="40" aria-invalid="false" placeholder="Ingrese el código de la imagen*" type="text" required>
                  </div>
                </div>
                <input type="submit" class=" transition3s mouse_hover2 green_button" value="ENVIAR">
                
              </div>
            </div>          
          </form>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 pull-left address ">
          
          <!--<h4 style="line-height:45px;">Need Our Service Or Have Queries ?</h4>-->
          <div class="address_holder">

            <div class="address_type">
              <div class="icon_holder border_round">
                <div class="icon_bg border_round">
                  <i class="fa fa-map-marker"></i>
                </div> <!-- /icon_bg -->
              </div> <!-- /icon_holder -->
              <div class="text">
                <h5><?php echo $mapa['titulo_globo']?></h5>
                <p><?php echo $mapa['texto_globo']?></p>
              </div> <!-- /text -->
            </div> <!-- /address_type -->

            <div class="address_type">
              <div class="icon_holder border_round">
                <div class="icon_bg border_round">
                  <i class="fa fa-phone"></i>
                </div> <!-- /icon_bg -->
              </div> <!-- /icon_holder -->
              <div class="text">
                <h5>Detalles de contacto</h5>
                <p>Telefono: <?php echo getConfig('telefono')?></p>
                <a  href="mailto:<?php echo getConfig("correo_from")?>"><?php echo getConfig("correo_from")?></a>
              </div> <!-- /text -->
            </div> <!-- /address_type -->

            <div class="address_type">
              <div class="icon_holder border_round">
                <div class="icon_bg border_round">
                  <i class="fa fa-clock-o"></i>
                </div> <!-- /icon_bg -->
              </div> <!-- /icon_holder -->
              <div class="text">
                <h5>Horario de Atención</h5>
                <ul style="margin-top: 14px;">
                  <li>Lun-Vier <span><?php echo getConfig("horario_semana")?></span></li>
                  <li>Sabados <span><?php echo getConfig("horario_sabado")?></span></li>
                </ul>
              </div> <!-- /text -->
            </div> <!-- /address_type -->

          </div> <!-- /address_holder -->
        </div>
      </div> <!-- /contact_deatils -->
    </div> <!-- /container -->
  </section>
    
    <div class="map">
      <div class="google-map" id="contact-google-map" style="height:535px; width:100%;"></div>
    </div>
    <!--<div id="contact-google-map" class="wow fadeInUp" data-wow-delay="0.05s"></div>-->

    