<div>
    <ul class="breadcrumb">
        <li><a href="mainpanel/categorias/listar"><i class="icon-th-large"></i> Categorías </a> <span class="divider">/</span></li>
        <li><a href="mainpanel/categorias/nuevo"><i class="icon-th-large"></i> Nueva Categoría</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/subcategorias/nuevo"><i class="icon-th-large"></i> Nueva Subcategoría</a> <span class="divider">/</span></li>
        <!--<li><a href="mainpanel/productos/listar"><i class="icon-align-justify"></i> Productos</a> <span class="divider">/</span></li>-->
        <li><a href="mainpanel/productos/nuevo"><i class="icon-file"></i> Nuevo Producto</a></li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Editar Categoría</h2>
            <div class="box-icon">
                <a href="javascript:history.back(-1)" class="btn btn-round" title="VOLVER"><i class="icon-arrow-left"></i></a>
            </div>
        </div>
        <div class="box-content">
           <form class="form-horizontal" action="mainpanel/categorias/actualizar" method="post" enctype="multipart/form-data" onsubmit="return valida_seccion()">
 				<fieldset>
					<legend>Ingrese nueva información de la Categoría</legend>
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
                        <label class="control-label">Tiene subcategorias?</label>
                        <div class="controls">
                            <label class="radio">
                            <input type="radio" name="tiene_subcats" value="SI"<?php if($categorias->tiene_subcats=="SI") echo ' checked="checked"'; ?>>
                            SI                           
                            </label>
                            <div style="clear:both"></div>
                            <label class="radio">
                            <input type="radio" name="tiene_subcats" value="NO"<?php if($categorias->tiene_subcats=="NO") echo ' checked="checked"'; ?>>
                            NO
                            </label>
                        </div>
                    </div>


					<div class="control-group">
						<label class="control-label" for="typeahead">Título</label>
						<div class="controls">
							<input type="text" id="nombre" name="nombre" class="span6 typeahead" value="<?php echo $categorias->titulo;?>" required onkeyup="url_amigable();">
						</div>
					</div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Url amigable</label>
                        <div class="controls">
                            <input type="text" id="url" name="url" class="span6 typeahead" value="<?php echo $categorias->url;?>" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Orden</label>
                        <div class="controls">
                            <input type="text" id="orden" name="orden" class="span6 typeahead" value="<?php echo $categorias->orden;?>" required>
                        </div>
                    </div>

					<div class="control-group">
						<label class="control-label" for="typeahead">Imagen</label>
						<div class="controls">
	         				<div class="span6"><img src="files/categorias/<?php echo $categorias->imagen; ?>" width="300"/></div>
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

                    <div class="control-group">
                        <label class="control-label">Estado</label>
                        <div class="controls">
                            <label class="radio">
                            <input type="radio" name="estado" id="estado1" value="A"<?php if($categorias->estado=="A") echo ' checked="checked"'; ?>>
                            Activo                                
                            </label>
                            <div style="clear:both"></div>
                            <label class="radio">
                            <input type="radio" name="estado" id="estado2" value="I"<?php if($categorias->estado=="I") echo ' checked="checked"'; ?>>
                            Inactivo
                            </label>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Categoria destacada?</label>
                        <div class="controls">
                            <label class="radio">
                            <input type="radio" name="destacado" value="SI"<?php if($categorias->destacado=="SI") echo ' checked="checked"'; ?>>
                            SI                           
                            </label>
                            <div style="clear:both"></div>
                            <label class="radio">
                            <input type="radio" name="destacado" value="NO"<?php if($categorias->destacado=="NO") echo ' checked="checked"'; ?>>
                            NO
                            </label>
                        </div>
                    </div>
                     
                    <legend>Parámetros para SEO</legend>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">TITLE</label>
                        <div class="controls">
                            <input type="text" class="span6" id="title" name="title" value="<?php echo $categorias->title;?>" >
                        </div>
                    </div>
                   
                    <div class="control-group">
                        <label class="control-label" for="typeahead">DESCRIPTION</label>
                        <div class="controls">
                            <input type="text" class="span12" id="description" name="description" value="<?php echo $categorias->description;?>" >
                        </div>
                    </div>  

                    <div class="form-actions">
                        <input type="hidden" name="id" id="id" value="<?php echo $categorias->id; ?>">
                        <input type="hidden" name="imgatng" id="imgatng" value="<?php echo $categorias->imagen; ?>">                        
                        <input type="submit" class="btn btn-primary" value="GRABAR">
                        <a class="btn btn-danger" href="mainpanel/categorias/listar">VOLVER AL LISTADO</a>
                    </div>
				</fieldset>
			</form>
		</div>
	</div>
</div>