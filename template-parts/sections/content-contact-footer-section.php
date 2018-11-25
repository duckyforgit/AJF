<?php
/**
 * Template part for contact footer section with google map and form
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
 
.contact-us-section {
  padding: 2rem;
  background: #fefefe;
}

.contact-us-section .contact-us-section-left {
  padding-right: 2rem;
  border-bottom: 2px solid #e6e6e6;
  padding-bottom: 2rem;
  margin-bottom: 2rem;
}

@media print, screen and (min-width: 40em) {
  .contact-us-section .contact-us-section-left {
    border-right: 1px solid #e6e6e6;
    border-bottom: 0;
    padding-bottom: 0;
    margin-bottom: 0;
  }
}

.contact-us-section .contact-us-section-right {
  padding-left: 2rem;
}

@media print, screen and (min-width: 40em) {
  .contact-us-section .contact-us-section-right {
    border-left: 1px solid #e6e6e6;
  }
}

.contact-us-section .contact-us-header {
  margin-bottom: 2rem;
}

@media screen and (min-width: 40em) and (max-width: 74.9375em) {
  .contact-us-section .contact-us-header {
    font-size: 32px;
  }
}

.contact-us-section .responsive-embed {
  margin-bottom: 0;
  padding-bottom: 55%;
}

.contact-us-form input[type=text],
.contact-us-form input[type=email],
.contact-us-form textarea {
  margin-bottom: 1.5rem;
}

.contact-us-form-actions {
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-justify-content: space-between;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.contact-us-form-actions input[type=submit] {
  border-radius: 5000px;
  padding-left: 2rem;
  padding-right: 2rem;
}

.contact-us-form-actions .contact-us-file-button {
  background: transparent;
  color: #8a8a8a;
}

.contact-us-list {
  list-style-type: none;
  margin: 0;
}

.contact-us-list li a {
  color: #0a0a0a;
}

.contact-us-list li::before {
  margin-right: 2rem;
  font-size: 2rem;
  vertical-align: middle;
  color: #8a8a8a;
  font-family: 'FontAwesome';
}

.contact-us-list .address::before {
  content: '\f041';
  margin-left: 0.4rem;
  margin-right: 2.3rem;
}

.contact-us-list .email::before {
  content: '\f003';
}

.contact-us-list .phone::before {
  content: '\f098';
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
 
  <section class="contact-us-section">
  <div class="row medium-unstack">
    <div class="columns contact-us-section-left">
      <h1 class="contact-us-header">Get In Touch</h1>
      <div class="responsive-embed">
        <img src="https://maps.googleapis.com/maps/api/staticmap?center=campbell&zoom=13&scale=false&size=600x300&maptype=roadmap&sensor=false&format=png&visual_refresh=true" alt="Google Map of campbell" alt="" />
      </div>

      <ul class="contact-us-list">
        <li class="address">100 W Rincon Ave, Campbell CA 95008</li>
        <li class="email"><a href="mailto:">hello@yeticave.com</a></li>
        <li class="phone">
          1 (408) 445 9978
        </li>
      </ul>
    </div>
    <div class="columns contact-us-section-right">
      <h1 class="contact-us-header">Mail Us</h1>
      <div class="vc_btn3-container vc_btn3-right">
  <a data-vc-gradient-1="#dd3333" data-vc-gradient-2="#bf1300" class="button vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-gradient-custom vc_btn3-icon-right vc_btn-gradient-btn-5beadbe784231" href="" title="">Contact Us <i class="vc_btn3-icon fa fa-envelope-o"></i></a></div>
      <form class="contact-us-form">
        <input type="text" placeholder="Full name">
        <input type="email" placeholder="Email">
        <textarea name="message" id="" rows="12" placeholder="Type your message here"></textarea>
        <div class="contact-us-form-actions">
          <input type="submit" class="button" value="Send it" />
          <div>
            <label for="FileUpload" class="button contact-us-file-button">Attach Files</label>
            <input type="file" id="FileUpload" class="show-for-sr">
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

