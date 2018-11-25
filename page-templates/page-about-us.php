<?php
/*
Template Name: About Us
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
    <?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
  </div>
  <footer>
    <?php wp_link_pages( 'before=<ul class="page-links">&after=</ul>&link_before=<li class="page-link">&link_after=</li>' ); ?>

    <?php
      wp_link_pages(
        array(
          'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
          'after'  => '</p></nav>',
        )
      );
    ?>
    <?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
  </footer> -->
 
     
 
<div class="grid-container" >
		<div class="grid-x align-center">

    <div class="cell small-12 floating-title-container">
     
     <h1 class="about-us-title logo-3 text-center">Our Story / Philosophy / Vision</h1>
     <div class="grid-x">
      <div class="cell small-6">
        <img src="<?php echo get_stylesheet_directory_uri().'/dist/assets/images/Butler.jpg'; ?>" width="" height="" alt=""  class="about-us-image" >
      </div>
     <div class="cell small-6">
    <p class="about-us-story-content"><br><br><br>Arthur Jordan established this charitable trust on December 24, 1928, with assets valued at $2,000,000. <br><br>
 Early grants were made to <em>Butler University</em>, the <em>International YMCA</em>, youth organizations such as <em>Camp Fire Girls</em> and <em>Cub Scouts</em>, as well as the <em>Anti-Saloon League</em>.  Grants were suspended in 1933 and 1934 due to the Depression.</p>
 </div>
</div>
</div>
</div>
<div class="grid-x align-center">
    <div class="cell small-6">
    <p class="about-us-content">In 1937, the foundation purchased the home of President Benjamin Harrison from his widow.  The mansion served as a women’s dormitory for the <em>Arthur Jordan Conservatory of Music</em>, and the trustees agreed that a portion of the home would remain a memorial to the former president.  Following the move of the school to <em>Butler University</em>, the home became a museum.  A major renovation in 1974 and a <em>Save America’s Treasures</em> grant in 2008 have allowed this accredited museum, renamed the <em>Benjamin Harrison Presidential Site</em>, to become nationally renowned.</p>
    </div>
    <div class="cell small-6">
      <div class="about-us-image">
      <?php the_post_thumbnail(); ?>
      </div>
    </div>
</div><br><br>
<div class="grid-x align-center">
    <div class="cell small-6">
<p>In keeping with Mr. Jordan’s wishes, the Foundation makes grants each year to various charitable organizations in the Indianapolis area.  Since its inception, the Arthur Jordan Foundation has contributed over $25,000,000 to the community.</p>
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