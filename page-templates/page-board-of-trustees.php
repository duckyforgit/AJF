<?php
/*
Template Name: Board of Trustees
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
	$imagetitle = $image['title'];
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
<div class="grid-container floating-title-container" >
    <div class="grid-x align-center align-spaced">

    <div class="cell small-12 medium-8  ">
     
     <h1 class="about-us-title logo-3 text-center"><?php the_title(); ?></h1>
   </div>
 </div>
</div>

  <div class="grid-container" >
   <div class="grid-x grid-margin-x align-center blog-list">

      <!-- <div class="cell small-12 floating-title-container"> -->
          <div class="cell small-12 medium-8">
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
     
           
           <div class="about-us-story-content"><?php the_content(); ?>
             
           </div>
        
        </article>
       
      </div>  
    </div>
  </div>
 
   <?php endwhile; ?>
 <?php wp_reset_query(); 
// sort by priority - custom field
 $args = array(
  'post_type' => 'board_of_trustees'
   /*'orderby'   => 'meta_value',
    'order' => 'ASC',  */  
 );
$query = new WP_Query( $args ); ?>
  
<section class="board-of-trustees-section vertical-post gray">
<?php if ( $query->have_posts() ) : ?>
  <div class="grid-container" >
  <div class="grid-x grid-margin-x small-up-1 medium-up-1 large-up-3  align-center align-top">
	 <?php  while ( $query->have_posts() ) : $query->the_post(); ?> 
		<div class="cell"> 
  <!-- thank you to  a pen by Jacob Stone Design  - hover effects with CSS# for the hower ideas  and An implementation of Alessio Atzeni's CSS3 effects
    view https://speckyboy.com/custom-hover-click-effects-css-javascript/ for more ideas -->
       <div class="view view-workroom">    
        <?php//  the_post_thumbnail(); ?>
        <div class="view-wrapper">
          <h3 class="title"><?php the_title(); ?></h3>
        </div>
        <div class="mask">
          <h2 class="logo-3"><?php the_title(); ?></h2>
          <h3 class="about-us-board-title"><?php the_field('board_title'); ?></h3>
          <?php// the_content(); ?>    
        </div>
      </div>
    </div>  

 <?php  endwhile;   ?>  
      </div>
    </div>  
<?php  endif; ?>
 </section>
   <!--    </div>
 </div>
</div>   -->

<hr>
<div class="grid-container">  
<div class="grid-x align-center">
  <div class="cell small-12">
    <?php custom_breadcrumbs(); ?> 

 </div>
</div>
</div> 
 	<?php get_footer();  