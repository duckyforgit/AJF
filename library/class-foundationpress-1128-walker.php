<?php

/**
 * Customize the output of menus for Foundation custom mega menu bar
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/**
 * Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker
 */

$defaults = array(
    'theme_location'  => ,
    'menu'            => ,
    'container'       => 'div',
    'container_class' => 'menu-{menu slug}-container',
    'container_id'    => ,
    'menu_class'      => 'menu',
    'menu_id'         => ,
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => ,
    'after'           => ,
    'link_before'     => ,
    'link_after'      => ,
    'items_wrap'      => '<ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>',
    'depth'           => 0,
    'walker'          =>
);
?>

<?php wp_nav_menu( $defaults ); ?>

<?php $params = array(
    'theme_location' => 'primary',
    'menu' => 'Primary Navigation'
);
// if not using container; do not set container class and container id
$params = array(
    'theme_location' => 'primary',
    'container' => false,
    'menu_id' => 'nav'
);
//Echo
/*You can use this parameter to tell whether you want to display (echo) the results, or return it for use in PHP. This item is boolean so to return it simply set this parameter to 0.

Fallback CB
This is a callback function that you can fallback to if no menu is found. By default it uses the old stand by wp_page_menu() and passes all of the same parameters to this function as well.

Before and After
These items are used to define what can be placed before and after the anchor tags (<a></a>). You could use these to precede each item with a vertical bar, or wrap the nav items in a span tag.

Link Before and Link After
These work the same as the previous items we covered except that whatever you define will be inside of the anchor tags. Our example doesn't require that we use these so we'll ignore them and let the default empty item be.

Items Wrap
By default, the items are wrapped in an unordered list with the menu id and menu class. This parameter lets you change that if you so desire.

  %2$s translates to "replace this token with the second parameter, and treat it like a string".  

Depth
This parameter is really nice for when you want to use the same menu twice but don't want any child items to display in the location you're setting up with the wp_nav_menu() function. For instance, if you want the primary navigation to include a second level dropdown, you could leave this at the default setting. Then if you wanted to use the same parent items in a footer navigation and omit the child items, you could set this parameter to a depth of 1. The default "0" means all levels will be output. To keep our example concise, we're assuming that the primary navigation doesn't include any child items.

Walker
The parameter is used to define a walker object which can be used to manipulate how the entire function works and outputs its information. We'll go over a good example in the next section.   

Once we have our descriptions filled out, we'll need to create the walker class and add it to the wp_nav_menu() parameters. We'll call the class description_navigation so our complete parameters code should look like this: */
$params = array(
    'theme_location' => 'primary',
    'menu_id' => 'nav',
    'walker' => new my_description_walker()
);
wp_nav_menu($params);

class my_description_walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth, $args) {
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
 
        $class_names = $value = '';
 
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
 
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        $class_names = ' class="'. esc_attr( $class_names ) . '"';
 
        $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
 
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';
 
        if($depth != 0) {
            $description = $append = $prepend = "";
        }
 
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
        $item_output .= $description.$args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
 
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
} ?>
<style>
#nav a {
    line-height: 20px;
    padding: 10px 15px;
}
 
#nav a span {
    display: block;
    font-size: 11px;
    color: #ccc;
}
 
#nav a:hover span {
    color: #999;
}
</style>
<?php
/*
has_nav_menu()
This function is great for only displaying a particular menu if that menu has been assigned to your theme location. For instance, you may want to create a top navigation on your theme for lesser navigation items that a user may not want in their main navigation. This could be things like a home link, "Advertise With Us", or other lower calls to action. But as a theme distributor, if you don't know if that's going to be something the user wants to use, simply use a condition like so: */

 
if (has_nav_menu('top-menu')) {
    wp_nav_menu('theme_location=\"top-menu\" ');
} 

/* wp_get_nav_menu_items()
This function will return an array of items from a particular menu. This may be particular useful if you want to build a custom menu list without using a Walker Class. You lose a lot of functionality such as the menu item's current class, but it's a great way to loop through an array of menu items for a simple solution.

Walker_Nav_Menu – for displaying the HTML for navigation menus
Walker_Page – for displaying a list of pages
Walker_Category – for displaying a list of taxonomy terms.

walk( $elements, $max_depth)  $elements - array of elements to display parent-child relationship
$max-depth - sets how many generations we explore

can pass extra arguments which get gathered into $args array.

walk method singles out top level element - those without parents - puts in array
children are placed in 2nd array which key is the ID of its parent (2 dimensional)

$children_elements = array(
    '1' => array() //Array of elements corresponding to children of 1,
    '4' => array() //Array of elements corresponding to children of 4
);
loops through each parent elements and applied display_element method: */
  

