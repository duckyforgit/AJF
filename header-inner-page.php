<?php
/**
 * The template for displaying the header on inner pages
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex, nofollow">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

  <?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
    <?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
  <?php endif; ?>


   <header id="site-header" class="site-header" role="banner">
    <div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
      <div class="title-bar-left">
        <button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
      </div>
      <div class="title-bar-right">
        <span class="site-mobile-title title-bar-title">
          <h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php// bloginfo( 'name' ); ?> <img src="<?php echo get_stylesheet_directory_uri().'/dist/assets/images/arthurjordanlogo-stacked.jpg'; ?>" alt="Who We Are | Arthur Jordan Foundation" ></a></h1>
        </span>
      </div>
    </div> 

<nav class="site-navigation top-bar" role="navigation">
  <div class="top-bar-left">
    <div class="site-desktop-title top-bar-title-left">
       <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class=""><h1 class="logo"><?php// bloginfo( 'name' ); ?> 
       <img src="<?php echo get_stylesheet_directory_uri().'/dist/assets/images/arthurjordanlogo-stacked.jpg'; ?>" alt="Who We Are | Arthur Jordan Foundation" ></h1>
      </a>  
    </div>
  </div> 
    <div class="top-bar-right">
  
  <div class="menu-wrapper">
    <ul class="dropdown menu desktop-menu" data-dropdown-menu role="menubar">
      <li class="mega-style">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">WELCOME</a>
      </li>
          <li class="mega-menu">
           <a data-toggle="mega-menu-about">ABOUT US</a>

          <div class="dropdown-pane bottom grid-x expanded" id="mega-menu-about" data-dropdown data-options="closeOnClick:true; hover: true; hoverPane: true; vOffset:11">

              <div class="grid-x menu horizontal menu-box align-middle align-center">
                <div class="cell small-3">
                <!--  <a href="https://1128workroom.com/arthurjordanfoundation/about-us/who-we-are/" title="Who we are"> -->
                  <img src="<?php echo get_stylesheet_directory_uri().'/dist/assets/images/benjaminharrisonhouse-menu.jpg'; ?>" alt="Who We Are | Arthur Jordan Foundation" >
                </div>
                 <div class="cell small-4 ">
                  <div class="mega-menu-wrapper align-center align-middle">
                  <!-- <h3>WHO WE ARE</h3> -->
                  <p>We are a non-profit, tax-exempt foundation which grants money to advance fine arts and higher education in the greater Indianapolis area.</p> 
                </div>
                </div> 
                  <div class="cell small-4">
                    <div class="menu-wrapper align-left align-middle">
                    <ul class="vertical menu-list">
                      <li><a href="https://1128workroom.com/arthurjordanfoundation/about-us/who-we-are/">Who We Are</a></li>
                      <li> <a href="https://1128workroom.com/arthurjordanfoundation/about-us/board-of-trustees/">Board of Trustees</a></li>
                      <li><a href="https://1128workroom.com/arthurjordanfoundation/about-us/who-was-arthur-jordan/" title="Who was Arthur Jordan">Who Was Arthur Jordan</a></li>
                    </ul>
                  </div>
                  </div>           
               <!--  <li class="cell small-12">
                  <a href="https://1128workroom.com/arthurjordanfoundation/about-us/board-of-trustees/">
                  <img src="<?php// echo get_stylesheet_directory_uri().'/dist/assets/images/istockphoto-war-memorial-544980984-top-cropped.jpg'; ?>" alt="" >
                  <h3>BOARD OF TRUSTEES</h3> 
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p></a>
                </li>
                <li class="cell small-4">
                  <img src="<?php// echo get_stylesheet_directory_uri().'/dist/assets/images/Butler-menu.jpg'; ?>" alt="" >
                  <a href="https://1128workroom.com/arthurjordanfoundation/about-us/who-was-arthur-jordan/" title="Who was Arthur Jordan">
                    <h3>WHO WAS ARTHUR JORDAN</h3> 
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p></a>
                </li>       -->           
              </div>        
          </div>
        </li>
       <li class="mega-menu">
          <a data-toggle="mega-menu-grantseekers" >GRANTSEEKERS</a>

          <div class="dropdown-pane bottom grid-x expanded" id="mega-menu-grantseekers" data-dropdown data-options="closeOnClick:true; hover: true; hoverPane: true; vOffset:11">

         <div class="grid-x menu horizontal menu-box align-middle align-center">
                <div class="cell small-3">
                <!--  <a href="https://1128workroom.com/arthurjordanfoundation/about-us/who-we-are/" title="Who we are"> -->
                    <img src="<?php echo get_stylesheet_directory_uri().'/dist/assets/images/Butler-menu.jpg'; ?>" alt="" >
                </div>
                 <div class="cell small-4 ">
                  <div class="mega-menu-wrapper align-center align-middle">
                  <!-- <h3>WHO WE ARE</h3> -->
                  <p>We accept applications once a year from January 1st through March 1st. Check out our online application process, our guidelines and limitations.</p> 
                </div>
                </div> 
                  <div class="cell small-4">
                    <div class="mega-menu-wrapper align-left align-middle">
                    <ul class="vertical menu-list">
                      <li><a href="https://1128workroom.com/arthurjordanfoundation/grantseekers/application-process-and-report-forms/">Application Process and Report Forms</a></li>
                      <li>  <a href="https://1128workroom.com/arthurjordanfoundation/grantseekers/guidelines/">Guidelines</a></li>
                      <li><a href="https://1128workroom.com/arthurjordanfoundation/grantseekers/limitations/">Limitations</a></li>
                    </ul>
                  </div>
                  </div>  
            </div>
        </li>
        <!-- <li class="mega-menu menu-item menu-item-has-children is-dropdown-submenu-parent"> -->
          <li class="mega-menu">
          <a data-toggle="mega-menu-resources"  >RESOURCES</a>
 
         <div class="dropdown-pane bottom grid-x expanded" id="mega-menu-resources" data-dropdown data-options="closeOnClick:true; hover: true; hoverPane: true; vOffset:11">


         <div class="grid-x menu horizontal menu-box align-middle align-center">
                <div class="cell small-3">
                <!--  <a href="https://1128workroom.com/arthurjordanfoundation/about-us/who-we-are/" title="Who we are"> -->
                    <img src="<?php echo get_stylesheet_directory_uri().'/dist/assets/images/Butler-menu.jpg'; ?>" alt="" >
                </div>
                 <div class="cell small-4 ">
                  <div class="mega-menu-wrapper align-center align-middle">
                  <!-- <h3>WHO WE ARE</h3> -->
                  <p>Resources include an active grant list, a link to GuideStar to get your 990-PF and a FAQ page.</p> 
                </div>
                </div> 
                  <div class="cell small-4">
                    <div class="mega-menu-wrapper align-left align-middle">
                    <ul class="vertical menu-list">
                      <li> <a href="https://1128workroom.com/arthurjordanfoundation/resources/active-grants/">Active Grants</a></li>
                      <li> <a href="https://www.guidestar.org/Home.aspx" target="_blank">990-PF via GuideStar</a></li>
                      <li><a href="https://1128workroom.com/arthurjordanfoundation/resources/frequently-asked-questions/">Frequently Asked Questions</a></li>
                       <li><a href="https://1128workroom.com/arthurjordanfoundation/resources/contact-us/">Contact Us</a></li>
                       <li><a href="https://1128workroom.com/arthurjordanfoundation/resources/grantee-perception-report/">Grantee Perception Report</a></li>
                    </ul>
                  </div>
                  </div>  
            </div>

<!-- change to three columns with icons; make 990-PF a link to guidestar only -->
       <!--    <div class="grid-x expanded">
            <div class="cell small-4"> -->
             
            </div> 
      </li>
      <li class="mega-style"><a class="large button sites-button" href="#">LOGIN / APPLY</a></li>
    </ul>
   
          <?php// foundationpress_top_bar_r(); ?>
          <?php// foundationpress_top_bar_mega(); ?>
          </div>
      
        <?php if ( ! get_theme_mod( 'foundationpress_mobile_menu_layout' ) || get_theme_mod( 'foundationpress_mobile_menu_layout' ) === 'topbar' ) : ?>
          <?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
        <?php endif; ?>
      </div>
     
    </nav>
  </header> 