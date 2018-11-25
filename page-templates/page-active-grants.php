<?php
/*
Template Name: Active Grants
*/
get_header('inner-page'); ?>
  

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

 
 
         
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="grid-container" >
    <div class="grid-x align-center">

    <div class="cell small-12 floating-title-container">
     
     <h1 class="about-us-title logo-3 text-center">Active Grants <?php echo date('Y'); ?></h1>
</div>
</div>
 <div class="grid-x grid-margin-x align-center align-middle">
      <div class="cell small-12 medium-8">
        <!-- loop thru custom post types -->
        <ul class="active-grants-ul">
          <li>
            <div>
             <h3> United Negro College Fund Inc.</h3>
             
            <p>$250,000</p>
             
            <p class="description">United Negro College Fund, Inc. (UNCF) is the nation’s largest minority-education organization.</p>

            <p class="grant-type">EDUCATION</p>
            <?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
            </div>
            <hr class="active-grants-hr">
          </li>

          <li>
            <div>
             <h3> United Negro College Fund Inc.</h3>
             
            <p>$250,000</p>
             
            <p class="description">United Negro College Fund, Inc. (UNCF) is the nation’s largest minority-education organization.</p>

            <p class="grant-type">EDUCATION</p>
            <?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
            </div>
            <hr class="active-grants-hr">
          </li>
        </ul>
      </div>
    </div>
  </div>

 
<hr>
<div class="grid-container">  
<div class="grid-x align-center">
  <div class="cell small-12">
    <?php custom_breadcrumbs(); ?> 

 </div>
</div>
</div> 
  
 	<?php get_footer();  