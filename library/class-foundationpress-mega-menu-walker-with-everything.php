<?php
/**
 * Customize the output of menus for Foundation mega menu
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 *
 *
 * ajf-terms = 
 * name : Primary Navigation Mega
 * slug: primary-navigation-mega
 * term_taxonomy_id = 16
 * term_id = 16
 * taxonomy = nav_menu
 * parent = 0
 * count = 11
 *
 * CHANGE THE PREFIX on LIVE
 * 
 *SELECT * 
  FROM ajf_terms AS t
  LEFT JOIN ajf_term_taxonomy AS tt ON tt.term_id = t.term_id
 WHERE tt.taxonomy = 'nav_menu';
 *
 *
 * IF Menu item is custom post type in WP. They are stored in wp_posts table. You can find all of them by using this query:
 * 
AJF_posts:

SELECT * 
  FROM ajf_posts 
 WHERE post_type = 'nav_menu_item';

 ID: 438
 post_content: Lorem Ipsum...
 Post_excerpt:  Board of Trustees
 post_name: 438
post_parent: 41 
menu_order 3
post_type: nav_menu_item

ID: 439
post_content: Lorem Ipsum...
 Post_excerpt:  WHO WAS ARTHUR JORDAN
 post_name: 439
post_parent: 41 
menu_order 4
post_type: nav_menu_item

ID: 440
post_content: Lorem Ipsum...
 Post_excerpt:  WHO were are
 post_name: 440
post_parent: 41 
menu_order 5
post_type: nav_menu_item

Relations between menus and menu items are stored in wp_term_relationships table. To find all items of specific menu you can use this query:
   
ajf_term_relationships: object_id = 440   term_taxonomy_id = 16 for primary_menu

SELECT p.* 
  FROM ajf_posts AS p 
  LEFT JOIN ajf_term_relationships AS tr ON tr.object_id = p.ID
  LEFT JOIN ajf_term_taxonomy AS tt ON tt.term_taxonomy_id = tr.term_taxonomy_id
 WHERE p.post_type = 'nav_menu_item'
   AND tt.term_id = /*your menu ID*//*;   which is 16 for primary menu */ 
/*
   ajf_terms : term_id = 16 slug: primary-navigation-mega
ajf_term_taxonomy : term_taxonomy_id = 16   term_id = 16 taxonomy= nav_menu parent= 0 count= 11

ALL ITEMS IN AJF_POSTS

ID
post_author
post_date
post_date_gmt
post_content
post_title
post_excerpt
post_status
comment_status
ping_status
post_password
post_name
to_ping
pinged
post_modified
post_modified_gmt
post_content_filtered
post_parent
menu_order
guid
post_type
post_mime_type
comment_count
 
List from ajf_posts for all menu items associated with primary_menu term_id = 16 term_taxonomy_id = 16  all menu parents and children are in term_relationships associated with menu id 16.  THey are defined in ajf_posts.

ID: 438
post_title: 
post-name: 438
post_content: Lorem ipsum...
post_excerpt:  Board of Trustees
post-parent: 41  (441)
menu_order: 3
post_type: nav_menu_item  

 
ID: 439
post_title: 
post-name: 439
post_content: Lorem ipsum...
post_excerpt:  WHO WAS ARTHUR JORDAN
post-parent: 41
menu_order: 4
post_type: nav_menu_item  


ID: 440
post_title: 
post-name: 440
post_content: Lorem ipsum...
post_excerpt:  WHO WE ARE
post-parent: 41
menu_order: 5
post_type: nav_menu_item  

ID: 441
post_title: 
post-name: 441
post_content: Lorem ipsum...
post_excerpt:  
post-parent: 0
menu_order: 2
post_type: nav_menu_item  


ID: 442
post_title: 
post-name: 442
post_content:  
post_excerpt:  
post-parent: 0
menu_order: 10
post_type: nav_menu_item  

ID: 443
post_title: 
post-name: 443
post_content: Lorem ipsum...
post_excerpt:  
post-parent: 0
menu_order: 6
post_type: nav_menu_item  
 
ID: 444
post_title: 
post-name: 444
post_content: Lorem ipsum...
post_excerpt: Applications
post-parent: 43
menu_order: 7
post_type: nav_menu_item  
 
ID: 445
post_title: 
post-name: 445
post_content: Lorem ipsum...
post_excerpt: Guidelines
post-parent: 43
menu_order: 8
post_type: nav_menu_item 
 
 
ID: 446
post_title: 
post-name: 446
post_content: Lorem ipsum...
post_excerpt: Limitations
post-parent: 43
menu_order: 9
post_type: nav_menu_item 

ID: 451
post_title: 
post-name: 451
post-parent: 0
menu_order: 1
post_type: nav_menu_item


ID: 452
post_title:Search
post-name: search
post-parent: 0
menu_order: 11
post_type: nav_menu_item

Information about currently select menu is located in wp_options table as serialized PHP array. For example if we use TwentyEleven theme, then we will have a record in wp_options table with option_name column equals to theme_mod_twentyeleven and option_value column equals to ...;s:18:"nav_menu_locations";a:1:{s:7:"primary";i:103;}}. Here you can see that menu with term_id equals to 103 is currently selected as "primary" menu.

ajf_options:
option_id: 151
option_name: theme_mods_FoundationPress   /* menu term_id : 0   

a:0:{}s:9:"mega-menu";
s:12:"primary-menu";i:16;}  16 is term_id for primary-menu

all from option_name for theme FoundationPress

option_value:   a:6:{i:0;b:0;s:18:"nav_menu_locations";a:3:{s:9:"top-bar-r";i:0;s:10:"mobile-nav";i:0;s:12:"primary-menu";i:16;}s:18:"custom_css_post_id";i:-1;s:22:"wpt_mobile_menu_layout";s:9:"offcanvas";s:7:"hero_bg";s:82:"http://localhost:8080/arthurjordanfoundation/wp-content/uploads/2018/09/header.jpg";s:16:"sidebars_widgets";a:2:{s:4:"time";i:1539365841;s:4:"data";a:5:{s:19:"wp_inactive_widgets";a:0:{}s:15:"sidebar-widgets";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:14:"footer-widgets";a:0:{}s:12:"home-widgets";a:0:{}s:9:"mega-menu";a:4:{i:0;s:13:"media_image-2";i:1;s:13:"media_image-3";i:2;s:10:"calendar-2";i:3;s:15:"media_gallery-2";}}}}
autoload: yes

The key principle here is that we always have separate options record for each WP theme. Such options have the same name structure: theme_mods_{your-theme-name}.

P.S.: To change current menu in the admin panel, just go to Appearance » Menus page and select menu you need in Theme Locations meta box:



*/
/**
 * Big thanks to Brett Mason (https://github.com/brettsmason) for the intial top bar walker 
 * Mega Menu walker based on Foundation 6 Mega Menu in building blocks
 */

// if ( ! defined( 'ABSPATH' ) ) {
//     exit; // disable direct access
// }

if( ! class_exists( 'Foundationpress_Mega_Menu_Walker_with_everything' ) ) :

