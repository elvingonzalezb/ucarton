 <?php
  echo $banner_pagina;
?>
<div class="container">
<div class="row">
        <div class="col-lg-12">
          <div class="contenidoSeccion">
            <h1 class="tituloSeccion" id="titulo"><?php echo $texto_web->titulo?></h1>
            <div class="textoSeccion" id="contenido">
              <p class="butt js--triggerAnimation"><?php echo $texto_web->texto?></p>
            </div>
          </div>
        </div>
</div>
<div class="row">
        <div class="listaCuadros animated ">
          <?php  $i=1; foreach ($album as $key => $value) {  
              switch ($i) {
                    case 1:
                    $animacion="Right";
                    break;
                    case 2:
                    $animacion="Down";
                    break;
                    case 3:
                    $animacion="Up";
                    break;
                    case 4:
                    $animacion="Left";
                    break;
                    case 5:
                    $animacion="Left";
                    break;
                    case 6:
                    $animacion="UP";
                    break;
                  
                  default:
                    $animacion="Left";
                    break;
                }
                $i++;
           ?>
              <!-- Card 1 -->
            <div style="padding-bottom:20px;" class="col-lg-3 animated fadeIn<?php echo $animacion; ?>">
              <div class="titCuadro" style="font-size:20px; font-weight: bold; " ><span><?php echo $value["titulo"]?></span></div>
              <div class="cuadroHome" >
                <div class="imgCuadro"><a href="album/<?php echo $value["id"]?>-<?php echo $value["url"]?>"><img  src="files/album/<?php echo $value["imagen"]?>"></a></div>
              </div>

            </div>
          <?php } ?> 
        </div>
        <div class="col-lg-12">
          <nav class=" pagination">
                <?php echo $paginacion;?>
          </nav>
        </div>
</div>
</div>
<div class="relleno"></div>        

