<?php
/**
 * Template part for flexbox examples
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?> 
<style>
.box {
  display: flex;
  align-items: center;
  justify-content: center;
}

.box div {
  width: 100px;
  height: 100px;
}
 .card {
    display: flex;
    flex-direction: column;
}

.card .content {
    flex: 1 1 auto;
}
.media {
    display: flex;
    align-items: flex-start;
}
.media .content {
    flex: 1;
    padding: 10px;
}           
.image img {
  max-width: 100%;
}
</style>  
<hr>
<h2>centering vertically</h2>
<div class="box">
  <div></div>
</div> 

<h2>card with footer at bottom</h2>
 <div class="cards">
    <div class="card">
        <div class="content">
            <p>This card doesn't have much content.</p>
        </div>
        <footer>Card footer</footer>
    </div>
    <div class="card">
        <div class="content">
            <p>flex: 1 means this part of card can grow. This card has a lot more content which means that it defines the height of the container the cards are in. I've laid the cards out using grid layout, so the cards themselves will stretch to the same height.</p>
        </div>
        <footer>Card footer</footer>
    </div>
</div>
      
<h2>Media objects</h2>
<div class="media">
  <div class="image"><img src="https://placehold.it/60x60" alt="placeholder"></div>
    <div class="content">This is the content of my media object. Items directly inside the flex container will be aligned to flex-start.</div>
</div>

<h2>use max width on image so it maxs out in size. You could also allow both sides to grow and shrink in proportion. If you set both sides to flex: 1, they will grow and shrink from a flex-basis of 0, so you will end up with two equal-sized columns. You could either take the content as a guide and set both to flex: auto, in which case they would grow and shrink from the size of the content or any size applied directly to the flex items such as a width on the image.</h2>
<div>
  <p><pre><code>
.media .content {
  flex: 1;
  padding: 10px;
}

.image {
  flex: 1;
}</code></pre></p>
<h2>You could also give each side different flex-grow factors, for example setting the side with the image to flex: 1 and the content side to flex: 3. This will mean they use a flex-basis of 0 but distribute that space at different rates according to the flex-grow factor you have assigned. The flex properties we use to do this are described in detail in the guide Controlling ratios of flex items along the main axis.</h2>
  <p><pre><code>
.media .content {
  flex: 3;
  padding: 10px;
}

.image {
  flex: 1;
}</code></pre></p>
<h2>To switch the display of the media object so that the image is on the right and the content is on the left we can use the flex-direction property set to row-reverse. The media object now displays the other way around. I have achieved this in the live example by adding a class of flipped alongside the existing .media class. This means you can see how the display changes by removing that class from the html.</h2>
<style>
.media {
    display: flex;
    align-items: flex-start;
}
.media.flipped {
    flex-direction: row-reverse;
}
.media .content {
  /*  flex: 1;
    padding: 10px;*/
}
</style>
<div class="media flipped">
  <div class="image"><img src="https://placehold.it/60x60" alt="placeholder"></div>
    <div class="content">This is the content of my media object. Items directly inside the flex container will be aligned to flex-start.</div>
</div>
<h2>Forms Control i.e., search box</h2>
<style>
.wrapper {
  display: flex;
}

.wrapper input[type="text"] {
    flex: 1 1 auto;
  }
</style>
<form class="example">
    <div class="wrapper"><input type="text" id="text"><input type="submit" value="Send"></div>
</form>
<style>
.wrapper {
  display: flex;

}

.wrapper input[type="text"] {
    flex: 1 1 auto;
  }
</style>
<form class="example">
        <div class="wrapper"><label for="text">Label</label><input type="text" id="text"><input type="submit" value="Send"></div>
</form>
<style>
.media .content {
  flex: 1;
  padding: 10px;
}

.image {
  flex: 1;
}
</style>
<div>
  <div class="image"><img src="https://placehold.it/60x60" alt="placeholder"></div>
    <div class="content">This is the content of my media object. Items directly inside the flex container will be aligned to flex-start.
    If boths sides have flex:1 your are using flex-basis:0 and you get 2 equal columns. If you take content size as a guide and set both to flex: auto the columns grow and shrink from the size of the content or from a width on image or on content div.</div>
</div>
<style>
section {
  width: 100%;
    max-width: 1200px;
    border: 1px solid #4D4E53;
    border-radius: 2px;
    padding: 10px 14px 10px 10px;
    margin-bottom: 10px;
}
.media {
    display: flex;
   align-items: flex-start;
}
 
