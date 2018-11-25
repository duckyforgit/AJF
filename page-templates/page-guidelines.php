<?php
/*
Template Name: Guidelines
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
<?php endif; ?>
<div class="grid-container fluid">
  <!-- thank you to  a pen by Jacob Stone Design  - hover effects with CSS# for the hower ides -->
  <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $image['url'];  ?>" srcset="<?php echo $image['url'].'-640x200.jpg 400w,'?><?php echo $image['url'].'-1200x881.jpg 800w,'  ?>" sizes="100vw"></div> 
   
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="grid-container" >
		<div class="grid-x align-center">

    <div class="cell small-12 floating-title-container">
<?php while ( have_posts() ) : the_post(); ?>     
     <h1 class="about-us-title logo-3 text-center"><?php the_title(); ?> </h1>
     <?php get_template_part( 'template-parts/sections/content', 'vertical-tabs' ); ?>
    <p class="about-us-story-content"><?php //the_content(); ?></p>
    	

    	 <!-- <h2 class="guidelines-grants">The Arthur Jordan Foundation offers three categories of grants.</h2>
		 
				<h3 class="guidelines-numbering"> 01 <span class="guidelines-categories">Operating Grants – <small>funds to support the ongoing function and carry out the mission of the organization</small></span></h3>  
		 
		 
				<h3 class="guidelines-numbering"> 02 <span class="guidelines-categories">Special Project Grants – <small>funds for a project of limited duration</small></span></h3>
		  
		 
				<h3 class="guidelines-numbering"> 03 <span class="guidelines-categories">Capital </span></h3>   -->
     
    	 
<?php endwhile; ?>
    </div>
    </div>
</div> 
</article>
 
 
<div class="grid-container">
	<div class="grid-x">
		<div class="cell small-12"> 
 		<?php  custom_breadcrumbs(); ?>
		</div>
	</div>
</div>
 	<?php get_footer();  