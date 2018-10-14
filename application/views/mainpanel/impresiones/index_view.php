<div>
    <ul class="breadcrumb">
        <li><a href="mainpanel/impresiones/texto-grafica"><i class="icon-th-large"></i> Texto Gráfica Jesús</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/impresiones/texto-galeria"><i class="icon-th-large"></i> Texto Galeria Gráfica Jesús</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/impresiones/texto-cotizacion"><i class="icon-th-large"></i> Texto Cotizaciones Gráfica Jesús</a> </li>
    </ul>
</div>

<div>
    <ul class="breadcrumb">
        <li><a href="mainpanel/categorias_impresion/listar"><i class="icon-th-large"></i> Categorías </a> <span class="divider">/</span></li>
        <li><a href="mainpanel/categorias_impresion/nuevo"><i class="icon-th-large"></i> Nueva Categoría</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/subcategorias_impresion/nuevo"><i class="icon-th-large"></i> Nueva Subcategoría</a> <span class="divider">/</span></li>     
        <!--<li><a href="mainpanel/impresiones/listar"><i class="icon-align-justify"></i> Trabajos de Impresión</a> <span class="divider">/</span></li>-->
        <li><a href="mainpanel/impresiones/nuevo"><i class="icon-file"></i> Nuevo Trabajo de Impresión</a></li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Impresiones</h2>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-primary" href="mainpanel/impresiones/nuevo/<?=$id?>">Nuevo Trabajo de Impresión</a>
        </div>
        <div class="box-content">       
            <?php
                if($this->session->userdata('success'))
                {
                    echo '<div class="alert alert-success">';
                    echo '<button type="button" class="close" data-dismiss="alert">×</button>';
                    echo $this->session->userdata('success');
                    echo '</div>';
                    $this->session->unset_userdata('success');
                }
                if($this->session->userdata('error'))
                {
                    echo '<div class="alert alert-error">';
                    echo '<button type="button" class="close" data-dismiss="alert">×</button>';
                    echo $this->session->userdata('error');
                    echo '</div>';
                    $this->session->unset_userdata('error');
                }
            ?>            
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th width="3%">Nro</th>
                        <th width="20%">Foto</th>
                        <th width="3%">Orden</th>
                        <th width="35%">Nombre</th>
                        <th width="25%">Acción</th>
                    </tr>
                </thead>   
                <tbody>
                <?php
                    $orden = 1;
                        for($i=0; $i<count($listado); $i++)
                        {
                            $current        = $listado[$i];
                            $foto           = $current['imagen'];
                            $titulo           = $current['titulo'];

                            $id_foto   = $current['id_foto'];
                            if(is_file('files/impresiones/'.$foto))
                            {
                                $pic = '<img src="files/impresiones/'.$foto.'" class="img-responsive"/>';
                            }
                            else
                            {
                                $pic = '<img src="images/noimg.jpg" class="img-responsive"/>';
                            }
                            echo '<tr>';                           
                            echo '<td class="center">'.$orden.'</td>';
                            echo '<td class="celdaImagen200">'.$pic.'</td>';
                            echo '<td class="center">'.$current['orden'].'</td>';
                            echo '<td class="center">'.$current['titulo'].'</td>';
                            echo '<td>';
                            echo '<a class="btn btn-info" href="mainpanel/impresiones/edit/'.$id_foto.'"><i class="icon-edit icon-white"></i>  Editar</a> ';
                            echo '<a class="btn btn-danger" href="javascript:deleteimpresiones(\''.$id_foto.'\')"><i class="icon-trash icon-white"></i>Borrar</a>';
                             /*echo '<a class="btn btn-inverse" href="mainpanel/fotos/listado/'.$id_foto.'"><i class="fa fa-photo icon-white"></i> Galeria</a> ';*/
                                                      
                            echo '</td>';
                            echo '</tr>';
                            $orden++;
                        }                    
                ?>
                </tbody>
            </table>
        </div>
     </div><!--/span-->
</div><!--/row-->