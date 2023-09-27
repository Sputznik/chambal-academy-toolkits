<?php

class CBAT_CT_CPT extends CBAT_BASE {

  function __construct(){

    /* CREATING CPT USING ORBIT BUNDLE PLUGIN AS DEPENDENCY */
    add_filter( 'orbit_post_type_vars', function( $post_types ){
      $post_types['ct'] = array(
        'slug' 		=> 'ct',
        'labels'	=> array(
          'name' 					=> 'Toolkits',
          'singular_name' => 'Toolkit',
          'add_new'       => 'Add New Toolkit',
          'edit_item'			=> 'Edit Toolkit',
          'add_new_item'  => 'Add New Toolkit',
          'all_items'     => 'All Toolkits'
        ),
        'menu_icon'	=>	'dashicons-book-alt',
        'public'		=> true,
        'supports'	=> array( 'title', 'editor', 'thumbnail' )
      );
      return $post_types;
    } );

    /* CREATING METAFIELD USING ORBIT BUNDLE PLUGIN AS DEPENDENCY */
    add_filter( 'orbit_meta_box_vars', function( $meta_box ){
    	$meta_box['ct'] = array(
    		array(
    			'id'			=> 'ct-meta-field',
    			'title'		=> 'Additional Information',
    			'fields'	=> array(
    				'ct_user_role' => array(
    					'type' => 'dropdown',
    					'text' => 'Grant Permission',
    					'options' => array(
                'ds_learner'  => 'Learner'
              ),
              'help' => 'Allow this user-role to access the toolkit directly',
    				)
    			)
    		)
    	);
    	return $meta_box;
    } );

    // ADD CAPABILITIES IN POST_TYPE CT
    add_filter('register_post_type_args', function( $args, $post_type ){
      if( $post_type === 'ct' ){
        $args['map_meta_cap']    = true;
        $args['capability_type'] = 'ct';
      }

      return $args;

    }, 10, 2 );

    add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );

    add_action( 'save_post', array( $this, 'save_meta_box' ), 10, 1 );

    add_action( 'wp_ajax_products_json', array( $this, 'get_products_json' ) );

  }

  function add_meta_box(){
    add_meta_box( 'cbat-settings', 'Additional Settings', array( $this, 'render_meta_box' ), 'ct', 'normal', 'low' );
  }

  function render_meta_box( $post ){
    wp_nonce_field( 'cbat_metabox', 'cbat_metabox_nonce' );

    // GET LINKED PRODUCT ID
    $linked_product_id = get_post_meta( $post->ID, 'linked_product_id', true );

    $field = array(
      'label' => 'Select Linked Product',
      'slug'	=> 'linked_product_id',
      'value'	=> $linked_product_id,
      'placeholder' => 'Search Product',
      'autocomplete_value'	=> $linked_product_id ? get_the_title( $linked_product_id ) : "",
      'url'	=> admin_url('admin-ajax.php?action=products_json')
    );

    echo "<div data-behaviour='cbat-autocomplete' data-field='".wp_json_encode( $field )."'></div>";

  }

  function get_products_json(){
    global $wpdb;
    $search = $_GET['term'];
    $products = array();
    $query = "SELECT ID,post_title FROM ".$wpdb->posts." WHERE post_type='product' AND post_title LIKE '%".$search."%' ORDER BY post_title ASC LIMIT 0,10";

    foreach( $wpdb->get_results( $query ) as $row ){
      array_push( $products, array( 'id'=> $row->ID, 'value'=> $row->post_title ) );
    }

    wp_send_json( $products );
  }

  function save_meta_box( $post_id ){

    // RETURN IF NONCE IS NOT SET
		if ( ! isset( $_POST['cbat_metabox_nonce'] ) ) return;

		// RETURN IF NONCE IS NOT VALID
    if ( ! wp_verify_nonce( $_POST['cbat_metabox_nonce'], 'cbat_metabox' ) ) return;

		// RETURN IF IT'S AN AUTOSAVE
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    // UPDATE METAFIELD
    if( isset( $_POST['linked_product_id'] ) && $_POST['linked_product_id'] ){
      update_post_meta( $post_id, 'linked_product_id', $_POST['linked_product_id'] );
    }

  }

}

CBAT_CT_CPT::getInstance();
