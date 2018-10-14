        <?php echo $banner_pagina;?>

        <div class="container">

            <div Style="margin-top:25px;" class="row">
                    <?php
                            if($this->session->userdata('success'))
                            {
                            ?>
                              <div id="success" class="alert alert-success" role="alert">
                                      <p><?php echo $this->session->userdata('success') ?></p>
                                      <?php $this->session->unset_userdata('success') ?>
                              </div>
                            <?php
                            }
                            if($this->session->userdata('error'))
                            {
                            ?>
                              <div id="error" class="alert alert-danger" role="alert">
                                      <p><?php echo $this->session->userdata('error');?></p>
                                      <?php $this->session->unset_userdata('error');?>
                              </div>
                            <?php                            
                            }
                            if($this->session->userdata('captchaError'))
                            {
                            ?>
                              <div id="error" class="alert alert-danger" role="alert">
                                      <p><?php echo $this->session->userdata('captchaError');?></p>
                                      <?php $this->session->unset_userdata('captchaError');?>
                              </div>
                            <?php                            
                            }               
                            ?>
                
                
                <div class="login col-md-5">    
					<!--************ CONTENIDO SECCION ************-->
                            <h1>Clientes Registrados</h1>
                             <?php $attributes = array('id' => 'form_login');?>
                             <?php $email = array('name'=>'email', 'id'=>'email','class'=>'form-control','placeholder'=>'Email', 'type'=>'email' );?>
                             <?php $clave = array('name'=>'clave', 'id'=>'clave','class'=>'form-control','placeholder'=>'Clave', 'type'=>'password' );?>    
                            <?php if(validation_errors()):?>
                                <div id="error"><?=validation_errors();?></div>
                            <?php endif ?>
                            <?=form_open('login', $attributes);?>
                                <!-- <legend>Personal Information</legend> -->
                                <div class="form-group">
                                    <?=form_label('Email');?><div id='msg_email' class="padding"></div>
                                    <?=form_input($email);?>
                                </div>
                                <div class="form-group">
                                    <?=form_label('Clave');?><div id='msg_clave' class="padding"></div>
                                    <?=form_input($clave);?>
                                </div>
                                
                                <?=form_submit(array('name' => 'submit', 'id' => 'btnLogin2',  'class' => 'transition3s mouse_hover2 green_button', 'value' => 'INGRESAR'))?>
                            <?=form_close();?>  
                            <!--a href="login/recuperar">Olvidé mi clave</a> | 
                            <a href="registro">¿No tienes una cuenta?</a-->
                    <!--*********** FIN CONTENIDO SECCION **********-->
                	<div class="gap gap-small"></div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5 registered-users">
                    <strong><h1>Registro de clientes nuevos</h1></strong>             
                    <div class="formulario">     
                    <!--************ CONTENIDO SECCION ************-->
                            <?php
                                if($this->session->userdata('emailexiste'))
                                {
                                    echo '<div class="alert alert-danger alert-error">';
                                    echo '<button type="button" class="close" data-dismiss="alert">×</button>';
                                    echo $this->session->userdata('emailexiste');
                                    echo '</div>';
                                    $this->session->unset_userdata('emailexiste');
                                }
                                if($this->session->userdata('error'))
                                {
                                    echo '<div class="alert alert-danger alert-error">';
                                    echo '<button type="button" class="close" data-dismiss="alert">×</button>';
                                    echo $this->session->userdata('error');
                                    echo '</div>';
                                    $this->session->unset_userdata('error');
                                }                                
                                if ($this->session->flashdata('error')!==FALSE) 
                                { 
                                  echo '<div class="alert alert-danger alert-error">';
                                  echo $this->session->flashdata('error');
                                  echo '</div>';
                                }   
                            ?>  
                            <form name="form" method="post" action="registro/grabar" onSubmit="return validar_registro(this)">
                                <!-- <legend>Personal Information</legend> -->
                                <div class="form-group">
                                    <label for="">Nombre</label>
                                    <input type="text" name="nombresRegistro2" id="nombresRegistro2" class="form-control" value="<?=$this->session->userdata('nombres')?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Apellidos</label>
                                    <input type="text" name="apellidosRegistro2" id="apellidosRegistro2" class="form-control" value="<?=$this->session->userdata('apellidos')?>">
                                </div>
                                <!--div class="form-group">
                                    <label for="">Empresa</label>
                                    <input type="text" name="razonSocialRegistro2" id="razonSocialRegistro2" class="form-control" value="<?//=$this->session->userdata('razon_social')?>">
                                </div-->

                                <div class="form-group">
                                    <label for="">Teléfono</label>
                                    <input type="text" name="telefonoRegistro2" id="telefonoRegistro2" class="form-control" value="<?=$this->session->userdata('telefono')?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Dirección</label>
                                    <input type="text" name="direccionRegistro2" id="direccionRegistro2" class="form-control" value="<?=$this->session->userdata('direccion')?>">
                                </div>                                
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="emailRegistro2" id="emailRegistro2" class="form-control" value="<?=$this->session->userdata('email_registro')?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Clave</label>
                                    <input type="password" name="claveRegistro2" id="claveRegistro2" class="form-control" value="<?=$this->session->userdata('clave')?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Repita su clave</label>
                                    <input type="password" name="claveRegistro2b" id="claveRegistro2b" class="form-control" >
                                </div>
                                <div class="form-group">
                                <label>Como se enteró de nosotros</label>
                                <div class="bg-warning form-alert" id="form-alert-entero">Debe indicar como se enteró de nosotros</div>
                                    <select class="form-control" name="origen" id="origen">
                                        <?php
                                        if($this->session->userdata('origen')){?>
                                            <option value="<?=$this->session->userdata('origen')?>"><?=$this->session->userdata('origen')?></option>
                                        <?php
                                        }else{}
                                        ?>
                                        <option value="0">Elija.....</option>
                                        <option value="Afiche/Brochure/Encarte">Afiche/Brochure/Encarte</option>
                                        <option value="Aviso de Diario">Aviso de Diario</option>
                                        <option value="Aviso de Revista">Aviso de Revista</option>
                                        <option value="Baner Publicitario">Baner Publicitario</option>
                                        <option value="Por un amigo o conocido">Por un amigo o conocido</option>
                                        <option value="E-mailing">E-mailing</option>
                                        <option value="Pagina web">Pagina web</option>
                                        <option value="Panel Publicitario">Panel Publicitario</option>
                                        <option value="Radio">Radio</option>
                                        <option value="Redes Sociales">Redes Sociales</option>
                                        <option value="Television">Television</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="input-box name-firstname">
                                          <label for="name"><em class="required">*</em>Captcha:</label>
                                          <br>
                                          <input class="input-text form-control"  type="text" name="codigo" id="codigo" placeholder="Ingrese el codigo..." >
                                            <?php echo $cap_img;?>
                                    </div>
                                </div>
                                <!--<input type="button" onClick="procesaRegistro()" class="btn btn-primary" id="btnRegistro2" value="REGISTRARSE">-->
                                <div Style="padding-bottom:50px;" >
                                <input type="submit" class="transition3s mouse_hover2 green_button" id="btnRegistro2" value="REGISTRARSE">
                                </div>
                            </form>
                    <!--*********** FIN CONTENIDO SECCION **********-->
                    <div class="gap gap-small"></div>
                    </div>
                              
                </div> <!--col-2 registered-users-->
                
                
            </div><!-- row -->
        </div><!-- container -->
        <div id="separador"></div>

        
