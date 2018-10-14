    <!-- Footer -->
    <footer class="tm-footer">
        <div class="container">
            <div class="row">
                <!-- <div class="footer-logo">
                    <img alt="logo" src="<?//=base_url('assets/frontend/images/logo-footer.png')?>">
                    <p class="logo-caption"><?php //echo getConfig("texto_footer")?></p>
                </div> -->
                <div class="col-sm-4">
                    <div class="footer-widget opening-hours">
                        <h4 class="footer-heading">HORARIO DE ATENCIÓN</h4>
                        <ul>
                            <li><span class="pull-left">Lunes - Viernes</span> <span class="pull-right"><?php echo getConfig('horario_semana')?></span></li>
                            <li><span class="pull-left">Sabados</span> <span class="pull-right"><?php echo getConfig('horario_sabado')?></span></li>
                        </ul>
                        <p><?php echo getConfig('texto_horario')?></p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="footer-widget latest-news">
                        <h4 class="footer-heading">ENLACES DIRECTOS</h4>
                        <ul class="link-menu">
                            <li><a href="./">Inicio</a></li>                                
                            <li><a href="empresa">Nosotros</a></li>
                            <li><a href="productos">Productos</a></li>
                            <li><a href="articulos">Artículos</a></li>
                            <li><a href="contacto">contáctenos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="footer-widget latest-news">
                        <h4 class="footer-heading">CATEGORIAS</h4>
                        <ul class="link-menu">
                            <?php $menu_categorias = getCategorias()?>
                            <?php foreach ($menu_categorias as $mc_key => $mc_value): ?>
                            <li><a href="<?=$mc_value['url']?>"><?=$mc_value['titulo']?></a></li>   
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-sm-3">
                    <div class="footer-widget twitter-feeds">
                        <h4 class="footer-heading">SERVICIOS</h4>
                        <ul>
                            <?php //$servicios = getServicios(); ?>
                            <?php //foreach ($servicios as $sKey => $sValor): ?>
                            <li>
                                <a href="servicios/<? //=$sValor['url'].'-'.$sValor['id']?>"><? //=$sValor['nombre']?></a>
                            </li>   
                            <?php //endforeach ?>
                        </ul>
                    </div>
                </div> -->
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h4 class="footer-heading">CONTÁCTENOS</h4>
                        <ul>
                            <li><span><?php echo getConfig("direccion_footer")?></span> </li>
                            <li><span><?php echo getConfig("telefono")?></span></li>
                            <li><span><?php echo getConfig("correo_from")?></span></li>
                        </ul>
                    </div>
                    <div class="footer-widget social-links">
                        <h4 class="footer-heading">SIGUENOS</h4>
                        <ul>
                            <?php $facebook=getConfig('enlace_facebook'); if(!empty($facebook)): ?>
                            <li><a target="_blank" href="<?php echo getConfig('enlace_facebook')?>"><i class="fa fa-facebook"></i></a></li>
                            <?php  endif;   ?>

                            <?php $twitter=getConfig('enlace_twitter'); if(!empty($twitter)): ?>
                            <li><a target="_blank" href="<?php echo getConfig('enlace_twitter')?>"><i class="fa fa-twitter"></i></a></li>
                            <?php  endif;   ?>

                            <?php $youtube=getConfig('enlace_youtube'); if(!empty($youtube)): ?>
                            <li><a target="_blank" href="<?php echo getConfig('enlace_youtube')?>"><i class="fa fa-youtube"></i></a></li>
                            <?php  endif;   ?>
                        </ul>
                    </div>
                </div>
                <div class='clearfix'></div>
            </div>
        </div>
        <div class="copyright-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p class="pull-left"><?=getConfig('copyright')?></p> <p class="pull-right">TODOS LOS DERECHOS RESERVADOS</p>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- /Footer -->
    <!-- Scripts -->
     <!-- Js File -->

    <!-- j Query -->
    <script type="text/javascript" src="assets/frontend/js/jquery-2.1.4.js"></script>

    <script type="text/javascript" src="assets/frontend/js/funciones.js"></script>
    <script type="text/javascript" src="assets/frontend/js/funciones_ajax.js"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="assets/frontend/js/bootstrap.min.js"></script>
    <!-- revolution -->
    <!-- <script src="assets/frontend/js/revolution/jquery.themepunch.tools.min.js"></script>
    <script src="assets/frontend/js/revolution/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/frontend/js/revolution/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="assets/frontend/js/revolution/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="assets/frontend/js/revolution/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="assets/frontend/js/revolution/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="assets/frontend/js/revolution/revolution.extension.actions.min.js"></script> -->


    <!-- mix it up -->
    <script type="text/javascript" src="assets/frontend/js/jquery.mixitup.min.js"></script>
    <!-- Owl carousel -->
    <script src="assets/frontend/js/owl.carousel.js"></script>
       
      
    <!-- fancy box -->
    <script src="assets/frontend/js/jquery.fancybox.pack.js"></script>
    <!-- fancy box -->
    <script>
        window.onscroll = function() {myScrollTopHeader()};

            var header = document.getElementById("header");
            var sticky = header.offsetTop;

            function myScrollTopHeader() {
              if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
              } else {
                header.classList.remove("sticky");
              }
            }
        $(document).ready(function() {

            $("#owl-home").owlCarousel({
                autoPlay : 3000,
                stopOnHover : true,
                navigation:true,
                paginationSpeed : 1000,
                goToFirstSpeed : 2000,
                singleItem : true,
                autoHeight : true,
                //lazyLoad : true,
                pagination: false,
                navigationText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
                transitionStyle:"fade"
            }); 
            $("#owl-productos").owlCarousel({
                autoPlay : 4000,
                stopOnHover : true,
                items : 4,
                itemsDesktop : [1199,4],
                itemsDesktopSmall : [980,3],
                itemsTablet: [768,2],
                itemsTabletSmall: false,
                itemsMobile : [479,1],
                lazyLoad : true,
                navigation : true,
                //navigationText : false,
                pagination: false,
                navigationText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
            });
        });
        $(document).ready(function() {
              $('#mixitup_list').mixItUp(); // mix it up 
        });

        $(".fancybox").fancybox();
          $(".fancybox").fancybox({
          helpers : {
              overlay : {
                  css : {
                      'background' : 'rgba(0,0,0,0.7)'
                  }
              }
          }
        });
    </script>
    <!-- main js -->
    <script type="text/javascript" src="assets/frontend/js/validate.js"></script>

    <!-- ui js -->
    <script type="text/javascript" src="assets/frontend/js/jquery-ui.min.js"></script>
    <!-- main js -->
    <script type="text/javascript" src="assets/frontend/js/main.js"></script>

    <?php if($seccion=='contacto'):?>
    <!-- google map -->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyB0oTeSlP5PKgk1y-5ldZe0CnIjRgvL-KA"></script> <!-- Gmap Helper -->
    <script src="assets/frontend/js/gmap.js"></script>  <!-- gmap JS --> 
    <!-- <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC3WlJxCWm-xcP4upZ8z20Lzyt8crnPju4" type="text/javascript" ></script>   -->     
    <script type="text/javascript">
        //******************
        //  Empieza mapa     
        //******************
        function googleMap () {
                if ($('#contact-google-map').length) {
                    var settingsItemsMap = {
                        zoom: 10,
                        center: new google.maps.LatLng(<?php echo $mapa["latitud_centro"]?>, <?php echo $mapa["longitud_centro"]?>),
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.LARGE
                        },
                        scrollwheel: false,
                        styles:[
                            { featureType: "water", stylers: [ { color: "#c0d887"} ] },
                            { featureType: "road", stylers: [ { color: "#f2f2f2" } ] }
                        ],
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    var map = new google.maps.Map(document.getElementById('contact-google-map'), settingsItemsMap );
                    var image = 'assets/frontend/images/map-pin.png';
                          
                         
                    //aqui se puede pegar el foreach del mapa
                         
                    var myMarker = new google.maps.Marker({
                        position: new google.maps.LatLng('<?php echo $mapa["latitud_punto"]?>', '<?php echo $mapa["longitud_punto"]?>'),
                                draggable: true,
                                title: '<?php echo $mapa["titulo_globo"]?>',
                                icon: image
                            });

                            map.setCenter(myMarker.position);
                            myMarker.setMap(map);
                            //segundo punto

                            /*var marker = new google.maps.Marker({
                                position: new google.maps.LatLng('<?php //echo $mapa2["latitud_punto"]?>', '<?php //echo $mapa2["longitud_punto"]?>'),
                                title: '<?php //echo $mapa2["titulo_globo"]?>',

                                draggable: false,
                                icon: image
                            });*/



                            //marker.setMap(map);

                            //=============agrega la ventana de informacion==========
                           /* var contentString = '<div id="content">'+
                                '<div id="siteNotice">'+
                                '</div>'+
                                '<h1 id="firstHeading" class="firstHeading"><?php //echo $mapa2["titulo_globo"]; ?></h1>'+
                                '<div id="bodyContent">'+
                                '<p><?php //echo $mapa2["texto_globo"]; ?></p>'+
                                '</div>'+
                                '</div>'; 
                                 var infowindow = new google.maps.InfoWindow({ 
                                       content: contentString,
                                        size: new google.maps.Size(250,120),

                                });   


                                google.maps.event.addListener(marker, 'click', function() { 
                                        infowindow.open(map,marker); 
                                }); */
                                //=============agrega la ventana 2 de informacion==========
                            var contentString2 = '<div id="content">'+
                                '<div id="siteNotice">'+
                                '</div>'+
                                '<h1 id="firstHeading" class="firstHeading"><?php echo $mapa["titulo_globo"]; ?></h1>'+
                                '<div id="bodyContent">'+
                                '<p><?php echo $mapa["texto_globo"]; ?></p>'+
                                '</div>'+
                                '</div>'; 
                                 var infowindow2 = new google.maps.InfoWindow({ 
                                       content: contentString2,
                                        size: new google.maps.Size(250,120),

                                });   


                                google.maps.event.addListener(myMarker, 'click', function() { 
                                        infowindow2.open(map,myMarker); 
                                }); 
                                      
                                          

                            //=============termina la ventana de informacion==========

                            
                          // Google map   

                      };

                    }
                //******************
                //  termina mapa     
                //******************
            
            </script>
        <?php endif ?>

</body>
</html>