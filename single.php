<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', '' ); ?>
				  <?php //the_post_navigation( array(
            		//'prev_text'  => __( 'prev Board of Trustees member: %title' ),
            		//'next_text'  => __( 'next Board of Trustees member: %title' ),
       			// )); ?>  

   			 <?php the_post_navigation( array(
        		'prev_text'  => __( '<i class="fas fa-arrow-circle-left"></i> %title' ),
        		'next_text'  => __( '%title <i class="fas fa-arrow-circle-right"></i>' ),
   			 )); ?>
				<?php// the_post_navigation(); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</main>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer();
