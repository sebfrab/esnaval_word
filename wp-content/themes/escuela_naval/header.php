<!DOCTYPE html>
<html xml:lang="es" lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=9"/>
	<meta http-equiv="X-UA-Compatible" content="IE=8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=7"/>
        <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/images/design/icon.ico"/>
        <meta name="author" content="Lola Gondré - Sebastián Franco Brantes"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="Keywords" content="escuela naval, cadete, armada, chile"/>
        <meta name="description" content="Sitio Web de la Escuela Naval 'Arturo 
              Prat, Armada de Chile'" />
        
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Escuela Naval "Arturo Prat"</title>
        
        <!-- Bootstrap 3.0 -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/normalize.css" />
        
        <!-- Owl Carousel Assets -->
        <link href="<?php bloginfo('template_url') ?>/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="<?php bloginfo('template_url') ?>/owl-carousel/owl.theme.css" rel="stylesheet">

        <!-- Jquery -->
        <?php wp_enqueue_script("jquery"); ?>
        
        <!-- Efectos Hover-->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/hover.css" />
        
        <!-- Diseño Escuela Naval -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/init.css" />
        
        <!-- Social Icons -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/font-awesome.css" />
        
        <!-- page error -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/404.css" />

        <?php wp_head(); ?>
    </head>
    
    <body <?php body_class(); ?>>
        
        <header>
            <nav role="navigation">
                <div class="menu navbar navbar-fixed-top">
                    <div class="navbar-default navbar-collapse">
                        <div class="container-fluid" id="contenedor_menu_superior">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                                        <?php
                                            wp_nav_menu( array(
                                                'menu'              => 'menu_superior',
                                                'theme_location'    => 'menu_superior',
                                                'depth'             => 2,
                                                'container'         => '',
                                                'container_class'   => '',
                                                'container_id'      => '',
                                                'menu_class'        => 'nav navbar-nav navbar menu_superior',
                                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                                'walker'            => new WP_Bootstrap_Navwalker())
                                            );
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".bs-js-navbar-collapse">
                                    <span class="sr-only">Toggle</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="<?php echo get_option('home'); ?>">
                                    <img alt="logo escuela naval" class="hidden-lg hidden-md hidden-sm visible-xs" src="<?php bloginfo('template_url') ?>/images/design/logo_escuela_naval_navbar_small.png" />
                                </a>
                            </div>
                            <div class="navbar-collapse bs-js-navbar-collapse collapse">
                                
                                <ul id="logo_escuela_navbar" style="display:none;" class="nav navbar-nav navbar-left hidden-sm hidden-xs">
                                    <a href="<?php echo get_option('home'); ?>">
                                        <img src="<?php bloginfo('template_url') ?>/images/design/logo_escuela_naval_navbar.png" alt="Escuela Naval" title='Escuela Naval "Arturo Prat"' />
                                    </a>
                                </ul>
                                
                                <?php
                                    wp_nav_menu( array(
                                        'menu'              => 'menu_principal',
                                        'theme_location'    => 'menu_principal',
                                        'depth'             => 2,
                                        'container'         => '',
                                        'container_class'   => '',
                                        'container_id'      => '',
                                        'menu_class'        => 'menu nav navbar-nav navbar-right menu_ul_principal',
                                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'            => new WP_Bootstrap_Navwalker())
                                    );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        
        <div id="logos_escuela_armada" class="jumbotron hidden-xs">
            <div class="container-fluid">
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                    <a href="<?php echo get_option('home'); ?>">
                        <img alt="logo Escuela Naval" class="img-responsive pull-left" src="<?php bloginfo('template_url') ?>/images/design/logo_escuela_naval.png">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 hidden-xs">
                    <a target="_blank" href="http://www.educacionnaval.cl/" title="Educación Naval"><img alt="educaciónNaval" class="img-responsive pull-right" src="<?php bloginfo('template_url') ?>/images/design/educacion_naval.png"></a>
                    <a target="_blank" href="http://www.armada.cl/" title="Armada de Chile"><img alt="logoArmada" class="img-responsive pull-right" src="<?php bloginfo('template_url') ?>/images/design/logo_armada.png"></a>
                </div>
            </div>
        </div>

