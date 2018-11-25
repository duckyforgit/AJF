<?php
/**
 * Template part for view report
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
 
<?php wp_reset_query(); 
// sort by priority - custom field
 $args = array(
  'post_type' => 'view-report'
   /*'orderby'   => 'meta_value',
    'order' => 'ASC',  */  
 );
$query = new WP_Query( $args ); ?>
 
<?php if ( $query->have_posts() ) : ?>
<div class="grid-container" >
	<div class="grid-x grid-margin-x align-center">
   		<?php while ( $query->have_posts() ) : $query->the_post(); ?> 
    	<div class="cell small-12"> 
          <h2 class="view-report-title"><?php the_title(); ?></h2>
          <div class="view-report-content">
          <?php the_content(); ?> 
          </div>
          <div class="view-report-button">
			<a href="" class="button call-to-action" title="" >CLICK HERE</a>
          </div>   
        </div>
	 	<?php endwhile; ?>  
	</div>
</div>
<?php endif; ?>