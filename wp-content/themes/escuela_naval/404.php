<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" style="" id="contenedor_404">
            
            <div id="contenido_404">
                
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-lg-8 col-md-8 col-sm-10 col-xs-12">
                            <div id="mensaje_404">
                                <h2>¡Ups! Lo sentimos</h2>

                                <h3>
                                    Esta página no se encuentra disponible dentro del sitio.<br/>
                                    Quizás ingresaste a un enlace roto o la página que estás buscando no se encuentra disponible.
                                </h3>    
                                
                                <div id="footer_boton_contactanos" style="text-align: center;">
                                    <a href="<?php echo get_option('home'); ?>" class="btn btn-info btn-lg btn-info-azul" title="volver">
                                        <span class="glyphicon glyphicon-home"></span> Volver
                                    </a>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                
                
            </div>
            
        </div>
    </div>
</div>


<?php get_footer(); ?>