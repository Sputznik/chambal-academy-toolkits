<?php

class CBAT_USER_PROFILE extends CBAT_BASE {
  function __construct() {
    add_action( 'wp_ajax_cbat_add_user_roles', array( $this, 'add_user_roles' ) ); // ADD CUSTOM USER ROLES
  }

  function add_user_roles(){
    $capabilities = get_role( 'subscriber' )->capabilities; // GET SUBSCRIBER CAPABILITIES

    $roles = array(
      'ct_learner'  =>  'Learner'
    );

    if( $capabilities && count( $capabilities ) > 0 ){
      foreach ( $roles as $role => $name ){
        // CHECK IF ROLE ALREADY EXISTS
        if( !$GLOBALS['wp_roles']->is_role( $role ) ){
          $is_role_added = add_role( $role, $name, $capabilities ); // ADDS A ROLE IF IT DOES NOT EXIST

          if( $is_role_added ){
            echo "Role: <strong>$name</strong> has been created <br/>";
          } else{
            echo "Role: <strong>$name</strong> could not be created <br/>";
          }
        } else {
          echo "Role: <strong>$name</strong> has been already created <br/>";
        }
      }
    }

    wp_die();
  }

}

CBAT_USER_PROFILE::getInstance();