.media .content2 {
  flex: auto;
  padding: 10px;
  align-self: center;
}
.image2 {
  margin:  0 10px 0 0;
}
img {
  max-width: 100%;
}
.image2 {
  flex: auto;
}
</style>
<section>
<div class="media">
  <div class="image2"><img src="https://placehold.it/500x300" alt="placeholder"></div>
    <div class="content2">This is the content of my media object. Items directly inside the flex container will be aligned to flex-start.
    If boths sides have flex:1 your are using flex-basis:0 and you get 2 equal columns. If you take content size as a guide and set both to flex: auto the columns grow and shrink from the size of the content or from a width on image or on content div.</div>
</div>
</section>
<style>
section {
  width: 100%;
    max-width: 1200px;
    border: 1px solid #4D4E53;
    border-radius: 2px;
    padding: 10px 14px 10px 10px;
    margin-bottom: 10px;
}
.media {
    display: flex;
    align-items: flex-start;
}
.image {
  margin:  0 10px 0 0;
}
img {
  max-width: 100%;
}
.media .content {
    flex: 1;
    padding: 10px;
}
</style>
<section>
<div class="media">
  <div class="image"><img src="https://placehold.it/60x60" alt="placeholder"></div>
    <div class="content">This is the content of my media object. Items directly inside the flex container will be aligned to flex-start.</div>
</div>
</section>


  <style>
.section {
  width: 100%;
    max-width: 1200px;
    border: 1px solid #4D4E53;
    border-radius: 2px;
    padding: 10px 14px 10px 10px;
    margin-bottom: 10px;
}
.media {
    display: flex;
   align-items: flex-start;
   align-items: center;
}
 
.media .content2 {
  flex: auto;
  flex:  1;
  padding: 10px;
  align-self: center;
}
.image2 {
  margin:  0 10px 0 0;
}
img {
  max-width: 100%;
}
.image2 {
  flex: auto;
  flex: 1;
}
.media-body {
  flex: auto;
  align-items: center;
}
.attachment-fp-acf-medium {
  order: 1;
  flex: auto;
}
</style>
<div class="grid-container">
   <div class="grid-x  align-middle">
    <div class="cell small-12">
  <div class="media">
  <div class="image2"><?php $image = get_field('section_3_image');   
          $size = 'fp-acf-medium'; 
          if ( $image ) {
          echo wp_get_attachment_image( $image, $size );
          } 
        ?></div>
    <div class="content2">This is the content of my media object. Items directly inside the flex container will be aligned to flex-start.
    If boths sides have flex:1 your are using flex-basis:0 and you get 2 equal columns. If you take content size as a guide and set both to flex: auto the columns grow and shrink from the size of the content or from a width on image or on content div.This is the content of my media object. Items directly inside the flex container will be aligned to flex-start.
    If boths sides have flex:1 your are using flex-basis:0 and you get 2 equal columns. If you take content size as a guide and set both to flex: auto the columns grow and shrink from the size of the content or from a width on image or on content div.This is the content of my media object. Items directly inside the flex container will be aligned to flex-start.
    If boths sides have flex:1 your are using flex-basis:0 and you get 2 equal columns. If you take content size as a guide and set both to flex: auto the columns grow and shrink from the size of the content or from a width on image or on content div.This is the content of my media object. Items directly inside the flex container will be aligned to flex-start.
    If boths sides have flex:1 your are using flex-basis:0 and you get 2 equal columns. If you take content size as a guide and set both to flex: auto the columns grow and shrink from the size of the content or from a width on image or on content div.</div>
</div>
</div>
</div>

<div class="media">
  <?php $image = get_field('section_3_image');   
          $size = 'fp-acf-medium'; 
          if ( $image ) {
          echo wp_get_attachment_image( $image, $size );
          } 
        ?>
   
  <div class="media-body">
    <p class="media-heading">flex-grow   flex-shrink flex-basis flex:1 is for grow. flex-shrink is auto set to 1 and basis is 0. flex:1 is shorthand for this.  flex:2 means this item is 2x the size.  If boths  sides have flex:1 your are using flex-basis:0 and you get 2 equal columns. If you take content size as a guide and set both to flex: auto the columns grow and shrink from the size of the content or from a width on image or on content div.This is the content of my media object. Items directly inside the flex container will be aligned to flex-start.</p>
  <!--   If boths sides have flex:1 your are using flex-basis:0 and you get 2 equal columns. If you take content size as a guide and set both to flex: auto the columns grow and shrink from the size of the content or from a width on image or on content div.</p> -->
    
  </div>
</div>
</div>
      