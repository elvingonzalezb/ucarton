<?php echo $banner_pagina; ?>
        <div class="container">
       
            <div class="row">
                <div class="col-xs-12">        
					<!--************ CONTENIDO SECCION ************-->
                    <h3>Revise su Cotización</h3>
					<?php
                        if($this-> session-> userdata('carrito_industrial') && $this->session->userdata('email'))
                        {
							$carrito=$this-> session-> userdata('carrito_industrial');
							$num_items = count($carrito);
							if($num_items==0)
							{
								echo '<div class="alert alert-danger alert-error">';
								//echo '<button type="button" class="close" data-dismiss="alert">×</button>';
								echo 'Su cotizaci&oacute;n est&aacute; vacia.';
								echo '</div>';
							}
							else
							{
								echo '<div id="detalle_carrito" style="margin-bottom: 50px !important;">';
								echo '<form method="post" action="cotizacion/enviar">';
								echo '<table class="table cart-table">';
								echo '<thead>';
									echo '<tr>';
										echo '<th>FOTO</th>';
										echo '<th>PRODUCTO</th>';
										echo '<th>CANTIDAD</th>';
										/*echo '<th>PRECIO</th>';
										echo '<th>SUBTOTAL</th>';*/
									echo '</tr>';
								echo '</thead>';
								echo '<tbody>';
								$index = 1;
								$total=0;
								foreach($carrito as $k => $v)
								{
									$id_producto = $v['id_producto'];
									$cantidad = $v['cantidad'];
									$nombre = $v['nombre'];
									$imagen = $v['imagen'];
									$precio = $v['precio'];
									$subtotal=$precio*$cantidad;
									$total=$subtotal+$total;
									echo '<tr>';
									echo '<td class="cart-item-image">';
									if( (isset($imagen)) && (is_file('files/productos/'.$imagen)))
									{
										echo '<img src="files/productos/'.$imagen.'" height="100" align="middle" border="0" />';
									}
									else
									{								
										echo '<img src="assets/imagenes/sinFoto70x96.png" border="0"  height="100"/>';														
									}								
									echo '</td>';
									echo '<td>'.$nombre.'</td>';
									echo '<td>'.$cantidad.'</td>';
								/*	echo '<td>'.number_format($precio,2).'</td>';
									echo '<td>'.number_format($subtotal,2).'</td>';*/
									echo '</tr>';
								} // for each
								echo '<tr>';
								/*echo '<td colspan="4" >Total</td>';
								echo '<td colspan="3" >S/.'.number_format($total,2).'</td>';*/
								echo '</tr>';	
								echo '</tbody>';						
								echo '</table>';
								
								echo '</div >';//detalle_carrito
								
								echo '<div class="gap gap-small"></div>';								
								/*echo '<div class="row">';								
								echo '<div class="col-md-6">';
								echo '<h4>Nombre de Cliente</h4>';
								echo '<input type="text" name="nombre_cliente" class="form-control" id="nombre_cliente">';
								
								echo '</div>';
								echo '</div>';	*/							
								/*echo '<div class="row">';								
								echo '<div class="col-md-6">';
								echo '<h4>Direccion</h4>';
								echo '<input type="text" name="direccion" class="form-control" id="direccion">';
								echo '</div>';
								echo '</div>';*/
								
								echo '<div class="row">';								
								echo '<div class="col-md-6">';
								echo '<h4>Mensaje del Cliente</h4>';
								echo '<textarea name="mensaje" row="6" class="form-control" id="mensaje"></textarea>';
								echo '</div>';
								echo '</div>';
								
								echo '<div class="gap gap-small"></div>';
								
								echo '<div style="margin-bottom: 20px; margin-top: 20px;" class="row">';
									echo '<div class="col-md-3">';
										echo '<input type="submit" value="ENVIAR COTIZACION" class="transition3s mouse_hover2 green_button" id="btnEnviarCot">';
									echo '</div>';									
									echo '<div class="col-md-6"></div>';
									echo '<div class="col-md-3">';
										echo '<a href="cotizacion/detalle" class="transition3s mouse_hover2 green_button">EDITAR COTIZACI&Oacute;N</a>';
									echo '</div>';
								echo '</div>';
								
								echo '</form>';
							    echo '<div style id="separador"></div>';
							}
                        }
                        else
                        {
							redirect('login');
                        }
                    ?>                  
                    <!--*********** FIN CONTENIDO SECCION **********-->
                	<div class="gap gap-small"></div>
                </div>
            </div><!-- row -->
        </div><!-- container -->     
       