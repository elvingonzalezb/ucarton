<div>
    <ul class="breadcrumb">
        <li><a href="mainpanel/album/listar">Lista de Álbums</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/album/nuevo">Nuevo Álbum</a></li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Editar Álbum de Fotos</h2>
            <div class="box-icon">
                <a href="javascript:history.back(-1)" class="btn btn-round" title="VOLVER"><i class="icon-arrow-left"></i></a>                                                
            </div>
        </div>
        <div class="box-content">
           <form class="form-horizontal" action="mainpanel/album/actualizar" method="post" enctype="multipart/form-data" onsubmit="return valida_seccion()">
 				<fieldset>
					<legend>Ingrese nueva información del Álbum</legend>
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

					<div class="control-group">
						<label class="control-label" for="typeahead">Título</label>
						<div class="controls">
							<input type="text" id="nombre" name="nombre" class="span6 typeahead" value="<?php echo $album->titulo;?>" required onkeyup="url_amigable();">
						</div>
					</div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Url amigable</label>
                        <div class="controls">
                            <input type="text" id="url" name="url" class="span6 typeahead" value="<?php echo $album->url;?>" required>
                        </div>
                    </div>

					<div class="control-group">
						<label class="control-label" for="typeahead">Imagen</label>
						<div class="controls">
	         				<div class="span6"><img src="files/album/<?php echo $album->imagen; ?>" width="300"/></div>
                 		</div>
					</div>


					<div class="control-group">
						<div class="controls">
							<div class="alert alert-danger">
								<p>La imagen a subir debe de tener 900px de ancho y 600px de alto. Caso contrario la imagen se transformara la tamaño indicado</p>
							</div>
						</div>
					</div>
                    <div class="control-group">
                    <label class="control-label">Imagen</label>
                        <div class="controls">
                          <input type="file" name="imgnovedad" id="imgnovedad">
                        </div>
                    </div>

                     

                    <legend>Parámetros para SEO</legend>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">TITLE</label>
                        <div class="controls">
                            <input type="text" class="span6" id="title" name="title" value="<?php echo $album->title;?>" >
                        </div>
                    </div>
                   

                    <div class="control-group">
                        <label class="control-label" for="typeahead">DESCRIPTION</label>
                        <div class="controls">
                            <input type="text" class="span12" id="description" name="description" value="<?php echo $album->description;?>" >
                        </div>
                    </div>  

                    <div class="form-actions">
                        <input type="hidden" name="id" id="id" value="<?php echo $album->id; ?>">
                        <input type="hidden" name="imgatng" id="imgatng" value="<?php echo $album->imagen; ?>">                        
                        <input type="submit" class="btn btn-primary" value="GRABAR">
                        <a class="btn btn-danger" href="mainpanel/album/listar">VOLVER AL LISTADO</a>
                    </div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
