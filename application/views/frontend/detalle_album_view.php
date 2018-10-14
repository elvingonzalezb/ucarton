<?php
    echo $banner_pagina
?>
        <!-- ========== TITLE START ========== -->
<div class="main-title">
      <div class="container">
        <h1 class="main-title__primary negrita"><?php echo $title?></h1>
      </div>
</div><!-- /.main-title -->

<div class="container">
    <div class="row">
        <div class="listaCuadros" data-featherlight-gallery="" data-featherlight-filter="a">
          <?php  $i=1; foreach ($fotos as $key => $value) {  
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
            <div class="col-lg-3 animated fadeIn<?php echo $animacion; ?>">              
              <div class="">
                <div class="imgCuadro">
                    <a href="files/fotos/<?php echo $value["imagen"]?>" class="portfolio__gallery-link" data-featherlight="image">
                    <img class="wp-post-image" sizes="(min-width: 781px) 360px, calc(100vw - 30px)" srcset="files/fotos/<?php echo $value["imagen"]?>">
                    </a>
                </div>
              </div>

            </div>
          <?php } ?> 
        </div>
    </div>


                               
      
</div><!-- /.container -->