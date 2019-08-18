<?php
/*
Plugin Name: External CSS JS For Wordpress
Version: 1.0
Description: Manage External CSS, JS Files
Author: Karim Shaikh
*/


/**
Function Name : load_my_scripts
Description : Load External CSS, JS Files to manage Wordpress Site
**/
function load_my_scripts() {
    // created to clear cache
    $cache_clear  = date('dmyhis').rand();

    wp_enqueue_script( 'custom_js', plugins_url( 'js/custom.js', __FILE__ ), array(), $cache_clear );
    wp_enqueue_style( 'my_css',    plugins_url( 'css/custom.css',    __FILE__ ), false,   $cache_clear );

}
add_action('wp_enqueue_scripts', 'load_my_scripts');
?>