<?php

/**
 * BOOTSTRAPS THEME SPECIFIC FUNCTIONALITIES
 */
class CBAT_THEME {

  public function __construct() {

    add_action( 'wp_enqueue_scripts', array( $this, 'assets' ) );  // LOAD ASSETS
    add_action( 'admin_enqueue_scripts', array( $this, 'admin_assets' ) );  // LOAD ADMIN ASSETS

  }

  function assets() {
    // ENQUEUE STYLES
  	wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', false, null );
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', false, null );
    wp_enqueue_style('own-carousel', CBAT_THEME_URI.'/assets/owlcarousel/assets/owl.carousel.min.css', false, null );
    wp_enqueue_style('owl-theme', CBAT_THEME_URI.'/assets/owlcarousel/assets/owl.theme.default.min.css', false, null );
    wp_enqueue_style('cbat-css', CBAT_THEME_URI.'/assets/css/main.css', array('sp-core-style'), CBAT_THEME_VERSION );

    // ENQUEUE SCRIPTS
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'owl-carousel', CBAT_THEME_URI.'/assets/owlcarousel/owl.carousel.js', array('jquery'), null, true );
    wp_enqueue_script( 'bs-dropdown-ml', CBAT_THEME_URI.'/assets/js/bootstrap-dropdown-ml-hack.js', array('jquery'), null, true );
  }

  function admin_assets( $hook ){
    global $post;

    wp_enqueue_style( 'cbat-admin-css', CBAT_THEME_URI.'/assets/css/admin.css', array(), CBAT_THEME_VERSION );

    if( ( $hook === 'post-new.php' || $hook === 'post.php' ) && 'ct' === $post->post_type ){
      wp_enqueue_script( 'cbat-autocomplete', CBAT_THEME_URI.'/assets/js/autocomplete.js', array( 'jquery', 'jquery-ui-autocomplete' ), CBAT_THEME_VERSION, true );
    }

  }

}

new CBAT_THEME;
