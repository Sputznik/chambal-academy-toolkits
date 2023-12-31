<?php

class CBAT_TOOLKITS_ACCESS extends CBAT_BASE {

  private $user_products_page_url;

  function __construct(){

    $this->user_products_page_url = home_url('/purchased-products');

    add_action( 'template_redirect', array( $this, 'template_redirect' ) );
    add_filter( 'woocommerce_login_redirect', array( $this, 'woocommerce_login_redirect' ), 9999, 2 );

  }

  function template_redirect(){
    global $wp_query;
    // CHECK IF THE CURRENT POST_TYPE_SLUG IS *ct* AND IF IT'S NOT THE ARCHIVE PAGE
    if( 'ct' === $wp_query->get('post_type') && !is_post_type_archive('ct') ){
      $this->redirect_to_login( $wp_query );
    }

  }

  function redirect_to_login( $wp_query ){

    // IF THE USER IS NOT LOGGED-IN REDIRECT THE USER TO LOGIN PAGE, ONLY IF THE ACCESSED TOOLKIT IS VALID
    if( !is_user_logged_in() ){

      // GET TOOLKIT SLUG FROM THE QUERY OBJECT
      $toolkit_slug = $wp_query->get('name');

      // RETURN IF THE POST SLUG IS NOT PRESENT
      if( !$toolkit_slug ) return;

      // GET TOOLKIT OBJECT BY SLUG
      $toolkit_obj = get_page_by_path( $toolkit_slug, OBJECT, $wp_query->get('post_type') );

      // RETURN IF THE TOOLKIT DOES NOT EXIST IN THE BACKEND
      if( !$toolkit_obj ) return;

      // RETURN IF TOOLKIT IS NOT PRIVATE
      if( $toolkit_obj->post_status  !== 'private' ) return;

      // REDIRECT TO LOGIN PAGE
      wp_safe_redirect( home_url('/my-account?redirect_to='.urlencode( get_permalink( $toolkit_obj->ID ) ) ) );

      exit;

    }
    else{
      // GET LOGGED-IN USER
      $current_user = wp_get_current_user();

      // RETURN IF THE LOGGED-IN USER IS AN ADMINISTRATOR
      if( $this->has_user_role( $current_user ) ) return;

      // RETURN IF THE TOOLKIT OBJECT IS NOT PRESENT IN THE QUERY
      if( !isset( $wp_query->post ) ) return;

      $toolkit_obj = $wp_query->post ;

      // RETURN IF THE LOGGED-IN USER IS A FREEMIUM USER
      if( $this->is_freemium_user( $toolkit_obj->ID, $current_user ) ) return;

      // RETURN IF TOOLKIT IS NOT PRIVATE
      if( $toolkit_obj->post_status  !== 'private' ) return;

      // RETURN IF USER IS ALLOWED TO ACCESS THE TOOLKIT
      if( $this->is_user_allowed( $toolkit_obj->ID, $current_user ) ) return;

      // ELSE REDIRECT TO USER PRODUCTS PAGE
      wp_safe_redirect( $this->user_products_page_url );

      exit;

    }

  }

  // INVOKED AFTER SUCCESSFULL LOGIN
  function woocommerce_login_redirect( $redirect, $user ){

    // REDIRECT TO THE DEFAULT / GIVEN LOCATION IF THE LOGGED-IN USER IS AN ADMINISTRATOR
    if( $this->has_user_role( $user ) ) return $redirect;

    // GET TOOLKIT ID FROM THE REDIRECT PARAMETER
    parse_str( parse_url( $redirect, PHP_URL_QUERY ), $query_params );
    $toolkit_id = ( isset( $query_params['p'] ) && $query_params['p'] ) ? $query_params['p'] : 0;

    // RETURN IF TOOLKIT-ID / POST_TYPE IS NOT PRESENT IN THE REDIRECT-URL
    if( !isset( $query_params['post_type'] ) && !$query_params['post_type'] === 'ct' && !$toolkit_id ) return $redirect;

    // GET TOOLKIT STATUS
    $toolkit_status = get_post_status( $toolkit_id );

    // RETURN IF TOOLKIT DOEST NOT EXIST
    if( !$toolkit_status ) return $redirect;

    // REDIRECT TO THE DEFAULT / GIVEN LOCATION FOR A FREEMIUM USER
    if( $this->is_freemium_user( $toolkit_id, $user ) ) return $redirect;

    // RETURN IF TOOLKIT IS NOT PRIVATE
    if( $toolkit_status !== 'private' ) return $redirect;

    return $this->is_user_allowed( $toolkit_id, $user ) ? $redirect : $this->user_products_page_url;
  }

  // CHECK IF THE USER IS ALLOWED TO ACCESS THE TOOLKIT
  function is_user_allowed( $toolkit_id, $user ){

    $cbat_woocommerce = CBAT_WOOCOMMERCE::getInstance();

    // GET THE TOOLKIT PRODUCT METAFIELD
    $linked_product_id = get_post_meta( $toolkit_id, 'linked_product_id', true );

    if( $linked_product_id && $cbat_woocommerce->is_user_purchased_product( $linked_product_id, $user->ID ) ) return true;

    return false;
  }

  // CHECK IF A USER IS ASSIGNED A ROLE
  function has_user_role( $user, $role = 'administrator' ){
    return ( isset( $user->roles ) && is_array( $user->roles ) && in_array( $role, $user->roles ) );
  }

  // CHECKS IF THE USER HAS FREE ACCESS TO A SPECIFIC TOOLKIT BASED ON USER_ROLE
  function is_freemium_user( $toolkit_id, $user ){
    // GET THE TOOLKIT USER ROLE METAFIELD
    $user_role = get_post_meta( $toolkit_id, 'ct_user_role', true );

    // CHECK IF USER ROLE IS SAME AS ROLE IN TOOLKIT META
    if( $user_role &&  $this->has_user_role( $user, $user_role ) ) return true;

    return false;

  }

}

CBAT_TOOLKITS_ACCESS::getInstance();
