<div>
    <ul class="breadcrumb"> 
        <li><a href="mainpanel/cotizacion/recibidos"><i class="icon-align-justify"></i> Solicitudes de cotización</a> </li>     
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Detalle de cotizacion</h2>
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
                                <td><h4>Nombres:</h4></td>
                                <td>
                                    <?php echo $messagee->nombre; ?>
                                </td>
                            </tr>
                         
                            <tr>
                                <td><h4>Apellidos:</h4></td>
                                <td>
                                    <?php echo $messagee->apellido; ?>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td><h4>Teléfono:</h4></td>
                                <td>
                                    <?php// echo $messagee->telefono; ?>
                                </td>
                            </tr>
 -->
                            <tr>
                                <td><h4>Email:</h4></td>
                                <td>
                                    <?php echo $messagee->correo; ?>
                                </td>
                            </tr>

                            <tr>
                                <td><h4>Asunto:</h4></td>
                                <td>
                                    <?php echo $messagee->asunto; ?>
                                </td>
                            </tr>

                            <tr>
                                <td><h4>Descripcion del trabajo a cotizar:</h4></td>
                                <td>
                                    <?php echo $messagee->mensaje; ?>
                                </td>
                            </tr>                            
                            <tr>
                                <td><h4>Fecha de registro:</h4></td>
                                <td>
                                    <?php  $messagee->fecha_envio; 

                                    $temp= date_create($messagee->fecha_envio);
                                    $format= date_format($temp, 'd-m-Y H:i:s');
                                    echo $format;

                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><h4>Estado:</h4></td>
                                <td>
                                    <?php echo $messagee->estado; ?>
                                </td>
                            </tr>                            
                        </tbody>
                    </table>                                       

<!--                   <a class="btn btn-danger" href="mainpanel/cotizacion/listado">VOLVER</a>-->

                </fieldset>


        </div>
    </div><!--/span-->

</div><!--/row-->