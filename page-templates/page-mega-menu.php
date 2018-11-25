<?php
/*
Template Name: MEGA MENU
*/
get_header('inner-page'); ?>
 <style>

.mega-menu .dropdown-pane {
  width: 100%;
  max-width: 85rem;
  margin: 0 auto !important;
  left: 0% !important;
  right: 0% !important;
}

.mega-menu .menu {
  background: none;
}

.mega-menu > a::after {
  display: block;
  width: 0;
  height: 0;
  border: inset 6px;
  content: '';
  border-bottom-width: 0;
  border-top-style: solid;
  border-color: #1779ba transparent transparent;
  margin-left: 10px;
  margin-top: 11%;
}
.wp-megamenu-main-wrapper.wpmm-orientation-horizontal ul.wpmm-mega-wrapper {
    position: relative;
    text-align: left;
    background: none;
}
.wp-megamenu-main-wrapper.wpmm-ctheme-wrapper.wpmega-mytheme.wpmm-orientation-horizontal ul.wpmm-mega-wrapper {
    text-align: center;
}
.wp-megamenu-main-wrapper, .wp-megamenu-main-wrapper * {
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
}
.wp-megamenu-main-wrapper ul, .wp-megamenu-main-wrapper ol, .wp-megamenu-main-wrapper li {
    list-style: none;
}
.wp-megamenu-main-wrapper.wpmm-orientation-horizontal ul.wpmm-mega-wrapper > li {
    position: static;
    padding: 0;
}
.wp-megamenu-main-wrapper.wpmm-orientation-horizontal ul.wpmm-mega-wrapper > li {
    display: inline-block;
    text-align: center;
    border-top: none;
    line-height: 1.5;
    height: auto;
    float: none;
    vertical-align: middle;
} 

</style>
<div class="margin-top"></div> 
 
 <h1>mega</h1>
<!--DOCTYPE
<header id="site-header" class="site-header" role="banner">
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="title-bar-left">
				<button aria-label="<?php //_e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
			</div>
			<div class="title-bar-right">
				<span class="site-mobile-title title-bar-title">
					<h1 class="logo"><a href="<?php// echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></h1>
				</span>
			</div>
		</div>

		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					 <a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home" class=""><h1 class="logo"><?php //bloginfo( 'name' ); ?></h1>
					</a>  
				</div>
			</div>
			<div class="top-bar-right">
<ul id="menu-main-1" class="dropdown menu desktop-menu" data-dropdown-menu="besgzg-dropdown-menu" role="menubar"> 
<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-41 current_page_item menu-item-has-children menu-item-326 is-dropdown-submenu-parent opens-left" role="menuitem" aria-haspopup="true" aria-label="ABOUT US" data-is-click="false"><a href="http://localhost:8080/arthurjordanfoundation/about-us/">ABOUT US</a>
<ul class="dropdown menu vertical submenu is-dropdown-submenu first-sub" data-toggle="" data-submenu="" role="menu" style="">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-329 is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="http://localhost:8080/arthurjordanfoundation/about-us/who-we-are/">WHO WE ARE</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-328 is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="http://localhost:8080/arthurjordanfoundation/about-us/who-was-arthur-jordan/">WHO WAS ARTHUR JORDAN</a></li>
</ul>
</li>
 
</ul>-->
				 
	<br>
	<br>
	<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class=""><h1 class="logo"><?php bloginfo( 'name' ); ?></h1>
					</a>  
				</div>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_mega(); ?>

				<?php if ( ! get_theme_mod( 'foundationpress_mobile_menu_layout' ) || get_theme_mod( 'foundationpress_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>


 <div class="top-bar">
  <div class="top-bar-left"> 
    <ul class="dropdown menu desktop-menu" data-dropdown-menu>
      <li class="menu-text">Site Title</li>
      <li class="mega-menu">
        <a data-toggle="mega-menu" href="#">One</a>

        <div class="dropdown-pane bottom drop-down menu vertical" id="mega-menu" data-dropdown data-options="closeOnClick:true; hover: true; hoverPane: true; vOffset:11">
		
          <div class="grid-x expanded">
            <div class="cell small-4">
              <ul class="menu vertical">
                <li><a href="#">One</a></li>
                <li><a href="#">Two</a></li>
                <li><a href="#">Three</a></li>
              </ul>
            </div>
            <div class="cell small-4">
              <ul class="menu vertical">
                <li><a href="#">One</a></li>
                <li><a href="#">Two</a></li>
                <li><a href="#">Three</a></li>
              </ul>
            </div>
            <div class="cell small-4">
              <ul class="menu vertical">
                <li><a href="#">One</a></li>
                <li><a href="#">Two</a></li>
                <li><a href="#">Three</a></li>
              </ul>
            </div>
          </div>

        </div>
      </li>
      <li><a href="#">Two</a></li>
      <li><a href="#">Three</a></li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><input type="search" placeholder="Search"></li>
      <li><button type="button" class="button">Search</button></li>
    </ul>
  </div>
</div>



<?php get_footer();