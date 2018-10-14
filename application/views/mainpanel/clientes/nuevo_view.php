<div>
    <ul class="breadcrumb">
        <!--<li><a href="mainpanel/seccion/clientes">Texto clientes</a> <span class="divider">/</span></li>-->
        <li><a href="mainpanel/clientes/listado">Lista clientes</a> <span class="divider">/</span></li>            
        <li><a href="mainpanel/clientes/nuevo">Nuevo Cliente</a> <span class="divider"></span></li>        
    </ul>
</div>
<div class="row-fluid sortable">
  
    <div class="box span12">
                    <div class="box-header well">
                        <h2><i class="icon-info-sign"></i> Cliente</h2>
                        <div class="box-icon">
                            <a href="javascript:history.back(-1)" class="btn btn-round" title="VOLVER"><i class="icon-arrow-left"></i></a>            
                            <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form class="form-horizontal" action="mainpanel/clientes/grabar" method="post" enctype="multipart/form-data" onsubmit="">
                            <fieldset>
                                <legend>Ingresar nuevo Cliente</legend>
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
                                    <label class="control-label" for="typeahead">Orden</label>
                                    <div class="controls">
                                        <input type="text" class="span1 typeahead" id="orden" name="orden" value="<?php echo $orden; ?>" >
                                    </div>
                                </div>

                                <div class="control-group error">
                                    <div class="controls">                    
                                    <span class="help-inline">La imagen que suba será reducida a 300px de ancho por 180px de alto.</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Subir Imagen *</label>                    
                                    <div class="controls">
                                      <input type="file" name="foto" id="foto" required>
                                    </div>
                                </div><!--control-group--> 

                                <div class="form-actions">
                                    <input type="submit" class="btn btn-primary" value="GRABAR">
                                    &nbsp;&nbsp;
                                    <a class="btn btn-danger" href="mainpanel/clientes/listado">VOLVER AL LISTADO</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>

    </div> 

</div> 