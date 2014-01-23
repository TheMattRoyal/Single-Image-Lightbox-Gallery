<?php

/*
Plugin Name: Single Image Lightbox Gallery
Description: One image per gallery shows up on page and the images in the gallery only display in lightbox once image is clicked.
Author: Matt Royal
Author URI: http://mattroyal.co.za
Version: 1.0
*/

// Register and Enqueue Theme Scripts
add_action( 'wp_enqueue_scripts', 'mattroyal_load_scripts' );

function mattroyal_load_scripts() {
  wp_register_script( 'mattroyal_fancyboxjs', plugins_url( 'assets/fancybox/jquery.fancybox.js' , __FILE__ ),array('jquery'), '1.0', false );
  wp_register_script( 'mattroyal_fancybox-init-js', plugins_url( 'assets/fancybox-init.js' , __FILE__ ),array('mattroyal_fancyboxjs'), '1.0', false );
  wp_enqueue_script( 'mattroyal_fancyboxjs' );
  wp_enqueue_script( 'mattroyal_fancybox-init-js' );

  wp_register_style( 'mattrotal_fancyboxcss', plugins_url( 'assets/fancybox/jquery.fancybox.css' , __FILE__ ), '', '', 'all' );
  wp_enqueue_style( 'mattrotal_fancyboxcss' );  
}


// include
require_once( "assets/create_gallery_acrhive.php" );
require_once( "assets/post-type.php" );
require_once( "assets/shortcode.php" );

 
?>