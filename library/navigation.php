<?php
/**
 * Register Menus
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

register_nav_menus(
	array(
		'top-bar-r'  => esc_html__( 'Right Top Bar', 'foundationpress' ),
		'footer-bar-r'  => esc_html__( 'Right Footer Bar', 'foundationpress' ),
		'mobile-nav' => esc_html__( 'Mobile', 'foundationpress' ),
		'primary-menu'  => esc_html__( 'Primary Menu', 'foundationpress' ),
	)
);


/**
 * Desktop navigation - right top bar
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */

if ( ! function_exists( 'foundationpress_top_bar_r' ) ) {
	function foundationpress_top_bar_r() {
		wp_nav_menu(
			array(
				'container'      => false,
				'menu_class'     => 'dropdown menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s desktop-menu" data-dropdown-menu>%3$s</ul>',
				'theme_location' => 'top-bar-r',
				'depth'          => 3,
				'fallback_cb'    => false,
				'walker'         => new Foundationpress_Top_Bar_Walker(),
			)
		);
	}
}

if ( ! function_exists( 'foundationpress_footer_bar_r' ) ) {
	function foundationpress_footer_bar_r() {
		wp_nav_menu(
			array(
				'container'      => false,
				'menu_class'     => 'dropdown menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s desktop-menu" data-dropdown-menu>%3$s</ul>',
				'theme_location' => 'footer-bar-r',
				'depth'          => 3,
				'fallback_cb'    => false,
				'walker'         => new Foundationpress_Top_Bar_Walker(),
			)
		);
	}
}

/* % = printf format
   %2$s means replace token with second parameter, treat it like a string; same as {$day}                 */
if ( ! function_exists( 'foundationpress_top_bar_mega' ) ) {
	function foundationpress_top_bar_mega() {
		wp_nav_menu(
			array(
				'container'      => false,
				'menu_class'     => 'dropdown menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s desktop-menu" data-dropdown-menu>%3$s</ul>',
				'theme_location' => 'primary-menu',
				'depth'          => 3,
				'fallback_cb'    => false,
				'walker'         => new Foundationpress_Mega_Menu_Walker(),
			)
		);
	}
}
/**
 * Mobile navigation - topbar (default) or offcanvas
 */
if ( ! function_exists( 'foundationpress_mobile_nav' ) ) {
	function foundationpress_mobile_nav() {
		wp_nav_menu(
			array(
				'container'      => false,                         // Remove nav container
				'menu'           => __( 'mobile-nav', 'foundationpress' ),
				'menu_class'     => 'vertical menu',
				'theme_location' => 'mobile-nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" data-accordion-menu data-submenu-toggle="true">%3$s</ul>',
				'fallback_cb'    => false,
				'walker'         => new Foundationpress_Mobile_Walker(),
			)
		);
	}
}


/**
 * Add support for buttons in the top-bar menu:
 * 1) In WordPress admin, go to Apperance -> Menus.
 * 2) Click 'Screen Options' from the top panel and enable 'CSS CLasses' and 'Link Relationship (XFN)'
 * 3) On your menu item, type 'has-form' in the CSS-classes field. Type 'button' in the XFN field
 * 4) Save Menu. Your menu item will now appear as a button in your top-menu
*/
if ( ! function_exists( 'foundationpress_add_menuclass' ) ) {
	function foundationpress_add_menuclass( $ulclass ) {
		$find    = array( '/<a rel="button"/', '/<a title=".*?" rel="button"/' );
		$replace = array( '<a rel="button" class="button"', '<a rel="button" class="button"' );

		return preg_replace( $find, $replace, $ulclass, 1 );
	}
	add_filter( 'wp_nav_menu', 'foundationpress_add_menuclass' );
}


//add_filter( 'wp_nav_menu_objects', array( $this, 'add_widgets_to_menu' ), apply_filters("megamenu_wp_nav_menu_objects_priority", 10), 2 );
//
function menu_anchor_attributes ( $atts, $item, $args ) {
    $atts['data-menuanchor'] = ( ! empty( $item->attr_title ) ) ? $item->attr_title : 'test';
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'menu_anchor_attributes', 10, 3 );

function menu_hirechy_creater($location) {
 
    $menu_locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($menu_locations[$location]);
 
    $menu_items = wp_get_nav_menu_items($menu->term_id);
 
 
    $new_menu_array = array();
    foreach ((array) $menu_items as $key => $menu_item) {
        $new_menu_array[$menu_item->menu_item_parent][] = $menu_item;
    }
 
    $new_menu_array1 = array();
    foreach ((array) $menu_items as $key => $menu_item) {
        if (isset($new_menu_array[$menu_item->ID])) {
            $menu_item->sub = $new_menu_array[$menu_item->ID];
            if($menu_item->menu_item_parent == 0) {
                $new_menu_array1[] = $menu_item;                
            }
        }
    }
    
    $menu_tree = array_splice($new_menu_array[0],0,15,$new_menu_array1);
    return $menu_tree;
}
//add_filter( 'wp_get_nav_menu_object', 'override_wp_get_nav_menu_object', 10, 2 );
// function override_wp_get_nav_menu_object( $menu_obj, $menu ) {

//     if ( ! is_object( $menu_obj ) ) {
//         $menu_obj = (object) array( 'name' => '' );
//     }

//     return $menu_obj;
// }

//add_filter( 'wp_nav_menu_args', function( $args ) {
 //   if ( isset( $args['walker'] ) && is_string( $args['walker'] ) && class_exists( $args['walker'] ) ) {
  //      $args['walker'] = new $args['walker'];
  //  }
  //  return $args;
//}, 1001 ); // 1001 because \WP_Customize_Nav_Menus::filter_wp_nav_menu_args() runs at 1000.