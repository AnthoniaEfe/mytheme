<?php

//load stylesheet
function load_css(){
  wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
   wp_enqueue_style( 'bootstrap');

  wp_register_style( 'main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
   wp_enqueue_style( 'main');
}
add_action('wp_enqueue_scripts', 'load_css');

//load javascript
function load_js(){
  wp_enqueue_script( 'jquery');
  wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, false);
  // last depden 'in footer' ==> false=header
   wp_enqueue_script( 'bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');

//theme options
add_theme_support( 'menus'); 

//menus
register_nav_menus( array(
  'top-menu'=> 'Top Menu Location',
  'mobile-menu'=> 'Mobile Menu Location',
) );