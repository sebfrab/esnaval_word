        
        <?php
            if(is_page( 463 ) || is_page(1178)){
        ?>
            <div class='container-fluid'>
                <div class='row embed-container maps' id='mapa'>
                    <div class='col-lg-12' style='padding: 0px;'>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5625.9015581918475!2d-71.63738839391574!3d-33.025359474927065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x533addfe4350f2f!2sEscuela+naval!5e0!3m2!1ses!2scl!4v1496258783065" width="100%" height="400"  frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div> 
            </div>
        <?php
            }
        ?>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                    </div>
                    <div class="col-lg-4 col-md-4" id="footer_logo_acreditacion">
                        <image src="<?php bloginfo('template_url') ?>/images/design/acreditacion.jpg" />
                    </div>
                    <div class="col-lg-4 col-md-4 hidden-sm hidden-xs" id="footer_boton_contactanos">
                        <a href="<?php echo site_url() ?>/contacto/" class="btn btn-info btn-lg pull-right btn-info-azul" title="contáctanos">
                            CONTÁCTANOS
                        </a>
                    </div>
                    <div class="hidden-lg hidden-md col-sm-12 col-xs-12" id="footer_boton_contactanos" style="text-align: center;">
                        <a href="<?php echo site_url() ?>/contacto/" class="btn btn-info btn-lg btn-info-azul" title="contáctanos">
                            CONTÁCTANOS
                        </a>
                    </div>
                </div>
                
                <div class="row" style="margin-top: 50px;">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" id="footer_informacion">
                        <h2>INFORMACIONES</h2>
                        <h3>ESCUELA NAVAL "ARTURO PRAT"</h3>
                        <p>
                            Avda. González de Hontaneda N° 11, <br/>Playa Ancha Valparaiso, Chile.-
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-4 hidden-sm hidden-xs" id="footer_redes_sociales">
                        <p>Siguenos en nuestras Redes Sociales</p>
                        
                        <p style="text-align: center;">
                            <a href="https://facebook.com/EscuelaNavalChile" target="_blank" class="btn btn-default btn-lg btn-circle">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="https://www.flickr.com/photos/escuelanaval/sets" target="_blank" class="btn btn-default btn-lg btn-circle">
                                <i class="fa fa-flickr"></i>
                            </a>
                            <a href="http://youtube.com/EscuelaNavalAP2013" target="_blank" class="btn btn-default btn-lg btn-circle">
                                <i class="fa fa-youtube"></i>
                            </a>
                            <a href="http://instagram.com/escuela_naval_oficial" target="_blank" class="btn btn-default btn-lg btn-circle">
                                <i class="fa fa-instagram"></i>
                            </a>    
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" id="footer_admision">
                        <h2>ADMISIÓN</h2>
                        <p>
                            Atención de Lunes a Viernes de<br/>
                            08:30 a 12:45 y 14:15 a 17:30 horas<br/>
                            Email: <a href="mailto:admision@escuelanaval.cl" title="enviar email">admision@escuelanaval.cl</a><br/>
                            Fono: 32 2785219
                        </p>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="hidden-lg hidden-md col-sm-12 col-xs-12" id="footer_redes_sociales">
                        <p>Siguenos en nuestras Redes Sociales</p>
                        
                        <p style="text-align: center;">
                            <a href="https://facebook.com/EscuelaNavalChile" target="_blank" class="btn btn-default btn-lg btn-circle">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="https://www.flickr.com/photos/escuelanaval/sets" target="_blank" class="btn btn-default btn-lg btn-circle">
                                <i class="fa fa-flickr"></i>
                            </a>
                            <a href="http://youtube.com/EscuelaNavalAP2013" target="_blank" class="btn btn-default btn-lg btn-circle">
                                <i class="fa fa-youtube"></i>
                            </a>
                            <a href="http://instagram.com/escuela_naval_oficial" target="_blank" class="btn btn-default btn-lg btn-circle">
                                <i class="fa fa-instagram"></i>
                            </a>    
                        </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid" id="footer_politicas">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <p>
                            <a href="http://acreditacion.escuelanaval.cl/wp-content/uploads/2017/05/politicas_de_privacidad.pdf" target="_blank">Politicas de privacidad</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <a href="#" class="scrollup">Scroll</a>
        <?php wp_footer(); ?>
    </body>
    <!-- Bootstrap -->
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/bootstrap.js"></script>
    <!-- Slider -->
    <script src="<?php bloginfo('template_url') ?>/owl-carousel/owl.carousel.min.js"></script>
       
    
    <script type="text/javascript">
        $('#menu-menu-principal > li > a').addClass('hvr-underline-reveal');
        
        /*configuración slider superior*/
        $('#slider_superior').owlCarousel({
            autoPlay : 5000,
            stopOnHover : true,
            navigation:false,
            paginationSpeed : 1000,
            goToFirstSpeed : 2000,
            singleItem : true,
            autoHeight : true,
            transitionStyle:"fade"
        });
        
        /*opción volver arriba - ocultar y mostrar menu y logo menu*/
        $(window).scroll(function(){
            if ($(this).scrollTop() > 80) {
                $('.scrollup').fadeIn();
                $('#contenedor_menu_superior').fadeOut("slow");
                $('#logo_escuela_navbar').fadeIn("slow");
            } else {
                $('.scrollup').fadeOut();
                $('#contenedor_menu_superior').fadeIn("slow");
                $('#logo_escuela_navbar').fadeOut("slow");
            }
        });
  
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
        
        $(".btn-ver").click(function () {
            
            var id = $(this).attr("id");
            var contenido = "#contenido-"+id;
            
            var sw = "si";
            if($(this).attr("toggle")=="no" || $(this).attr("toggle")==null){
                sw = "no";
            }
            
            if(sw == "no"){
                $(contenido).show(500);
                $(this).attr("toggle","si");
                $(this).text("-");
                $(this).attr("title","ocultar respuesta");
            }else{
                $(contenido).hide(500);
                $(this).attr("toggle","no");
                $(this).text("+");
                $(this).attr("title","ver respuesta");
            }
        });
        
       
        var currentBackground = 0;

        var backgrounds = [];
        backgrounds[0] = '<?php bloginfo('template_url') ?>/images/design/formacion_cultural.jpg';
        backgrounds[1] = '<?php bloginfo('template_url') ?>/images/design/formacion_fisico_deportivo.jpg';
        backgrounds[2] = '<?php bloginfo('template_url') ?>/images/design/formacion_militar_naval.jpg';
        backgrounds[3] = '<?php bloginfo('template_url') ?>/images/design/formacion_profesional.jpg';
        backgrounds[4] = '<?php bloginfo('template_url') ?>/images/design/formacion_valorica.jpg';
        backgrounds[5] = '<?php bloginfo('template_url') ?>/images/design/formacion_academica.jpg';

        function changeBackground() {
            currentBackground++;
            if(currentBackground > 5) currentBackground = 0;

            $('#formacion_academica').css({
                    'background-image' : "url('" + backgrounds[currentBackground] + "')",
                    '-webkit-transition': 'background-image 2s linear',
                    'transition': 'background-image 2s linear',
            });
            setTimeout(changeBackground, 7000);
        }

        $(document).ready(function() {

            $('.maps').click(function () {
                $('.maps iframe').css("pointer-events", "auto");
            });

            $( ".maps" ).mouseleave(function() {
                $('.maps iframe').css("pointer-events", "none"); 
            });
            
            setTimeout(changeBackground, 7000);  
        });
        
        
        
        
    </script>
</html>

