<?php
/**
 * Customize the output of menus for Foundation mega menu
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 *
 * 
 * The key principle here is that we always have separate options record for each WP theme. Such *options have the same name structure: theme_mods_{your-theme-name}.
 *
*/
/**
 * Big thanks to Brett Mason (https://github.com/brettsmason) for the intial top bar walker 
 * Mega Menu walker based on Foundation 6 Mega Menu in building blocks
 */

// if ( ! defined( 'ABSPATH' ) ) {
//     exit; // disable direct access
// }

if( ! class_exists( 'Foundationpress_Mega_Menu_Walker' ) ) :

/**
 * @package WordPress
 * @since 1.0.0
 * @uses Mega Menu Walker
 *
 *
 */
class Foundationpress_Mega_Menu_Walker extends Walker_Nav_Menu {

    public $menuparent;
    public $submenu;
    public $parent_id;
    public $locations;
    public $menu;
    public $menuitems;
    public $menu_name;
    public $current_submenu_id;
    public $previous_submenu_id;
    public $tree_type = array( 'post_type', 'taxonomy', 'custom' );
    public $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

    public function __construct()
    {   
        $this->menuparent = 0;
        $this->submenu = false;
        $this->parent_id = 0;
        $this->locations = array();
        $this->menu = array();
        $this->current_submenu_id = 0;
        $this->previous_submenu_id = 0;
    }
 
    public function start_lvl(&$output, $depth = 0, $args = array())
    { 
        
    //$indent  = str_repeat( "\t", $depth );
          // $output .= "\n$indent<ul class=\"dropdown menu vertical \" data-toggle>\n";


        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
         $indent = str_repeat( $t, $depth ); // indent the number of spaces of the depth
       // // Default class.
       //  // Default class.
       //  $classes = array( 'sub-menu' );

       //  /*  from mega menu example */
       //  $outputSubmenu = ($depth > 0) ? ' sub-menu' : '';

       //  if ( 0 == $depth ) {
       //      return; // do not output anything for parent element
       //  }
       //  $this->submenu = true;



        /**
         * Filters the CSS class(es) applied to a menu list element.
         *
         * @since 4.8.0
         *
         * @param array    $classes The CSS classes that are applied to the menu `<ul>` element.
         * @param stdClass $args    An object of `wp_nav_menu()` arguments.
         * @param int      $depth   Depth of menu item. Used for padding.
         */
        // $class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
        // $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . 'dropdown menu vertical"' : '';

        // $output .= "{$n}{$indent}<ul$class_names data-toggle>{$n}";

      //  $output .= "\n$indent<ul class=\"dropdown menu vertical \" data-toggle>\n";
       // $output .= "\n$indent<ul class=\"dropdown menu vertical \" data-toggle>\n";
       $output .= "{$n}{$indent}<ul class=\"dropdown menu vertical\" data-toggle>\n";

         
           
  		//$output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\" > \n";
  		
// item does not have a parent so menu_item_parent equals 0 (false)
	 //$this->parent_id = $this->menuitems->ID;
	//var_dump($this->menuitems);
       // if ($this->isMegaMenu != 0) {
        ///	$this->submenu = true;
        	//$this->parent_id = $this->menuitems->ID;
        	//var_dump($this->menuitems);
           // $output .= "<div class=\"grid-x\"><div class=\"cell small-12 medium-4\"><li><ul>\n";
       // }
    }
    public function end_lvl(&$output, $depth = 0, $args = array())
    {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat( $t, $depth );
        $output .= "$indent</ul>{$n}";


        // if ($this->isMegaMenu != 0) {
          //  $output .= "</ul></li></div>\n";
        // }
       


    }

