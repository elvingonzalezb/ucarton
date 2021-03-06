<div>
    <ul class="breadcrumb">
        <li><a href="mainpanel/banners"><i class="icon-picture icon-white"></i> Banners del Home</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/banners/nuevo"><i class="icon-picture icon-white"></i> Nuevo Banner del Home</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/banner_pagina"><i class="icon-picture icon-white"></i> Banners de Secciones</a> <span class="divider">/</span></li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Editar Banner</h2>
            <div class="box-icon">
                <a href="javascript:history.back(-1)" class="btn btn-round" title="VOLVER"><i class="icon-arrow-left"></i></a>                                                                
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="mainpanel/banners/actualizar" method="post" enctype="multipart/form-data">
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
                        <label class="control-label" for="typeahead">Titulo</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="banner_titulo" name="banner_titulo" value="<?php echo $banner->banner_titulo; ?>">
                        </div>
                    </div>       
                              
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Breve Sumilla</label>
                        <div class="controls">
                            <textarea id="banner_sumilla" name="banner_sumilla" rows="3"><?php echo $banner->banner_sumilla;?></textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('banner_sumilla', {width:'850' ,height:'50px'});
                            </script>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Orden</label>
                        <div class="controls">
                            <input type="text" class="span1 typeahead" id="banner_orden" name="banner_orden" value="<?php echo $banner->banner_orden; ?>" required="">
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Enlace</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="banner_enlace" name="banner_enlace" value="<?php echo $banner->banner_enlace; ?>">
                        </div>
                    </div>

                  <!--  <div class="control-group">
                        <label class="control-label" for="typeahead">Texto enlace</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="banner_texto_enlace" name="banner_texto_enlace" value="<?php // echo $banner->banner_texto_enlace; ?>">
                        </div>
                    </div>-->

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Imagen</label>
                        <div class="controls">
                            <div class="span6"><img src="files/banners/<?php echo $banner->banner_imagen; ?>" width="300"/></div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Estado</label>
                        <div class="controls">
                            <label class="radio">
                                <input type="radio" name="banner_estado" id="estado1" value="A"<?php if($banner->banner_estado=="A") echo ' checked="checked"'; ?>>
                                Activo
                            </label>
                            <div style="clear:both"></div>
                            <label class="radio">
                                <input type="radio" name="banner_estado" id="estado2" value="I"<?php if($banner->banner_estado=="I") echo ' checked="checked"'; ?>>
                                Inactivo
                            </label>
                        </div>
                    </div>  
                    <div class="control-group">
                        <div class="controls">
                            <div class="alert alert-block ">
                            <p>La imagen a subir debe tener 1920px de ancho y 600px de alto. Caso contrario la imagen se forzará al tamaño indicado.</p>
                            </div> 
                        </div>
                    </div>                    
                    <div class="control-group">
                        <label class="control-label">Nuevo Banner</label>
                        <div class="controls">
                            <input type="file" name="banner_imagen" id="banner_imagen">
                        </div>
                    </div>
                    <div class="form-actions">
                        <input type="hidden" name="banner_id" id="banner_id" value="<?php echo $banner->banner_id; ?>">
                        <input type="hidden" name="banner_imagen_now" id="banner_imagen_now" value="<?php echo $banner->banner_imagen; ?>">                        
                        <input type="submit" class="btn btn-primary" value="GRABAR">
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->