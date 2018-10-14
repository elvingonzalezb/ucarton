<?php
	echo $banner_pagina;
?>
    <!-- MAIN TITLE -->
    <div class="main-title">
      <div class="container">
        <h1 class="main-title__primary negrita"><?php echo $title?></h1>
      </div>
    </div><!-- /.main-title -->

  

    <div class="container">
      
      <div class="row margin-bottom-30">
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
          
          <article class="clearfix hentry">
            
              <img alt="placeholder" class="img-responsive" src="files/servicios/<?php echo $servicios["imagen"]?>">
            
            
            <h2 class="hentry__title"><?php echo $servicios["nombre_servicio"]?></h2>
            <div class="hentry__content">
                <?php
                  echo $servicios["sumilla"];
                ?>
            </div>
            
          </article>
        </div><!-- /.col -->
        
       
        
      </div><!-- /.row -->
      
    </div><!-- /.container -->