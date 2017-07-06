<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" style="padding-left:0px; padding-right: 0px;">
            <div id="slider_superior" class="owl-carousel owl-theme">
                <?php
                    $cat = new WP_Query( 'cat=4&posts_per_page=4' );
                    while($cat->have_posts()) : $cat->the_post();
                ?>
                    <div>
                        <a href="<?php the_permalink() ?>" target="" >
                            <?php if(has_post_thumbnail()) { the_post_thumbnail('slider_thumbs');} ?>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <h2>Escuela Naval al Día - Noticias</h2>
    </div>
</div>
<div class="container-fluid container_gray">
    <div class="row">
        <div class="container">
            <?php
                $catquery = new WP_Query( 'cat=1&posts_per_page=3' );
                while($catquery->have_posts()) : $catquery->the_post();
            ?>
                <div class="col-lg-4 col-md-4 col-sm-4 news">
                    <a href="<?php the_permalink() ?>"  title="seguir leyendo">
                        <!-- TITULO -->
                        <div class="news_title">
                            <p><?php the_title(); ?></p>
                        </div>
                        <!-- CUERPO -->
                        <div class="hidden-xs news_extract">
                            <?php the_excerpt() ?>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>


<div class="container" style="margin-top:20px;">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
            <div class="thumbnail sitios_enaval">
                <a href="http://admision.escuelanaval.cl/admision/site/edic/base/port/inicio.html" title="admisión" target="_blank">
                    <img alt="admisión" src="<?php bloginfo('template_url') ?>/images/design/admision.jpg">
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
            <div class="thumbnail sitios_enaval">
                <a href="http://www.offvalparaiso.cl/" title="regata" target="_blank">
                    <img alt="admisión" src="<?php bloginfo('template_url') ?>/images/design/regata.jpg">
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
            <div class="thumbnail sitios_enaval">
                <a href="<?php echo site_url() ?>/bicentenario/" title="bicentenario Escuela Naval">
                    <img alt="admisión" src="<?php bloginfo('template_url') ?>/images/design/bicente.jpg">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" id="formacion_academica">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <a href="<?php echo site_url() ?>/proyecto-educativo/" title="formación académica"> 
                    <div class="col-lg-offset-9 col-lg-3" id="formacion_academica_boton">
                        <h3>formación</h3>
                        <h2>académica</h2>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container" id="enlaces_extras">
    <div class="row">
        <a href="<?php echo site_url() ?>/wp-content/uploads/2017/05/fogonazo_1169.pdf" target="_blank">
           <div id="" class="col-lg-3 col-md-3 col-sm-3 col-xs-6" style="background-color: #d0d0d0; padding-top: 20px; padding-bottom: 20px;">
                <div style="height: 150px;">
                    <h3>
                        Periódico de los cadetes "fogonazo"
                    </h3>
                </div>
            </div> 
        </a>
        
        <a href="<?php echo site_url() ?>/bicentenario/">
            <div id="" class="col-lg-3 col-md-3 col-sm-3 col-xs-6" style="background-color: #43525a; padding-top: 20px; padding-bottom: 20px;">
                <div style="height: 150px;">
                    <h3>
                        Ex Alumnos
                    </h3>
                    <p>Bicentenario</p>
                </div>
            </div>    
        </a>
        
        <a href="<?php echo site_url() ?>/sala-historica/">
            <div id="" class="col-lg-3 col-md-3 col-sm-3 col-xs-6" style="background-color: #79898d; padding-top: 20px; padding-bottom: 20px;">
                <div style="height: 150px;">
                    <h3>
                        Sala Histórica
                    </h3>
                </div>
            </div>    
        </a>
        
        <a href="<?php echo site_url() ?>/huella-de-carbono/">
            <div id="" class="col-lg-3 col-md-3 col-sm-3 col-xs-6" style="background-color: #d0d0d0; padding-top: 20px; padding-bottom: 20px;">
                <div style="height: 150px;">
                    <h3>
                        Huella de Carbono
                    </h3>
                </div>
            </div>    
        </a>
        
    </div>
</div>

<div class="container-fluid" id="slider_inferior">
    <div class="row">
        <div class="col-lg-12">
            <image align="right" alt="bicentenario" src="<?php bloginfo('template_url') ?>/images/design/200_anos.png" width="260"/>
        </div>
    </div>
</div>



<?php get_footer(); ?>
