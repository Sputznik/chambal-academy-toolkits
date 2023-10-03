<?php

// CHECK IF CLASS EXISTS
if( ! class_exists( 'SP_BS_Five_Navwalker' ) ) {

  class SP_BS_Five_Navwalker extends Walker_Nav_Menu {

    /**
		 * Start Level.
		 *
		 * @see Walker::start_lvl()
		 * @since 3.0.0
		 *
     *
		 * @access public
		 * @param mixed $output Passed by reference. Used to append additional content.
		 * @param int   $depth (default: 0) Depth of page. Used for padding.
		 * @param array $args (default: array()) Arguments.
		 * @return void
		 */
    function start_lvl( &$output, $depth = 0, $args = array() ){
      $indent  = str_repeat("\t", $depth);
      $submenu = ( $depth > 0 ) ? ' sub-menu' : '';
      $output  .= "\n$indent<ul class=\"dropdown-menu$submenu\">\n";
    }

    /**
		 * Start El.
		 *
		 * @see Walker::start_el()
		 * @since 5.0.2
		 *
     * Handles the generation of li, a, span tags
		 * @access public
		 * @param mixed $output Passed by reference. Used to append additional content.
		 * @param mixed $item Menu item data object.
		 * @param int   $depth (default: 0) Depth of menu item. Used for padding.
		 * @param array $args (default: array()) Arguments.
		 * @param int   $id (default: 0) Menu item ID.
		 * @return void
		 */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){
      $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

      /**
			 * Dividers, Headers or Disabled
			 * =============================
			 * Check whether the item is a Divider, Header, Disabled or regular menu item.
			 * To prevent errors we use the strcasecmp() function for a comparison that is not case sensitive.
			 *  The strcasecmp() function returns 0 if the strings are equal.
			 */
			if( 0 === strcasecmp( $item->attr_title, 'divider' ) && 1 === $depth ){
				$output .= $indent . '<li role="presentation"><hr class="dropdown-divider">';
			} elseif( 0 === strcasecmp( $item->title, 'divider' ) && 1 === $depth ){
				$output .= $indent . '<li role="presentation"><hr class="dropdown-divider">';
			} elseif( 0 === strcasecmp( $item->attr_title, 'dropdown-header' ) && 1 === $depth ){
				$output .= $indent . '<li role="presentation" class="dropdown-header">' . esc_attr( $item->title );
			} elseif( 0 === strcasecmp( $item->attr_title, 'disabled' ) ){
				$output .= $indent . '<li role="presentation" class="nav-item"><a href="#" class="nav-link disabled" tabindex="-1" aria-disabled="true">' . esc_attr( $item->title ) . '</a>';
			} else{
        $class_names = '';
        $classes     = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[]   = ( isset( $args->walker->has_children ) && $args->walker->has_children ) ? 'dropdown' : '';
        $classes[]   = 'menu-item-' . $item->ID;
        $classes[]   = ( $depth === 0 ) ? 'nav-item' : '';
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
				$id          = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args );
				$id          = $id ? ' id="' . esc_attr( $id ) . '"' : '';
        $output     .= $indent . '<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"' . $id . $class_names . '>';


        // ANCHOR TAG ATTRIBUTES
        $atts            = array();
        $is_current_page = in_array( 'current-menu-item', $classes, true );
        $active_class    = $is_current_page ? ' active': '';

				if( empty( $item->attr_title ) ){
					$atts['title'] = ! empty( $item->title ) ? strip_tags( $item->title ) : '';
				} else{
					$atts['title'] = $item->attr_title;
				}

				$atts['target'] = ! empty( $item->target ) ? $item->target : '';
				$atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
        $atts['href']   = ! empty( $item->url ) ? $item->url : '';
        $atts['class']  = ( $depth > 0 ) ? 'dropdown-item'.$active_class : 'nav-link'.$active_class;
        $atts['aria-current'] = $is_current_page ? 'page' : '';

        // If item has_children add atts to a.
        if ( isset( $args->walker->has_children ) && $args->walker->has_children  && 0 === $depth ) {
					$atts['class']          = $atts['class'].' dropdown-toggle';
					$atts['aria-haspopup']  = 'true';
          // $atts['data-bs-toggle'] = "dropdown";
				}

				$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes      = ''; // ANCHOR TAG ATTRIBUTES
        $icon_attributes = ''; // ANCHOR TAG ATTRIBUTES WITH ICON INSIDE

        // ITERATE THROUGH THE ATTRIBUTES AND REMOVE EMPTY ATTRIBUTES
        foreach( $atts as $attr => $value ){
					if( ! empty( $value ) ){
						$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
						$attributes .= ' ' . $attr . '="' . $value . '"';

            // COPY ALL THE ATTRIBUTES EXCEPT *title* IF THE ITEM ATTRIBUTE TITLE IS fa / glyphicon
            if( 'title' != $attr ){
							$icon_attributes .= ' ' . $attr . '="' . $value . '"';
						}
					}
				}

				$item_output = isset( $args->before ) ? $args->before : '';

        /*
				 * Glyphicons / Font-Awesome
				 * ===========
				 * Since the the menu item is NOT a Divider or Header we check to see
				 * if there is a value in the attr_title property. If the attr_title
				 * property is NOT null we use it as the class name for the icon.
				 */
				if( ! empty( $item->attr_title ) ){
					$pos = strpos( esc_attr( $item->attr_title ), 'glyphicon' );
					if( false !== $pos ){
						$item_output .= '<a' . $icon_attributes . ' title="' . esc_attr( $item->title ) . '"><span class="glyphicon ' . esc_attr( $item->attr_title ) . '" aria-hidden="true"></span>&nbsp;';
					} else{
						$item_output .= '<a' . $icon_attributes . ' title="' . esc_attr( $item->title ) . '"><i class="fa ' . esc_attr( $item->attr_title ) . '" aria-hidden="true"></i>&nbsp;';
					}
				} else{
					$item_output .= '<a' . $attributes . '>';
				}
				$item_output .= isset( $args->link_before ) ? $args->link_before : '';
				$item_output .= apply_filters( 'the_title', $item->title, $item->ID );
				$item_output .= isset( $args->link_after ) ? $args->link_after: '';
        $item_output .= '</a>';
        $item_output .= isset( $args->after ) ? $args->after : '';
				$output      .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

      } // end else

    }

    /**
     * Menu Fallback
     * =============
     * If this function is assigned to the wp_nav_menu's fallback_cb variable
     * and a menu has not been assigned to the theme location in the WordPress
     * menu manager the function with display nothing to a non-logged in user,
     * and will add a link to the WordPress menu manager if logged in as an admin.
     *
     * @param array $args passed from the wp_nav_menu function.
     */
    public static function fallback( $args ){

      if( current_user_can( 'edit_theme_options' ) ){

        /* Get Arguments. */
        $container       = $args['container'];
        $container_id    = $args['container_id'];
        $container_class = $args['container_class'];
        $menu_class      = $args['menu_class'];
        $menu_id         = $args['menu_id'];

        if( $container ){
          echo '<' . esc_attr( $container );
          if( $container_id ){
            echo ' id="' . esc_attr( $container_id ) . '"';
          }
          if( $container_class ){
            echo ' class="' . esc_attr( $container_class ) . '"';
          }
          echo '>';
        }
        echo '<ul';
        if( $menu_id ){
          echo ' id="' . esc_attr( $menu_id ) . '"';
        }
        if( $menu_class ){
          echo ' class="' . esc_attr( $menu_class ) . '"';
        }
        echo '>';
        echo '<li><a href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '" title="Add a menu">' . esc_attr( 'Add a menu', '' ) . '</a></li>';
        echo '</ul>';
        if( $container ){
          echo '</' . esc_attr( $container ) . '>';
        }

      } //end edit_theme_options

    }

  } // end class

}
