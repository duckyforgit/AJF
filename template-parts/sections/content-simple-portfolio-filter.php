<?php
/**
 * Template part for simple portfolio filter
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?> 
 
 <style>
 
.filter-simple .button-group {
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.filter-simple .filter-simple-button.hollow.is-active, .filter-simple .filter-simple-button.hollow:focus, .filter-simple .filter-simple-button.hollow:active {
  background-color: #1779ba;
  color: #fefefe;
}

.button-group.round :first-child {
  border-radius: 5000px 0 0 5000px;
}

.button-group.round :last-child {
  border-radius: 0 5000px 5000px 0;
}

.column-block {
  margin-bottom: 30px;
}
</style> 
 <section class="filter-simple">
  <div class="button-group round">
    <button class="button hollow filter-simple-button is-active" data-filter="all">All</button>
    <button class="button hollow filter-simple-button" data-filter="space">Space</button>
    <button class="button hollow filter-simple-button" data-filter="animals">Animals</button>
    <button class="button hollow filter-simple-button" data-filter="nature">Nature</button>
  </div>

  <div class="row small-up-2 medium-up-3 large-up-4">
    <div class="column column-block filter-simple-item space">
      <img src="https://spaceholder.cc/350x350" alt="" />
    </div>
    <div class="column column-block filter-simple-item nature">
      <img src="https://placeimg.com/350/350/nature" alt="" />
    </div>
    <div class="column column-block filter-simple-item animals">
      <img src="https://placeimg.com/350/350/animals" alt="" />
    </div>
    <div class="column column-block filter-simple-item animals">
      <img src="https://placeimg.com/350/350/animals" alt="" />
    </div>
    <div class="column column-block filter-simple-item animals">
      <img src="https://placeimg.com/350/350/animals" alt="" />
    </div>
    <div class="column column-block filter-simple-item nature">
      <img src="https://placeimg.com/350/350/nature" alt="" />
    </div>
    <div class="column column-block filter-simple-item nature">
      <img src="https://placeimg.com/350/350/nature" alt="" />
    </div>
    <div class="column column-block filter-simple-item animals">
      <img src="https://placeimg.com/350/350/animals" alt="" />
    </div>
    <div class="column column-block filter-simple-item nature">
      <img src="https://placeimg.com/350/350/nature" alt="" />
    </div>
    <div class="column column-block filter-simple-item animals">
      <img src="https://placeimg.com/350/350/animals" alt="" />
    </div>
    <div class="column column-block filter-simple-item space">
      <img src="https://spaceholder.cc/350x350" alt="" />
    </div>
    <div class="column column-block filter-simple-item space">
      <img src="https://spaceholder.cc/350x350" alt="" />
    </div>
  </div>
</section>

<script>
  // shows and hides filtered items
$(".filter-simple-button").click(function() {
  var value = $(this).attr('data-filter');
  if(value === "all") {
    $('.filter-simple-item').show('1000');
  } else {
    $(".filter-simple-item").not('.'+value).hide('3000');
    $('.filter-simple-item').filter('.'+value).show('3000');
  }
});

// changes active class on filter buttons
$('.filter-simple-button').click(function () {
  $(this).siblings().removeClass('is-active');
  $(this).addClass('is-active');
});


</script>