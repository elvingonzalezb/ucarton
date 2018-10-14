    <!-- ============================== Footer ===================== -->
<footer>
        <div class="container">
            <div class="main_footer">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 about_gardener">
                        <h5>Nosotros <span>Industrial V&G</span></h5>
                        <p><?php echo getConfig("texto_footer")?></p>
                        <a href="cotizacion/detalle" class="button_main buy_gardener transition3s mouse_hover1">Comprar  Ahora!</a>
                    </div>
                    <!-- <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 services">
                        <h5>Productos</h5>
                        <ul>
                           
                        </ul>
                    </div> -->
                    <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12 useful_links"></div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 useful_links">
                        <h5>Secciones</h5>
                        <ul>
                                <li><a href="./" class="transition3s"><i class="fa fa-check-square"></i>Inicio</a></li>                                
                                <li><a href="empresa" class="transition3s"><i class="fa fa-check-square"></i>Nosotros</a></li>
                                <li><a href="productos" class="transition3s"><i class="fa fa-check-square"></i>Productos</a></li>
                                <li><a href="articulos" class="transition3s"><i class="fa fa-check-square"></i>Artículos</a></li>
                                <li><a href="cotizacion/detalle" class="transition3s"><i class="fa fa-check-square"></i> Pedidos</a></li>
                                <li><a href="contacto" class="transition3s"><i class="fa fa-check-square"></i>contáctenos</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 get_in_touch">
                        <h5>Contáctenos</h5>
                        <address>
                            <ul>
                                <li><?php echo getConfig("direccion")?><br><?php echo getConfig("distrito")?></li>
                                <li>Telefono:<?php echo getConfig("telefono")?></li>
                                <li><a href="<?php echo getConfig("correo_from")?>" class="transition3s"><?php echo getConfig("correo_from")?></a></li>
                                <li>Lun-Vier <?php echo getConfig("horario_semana")?> <br> Sabado - <span><?php echo getConfig("horario_sabado")?></span></li>
                            </ul>
                        </address>
                    </div>
                </div> <!-- /row -->
            </div> <!-- /main_footer -->
            <div class="bottom_footer">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                        <p>&copy; 2016 Industrial V&G</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="social_icon_footer">
                            <ul>
                                <?php $facebook=getConfig('enlace_facebook'); if(!empty($facebook)): ?>
                                <li class="transition3s border_round"><a href="<?php echo getConfig('enlace_facebook')?>"><i class="fa fa-facebook border_round"></i></a></li>
                                <?php  endif;   ?>

                                <?php $twitter=getConfig('enlace_twitter'); if(!empty($twitter)): ?>
                                <li class="transition3s border_round"><a href="<?php echo getConfig('enlace_twitter')?>"><i class="fa fa-twitter border_round"></i></a></li>
                                <?php  endif;   ?>

                                <?php $youtube=getConfig('enlace_youtube'); if(!empty($youtube)): ?>
                                <li class="transition3s border_round"><a href="<?php echo getConfig('enlace_youtube')?>"><i class="fa fa-youtube border_round"></i></a></li>
                                <?php  endif;   ?>
                                
                            </ul>
                        </div><!--  /social_icon_footer -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                        <p>Desarrollado por: <a href="http://www.ajaxperu.com">AJAXPERU</a></p>
                       <!-- <a href="#top" class="back_top"><i class="fa fa-chevron-up"></i></a>-->
                    </div>
                    
                </div>
            </div> <!-- /bottom_footer -->
        </div> <!-- /container -->
    </footer>

    <!-- ============================== /Footer ===================== -->



        <!-- Js File -->

        <!-- j Query -->
        <script type="text/javascript" src="assets/frontend/js/jquery.min.js"></script>


        <!-- Bootstrap JS -->
        <script type="text/javascript" src="assets/frontend/js/bootstrap.min.js"></script>
        <!-- revolution -->
        <script src="assets/frontend/js/revolution/jquery.themepunch.tools.min.js"></script>
        <script src="assets/frontend/js/revolution/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="assets/frontend/js/revolution/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="assets/frontend/js/revolution/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="assets/frontend/js/revolution/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="assets/frontend/js/revolution/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="assets/frontend/js/revolution/revolution.extension.actions.min.js"></script>


        <!-- Owl carousel -->
        <script src="assets/frontend/js/owl.carousel.min.js"></script>

        <script type="text/javascript" src="assets/frontend/js/validate.js"></script>

        <!-- fancy box -->
        <script src="assets/frontend/js/jquery.fancybox.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                // Change title type, overlay closing speed
                $(".fancybox").fancybox({
                    helpers: {
                        title : {
                            type : 'outside'
                        },
                        overlay : {
                            speedOut : 0
                        }
                    }
                });



            });
        </script>



        <!-- ui js -->
        <script type="text/javascript" src="assets/frontend/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="assets/frontend/js/funciones.js"></script>
        <script type="text/javascript" src="assets/frontend/js/funciones_ajax.js"></script>

        <?php if($seccion=='contacto'):?>
         <!-- google map -->
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyC3WlJxCWm-xcP4upZ8z20Lzyt8crnPju4"></script> <!-- Gmap Helper -->
        <script src="assets/frontend/js/gmap.js"></script>  <!-- gmap JS --> 
            <!-- <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC3WlJxCWm-xcP4upZ8z20Lzyt8crnPju4" type="text/javascript" ></script>   -->     
            <script type="text/javascript">
                //******************
                //  Empieza mapa     
                //******************
                    function googleMap () {
                      if ($('#contact-google-map').length) {
                        var settingsItemsMap = {
                              zoom: 16,
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
                          var myMarker = new google.maps.Marker({
                              position: new google.maps.LatLng('<?php echo $mapa["latitud_punto"]?>', '<?php echo $mapa["longitud_punto"]?>'),
                              draggable: true,
                              icon: image
                          });

                          map.setCenter(myMarker.position);
                          myMarker.setMap(map);
                          // Google map   

                      };

                    }
                //******************
                //  termina mapa     
                //******************
             /*     // Google maps pin tooltip  
              var markers = [
                  {
                  "description": '<p>Direccion: <?php// echo getConfig("direccion_empresa");?></p>'
                    }
              ];

              // Google maps main api
              window.onload = function () {
                var mapOptions = {
                  center: new google.maps.LatLng(<?php// echo $mapa["latitud_centro"]?>, <?php// echo $mapa["longitud_centro"]?>),
                  zoom: 16,
                  flat: true,
                  scrollwheel:false,
                  panControl:false,
                  zoomControl:true,
                  streetViewControl: false,
                  mapTypeControl: false,
                
              // Google maps style  
                        styles: [
                        {"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},
                        {"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},
                        {"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},
                        {"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},
                        {"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},
                        {"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},
                        {"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},
                        {"featureType":"water","elementType":"all","stylers":[{"color":"#194F77"},{"visibility":"on"}]}],
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                  var infoWindow = new google.maps.InfoWindow();
                  var map = new google.maps.Map(document.getElementById("map"), mapOptions);
                  for (i = 0; i < markers.length; i++) {
                  var data = markers[i]
                        var myLatlng = new google.maps.LatLng('<?php// echo $mapa["latitud_punto"]?>', '<?php// echo $mapa["longitud_punto"]?>');
                  var marker = new google.maps.Marker({
                        position: myLatlng,
                        map: map,
                      icon: 'assets/frontend/images/map-pin.png',
                        title: data.title
                        });
                  (function (marker, data) {
                        google.maps.event.addListener(marker, "click", function (e) {
                            infoWindow.setContent(data.description);
                            infoWindow.open(map, marker);
                          });
                        })(marker, data);
                    }
                };*/
            </script>
        <?php } ?>
        <!-- main js -->
        <script type="text/javascript" src="assets/frontend/js/main.js"></script>




    </div>
</body>
</html>