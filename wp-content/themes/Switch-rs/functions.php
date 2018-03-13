<?php
  define('ASSETS_URL', get_template_directory_uri() . '/assets');

  function adding_styles_to_my_theme(){
    wp_enqueue_style('main', ASSETS_URL . '/css/main.css', array(), false);
    wp_enqueue_script( 'java', ASSETS_URL . 'js/java.js' , array(), false );
    wp_enqueue_script( 'java', ASSETS_URL . 'js/java1.js' , array(), false );
    wp_enqueue_script( 'java', ASSETS_URL . 'js/java2.js' , array('jquery'), false );
    wp_enqueue_script( 'java', ASSETS_URL . 'js/java3.js' , array(), false );
  }
  add_action( 'wp_enqueue_scripts', 'adding_styles_to_my_theme' );


function my_theme_supports(){
    add_theme_support( 'custom-logo');
    add_theme_support('post-thumbnails');
  }
add_action('init', 'my_theme_supports');
