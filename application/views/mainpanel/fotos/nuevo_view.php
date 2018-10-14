<div>
    <ul class="breadcrumb">
        <li><a href="mainpanel/fotos/listado/1">Lista de Fotos</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/fotos/nuevo/1">Nueva Foto</a></li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Nueva Foto</h2>
            <div class="box-icon">
                <a href="javascript:history.back(-1)" class="btn btn-round" title="VOLVER"><i class="icon-arrow-left"></i></a>                                                
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="mainpanel/fotos/grabar" method="post" enctype="multipart/form-data" 
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
                    </div>

                    <div class="control-group">
                        <label class="control-label">Foto</label>                    
                        <div class="controls">
                          <input type="file" name="foto" id="foto" required="required">
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <div class="alert alert-info ">
                            <p>Suba una foto de 900px de ancho por 600px de alto. Si sube una foto de otras dimensiones se forzará a las medidas 
                            indicadas.</p>
                            </div> 
                        </div>
                    </div>  

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Orden</label>
                        <div class="controls">
                           <input type="text" id="orden" name="orden" value="<?=$orden?>" class="span1">
                        </div>
                    </div>  
                
                    <div class="form-actions">
                        <input type="hidden" name="id" id="id" value="<?=$id?>">
                        <input type="submit" class="btn btn-primary" value="GRABAR">
                        <span id="carga"></span>
                        <a class="btn btn-danger" href="mainpanel/fotos/listado/<?=$id?>">VOLVER AL LISTADO</a>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->