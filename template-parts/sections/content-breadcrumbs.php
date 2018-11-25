<?php
/**
 * Template part for breadcrumbs
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?> 
 
  <!--<footer>
    <?php //wp_link_pages( 'before=<ul class="page-links">&after=</ul>&link_before=<li class="page-link">&link_after=</li>' ); ?>

    <?php//
     // wp_link_pages(
      //  array(
       //   'before' => '<nav id="page-nav"><p>' . __( 'Pages:', //'foundationpress' ),
         // 'after'  => '</p></nav>',
      //  )
    //  );
    ?>
    <?php// $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php //} ?>
  </footer> -->
 

<hr>
<div class="grid-container"> 
<nav aria-label="You are here:" role="navigation">
  <ul class="breadcrumbs">
    <li><a href="#">Home</a></li>
    
   <!--  <li class="disabled">Gene Splicing</li> -->
    <li>
      <span class="show-for-sr">Current: </span> About Us
    </li>
  </ul>
</nav>
</div>

<div class="grid-container"> 
<ul class="breadcrumb-counter-nav">
  <li class="breadcrumb-counter-nav-item"><a href="#">Setup</a></li>
  <li class="breadcrumb-counter-nav-item current"><a href="#">Sample Analysis</a></li>
  <li class="breadcrumb-counter-nav-item"><a href="#">Sort Layout</a></li>
  <li class="breadcrumb-counter-nav-item"><a href="#">Sort</a></li>
  <li class="breadcrumb-counter-nav-item"><a href="#">Reporting</a></li>
</ul>
</div>

