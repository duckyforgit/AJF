<?php
/**
 * Template part for counter content
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 *
 *  Thanks to Code My Ui ( codemyui.com ) for the codepen explaining the 
 *  process.
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
 

 <div id="counters" class="grid-container  ">
    <div class="grid-x grid-margin-x align-middle align-center counter-wrapper">
       
      <?php //while ( $query->have_posts() ) : $query->the_post(); ?> 
       <div class="counter cell small-12 medium-4 align-center">       
        <i class="fas fa-book fa-2x"></i>
        <!--  <button class="restart" data-target="#infinity">Restart</button> -->
        <h2 id="applications" class="timer count-title count-number" data-from="0" data-to="2600" data-speed="5000"></h2>
        <p class="count-text">Total Applications Received</p>
      </div> 
        <div class="counter cell small-12 medium-4 align-center">  
          <i class="fas fa-hand-holding-usd fa-2x"></i>    
          <h2 id="moneyawarded" class="timer count-title count-number" data-from="0" data-to="25000000" data-speed="5000" data-decimals="2"></h2>
          <p class="count-text">Total Grant Money Awarded</p>         
      </div>
      
      <div class="counter cell small-12 medium-4 align-center">
           <i class="fa fa-coffee fa-2x"></i>
           <h2 id="organizations" class="timer count-title count-number" data-to="1700" data-speed="5000" ></h2>
           <p class="count-text ">Total Organizations Funded</p>
      </div> 

      <?php// endwhile;   ?>  
  
    </div>  
  </div> 
  <?php// endif; ?>