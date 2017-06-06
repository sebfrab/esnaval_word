<?php get_header(); ?>

<div id="contenido_interno">
    <div class="container">
        <div class="row">
            
            <div class="hidden-lg hidden-md visible-sm visible-xs col-sm-12 col-xs-12">
                <?php
                    wp_nav_menu( array(
                        'menu'              => 'menu_lateral',
                        'theme_location'    => 'menu_lateral',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => '',
                        'container_id'      => 'menu_lateral',
                        'menu_class'        => 'nav nav-pills nav-stacked',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker())
                    );
                ?>
            </div>
            
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="col-lg-12 pull-right">
                    <?php
                        if (function_exists('zeno_font_resizer_place')) {
                            zeno_font_resizer_place();
                        }
                    ?>
                </div>
                <div id="single_news">
                    <?php if(have_posts()): while ( have_posts() ) : the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                        <p style="text-align: right;">
                            <?php the_time('j F, Y') ?>
                        </p>
                        <div class="">
                            <?php the_content() ?>
                        </div>

                    <?php endwhile; else: ?>
                        <h2>No se encontró artículo</h2>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                <?php
                    wp_nav_menu( array(
                        'menu'              => 'menu_lateral',
                        'theme_location'    => 'menu_lateral',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => '',
                        'container_id'      => 'menu_lateral',
                        'menu_class'        => 'nav nav-pills nav-stacked',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker())
                    );
                ?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#contenido_interno img').addClass('img-responsive');
    });
</script>

<?php get_footer(); ?>