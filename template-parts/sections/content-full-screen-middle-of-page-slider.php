<?php
/**
 * Template part for full screen middle of page slider
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 *
 * A responsive timeline that can house images in each timeline item. Works 
 * * with SVG's or images. Change the $timeline-item-card variable to true 
 * to add a background to each timeline content item.
 */

?>
<style>
 

.fullscreen-image-slider .orbit-image {
  width: 100%;
  height: 100vh;
}

.fullscreen-image-slider .orbit-caption {
  bottom: 50%;
  -webkit-transform: translateY(50%);
      -ms-transform: translateY(50%);
          transform: translateY(50%);
  background: none;
  text-align: center;
  color: #fefefe;
  font-weight: bold;
}


</style>

<?php wp_reset_query(); 
// sort by priority - custom field
 $args = array(
  'post_type' => ''
   /*'orderby'   => 'meta_value',
    'order' => 'ASC',  */  
 );
$query = new WP_Query( $args ); ?>
 
 <div class="fullscreen-image-slider">
  <div class="orbit" role="region" aria-label="FullScreen Pictures" data-orbit>
    <ul class="orbit-container">
      <button class="orbit-previous">
        <span class="show-for-sr">Previous Slide</span>
        <span class="nav fa fa-chevron-left fa-3x"></span>
      </button>
      <button class="orbit-next">
        <span class="show-for-sr">Next Slide</span>
        <span class="nav fa fa-chevron-right fa-3x"></span>
      </button>
      <li class="is-active orbit-slide">
        <img class="orbit-image" src="https://i.imgur.com/16z9ObN.jpg" alt="Space">
        <figcaption class="orbit-caption">
          <h1>Lorem ipsum dolor sit amet, <br>consectetur adipisicing elit.</h1>
        </figcaption>
      </li>
      <li class="orbit-slide">
        <img class="orbit-image" src="https://i.imgur.com/JD4Caxa.jpg" alt="Space">
        <figcaption class="orbit-caption">
          <h1>Lorem ipsum dolor sit amet, <br>consectetur adipisicing elit.</h1>
        </figcaption>
      </li>
      <li class="orbit-slide">
        <img class="orbit-image" src="https://i.imgur.com/rsTQbNV.jpg" alt="Space">
        <figcaption class="orbit-caption">
          <h1>Lorem ipsum dolor sit amet, <br>consectetur adipisicing elit.</h1>
        </figcaption>
      </li>
    </ul>
  </div>
</div>