<?php
/*
Template Name: Limitations
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
   
     <h1 class="about-us-title logo-3 text-center"><?php the_title(); ?> </h1>
    <h3 class="about-us-story-content"><?php the_content(); ?>
    	
    	The foundation will not support:</h3>
    </div>
</div>
<div class="grid-x grid-margin-x align-center">
	
<?php// while ( have_posts() ) : the_post(); ?>  		
  
  	<div class="cell small-12 medium-5">
  	<div class="about-us-story-content">
  		<ul class="limitations">
		<li>Any organization that discriminates against people because of their age, race, national origin, ethnicity, creed, gender, sexual orientation or disability.</li>

		  <li>Grants to individuals</li>

		<li>Start up or seed money</li>

		 <li>Medical research or medical causes</li>

		 <li>Scholarships</li>

		 <li>Loans</li>
		</ul>
	</div>
   </div>
	<div class="cell small-12 medium-5">
		<div class="about-us-story-content">
		<ul class="limitations">

		<li>Organizations outside of Marion County, Indiana</li> 

		 <li>Political parties or candidates</li>

		<li>Lobbying organizations</li>

		<li>Grants to other philanthropies</li>

		<li>Primary or secondary educational institutions</li>

		<li>State supported colleges or universities</li> 
	</ul>
	</div>
</div>
<?php// endwhile; ?> 
 
     
 
    </div>
    
 
</article>

<?php// custom_breadcrumbs(); ?>
<div class="grid-container">
	<div class="grid-x">
		<div class="cell small-12"> 
 		<?php  custom_breadcrumbs(); ?>
		</div>
	</div>
</div>
<!-- <div class="grid-container quote-container">
	<div class="grid-x">
			
		<div class="cell small-6 relative">
	 <blockquote>
	 <p class="quote-text">Lorem ipsum dolor site amet, consectetur adipiscing elit.Lorem ipsum dolor site amet, consectetur adipiscing elit.Lorem ipsum dolor site amet, consectetur adipiscing elit.</p>
</blockquote>
</div>
</div>
	</div> -->
 
 
 	<?php get_footer();  