<div>
    <ul class="breadcrumb">
        <li><a href="mainpanel/articulos/listar">Lista de articulos</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/articulos/nuevo">Nuevo Artículo</a></li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Editar Artículo</h2>
            <div class="box-icon">
                <a href="javascript:history.back(-1)" class="btn btn-round" title="VOLVER"><i class="icon-arrow-left"></i></a>                                                
            </div>
        </div>
        <div class="box-content">
           <form name="formulario" class="form-horizontal" action="mainpanel/articulos/actualizar" method="post" enctype="multipart/form-data" onsubmit="return valida_seccion()">
 				<fieldset>
					<legend>Ingrese nueva información al artículo</legend>
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
						<label class="control-label" for="typeahead">Titulo</label>
						<div class="controls">
							<input type="text" id="nombre" name="nombre" class="span6 typeahead" value="<?php echo $articulos->titulo;?>" required onkeyup="url_amigable();">
						</div>
					</div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Url amigable</label>
                        <div class="controls">
                            <input type="text" id="url" name="url" class="span6 typeahead" value="<?php echo $articulos->url;?>" required>
                        </div>
                    </div>

					<div class="control-group">
						<label class="control-label" for="typeahead">Imagen</label>
						<div class="controls">
	         				<div class="span6"><img src="files/articulos/<?php echo $articulos->imagen; ?>" width="300"/></div>
                 		</div>
					</div>


					<div class="control-group">
						<div class="controls">
							<div class="alert alert-danger">
								<p>La imagen a subir debe de tener 870px de ancho y 520px de alto. Caso contrario la imagen se transformara la tamaño indicado</p>
							</div>
						</div>
					</div>
                    <div class="control-group">
                    <label class="control-label">imagen</label>
                        <div class="controls">
                          <input type="file" name="imgnovedad" id="imgnovedad">
                        </div>
                    </div>

                     <div class="control-group">
                                    <label class="control-label" for="fecha">Fecha</label>
                                    <div class="controls">
                                        <input type="text"  value="<?php echo Ymd_2_dmY($articulos->fecha); ?>" id="fecha" name="fecha"> <span class="etiqueta">*</span>
                                    </div>
                     </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Sumilla</label>                        

                        <div class="controls">  
                        <textarea  style="width:90% " id="descripcion_corta" name="descripcion_corta"  onfocus="" onKeyUp="cuenta()" rows="3"><?php echo $articulos->descripcion_corta;?></textarea>                        

                                <input type="text" name="total" size="5" maxlength="3" disabled> Caracteres
                        </div>
                    </div>


                    <div class="control-group">
                    	<label class="control-label" for="typeahead">Descripción</label>
                    	<div class="controls">
                                <textarea id="descripcion" name="descripcion" rows="3"><?php echo $articulos->descripcion;?></textarea>
                                <script type="text/javascript">
                                    CKEDITOR.replace( 'descripcion',{height:'200px'} );
                                </script>
                    	</div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Orden</label>
                        <div class="controls">
                            <input type="text" id="orden" name="orden" value="<?php echo $articulos->orden;?>" class="span1 typeahead">
                        </div>
                    </div>

                    <!-- <div class="control-group">
                        <label class="control-label">Destacado</label>
                        <div class="controls">
                            <label class="radio">
                                <input type="radio" name="destacado" id="destacado1" value="1"<?php// if($articulos->destacado=="1") echo 'checked="checked"'; ?>>
                                Si
                            </label>
                            <div class="clear:both"></div>
                            <label class="radio">
                                <input type="radio" name="destacado" id="destacado2" value="0"<?php //if($articulos->destacado=="0") echo 'checked="checked"'; ?>>
                                No
                            </label>

                        </div>
                    </div> -->


                    <div class="control-group">
                        <label class="control-label">Estado</label>
                        <div class="controls">
                            <label class="radio">
                            <input type="radio" name="estado" id="estado1" value="A"<?php if($articulos->estado=="A") echo ' checked="checked"'; ?>>
                            Activo                                
                            </label>
                            <div style="clear:both"></div>
                            <label class="radio">
                            <input type="radio" name="estado" id="estado2" value="I"<?php if($articulos->estado=="I") echo ' checked="checked"'; ?>>
                            Inactivo
                            </label>
                        </div>
                    </div>

                    <legend>Parámetros para SEO</legend>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">TITLE</label>
                        <div class="controls">
                            <input type="text" class="span6" id="title" name="title" value="<?php echo $articulos->title;?>" >
                        </div>
                    </div>
                   

                    <div class="control-group">
                        <label class="control-label" for="typeahead">DESCRIPTION</label>
                        <div class="controls">
                            <input type="text" class="span12" id="description" name="description" value="<?php echo $articulos->description;?>" >
                        </div>
                    </div> 
                     

                    <div class="form-actions">
                        <input type="hidden" name="id" id="id" value="<?php echo $articulos->id; ?>">
                        <input type="hidden" name="imgatng" id="imgatng" value="<?php echo $articulos->imagen; ?>">                        
                        <input type="submit" class="btn btn-primary" value="GRABAR">
                        <a class="btn btn-danger" href="mainpanel/articulos/listar">VOLVER AL LISTADO</a>
                    </div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
