<?php
/*
Plugin Name: Houzez Theme - Functionality - Child
Description: Child plugin de Houzez Theme - Functionality 
Version: 1.0
License: GPL2
*/


add_action( 'after_setup_theme', 'load_father_plugin' );
function load_father_plugin() {
    // Código para cargar el plugin padre
    require_once( ABSPATH . 'wp-content/plugins/houzez-theme-functionality/houzez-theme-functionality.php' );
}


add_action( 'init', 'my_custom_post_type' );

function my_custom_post_type() {
    global $wp_post_types;
    
    $args = $wp_post_types['property']->args; // Obtener los argumentos actuales
    $args['supports'][] = 'custom-fields'; // Agregar el tipo de soporte

    // Registrar el post type con los nuevos argumentos
    register_post_type( 'property', $args );
}
