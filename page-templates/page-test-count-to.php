<?php
/*
Template Name: Test Count To
*/
get_header('inner-page'); ?>
 
<div class="margin-top"></div> 
 
 
 
  

  <style type="text/css">
    body {
      font-family: Arial;
      padding: 25px;
    }

    .example {
      position: relative;
      padding: 25px;
      margin: 25px 0;
      line-height: 1em;
      background-color: #eee;
    }

    .example h2 {
      margin-right: 100px;
    }

    .example p {
     /*  position: absolute;
      right: 25px;
      top: 25px; */
      font-size: 20px;
    }

    .red {
      color: #c00;
    }
  </style>
 

 
  <h1>jQuery countTo Example</h1>
  <p>
    This is a simple example of the
    <a href="https://github.com/mhuggins/jquery-countTo">jQuery countTo plugin</a>
    created by <a href="http://www.matthuggins.com">Matt Huggins</a>.  Refer to
    the full documentation for more usage information.
  </p>
<section id="counters">
  <div class="example">
    <h2>
      How many licks to the center of a Tootsie Pop?
      <button class="restart" data-target="#lollipop">Restart</button>
     
    <span class="count-to-number"><b class="timer" id="lollipop" data-to="3" data-speed="1500"></b></span></h2>
  </div>

  <div class="example">
    <h2>
      What is Earth's radius?
      <button class="restart" data-target="#earth">Restart</button>
    </h2>
    <p><b class="timer" id="earth" data-to="3968" data-speed="10000"></b> miles</p>
  </div>

  <div class="example">
    <h2>
      Start the countdown...
      <button class="restart" data-target="#countdown">Restart</button>
    </h2>
    <p>Lift-off in <b class="timer" id="countdown" data-from="3" data-to="1" data-speed="3000"></b></p>
  </div>

  <div class="example">
    <h2>
      Earth's Gravity
      <button class="restart" data-target="#gravity">Restart</button>
    </h2>
    <p><b class="timer" id="gravity" data-from="0" data-to="9.8" data-speed="3000" data-decimals="2"></b> m/s<sup>2</sup></p>
  </div>

<!--   <div class="example">
    <h2>
      To infinity...and beyond!
      <button class="restart" data-target="#infinity">Restart</button>
    </h2>
    <p><b class="timer" id="infinity" data-from="0" data-to="1000" data-speed="800"></b></p>
  </div> -->
</section>
  

  

 
  
 	<?php get_footer();  