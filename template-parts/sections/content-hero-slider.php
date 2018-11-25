 <?php// the_custom_header_markup(); ?>
  <style>




.seq .seq-canvas, .seq .seq-canvas>*, .seq .seq-screen {
    margin: 0;
    padding: 0;
    list-style: none;
}

.seq .seq-canvas {
    position: absolute;
    height: 100%;
    width: 100%;
}
.seq .seq-canvas>* {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}

.seq .seq-title {
    z-index: 1;
    top: auto;
    bottom: 60px;
    left: 20px;
    right: 20px;
    opacity: 0;
    text-align: center;
    -webkit-transform: translateZ(0);
    -ms-transform: translateZ(0);
    transform: translateZ(0);
    transition-duration: .5s;
    -webkit-transition-property: opacity;
    transition-property: opacity;
    -webkit-transition-delay: .5s;
    transition-delay: .5s;
    @media only screen and (min-width: 1024px)
  {
    top: 30px;
    bottom: auto;
    left: auto;
    right: auto;
    width: 100%;
    text-align: left;
  }
}


.seq .seq-title {
    z-index: 1;
    top: auto;
    bottom: 60px;
    left: 20px;
    right: 20px;
    opacity: 0;
    text-align: center;
    -webkit-transform: translateZ(0);
    -ms-transform: translateZ(0);
    transform: translateZ(0);
    transition-duration: .5s;
    -webkit-transition-property: opacity;
    transition-property: opacity;
    -webkit-transition-delay: .5s;
    transition-delay: .5s;
    @media only screen and (min-width: 1024px)
  {
    top: 30px;
    bottom: auto;
    left: auto;
    right: auto;
    width: 100%;
    text-align: left;
  }
}
.seq h2 {
    font-size: 1.4em;
    font-weight: 700;
    background: #AF1F29;
}
.seq h2, .seq h3 {
    display: inline-block;
    margin: 0;
    padding: .4em;
    color: #fff;
    text-transform: uppercase;
}
@media only screen and (min-width: 1024px){
.seq h2, .seq h3 {
    padding: .4em .8em .4em 40px;
}
}
@media only screen and (min-width: 640px){
.seq .seq-screen {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}
}
.seq .seq-in .seq-feature, .seq .seq-out .seq-feature {
    -webkit-transform: translateY(0) translateZ(0);
    -ms-transform: translateY(0) translateZ(0);
}
.seq .seq-in .seq-feature {
    transform: translateY(0) translateZ(0);
}
.seq .seq-feature, .seq .seq-title {
    position: absolute;
    -webkit-transition-duration: .5s;
}
.seq .seq-feature {
    overflow: hidden;
    height: 100%;
    width: 100%;
    -webkit-transform: translateY(-100%) translateZ(0);
    -ms-transform: translateY(-100%) translateZ(0);
    transform: translateY(-100%) translateZ(0);
    -webkit-transition-property: -webkit-transform;
    transition-property: transform;
    transition-duration: .5s;
    -webkit-transition-timing-function: ease-in-out;
    transition-timing-function: ease-in-out;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50%;
}
/* set li to z-index: 2 and .seq-title to opacity:1 
pagination uses z-index:100000 !important */
</style>
  <div class="hero-container relative">
 <!--  <div class="flex-container flex-column align-center align-middle"> -->
    <!-- <div class="custom-header">

      <div class="custom-header-media">
        <?php the_custom_header_markup(); ?>
      </div> -->

   

 <div class="grid-x flex-column relative align-center align-middle"> 
   <div class="cell small-12"> 



   <div id="sequence" class="seq seq-no-touch seq-active seq-preloaded seq-step1" data-seq-enabled="0" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

    <div class="seq-screen" style="height: 100%; width: 100%;">
      <ul class="seq-canvas">
        <li class="seq-in" style="z-index: 3; transition-duration: 0ms; transition-property: opacity, transform; opacity: 1;">
          <div class="seq-title" style="">
            <h2 style="">Powered by Sequence.js</h2>
            <br style="">
            <h3 style="">The open-source CSS animation framework</h3>
            <br style="">
            <small style="">
              <a href="https://www.flickr.com/photos/aigle_dore/9227830403/in/photostream/" style="">Photo</a> by 
              <a href="https://www.flickr.com/people/aigle_dore/" style="">Moyan Brenn on Flickr</a> · 
              <a href="https://creativecommons.org/licenses/by-nd/2.0/" style="">CC BY-ND 2.0</a>
            </small>
          </div>
          <div role="img" aria-label="A view from a poppy field in Italy looking toward a village on a hill. Two tourists are walking through the field and mountains appear in the background" class="seq-feature seq-feature1" style="background-image: url(&quot;images/moyan-brenn-italy1.jpg&quot;);"><!-- We use a div with background-image here instead of an <img /> element so we can use background-size: cover;. Performance is also better on mobile devices -->
            
          </div>
        </li>
        <li>
          <div class="seq-title seq-align-right">
            <h2>Create Unique Animated Themes</h2>
            <br>
            <h3>For sliders, presentations, banners, accordions, and other step-based applications</h3>
            <br><small>
              <a href="https://www.flickr.com/photos/aigle_dore/9053939735/in/photostream/">Photo</a>
               by 
               <a href="https://www.flickr.com/people/aigle_dore/">Moyan Brenn on Flickr</a> · 
               <a href="https://creativecommons.org/licenses/by-nd/2.0/">CC BY-ND 2.0</a>
             </small>
           </div>
           <div role="img" aria-label="A view over a lake in Austria looking towards a forest at the base on mountains" class="seq-feature seq-feature2" style="background-image: url(images/moyan-brenn-austria.jpg)"><!-- We use a div with background-image here instead of an <img /> element so we can use background-size: cover;. Performance is also better on mobile devices -->
             
           </div>
         </li>
         <li style="z-index: 2;" class="seq-out">
          <div class="seq-title" style="">
            <h2 style="">Rapid Development of Step-Based Applications</h2><br style="">
            <h3 style="">All of the JavaScript functionality you need built-in</h3>
            <br style="">
            <small style="">
              <a href="https://www.flickr.com/photos/aigle_dore/9489991976/" style="">Photo</a>
               by 
               <a href="https://www.flickr.com/people/aigle_dore/" style="">Moyan Brenn on Flickr</a> · 
               <a href="https://creativecommons.org/licenses/by-nd/2.0/" style="">CC BY-ND 2.0</a>
             </small>
           </div>
           <div role="img" aria-label="A view from a grassy field in Italy looking toward a village on a hill. Moutains appear in the background" class="seq-feature seq-feature3" style="background-image: url(&quot;images/moyan-brenn-italy3.jpg&quot;);"><!-- We use a div with background-image here instead of an <img /> element so we can use background-size: cover;. Performance is also better on mobile devices -->
     
           </div>
        </li>
      </ul>
  </div> <!-- sequence screen -->

        <ul role="navigation" aria-label="Pagination" class="seq-pagination">
          <li class="seq-current">
            <a href="#step1" rel="step1" title="Go to slide 1">
            <span><img src="images/tn-moyan-brenn-italy1.jpg" alt="Slide 1 Thumbnail - A view from a poppy field in Italy"></span>
          </a>
        </li>
        <li>
          <a href="#step2" rel="step2" title="Go to slide 2">
            <span><img src="images/tn-moyan-brenn-austria.jpg" alt="Slide 2 Thumbnail - A distant view from a field in Austria"></span>
          </a>
        </li>
        <li>
          <a href="#step3" rel="step3" title="Go to slide 3">
            <span><img src="images/tn-moyan-brenn-italy3.jpg" alt="Slide 3 Thumbnail - A view from a grassy field in Italy"></span>
          </a>
        </li>
        </ul>

    <div class="seq-preloader seq-preloaded"><title>Sequence.js Preloading Indicator</title><desc>Three orange dots increasing in size from left to right</desc> 
    </div>

 </div> <!-- end of sequence -->
   </div> <!-- cell -->
  </div><!-- grid -->
  </div>  <!-- hero container -->

     <!--  <div class="sp-title">
            <h1 class="title">
              <span class="sp-title-down">1128 WORKROOM</span>
            </h1>
        </div>  
        <div class="sp-content">
          
          <div class="sp-wrap sp-left">
            <h2>
              <span class="sp-top">What if you could get</span> 
              <span class="sp-mid">web design</span> 
              <span class="sp-bottom">on a budget?</span>
            </h2>
          </div>
          <div class="sp-wrap sp-right">
            <h2>
              <span class="sp-top">And convert visitors to</span> 
              <span class="sp-mid">customers<i>?</i></span> 
              <span class="sp-bottom">Yes, you can!</span> 
            </h2>
          </div>
        </div>
       <div class="sp-full desktop">
          <h2 class="quote">Request a free quote!</h2>
          <div itemscope itemtype="http://schema.org/LocalBusiness">
            <h1 itemprop="name">1128 WORKROOM, LLC</h1>
            Phone: 
              <span itemprop="telephone">
                <a href="tel:+16302515660" class="button call">
                   630-251-5660
                </a>
              </span>
          </div>
           <div class="button-call">
            <a href="tel:630-251-5660" class="button call">CALL NOW</a>
       </div> 
      </div> -->
 