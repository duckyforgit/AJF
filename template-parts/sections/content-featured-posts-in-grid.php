<?php
/**
 * Template part for featured posts in grid
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


.posts-panel {
  max-width: 75rem;
  margin-right: auto;
  margin-left: auto;
  width: 100%;
  float: left;
  padding-right: 0.625rem;
  padding-left: 0.625rem;
  float: none !important;
  margin: 1.25rem 0.625rem;
  background-color: #fefefe;
  border-radius: 0;
  box-shadow: 0 0 0.25rem 0 rgba(0, 0, 0, 0.2);
}

.posts-panel::before, .posts-panel::after {
  display: table;
  content: ' ';
  -webkit-flex-basis: 0;
      -ms-flex-preferred-size: 0;
          flex-basis: 0;
  -webkit-order: 1;
      -ms-flex-order: 1;
          order: 1;
}

.posts-panel::after {
  clear: both;
}

@media print, screen and (min-width: 40em) {
  .posts-panel {
    padding-right: 0.9375rem;
    padding-left: 0.9375rem;
  }
}

.posts-panel:last-child:not(:first-child) {
  float: right;
}

.posts-panel, .posts-panel:last-child {
  float: none;
}

.posts-panel .panel-header {
  max-width: 75rem;
  margin-right: auto;
  margin-left: auto;
  width: 100%;
  float: left;
  padding-right: 0.625rem;
  padding-left: 0.625rem;
  border-bottom: 0.25rem solid #e6e6e6;
}

.posts-panel .panel-header::before, .posts-panel .panel-header::after {
  display: table;
  content: ' ';
  -webkit-flex-basis: 0;
      -ms-flex-preferred-size: 0;
          flex-basis: 0;
  -webkit-order: 1;
      -ms-flex-order: 1;
          order: 1;
}

.posts-panel .panel-header::after {
  clear: both;
}

@media print, screen and (min-width: 40em) {
  .posts-panel .panel-header {
    padding-right: 0.9375rem;
    padding-left: 0.9375rem;
  }
}

.posts-panel .panel-header:last-child:not(:first-child) {
  float: right;
}

.posts-panel .panel-header, .posts-panel .panel-header:last-child {
  float: none;
}

.posts-panel .panel-header .panel-title {
  margin: 0;
  padding: 0.9375rem 0;
  color: #8a8a8a;
  font-size: 1.625rem;
}

.posts-panel .panel-content {
  padding: 0.9375rem 0;
}

.posts-panel .pinned-post, .posts-panel .posts-list {
  max-width: 75rem;
  margin-right: auto;
  margin-left: auto;
  width: 100%;
  float: left;
  padding-right: 0;
  padding-left: 0;
}

.posts-panel .pinned-post::before, .posts-panel .pinned-post::after, .posts-panel .posts-list::before, .posts-panel .posts-list::after {
  display: table;
  content: ' ';
  -webkit-flex-basis: 0;
      -ms-flex-preferred-size: 0;
          flex-basis: 0;
  -webkit-order: 1;
      -ms-flex-order: 1;
          order: 1;
}

.posts-panel .pinned-post::after, .posts-panel .posts-list::after {
  clear: both;
}

.posts-panel .pinned-post:last-child:not(:first-child), .posts-panel .posts-list:last-child:not(:first-child) {
  float: right;
}

.posts-panel .pinned-post, .posts-panel .pinned-post:last-child, .posts-panel .posts-list, .posts-panel .posts-list:last-child {
  float: none;
}

.posts-panel .posts-list .post-item:not(:last-child) {
  border-bottom: 0.0625rem solid #e6e6e6;
}

.posts-panel .post-item {
  max-width: 75rem;
  margin-right: auto;
  margin-left: auto;
  padding: 0.9375rem 0;
}

.posts-panel .post-item::before, .posts-panel .post-item::after {
  display: table;
  content: ' ';
  -webkit-flex-basis: 0;
      -ms-flex-preferred-size: 0;
          flex-basis: 0;
  -webkit-order: 1;
      -ms-flex-order: 1;
          order: 1;
}

.posts-panel .post-item::after {
  clear: both;
}

.posts-panel .post-item .post-thumbnail {
  display: block;
  width: 33.33333%;
  float: left;
  padding-right: 0.625rem;
  padding-left: 0.625rem;
}

@media print, screen and (min-width: 40em) {
  .posts-panel .post-item .post-thumbnail {
    padding-right: 0.9375rem;
    padding-left: 0.9375rem;
  }
}

.posts-panel .post-item .post-thumbnail:last-child:not(:first-child) {
  float: right;
}

.posts-panel .post-item .post-thumbnail img {
  width: 100%;
  height: auto;
}

.posts-panel .post-item .post-text {
  width: 66.66667%;
  float: left;
  padding-right: 0.625rem;
  padding-left: 0.625rem;
}

@media print, screen and (min-width: 40em) {
  .posts-panel .post-item .post-text {
    padding-right: 0.9375rem;
    padding-left: 0.9375rem;
  }
}

.posts-panel .post-item .post-text:last-child:not(:first-child) {
  float: right;
}

.posts-panel .post-item .post-text p {
  margin: 0;
}

.posts-panel .post-item .post-title {
  font-size: 1.625rem;
}

.posts-panel .post-item .post-meta {
  color: #8a8a8a;
  font-size: 0.875rem;
}

.posts-panel .post-item .meta {
  display: inline-block;
  margin-right: 0.9375rem;
}

.posts-panel .post-item .meta-icon, .posts-panel .post-item .meta-text {
  display: inline-block;
  padding-right: 0.3125rem;
}

.posts-panel .post-item .post-read-more {
  display: block;
  font-size: 0.875rem;
}

.posts-panel .post-item .post-read-more .fa {
  padding: 0 0.3125rem;
}

.posts-panel .pinned-post .post-item {
  border-bottom: 0.0625rem solid #e6e6e6;
}

.posts-panel .pinned-post .post-thumbnail {
  display: block;
  max-width: 75rem;
  margin-right: auto;
  margin-left: auto;
  width: 100%;
  float: left;
  padding-right: 0.625rem;
  padding-left: 0.625rem;
}

.posts-panel .pinned-post .post-thumbnail::before, .posts-panel .pinned-post .post-thumbnail::after {
  display: table;
  content: ' ';
  -webkit-flex-basis: 0;
      -ms-flex-preferred-size: 0;
          flex-basis: 0;
  -webkit-order: 1;
      -ms-flex-order: 1;
          order: 1;
}

.posts-panel .pinned-post .post-thumbnail::after {
  clear: both;
}

@media print, screen and (min-width: 40em) {
  .posts-panel .pinned-post .post-thumbnail {
    padding-right: 0.9375rem;
    padding-left: 0.9375rem;
  }
}

.posts-panel .pinned-post .post-thumbnail:last-child:not(:first-child) {
  float: right;
}

.posts-panel .pinned-post .post-thumbnail, .posts-panel .pinned-post .post-thumbnail:last-child {
  float: none;
}

.posts-panel .pinned-post .post-thumbnail img {
  width: 100%;
  height: auto;
}

.posts-panel .pinned-post .post-text {
  max-width: 75rem;
  margin-right: auto;
  margin-left: auto;
  width: 100%;
  float: left;
  padding-right: 0.625rem;
  padding-left: 0.625rem;
  margin-top: 0.9375rem;
}

.posts-panel .pinned-post .post-text::before, .posts-panel .pinned-post .post-text::after {
  display: table;
  content: ' ';
  -webkit-flex-basis: 0;
      -ms-flex-preferred-size: 0;
          flex-basis: 0;
  -webkit-order: 1;
      -ms-flex-order: 1;
          order: 1;
}

.posts-panel .pinned-post .post-text::after {
  clear: both;
}

@media print, screen and (min-width: 40em) {
  .posts-panel .pinned-post .post-text {
    padding-right: 0.9375rem;
    padding-left: 0.9375rem;
  }
}

.posts-panel .pinned-post .post-text:last-child:not(:first-child) {
  float: right;
}

.posts-panel .pinned-post .post-text, .posts-panel .pinned-post .post-text:last-child {
  float: none;
}

@media screen and (max-width: 39.9375em) {
  .posts-panel .posts-list .post-title {
    font-size: 1.125rem;
  }
  .posts-panel .posts-list .post-meta {
    font-size: 0.75rem;
  }
  .posts-panel .posts-list .post-summary {
    font-size: 0.75rem;
  }
  .posts-panel .posts-list .post-read-more {
    display: none;
  }
}

@media screen and (min-width: 40em) and (max-width: 63.9375em) {
  .posts-panel .posts-list .post-title {
    font-size: 1.25rem;
  }
  .posts-panel .posts-list .post-meta {
    font-size: 0.875rem;
  }
  .posts-panel .posts-list .post-summary {
    font-size: 0.875rem;
  }
}

.posts-panel.grid .pinned-post, .posts-panel.grid .posts-list {
  width: 50%;
  float: left;
  padding-right: 0;
  padding-left: 0;
}

.posts-panel.grid .pinned-post:last-child:not(:first-child), .posts-panel.grid .posts-list:last-child:not(:first-child) {
  float: right;
}

@media screen and (max-width: 39.9375em) {
  .posts-panel.grid .pinned-post, .posts-panel.grid .posts-list {
    max-width: 75rem;
    margin-right: auto;
    margin-left: auto;
    width: 100%;
    float: left;
    padding-right: 0;
    padding-left: 0;
  }
  .posts-panel.grid .pinned-post::before, .posts-panel.grid .pinned-post::after, .posts-panel.grid .posts-list::before, .posts-panel.grid .posts-list::after {
    display: table;
    content: ' ';
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-order: 1;
        -ms-flex-order: 1;
            order: 1;
  }
  .posts-panel.grid .pinned-post::after, .posts-panel.grid .posts-list::after {
    clear: both;
  }
  .posts-panel.grid .pinned-post:last-child:not(:first-child), .posts-panel.grid .posts-list:last-child:not(:first-child) {
    float: right;
  }
  .posts-panel.grid .pinned-post, .posts-panel.grid .pinned-post:last-child, .posts-panel.grid .posts-list, .posts-panel.grid .posts-list:last-child {
    float: none;
  }
}

.posts-panel.grid .pinned-post .post-item {
  border: 0;
}

.posts-panel.grid .posts-list .post-title {
  font-size: 1.125rem;
}

.posts-panel.grid .posts-list .post-meta {
  font-size: 0.75rem;
}

.posts-panel.grid .posts-list .post-summary {
  font-size: 0.75rem;
}

.posts-panel.grid .posts-list .post-read-more {
  display: none;
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
 
 <!-- Sample 1-->
<!-- Posts panel container -->
<div class="posts-panel">

  <!-- Panel's header -->
  <header class="panel-header">
    <h1 class="panel-title">Featured Posts (List)</h1>
  </header>

  <!-- Panel's content -->
  <div class="panel-content">

    <!-- Pinned post section -->
    <section class="pinned-post">
      <!-- Post item -->

      <div class="post-item">

        <!-- Post's thumbnail -->
        <a href="#" class="post-thumbnail">
          <img src="https://static.pexels.com/photos/24587/pexels-photo-24587.jpg" alt="">
        </a>

        <!-- Post's text -->
        <div class="post-text">

          <!-- Post's title -->
          <a href="#">
            <h3 class="post-title">Post title place-holder</h3>
          </a>
          <div class="post-meta">
            <span class="meta"><span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span><a class="meta-text">Steve Jobs</a></span>
            <span class="meta"><span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text">22/06/2030</span></span>
          </div>

          <!-- Post's summary -->
          <div class="post-summary">
            <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it....
              <a href="#" class="post-read-more">Read more<span class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Posts list -->
    <section class="posts-list">
      <div class="post-item">
        <a href="#" class="post-thumbnail">
          <img src="https://static.pexels.com/photos/66274/sunset-poppy-backlight-66274.jpeg" alt="">
        </a>
        <div class="post-text">
          <a href="#">
            <h3 class="post-title">Post title place-holder</h3>
          </a>
          <div class="post-meta">
            <span class="meta"><span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span><a class="meta-text">Steve Jobs</a></span>
            <span class="meta"><span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text">22/06/2030</span></span>
          </div>
          <div class="post-summary">
            <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it....
              <a href="#" class="post-read-more">Read more<span class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
            </p>
          </div>
        </div>
      </div>

      <div class="post-item">
        <a href="#" class="post-thumbnail">
          <img src="https://static.pexels.com/photos/33109/fall-autumn-red-season.jpg" alt="">
        </a>
        <div class="post-text">
          <a href="#">
            <h3 class="post-title">Post title place-holder</h3>
          </a>
          <div class="post-meta">
            <span class="meta"><span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span><a class="meta-text">Steve Jobs</a></span>
            <span class="meta"><span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text">22/06/2030</span></span>
          </div>
          <div class="post-summary">
            <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it....
              <a href="#" class="post-read-more">Read more<span class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
            </p>
          </div>
        </div>
      </div>

      <div class="post-item">
        <a href="#" class="post-thumbnail">
          <img src="https://static.pexels.com/photos/12567/photo-1444703686981-a3abbc4d4fe3.jpeg" alt="">
        </a>
        <div class="post-text">
          <a href="#">
            <h3 class="post-title">Post title place-holder</h3>
          </a>
          <div class="post-meta">
            <span class="meta"><span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span><a class="meta-text">Steve Jobs</a></span>
            <span class="meta"><span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text">22/06/2030</span></span>
          </div>
          <div class="post-summary">
            <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it....
              <a href="#" class="post-read-more">Read more<span class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
            </p>
          </div>
        </div>
      </div>

      <div class="post-item">
        <a href="#" class="post-thumbnail">
          <img src="https://static.pexels.com/photos/370018/pexels-photo-370018.jpeg" alt="">
        </a>
        <div class="post-text">
          <a href="#">
            <h3 class="post-title">Post title place-holder</h3>
          </a>
          <div class="post-meta">
            <span class="meta"><span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span><a class="meta-text">Steve Jobs</a></span>
            <span class="meta"><span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text">22/06/2030</span></span>
          </div>
          <div class="post-summary">
            <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it....
              <a href="#" class="post-read-more">Read more<span class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>


<!-- Sample 2-->
<!-- Posts panel container -->
<div class="posts-panel grid">

  <!-- Panel's header -->
  <header class="panel-header">
    <h1 class="panel-title">Featured Posts (Grid)</h1>
  </header>

  <!-- Panel's content -->
  <div class="panel-content">

    <!-- Pinned post section -->
    <section class="pinned-post">
      <!-- Post item -->

      <div class="post-item">

        <!-- Post's thumbnail -->
        <a href="#" class="post-thumbnail">
          <img src="https://static.pexels.com/photos/24587/pexels-photo-24587.jpg" alt="">
        </a>

        <!-- Post's text -->
        <div class="post-text">

          <!-- Post's title -->
          <a href="#">
            <h3 class="post-title">Post title place-holder</h3>
          </a>
          <div class="post-meta">
            <span class="meta"><span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span><a class="meta-text">Steve Jobs</a></span>
            <span class="meta"><span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text">22/06/2030</span></span>
          </div>

          <!-- Post's summary -->
          <div class="post-summary">
            <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it....
              <a href="#" class="post-read-more">Read more<span class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Posts list -->
    <section class="posts-list">
      <div class="post-item">
        <a href="#" class="post-thumbnail">
          <img src="https://static.pexels.com/photos/66274/sunset-poppy-backlight-66274.jpeg" alt="">
        </a>
        <div class="post-text">
          <a href="#">
            <h3 class="post-title">Post title place-holder</h3>
          </a>
          <div class="post-meta">
            <span class="meta"><span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span><a class="meta-text">Steve Jobs</a></span>
            <span class="meta"><span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text">22/06/2030</span></span>
          </div>
        </div>
      </div>

      <div class="post-item">
        <a href="#" class="post-thumbnail">
          <img src="https://static.pexels.com/photos/33109/fall-autumn-red-season.jpg" alt="">
        </a>
        <div class="post-text">
          <a href="#">
            <h3 class="post-title">Post title place-holder</h3>
          </a>
          <div class="post-meta">
            <span class="meta"><span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span><a class="meta-text">Steve Jobs</a></span>
            <span class="meta"><span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text">22/06/2030</span></span>
          </div>
        </div>
      </div>

      <div class="post-item">
        <a href="#" class="post-thumbnail">
          <img src="https://static.pexels.com/photos/12567/photo-1444703686981-a3abbc4d4fe3.jpeg" alt="">
        </a>
        <div class="post-text">
          <a href="#">
            <h3 class="post-title">Post title place-holder</h3>
          </a>
          <div class="post-meta">
            <span class="meta"><span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span><a class="meta-text">Steve Jobs</a></span>
            <span class="meta"><span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text">22/06/2030</span></span>
          </div>
        </div>
      </div>

      <div class="post-item">
        <a href="#" class="post-thumbnail">
          <img src="https://static.pexels.com/photos/370018/pexels-photo-370018.jpeg" alt="">
        </a>
        <div class="post-text">
          <a href="#">
            <h3 class="post-title">Post title place-holder</h3>
          </a>
          <div class="post-meta">
            <span class="meta"><span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span><a class="meta-text">Steve Jobs</a></span>
            <span class="meta"><span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text">22/06/2030</span></span>
          </div>
        </div>
      </div>
    </section>
  </div>
</div> 