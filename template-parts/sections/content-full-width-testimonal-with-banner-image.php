<?php
/**
 * Template part for full width testimonial with banner image
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?> 
 
 <style>
 
.full-width-testimonial {
  background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.1)), url("https://unsplash.it/2000/1200/?image=1011");
  background-position: center center;
}

.full-width-testimonial-icon .quote-path {
  fill: none;
  stroke: #ffae00;
  stroke-width: 2.5192;
  stroke-miterlimit: 10;
}

.full-width-testimonial-content,
.full-width-testimonial-icon {
  text-align: center;
}

.full-width-testimonial-section {
  padding-top: 2rem;
}

.full-width-testimonial-section .full-width-testimonial-text {
  font-weight: 300;
  color: #ffffff;
  padding-left: 30px;
  padding-right: 30px;
  margin-top: -5px;
  padding-left: 50px;
  padding-right: 50px;
  font-size: 1.5em;
}

@media print, screen and (min-width: 40em) {
  .full-width-testimonial-section .full-width-testimonial-text {
    padding-left: 100px;
    padding-right: 100px;
  }
}

@media print, screen and (min-width: 64em) {
  .full-width-testimonial-section .full-width-testimonial-text {
    padding-left: 180px;
    padding-right: 180px;
    font-size: 1.8em;
  }
}

@media screen and (min-width: 75em) {
  .full-width-testimonial-section .full-width-testimonial-text {
    padding-left: 300px;
    padding-right: 300px;
  }
}

.full-width-testimonial-section .full-width-testimonial-source {
  font-size: 1.2em;
  font-weight: 600;
  color: #ffffff;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  padding-bottom: 0;
  margin-bottom: 0.2em;
  font-size: 1.0em;
}

.full-width-testimonial-section .full-width-testimonial-source-context {
  display: block;
  font-size: 0.9em;
  font-weight: 500;
  color: #ffffff;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  font-size: 0.8em;
}

.full-width-testimonial-section .slick-slider {
  margin-bottom: 0px;
}

.full-width-testimonial-text,
.full-width-testimonial-content,
.full-width-testimonial-source,
.full-width-testimonial-icon {
  padding-bottom: 2rem;
}

.full-width-testimonial-content {
  width: 100%;
}


</style> 
 
  <div class="full-width-testimonial">
  <div class="full-width-testimonial-section">
    <div class="full-width-testimonial-icon text-center">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="41px" height="34px" viewBox="-235 240 41 34" style="enable-background:new -235 240 41 34;" xml:space="preserve">
          <path class="quote-path" d="M-231.3,260.4c0-5,1.3-8.8,3.7-11.7c2.4-2.8,6-4.6,10.5-5.5v5c-3.5,1-6,2.8-7.1,5.5c-0.7,1.4-0.9,2.8-0.8,4
            h8.1v12.8h-14.4V260.4z"/>
          <path class="quote-path" d="M-212,260.4c0-5,1.3-8.8,3.7-11.7c2.4-2.8,6-4.6,10.5-5.5v5c-3.5,1-6,2.8-7.1,5.5c-0.7,1.4-0.9,2.8-0.8,4h8.1
            v12.8H-212V260.4z"/>
      </svg>
    </div>
    <div class="full-width-testimonial-content">
      <h5 class="full-width-testimonial-text">Lake Tahoe is the most beautiful place I have ever been to. I have traveled several places in the world, and there might be more beautiful places out there, but none that I have seen. I loved it!
      </h5>
      <p class="full-width-testimonial-source">Gavin Newman</p>
      <span class="full-width-testimonial-source-context">Traveled from San Francisco to Lake Tahoe</span>
    </div>
  </div>
</div>