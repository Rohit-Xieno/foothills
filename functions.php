<?php
function nd_dosth_theme_setup() {

// Add <title> tag support
add_theme_support( 'title-tag' );

// Add custom-logo support
add_theme_support( 'custom-logo' );

}
add_action( 'after_setup_theme', 'nd_dosth_theme_setup');

// menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Main Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// options page acf
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
      'page_title'    => 'Theme General Settings',
      'menu_title'    => 'Globals',
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Tone Settings',
      'menu_title'    => 'Tone',
      'parent_slug'   => 'theme-general-settings',
  ));

}

add_theme_support( 'post-thumbnails' );

// enqueue custom js
function one_scripts(){
  $theme_version = wp_get_theme()->get('Version');

  wp_enqueue_script( 'jquery-js', get_theme_file_uri( '/assets/js/jquery.min.js' ), array(), $theme_version, true );
  wp_enqueue_script( 'custom-js', get_theme_file_uri( '/assets/js/custom.js' ), array(), $theme_version, true );
  wp_enqueue_script( 'select2-js', get_theme_file_uri( '/assets/js/select2.min.js' ), array(), $theme_version, true );
}

add_action( 'wp_enqueue_scripts', 'one_scripts' );


// Custom Breadcrumb Navigation Function
function custom_breadcrumb() {
  global $post;
  if ( ! is_home() ) {
  echo '<a href="' . site_url() . '">Home</a> / ';
  if ( is_category() || is_single() ) {
  the_category( ' / ' );
  if ( is_single() ) {
  echo '  ';
  the_title();
  }
  } elseif ( is_page() ) {
  if ( $post->post_parent ) {
  $anc   = get_post_ancestors( $post->ID );
  $title = get_the_title();
  foreach ( $anc as $ancestor ) {
  $output = '<a href="' . get_permalink( $ancestor ) . '" title="' . get_the_title( $ancestor ) . '">' . get_the_title( $ancestor ) . '</a> / ';
  }
  echo $output;
  echo $title;
  } else {
  echo '<span> ' . get_the_title() . '</span>';
  }
  }
  }
 }


