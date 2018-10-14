

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
</div>
 
  
  <div class="clientes">
    <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-12">
              <?php $i=1; foreach ($clientes as $key => $value) { 
                     switch ($i) {
                    case 1:
                    $animacion="Left";
                    break;
                    case 2:
                    $animacion="Down";
                    break;
                    case 3:
                    $animacion="Right";
                    break;
                    case 4:
                    $animacion="Left";
                    break;
                    case 5:
                    $animacion="Up";
                    break;
                    case 6:
                    $animacion="Right";
                    break;
                  
                  default:
                    $animacion="Left";
                    break;
                }
                $i++;
                ?>      
              <div class="col-xs-6 col-lg-4 animated fadeIn<?php echo $animacion; ?>">
                <div class="logoCliente"><img src="files/clientes/<?php echo $value["imagen"]?>"></div>
              </div>
              <?php } ?> 
              <div class="col-lg-12">
                  <nav class=" pagination">
                        <?php echo $paginacion;?>
                  </nav>
              </div>
          </div>
        </div>

    </div>
  </div>  
<div class="relleno"></div>