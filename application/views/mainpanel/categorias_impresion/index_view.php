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
            <h2><i class="icon-user"></i>Lista de Categorías</h2>
            <div class="box-icon">
                <a href="javascript:history.back(-1)" class="btn btn-round" title="VOLVER"><i class="icon-arrow-left"></i></a>
            </div>
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
                        <th width="5%">Nro</th>
                        <th width="15%">IMAGEN</th>
                        <th width="15%">TITULO</th>
                        <th width="10%">TIENE SUBCATS?</th>
                        <th width="10%">SUBCATS/PRODS</th>
                        <th width="10%">DESTACADO</th>
                        <th width="5%">ORDEN</th>
                        <th width="10%">ESTADO</th>
                        <th width="20%">ACCION</th>
                    </tr>
                </thead>   
                <tbody>
                <?php
                    $orden = 1;
                    foreach($categorias_impresion as $seccion)
                    {
                        if(($seccion->id)==0){}else{
                        $pic = '<img src="files/categorias_impresion/'.$seccion->imagen.'" width="160px"/>';
                        $num_subcats = getNumSubcategoriasImpresion($seccion->id);
                        $num_productos = getNumProductosImpresion($seccion->id);
                        echo '<tr>';
                        echo '<td class="center">'.$orden.'</td>';
                        echo '<td class="celdaImagen">'.$pic.'</td>';
                        echo '<td>'.$seccion->titulo.'</td>';
                        echo '<td>'.$seccion->tiene_subcats.'</td>';
                        echo '<td>'.$num_subcats.' / '.$num_productos.'</td>';
                        echo '<td>'.$seccion->destacado.'</td>';
                        echo '<td>'.$seccion->orden.'</td>';
                        if($seccion->estado=="A")
                        {
                            echo '<td><span class="label label-success">ACTIVO</span></td>';
                        }
                        else
                        {
                            echo '<td><span class="label label-important">INACTIVO</span></td>';
                        }
                        echo '<td>';
                        echo '<a class="btn btn-info" href="mainpanel/categorias_impresion/edit/'.$seccion->id.'"><i class="fa fa-edit icon-white"></i> Editar</a> ';
                        echo '<a class="btn btn-danger" href="javascript:deletecategorias_impresion(\''.$seccion->id.'\')"><i class="fa fa-trash icon-white"></i> Borrar</a> ';

                        if($num_subcats>0)
                        {
                            echo '<a class="btn btn-success" href="mainpanel/subcategorias_impresion/listar/'.$seccion->id.'"><i class="fa fa-comment icon-white"></i> SUBCATEGORIAS</a> ';
                        }
                        
                        if($num_productos>0)
                        {
                            echo '<a class="btn btn-inverse" href="mainpanel/impresiones/listado/'.$seccion->id.'"><i class="fa fa-photo icon-white"></i> PRODUCTOS</a> ';
                        }
                        echo '</td>';
                        echo '</tr>';
                        $orden++;
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
     </div><!--/span-->
</div><!--/row-->                