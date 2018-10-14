 <?php
  echo $banner_pagina;
?>
<div class="container">
<div class="row">
  <div class="col-lg-12">
          <div class="contenidoSeccion">
            <h1 class="tituloSeccion" id="titulo"><?php echo $texto_web->titulo?></h1>
            <div class="textoSeccion" id="contenido">
              <p><?php echo $texto_web->texto?></p>
            </div>
          </div>
        </div>
</div>
  <div class="row">
    <div class="listaCuadros">
      <!-- articulo -->
      <?php foreach($articulos as $key => $value) { ?>
          <div class="col-lg-3">
            <div class="articulo">
              <div class="picNoticia"><img src="files/articulos/<?php echo $value["imagen"]?>"></div>
              <div class="titNoticia"><span><?php echo $value["titulo"]; ?></span></div>
              <div class="sumillaArticulo">
                    <?php echo $value["descripcion_corta"]; ?>
              </div>
              <div class="linkArticulo"><a href="articulos/<?php echo $value["id"]?>-<?php echo $value["url"]?>">Ver más...</a></div>
            </div>
          </div>
      <?php } ?><!-- articulo -->  
    </div>
    <?php echo $paginacion; ?>
  </div>
</div>



         