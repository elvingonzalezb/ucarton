<div>
    <ul class="breadcrumb">
        <li><a href="mainpanel/impresiones/texto-grafica"><i class="icon-th-large"></i> Texto Gráfica Jesús</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/impresiones/texto-galeria"><i class="icon-th-large"></i> Texto Galeria Gráfica Jesús</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/impresiones/texto-cotizacion"><i class="icon-th-large"></i> Texto Cotizaciones Gráfica Jesús</a> </li>
    </ul>
</div>

<div>
    <ul class="breadcrumb">
        <li><a href="mainpanel/categorias_impresion/listar"><i class="icon-th-large"></i> Categorías </a> <span class="divider">/</span></li>
        <li><a href="mainpanel/categorias_impresion/nuevo"><i class="icon-th-large"></i> Nueva Categoría</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/subcategorias_impresion/nuevo"><i class="icon-th-large"></i> Nueva Subcategoría</a> <span class="divider">/</span></li>     
        <!--<li><a href="mainpanel/impresiones/listar"><i class="icon-align-justify"></i> Trabajos de Impresión</a> <span class="divider">/</span></li>-->
        <li><a href="mainpanel/impresiones/nuevo"><i class="icon-file"></i> Nuevo Trabajo de Impresión</a></li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Nuevo Trabajo de Impresión</h2>
            <div class="box-icon">
                <a href="javascript:history.back(-1)" class="btn btn-round" title="VOLVER"><i class="icon-arrow-left"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="mainpanel/impresiones/grabar" method="post" enctype="multipart/form-data" 
                  onsubmit="">
                <fieldset>
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
                        <label class="control-label" for="typeahead">Categoría *</label>
                        <div class="controls">
                            <select name="categoria" id="categoria" onchange="cargaSubcategoriasImpresion(this.value)">
                            <option value="0">Elija una categoría...</option>
                            <?php
                                foreach ($categorias as $key => $value) 
                                {
                                    echo '<option value="'.$value['id'].'">'.$value['titulo'].'</option>';
                                }
                            ?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead" value="">Subcategoria</label>
                        <div class="controls" id="subcategorias">
                            <select name="subcategoria" id="subcategoria">
                                <option value="0">---------------</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead" value="">Titulo</label>
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
                        <label class="control-label">Foto</label>                    
                        <div class="controls">
                          <input type="file" name="foto" id="foto" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <div class="alert alert-info ">
                            <p>Suba una foto de 443px de ancho por 400px de alto. Si sube una foto de otras dimensiones se forzará a las medidas indicadas.</p>
                            </div> 
                        </div>
                    </div>  
                  
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Descripción</label>
                        <div class="controls">
                                <textarea id="descripcion" name="descripcion" rows="3"></textarea>
                                <script type="text/javascript">
                                    CKEDITOR.replace( 'descripcion',{height:'200px'} );
                                </script>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Orden</label>
                        <div class="controls">
                           <input type="text" id="orden" name="orden" value="" class="span1">
                        </div>
                    </div>

                    <div class="control-group">
                    <legend>Parámetros para SEO</legend>
                        
                    </div>
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
                        <span id="carga"></span>
                        <!--<a class="btn btn-danger" href="mainpanel/impresiones/listado/<?=$id?>">VOLVER AL LISTADO</a>-->
                    </div>
                </fieldset>
            </form>   
        </div>
    </div><!--/span-->
</div><!--/row-->