<?php
/**
 * Configure responsive images sizes
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 2.6.0
 */

// Add featured image sizes
//
// Sizes are optimized and cropped for landscape aspect ratio
// and optimized for HiDPI displays on 'small' and 'medium' screen sizes.
// 
// width is max size; same with height
add_image_size( 'featured-small', 640, 200, true ); // name, width, height, crop
add_image_size( 'fp-acf-medium', 900, 450, true );
add_image_size( 'featured-medium', 1280, 400, true );
add_image_size( 'featured-large', 1440, 700, true );
add_image_size( 'featured-xlarge', 1920, 700, true );
add_image_size( 'featured-tall', 450, 900, true );
add_image_size( 'featured-mobile', 450, 700, true );
add_image_size( 'featured-tablet', 768, 700, true );
// cropped hero
add_image_size( 'mytheme-hero-cropped', 767, 460, true );

// scaled-down cropped hero 1
add_image_size( 'mytheme-hero-cropped-smaller', 560, 336, true );

// scaled-down cropped hero 2
add_image_size( 'mytheme-hero-cropped-smallest', 360, 216, true );
// Add additional image sizes
add_image_size( 'fp-small', 640 );
 
add_image_size( 'fp-medium', 1024 );
add_image_size( 'fp-large', 1200 );
add_image_size( 'fp-xlarge', 1920 );



// Register the new image sizes for use in the add media modal in wp-admin
function foundationpress_custom_sizes( $sizes ) {
	return array_merge(
		$sizes, array(
			'fp-small'  => __( 'FP Small' ),
			'fp-medium' => __( 'FP Medium' ),
			'fp-large'  => __( 'FP Large' ),
			'fp-xlarge' => __( 'FP XLarge' ),
		)
	);
}
add_filter( 'image_size_names_choose', 'foundationpress_custom_sizes' );

// Add custom image sizes attribute to enhance responsive image functionality for content images
function foundationpress_adjust_image_sizes_attr( $sizes, $size ) {

	// Actual width of image
	$width = $size[0];

	// Full width page template
	if ( is_page_template( 'page-templates/front.php' ) ) {
		if ( 1200 < $width ) {
			$sizes = '(max-width: 1900px) 98vw, 1900px';
		} else {
			$sizes = '(max-width: 1199px) 98vw, ' . $width . 'px';
		}
	} //else { // Default 3/4 column post/page layout
		//if ( 770 < $width ) {
		//	$sizes = '(max-width: 639px) 98vw, (max-width: 1199px) 64vw, 770px';
		//} else {
		//	$sizes = '(max-width: 639px) 98vw, (max-width: 1199px) 64vw, ' . $width . 'px';
		//}
	//}

	return $sizes;
}
//add_filter( 'wp_calculate_image_sizes', 'foundationpress_adjust_image_sizes_attr', 10, 2 );

// Remove inline width and height attributes for post thumbnails
function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
	if ( ! strpos( $html, 'attachment-shop_single' ) ) {
		$html = preg_replace( '/^(width|height)=\"\d*\"\s/', '', $html );
	}
	return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );


/**
 * Responsive Image Helper Function
 *
 * @param string $image_id the id of the image (from ACF or similar)
 * @param string $image_size the size of the thumbnail image or custom image size
 * @param string $max_width the max width this image will be shown to build the sizes attribute 
 */

function awesome_acf_responsive_image($image_id,$image_size,$max_width){

	// check the image ID is not blank
	if($image_id != '') {
 
		// set the default src image size
		$image_src = wp_get_attachment_image_url( $image_id, $image_size );

		// set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

		// generate the markup for the responsive image
		echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';

	 

	}
}
add_filter( 'max_srcset_image_width', 'awesome_acf_max_srcset_image_width', 10 , 2 );

// set the max image width 
function awesome_acf_max_srcset_image_width() {
	return 2200;
}



add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);

add_filter('manage_post-type_posts_columns', 'posts_columns', 5);
add_action('manage_post-type_posts_custom_column', 'posts_custom_columns', 5, 2);
function posts_columns($defaults){
    $defaults['riv_post_thumbs'] = __('Thumbs');
    return $defaults;
}
function posts_custom_columns($column_name, $id){
    if($column_name === 'riv_post_thumbs'){
		if( has_post_thumbnail() ) {
	    	echo the_post_thumbnail('medium');
	 	} else {
	    	_e('No Thumbnail For Post');
        }
        
	echo "
	
<style> .column-riv_post_thumbs img{ max-height: 300px; max-width: 250px;     } </style>
"; } }




add_filter('manage_pages_columns', 'pages_columns', 5);
add_action('manage_pages_custom_column', 'pages_custom_columns', 5, 2);

add_filter('manage_page-type_pages_columns', 'pages_columns', 5);
add_action('manage_page-type_pages_custom_column', 'pages_custom_columns', 5, 2);
function pages_columns($defaults){
    $defaults['riv_page_thumbs'] = __('Thumbs');
    return $defaults;
}
function pages_custom_columns($column_name, $id){
    if($column_name === 'riv_page_thumbs'){
		if( has_post_thumbnail() ) {
	    	echo the_post_thumbnail('medium');
	 	} else {
	    	_e('No Thumbnail For page');
        }
        
	echo "
	
<style> .column-riv_page_thumbs img{ max-height: 300px; max-width: 250px;     } </style>
"; } }