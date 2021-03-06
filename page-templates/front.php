<?php
/*
Template Name: Front
*/ 
?>
<?php
//require($_SERVER['DOCUMENT_ROOT'].'/ArthurJordanFoundation/wp-load.php');
// added new comment

?>

 <?php get_header('mega'); ?>
 <?php 
echo do_shortcode('[smartslider3 slider=2]');
?>   
  <div class="marketing">
		<div class="banner-wrapper">
			<h2 class="tagline"><small>Welcome to the</small><br>Arthur Jordan Foundation</h2> 
			  <h3 class="subheader">Granting funds for fine arts and higher education</h3> 
				<a role="button" class="download large button sites-button hide-for-small-only" href="">APPLY NOW</a>
			 
		</div>
	</div>  
 
  
 
	 
	<!-- 	 <img data-interchange="[<?php// the_post_thumbnail('featured-mobile') ?>, small], [<?php// the_post_thumbnail('featured-tablet') ?>, xmedium], [<?php //the_post_thumbnail('featured-large') ?>, large]" alt="featured image"> -->

 
 
<?php// do_action( 'foundationpress_before_content' ); ?>
 
  <div class="section-divider"></div>  

 <section class="grid-container" role="main">

	
 			 
			
<div class="grid-x grid-margin-x align-middle align-center">
 <?php while ( have_posts() ) : the_post(); ?>
    <div class="small-12 medium-5 cell"> 
	 <div <?php  post_class(); ?> id="post-<?php the_ID(); ?>">  
			<?php  do_action( 'foundationpress_page_before_entry_content' ); ?>
		 <?php echo the_post_thumbnail(); ?>
		 	<!--  <a title="By Peetlesnumber1 [CC BY-SA 3.0 
 (https://creativecommons.org/licenses/by-sa/3.0
)], from Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Jordan_Hall1.JPG"><img width="512" alt="Jordan Hall1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Jordan_Hall1.JPG/512px-Jordan_Hall1.JPG"></a>  -->
<!-- <img src="<?php //echo get_stylesheet_directory_uri();?>/src/assets/images/jordan-hall.jpg" alt="" > -->
		</div>
	</div>
	<div class="small-12 medium-5 cell">
	 	<div class="entry-content">
				<!-- <div data-aos="zoom-in" data-aos-anchor-placement="center-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="2000" class="aos-init aos-animate"> -->
					 
				<!-- <h2 class="welcome"><?php the_title(); ?></h2> -->
				<?php the_content(); ?>
			</div>
					 
			<!-- 	<div class="grid-x align-center">
				  <div class="wrapper_1">
					<h2 style="font-family:'Poppins';" >01</h2> -->
				 <!--   <div data-aos="zoom-in" data-aos-anchor-placement="center-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="2000" class="aos-init aos-animate">
			      </div>  
			 	</div>
			   </div> -->

			</div>
	 
	 
 	<?php endwhile; ?>
</div> 

  </section> 
  <div class="section-divider"></div>   
<?php// endwhile; ?>
<?php do_action( 'foundationpress_after_content' ); ?>

<!-- <div class="section-divider"></div> -->
<section class="advancing">
    <div class="grid-container fluid" >
	<div class="grid-x grid-margin-x align-middle align-center">
	   <div class="small-12 cell text-center">
	     <div class="wrapper">
	     	<div data-aos="fade-up" data-aos-anchor-placement="center-bottom">
		  <h2 class="advancing-title">Advancing Fine Arts and Higher Education
		  </h2>   
		</div> 
		  
		</div>
	</div>
</div>
</div>
    
				<!--Enhancing <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p> -->
	<?php get_template_part( 'template-parts/sections/content', 'counter' ); ?>
  <div class="grid-container" >
  <div class="grid-x grid-margin-x align-center">
	 <div class="small-12 cell text-center">
	   <div class="advancing-buttons">
		<a href="#" class="button large">Learn More</a>
		<a href="#" class="button large hollow">Apply Now</a>
	  </div>
     </div>
  </div>  
  
  </section>  

</div> 
<?php get_footer(); 