/**
 * @package WordPress
 * @since 1.0.0
 * @uses Mega Menu Walker
 *
 *
 *  <ul id-"menu-primary-menu" class="dropdown menu desktop-menu" data-dropdown-menu role="menubar">
 *
 * <li id="menu-item-451" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-31 current_page_item menu-item-451 is-active" role="menuitem"
 * 
 * NOTE: has "active" in addition to "is-active" 
 *
 * HAS_MEGA_MENU is parent with children and mega menu
 *
 * <li id="menu-item-441" class="HAS_MEGA_MENU menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children 
 * DROPDOWN menu-item-441 is-dropdown-submenu-parent opens-left" role="menuitem" aria-haspopup="true" aria-label="ABOUT US"  DATA-IS-CLICK="FALSE"><a href="https://1128workroom.com/arthurjordanfoundation/about-us/" CLASS="DROPDOWN-TOGGLE">ABOUT US</a> 
 *
 *not missing anything but has also:  HAS_MEGA_MENU   DROPDOWN DATA-IS-CLICK="FALSE"
 *
 * both VERSIONs add "is-active" class on hover to LI
 * ul class="dropdown"  get js-dropdown-active
 *
 * 
 *a href has class="dropdown-toggle" data-toggle="dropdown"
 *also adds <span class="sub">Lorem ipsum... </span><b class="caret"></b>
 *
 *
 * 
 * <ul class="dropdown menu vertical submenu is-dropdown-submenu first-sub" data-toggle="" data-submenu="" role="menu">
 *
 * NO = "" on data-toggle or data-submenu
 *
 * 
	<li id="menu-item-438" class="IS-MEGA-MENU menu-item menu-item-type-post_type menu-item-object-page menu-item-438 is-submenu-item is-dropdown-submenu-item" role="menuitem"><a title="Board of Trustees"  href="https://1128workroom.com/arthurjordanfoundation/about-us/__board-of-trustees/">BOARD OF TRUSTEES<h3 class="tit">Board of Trustees</h3></a>
** adds <h3> above and <span class="sub">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
	</li>
	<li id="menu-item-439" class="IS-MEGA-MENU menu-item menu-item-type-post_type menu-item-object-page menu-item-439 is-submenu-item is-dropdown-submenu-item" role="menuitem"><a TITLE="WHO WAS ARTHUR JORDAN" href="https://1128workroom.com/arthurjordanfoundation/about-us/who-was-arthur-jordan/">WHO WAS ARTHUR JORDAN<h3> class="tit">WHO WAS ARTHUR JORDAN</h3> </a>

	<span class="sub">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></li>
</ul>
 * 
 */
class Foundationpress_Mega_Menu_Walker_with_everything extends Walker_Nav_Menu {

    public $isMegaMenu;
    public $count;
    public $menuparent;
    public $submenu;
    public $parent_id;
    public $locations;
    public $menu;
    public $menuitems;
    public $menu_name;
    public $current_submenu_id;
    public $previous_submenu_id;

