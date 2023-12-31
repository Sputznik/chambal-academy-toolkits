<?php

/*  CONSTANTS */
if( !defined( 'CBAT_THEME_VERSION' ) ) {
  define( 'CBAT_THEME_VERSION', time() );
}

if( !defined( 'CBAT_THEME_URI' ) ) {
  define( 'CBAT_THEME_URI', get_stylesheet_directory_uri() );
}

if( !defined( 'CBAT_ASSET_IMAGES' ) ) {
  define( 'CBAT_ASSET_IMAGES', get_stylesheet_directory_uri().'/assets/images' );
}

if( !defined( 'CBAT_SITE_URL' ) ) {
  define( 'CBAT_SITE_URL', get_bloginfo('url') );
}

// INCLUDE FILES
$inc_files = array(
  'lib/class-cbat-base.php',
  'lib/sp-bs-five-navwalker.php',
  'lib/class-cbat-theme.php',
  'lib/class-cbat-ct-cpt.php',
  'lib/class-cbat-toolkits-access.php',
  'lib/class-cbat-woocommerce.php',
  'lib/class-cbat-user-profile.php'
);

foreach( $inc_files as $inc_file ){ require_once( $inc_file ); }
