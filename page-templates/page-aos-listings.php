<?php
/*
Template Name: Contact
*/
get_header('inner-page'); ?>

<div class="grid-container">
	<div class="grid-x">
		<div class="cell small-12">
<div class="item item--primary"
     data-aos="fade-left"
     data-aos-anchor="#trigger-right">
  RIGHT
</div>

<div class="item item--secondary"
     data-aos="fade-right"
     data-aos-anchor="#trigger-left">
  LEFT
</div>

<div class="item">1</div>
<div class="item">2</div>
<div class="item">3</div>
<div class="item">4</div>
<div class="item" id="trigger-left">
  5
  <span>trigger left</span>
</div>
<div class="item">6</div>
<div class="item">7</div>
<div class="item" id="trigger-right">
  8
  <span>trigger right</span>
</div>
<div class="item">9</div>
<div class="item">10</div>
<div class="item">11</div>
<div class="item">12</div>
</div>
</div>
</div>

<!-- phone icon   phone#  map pin   address   envelope icon   email address

	If you have questions please do not hesitate to send us a message.

	form name
	email
	subject
	message
	button  send message
<?php get_footer(); 