    public function __construct()
    {
        $this->isMegaMenu = 0;
        $this->count = 0;
        $this->menuparent = 0;
        $this->submenu = false;
        $this->parent_id = 0;
        $this->locations = array();
        $this->menu = array();
        $this->current_submenu_id = 0;
        $this->previous_submenu_id = 0;
       
//echo $results[0]->field_commerce_total[0]['raw']['amount'];
 /*object(Foundationpress_Mega_Menu_Walker)#312 (13){ \
    ["isMegaMenu"]=> int(0) 
    ["count"]=> int(0) 
    ["menuparent"]=> int(0) 
    ["submenu"]=> bool(false) 
    ["parent_id"]=> int(0) 
    ["locations"]=> array(0) { } 
// from wordpress object not local constructor
    ["menu"]=> array(0) { } 
    ["menuitems"]=> NULL 
    ["menu_name"]=> NULL 
    ["tree_type"]=> array(3) {
        [0]=> string(9) "post_type" 
        [1]=> string(8) "taxonomy" 
        [2]=> string(6) "custom" 
        } 
    ["db_fields"]=> array(2) { 
        ["parent"]=> string(16) "menu_item_parent" 
        ["id"]=> string(5) "db_id" 
    } 
    ["max_pages"]=> int(1) 
    ["has_children"]=> NULL */
//}

/*//$this->menu_name = 'primary_menu';        
//$this->locations = get_nav_menu_locations();
//var_dump($this->locations); 
//array(3) { ["primary-menu"]=> int(17) ["top-bar-r"]=> int(0) ["mobile-nav"]=> int(0) } 

 
//$this->menu = wp_get_nav_menu_object(17);
//var_dump($this->menu); //bool false
//object(WP_Term)#1039 (10) { ["term_id"]=> int(17) ["name"]=> string(10) "pluginmenu" ["slug"]=> string(10) "pluginmenu" ["term_group"]=> int(0) ["term_taxonomy_id"]=> int(17) ["taxonomy"]=> string(8) "nav_menu" ["description"]=> string(0) "" ["parent"]=> int(0) ["count"]=> int(15) ["filter"]=> string(3) "raw" } 
//$myargs = array('order' => 'ASC');
//$this->menuitems = wp_get_nav_menu_items( $this->menu->term_id, $myargs );
//echo walk_nav_menu_tree($this->menuitems, 3, $myargs);
// foreach ( $this->menuitems as $menu => $value ) {
// 			if ( ! empty( $value ) ) {
// 				//var_dump( $value ); 
// 				echo  __toString($value);
// 			}
// 		}
 
//var_dump($this->menuitems[0]);
// var_dump($this->menuitems);
/* array(15) { [0]=> object(WP_Post)#1071 (37) { ["ID"]=> int(457) ["post_author"]=> string(1) "1" ["post_date"]=> string(19) "2018-10-17 17:24:39" ["post_date_gmt"]=> string(19) "2018-10-17 17:24:39" ["post_content"]=> string(1) " " ["post_title"]=> string(0) "" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(6) "closed" ["ping_status"]=> string(6) "closed" ["post_password"]=> string(0) "" ["post_name"]=> string(3) "457" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2018-10-17 17:47:30" ["post_modified_gmt"]=> string(19) "2018-10-17 17:47:30" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(0) ["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=457" ["menu_order"]=> int(1) ["post_type"]=> string(13) "nav_menu_item" ["post_mime_type"]=> string(0) "" ["comment_count"]=> string(1) "0" ["filter"]=> string(3) "raw" ["db_id"]=> int(457) ["menu_item_parent"]=> string(1) "0" ["object_id"]=> string(2) "31" ["object"]=> string(4) "page" ["type"]=> string(9) "post_type" ["type_label"]=> string(4) "Page" ["url"]=> string(45) "//localhost:3000/arthurjordanfoundation/" ["title"]=> string(7) "Welcome" ["target"]=> string(0) "" ["attr_title"]=> string(0) "" ["description"]=> string(0) "" ["classes"]=> array(1) { [0]=> string(0) "" } ["xfn"]=> string(0) "" } [1]=> object(WP_Post)#1074 (37) { ["ID"]=> int(458) ["post_author"]=> string(1) "1" ["post_date"]=> string(19) "2018-10-17 17:24:39" ["post_date_gmt"]=> string(19) "2018-10-17 17:24:39" ["post_content"]=> string(1) " " ["post_title"]=> string(0) "" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(6) "closed" ["ping_status"]=> string(6) "closed" ["post_password"]=> string(0) "" ["post_name"]=> string(3) "458" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2018-10-17 17:47:30" ["post_modified_gmt"]=> string(19) "2018-10-17 17:47:30" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(0) ["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=458" ["menu_order"]=> int(2) ["post_type"]=> string(13) "nav_menu_item" ["post_mime_type"]=> string(0) "" ["comment_count"]=> string(1) "0" ["filter"]=> string(3) "raw" ["db_id"]=> int(458) ["menu_item_parent"]=> string(1) "0" ["object_id"]=> string(2) "41" ["object"]=> string(4) "page" ["type"]=> string(9) "post_type" ["type_label"]=> string(4) "Page" ["url"]=> string(54) "//localhost:3000/arthurjordanfoundation/about-us/" ["title"]=> string(8) "ABOUT US" ["target"]=> string(0) "" ["attr_title"]=> string(0) "" ["description"]=> string(0) "" ["classes"]=> array(1) { [0]=> string(0) "" } ["xfn"]=> string(0) "" } [2]=> object(WP_Post)#1075 (37) { ["ID"]=> int(453) ["post_author"]=> string(1) "1" ["post_date"]=> string(19) "2018-10-17 17:24:39" ["post_date_gmt"]=> string(19) "2018-10-17 17:24:39" ["post_content"]=> string(1) " " ["post_title"]=> string(0) "" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(6) "closed" ["ping_status"]=> string(6) "closed" ["post_password"]=> string(0) "" ["post_name"]=> string(3) "453" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2018-10-17 17:47:30" ["post_modified_gmt"]=> string(19) "2018-10-17 17:47:30" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(41) ["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=453" ["menu_order"]=> int(3) ["post_type"]=> string(13) "nav_menu_item" ["post_mime_type"]=> string(0) "" ["comment_count"]=> string(1) "0" ["filter"]=> string(3) "raw" ["db_id"]=> int(453) ["menu_item_parent"]=> string(3) "458" ["object_id"]=> string(3) "421" ["object"]=> string(4) "page" ["type"]=> string(9) "post_type" ["type_label"]=> string(4) "Page" ["url"]=> string(74) "//localhost:3000/arthurjordanfoundation/about-us/__board-of-trustees/" ["title"]=> string(17) "BOARD OF TRUSTEES" ["target"]=> string(0) "" ["attr_title"]=> string(0) "" ["description"]=> string(0) "" ["classes"]=> array(1) { [0]=> string(0) "" } ["xfn"]=> string(0) "" } [3]=> object(WP_Post)#1076 (37) { ["ID"]=> int(454) ["post_author"]=> string(1) "1" ["post_date"]=> string(19) "2018-10-17 17:24:40" ["post_date_gmt"]=> string(19) "2018-10-17 17:24:40" ["post_content"]=> string(1) " " ["post_title"]=> string(0) "" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(6) "closed" ["ping_status"]=> string(6) "closed" ["post_password"]=> string(0) "" ["post_name"]=> string(3) "454" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2018-10-17 17:47:31" ["post_modified_gmt"]=> string(19) "2018-10-17 17:47:31" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(41) ["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=454" ["menu_order"]=> int(4) ["post_type"]=> string(13) "nav_menu_item" */
    }
public function get_navbar_items() {
    // wordpress does not group child menu items with parent menu items
    $navbar_items = wp_get_nav_menu_items("Navbar");
    $child_items = [];
    // pull all child menu items into separate object
    foreach ($navbar_items as $key => $item) if ($item->menu_item_parent) {
        array_push($child_items, $item);
        unset($navbar_items[$key]);
    }
    // push child items into their parent item in the original object
    foreach ($navbar_items as $item)
        foreach ($item as $key => $child)
            if ($child->menu_item_parent == $item->post_name) {
                if (!$item->child_items) $item->child_items = [];
                array_push($item->child_items, $child);
                unset($child_items[$key]);
            }
    // return navbar object where child items are grouped with parents
    return $navbar_items;
}
    public function start_lvl(&$output, $depth = 0, $args = array())
    {
       // echo $results[0]->field_commerce_total[0]['raw']['amount'];
      /*  Array (
[0] => stdClass Object
    (

 [field_commerce_total] => Array
(
[0] => Array
(
[rendered] => Array
(
[#markup] => 64.00  HRK
[#access] => 1
)
[raw] => Array
(
[amount] => 6400
[currency_code] => HRK
[data] => Array
(
[components] => Array
(
[0] => Array
(
    [name] => base_price
    [price] => Array
        (
            [amount] => 5120
            [currency_code] => HRK
            [data] => Array
                (
                )
        )
    [included] => 1
)

[1] => Array
(
    [name] => tax|sample_french_vat_tax
    [price] => Array
        (
            [amount] => 1280
            [currency_code] => HRK            
         )
        )
        )
    )
)*/
 

//object(Foundationpress_Mega_Menu_Walker)#312 (13) { ["isMegaMenu"]=> int(0) ["count"]=> int(0) ["menuparent"]=> int(0) ["submenu"]=> bool(false) ["parent_id"]=> int(0) ["locations"]=> array(0) { } 

//["menu"]=> array(0) { } ["menuitems"]=> NULL ["menu_name"]=> NULL ["tree_type"]=> array(3) { [0]=> string(9) "post_type" [1]=> string(8) "taxonomy" [2]=> string(6) "custom" } ["db_fields"]=> array(2) { ["parent"]=> string(16) "menu_item_parent" ["id"]=> string(5) "db_id" } ["max_pages"]=> int(1) ["has_children"]=> NULL } 



/*object(stdClass)#1056 (18) { ["menu"]=> object(WP_Term)#1070 (10) { ["term_id"]=> int(17) ["name"]=> string(10) "pluginmenu" ["slug"]=> string(10) "pluginmenu" ["term_group"]=> int(0) ["term_taxonomy_id"]=> int(17) ["taxonomy"]=> string(8) "nav_menu" ["description"]=> string(0) "" ["parent"]=> int(0) ["count"]=> int(15) ["filter"]=> string(3) "raw" } ["container"]=> bool(false) ["container_class"]=> string(0) "" ["container_id"]=> string(0) "" ["menu_class"]=> string(13) "dropdown menu" ["menu_id"]=> string(0) "" ["echo"]=> bool(true) ["fallback_cb"]=> bool(false) ["before"]=> string(0) "" ["after"]=> string(0) "" ["link_before"]=> string(0) "" ["link_after"]=> string(0) "" ["items_wrap"]=> string(68) "
%3$s
" ["item_spacing"]=> string(8) "preserve" ["depth"]=> int(3) ["walker"]=> object(Foundationpress_Mega_Menu_Walker)#1054 (13) { ["isMegaMenu"]=> int(0) ["count"]=> int(2) ["menuparent"]=> int(0) ["submenu"]=> bool(false) ["parent_id"]=> int(0) ["locations"]=> array(3) { ["primary-menu"]=> int(17) ["top-bar-r"]=> int(0) ["mobile-nav"]=> int(0) } ["menu"]=> object(WP_Term)#1039 (10) { ["term_id"]=> int(17) ["name"]=> string(10) "pluginmenu" ["slug"]=> string(10) "pluginmenu" ["term_group"]=> int(0) ["term_taxonomy_id"]=> int(17) ["taxonomy"]=> string(8) "nav_menu" ["description"]=> string(0) "" ["parent"]=> int(0) ["count"]=> int(15) ["filter"]=> string(3) "raw" } ["menuitems"]=> array(15) { [0]=> object(WP_Post)#1071 (37) { ["ID"]=> int(457) ["post_author"]=> string(1) "1" ["post_date"]=> string(19) "2018-10-17 17:24:39" ["post_date_gmt"]=> string(19) "2018-10-17 17:24:39" ["post_content"]=> string(1) " " ["post_title"]=> string(0) "" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(6) "closed" ["ping_status"]=> string(6) "closed" ["post_password"]=> string(0) "" ["post_name"]=> string(3) "457" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2018-10-17 17:47:30" ["post_modified_gmt"]=> string(19) "2018-10-17 17:47:30" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(0) ["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=457" ["menu_order"]=> int(1) ["post_type"]=> string(13) "nav_menu_item" ["post_mime_type"]=> string(0) "" ["comment_count"]=> string(1) "0" ["filter"]=> string(3) "raw" ["db_id"]=> int(457) ["menu_item_parent"]=> string(1) "0" ["object_id"]=> string(2) "31" ["object"]=> string(4) "page" ["type"]=> string(9) "post_type" ["type_label"]=> string(4) "Page" ["url"]=> string(45) "//localhost:3000/arthurjordanfoundation/" ["title"]=> string(7) "Welcome" ["target"]=> string(0) "" ["attr_title"]=> string(0) "" ["description"]=> string(0) "" ["classes"]=> array(1) { [0]=> string(0) "" } ["xfn"]=> string(0) "" } [1]=> object(WP_Post)#1074 (37) { ["ID"]=> int(458) ["post_author"]=> string(1) "1" ["post_date"]=> string(19) "2018-10-17 17:24:39" ["post_date_gmt"]=> string(19) "2018-10-17 17:24:39" ["post_content"]=> string(1) " " ["post_title"]=> string(0) "" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(6) "closed" ["ping_status"]=> string(6) "closed" ["post_password"]=> string(0) "" ["post_name"]=> string(3) "458" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2018-10-17 17:47:30" ["post_modified_gmt"]=> string(19) "2018-10-17 17:47:30" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(0) ["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=458" ["menu_order"]=> int(2) ["post_type"]=> string(13) "nav_menu_item" ["post_mime_type"]=> string(0) "" ["comment_count"]=> string(1) "0" ["filter"]=> string(3) "raw" ["db_id"]=> int(458) ["menu_item_parent"]=> string(1) "0" ["object_id"]=> string(2) "41" ["object"]=> string(4) "page" ["type"]=> string(9) "post_type" ["type_label"]=> string(4) "Page" ["url"]=> string(54) "//localhost:3000/arthurjordanfoundation/about-us/" ["title"]=> string(8) "ABOUT US" ["target"]=> string(0) "" ["attr_title"]=> string(0) "" ["description"]=> string(0) "" ["classes"]=> array(1) { [0]=> string(0) "" } ["xfn"]=> string(0) "" } [2]=> object(WP_Post)#1075 (37) { ["ID"]=> int(453) ["post_author"]=> string(1) "1" ["post_date"]=> string(19) "2018-10-17 17:24:39" ["post_date_gmt"]=> string(19) 

(array) (Optional) Array of nav menu arguments.

'menu'
(int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
'menu_class'
(string) CSS class to use for the ul element which forms the menu. Default 'menu'.
'menu_id'
(string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
'container'
(string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
'container_class'
(string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
'container_id'
(string) The ID that is applied to the container.
'fallback_cb'
(callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
'before'
(string) Text before the link markup.
'after'
(string) Text after the link markup.
'link_before'
(string) Text before the link text.
'link_after'
(string) Text after the link text.
'echo'
(bool) Whether to echo the menu or return it. Default true.
'depth'
(int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
'walker'
(object) Instance of a custom walker class.
'theme_location'
(string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
'items_wrap'
(string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
'item_spacing'
(string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'. 
*/
 
        $indent = str_repeat("\t", $depth); // indent the number of spaces of the depth
        $outputSubmenu = ($depth > 0) ? ' sub-menu' : '';

        if ( 0 == $depth ) {
            return; // do not output anything for parent element
        }
        $this->submenu = true;
  		//$output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\" > \n";
  		$output .= "\n$indent<ul class=\"dropdown menu vertical\" data-toggle>\n";
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
        
         if ($this->isMegaMenu != 0) {
          //  $output .= "</ul></li></div>\n";
         }
        $output .= "</ul>\n";


    }

    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
     