display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ); 

/*displaying an element in our tree. In fact, it calls several functions to do this. These functions are deliberately left blank in the Walker class – and it's these which are altered in the extending classes, as they determine the actual HTML returned. These include:

	start_lvl – a function to return the HTML for the start of a new level. In the case of lists, this would be the start of a new 'sub-list', and so would be responsible for returning the <ul> tag

	end_lvl – called when we have finished a level. In the navigation menu example, this function is responsible for ending the sub-list with a closing list tag </ul>

	start_el – the function responsible for displaying the current element we are on. In the case of menus, this means the <li> tag and the item's link.

	end_el – the function called after an element and all it's children have been displayed. For our menu example this means returning a closing </li> tag.

	So what does display_element actually do? It's actually where all the magic of the Walker class takes place. First lets take a look at what arguments it's given:

$element – this is the element we are currently at on our tree
$children_elements – an array of all child elements (not just children of the element referred to above). This is the second array formed in the walk method and the keys are the IDs of the parent.
$max_depth – how far down we are allowed to explore
$depth – how far down we currently are
$args – optional arguments (mentioned earlier)
$output – The HTML thus far. This is added to as we explore more of the tree.
The display_element method first calls start_el which is responsible for displaying the element. Exactly how it does that depends on the context. For a drop-down menu it may be <select> Current Item or for a navigation menu it may <li> Current Item. Notice that there is no closing tag yet. If this element has children, we need to display them first so to that they are nested inside this item...

So next it checks if the current element we are on has any children and that we have not reached the maximum depth. If so, we explore each of the children in turn, by calling display_element for each of them (with the depth argument incremented by one). In this way the display_element recursively calls itself until we reach the bottom.

Suppose we have reached the 'bottom' (an element with no children or the maximum depth), then it calls end_el which adds the closing tag. There the current instance of display_element finishes and we move back up to the parent who applies display_element to the next child, until we've processed each of its children. When the parent has no more children left we move back up the tree, and so on until every branch is explored. Confused? He's a diagram which I hope will clarify things:

Using the Walker class makes displaying custom hierarchal data very simple. Suppose you have an array of objects, with 'label', 'parent_id' and 'object_id' properties that you wish to display a list of. This can now be easily be accomplished with a very simple class:

Note: The extending class is responsible for setting where to find an element's ID and that of its parent.*/

class Walker_Simple_Example extends Walker {
 
    // Set the properties of the element which give the ID of the current item and its parent
    var $db_fields = array( 'parent' => 'parent_id', 'id' => 'object_id' );
 
    // Displays start of a level. E.g '<ul>'
    // @see Walker::start_lvl()
    function start_lvl(&$output, $depth=0, $args=array()) {
        $output .= "\n<ul>\n";
    }
 
    // Displays end of a level. E.g '</ul>'
    // @see Walker::end_lvl()
    function end_lvl(&$output, $depth=0, $args=array()) {
        $output .= "</ul>\n";
    }
 
    // Displays start of an element. E.g '<li> Item Name'
    // @see Walker::start_el()
    function start_el(&$output, $item, $depth=0, $args=array()) {
        $output. = "<li>".esc_attr($item->label);
    }
 
    // Displays end of an element. E.g '</li>'
    // @see Walker::end_el()
    function end_el(&$output, $item, $depth=0, $args=array()) {
        $output .= "</li>\n";
    }
}
$elements=array(); // Array of elements
echo Walker_Simple_Example::walk($elements);
/*You can extend the walker classes to change what content is displayed, alter the HTML generated or even prevent certain branches from being shown. Functions such as:

wp_nav_menu
wp_list_pages
wp_list_categories

Provide an option to specify your own custom Walker class – allowing you to alter their appearance with relative ease by specifying your own custom walker class. In many instances it is actually easier to extend an appropriate walker extension, rather than the Walker class itself.

Suppose you want to have a secondary (sub) menu that is related to your primary menu. This may take the form of links that sit just below your primary menu or in a side-bar which show only the 'descendant' menu items of the current 'top-level page'. As an example from the diagram above, if we're on the 'Archive', 'Author', or 'News' sub pages, we would like to show all of the links below 'Archive'. Since Walker_Nav_Menu does most of what we want, we shall extend that class rather than the Walker class. This saves us a lot of effort, since the Walker_Nav_Menu adds the appropriate classes ('current', 'current-ancestor' etc) to the relevant links. We shall extend the Walker_Nav_Menu walker class to alter the logic slightly, and prevent it from displaying any top-level links or any of the descendants of the 'non-root' pages.

Some Ground Work: Theme Locations
First of all, in your template files, we will use the wp_nav_menu() function twice, pointing to the same theme location (I shall call it 'primary'). If you don't have a theme location registered already you should read this article. Whichever theme location you are using, you should save a menu to that location. We shall display this menu twice. First, wherever you want your 'top-level' menu to appear:

 */
