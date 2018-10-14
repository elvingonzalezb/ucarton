<div>
    <ul class="breadcrumb">
        <li><a href="mainpanel/banners"><i class="icon-picture icon-white"></i> Banners del Home</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/banners/nuevo"><i class="icon-picture icon-white"></i> Nuevo Banner del Home</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/banner_pagina"><i class="icon-picture icon-white"></i> Banners de Secciones</a> <span class="divider">/</span></li>
    </ul>
</div>
<div class="row-fluid">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> Banners</h2>
			<div class="box-icon">
              <a href="javascript:history.back(-1)" class="btn btn-round" title="VOLVER"><i class="icon-arrow-left"></i></a>                                                
              <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
			<?php 
				if($this->session->userdata('success'))
				{
					echo '<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">×</button>
							'.$this->session->userdata('success').'
					</div>';
					$this->session->unset_userdata('success');
				}
				if($this->session->userdata('error'))
				{
					echo '<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">×</button>
						'.$this->session->userdata("error").'
					</div>';
					$this->session->unset_userdata("error");
				}
			?>
            <table class="table table-striped table-hover table-bordered table-condensed">
                <thead>
                    <tr>
                        <th width="5%">Nro</th>
                        <th width="25%">Imagen</th>
                        <th width="25%">Breve Sumilla</th>
                        <th width="10%">Orden</th>
                        <th width="10%">Estado</th>
                        <th width="25%">Acción</th>
                    </tr>
                </thead>   
                <tbody>
                <?php
                    $orden = 1;
                    foreach($banners as $banner)
                    {
                        $pic = '<img src="files/banners/'.$banner->banner_imagen.'" />';
                        echo '<tr>';
                        echo '<td class="center">'.$orden.'</td>';
                        echo '<td class="celdaImagen">'.$pic.'</td>';
                        echo '<td>'.$banner->banner_sumilla.'</td>';
                        echo '<td>'.$banner->banner_orden.'</td>';
                        if($banner->banner_estado=="A")
                        {
                            echo '<td><span class="label label-success">ACTIVO</span></td>';
                        }
                        else
                        {
                            echo '<td><span class="label label-important">INACTIVO</span></td>';
                        }
                        echo '<td>';
                        echo '<a class="btn btn-success" href="javascript:showBanner(\''.$banner->banner_imagen.'\', \''.$banner->banner_enlace.'\')"><i class="icon-zoom-in icon-white"></i>  Ver</a> ';
                        echo '<a class="btn btn-info" href="mainpanel/banners/edit/'.$banner->banner_id.'"><i class="icon-edit icon-white"></i>  Editar</a> ';
                        echo '<a class="btn btn-danger" href="javascript:deleteBanner(\''.$banner->banner_id.'\')"><i class="icon-trash icon-white"></i>Borrar</a>';
                        echo '</td>';
                        echo '</tr>';
                        $orden++;
                    }
                ?>
                </tbody>
            </table>   
		</div>
	</div>
</div>