<?php
/**
 * Template part for expanding search form
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 *
 * A responsive timeline that can house images in each timeline item. Works 
 * * with SVG's or images. Change the $timeline-item-card variable to true 
 * to add a background to each timeline content item.
 */

?>
<style>

.animated-search-form[type=search] {
  width: 10rem;
  border: 0.125rem solid #e6e6e6;
  box-shadow: 0 0 3.125rem rgba(0, 0, 0, 0.18);
  border-radius: 0;
  background-image: url("//image.ibb.co/i7NbrQ/search_icon_15.png");
  background-position: 0.625rem 0.625rem;
  background-repeat: no-repeat;
  padding: 0.75rem 1.25rem 0.75rem 2rem;
  transition: width 0.4s ease-in-out;
}

.animated-search-form[type=search]:focus {
  width: 100%;
}

</style>

<?php wp_reset_query(); 
// sort by priority - custom field
 $args = array(
  'post_type' => ''
   /*'orderby'   => 'meta_value',
    'order' => 'ASC',  */  
 );
$query = new WP_Query( $args ); ?>
 
 
 <input type="search" name="search" placeholder="Search.." class="animated-search-form">

