<?php
/*
Template Name: Who We Are
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

 <?php
// if (class_exists('MultiPostThumbnails')) :
// MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');
// endif;
?> 

<!--<?php// if ( has_post_thumbnail( $post->ID ) ) : ?>
	  <header class="featured-hero" role="banner" data-interchange="[<?php //the_post_thumbnail_url( 'featured-small' ); ?>, small], [<?php ///the_post_thumbnail_url( 'featured-medium' ); ?>, medium], [<?php //the_post_thumbnail_url( 'featured-large' ); ?>, large], [<?php //the_post_thumbnail_url( 'featured-xlarge' ); ?>, xlarge]">
	</header>  
<?php //endif; ?>-->

 
 
         
<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> -->
 <!--  <header>
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </header>
  <div class="entry-content">
    <?php the_content(); ?>
    <?php //edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
  </div>
  <footer>
    <?php// wp_link_pages( 'before=<ul class="page-links">&after=</ul>&link_before=<li class="page-link">&link_after=</li>' ); ?>

    <?php // wp_link_pages(  array(
         // 'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
         // 'after'  => '</p></nav>',
     //   )
    //  );
    ?>
    <?php// $tag = get_the_tags(); //if ( $tag ) { ?><p><?php// the_tags(); ?></p><?php// } ?>
  </footer> -->
 
     
 
<div class="grid-container floating-title-container" >
		<div class="grid-x align-center align-spaced">

    <div class="cell small-12  ">
     
     <h1 class="about-us-title logo-3 text-center">Our Story / Philosophy / Vision</h1>
   </div>
 </div>
</div>
  
 <section class="about-us-section vertical-post gray">
  <div class="grid-container ">

 <p>LAYOUT OPTION 1</p>
    <article id="post-<?php the_ID(); ?>" class="" itemscope="" itemtype="">
        <div class="grid-x grid-margin-x blog-list align-middle ">

           <div class="cell medium-12 large-8 ">
           <div class="post-body">
                      <h2 class="post-title"><a href=" " itemprop="url" rel="bookmark">Arthur Jordan established this charitable trust on December 24, 1928, with assets valued at $2,000,000.</a></h2>
                      <div class="entry" itemprop="articleBody">

                        <p>Early grants were made to Butler University, the International YMCA, youth organizations such as Camp Fire Girls and Cub Scouts, as well as the Anti-Saloon League.  Grants were suspended in 1933 and 1934 due to the Depression.</p>
                                              </div><!-- /.entry -->
                    </div>

        </div>

        <div class="grid-x grid-margin-x blog-list align-middle ">

           <div class="cell medium-12 large-8 ">
           <div class="post-body">
                      <h3 class="post-title"><a href=" " itemprop="url" rel="bookmark">In 1937, the foundation purchased the home of President Benjamin Harrison from his widow.</a></h3>
                      <div class="entry" itemprop="articleBody">
                        <p>The mansion served as a women’s dormitory for the Arthur Jordan Conservatory of Music, and the trustees agreed that a portion of the home would remain a memorial to the former president.  Following the move of the school to Butler University, the home became a museum.  A major renovation in 1974 and a Save America’s Treasures grant in 2008 have allowed this accredited museum, renamed the Benjamin Harrison Presidential Site, to become nationally renowned.</p>
                                              </div><!-- /.entry -->
                    </div>

        </div>

        <div class="grid-x grid-margin-x blog-list align-middle ">

           <div class="cell medium-12 large-8 ">
           <div class="post-body">
                      <h3 class="post-title"><a href=" " itemprop="url" rel="bookmark">In keeping with Mr. Jordan’s wishes, the Foundation makes grants each year to various charitable organizations in the Indianapolis area.</a></h3>
                      <div class="entry" itemprop="articleBody">
                         <p>  Since its inception, the Arthur Jordan Foundation has contributed over $25,000,000 to the community.</p>              
                       </div><!-- /.entry -->
                    </div>

        </div>
   </article>

   <p>LAYOUT OPTION 2</p>
    <!-- <div class="grid-x grid-padding-x align-center align">
      <div class="cell "> -->
      <!--   <div class="grid-x grid-margin-x blog-list">      -->      
          <article id="post-<?php the_ID(); ?>" class="" itemscope="" itemtype="">
                <div class="grid-x grid-margin-x blog-list align-middle align-center">

                                      <!-- Featured Image -->
                    <div class="cell medium-12 large-6 large-order-1">
                      <!-- Post Image -->
                      <div class="post-image">
                        <?php $image = get_field('section_1_image');   
          $size = 'fp-acf-medium'; 
          if ( $image ) {
          echo wp_get_attachment_image( $image, $size );
          } 
        ?><!-- <img width="800" height="450" src=" " class="wp-post-image radius wp-post-image" alt="" srcset=" " sizes="(max-width: 800px) 100vw, 800px"> --> 
                      </div><!-- /.post-image -->
                    </div>
                                    
                  <!-- Content -->
                  <div class="cell medium-12 large-6  large-order-2">
                    <!-- Post Body -->
                    <div class="post-body">
                      <h3 class="post-title"><a href=" " itemprop="url" rel="bookmark">Arthur Jordan established this charitable trust on December 24, 1928, with assets valued at $2,000,000.</a></h3>
                      <div class="entry" itemprop="articleBody">

                        <p>Early grants were made to Butler University, the International YMCA, youth organizations such as Camp Fire Girls and Cub Scouts, as well as the Anti-Saloon League.  Grants were suspended in 1933 and 1934 due to the Depression.</p>
                                              </div><!-- /.entry -->
                    </div>
                  </div>
                </div>
              </article>
             <article id="post-<?php the_ID(); ?>"   itemscope="" itemtype="">
                <div class="grid-x  align-middle align-center">

                                      <!-- Featured Image -->
                    <div class="cell medium-12 large-6  large-order-2">
                      <!-- Post Image -->
                      <div class="post-image">
                        
                          <?php $image = get_field('section_1_image');   
                            $size = 'fp-acf-medium'; 
                            if ( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                            } ?>
 
                      </div><!-- /.post-image -->
                    </div>
                                    
                  <!-- Content -->
                  <div class="cell medium-12 large-6  large-order-1 ">
                    <!-- Post Body -->
                    <div class="post-body">
                      <h3 class="post-title"><a href=" " itemprop="url" rel="bookmark">In 1937, the foundation purchased the home of President Benjamin Harrison from his widow.</a></h3>
                      <div class="entry" itemprop="articleBody">
                        <p>The mansion served as a women’s dormitory for the Arthur Jordan Conservatory of Music, and the trustees agreed that a portion of the home would remain a memorial to the former president.  Following the move of the school to Butler University, the home became a museum.  A major renovation in 1974 and a Save America’s Treasures grant in 2008 have allowed this accredited museum, renamed the Benjamin Harrison Presidential Site, to become nationally renowned.</p>
                                              </div><!-- /.entry -->
                    </div><!-- /.post-body -->
                    <!-- Post Meta -->
                    <!-- <div class="post-meta">
                      <ul>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href=" ">September 21, 2017</a></li>
                        <li>By <a href=" " title="Title" class="post-author"><span class="post-author-name">Victor</span></a></li>
                      </ul>
                    </div> --><!-- /.post-meta -->
                  </div>
                </div>
              </article>
              <article id="post-<?php the_ID(); ?>"  itemscope="" itemtype="">
                <div class="grid-x  align-middle align-center">

                                      <!-- Featured Image -->
                    <div class="cell medium-12 large-6 large-order-1">
                      <!-- Post Image -->
                      <div class="grid-x align-right">
                      <div class="post-image">
                          <?php $image = get_field('section_1_image');   
                            $size = 'fp-acf-medium'; 
                            if ( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                            } ?>
                      </div><!-- /.post-image -->
                    </div>
                     </div>               
                  <!-- Content -->
                  <div class="cell medium-12 large-6  large-order-2">
                    <!-- Post Body -->
                    <div class="post-body">
                      <h3 class="post-title"><a href=" " itemprop="url" rel="bookmark">In keeping with Mr. Jordan’s wishes, the Foundation makes grants each year to various charitable organizations in the Indianapolis area.</a></h3>
                      <div class="entry" itemprop="articleBody">
                         <p>  Since its inception, the Arthur Jordan Foundation has contributed over $25,000,000 to the community.</p>              
                       </div><!-- /.entry -->
                    </div><!-- /.post-body -->
                    <!-- Post Meta -->
                   <!--  <div class="post-meta">
                      <ul>
                        <li><i class="fas fa-clock" aria-hidden="true"></i><a href=" ">September 14, 2017</a></li>
                        <li>By <a href=" " title="Title" class="post-author"><span class="post-author-name">Victor</span></a></li>
                      </ul>
                    </div> --><!-- /.post-meta -->
                  </div>
                </div>
              </article> 
            </div> 
    </section>
 
<?php// get_template_part( 'template-parts/sections/content', 'flexbox' ); ?>

<hr>
<div class="grid-container">  
<div class="grid-x align-center">
  <div class="cell small-12">
    <?php custom_breadcrumbs(); ?> 

 </div>
</div>
</div>
 
 
 	<?php get_footer(); 