 //var_dump($this);

// $a = array('123' => '123', '123foo' => '123foo');
//$o = (object)$a;
//echo $o->{'123foo'}; // OK!
//echo $o->{'123'}; // error!
//$results = ('Foundationpress_Mega_Menu_Walker');
 
//  object(Foundationpress_Mega_Menu_Walker)#312 (4) { 
//     ["tree_type"]=> array(3) { 
//         [0]=> string(9) "post_type" 
//         [1]=> string(8) "taxonomy" 
//         [2]=> string(6) "custom" 
//     } 
//     ["db_fields"]=> array(2) { 
//         ["parent"]=> string(16) "menu_item_parent" 
//         ["id"]=> string(5) "db_id" 
//     } 
//     ["max_pages"]=> int(1) 
//     ["has_children"]=> NULL 
// } 
    // object(Foundationpress_Mega_Menu_Walker)#312 (13) { ["isMegaMenu"]=> int(0) ["count"]=> int(0) ["menuparent"]=> int(0) ["submenu"]=> bool(false) ["parent_id"]=> int(0) ["locations"]=> array(0) { } ["menu"]=> array(0) { } ["menuitems"]=> NULL ["menu_name"]=> NULL ["tree_type"]=> array(3) { [0]=> string(9) "post_type" [1]=> string(8) "taxonomy" [2]=> string(6) "custom" } ["db_fields"]=> array(2) { ["parent"]=> string(16) "menu_item_parent" ["id"]=> string(5) "db_id" } ["max_pages"]=> int(1) ["has_children"]=> NULL } object(Foundationpress_Mega_Menu_Walker)#312 (13) { ["isMegaMenu"]=> int(0) ["count"]=> int(1) ["menuparent"]=> int(0) ["submenu"]=> bool(false) ["parent_id"]=> int(0) ["locations"]=> array(0) { } ["menu"]=> array(0) { } ["menuitems"]=> NULL ["menu_name"]=> NULL ["tree_type"]=> array(3) { [0]=> string(9) "post_type" [1]=> string(8) "taxonomy" [2]=> string(6) "custom" } ["db_fields"]=> array(2) { ["parent"]=> string(16) "menu_item_parent" ["id"]=> string(5) "db_id" } ["max_pages"]=> int(1) ["has_children"]=> NULL } object(Foundationpress_Mega_Menu_Walker)#312 (13) { ["isMegaMenu"]=> int(0) ["count"]=> int(2) ["menuparent"]=> int(0) ["submenu"]=> bool(false) ["parent_id"]=> int(0) ["locations"]=> array(0) { } ["menu"]=> array(0) { } ["menuitems"]=> NULL ["menu_name"]=> NULL ["tree_type"]=> array(3) { [0]=> string(9) "post_type" [1]=> string(8) "taxonomy" [2]=> string(6) "custom" } ["db_fields"]=> array(2) { ["parent"]=> string(16) "menu_item_parent" ["id"]=> string(5) "db_id" }
/* postmeta :  
post_id: 1338
meta_id :439
meta_key:  _menu_item_object_id
meta_value:  313 
meta_id: 1339
meta_id :439
meta_key:  _menu_item_object_id
meta_value: page
 
1340
439
_menu_item_target
 
1341
439
_menu_item_classes
a:1:{i:0;s:12:"is-mega-menu";} */

//var_dump($item);
/*object(WP_Post)#294 (40) { 
["ID"]=> int(457) 
["post_author"]=> string(1) "1" 
["post_date"]=> string(19) "2018-10-17 17:24:39" 
["post_date_gmt"]=> string(19) "2018-10-17 17:24:39" 
["post_content"]=> string(1) " " 
["post_title"]=> string(0) "" 
["post_excerpt"]=> string(0) "" [
"post_status"]=> string(7) "publish" 
["comment_status"]=> string(6) "closed" 
["ping_status"]=> string(6) "closed" 
["post_password"]=> string(0) "" 
["post_name"]=> string(3) "457" 
["to_ping"]=> string(0) "" 
["pinged"]=> string(0) "" 
["post_modified"]=> string(19) "2018-10-17 17:47:30" 
["post_modified_gmt"]=> string(19) "2018-10-17 17:47:30" 
["post_content_filtered"]=> string(0) "" 
["post_parent"]=> int(0) 
["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=457" 
["menu_order"]=> int(1) 
["post_type"]=> string(13) "nav_menu_item" 
["post_mime_type"]=> string(0) "" 
["comment_count"]=> string(1) "0" 
["filter"]=> string(3) "raw" ["db_id"]=> int(457) 

["menu_item_parent"]=> string(1) "0" 
["object_id"]=> string(2) "31" 
["object"]=> string(4) "page" 
["type"]=> string(9) "post_type" 
["type_label"]=> string(4) "Page" 
["url"]=> string(45) "//localhost:3000/arthurjordanfoundation/" 
["title"]=> string(7) "Welcome" 
["target"]=> string(0) "" ["attr_title"]=> string(0) "" 
["description"]=> string(0) "" 
["classes"]=> array(9) { 
    [0]=> string(0) "" 
    [1]=> string(9) "menu-item" 
    [2]=> string(24) "menu-item-type-post_type" [
    3]=> string(21) "menu-item-object-page" 
    [4]=> string(14) "menu-item-home" 
    [5]=> string(17) "current-menu-item" 
    [6]=> string(9) "page_item" 
    [7]=> string(12) "page-item-31" 
    [8]=> string(17) "current_page_item" } 
    ["xfn"]=> string(0) "" 
    ["current"]=> bool(true) 
    ["current_item_ancestor"]=> bool(false) 
    ["current_item_parent"]=> bool(false) } 

object(WP_Post)#291 (40) { 
["ID"]=> int(458) 
["post_author"]=> string(1) "1" 
["post_date"]=> string(19) "2018-10-17 17:24:39" ["post_date_gmt"]=> string(19) "2018-10-17 17:24:39" ["post_content"]=> string(1) " " ["post_title"]=> string(0) "" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(6) "closed" ["ping_status"]=> string(6) "closed" ["post_password"]=> string(0) "" ["post_name"]=> string(3) "458" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2018-10-17 17:47:30" ["post_modified_gmt"]=> string(19) "2018-10-17 17:47:30" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(0) ["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=458" ["menu_order"]=> int(2) ["post_type"]=> string(13) "nav_menu_item" ["post_mime_type"]=> string(0) "" ["comment_count"]=> string(1) "0" 
["filter"]=> string(3) "raw" 
["db_id"]=> int(458)

["menu_item_parent"]=> string(1) "0" 
["object_id"]=> string(2) "41" ["object"]=> string(4) "page" ["type"]=> string(9) "post_type" ["type_label"]=> string(4) "Page" ["url"]=> string(54) "//localhost:3000/arthurjordanfoundation/about-us/" ["title"]=> string(8) "ABOUT US" ["target"]=> string(0) "" ["attr_title"]=> string(0) "" ["description"]=> string(0) "" ["classes"]=> array(5) { [0]=> string(0) "" [1]=> string(9) "menu-item" [2]=> string(24) "menu-item-type-post_type" [3]=> string(21) "menu-item-object-page" [4]=> string(22) "menu-item-has-children" } ["xfn"]=> string(0) "" ["current"]=> bool(false) ["current_item_ancestor"]=> bool(false) ["current_item_parent"]=> bool(false) } 


object(WP_Post)#290 (40) { 
    ["ID"]=> int(453) 
    ["post_author"]=> string(1) "1" ["post_date"]=> string(19) "2018-10-17 17:24:39" ["post_date_gmt"]=> string(19) "2018-10-17 17:24:39" ["post_content"]=> string(1) " " ["post_title"]=> string(0) "" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(6) "closed" 
    ["ping_status"]=> string(6) "closed" 
    ["post_password"]=> string(0) "" ["post_name"]=> string(3) "453" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2018-10-17 17:47:30" ["post_modified_gmt"]=> string(19) "2018-10-17 17:47:30" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(41) 
    ["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=453" 
    ["menu_order"]=> int(3) 
    ["post_type"]=> string(13) "nav_menu_item" 
    ["post_mime_type"]=> string(0) "" 
    ["comment_count"]=> string(1) "0" 
    ["filter"]=> string(3) "raw" 
    ["db_id"]=> int(453)

    ["menu_item_parent"]=> string(3) "458" 
    ["object_id"]=> string(3) "421"   POST ID OF board of trustees in ajf_posts
    ["object"]=> string(4) "page" 
    ["type"]=> string(9) "post_type" 
    ["type_label"]=> string(4) "Page" 
    ["url"]=> string(74) "//localhost:3000/arthurjordanfoundation/about-us/__board-of-trustees/" 
    ["title"]=> string(17) "BOARD OF TRUSTEES" 
    ["target"]=> string(0) "" 
    ["attr_title"]=> string(0) "" 
    ["description"]=> string(0) "" 
    ["classes"]=> array(4) { 
            [0]=> string(0) "" 
            [1]=> string(9) "menu-item" 
            [2]=> string(24) "menu-item-type-post_type" 
            [3]=> string(21) "menu-item-object-page" 
        } 
        ["xfn"]=> string(0) "" 
        ["current"]=> bool(false) 
        ["current_item_ancestor"]=> bool(false) 
        ["current_item_parent"]=> bool(false) 
    } 
    object(WP_Post)#289 (40) { ["ID"]=> int(454) ["post_author"]=> string(1) "1" ["post_date"]=> string(19) "2018-10-17 17:24:40" ["post_date_gmt"]=> string(19) "2018-10-17 17:24:40" ["post_content"]=> string(1) " " ["post_title"]=> string(0) "" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(6) "closed" ["ping_status"]=> string(6) "closed" ["post_password"]=> string(0) "" ["post_name"]=> string(3) "454" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2018-10-17 17:47:31" ["post_modified_gmt"]=> string(19) "2018-10-17 17:47:31" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(41) ["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=454" ["menu_order"]=> int(4) ["post_type"]=> string(13) "nav_menu_item" ["post_mime_type"]=> string(0) "" ["comment_count"]=> string(1) "0" ["filter"]=> string(3) "raw" ["db_id"]=> int(454) ["menu_item_parent"]=> string(3) "458" ["object_id"]=> string(3) "313" ["object"]=> string(4) "page" ["type"]=> string(9) "post_type" ["type_label"]=> string(4) "Page" ["url"]=> string(76) "//localhost:3000/arthurjordanfoundation/about-us/who-was-arthur-jordan/" ["title"]=> string(21) "WHO WAS ARTHUR JORDAN" ["target"]=> string(0) "" ["attr_title"]=> string(0) "" ["description"]=> string(0) "" ["classes"]=> array(4) { [0]=> string(0) "" [1]=> string(9) "menu-item" [2]=> string(24) "menu-item-type-post_type" [3]=> string(21) "menu-item-object-page" } ["xfn"]=> string(0) "" ["current"]=> bool(false) ["current_item_ancestor"]=> bool(false) ["current_item_parent"]=> bool(false) } object(WP_Post)#288 (40) { ["ID"]=> int(455) ["post_author"]=> string(1) "1" ["post_date"]=> string(19) "2018-10-17 17:24:40" ["post_date_gmt"]=> string(19) "2018-10-17 17:24:40" ["post_content"]=> string(1) " " ["post_title"]=> string(0) "" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(6) "closed" ["ping_status"]=> string(6) "closed" ["post_password"]=> string(0) "" ["post_name"]=> string(3) "455" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2018-10-17 17:47:31" ["post_modified_gmt"]=> string(19) "2018-10-17 17:47:31" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(41) ["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=455" ["menu_order"]=> int(5) ["post_type"]=> string(13) "nav_menu_item" ["post_mime_type"]=> string(0) "" ["comment_count"]=> string(1) "0" ["filter"]=> string(3) "raw" ["db_id"]=> int(455) ["menu_item_parent"]=> string(3) "458" ["object_id"]=> string(3) "311" ["object"]=> string(4) "page" ["type"]=> string(9) "post_type" ["type_label"]=> string(4) "Page" ["url"]=> string(65) "//localhost:3000/arthurjordanfoundation/about-us/who-we-are/" ["title"]=> string(10) "WHO WE ARE" ["target"]=> string(0) "" ["attr_title"]=> string(0) "" ["description"]=> string(0) "" ["classes"]=> array(4) { [0]=> string(0) "" [1]=> string(9) "menu-item" [2]=> string(24) "menu-item-type-post_type" [3]=> string(21) "menu-item-object-page" } ["xfn"]=> string(0) "" ["current"]=> bool(false) ["current_item_ancestor"]=> bool(false) ["current_item_parent"]=> bool(false) } object(WP_Post)#287 (40) { ["ID"]=> int(459) ["post_author"]=> string(1) "1" ["post_date"]=> string(19) "2018-10-17 17:24:41" ["post_date_gmt"]=> string(19) "2018-10-17 17:24:41" ["post_content"]=> string(1) " " ["post_title"]=> string(0) "" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(6) "closed" ["ping_status"]=> string(6) "closed" ["post_password"]=> string(0) "" ["post_name"]=> string(3) "459" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2018-10-17 17:47:31" ["post_modified_gmt"]=> string(19) "2018-10-17 17:47:31" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(0) ["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=459" ["menu_order"]=> int(6) ["post_type"]=> string(13) "nav_menu_item" ["post_mime_type"]=> string(0) "" ["comment_count"]=> string(1) "0" ["filter"]=> string(3) "raw" ["db_id"]=> int(459) ["menu_item_parent"]=> string(1) "0" ["object_id"]=> string(2) "43" ["object"]=> string(4) "page" ["type"]=> string(9) "post_type" ["type_label"]=> string(4) "Page" ["url"]=> string(58) "//localhost:3000/arthurjordanfoundation/grantseekers/" ["title"]=> string(12) "GRANTSEEKERS" ["target"]=> string(0) "" ["attr_title"]=> string(0) "" ["description"]=> string(0) "" ["classes"]=> array(5) { [0]=> string(0) "" [1]=> string(9) "menu-item" [2]=> string(24) "menu-item-type-post_type" [3]=> string(21) "menu-item-object-page" [4]=> string(22) "menu-item-has-children" } ["xfn"]=> string(0) "" ["current"]=> bool(false) ["current_item_ancestor"]=> bool(false) ["current_item_parent"]=> bool(false) } object(WP_Post)#286 (40) { ["ID"]=> int(460) ["post_author"]=> string(1) "1" ["post_date"]=> string(19) "2018-10-17 17:24:41" ["post_date_gmt"]=> string(19) "2018-10-17 17:24:41" ["post_content"]=> string(1) " " ["post_title"]=> string(0) "" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(6) "closed" ["ping_status"]=> string(6) "closed" ["post_password"]=> string(0) "" ["post_name"]=> string(3) "460" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2018-10-17 17:47:31" ["post_modified_gmt"]=> string(19) "2018-10-17 17:47:31" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(43) ["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=460" ["menu_order"]=> int(7) ["post_type"]=> string(13) "nav_menu_item" ["post_mime_type"]=> string(0) "" ["comment_count"]=> string(1) "0" ["filter"]=> string(3) "raw" ["db_id"]=> int(460) ["menu_item_parent"]=> string(3) "459" ["object_id"]=> string(2) "67" ["object"]=> string(4) "page" ["type"]=> string(9) "post_type" ["type_label"]=> string(4) "Page" ["url"]=> string(88) "//localhost:3000/arthurjordanfoundation/grantseekers/application-process-and-forms/" ["title"]=> string(36) "APPLICATION PROCESS AND REPORT FORMS" ["target"]=> string(0) "" ["attr_title"]=> string(0) "" ["description"]=> string(0) "" ["classes"]=> array(4) { [0]=> string(0) "" [1]=> string(9) "menu-item" [2]=> string(24) "menu-item-type-post_type" [3]=> string(21) "menu-item-object-page" } ["xfn"]=> string(0) "" ["current"]=> bool(false) ["current_item_ancestor"]=> bool(false) ["current_item_parent"]=> bool(false) } object(WP_Post)#285 (40) { ["ID"]=> int(461) ["post_author"]=> string(1) "1" ["post_date"]=> string(19) "2018-10-17 17:24:42" ["post_date_gmt"]=> string(19) "2018-10-17 17:24:42" ["post_content"]=> string(1) " " ["post_title"]=> string(0) "" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(6) "closed" ["ping_status"]=> string(6) "closed" ["post_password"]=> string(0) "" ["post_name"]=> string(3) "461" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2018-10-17 17:47:31" ["post_modified_gmt"]=> string(19) "2018-10-17 17:47:31" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(43) ["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=461" ["menu_order"]=> int(8) ["post_type"]=> string(13) "nav_menu_item" ["post_mime_type"]=> string(0) "" ["comment_count"]=> string(1) "0" ["filter"]=> string(3) "raw" ["db_id"]=> int(461) ["menu_item_parent"]=> string(3) "459" ["object_id"]=> string(2) "69" ["object"]=> string(4) "page" ["type"]=> string(9) "post_type" ["type_label"]=> string(4) "Page" ["url"]=> string(69) "//localhost:3000/arthurjordanfoundation/grantseekers/guidelines/" ["title"]=> string(10) "GUIDELINES" ["target"]=> string(0) "" ["attr_title"]=> string(0) "" ["description"]=> string(0) "" ["classes"]=> array(4) { [0]=> string(0) "" [1]=> string(9) "menu-item" [2]=> string(24) "menu-item-type-post_type" [3]=> string(21) "menu-item-object-page" } ["xfn"]=> string(0) "" ["current"]=> bool(false) ["current_item_ancestor"]=> bool(false) ["current_item_parent"]=> bool(false) } object(WP_Post)#284 (40) { ["ID"]=> int(462) ["post_author"]=> string(1) "1" ["post_date"]=> string(19) "2018-10-17 17:24:42" ["post_date_gmt"]=> string(19) "2018-10-17 17:24:42" ["post_content"]=> string(1) " " ["post_title"]=> string(0) "" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(6) "closed" ["ping_status"]=> string(6) "closed" ["post_password"]=> string(0) "" ["post_name"]=> string(3) "462" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2018-10-17 17:47:31" ["post_modified_gmt"]=> string(19) "2018-10-17 17:47:31" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(43) ["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=462" ["menu_order"]=> int(9) ["post_type"]=> string(13) "nav_menu_item" ["post_mime_type"]=> string(0) "" ["comment_count"]=> string(1) "0" ["filter"]=> string(3) "raw" ["db_id"]=> int(462) ["menu_item_parent"]=> string(3) "459" ["object_id"]=> string(2) "65" ["object"]=> string(4) "page" ["type"]=> string(9) "post_type" ["type_label"]=> string(4) "Page" ["url"]=> string(75) "//localhost:3000/arthurjordanfoundation/grantseekers/scope-of-funding/" ["title"]=> string(11) "LIMITATIONS" ["target"]=> string(0) "" ["attr_title"]=> string(0) "" ["description"]=> string(0) "" ["classes"]=> array(4) { [0]=> string(0) "" [1]=> string(9) "menu-item" [2]=> string(24) "menu-item-type-post_type" [3]=> string(21) "menu-item-object-page" } ["xfn"]=> string(0) "" ["current"]=> bool(false) ["current_item_ancestor"]=> bool(false) ["current_item_parent"]=> bool(false) } object(WP_Post)#283 (40) { ["ID"]=> int(463) ["post_author"]=> string(1) "1" ["post_date"]=> string(19) "2018-10-17 17:24:43" ["post_date_gmt"]=> string(19) "2018-10-17 17:24:43" ["post_content"]=> string(1) " " ["post_title"]=> string(0) "" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(6) "closed" ["ping_status"]=> string(6) "closed" ["post_password"]=> string(0) "" ["post_name"]=> string(3) "463" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2018-10-17 17:47:31" ["post_modified_gmt"]=> string(19) "2018-10-17 17:47:31" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(0) ["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=463" ["menu_order"]=> int(10) ["post_type"]=> string(13) "nav_menu_item" ["post_mime_type"]=> string(0) "" ["comment_count"]=> string(1) "0" ["filter"]=> string(3) "raw" ["db_id"]=> int(463) ["menu_item_parent"]=> string(1) "0" ["object_id"]=> string(2) "49" ["object"]=> string(4) "page" ["type"]=> string(9) "post_type" ["type_label"]=> string(4) "Page" ["url"]=> string(51) "//localhost:3000/arthurjordanfoundation/apply/" ["title"]=> string(11) "LOGIN/APPLY" ["target"]=> string(0) "" ["attr_title"]=> string(0) "" ["description"]=> string(0) "" ["classes"]=> array(4) { [0]=> string(0) "" [1]=> string(9) "menu-item" [2]=> string(24) "menu-item-type-post_type" [3]=> string(21) "menu-item-object-page" } ["xfn"]=> string(0) "" ["current"]=> bool(false) ["current_item_ancestor"]=> bool(false) ["current_item_parent"]=> bool(false) } object(WP_Post)#282 (40) { ["ID"]=> int(464) ["post_author"]=> string(1) "1" ["post_date"]=> string(19) "2018-10-17 17:24:43" ["post_date_gmt"]=> string(19) "2018-10-17 17:24:43" ["post_content"]=> string(1) " " ["post_title"]=> string(0) "" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(6) "closed" ["ping_status"]=> string(6) "closed" ["post_password"]=> string(0) "" ["post_name"]=> string(3) "464" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2018-10-17 17:47:32" ["post_modified_gmt"]=> string(19) "2018-10-17 17:47:32" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(0) ["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=464" ["menu_order"]=> int(11) ["post_type"]=> string(13) "nav_menu_item" ["post_mime_type"]=> string(0) "" ["comment_count"]=> string(1) "0" ["filter"]=> string(3) "raw" ["db_id"]=> int(464) ["menu_item_parent"]=> string(1) "0" ["object_id"]=> string(2) "45" ["object"]=> string(4) "page" ["type"]=> string(9) "post_type" ["type_label"]=> string(4) "Page" ["url"]=> string(55) "//localhost:3000/arthurjordanfoundation/resources/" ["title"]=> string(9) "RESOURCES" ["target"]=> string(0) "" ["attr_title"]=> string(0) "" ["description"]=> string(0) "" ["classes"]=> array(5) { [0]=> string(0) "" [1]=> string(9) "menu-item" [2]=> string(24) "menu-item-type-post_type" [3]=> string(21) "menu-item-object-page" [4]=> string(22) "menu-item-has-children" } ["xfn"]=> string(0) "" ["current"]=> bool(false) ["current_item_ancestor"]=> bool(false) ["current_item_parent"]=> bool(false) } object(WP_Post)#281 (40) { ["ID"]=> int(465) ["post_author"]=> string(1) "1" ["post_date"]=> string(19) "2018-10-17 17:24:43" ["post_date_gmt"]=> string(19) "2018-10-17 17:24:43" ["post_content"]=> string(1) " " ["post_title"]=> string(0) "" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(6) "closed" ["ping_status"]=> string(6) "closed" ["post_password"]=> string(0) "" ["post_name"]=> string(3) "465" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2018-10-17 17:47:32" ["post_modified_gmt"]=> string(19) "2018-10-17 17:47:32" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(45) ["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=465" ["menu_order"]=> int(12) ["post_type"]=> string(13) "nav_menu_item" ["post_mime_type"]=> string(0) "" ["comment_count"]=> string(1) "0" ["filter"]=> string(3) "raw" ["db_id"]=> int(465) ["menu_item_parent"]=> string(3) "464" ["object_id"]=> string(2) "75" ["object"]=> string(4) "page" ["type"]=> string(9) "post_type" ["type_label"]=> string(4) "Page" ["url"]=> string(80) "//localhost:3000/arthurjordanfoundation/resources/active-grants-and-990-pf/" ["title"]=> string(13) "ACTIVE GRANTS" ["target"]=> string(0) "" ["attr_title"]=> string(0) "" ["description"]=> string(0) "" ["classes"]=> array(4) { [0]=> string(0) "" [1]=> string(9) "menu-item" [2]=> string(24) "menu-item-type-post_type" [3]=> string(21) "menu-item-object-page" } ["xfn"]=> string(0) "" ["current"]=> bool(false) ["current_item_ancestor"]=> bool(false) ["current_item_parent"]=> bool(false) } object(WP_Post)#280 (40) { ["ID"]=> int(456) ["post_author"]=> string(1) "1" ["post_date"]=> string(19) "2018-10-17 17:24:44" ["post_date_gmt"]=> string(19) "2018-10-17 17:24:44" ["post_content"]=> string(1) " " ["post_title"]=> string(0) "" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(6) "closed" ["ping_status"]=> string(6) "closed" ["post_password"]=> string(0) "" ["post_name"]=> string(3) "456" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2018-10-17 17:47:32" ["post_modified_gmt"]=> string(19) "2018-10-17 17:47:32" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(45) ["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=456" ["menu_order"]=> int(13) ["post_type"]=> string(13) "nav_menu_item" ["post_mime_type"]=> string(0) "" ["comment_count"]=> string(1) "0" ["filter"]=> string(3) "raw" ["db_id"]=> int(456) ["menu_item_parent"]=> string(3) "464" ["object_id"]=> string(3) "320" ["object"]=> string(4) "page" ["type"]=> string(9) "post_type" ["type_label"]=> string(4) "Page" ["url"]=> string(62) "//localhost:3000/arthurjordanfoundation/resources/990-pf/" ["title"]=> string(6) "990-PF" ["target"]=> string(0) "" ["attr_title"]=> string(0) "" ["description"]=> string(0) "" ["classes"]=> array(4) { [0]=> string(0) "" [1]=> string(9) "menu-item" [2]=> string(24) "menu-item-type-post_type" [3]=> string(21) "menu-item-object-page" } ["xfn"]=> string(0) "" ["current"]=> bool(false) ["current_item_ancestor"]=> bool(false) ["current_item_parent"]=> bool(false) } object(WP_Post)#279 (40) { ["ID"]=> int(466) ["post_author"]=> string(1) "1" ["post_date"]=> string(19) "2018-10-17 17:24:44" ["post_date_gmt"]=> string(19) "2018-10-17 17:24:44" ["post_content"]=> string(1) " " ["post_title"]=> string(0) "" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(6) "closed" ["ping_status"]=> string(6) "closed" ["post_password"]=> string(0) "" ["post_name"]=> string(3) "466" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2018-10-17 17:47:32" ["post_modified_gmt"]=> string(19) "2018-10-17 17:47:32" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(45) ["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=466" ["menu_order"]=> int(14) ["post_type"]=> string(13) "nav_menu_item" ["post_mime_type"]=> string(0) "" ["comment_count"]=> string(1) "0" ["filter"]=> string(3) "raw" ["db_id"]=> int(466) ["menu_item_parent"]=> string(3) "464" ["object_id"]=> string(2) "71" ["object"]=> string(4) "page" ["type"]=> string(9) "post_type" ["type_label"]=> string(4) "Page" ["url"]=> string(59) "//localhost:3000/arthurjordanfoundation/resources/faq/" ["title"]=> string(3) "FAQ" ["target"]=> string(0) "" ["attr_title"]=> string(0) "" ["description"]=> string(0) "" ["classes"]=> array(4) { [0]=> string(0) "" [1]=> string(9) "menu-item" [2]=> string(24) "menu-item-type-post_type" [3]=> string(21) "menu-item-object-page" } ["xfn"]=> string(0) "" ["current"]=> bool(false) ["current_item_ancestor"]=> bool(false) ["current_item_parent"]=> bool(false) } object(WP_Post)#278 (40) { ["ID"]=> int(467) ["post_author"]=> string(1) "1" ["post_date"]=> string(19) "2018-10-17 17:24:44" ["post_date_gmt"]=> string(19) "2018-10-17 17:24:44" ["post_content"]=> string(1) " " ["post_title"]=> string(0) "" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(6) "closed" ["ping_status"]=> string(6) "closed" ["post_password"]=> string(0) "" ["post_name"]=> string(3) "467" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2018-10-17 17:47:32" ["post_modified_gmt"]=> string(19) "2018-10-17 17:47:32" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(45) ["guid"]=> string(51) "//localhost:3000/arthurjordanfoundation/?p=467" ["menu_order"]=> int(15) ["post_type"]=> string(13) "nav_menu_item" ["post_mime_type"]=> string(0) "" ["comment_count"]=> string(1) "0" ["filter"]=> string(3) "raw" ["db_id"]=> int(467) ["menu_item_parent"]=> string(3) "464" ["object_id"]=> string(2) "77" ["object"]=> string(4) "page" ["type"]=> string(9) "post_type" ["type_label"]=> string(4) "Page" ["url"]=> string(81) "//localhost:3000/arthurjordanfoundation/resources/grantee-perception-report/" ["title"]=> string(25) "GRANTEE PERCEPTION REPORT" ["target"]=> string(0) "" ["attr_title"]=> string(0) "" ["description"]=> string(0) "" ["classes"]=> array(4) { [0]=> string(0) "" [1]=> string(9) "menu-item" [2]=> string(24) "menu-item-type-post_type" [3]=> string(21) "menu-item-object-page" } ["xfn"]=> string(0) "" ["current"]=> bool(false) ["current_item_ancestor"]=> bool(false) ["current_item_parent"]=> bool(false) } 
 
 */
  $this->menuparent = intval($item->menu_item_parent);

