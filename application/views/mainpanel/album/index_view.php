<div>
    <ul class="breadcrumb">
        <li><a href="mainpanel/album/listar">Lista de Álbums</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/album/nuevo">Nuevo Álbum</a></li>
    </ul>
</div>
<div class="row-fluid sortable">
   
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i>Álbum de Fotos</h2>
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
                        <th width="2%">Nro</th>
                        <th width="17%">Imagen</th>
                        <th width="50%">Título</th>
                         <!--   <th width="5%">Orden</th>
                            <th width="9%">Destacado</th>
                            <th width="7%">Estado</th>
                            <th width="">Acción</th>  -->
                    </tr>
                </thead>   
                <tbody>
                <?php
                    $orden = 1;
                    foreach($album as $seccion)
                    {
                        $pic = '<img src="files/album/'.$seccion->imagen.'" width="160px"/>';
                        echo '<tr>';
                        echo '<td class="center">'.$orden.'</td>';
                        echo '<td class="celdaImagen">'.$pic.'</td>';
                        echo '<td>'.$seccion->titulo.'</td>';
                       /* echo '<td>'.$seccion->orden.'</td>';
                        if($seccion->destacado=="1")
                        {
                            echo '<td><span class="label label-success">SI</span></td>';  
                        }
                        else
                        {
                            echo '<td><span class="label label-important">NO</span></td>';
                        }

                        if($seccion->estado=="A")
                        {
                            echo '<td><span class="label label-success">ACTIVO</span></td>';
                        }
                        else
                        {
                            echo '<td><span class="label label-important">INACTIVO</span></td>';
                        }

                        */
                        echo '<td>';
                        echo '<a class="btn btn-info" href="mainpanel/album/edit/'.$seccion->id.'"><i class="fa fa-edit icon-white"></i> Editar</a> ';
                        echo '<a class="btn btn-danger" href="javascript:deleteAlbum(\''.$seccion->id.'\')"><i class="fa fa-trash icon-white"></i> Borrar</a> ';
                       // echo '<a class="btn btn-success" href="mainpanel/comentarios-album/listado/'.$seccion->id.'"><i class="fa fa-comment icon-white"></i> Comentarios</a> ';
                        echo '<a class="btn btn-inverse" href="mainpanel/fotos/listado/'.$seccion->id.'"><i class="fa fa-photo icon-white"></i> Galeria</a> ';

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