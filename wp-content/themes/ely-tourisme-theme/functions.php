<?php

function boilerplate_load_assets()
{

  wp_enqueue_style('ely-nomrmalize-css', get_theme_file_uri('/styles/normalize.css'), array(), '1.1' );
  wp_enqueue_style('ely-style-css', get_theme_file_uri('/styles/style.css'), array(), '1.1', );

  wp_enqueue_script('ely-all.min-js', get_theme_file_uri('/js/all.min.js'), array(), '1.1', false);
  wp_enqueue_style('ely-all.min-css', get_theme_file_uri('/styles/all.min.css'), array(), '1.1');
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

//wp_nav_menu();

function nom_du_theme_registrer_menus() {
  register_nav_menus(
      array(
          'tours' => 'tours',
          'attractions' => 'attractions'
      )
  );
}
add_action('after_setup_theme', 'nom_du_theme_registrer_menus');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
// add feature image
//add_theme_support('post-thumnails');
add_theme_support('post-thumbnails');