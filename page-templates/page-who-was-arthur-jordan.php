<?php
/*
Template Name: Who was Arthur Jordan
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
 <!--  <header>
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </header>
  <div class="entry-content">
    <?php the_content(); ?>
    <?php// edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
  </div>
  <footer> 
    <?php// wp_link_pages( 'before=<ul class="page-links">&after=</ul>&link_before=<li class="page-link">&link_after=</li>' ); ?>

    <?php
    //  wp_link_pages(
      //  array(
      //    'before' => '<nav id="page-nav"><p>' . __( 'Pages:', //'foundationpress' ),
      //    'after'  => '</p></nav>',
      //  )
    //  );
    ?>
    <?php// $tag = get_the_tags(); if ( $tag ) { ?> <p> <?php// the_tags(); ?> </p> <?php// } ?>
 </footer> -->
 
 
<div class="grid-container floating-title-container" >
    <div class="grid-x align-center align-spaced">

    <div class="cell small-12 ">     
     <h1 class="about-us-title logo-3 text-center">Who was Arthur Jordan</h1>
   </div>
 </div>
</div>
<div class="grid-container" >
   <div class="grid-x grid-margin-x align-center blog-list">   
          <div class="cell small-12 medium-6">        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
           <div class="about-us-story-content">  
            <h2 class="timeline-header">Arthur Jordan was an Indianapolis entrepreneur and businessman in the late 19th and early 20th century.</h2>
           </div>
        </article>
       
      </div>  
    </div>
  </div>
 
 

 <?php get_template_part( 'template-parts/sections/content', 'timeline' ); ?>
 </article> 
 
<hr>
<div class="grid-container">  
<div class="grid-x align-center">
  <div class="cell small-12">
    <?php custom_breadcrumbs(); ?> 

 </div>
</div>
</div>
  
  

 	<?php get_footer();  