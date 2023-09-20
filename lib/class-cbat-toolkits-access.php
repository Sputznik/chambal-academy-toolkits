<?php

class CBAT_Toolkits_Access extends CBAT_BASE {

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
    if( !isset( $query_params['post_type'] ) && !$query_params['post_type'] === 'ct' && !$toolkit_id ) return;

    // GET TOOLKIT STATUS
    $toolkit_status = get_post_status( $toolkit_id );

    // RETURN IF TOOLKIT DOEST NOT EXIST
    if( !$toolkit_status && $toolkit_status !== 'private' ) return;


    return $this->is_user_allowed( $toolkit_id, $user ) ? $redirect : $this->user_products_page_url;
  }

  // CHECK IF THE USER IS ALLOWED TO ACCESS THE TOOLKIT
  function is_user_allowed( $toolkit_id, $user ){

    // GET THE TOOLKIT PRODUCT METAFIELD
    $linked_product_id = get_post_meta( $toolkit_id, 'linked_product_id', true );

    if( $linked_product_id && $this->is_user_purchased_product( $linked_product_id, $user->ID ) ) return true;

    return false;
  }

  // CHECK IF A USER IS ASSIGNED A ROLE
  function has_user_role( $user, $role = 'administrator' ){
    return ( isset( $user->roles ) && is_array( $user->roles ) && in_array( $role, $user->roles ) );
  }

  function is_user_purchased_product( $product_id, $user_id ){
    return class_exists( 'woocommerce' ) ? wc_customer_bought_product( '', $user_id, $product_id ) : false;
  }

}

CBAT_Toolkits_Access::getInstance();
