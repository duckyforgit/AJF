<?php
/*
Template Name: Thumbnail Options
*/
get_header('inner-page'); ?>
  

<?php

the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']);


// To link Post Thumbnails to the Post Permalink in a specific loop, use the following within your Theme’s template files:

 
/ if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
<?php endif;

// To link all Post Thumbnails on your website to the Post Permalink, put this in the current Theme’s functions.php file:
// 
/**
 * Link all post thumbnails to the post permalink.
 *
 * @param string $html          Post thumbnail HTML.
 * @param int    $post_id       Post ID.
 * @param int    $post_image_id Post image ID.
 * @return string Filtered post image HTML.
 */
function wpdocs_post_image_html( $html, $post_id, $post_image_id ) {
    $html = '<a href="' . get_permalink( $post_id ) . '" alt="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
    return $html;
}
add_filter( 'post_thumbnail_html', 'wpdocs_post_image_html', 10, 3 );

//The default image sizes of WordPress are “thumbnail”, “medium”, “large” and “full” (the size of the image you uploaded). These image sizes can be configured in the WordPress Administration Media panel under Settings > Media. This is how you can use these default sizes with the_post_thumbnail():
//
//
//

$image = get_field('parallax_image_url');//name your custom fields 
$size = 'full'; // (thumbnail, medium, large, full or custom size)

the_post_thumbnail();                  // without parameter -&gt; 'post-thumbnail'
  
the_post_thumbnail( 'thumbnail' );       // Thumbnail (default 150px x 150px max)
the_post_thumbnail( 'medium' );          // Medium resolution (default 300px x 300px max)
the_post_thumbnail( 'large' );           // Large resolution (default 640px x 640px max)
the_post_thumbnail( 'full' );            // Full resolution (original size uploaded)
  
the_post_thumbnail( array(100, 100) );  // Other resolutions

//Post Thumbnails are given a class “wp-post-image” and also get a class depending on the size of the thumbnail being displayed. You can style the output with these CSS selectors:
//
//?>
<style>
img.wp-post-image
img.attachment-thumbnail
img.attachment-medium
img.attachment-large
img.attachment-full
</style>

<?php 

//If you’d like to remove the hardcoding of the ‘height’ and ‘width’ attributes on thumbnail images, which will often effect adaptive/responsive/fluid CSS stylesheets, you can add this snippet to your functions.php,
//
// remove width & height attributes from images
//
function remove_img_attr ($html)
{
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}
 
add_filter( 'post_thumbnail_html', 'remove_img_attr' );


// attr examples
  $attr = array(
    'src'   => $src,
    'class' => "your-css-class",
    'alt'   => "your alt text"
);

//If you are worried about the sizes attributes are too big for your usage, you can do something like this :
//
the_post_thumbnail( 'large', array( 'sizes' => '(max-width:320px) 145px, (max-width:425px) 220px, 500px' ) );


//This example links to the “large” Post Thumbnail image size and must be used within The Loop.
//
if ( has_post_thumbnail() ) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
    if ( ! empty( $large_image_url[0] ) ) {
        printf( '<a href="%1$s" alt="%2$s">%3$s</a>',
            esc_url( $large_image_url[0] ),
            esc_attr( get_the_title_attribute( 'echo=0' ) ),
            get_the_post_thumbnail()
        );
    }
}



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

  

 <?php  if ( has_post_thumbnail( $post->ID ) ) : ?>
	  <header class="featured-hero" role="banner" data-interchange="[<?php  the_post_thumbnail_url( 'featured-small' ); ?>, small], [<?php  the_post_thumbnail_url( 'featured-medium' ); ?>, medium], [<?php  the_post_thumbnail_url( 'featured-large' ); ?>, large], [<?php the_post_thumbnail_url( 'featured-xlarge' ); ?>, xlarge]">
	</header>  
<?php  endif; ?> 

 
 
  
 	<?php get_footer();  