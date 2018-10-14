<?php echo $banner_pagina; //print_r($this->session->userdata('carrito_industrial')); return; ?>      
        


                <div class="container">
            <div class="row">
                <div class="col-xs-12">        
					<!--************ CONTENIDO SECCION ************-->
                    <h3>Detalle de su Compra</h3>
					<?php
                        if($this->session->userdata('carrito_industrial'))
                        {
							$carrito=$this->session->userdata('carrito_industrial');
							$num_items = count($carrito);
							if($num_items==0)
							{
								echo '<div class="alert alert-danger alert-error">';
								//echo '<button type="button" class="close" data-dismiss="alert">×</button>';
								echo 'Su cotización está; vacía.';
								echo '</div>';
							}
							else
							{
								echo '<div id="detalle_carrito">';
								echo '<form method="post">';
								echo '<table id="shopping-cart-table"  class="table cart-table">';
								echo '<thead>';
									echo '<tr>';
										echo '<th>FOTO</th>';
										echo '<th>PRODUCTO</th>';
										echo '<th>CANTIDAD</th>';
										/*echo '<th>PRECIO</th>';
										echo '<th>SUBTOTAL</th>';*/
										echo '<th>ACTUALIZAR</th>';
										echo '<th>QUITAR</th>';
									echo '</tr>';
								echo '</thead>';
								echo '<tbody>';
								$index = 1; $total=0;
								foreach($carrito as $k => $v)
								{
									$id_producto = $v['id_producto'];
									$cantidad = $v['cantidad'];
									$nombre = $v['nombre'];
									$imagen = $v['imagen'];
									$precio = $v['precio'];
									$subtotal=$cantidad*$precio;
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
									echo '<td valign="baseline">'.$nombre.'</td>';									
									echo '<td class="cart-item-quantity" valign="baseline">';
									echo '<input type="text" name="cantidad_'.$index.'" id="cantidad_'.$index.'" value="'.$cantidad.'" size="3" />&nbsp;&nbsp;';
									/*echo '<td valign="baseline">'.$precio.'</td>';
									echo '<td valign="baseline">S/.'.number_format($subtotal,2).'</td>';*/

									echo '<input type="hidden" name="id_producto_'.$index.'" id="id_producto_'.$index.'" value="'.$id_producto.'">';
									echo '<input type="hidden" name="nombre_'.$index.'" id="nombre_'.$index.'" value="'.$nombre.'">';
									echo '<input type="hidden" name="imagen_'.$index.'" id="imagen_'.$index.'" value="'.$imagen.'">';
									echo '</td>';
									echo '<td>';
									echo '<input type="button" onclick="updateCotizacion('.$index.')" class="boton_editar" value="Actualizar" />';
									echo '</td>';

									echo'<td class="a-center last"><a href="javascript:del_item_cotizacion('.$index.')" title="Borrar item" class="button remove-item"><span><span>Borar item</span></span></a></td>';
									//echo '<td class="cart-item-remove">';
										//echo '<a class="icon-times" href="javascript:del_item_cotizacion('.$index.')"></a>';
									//echo '</td>';
									echo '</tr>';
									$index++;
									$total=$total+$subtotal;
								} // for each
								/*echo '<td  colspan="4" valign="baseline"><b><h2>Total</h2></b></td>';
								echo '<td valign="baseline"><b><h2>S/.'.number_format($total,2).'</h2></b></td>';*/
								echo '</tbody>';						
								echo '</table>';
								echo '</form>';
								echo '</div>';
								//detalle_carrito
								echo '<div style="margin-bottom: 20px;"class="row separador">';
									echo '<div class="col-md-4">';
										echo '<a href="productos" class="transition3s mouse_hover2 green_button">SEGUIR COTIZANDO</a>';
									echo '</div>';
									echo '<div class="col-md-4">';
										echo '<a href="javascript:clearCotizacion()" class="transition3s mouse_hover2 green_button">ELIMINAR COTIZACION</a>';
									echo '</div>';
									echo '<div class="col-md-4">';
										echo '<a href="cotizacion/completar" class="transition3s mouse_hover2 green_button">COMPLETAR COTIZACIÓN</a>';
									echo '</div>';
								echo '</div>';
							}
                        }
                        else
                        {
							echo '<div class="alert alert-danger alert-error">';
							//echo '<button type="button" class="close" data-dismiss="alert">×</button>';
							echo 'Su cotizaci&oacute;n est&aacute; vacia.';
							echo '</div>';
                        }
                    ?>       
                    <div id="separador"></div>           
                    <!--*********** FIN CONTENIDO SECCION **********-->
                	<div class="gap gap-small"></div>
                </div>
            </div>
        </div>