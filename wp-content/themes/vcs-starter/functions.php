<?php
// aprasomas linko sutrumpinimas
define('ASSETS_URL', get_template_directory_uri() . '/assets/' );

function adding_styles_to_my_theme(){
  wp_enqueue_style( 'main', ASSETS_URL . 'css/main.css' , array(), false );
  wp_enqueue_style( 'font_awesome', ASSETS_URL . 'css/font-awesome.min.css' , array(), false );
  wp_enqueue_script( 'breakpoints', ASSETS_URL . 'js/breakpoints.min.js' , array(), false );
  wp_enqueue_script( 'browser', ASSETS_URL . 'js/browser.min.js' , array(), false );
  wp_enqueue_script( 'jquery', ASSETS_URL . 'js/jquery.min.js' , array(), false );
  wp_enqueue_script( 'main', ASSETS_URL . 'js/main.js' , array('jquery'), false );
  wp_enqueue_script( 'util', ASSETS_URL . 'js/util.js' , array('jquery'), false );
}
add_action( 'wp_enqueue_scripts', 'adding_styles_to_my_theme' );
function hide_admin_bar(){
  show_admin_bar(false);
}
add_action('init','hide_admin_bar' );

function my_theme_supports(){
  add_theme_support('menus');
  add_theme_support( 'custom-logo');
  add_theme_support('post-thumbnails');
}
add_action('init','my_theme_supports');

function my_theme_menus() {
	register_nav_menus(array(
     'pagrindinis-meniu' => __( 'Pagrindinis Meniu' ),
     'footerio-meniu' => __( 'footerio Meniu' )
 ));
}
add_action( 'init', 'my_theme_menus' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'top left menu widget',
		'id'            => 'top_left_widget',
		'before_widget' => '<div class="top-widgets">',
		'after_widget'  => '</div>'

	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

?>
