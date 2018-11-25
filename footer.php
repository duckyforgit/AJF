<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<!-- <footer class="footer-container grid-container fluid"> -->
<!--  <div class="social-footer">
  <div class="social-footer-left">
   <a href="<?php// echo esc_url( home_url( '/' ) ); ?>" rel="home" class=""><h2 class="logo"><?php// bloginfo( 'name' ); ?></h2></a>  
  </div>
  <div class="social-footer-icons">
    <ul class="menu simple">
      <li><a href="https://www.facebook.com/"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
      <li><a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
      <li><a href="https://twitter.com/?lang=en"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
    </ul>
  </div>
</div> -->

<footer class="marketing-site-footer grid-container fluid">
  <div class="grid-x align-top medium-unstack align-spaced">
    <div class="small-12 medium-4 cell">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class=""><h2 class="logo">The <?php bloginfo( 'name' ); ?></h2></a>
      <hr>
      <p class="marketing-site-footer-paragraph">A nonprofit, tax-exempt foundation which grants money to advance fine arts and higher education in the greater Indianapolis area.</p> 
    </div>
    <div class="small-12 medium-4 cell">
       <h2 class="marketing-site-footer-title"><small>Contact Information</small></h2>
       <hr>
      <div class="marketing-site-footer-block">
        <i class="fas fa-map-marker" aria-hidden="true"></i>
        <p>1230 N. Delaware Street<br>Indianapolis, IN 46202</p>
      </div>
      <div class="marketing-site-footer-block">
        <i class="fas fa-phone" aria-hidden="true"></i>
        <p class="phone"><a href="tel:+13176351378" class="not-active" rel="nofollow">1 (317) 635-1378</a></p>
      </div>
      <div class="marketing-site-footer-block">
        <i class="fas fa-envelope" aria-hidden="true"></i>
        <p class="email"><a href="../resources/contact/" >msallee@arthurjordanfoundation.org</a></p>
      </div>
    </div>
    <div class="small-12 medium-2 cell">
       <h2 class="marketing-site-footer-title"><small>Menu</small></h2>
       <hr>
      <?php foundationpress_mobile_nav(); ?>
           
     <!--  <h4 class="marketing-site-footer-title">Historic Photos or Google Map</h4>
      <div class="grid-x grid-margin-x small-up-2 medium-up-2 large-up-4 ">
        <div class="cell">
          <img src="https://placehold.it/75" alt="" />
        </div>
        <div class="cell">
          <img src="https://placehold.it/75" alt="" />
        </div>
        <div class="cell">
          <img src="https://placehold.it/75" alt="" />
        </div>
        <div class="cell">
          <img src="https://placehold.it/75" alt="" />
        </div> 
      </div> -->
    </div>
  </div>
  <div class="marketing-site-footer-bottom">
    <div class="grid-x align-top ">
      <div class="cell small-12   ">
         <p class="marketing-site-footer-paragraph"><?php do_action( 'foundationpress_after_copyright' ); ?>
          <?php bloginfo( 'name' ); ?></p> 
      </div>      
    </div>
  </div> 
</footer>
 
<?php if ( get_theme_mod( 'foundationpress_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?> 
<?php wp_footer(); ?>
</body>
</html>