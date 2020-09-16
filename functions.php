<?php

// Add Theme Scripts
function add_theme_scripts() { 
$location = get_template_directory_uri().'/assets';

wp_enqueue_style( 'bootstrap',  $location .'/css/bootstrap.css',array(),'4.5.0','all');
wp_enqueue_style( 'styles',  $location .'/css/styles.css',array(),'1.0.0','all');

wp_enqueue_script( 'jquery-3.5.1',  $location  .'/js/jquery-3.5.1.min.js', array(), '3.5.1', true);
wp_enqueue_script( 'popper-1.16.0',  $location  .'/js/popper-1.16.0.min.js', array('jquery-3.5.1'), '1.16.0', true);
wp_enqueue_script( 'bootstrap',  $location .'/js/bootstrap.min.js', array('jquery-3.5.1','popper-1.16.0'),'4.5.0',true);
wp_enqueue_script( 'main',  $location . '/js/main.js', array (), '1.0.0', true);  
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


// Add Widgets
function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'primary', 'my_theme' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Secondary Sidebar', 'tmy_theme' ),
        'id'            => 'sidebar-2',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'themename_widgets_init' );


//Add Navigation Menu
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );


// Add Post Thumbnails Support
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 250, 150); 
 }
?>