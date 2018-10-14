<div>
    <ul class="breadcrumb">
        <li><a href="mainpanel/clientes/listar">Lista de Clientes</a> <span class="divider">/</span></li>
    </ul>
</div>
<div class="row-fluid sortable">
   
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i>Clientes Registrados</h2>
            <div class="box-icon">
                <a href="javascript:history.back(-1)" class="btn btn-round" title="VOLVER"><i class="icon-arrow-left"></i></a>                                                
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
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
                        <th width="22%">NOMBRES Y APELLIDOS</th>
                        <th width="10%">TIPO</th>
                        <th width="10%">CORREO</th>
                        <th width="10%">FECHA REGISTRO</th>
                        <th width="10%">ESTADO</th>
                        <th width="33%">ACCION</th>
                    </tr>
                </thead>   
                <tbody>
                <?php
                    $orden = 1;
                    foreach($clientes as $cliente)
                    {
                        echo '<tr>';
                        echo '<td class="center">'.$orden.'</td>';
                        echo '<td class="center">'.$cliente->nombres.' '.$cliente->apellidos.'</td>';
                        echo '<td class="center">'.$cliente->tipo.'</td>';
                        echo '<td class="center">'.$cliente->email.'</td>';
                        echo '<td>'.$cliente->fecha_registro.'</td>';
                        echo '<td class="center">'.$cliente->estado.'</td>';                        
                        echo '<td class="center">';
                        echo '<a class="btn btn-success" href="mainpanel/clientes/detalle/'.$cliente->id.'"><i class="icon-edit icon-white"></i>  Datos</a> ';
                        //echo '<a class="btn btn-info" href="mainpanel/clientes/edit/'.$cliente->id.'"><i class="icon-edit icon-white"></i>  Editar</a> ';
                        echo '<a class="btn btn-danger" href="javascript:deleteCliente(\''.$cliente->id.'\')"><i class="icon-trash icon-white"></i>Borrar</a>';
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