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
            
            
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="padding-top: 20px;">
                <?php
                    $categoria = get_queried_object();
                    $cat = new WP_Query( 'cat='.$categoria->term_id.'&posts_per_page=1' );
                    while($cat->have_posts()) : $cat->the_post();
                ?>
                    <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"  >
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 news_last">
                            <div class="col-lg-6 col-md-7 col-sm-5 hidden-xs" id="news_imagen_last">
                                <?php 
                                    if(has_post_thumbnail()) { 
                                        the_post_thumbnail('news_thumbs' , array('class'=>'img-responsive'));
                                    }else{
                                        ?>
                                        <img height="400" width="500" class="img-responsive wp-post-image" alt="admisión" src="<?php bloginfo('template_url') ?>/images/design/news_default_500.jpg">
                                        <?php
                                    } 
                                ?>
                            </div>
                            
                            <div class="hidden-lg hidden-md hidden-sm col-xs-12" style="padding: 0px;">
                                <?php 
                                    if(has_post_thumbnail()) { 
                                        the_post_thumbnail('slider_thumbs' , array('class'=>'img-responsive'));
                                    } 
                                ?>
                            </div>
                            
                            <div class="col-lg-6 col-md-5 col-sm-7">
                                <h3><?php the_title() ?></h3>
                                <div id="news_extracto">
                                    <?php the_excerpt() ?>
                                    <p class="news_date"> <?php the_time('j F, Y') ?></p>
                                </div>
                            </div>
                        </div>
                    </a>

                <?php endwhile; ?>
                
                <div class="row" id="news">
                    <?php if(have_posts()): while ( have_posts() ) : the_post(); ?>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="<?php the_permalink() ?>" target="" >
                                <div class="thumbnail">
                                    <?php 
                                        if(has_post_thumbnail()){ 
                                            the_post_thumbnail('slider_thumbs');
                                        }else{
                                        ?>
                                            <img alt="admisión" src="<?php bloginfo('template_url') ?>/images/design/news_default.jpg">
                                        <?php
                                    }  
                                    ?>
                                    <div style="padding-left: 10px; padding-right: 10px;">
                                        <h3><?php the_title() ?></h3>
                                        <p class="news_date"> <?php the_time('j F, Y') ?></p>

                                        <div class="news_extracto">
                                            <?php the_excerpt() ?>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </a>
                        </div>
                    <?php endwhile;?>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php
                            if ( function_exists('wp_bootstrap_pagination') )
                                wp_bootstrap_pagination();
                        ?>
                    </div>
                        <?php else: ?>
                            <h2>No se encontraron artículos</h2>
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

<?php get_footer(); ?>

