<?php

class CBAT_Woocommerce extends CBAT_BASE {

  private $is_woocommerce_active;

  function __construct(){
    $this->is_woocommerce_active = class_exists( 'woocommerce' );

    // SKIP CART PAGE
    add_filter('woocommerce_add_to_cart_redirect', function( $redirect_url, $product ){
      return wc_get_checkout_url();
    }, 10, 2 );

  }

  function is_user_purchased_product( $product_id, $user_id ){
    return $this->is_woocommerce_active ? wc_customer_bought_product( '', $user_id, $product_id ) : false;
  }

}

CBAT_Woocommerce::getInstance();
