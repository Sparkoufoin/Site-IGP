<?php /*

  This file is part of a child theme called Aagaz Startup Child.
  Functions in this file will be loaded before the parent theme's functions.
  For more information, please read
  https://developer.wordpress.org/themes/advanced-topics/child-themes/

*/

// this code loads the parent's stylesheet (leave it in place unless you know what you're doing)

function your_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, 
      get_template_directory_uri() . '/style.css'); 

    wp_enqueue_style( 'child-style', 
      get_stylesheet_directory_uri() . '/style.css', 
      array($parent_style), 
      wp_get_theme()->get('Version') 
    );
}

add_action('wp_enqueue_scripts', 'your_theme_enqueue_styles');

/*  Add your own functions below this line.
    ======================================== */ 

/*---------- Création des zones de widget ----------*/

function header_widgets_init() {

  register_sidebar( array(
    'name'          => __( 'Image header' ),
    'id'            => 'image-header-1',
    'description'   => __( 'Image au dessus du header' ),
    'before_widget' => '<aside class="img-header">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="img-header">',
    'after_title'   => '</h2>',
  ) );
}

add_action( 'widgets_init', 'header_widgets_init' );


function header_widgets_init() {

  register_sidebar( array(
    'name'          => __( 'Bloc 1' ),
    'id'            => 'bloc1',
    'description'   => __( 'Bloc 1 page accueuil' ),
    'before_widget' => '<aside class="bloc1">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="bloc1">',
    'after_title'   => '</h2>',
  ) );
}
function header_widgets_init() {

  register_sidebar( array(
    'name'          => __( 'Bloc 2' ),
    'id'            => 'bloc2',
    'description'   => __( 'Bloc 2 page accueuil' ),
    'before_widget' => '<aside class="bloc2">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="bloc2">',
    'after_title'   => '</h2>',
  ) );
}
function header_widgets_init() {

  register_sidebar( array(
    'name'          => __( 'Bloc 3' ),
    'id'            => 'bloc3',
    'description'   => __( 'Bloc 3 page accueuil' ),
    'before_widget' => '<aside class="bloc3">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="bloc3">',
    'after_title'   => '</h2>',
  ) );
}
function header_widgets_init() {

  register_sidebar( array(
    'name'          => __( 'Bloc 4' ),
    'id'            => 'bloc4',
    'description'   => __( 'Bloc 4 page accueuil' ),
    'before_widget' => '<aside class="bloc4">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="bloc4">',
    'after_title'   => '</h2>',
  ) );
}

