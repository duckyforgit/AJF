<?php
/**
 * Template part for form with icons
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

form .form-icons {
  text-align: center;
}

form .form-icons h4 {
  margin-bottom: 1rem;
}

form .form-icons .input-group-label {
  background-color: #1779ba;
  border-color: #1779ba;
}

form .form-icons .input-group-field {
  border-color: #1779ba;
}

form .form-icons .fa {
  color: white;
  width: 1rem;
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
 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

<form>
  <div class="form-icons">
    <h4>Register for an account</h4>

    <div class="input-group">
      <span class="input-group-label">
        <i class="fa fa-user"></i>
      </span>
      <input class="input-group-field" type="text" placeholder="Full name">
    </div>

    <div class="input-group">
      <span class="input-group-label">
        <i class="fa fa-envelope"></i>
      </span>
      <input class="input-group-field" type="text" placeholder="Email">
    </div>

    <div class="input-group">
      <span class="input-group-label">
        <i class="fa fa-key"></i>
      </span>
      <input class="input-group-field" type="text" placeholder="Password">
    </div>
  </div>

  <button class="button expanded">Sign Up</button>
</form>


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