 // $classes = empty( $item->classes ) ? array() : (array) $item->classes;
      //  $classes[] = 'menu-item-' . $item->ID;
      
$this->current_submenu_id = intval($item->object_id);
  //var_dump($object_id);/* could hold $object_id and check when changes in this function to know when at new submenu item; use intval to change before comparing */
if ($this->current_submenu_id !== $this->previous_submenu_id) {

    $output .= "</ul></li></div></div><div class=\"grid-x\"><div class=\"cell small-12 medium-4\"><li><ul>\n";
    $this->previous_submenu_id = $this->current_submenu_id;
}
 
        /* ["object_id"]=> string(3) "421"   POST ID OF board of trustees in ajf_posts
    ["object"]=> string(4) "page" 
    ["type"]=> string(9) "post_type" 
    ["type_label"]=> string(4) "Page" */

//  $menusub = $item->menu_item_parent->object_id;
//$output .= "<p>{$menusub}</p>\n";

        if ($this->isMegaMenu != intval($item->menu_item_parent)) {
            $this->isMegaMenu = 0;
         }

         if ($this->isMegaMenu === intval($item->menu_item_parent)) {
         	$this->count++;
         	if ($this->count > 3) {
         		//  $output .= "</ul></li></div></div><div class=\"grid-x\"><div class=\"cell small-12 medium-4\"><li><ul>\n";
         		 $this->count = 0;
         	}
         }


        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        // managing divider: add divider class to an element to get a divider before it.
        $divider_class_position = array_search('divider', $classes);
        if ($divider_class_position !== false) {
            $output .= "<li class=\"divider\"></li>\n";
            unset($classes[$divider_class_position]);
        }



