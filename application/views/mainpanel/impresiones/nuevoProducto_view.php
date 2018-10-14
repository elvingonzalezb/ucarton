<div>
    <ul class="breadcrumb">
        <li><a href="mainpanel/impresiones/texto-grafica"><i class="icon-th-large"></i> Texto Gráfica Jesús</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/impresiones/texto-galeria"><i class="icon-th-large"></i> Texto Galeria Gráfica Jesús</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/impresiones/texto-cotizacion"><i class="icon-th-large"></i> Texto Cotizaciones Gráfica Jesús</a> </li>        
    </ul>
</div>
<div>
    <ul class="breadcrumb">
        <li><a href="mainpanel/categorias_impresion/listar"><i class="icon-th-large"></i> Categor&iacute;as </a> <span class="divider">/</span></li>
        <li><a href="mainpanel/categorias_impresion/nuevo"><i class="icon-th-large"></i> Nueva Categor&iacute;a</a> <span class="divider">/</span></li>        
        <li><a href="mainpanel/impresiones/listar"><i class="icon-align-justify"></i> Trabajos de Impresión</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/impresiones/nuevo"><i class="icon-file"></i> Nuevo Trabajo de Impresión</a></li>
    </ul>
</div>

<div class="row-fluid sortable">
  
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Listado de impresiones </h2>
            &nbsp;&nbsp;&nbsp;
            
        </div>
        <div class="box-content">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td width="20%"><h4>Categoría:</h4></td>
                        <td width="80%">
                            <!--select name="categoria" id="categoria" onchange="carga_subcategoria(this.value)"-->
                            <select name="categoria" id="categoria" onchange="muestra_impresiones(this.value)">
                            <option value="0">Elija una categor&iacute;a...</option>
                            <?php
                            foreach ($categorias as $key => $value) {
                                if($value["id"]==62 || $value["id"]==63){} //62 y63 son los id de promociones y otra seccion, con esto se excluye
                                else{
                                    if (isset($idcat) and $idcat==$value['id']) {
                                        echo '<option value="'.$value['id'].'" selected>'.$value['titulo'].'</option>';
                                    }else{
                                        echo '<option value="'.$value['id'].'">'.$value['titulo'].'</option>';
                                    }
                                }
                            }
                            ?>
                            
                            </select>                                          
                        </td>
                    </tr>
                    <tr>
                        <!--td ><h4>Sub Categoría:</h4></td>
                        <td>

                            <select name="subcategoria" id="subcategoria" onchange="muestra_impresiones(this.value)">
                            <?php /*
                            foreach ($subcategorias as $key => $value) {
                                if ($padre==$value['id_categoria']) {
                                    echo '<option value="'.$value['id_categoria'].'" selected>'.$value['titulo'].'</option>';
                                }else{
                                    echo '<option value="'.$value['id_categoria'].'">'.$value['titulo'].'</option>';
                                }
                                
                            }
                            
                            */?>
                            
                            </select>                                          
                        </td-->
                    </tr>                    
                </tbody>
            </table>        
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
            if(isset($padre)){

            ?>              
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Nro</th>
                        <th width="15%">Foto</th>
                        <th>Nombre</th>
                        <th>Orden</th>
                        <th>Estado</th>
                        <th>Destacado</th>                        
                        <th>Acción</th>
                    </tr>
                </thead>   
                <tbody>
                <?php
                    $orden = 1;

                    
                        for($i=0; $i<count($listado); $i++)
                        {
                            $current        = $listado[$i];
                            $foto           = $current['imagen'];
                            $id_producto   = $current['id_producto'];

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
                            echo '<td>'.$current['nombre'].'</td>';
                            echo '<td class="center">'.$current['orden'].'</td>';
                            if($current['estado']=="A")
                            {
                                echo '<td><span class="label label-success">ACTIVO</span></td>';
                            }
                            else
                            {
                                echo '<td><span class="label label-important">INACTIVO</span></td>';
                            }
                            if($current['destacado']==1)
                            {
                                echo '<td><span class="label label-success">SI</span></td>';
                            }
                            else
                            {
                                echo '<td><span class="label label-important">NO</span></td>';
                            }                            
                            echo '<td>';
                            echo '<a class="btn btn-info" href="mainpanel/impresiones/edit/'.$id_producto.'"><i class="icon-edit icon-white"></i>  Editar</a> ';
                            echo '<a class="btn btn-danger" href="javascript:deleteProducto(\''.$id_producto.'\')"><i class="icon-trash icon-white"></i>Borrar</a><br /><br />';
                            //echo '<a class="btn btn-primary" href="mainpanel/fotografias/listado/'.$id_producto.'"><i class="icon-picture icon-white"></i>  Fotos</a> ';                            
                            echo '</td>';
                            echo '</tr>';
                            $orden++;
                        }
                    
                ?>
                </tbody>
            </table>  
            <?php 
            }
            ?>          
        </div>
     </div><!--/span-->
</div><!--/row-->

<script>
function muestra_impresiones(padre){
    var url='mainpanel/impresiones/listado/'+padre;
    window.location.href =url;
}
</script>