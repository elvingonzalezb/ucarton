<?php echo $banner_pagina; 

?>
<!-- ====================== Blog - Fullwidth With Sidebar ================== -->
  <?php //echo '<pre>';print_r($articulos);echo '</pre>';die; ?>
  <section class="blog_fullwidth container news">
    <div class="row">
      <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 single_blog_fullwidth">
                <?php foreach ($articulos as $value) {  ?>      
            <div class="single_blog_post">
                  <div class="img_holder">
                      <a href="articulos/<?php echo $value["id"]?>-<?php echo $value["url"]?>">
                          <img src="files/articulos/<?php echo $value['imagen']?>" alt="images" class="img-responsive">
                      </a>                
                      <div class="overlay transition3s">
                        <div class="icon_position_table">
                          <div class="icon_container border_round">
                            <a href="articulos/<?php echo $value["id"]?>-<?php echo $value["url"]?>" class="border_round"><i class="fa fa-chain"></i></a>
                          </div>
                        </div>
                      </div>
                  </div> <!-- /img_holder -->
                  <div class="post">
                    <h4><a href="articulos/<?php echo $value["id"]?>-<?php echo $value["url"]?>"><?php echo $value["titulo"]?></a></h4>
                    <ul>
                    <time class="meta-data__date" datetime="2015-05-06T15:00:06+00:00"><?php $fecha = date_create($value["fecha"]); $fecha_articulo = date_format($fecha, "d M Y"); echo strftime($fecha_articulo);?></time>
                      <li><span>Autor :</span> Administrador</li>
                    </ul>
                    <p><?php  echo $value["descripcion_corta"];  ?></p>
                  
                    <a class="more-link" href="articulos/<?php echo $value["id"]?>-<?php echo $value["url"]?>">
                      <span class="btn btn-default btn--post">Leer más</span>
                    </a>
                  </div> <!-- /post -->
            </div> <!-- /single_blog_post -->
                <?php } ?>
          
                <div class="paginacion" style="text-align:center;">
                  <?php echo $paginacion;?>          
                </div>
        <div class="share_item"><!--
          <h5>Did You Like This Post? Share it :</h5>
          <ul>
            <li class="transition3s border_round"><a href="#"><i class="fa fa-facebook border_round"></i></a></li>
            <li class="transition3s border_round"><a href="#"><i class="fa fa-twitter border_round"></i></a></li>
            <li class="transition3s border_round"><a href="#"><i class="fa fa-youtube border_round"></i></a></li>
            <li class="transition3s border_round"><a href="#"><i class="fa fa-linkedin border_round"></i></a></li>
            <li class="transition3s border_round"><a href="#"><i class="fa fa-instagram border_round"></i></a></li>
            <li class="transition3s border_round"><a href="#"><i class="fa fa-vimeo-square border_round"></i></a></li>
          </ul>
        --></div> <!-- /share_item -->
        <div class="leave_reply"></div> <!-- /leave_reply -->
      </div>

<!-- ========================= shop_aside =========================== -->

        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 shop_aside blog_aside">
          
          <!--<h5>Search Keywords</h5>
          <div class="input-group"> <!input-group >
              <input type="text" class="form-control" placeholder="Search Keywords">
              <span class="input-group-btn">
                  <button type="button"><i class="fa fa-search"></i></button>
                </span>
            </div> --><!-- /input-group -->

          

            <div class="product_categories"><!--
              <div class="title_container">
              <h5>Categories</h5>
            </div>
            <ul>
              <li><a href="#" class="transition3s">Lawn Mowers <span>(02)</span></a></li>
              <li><a href="#" class="transition3s">Electric Mowers <span>(08)</span></a></li>
              <li><a href="#" class="transition3s">Gas Mowers <span>(09)</span></a></li>
              <li><a href="#" class="transition3s">Mower Parts & Accessories <span>(20)</span></a></li>
              <li><a href="#" class="transition3s">Reel Mowers <span>(04)</span></a></li>
              <li><a href="#" class="transition3s">Artifical Tree & Plants <span>(23)</span></a></li>
              <li><a href="#" class="transition3s">Riding Mowers <span>(02)</span></a></li>
              <li><a href="#" class="transition3s">Chainsaws & Polesaws <span>(10)</span></a></li>
            </ul>
            --></div> <!-- /product_categories -->

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

          <div class="tags"><!--
            <h5>Tags</h5>
            <ul>
              <li><a href="#" class="transition3s">Lawn</a></li>
              <li><a href="#" class="transition3s">landscape  Design</a></li>
              <li><a href="#" class="transition3s">Driange</a></li>
              <li><a href="#" class="transition3s">Gardening</a></li>
              <li><a href="#" class="transition3s">flowering plants</a></li>
              <li><a href="#" class="transition3s">Carpentry</a></li>
              <li><a href="#" class="transition3s">Limb removal</a></li>
              <li><a href="#" class="transition3s">Artificial Grass</a></li>
            </ul>
          --></div> <!-- /tags -->
        </div> <!-- /shop_aside -->
    </div> <!-- /row -->
  </section> <!-- /blog_fullwidth -->

  <!-- ====================== /Blog - Fullwidth With Sidebar ================== -->

