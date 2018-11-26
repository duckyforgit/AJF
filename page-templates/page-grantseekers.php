<?php
/*
Template Name: Grantseekers
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

 
<!-- <div class="grid-container fluid">-->
  <!-- thank you to  a pen by Jacob Stone Design  - hover effects with CSS# for the hower ides -->
  <!--<div class="parallax-window" data-parallax="scroll" data-image-src="<?php// echo $image['url'];  ?>" srcset="<?php// echo $image['url'].'-640x200.jpg 400w,'?><?php //echo $image['url'].'-1200x881.jpg 800w,'  ?>" sizes="100vw"></div> 
   
</div>  -->
 
<!--<div class="grid-container floating-title-container" >
    <div class="grid-x align-center align-spaced">
    <div class="cell small-12  ">
     
     <h1 class="about-us-title logo-3 text-center"><?php the_title(); ?></h1>
   </div>
 </div>
</div>
  
 <section class="grantseekers-section vertical-post gray">
  <div class="grid-container ">-->
    <!-- <div class="grid-x grid-padding-x align-center align">
      <div class="cell "> -->
      <!--   <div class="grid-x grid-margin-x blog-list">      -->      
       <!--   <article id="post-<?php the_ID(); ?>" class="" itemscope="" itemtype="">
                <div class="grid-x grid-margin-x  align-middle align-center">
 
           
                <div class="cell small-12 medium-4">
                  <div class="grantseekers-title">
                    <a href="<?php// echo home_url().'/grantseekers/application-process-and-forms/' ?>"> 
                      <h3>Application Process<br>and Report Forms</h3></a>
                  </div>
                  <div class="grantseekers-content">                   
                      <p>The online application process is outlined to provide instructions and report forms.</p>
                  </div>
                </div> 
                
                <div class="cell small-12 medium-4">
                   <div class="grantseekers-title">
                       <a href="<?php //echo home_url().'/grantseekers/guidelines/' ?>">
                        <h3>Guidelines</h3></a>
                  </div>
                  <div class="grantseekers-content">                   
                      <p>The online application process is outlined to provide instructions and report forms.</p>
                  </div>
                </div>
 
             
                <div class="cell small-12 medium-4">
                    <div class="grantseekers-title">
                      <a href="<?php// echo home_url().'/grantseekers/limitations/' ?>"> 
                        <h3>Limitations</h3></a>
                  </div>
                    <div class="grantseekers-content">
                      <p>It has an easy to override visual style, and is appropriately subdued.</p>
                      </div>
                  </div>-->

                  <!--   <h3>Limitations</h3>
                     <p>The online application process is outlined to provide instructions and report forms.</p> -->
              <!-- </div>
       
                                    
           
    </article>
  </div>
</section>
              
 
<?php// get_template_part( 'template-parts/sections/content', 'flexbox' ); ?>

<hr>
<div class="grid-container">  
<div class="grid-x align-center">
  <div class="cell small-12">
    <?php// custom_breadcrumbs(); ?> 

 </div>
</div>
</div>-->
  
 	<?php get_footer();  