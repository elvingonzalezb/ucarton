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
            <h2><i class="icon-edit"></i> Nueva Categoría</h2>
            <div class="box-icon">
                <a href="javascript:history.back(-1)" class="btn btn-round" title="VOLVER"><i class="icon-arrow-left"></i></a>
            </div>
        </div>

        <div class="box-content">
           <form class="form-horizontal" action="mainpanel/categorias_impresion/grabar" method="post" enctype="multipart/form-data" onsubmit="return valida_seccion()">
                <fieldset>
                    <legend>Ingrese los datos de la nueva Categor&iacute;a</legend>
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
                            <input type="radio" name="tiene_subcats" value="SI">
                            SI                           
                            </label>
                            <div style="clear:both"></div>
                            <label class="radio">
                            <input type="radio" name="tiene_subcats" value="NO" checked="checked">
                            NO
                            </label>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Título</label>
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
                        <label class="control-label" for="typeahead">Orden</label>
                        <div class="controls">
                            <input type="text" id="orden" name="orden" class="span6 typeahead" value="" required>
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
                    <label class="control-label">Foto</label>
                        <div class="controls">
                          <input type="file" name="novedades" id="novedades" required>
                        </div>
                    </div>
                   
                    <div class="control-group">
                        <label class="control-label">Destacado</label>
                        <div class="controls">
                            <label class="radio">
                                <input type="radio" name="destacado" id="destacado1" value="SI">
                                Si
                            </label>
                            <div class="clear:both"></div>
                            <label class="radio">
                                <input type="radio" name="destacado" id="destacado2" value="NO" checked="checked">
                                No
                            </label>
                        </div>
                    </div>

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
                        <a class="btn btn-danger" href="mainpanel/categorias_impresion/listar">VOLVER AL LISTADO</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>