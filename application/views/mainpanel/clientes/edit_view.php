<div class="box-content">
    <form class="form-horizontal" action="mainpanel/clientes/actualizar" method="post" enctype="multipart/form-data" onsubmit="return valida_cliente()">
        <fieldset>
            <legend>Edición de Cliente</legend>
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
                <label class="control-label" for="typeahead">Nombres</label>
                <div class="controls">
                    <input type="text" class="span6 typeahead" id="nombres" name="nombres" value="<?php echo $cliente->nombres ?>" >
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="typeahead">Apellidos</label>
                <div class="controls">
                    <input type="text" class="span6 typeahead" id="apellidos" name="apellidos" value="<?php echo $cliente->apellidos ?>" >
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="typeahead">Razon Social</label>
                <div class="controls">
                    <input type="text" class="span6 typeahead" id="razon_social" name="razon_social" value="<?php echo $cliente->razon_social; ?>" >
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="typeahead">Telefono</label>
                <div class="controls">
                    <input type="text" class="span4 typeahead" id="telefono" name="telefono" value="<?php echo $cliente->telefono; ?>" >
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="typeahead">Email</label>
                <div class="controls">
                    <input type="text" class="span6 typeahead" id="email" name="email" value="<?php echo $cliente->email; ?>" >
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="typeahead">Clave</label>
                <div class="controls">
                    <input type="text" class="span1 typeahead" id="clave" name="clave" value="<?php echo $cliente->clave; ?>" >
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Tipo</label>
                <div class="controls">
                    <label class="radio">
                        <input type="radio" name="tipo" id="tipo1" value="empresa"<?php if($cliente->tipo=="empresa") echo ' checked="checked"'; ?>>
                        Empresa
                    </label>
                    <div style="clear:both"></div>
                    <label class="radio">
                        <input type="radio" name="tipo" id="tipo2" value="distribuidor"<?php if($cliente->tipo=="distribuidor") echo ' checked="checked"'; ?>>
                        Distribuidor
                    </label>
                </div>
            </div> 
            <div class="control-group">
                <label class="control-label">Estado</label>
                <div class="controls">
                    <label class="radio">
                        <input type="radio" name="estado" id="estado1" value="Activo"<?php if($cliente->estado=="Activo") echo ' checked="checked"'; ?>>
                        Activo
                    </label>
                    <div style="clear:both"></div>
                    <label class="radio">
                        <input type="radio" name="estado" id="estado2" value="Inactivo"<?php if($cliente->estado=="Inactivo") echo ' checked="checked"'; ?>>
                        Inactivo
                    </label>
                </div>
            </div> 
            <div class="form-actions">
                <input type="hidden" name="id" id="id" value="<?php echo $cliente->id; ?>">
                <input type="submit" class="btn btn-primary" value="ACTUALIZAR">
            </div>
        </fieldset>
    </form>
</div>