<div>
    <ul class="breadcrumb">
        <li><a href="mainpanel/articulos/listar">Lista de articulos</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/articulos/nuevo">Nuevo Artículo</a></li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Nueva Artículo</h2>
            <div class="box-icon">
                <a href="javascript:history.back(-1)" class="btn btn-round" title="VOLVER"><i class="icon-arrow-left"></i></a>                                                
            </div>
        </div>
        <div class="box-content">
           <form name="formulario" class="form-horizontal" action="mainpanel/articulos/grabar" method="post" enctype="multipart/form-data" onsubmit="return valida_seccion()">
                <fieldset>
                    <legend>Ingrese los datos de la nueva Artículo</legend>
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
                            <input type="text" id="nombre" name="nombre" class="span6 typeahead" value="" required onkeyup="url_amigable();">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Url amigable</label>
                        <div class="controls">
                            <input type="text" id="url" name="url" class="span6 typeahead" value="" required>
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
                    <label class="control-label">Foto</label>
                        <div class="controls">
                          <input type="file" name="novedades" id="novedades">
                        </div>
                    </div>

                    <div class="control-group">
                          <label class="control-label" for="fecha">Fecha</label>
                            <div class="controls">
                                <input type="text"  value="<?php echo fecha_hoy_dmY(); ?>" id="fecha" name="fecha"> <span class="etiqueta">*</span>
                            </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Sumilla</label> 
                        <div class="controls">  
                        <textarea  style="width:90% " id="descripcion_corta" name="descripcion_corta"  onfocus="" onKeyUp="cuenta()" rows="3"></textarea>                        

                                <input type="text" name="total" size="5" maxlength="3" disabled> Caracteres
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Contenido</label>
                        <div class="controls">
                                <textarea id="descripcion" name="descripcion" rows="3"></textarea>
                                <script type="text/javascript">
                                    CKEDITOR.replace( 'descripcion',{height:'200px'} );
                                </script>
                        </div>
                    </div>

                   <!--  <div class="control-group">
                        <label class="control-label" for="typeahead">Orden</label>
                        <div class="controls">
                            <input type="text" id="orden" name="orden" value="<?php //echo $ultimo;?>" class="span1 typeahead">
                        </div>
                    </div> -->
                    <!-- <div class="control-group">
                        <label class="control-label">Destacado</label>
                        <div class="controls">
                            <label class="radio">
                                <input type="radio" name="destacado" id="destacado1" value="1" checked="checked">
                                Si
                            </label>
                            <div class="clear:both"></div>
                            <label class="radio">
                                <input type="radio" name="destacado" id="destacado2" value="2">
                                No
                            </label>

                        </div>
                    </div> -->

                    <div class="control-group">
                        <label class="control-label">Estado</label>
                        <div class="controls">
                            <label class="radio">
                                <input type="radio" name="estado" id="esatdo1" value="A" checked="checked">
                                Activo                                
                            </label>
                            <div style="clear:both"></div>
                            <label class="radio">
                                <input type="radio" name="estado" id="estado2" value="I">
                                Inactivo
                            </label>
                        </div>
                    </div>

                    <legend>Parámetros para SEO</legend>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">TITLE</label>
                        <div class="controls">
                            <input type="text" class="span6" id="title" name="title" value="" >
                        </div>
                    </div>
                   

                    <div class="control-group">
                        <label class="control-label" for="typeahead">DESCRIPTION</label>
                        <div class="controls">
                            <input type="text" class="span12" id="description" name="description" value="" >
                        </div>
                    </div>  

                    <div class="form-actions">
                        <input type="submit" class="btn btn-primary" value="GRABAR">
                        <a class="btn btn-danger" href="mainpanel/articulos/listar">VOLVER AL LISTADO</a>

                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
