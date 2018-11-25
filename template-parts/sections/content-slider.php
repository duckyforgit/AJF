<?php
/**
 * Template part for counter content
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 *
 *  
 */

?>
 
<?php //wp_reset_query(); 
// sort by priority - custom field
 //$args = array(
 // 'post_type' => ''
   /*'orderby'   => 'meta_value',
    'order' => 'ASC',  */  
 //);
//$query = new WP_Query( $args ); ?>
 
<?php //if ( $query->have_posts() ) : ?>
<div class="grid-container" >
  <h2 class="text-center">slider</h2>
    <div class="grid-x grid-margin-x align-center count-wrapper">
      <div class="cell small-6 counter text-center">
     

    
      </div>
  <!--  <div id="slider"></div> -->
      <p>
        <label for="amount">Price range:</label>
        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
      </p>
<div id="slider-range"></div>
  
</div> 
<?php// endif; ?>
 
 