        if (array_search('megamenu', $classes) !== false) {
            $this->isMegaMenu = $item->ID;
         }

         




        $classes[] = ($args->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
        $classes[] = 'menu-item-'.$item->ID;
        if ($depth && $args->has_children) {
            $classes[] = 'dropdown-submenu';
        }

        $class_names = implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="'.esc_attr($class_names).'"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
        $id = strlen($id) ? ' id="'.esc_attr($id).'"' : '';

        $output .= $indent.'<li'.$id.$value.$class_names.$li_attributes.'>';

        $attributes = !empty($item->attr_title) ? ' title="'.esc_attr($item->attr_title).'"' : '';
        $attributes .= !empty($item->target) ? ' target="'.esc_attr($item->target).'"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="'.esc_attr($item->xfn).'"' : '';
        $attributes .= !empty($item->url) ? ' href="'.esc_attr($item->url).'"' : '';
        $attributes .= ($args->has_children) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';

        $item_output = $args->before;
        $item_output .= '<a'.$attributes.'>';
        $item_output .= $args->link_before.apply_filters('the_title', $item->title, $item->ID).$args->link_after;

            // add support for menu item title
            if (strlen($item->attr_title) > 2) {
                $item_output .= '<h3 class="title">'.$item->attr_title.'</h3>';
            }
            // add support for menu item descriptions
            if (strlen($item->description) > 2) {
                $item_output .= '</a> <span class="sub">'.$item->description.'</span>';
            }
        $item_output .= (($depth == 0 || 1) && $args->has_children) ? ' <b class="caret"></b></a>' : '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }


    public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output)
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
    }
}
endif; 