wp_nav_menu( array('theme_location'=>'primary','depth' => 1) );
/* Then again, with a custom walker, to display only the (relevant) child pages. */

 
wp_nav_menu( array('theme_location'=>'primary','walker' => new SH_Child_Only_Walker(),'depth' => 0) );

/* Extending the Walker
First of all we don't want to display top-level parents. Recall that the function responsible for the opening <li> tag and the link is start_el and the function responsible for the closing </li> tag is end_el. We simply check if we are at the parent level. If we are, we don't do anything. Otherwise, we continue 'as normal' and call the function from the Walker_Nav_Menu class. */

function start_el(&$output, $item, $depth=0, $args=array()) {
    if( 0 == $depth )
        return;
    parent::start_el(&$output, $item, $depth, $args);
}
 
function end_el(&$output, $item, $depth=0, $args=array()) {
    if( 0 == $depth )
        return;
    parent::end_el(&$output, $item, $depth, $args);
}

/*We extend the display_element. This function is responsible for traveling down the branches. We want to stop it in its tracks if we are at the top-level and not on the current root link. To check if the branch we are on is 'current', we check if the item has any of the following classes: 'current-menu-item', 'current-menu-parent', 'current-menu-ancestor'. */

// Only follow down one branch
function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
 
    // Check if element as a 'current element' class
    $current_element_markers = array( 'current-menu-item', 'current-menu-parent', 'current-menu-ancestor' );
    $current_class = array_intersect( $current_element_markers, $element->classes );
 
    // If element has a 'current' class, it is an ancestor of the current element
    $ancestor_of_current = !empty($current_class);
 
    // If this is a top-level link and not the current, or ancestor of the current menu item - stop here.
    if ( 0 == $depth && !$ancestor_of_current)
        return;
 
    parent::display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output );
}

/* We now extend the start_lvl and end_lvl functions. These are responsible for outputting the HTML that wraps a level (in this case the <ul> tags). If we are on the top level we don't want to display these tags (after all the contents will not be shown).

*/
 
// Don't wrap the top level
function start_lvl(&$output, $depth=0, $args=array()) {
    if( 0 == $depth )
        return;
    parent::start_lvl(&$output, $depth, $args);
}
 
function end_lvl(&$output, $depth=0, $args=array()) {
    if( 0 == $depth )
        return;
    parent::end_lvl(&$output, $depth, $args);
}
/* WITH AN extention you can 
Include descriptions with menu links or category descriptions.
Exclude whole branches of a menu for logged-out users.
Include post meta in your list of pages. */

class SH_Child_Only_Walker extends Walker_Nav_Menu {
 
    // Don't start the top level
    function start_lvl(&$output, $depth=0, $args=array()) {
        if( 0 == $depth )
            return;
        parent::start_lvl(&$output, $depth,$args);
    }
 
    // Don't end the top level
    function end_lvl(&$output, $depth=0, $args=array()) {
        if( 0 == $depth )
            return;
        parent::end_lvl(&$output, $depth,$args);
    }
 
    // Don't print top-level elements
    function start_el(&$output, $item, $depth=0, $args=array()) {
        if( 0 == $depth )
            return;
        parent::start_el(&$output, $item, $depth, $args);
    }
 
    function end_el(&$output, $item, $depth=0, $args=array()) {
        if( 0 == $depth )
            return;
        parent::end_el(&$output, $item, $depth, $args);
    }
 
    // Only follow down one branch
    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
 
        // Check if element as a 'current element' class
        $current_element_markers = array( 'current-menu-item', 'current-menu-parent', 'current-menu-ancestor' );
        $current_class = array_intersect( $current_element_markers, $element->classes );
 
        // If element has a 'current' class, it is an ancestor of the current element
        $ancestor_of_current = !empty($current_class);
 
        // If this is a top-level link and not the current, or ancestor of the current menu item - stop here.
        if ( 0 == $depth && !$ancestor_of_current)
            return
 
        parent::display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output );
    }
}