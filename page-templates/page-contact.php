<?php
/*
Template Name: Contact
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

  <?php $image_featured = get_the_post_thumbnail(); 
  echo $image_featured; ?>
	<!-- <img src="<?php// echo $image['url']; ?>"   > -->

<!--$attachment_image = wp_get_attachment_image( $image, $size ); ?>-->

<?php endif; ?>

<div class="grid-container fluid">
  <?php $image_featured = get_the_post_thumbnail_url(); ?>
  <!-- thank you to  a pen by Jacob Stone Design  - hover effects with CSS# for the hower ides -->
   
  <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $image_featured;  ?>" srcset="<?php $image_featured.'-640x200.jpg 400w,'?><?php $image_featured.'-1200x881.jpg 800w,'  ?>" sizes="100vw"></div> 
   
</div>

  
         
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="grid-container" >
    <div class="grid-x align-center">

    <div class="cell small-12 floating-title-container">
     
     <h2 class="about-us-title logo-3 text-center"><?php the_title(); ?></h2>

   </div>
 </div>
 <div class="grid-x ">
  <div class="cell small-12 medium-6">
  <div class="entry-content">
   <h2> Questions?</h2>
   <br>
<p class="support">If you have a question about applying for funding or a general inquiry about the foundation, we invite you to email us using the form below. We generally respond within three business days.</p>

<p>If you prefer a phone call, you can reach us at 317-635-1378.</p>
</div>
</div>
 <div class="cell small-12 medium-6">
 <form action=" " id="usrform">
  <label>Name</label>
  <input type="text">
<label>Email</label>
  <input type="email">
<label>Message</label>
 <textarea name="comment" form="usrform">Enter message here...</textarea>
   <button class="button" style="background-color:#e3e3e3" >CLEAR</button> <button class="button" >SUBMIT</button>

</form>

 </div>
</div>
<br>

<hr>
<div class="grid-container">
 <div class="grid-x grid-margin-x align-spaced">
   
   <div class="cell small-12 medium-6">
     <h3>Address</h3>
      <p>1230 N. Delaware Street</p>
      <p>Indianapolis, IN 46202</p>
<br>
      <h3>Office Hours</h3>
      <p>Monday - Friday</p>
      <p>8:30 a.m. - 5:00 p.m.</p>


   </div>

   <div class="cell small-12 medium-6">
    <img src="https://placehold.it/900x450&amp;text=Google Map" alt="main article image">
       
   </div>
 </div> 


</div>



 
    <?php the_content(); ?>
    <?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
  </div>
   
</div>
</div>
</div>
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