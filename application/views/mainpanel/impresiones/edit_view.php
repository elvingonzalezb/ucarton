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
            <h2><i class="icon-edit"></i> Editar Producto</h2>
            <div class="box-icon">
                <a href="javascript:history.back(-1)" class="btn btn-round" title="VOLVER"><i class="icon-arrow-left"></i></a>
            </div>
        </div>

        <div class="box-content">
            <form class="form-horizontal" action="mainpanel/impresiones/actualizar" method="post" 
                  enctype="multipart/form-data">
                <fieldset>
                    <legend>Modifique los datos deseados</legend>
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
                                    if( $value['id'] == $categoria )
                                    {
                                        echo '<option value="'.$value['id'].'" selected>'.$value['titulo'].'</option>';
                                    }
                                    else
                                    {
                                        echo '<option value="'.$value['id'].'">'.$value['titulo'].'</option>';
                                    }
                                }
                            ?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead" value="">Subcategoria</label>
                        <div class="controls" id="subcategorias">
                        <?php
                            if($subcategoria==0)
                            {
                                echo '<select name="subcategoria" id="subcategoria">';
                                echo '<option value="0">---------------</option>';
                                echo '</select>';
                            }
                            else
                            {
                                echo '<select name="subcategoria" id="subcategoria">';
                                foreach ($subcategorias as $key => $value) 
                                {
                                    if( $value['id'] == $subcategoria )
                                    {
                                        echo '<option value="'.$value['id'].'" selected>'.$value['titulo'].'</option>';
                                    }
                                    else
                                    {
                                        echo '<option value="'.$value['id'].'">'.$value['titulo'].'</option>';
                                    }
                                }
                                echo '</select>';
                            }
                        ?>
                        </div>
                    </div>                      
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Titulo</label>
                        <div class="controls">
                            <input type="text" id="nombre" name="nombre" class="span6 typeahead" value="<?php echo $foto->titulo;?>" required onkeyup="url_amigable();">

                        </div>

                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Url amigable</label>
                        <div class="controls">
                            <input type="text" id="url" name="url" class="span6 typeahead" value="<?php echo $foto->url;?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Foto Actual</label>                    
                        <div class="controls">
                            <?php
                            if(is_file('./files/impresiones/'.$foto->imagen))
                            {
                                $img = getimagesize('./files/impresiones/'.$foto->imagen);
                                $ancho = (int)($img[0]/3);
                                $alto = (int)($img[1]/3);                                       
                                $pic = '<img src="./files/impresiones/'.$foto->imagen.'" width="'.$ancho.'" height="'.$alto.'" border="0"/>';
                            }else{
                                $img = getimagesize('./data/zoom/full2.jpg');
                                $ancho = (int)($img[0]/3);
                                $alto = (int)($img[1]/3);                                       
                                $pic = '<img src="./data/zoom/full2.jpg" width="'.$ancho.'" height="'.$alto.'" border="0"/>';
                            }
                            echo $pic;                                      
                            ?>
                        </div>
                    </div><!--control-group-->                                 
                    <div class="control-group">
                        <div class="controls">
                            <div class="alert alert-info ">
                            <p>Suba una foto de 443px de ancho por 400px de alto. Si sube una foto de otras dimensiones se forzará a las medidas indicadas.</p>
                            </div> 
                        </div>
                    </div>                                  
                    <div class="control-group">
                        <label class="control-label">Nueva Foto</label>                    
                        <div class="controls">
                          <input type="file" name="foto">
                        </div>
                    </div><!--control-group-->
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Descripción</label>
                        <div class="controls">
                                <textarea id="descripcion" name="descripcion" rows="3"><?php echo $foto->descripcion;?></textarea>
                                <script type="text/javascript">
                                    CKEDITOR.replace( 'descripcion',{height:'200px'} );
                                </script>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Orden</label>
                        <div class="controls">
                           <input type="text" class="span1" id="orden" name="orden" value="<?php echo $foto->orden;?>">
                        </div>
                    </div>
                    <legend>Parámetros para SEO</legend>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">TITLE</label>
                        <div class="controls">
                            <input type="text" class="span6" id="title" name="title" value="<?php echo $foto->title;?>" >
                        </div>
                    </div>
               
                    <div class="control-group">
                        <label class="control-label" for="typeahead">DESCRIPTION</label>
                        <div class="controls">
                            <input type="text" class="span12" id="description" name="description" value="<?php echo $foto->description;?>" >
                        </div>
                    </div>                                                               
                    <div class="form-actions">
                        <input type="hidden" name="id_foto" id="id_foto" value="<?php echo $foto->id_foto; ?>">
                        <input type="hidden" name="imgatng" id="imgatng" value="<?php echo $foto->imagen; ?>">
                        <input type="submit" class="btn btn-primary" value="GRABAR">
                        <span id="carga"></span>
                        <a class="btn btn-danger" href="mainpanel/impresiones/listado/<?=$foto->id?>">VOLVER AL LISTADO</a>
                    </div>
                </fieldset>
            </form>   
        </div>
    </div><!--/span-->
</div><!--/row-->