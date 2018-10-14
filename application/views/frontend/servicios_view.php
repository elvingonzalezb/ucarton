

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
    <div class="col-xs-12 col-md-3">
          
          <div class="sidebar">

            <div class="widget_recent_entries">
              <h4 class="hentry__title negrita">Nuevos Servicios</h4>
              <ul>
                <?php
                  foreach ($recent as $value) {
                ?>
                  <li style="padding-bottom:7px;">
                    <a href="servicios/<?php echo $value["id_servicio"]?>-<?php echo $value["url"]?>"><?php echo $value["nombre_servicio"]?></a>
                  </li>
                <?php
                  }
                ?>
              </ul>
            </div>
          </div>          
      </div><!-- /.col -->
      <div class="col-xs-12 col-md-9">
          <?php $i=1; foreach ($servicios as $key => $value) {  

              $num=80;
              $text=$value["sumilla"];
              if(strlen($text)>$num){
                $text=substr($text,0,$num)."...";
              }else{
              $text=$text;
              }

                
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
                $text = str_replace("<div>", " ", $text);
                $text = str_replace("<p>", " ", $text);
                $text = str_replace("<br />", " ", $text);

            ?>
              <!-- Card 1 -->
          <div class=" col-lg-4 animated fadeIn<?php echo $animacion; ?>">
              <div class="titCuadro "> <span><div style="width:200px;" class="continua"><?php echo $value["nombre_servicio"]?></div></span></div>
              <div class="cuadroHome ">
                <div class="imgCuadro "><img src="files/servicios/<?php echo $value["imagen"]?>"></div>
                <div class="resumen"><br /><?php echo $text?></div>
                <div class="linkArticulo pequeno"><a href="servicios/<?php echo $value["id_servicio"]?>-<?php echo $value["url"]?>">Ver más...</a></div>
              </div>
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