<?php
  echo $banner_pagina;
?>
<div class="container">
      <div class="row">
        <div class="col-lg-12">
                <div class="contenidoSeccion">
                  <h1 class="tituloSeccion" id="titulo"><?php echo $texto_web->titulo?></h1>
                  <div class="textoSeccion" id="contenido">
                    
                  </div>
                </div>
              </div>
      </div>      
      <div class="row margin-bottom-30">
        
        <div class="col-sm-3 hentry">
          
          <div class="widget_black-studio-tinymce textogris">
            <div class="featured-widget">
              <h3 class="widget-title">
                <span class="widget-title__inline negrita">DATOS DE CONTACTO</span>
              </h3>
              <p>
                <?php echo getConfig("direccion_empresa")?>
              </p>
              <p>
                <?php echo getConfig("telefono")?><br>
                <?php echo getConfig("celular");?><br>
                <div class="continua">
                <a href="mailto:<?php echo getConfig("correo_notificaciones")?>"><?php echo getConfig("correo_notificaciones")?></a>
                </div>
              </p>
            </div>
          </div>
          
          
        </div><!-- /.col -->
        
        <div class="col-sm-9">
          
          <h3 class="widget-title margin-top-0 negrita">
            ENVIA TU COTIZACIÓN
          </h3>
          
            <?php
              if($this->session->userdata('success'))
              {
              ?>
                <div id="success">
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
              <div id="error">
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
              <div id="error">
                  <span class="red textcenter">
                      <p><?php echo $this->session->userdata('captchaError');?></p>
                      <?php $this->session->unset_userdata('captchaError');?>
                  </span>
              </div>
            <?php                            
            }               
          ?>   
          <form method="post" action="cotizacion/send" class="aSubmit">
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <input type="text" placeholder="Nombre*" aria-invalid="false" aria-required="true" size="40" value="<?=$this->session->userdata('nombre_contacto')?>" name="nombre" required>
                </div>
              </div>
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <input type="text" placeholder="Apellido*" aria-invalid="false" aria-required="true" size="40" value="<?=$this->session->userdata('apellido_contacto')?>" name="apellido" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <input type="text" placeholder="Empresa*" aria-invalid="false" aria-required="true" size="40" value="<?=$this->session->userdata('empresa')?>" name="empresa" required>
                </div>
              </div>
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <input type="tel" placeholder="Teléfono" aria-invalid="false" aria-required="true" size="40" value="<?=$this->session->userdata('telefono_contacto')?>" name="telefono">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <input type="email" placeholder="Email*" aria-invalid="false" aria-required="true" size="40" value="<?=$this->session->userdata('correo_contacto')?>" name="email" required>
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
                  <textarea placeholder="Descripción del trabajo a realizar*" aria-invalid="false" rows="10" cols="40" name="mensaje" required><?=$this->session->userdata('mensaje_contacto')?></textarea>
                </div>
                <div class="col-xs-12 col-md-6">
                  <div class="form-group">
                    <input name="codigo" value="" size="40" aria-invalid="false" placeholder="Ingrese el código de la imagen*" type="text" required>
                  </div>
                </div>
                <?php echo $cap_img?>
                <input type="submit" class="btn btn-primary" value="ENVIAR COTIZACIÓN">
              </div>
            </div>          
          </form>
          
        </div><!-- /.col -->        
      </div><!-- /.row -->      
</div><!-- /.container -->