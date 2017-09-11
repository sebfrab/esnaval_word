<?php
require_once('wp-bootstrap-navwalker.php');
require_once('wp_bootstrap_pagination.php');

// register of menus
register_nav_menus( array(
    'menu_principal' => __( 'Menu principal', 'escuela_naval' ),
    'menu_superior' => __( 'Menu superior', 'escuela_naval' ),
    'menu_lateral' => __( 'Menu lateral', 'escuela_naval' ),
) );


// types of size for images in the site
add_theme_support('post-thumbnails');
add_image_size('slider_thumbs', 1200, 500, true );
add_image_size('news_thumbs', 500, 400, true );


// change jquery, because the slider works with other version
function modify_jquery() {
    if (!is_admin()) {
	// comment out the next two lines to load the local copy of jQuery
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', false, '1.11.1');
	wp_enqueue_script('jquery');
    }
}
add_action('init', 'modify_jquery');

// hide admin bar in the website
add_filter( 'show_admin_bar', '__return_false' );


//Bootstrap pagination function
function customize_wp_bootstrap_pagination($args) {   
    return $args;
}
add_filter('wp_bootstrap_pagination_defaults', 'customize_wp_bootstrap_pagination');

//Changed excerpt length words
function my_excerpt_length($length) {
    return (is_front_page()) ? 55 : 30;
}
add_filter('excerpt_length', 'my_excerpt_length');

//limit word to title of post
function limit_word_count($title) {
    $len = 10; //change this to the number of words
    
    if(is_single() or is_front_page()){
        $title;
    }else{
        if (str_word_count($title) > $len) {
            $keys = array_keys(str_word_count($title, 2));
            $title = substr($title, 0, $keys[$len]);
        }
    }
    return $title;
}
add_filter('the_title', 'limit_word_count');

//add file multimedia in the publications
function allow_contributor_uploads() {
    $contributor = get_role('contributor');
    $contributor->add_cap('upload_files');
}
if ( current_user_can('contributor') && !current_user_can('upload_files') )
    add_action('admin_init', 'allow_contributor_uploads');

//add headers for security
add_action( 'send_headers', 'add_header_xframeoptions' );
    function add_header_xframeoptions() {
    header( 'X-Frame-Options: SAMEORIGIN' );
}
