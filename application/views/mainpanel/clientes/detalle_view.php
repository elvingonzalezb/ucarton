                    <div class="box-header well" data-original-title>
                        <h2><i class="icon-edit"></i> Datos de Cliente</h2>
                        <div class="box-icon">
                            <a href="javascript:history.back(-1)" class="btn btn-round" title="VOLVER"><i class="icon-arrow-left"></i></a>                
                            <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                            <fieldset>
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <td width="30%"><h4>Nombres:</h4></td>
                                            <td width="70%"><?php echo $cliente->nombres; ?></td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><h4>Apellidos:</h4></td>
                                            <td width="70%"><?php echo $cliente->apellidos; ?></td>
                                        </tr>
                                        <!-- <tr>
                                            <td width="30%"><h4>Razon Social:</h4></td>
                                            <td width="70%"><?php //echo $cliente->razon_social; ?></td>
                                        </tr> -->
                                        <tr>
                                            <td><h4>Teléfono:</h4></td>
                                            <td><?php echo $cliente->telefono; ?></td>
                                        </tr>
                                        <tr>
                                            <td><h4>Como se entero:</h4></td>
                                            <td><?php echo $cliente->origen; ?></td>
                                        </tr>
                                        <tr>
                                            <td><h4>Clave:</h4></td>
                                            <td><?php echo $cliente->clave; ?></td>
                                        </tr>
                                        <tr>
                                            <td><h4>Código de Cliente:</h4></td>
                                            <td><?php echo $cliente->codigo; ?></td>
                                        </tr>
                                        <tr>
                                            <td><h4>Email:</h4></td>
                                            <td><?php echo $cliente->email; ?></td>
                                        </tr>                         
                                        <tr>
                                            <td><h4>Fecha de Ingreso:</h4></td>
                                            <td><?php echo $cliente->fecha_registro; ?></td>
                                        </tr>
                                        <tr>
                                            <td><h4>Estatus:</h4></td>
                                            <td><?php echo $cliente->estado; ?></td>
                                        </tr>
                                        <tr>
                                        	<td></td>
                                            <td><a class="btn btn-danger" href="mainpanel/clientes/listar">VOLVER</a></td>
                                        </tr>                            
                                    </tbody>
                                </table> 
                            </fieldset>            
                    </div>
