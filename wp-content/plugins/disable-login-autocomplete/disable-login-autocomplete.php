<?php
/**
 * Plugin Name: Remove login autocomplete
 * Plugin URI: https://buzelac.com/2014/10/disabling-wordpress-login-password-autocomplete/
 * Description: Disable login password autocomplete
 * Version: 0.1
 * Author: Nobody
 * License: WTFPL
 */

add_action('login_init', 'acme_autocomplete_login_init');
function acme_autocomplete_login_init()
{
    ob_start();
}
 
add_action('login_form', 'acme_autocomplete_login_form');
function acme_autocomplete_login_form()
{
    $content = ob_get_contents();
    ob_end_clean();

    $content = str_replace('id="user_pass"', 'id="user_pass" autocomplete="off"', $content);

    echo $content;
}
