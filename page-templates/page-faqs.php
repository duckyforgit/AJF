<?php
/*
Template Name: Faqs
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
<?php while ( have_posts() ) : the_post(); ?> 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="grid-container" >
		<div class="grid-x align-center">

    <div class="cell small-12 floating-title-container">
<?php// while ( have_posts() ) : the_post(); ?>     
     <h1 class="about-us-title logo-3 text-center"><?php the_title(); ?> </h1>
    <p class="about-us-story-content"><?php the_content(); ?></p>



    	<ul class="accordion" data-accordion   data-allow-all-closed="true" data-multi-expand="true">
		  <li class="accordion-item" data-accordion-item>
		    <!-- Accordion tab title -->
		    <a href="#" class="accordion-title">Question 1</a>

		    <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
		    <div class="accordion-content" data-tab-content>
		      <p>Answer</p>
		      <!-- <a href="#">Nowhere to Go</a> -->
		    </div>
		  </li>
		   <li class="accordion-item" data-accordion-item>
		    <!-- Accordion tab title -->
		    <a href="#" class="accordion-title">Question 2</a>

		    <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
		    <div class="accordion-content" data-tab-content>
		      <p>Answer</p>
		      <!-- <a href="#">Nowhere to Go</a> -->
		    </div>
		  </li>
  <!-- ... -->
		</ul>
<?php //endwhile; ?>
    </div>
    </div>
</div> 
</article>
<?php endwhile; ?>
<hr>
<div class="grid-container">  
<div class="grid-x align-center">
  <div class="cell small-12">
    <?php custom_breadcrumbs(); ?> 

 </div>
</div>
</div> 
 
 	<?php get_footer();  