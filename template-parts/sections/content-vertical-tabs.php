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
  <div class="grid-x grid-margin-x">
    <div class="cell medium-3">
      <ul class="vertical tabs" data-tabs id="example-tabs">
        <li class="tabs-title is-active"><a href="#panel1v" aria-selected="true">Types of Grants</a></li>
        <li class="tabs-title"><a href="#panel2v">Organization Requirements</a></li>
        <li class="tabs-title"><a href="#panel3v">Process</a></li>
        <li class="tabs-title"><a href="#panel4v">Information Needed</a></li>
          <li class="tabs-title"><a href="#panel5v">Items to Upload</a></li>
     <!--   <li class="tabs-title"><a href="#panel6v">Tab 6</a></li> -->
      </ul>
    </div>
    <div class="cell medium-9">
      <div class="tabs-content" data-tabs-content="example-tabs">
        <div class="tabs-panel is-active" id="panel1v">
          <h2 class="guidelines-grants">The Arthur Jordan Foundation offers three categories of grants.</h2>
     <ol class="guidelines-numbering">
      <li class="guidelines-categories">Operating Grants – <small>funds to support the ongoing function and carry out the mission of the organization</small></li> 
     
     
        <li class="guidelines-categories">Special Project Grants – <small>funds for a project of limited duration</small></li>
      
     
        <li class="guidelines-categories">Capital </li> 
      </ol>
        </div>
        <div class="tabs-panel" id="panel2v">
          <h2 class="guidelines-grants">Your non-profit must meet these requirements to apply:</h2>
         <ol>
          <li>Grants are limited to organizations in Marion County.</li>

<li>Organizations must be tax-exempt under Section 501(c)(3) of the Internal Revenue Code and are public charities described in section 509(a)(1), 509(a)(2) and 509(a)(3).</li>
 <li>Usually, no more than one request per organization per year will be considered. <small>(This is a new thought. If it is included, how do we handle the Harrison Site?)</small></li>
</ol>
        </div>
<div class="tabs-panel" id="panel3v">
  <h2 class="guidelines-grants">The Process:</h2>
         
<ol>
<li>All requests shall be submitted through the website. No requests will be accepted by email, fax, US Postal Service, hand delivery or any method other than the website.</li>

 
<li>The review process is rigorous and highly competitive.</li>

<li>Requests must be received through the website before noon on March 31. Late requests will not be accepted.</li>

<li>The organization information section and the narrative can be filled in on the website. 
 <!--  <button class="button tabs-button" type="button" data-toggle="example-dropdown-1">Reveal More...</button>
  <div class="dropdown-pane tabs-dropdown" id="example-dropdown-1" data-dropdown data-position="bottom" data-alignment="left" data-hover="true" data-hover-pane="true"> -->
  See the Information Needed tab for additional details.
<!-- </div> --></li>
</ol>
 </div>
<div class="tabs-panel" id="panel4v">
   <h2 class="guidelines-grants">Information Needed:</h2>
     <ol>
       <li>A brief description of the organization.</li>

      <li>A description of the need and how the funds will be utilized</li>

      <li>The time frame of the grant</li>

      <li>The identification of other companies or foundations supporting your organization and the level of their participation.</li>

      <li>The amount of funding requested</li>
 
</ol>
<!-- use jquery to check length of innerHTML of li and add toggle button if > .lenth -->
        </div>
        <div class="tabs-panel" id="panel5v">
   <h2 class="guidelines-grants">These items must be included and can be uploaded on the website:</h2>
     
        <ol>

          <li>IRS determination letter indicating public charity status</li>

          <li>List of Board of Directors</li>

          <li>Most recent audited financial statement. If your organization does not have an audited statement, please provide the balance sheet and income and expense statement for the most recently completed fiscal year.
         <!--  <button class="button tabs-button" type="button" data-toggle="example-dropdown-1"><i class="fas fa-plus"></i></button>
  <div class="dropdown-pane tabs-dropdown" id="example-dropdown-1" data-dropdown data-position="bottom" data-alignment="" data-auto-focus="true" > the balance sheet and income and expense statement for the most recently completed fiscal year.</div> --></li>

          <li>A current organization budget and a project budget (if funds are requested for a special project).</li>
        </ol>
 
<!-- use jquery to check length of innerHTML of li and add toggle button if > .lenth -->
        </div>
     
       <!--  <div class="tabs-panel" id="panel5v">
          <p>Five</p>
          <p>Check me out! I'm a super cool Tab panel with text content!</p>
        </div>
        <div class="tabs-panel" id="panel6v">
          <p>Six</p>
          <img class="thumbnail" src="assets/img/generic/rectangle-8.jpg">
        </div> -->
      </div>
    </div>
  </div>
</div>