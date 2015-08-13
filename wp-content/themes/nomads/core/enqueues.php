<?php

  // Styles
  function nomads_styles() {
    if ( !is_admin() ) {
      wp_enqueue_style('nomads', get_stylesheet_uri());
      wp_enqueue_style('flickity-css', get_template_directory_uri() . '/dist/vendor/flickity.min.css');
      // Development
      wp_enqueue_style('dist', get_template_directory_uri() . '/dist/styles/main.css');
      // Production
      //wp_enqueue_style('dist', get_template_directory_uri() . 'dist/styles/main.min.css');

    }
  }
  add_action( 'wp_enqueue_scripts', nomads_styles() );



  // Scripts
  function nomads_scripts() {
    if ( !is_admin() ) {
      wp_enqueue_script( 'jquery' );
      wp_enqueue_script( 'flickity-js', get_template_directory_uri() . '/dist/vendor/flickity.pkgd.min.js', array( 'jquery'), null, true );
      wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/dist/vendor/isotope.pkgd.min.js', array( 'jquery'), null, true );

      wp_enqueue_script( 'nomads', get_template_directory_uri() . '/dist/scripts/main.js', array( 'jquery', 'flickity-js', 'isotope-js' ), null, true );

    }
  }
  add_action( 'wp_enqueue_scripts', nomads_scripts() );



 ?>
