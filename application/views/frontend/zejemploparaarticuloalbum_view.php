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
          <?php foreach ($album as $key => $value) {  ?>
              <!-- Card 1 -->
            <div class="col-xs-6 col-lg-3">
              <div class="titCuadro"><span><?php echo $value["titulo"]?></span></div>
              <div class="cuadroHome">
                <div class="imgCuadro">
                <a href="album/<?php echo $value["id"]?>-<?php echo $value["url"]?>"><img src="files/album/<?php echo $value["imagen"]?>"></a>
                </div>
              </div>
            </div>
          <?php } ?>  
    </div>
    
  </div>
</div>
         