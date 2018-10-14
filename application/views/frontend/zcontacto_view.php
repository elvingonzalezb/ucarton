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
                                  <div id="success" class="alert btn alert-success" role="alert">
                                          <p><?php echo $this->session->userdata('success') ?></p>
                                          <?php $this->session->unset_userdata('success') ?>
                                  </div>
                                <?php
                                }
                                if($this->session->userdata('error'))
                                {
                                ?>
                                  <div id="error" class="alert btn alert-danger" role="alert">
                                          <p><?php echo $this->session->userdata('error');?></p>
                                          <?php $this->session->unset_userdata('error');?>
                                  </div>
                                <?php                            
                                }
                                if($this->session->userdata('captchaError'))
                                {
                                ?>
                                  <div id="error" class="alert btn alert-danger" role="alert">
                                          <p><?php echo $this->session->userdata('captchaError');?></p>
                                          <?php $this->session->unset_userdata('captchaError');?>
                                  </div>
                                <?php                            
                                }               
                            ?>
          <form method="post" action="contacto/send" class="row contact-form">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <input type="text" name="fname" placeholder="Nombre *">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <input type="text" placeholder="Apellidos *" name="lname">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <input type="text" placeholder="Email" name="email">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <input type="text" placeholder="Teléfono *" name="phone">
            </div>
           <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <input type="text" placeholder="direccion *" name="direccion">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <input type="text" placeholder="City (Required)" required name="city">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <input type="text" placeholder="Zip Code (Required)" required name="zip">
            </div>
           -->
           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <input type="text" placeholder="Asunto *" name="asunto">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <textarea name="message" placeholder="¿ Cuál es su consulta ?"></textarea>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <input type="text" placeholder="Ingrese el código Captcha" name="codigo">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <?php echo $cap_img; ?>
            </div>
            
            <button type="submit" class="button_main send_now mouse_hover2 transition3s">Enviar</button>
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
                <h5>Direccion:</h5>
                <p><?php echo getConfig("direccion_empresa")?></p>
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



