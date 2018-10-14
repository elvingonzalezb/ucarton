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
			<h2><i class="icon-user"></i> Banner Página</h2>
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
                        <th width="25%">Sección</th>
                        <th width="25%">Acción</th>
                    </tr>
                </thead>   
                <tbody>
                <?php
                    $orden = 1;
                    foreach($banner as $b)
                    {
                        $pic = '<img src="files/banner_pagina/'.$b->imagen.'" />';
                        echo '<tr>';
                        echo '<td>'.$orden.'</td>';
                        echo '<td class="celdaImagen">'.$pic.'</td>';
                        echo '<td>'.$b->seccion.'</td>';
                        echo '<td>';
                        echo '<a class="btn btn-info" href="mainpanel/banner_pagina/edit/'.$b->id_banner.'"><i class="icon-edit icon-white"></i>  Editar</a> ';
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