     public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
     {
     if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
         
//var_dump($item->classes);
//mega-menu-parent
//mega-menu-child  "menu-item-has-children"

//if (array_search('mega-menu-parent', $classes) !== false) {
 //         $this->isMegaMenu = $item->ID;
 //       }
// array(9) { 
//     [0]=> string(0) "" 
//     [1]=> string(9) "menu-item" 
//     [2]=> string(24) "menu-item-type-post_type" 
//     [3]=> string(21) "menu-item-object-page" 
//     [4]=> string(14) "menu-item-home" 
//     [5]=> string(17) "current-menu-item" 
//     [6]=> string(9) "page_item" 
//     [7]=> string(12) "page-item-31" 
//     [8]=> string(17) "current_page_item" 
// } 
// array(5) { 
//     [0]=> string(16) "mega-menu-parent" 
//     [1]=> string(9) "menu-item" 
//     [2]=> string(24) "menu-item-type-post_type" 
//     [3]=> string(21) "menu-item-object-page" 
//     [4]=> string(22) "menu-item-has-children" 
// } 
// array(4) { 
//     [0]=> string(15) "mega-menu-child" 
//     [1]=> string(9) "menu-item" 
//     [2]=> string(24) "menu-item-type-post_type" 
//     [3]=> string(21) "menu-item-object-page" 
// } 
// array(4) { 
//     [0]=> string(15) "mega-menu-child" 
//     [1]=> string(9) "menu-item" 
//     [2]=> string(24) "menu-item-type-post_type" 
//     [3]=> string(21) "menu-item-object-page" 
// } 
// array(4) { 
//     [0]=> string(15) "mega-menu-child" 
//     [1]=> string(9) "menu-item" 
//     [2]=> string(24) "menu-item-type-post_type" 
//     [3]=> string(21) "menu-item-object-page" 
// } 
// array(5) { 
//     [0]=> string(0) "" 
//     [1]=> string(9) "menu-item" 
//     [2]=> string(24) "menu-item-type-post_type" 
//     [3]=> string(21) "menu-item-object-page" 
//     [4]=> string(22) "menu-item-has-children" 
// } 

       

    //     $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    //     $classes[] = 'menu-item-' . $item->ID;
    //     $classes[] = 'is-dropdown-submenu-parent';

/*is-dropdown-submenu-parent opens-left" role="menuitem" aria-haspopup="true" aria-label="ABOUT US" data-is-click="false" */

      //  $li_attributes = '';
      //  $class_names = $value = '';

       // $classes = empty($item->classes) ? array() : (array) $item->classes;
        // managing divider: add divider class to an element to get a divider before it.
         $divider_class_position = array_search('divider', $classes);
       if ($divider_class_position !== false) {
             $output .= "<li class=\"divider\"></li>\n";
            unset($classes[$divider_class_position]);
        }
         if (array_search('megamenu', $classes) !== false) {
          $this->isMegaMenu = $item->ID;
          }

        /**
         * Filters the arguments for a single nav menu item.
         *
         * @since 4.4.0
         *
         * @param stdClass $args  An object of wp_nav_menu() arguments.
         * @param WP_Post  $item  Menu item data object.
         * @param int      $depth Depth of menu item. Used for padding.
         */
        $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

        /**
         * Filters the CSS class(es) applied to a menu item's list item element.
         *
         * @since 3.0.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param array    $classes The CSS classes that are applied to the menu item's `<li>` element.
         * @param WP_Post  $item    The current menu item.
         * @param stdClass $args    An object of wp_nav_menu() arguments.
         * @param int      $depth   Depth of menu item. Used for padding.
         */
         $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        /**
         * Filters the ID applied to a menu item's list item element.
         *
         * @since 3.0.1
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
         * @param WP_Post  $item    The current menu item.
         * @param stdClass $args    An object of wp_nav_menu() arguments.
         * @param int      $depth   Depth of menu item. Used for padding.
         */
       $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
 $this->current_submenu_id = intval($item->object_id);
  //var_dump($object_id);/* could hold $object_id and check when changes in this function to know when at new submenu item; use intval to change before comparing */
 if ($this->current_submenu_id !== $this->previous_submenu_id) {
     $output .= $indent . '<div class="grid-x"><div class="cell small-12 medium-4 yellow"><li' . $id . $class_names .'>';
  //  $output .= "</ul></li></div></div><div class=\"grid-x\"><div class=\"cell small-12 medium-4\"><li><ul>\n";

   // $output .= $indent . '</ul></li></div></div><div class=\"grid-x\"><div class=\"cell small-12 medium-4\"><li' . $id . $class_names .'>';

     $this->previous_submenu_id = $this->current_submenu_id;
 }

        $output .= $indent . '<li' . $id . $class_names .'>';
// $output .= "</ul></li></div></div><div class=\"grid-x\"><div class=\"cell small-12 medium-4\"><li><ul>\n";
        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        $title = apply_filters( 'the_title', $item->title, $item->ID );
        $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

//$this->menuparent = intval($item->menu_item_parent);

   //$classes = empty( $item->classes ) ? array() : (array) $item->classes;
        // $classes[] = 'menu-item-' . $item->ID;
      
//$this->current_submenu_id = intval($item->object_id);
  //var_dump($object_id);/* could hold $object_id and check when changes in this function to know when at new submenu item; use intval to change before comparing */
//if ($this->current_submenu_id !== $this->previous_submenu_id) {

  //  $output .= "</ul></li></div></div><div class=\"grid-x\"><div class=\"cell small-12 medium-4\"><li><ul>\n";

   // $output .= $indent . '</ul></li></div></div><div class=\"grid-x\"><div class=\"cell small-12 medium-4\"><li' . $id . $class_names .'>';

    //$this->previous_submenu_id = $this->current_submenu_id;
//}



     //   $output .= $indent . '<li' . $id . $class_names .'>';

      //  $atts = array();
      //  $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
      //  $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
      //  $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
      //  $atts['href']   = ! empty( $item->url )        ? $item->url        : '';


         //   $this->menuparent = intval($item->menu_item_parent);

         //   $classes = empty( $item->classes ) ? array() : (array) $item->classes;
         //   $classes[] = 'menu-item-' . $item->ID;
      
          //  $object_id = $item->object_id;
          //  var_dump($object_id);
        /* ["object_id"]=> string(3) "421"   POST ID OF board of trustees in ajf_posts
    ["object"]=> string(4) "page" 
    ["type"]=> string(9) "post_type" 
    ["type_label"]=> string(4) "Page" */

//  $menusub = $item->menu_item_parent->object_id;
//$output .= "<p>{$menusub}</p>\n";
//
//     $classes[] = ($args->has_children) ? 'dropdown' : '';
//     
//   FROM MEGA MENU
     //   $classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
     //   $classes[] = 'menu-item-'.$item->ID;
     //   if ($depth && $args->has_children) {
     //       $classes[] = 'dropdown-submenu';
      //  }

      /* uses implode instead of join */ // $class_names = implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
       /* same as wordpress */ //$class_names = ' class="'.esc_attr($class_names).'"';

      /* almost the same */ // $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
      /* almost */  //$id = strlen($id) ? ' id="'.esc_attr($id).'"' : '';

      /* adds $value and li_attributes */ // $output .= $indent.'<li'.$id.$value.$class_names.$li_attributes.'>';

    //    $attributes  = !empty($item->attr_title) ? ' title="'.esc_attr($item->attr_title).'"' : '';
    //    $attributes .= !empty($item->target) ? ' target="'.esc_attr($item->target).'"' : '';
     //   $attributes .= !empty($item->xfn) ? ' rel="'.esc_attr($item->xfn).'"' : '';
      //  $attributes .= !empty($item->url) ? ' href="'.esc_attr($item->url).'"' : '';
     //   $attributes .= ($args->has_children) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';
      //  $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

     //   $item_output = $args->before;
     //   $item_output .= '<a'.$attributes.'>';
     //   $item_output .= $args->link_before.apply_filters('the_title', $item->title, $item->ID).$args->link_after;

            // add support for menu item title
      //      if (strlen($item->attr_title) > 2) {
       //         $item_output .= '<h3 class="title">'.$item->attr_title.'</h3>';
      //      }
            // add support for menu item descriptions
       //     if (strlen($item->description) > 2) {
       //         $item_output .= '</a> <span class="sub">'.$item->description.'</span>';
       //     }
     ///   $item_output .= (($depth == 0 || 1) && $args->has_children) ? ' <b class="caret"></b></a>' : '</a>';
     //   $item_output .= $args->after;

       // $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);

        /**
         * Filters the HTML attributes applied to a menu item's anchor element.
         *
         * @since 3.6.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param array $atts {
         *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
         *
         *     @type string $title  Title attribute.
         *     @type string $target Target attribute.
         *     @type string $rel    The rel attribute.
         *     @type string $href   The href attribute.
         * }
         * @param WP_Post  $item  The current menu item.
         * @param stdClass $args  An object of wp_nav_menu() arguments.
         * @param int      $depth Depth of menu item. Used for padding.
         */
        //  $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        //  $attributes = '';
        // foreach ( $atts as $attr => $value ) {
        //     if ( ! empty( $value ) ) {
        //         $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
        //         $attributes .= ' ' . $attr . '="' . $value . '"';
        //     }
      //  }

        /** This filter is documented in wp-includes/post-template.php */
       // $title = apply_filters( 'the_title', $item->title, $item->ID );

        /**
         * Filters a menu item's title.
         *
         * @since 4.4.0
         *
         * @param string   $title The menu item's title.
         * @param WP_Post  $item  The current menu item.
         * @param stdClass $args  An object of wp_nav_menu() arguments.
         * @param int      $depth Depth of menu item. Used for padding.
         */
        // $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

        // $item_output = $args->before;
        // $item_output .= '<a'. $attributes .'>';
        // $item_output .= $args->link_before . $title . $args->link_after;
        // $item_output .= '</a>';
        // $item_output .= $args->after;

        /**
         * Filters a menu item's starting output.
         *
         * The menu item's starting output only includes `$args->before`, the opening `<a>`,
         * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
         * no filter for modifying the opening and closing `<li>` for a menu item.
         *
         * @since 3.0.0
         *
         * @param string   $item_output The menu item's starting HTML output.
         * @param WP_Post  $item        Menu item data object.
         * @param int      $depth       Depth of menu item. Used for padding.
         * @param stdClass $args        An object of wp_nav_menu() arguments.
         */
      //  $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    

/* above is from wordpress */
   
 

        // if ($this->isMegaMenu != intval($item->menu_item_parent)) {
        //     $this->isMegaMenu = 0;
        //  }

         // if ($this->isMegaMenu === intval($item->menu_item_parent)) {
         // 	$this->count++;
         // 	if ($this->count > 3) {
         // 		//  $output .= "</ul></li></div></div><div class=\"grid-x\"><div class=\"cell small-12 medium-4\"><li><ul>\n";
         // 		 $this->count = 0;
         // 	}
         // }
   }
    public function end_el( &$output, $item, $depth = 0, $args = array() ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $output .= "</li></div></div>{$n}";
    }

