<?php
/**
 * Template part for responsive hidden nav for large screen
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

/*! CSS for Responsive Hidden Nav */
.responsive-hidden-nav-container {
  min-width: 240px;
  background: #1779ba;
  padding: .5rem 1rem;
  height: 80vh;
}

.responsive-hidden-nav {
  margin: 0;
  padding: 0;
  background-color: #fefefe;
  position: relative;
  min-width: 240px;
  background: #fefefe;
}

.responsive-hidden-nav a {
  display: block;
  padding: 1.25rem 2rem;
  background: #fefefe;
  font-size: 1.1em;
  color: #1779ba;
  text-decoration: none;
}

.responsive-hidden-nav a:hover {
  color: #0c3e5f;
}

.responsive-hidden-nav button {
  position: absolute;
  height: 100%;
  right: 0;
  padding: 0 1rem;
  border: 0;
  outline: none;
  background-color: #115b8d;
  color: #fefefe;
  cursor: pointer;
}

.responsive-hidden-nav button:hover {
  background-color: #0c3e5f;
}

.responsive-hidden-nav button::after {
  content: attr(count);
  position: absolute;
  width: 2rem;
  height: 2rem;
  left: -1rem;
  top: .75rem;
  text-align: center;
  background-color: #0c3e5f;
  color: #fefefe;
  font-size: .9em;
  line-height: 1.6;
  border-radius: 50%;
  border: 0.25rem solid #fefefe;
  font-weight: bold;
}

.responsive-hidden-nav button:hover::after {
  -webkit-transform: scale(1.075);
      -ms-transform: scale(1.075);
          transform: scale(1.075);
}

.responsive-hidden-nav .hamburger {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  width: 20px;
  height: 16px;
  cursor: pointer;
}

.responsive-hidden-nav .hamburger::after {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  height: 2px;
  background: #fefefe;
  box-shadow: 0 7px 0 #fefefe, 0 14px 0 #fefefe;
  content: '';
}

.responsive-hidden-nav .hamburger:hover::after {
  background: #fefefe;
  box-shadow: 0 7px 0 #fefefe, 0 14px 0 #fefefe;
}

.responsive-hidden-nav .visible-links {
  display: inline-table;
  margin: 0;
  padding: 0;
}

.responsive-hidden-nav .visible-links li {
  display: table-cell;
  border-left: 1px solid #1779ba;
}

.responsive-hidden-nav .visible-links li:first-child {
  font-weight: bold;
}

.responsive-hidden-nav .visible-links li:first-child a {
  color: #1779ba !important;
}

.responsive-hidden-nav .hidden-links {
  position: absolute;
  right: 0;
  top: 100%;
  margin: 0;
  padding: 0;
}

.responsive-hidden-nav .hidden-links li {
  display: block;
  border-top: 0.0625rem solid #115b8d;
}

.responsive-hidden-nav .hidden {
  visibility: hidden;
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
 
 <div class="responsive-hidden-nav-container">
  <nav class="top-bar responsive-hidden-nav" data-responsive-hidden-nav>
    <button class="responsive-hidden-button">
      <div class="hamburger"></div> 
    </button>
    <ul class="visible-links">
      <li><a href="#">Responsive</a></li>
      <li><a href="#">navigation</a></li>
      <li><a href="#">whose</a></li>
      <li><a href="#">overflowing</a></li>
      <li><a href="#">elements</a></li>
      <li><a href="#">get</a></li>
      <li><a href="#">stacked</a></li> 
      <li><a href="#">into</a></li>
      <li><a href="#">hamburger</a></li>
      <li><a href="#">menu</a></li>
      <li><a href="#">effortlessly</a></li>
    </ul>
    <ul class="hidden-links hidden"></ul>
  </nav>
  <h4 class="demo-title">resize the window please..</h4>
</div>
<script>
var $topBar = $('[data-responsive-hidden-nav]');
var $button = $('[data-responsive-hidden-nav] .responsive-hidden-button');
var $visibleLinks = $('[data-responsive-hidden-nav] .visible-links');
var $hiddenLinks = $('[data-responsive-hidden-nav] .hidden-links');

var responsiveBreaks = []; // Empty List (Array) on initialization

function updateTopBar() {
  
  var availableSpace = $button.hasClass('hidden') ? $topBar.width() : $topBar.width() - $button.width() - 30; // Calculation of available space on the logic of whether button has the class `hidden` or not

  if($visibleLinks.width() > availableSpace) { // Logic when visible list is overflowing the nav
    
    responsiveBreaks.push($visibleLinks.width()); // Record the width of the list
    $visibleLinks.children().last().prependTo($hiddenLinks); // Move item to the hidden list
    
    // Show the resonsive hidden button
    if($button.hasClass('hidden')) {
      $button.removeClass('hidden');
    }
  
  } else { // Logic when visible list is not overflowing the nav
    
    if(availableSpace > responsiveBreaks[responsiveBreaks.length-1]) { // Logic when there is space for another item in the nav
      $hiddenLinks.children().first().appendTo($visibleLinks);
      responsiveBreaks.pop(); // Move the item to the visible list
    }
    
    // Hide the resonsive hidden button if list is empty
    if(responsiveBreaks.length < 1) {
      $button.addClass('hidden');
      $hiddenLinks.addClass('hidden');
    }
  }

  $button.attr("count", responsiveBreaks.length); // Keeping counter updated

  if($visibleLinks.width() > availableSpace) { // Occur again if the visible list is still overflowing the nav
    updateTopBar();
  }
}

// Window listeners
$(window).resize(function() {
    updateTopBar();
});
$button.on('click', function() {
  $hiddenLinks.toggleClass('hidden');
});
updateTopBar();



  </script>