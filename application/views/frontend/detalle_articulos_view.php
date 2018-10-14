<?php echo $banner_pagina; ?>
<!-- ====================== Blog - Fullwidth With Sidebar ================== -->

  <section class="blog_fullwidth container news">
    <div class="row">
      <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 single_blog_fullwidth">
            <div class="single_blog_post">
                  <div class="img_holder">
                      
                          <img src="files/articulos/<?php echo $articulos['imagen']?>" alt="images" class="img-responsive">
                     
                  </div> <!-- /img_holder -->
                  <div class="post">
                    <h4><?php echo $articulos["titulo"]?></h4>
                    <ul>
                    <time class="meta-data__date" datetime="2015-05-06T15:00:06+00:00"><?php setlocale (LC_TIME, "es_ES"); $fecha = date_create($articulos["fecha"]); $fecha_articulo = date_format($fecha, "d M Y"); echo strftime($fecha_articulo);?></time>
                      <li><span>Autor :</span> Administrador</li>
                    </ul>
                    <p><?php  echo $articulos["descripcion"];  ?></p>
                  </div> <!-- /post -->
            </div> <!-- /single_blog_post -->
      </div>

<!-- ========================= shop_aside =========================== -->

        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 shop_aside blog_aside">
            <div class="news_tips_aside">
            <h5>Artículos Recientes</h5>
            <?php foreach($recent as $value) { ?>

              <div class="popular_news_single">
                <div class="img_holder "> <img src="files/articulos/<?php echo $value['imagen'] ;?>" alt="images"></div>
                <div class="text">
                  <a href="articulos/<?php echo $value["id"]?>-<?php echo $value["url"]?>"><h6><?php echo $value['titulo'] ;?></h6></a>
                  <span>
                      <time class="meta-data__date" datetime="2015-05-06T15:00:06+00:00"><?php setlocale (LC_TIME, "es_ES"); $fecha = date_create($value["fecha"]); $fecha_articulo = date_format($fecha, "d M Y"); echo strftime($fecha_articulo);?></time>
                  </span>
                </div>
              </div> <!-- /popular_news_single -->
            <?php } ?>          
        </div> <!-- /shop_aside -->
    </div> <!-- /row -->
  </section> <!-- /blog_fullwidth -->

  <!-- ====================== /Blog - Fullwidth With Sidebar ================== -->    
  