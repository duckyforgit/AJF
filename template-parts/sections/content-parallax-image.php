<?php
/**
 * Template part for parallax image extracted from featured image of post or *  page
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
  
<?php
$image = get_field('parallax_image_url');//name your custom fields 
$size = 'full'; // (thumbnail, medium, large, full or custom size)


$image_2 = get_field('parallax_image_2');
wp_get_attachment_image( $image_2, $size );

if( !empty($image) ): 
	// vars
	$url = $image['url'];
	$title = $image['title'];
	$alt = $image['alt'];
	$caption = $image['caption'];
	// thumbnail
	$size = 'full';	 
	?>
	<!-- <img src="<?php// echo $image['url']; ?>"   > -->

<!--$attachment_image = wp_get_attachment_image( $image, $size ); ?>-->

<?php endif; ?>

<div class="grid-container fluid">
  <!-- thank you to  a pen by Jacob Stone Design  - hover effects with CSS# for the hower ides -->
  <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $image['url'];  ?>" srcset="<?php echo $image['url'].'-640x200.jpg 400w,'?><?php echo $image['url'].'-1200x881.jpg 800w,'  ?>" sizes="100vw"></div> 
   
</div>

<!--<?php// if ( has_post_thumbnail( $post->ID ) ) : ?>
	  <header class="featured-hero" role="banner" data-interchange="[<?php //the_post_thumbnail_url( 'featured-small' ); ?>, small], [<?php ///the_post_thumbnail_url( 'featured-medium' ); ?>, medium], [<?php //the_post_thumbnail_url( 'featured-large' ); ?>, large], [<?php //the_post_thumbnail_url( 'featured-xlarge' ); ?>, xlarge]">
	</header>  
<?php //endif; ?>-->