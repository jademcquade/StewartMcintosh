<?php

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

// custom post for home banner images
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'home-images',
    array(
      'labels' => array(
        'name' => __( 'Slides' ),
        'singular_name' => __( 'Slide' )
      ),
      'public' => true,
      'supports' => array(
	  'editor',
	  'thumbnail',
	  )
    )
  );
}
add_theme_support( 'post-thumbnails' );

?>