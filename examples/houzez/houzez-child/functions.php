<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


add_action( 'rest_api_init', 'register_property_meta_fields');
function register_property_meta_fields(){

    register_meta('post', 'fave_property_price', array(
        'show_in_rest' => true
        ));
    register_meta('post', 'fave_property_sec_price', array(
        'show_in_rest' => true
        ));
    register_meta('post', 'fave_property_price_prefix', array(
        'show_in_rest' => true
        ));
    register_meta('post', 'fave_property_price_postfix', array(
        'show_in_rest' => true
        ));
    register_meta('post', 'fave_property_size', array(
        'show_in_rest' => true
        ));
    register_meta('post', 'fave_property_size_prefix', array(
        'show_in_rest' => true
        ));
    register_meta('post', 'fave_property_land', array(
        'show_in_rest' => true
        ));
    register_meta('post', 'fave_property_land_postfix', array(
        'show_in_rest' => true
        ));
    register_meta('post', 'fave_property_bedrooms', array(
        'show_in_rest' => true
        ));
    register_meta('post', 'fave_property_rooms', array(
        'show_in_rest' => true
        ));
    register_meta('post', 'fave_property_bathrooms', array(
        'show_in_rest' => true
        ));
    register_meta('post', 'fave_property_garage', array(
        'show_in_rest' => true
        ));
    register_meta('post', 'fave_property_garage_size', array(
        'show_in_rest' => true
        ));
    register_meta('post', 'fave_property_year', array(
        'show_in_rest' => true
        ));
    register_meta('post', 'fave_property_id', array(
        'show_in_rest' => true
        ));
}

