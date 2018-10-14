<div>
    <ul class="breadcrumb">
        <li><a href="mainpanel/fotos/listado/<?=$id?>">Lista de Fotos</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/fotos/nuevo/<?=$id?>">Nueva Foto</a></li>
    </ul>
</div>
<div class="row-fluid sortable">
  
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Galeria</h2>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-primary" href="mainpanel/fotos/nuevo/<?=$id?>">Nueva Foto</a>
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
                        <th width="40%">Foto</th>
                        <th width="3%">Orden</th>
                        <th width="30%">Acción</th>
                    </tr>
                </thead>   
                <tbody>
                <?php
                    $orden = 1;
                        for($i=0; $i<count($listado); $i++)
                        {
                            $current        = $listado[$i];
                            $foto           = $current['imagen'];
                            $id_foto   = $current['id_foto'];

                            if(is_file('files/fotos/'.$foto))
                            {
                                $pic = '<img src="files/fotos/'.$foto.'" class="img-responsive"/>';
                            }
                            else
                            {
                                $pic = '<img src="images/noimg.jpg" class="img-responsive"/>';
                            }
                            echo '<tr>';
                            
                            echo '<td class="center">'.$orden.'</td>';
                            echo '<td class="celdaImagen200">'.$pic.'</td>';
                            echo '<td class="center">'.$current['orden'].'</td>';
                            echo '<td>';
                            echo '<a class="btn btn-info" href="mainpanel/fotos/edit/'.$id_foto.'"><i class="icon-edit icon-white"></i>  Editar</a> ';
                            echo '<a class="btn btn-danger" href="javascript:deleteFoto(\''.$id_foto.'\')"><i class="icon-trash icon-white"></i>Borrar</a><br /><br />';
                            //echo '<a class="btn btn-primary" href="mainpanel/fotografias/listado/'.$id_producto.'"><i class="icon-picture icon-white"></i>  Fotos</a> ';                            
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