 /* public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output)
    {
        if (!$element) {
            return;
        }

        $id_field = $this->db_fields['id'];

        //display this element
        if (is_array($args[0])) {
            $args[0]['has_children'] = !empty($children_elements[$element->$id_field]);
        } elseif (is_object($args[0])) {
            $args[0]->has_children = !empty($children_elements[$element->$id_field]);
        }

        $cb_args = array_merge(array(&$output, $element, $depth), $args);
        call_user_func_array(array($this, 'start_el'), $cb_args);

        $id = $element->$id_field;

        // descend only when the depth is right and there are childrens for this element
        if (($max_depth == 0 || $max_depth > $depth + 1) && isset($children_elements[$id])) {
            foreach ($children_elements[ $id ] as $child) {
                if (!isset($newlevel)) {
                    $newlevel = true;
              //start the child delimiter
              $cb_args = array_merge(array(&$output, $depth), $args);
                    call_user_func_array(array($this, 'start_lvl'), $cb_args);
                }
                $this->display_element($child, $children_elements, $max_depth, $depth + 1, $args, $output);
            }
            unset($children_elements[ $id ]);
        }

        if (isset($newlevel) && $newlevel) {
            //end the child delimiter
          $cb_args = array_merge(array(&$output, $depth), $args);
            call_user_func_array(array($this, 'end_lvl'), $cb_args);
        }

        //end this element
        $cb_args = array_merge(array(&$output, $element, $depth), $args);
        call_user_func_array(array($this, 'end_el'), $cb_args);
    } */
} 
endif; 
