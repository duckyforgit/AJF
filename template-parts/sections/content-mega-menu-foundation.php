<?php
/**
 * Template part for foundation mega menu
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?> 
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


</style>
 <div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Site Title</li>
      <li class="mega-menu">
        <a data-toggle="mega-menu" href="#">One</a>

        <div class="dropdown-pane bottom" id="mega-menu" data-dropdown data-options="closeOnClick:true; hover: true; hoverPane: true; vOffset:11">

          <div class="row expanded">
            <div class="column">
              <ul class="menu vertical">
                <li><a href="#">One</a></li>
                <li><a href="#">Two</a></li>
                <li><a href="#">Three</a></li>
              </ul>
            </div>
            <div class="column">
              <ul class="menu vertical">
                <li><a href="#">One</a></li>
                <li><a href="#">Two</a></li>
                <li><a href="#">Three</a></li>
              </ul>
            </div>
            <div class="column">
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