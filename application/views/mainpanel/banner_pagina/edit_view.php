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
            <h2><i class="icon-edit"></i> Editar Banner Pagina</h2>
            <div class="box-icon">
                <a href="javascript:history.back(-1)" class="btn btn-round" title="VOLVER"><i class="icon-arrow-left"></i></a>                                                                
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="mainpanel/banner_pagina/actualizar" method="post" enctype="multipart/form-data">
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
                        <label class="control-label" for="typeahead">Imagen</label>
                        <div class="controls">
                            <div class="span6"><img src="files/banner_pagina/<?php echo $banner->imagen; ?>" width="300"/></div>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <div class="alert alert-block ">
                            <p>La imagen a subir debe tener 1920px de ancho y 300px de alto. Caso contrario la imagen se forzará al tamaño indicado.</p>
                            </div> 
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Nuevo Banner</label>
                        <div class="controls">
                            <input type="file" name="banner" id="banner">
                        </div>
                    </div>
                    <div class="form-actions">
                        <input type="hidden" name="id" id="id" value="<?php echo $banner->id_banner; ?>">
                        <input type="hidden" name="imgatng" id="imgatng" value="<?php echo $banner->imagen; ?>">                        
                        <input type="submit" class="btn btn-primary" value="GRABAR">
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->