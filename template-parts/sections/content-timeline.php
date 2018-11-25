<?php
/**
 * Template part for timeline content
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 *
 * A responsive timeline that can house images in each timeline item. Works 
 * * with SVG's or images. Change the $timeline-item-card variable to true 
 * to add a background to each timeline content item.
 */

?>
 
 
<!--<?php// if ( $query->have_posts() ) : ?>-->
 
 <section class="about-us-section vertical-post gray">
  <div class="grid-container ">
    
     <div class="grid-x  align-center">
       <div class="cell small-12">

        <div class="timeline">
          <div class="timeline-item">
            <div class="timeline-icon">
              <div class="fa-4x" style="font-size:3rem">
                <span class="fa-layers fa-fw">
                  <i class="fas fa-circle" style="color: #F9C301" aria-hidden="true"></i>
                  <i class="fa-inverse fas fa-user-graduate" data-fa-transform="shrink-6" aria-hidden="true"></i>
                </span>             
              </div> 
            </div>
 
          <div class="timeline-content">
            <h2 class="timeline-content-date">1855</h2>
            <p>Born in 1855, Arthur Jordan was educated in Indianapolis public schools, dropping out after his junior year to help with family income.
              <?php// the_field('section_1'); ?></p>
          </div>
        </div>

    <div class="timeline-item">
      <div class="timeline-icon">
        <div class="fa-4x" style="font-size:3rem">
          <span class="fa-layers fa-fw">
          <i class="fas fa-circle" style="color: #F9C301" aria-hidden="true"></i>
          <i class="fa-inverse fas fa-hand-holding-heart" data-fa-transform="shrink-6" aria-hidden="true"></i>
          </span>
        </div>
         
        </div>
        <div class="timeline-content right">
          <h2 class="timeline-content-date">1876</h2>
          <p>Arthur Jordan purchased a small company handling butter and eggs in 1876.  In an article for a produce markets publication 27 years later, he stated “At first I gave special attention to the local trade, but soon found the eastern markets to be both attractive and profitable, and within a few years the shipping end of the business required the greater part of my attention.”</p><br><p><?php// the_field('section_2'); ?></p>
        </div>
      </div>

  <div class="timeline-item">
    <div class="timeline-icon">
      <div class="fa-4x" style="font-size:3rem">
      <span class="fa-layers fa-fw">
        <i class="fas fa-circle" style="color: #F9C301" aria-hidden="true"></i>
        <i class="fa-inverse fas fa-seedling" data-fa-transform="shrink-6" aria-hidden="true"></i>
      </span>
    </div>
    </div>
    <div class="timeline-content">
      <p class="timeline-content-date">Early 1900's</p>
      <p>At that time, eggs and produce could not be shipped great distances without spoilage.  Mr. Jordan understood the need to move from the ice packing method of preservation to a refrigerated system of packing and cold storage plants.  Pioneering a viable solution, he became the first businessman to ship a trainload of poultry from Indianapolis to New York City.<?php// the_field('section_3'); ?></p>
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-icon">
       <div class="fa-4x" style="font-size:3rem">
      <span class="fa-layers fa-fw">
        <i class="fas fa-circle" style="color: #F9C301" aria-hidden="true"></i>
        <i class="fa-inverse fas fa-handshake" data-fa-transform="shrink-6" aria-hidden="true"></i> 
      </span>
    </div>
    </div>
    <div class="timeline-content right">
      <p class="timeline-content-date">1920's</p>
      <p>An interest in the arts led Arthur Jordan to support local music programs in the state.  In the 1920s, he purchased the Metropolitan School of Music and the Indiana College of Music and Fine Arts, strengthening them by a merger with the Arthur Jordan Conservatory of Music.  This school, the campus of which was located between the 1100 and 1200 blocks of north Delaware Street, specialized in music classifications, drama and dance.<?php// the_field('section_4'); ?></p>
    </div>
  </div>
 

 
    <div class="timeline-item">
    <div class="timeline-icon">
      <div class="fa-4x" style="font-size:3rem">
      <span class="fa-layers fa-fw">
        <i class="fas fa-circle" style="color: #F9C301" aria-hidden="true"></i>
        <i class="fa-inverse fab fa-gratipay" data-fa-transform="shrink-6" aria-hidden="true"></i>
      </span>
    </div>
     
       
    </div>
    <div class="timeline-content">
      <p class="timeline-content-date">1928</p>
     <p><?php the_field('section_5'); ?> Arthur Jordan was also a philanthropist and founded the Arthur Jordan Foundation on December 24, 1928.  Mr. Jordan served as chairman until his death in 1934.  The foundation operates with a board of seven trustees selected from the Indianapolis community.</p>
      
     
    </div>
  </div>


  <div class="timeline-item">
    <div class="timeline-icon">
      <div class="fa-4x" style="font-size:3rem">
      <span class="fa-layers fa-fw">
        <i class="fas fa-circle" style="color: #F9C301" aria-hidden="true"></i>
        <i class="fa-inverse fab fa-gratipay" data-fa-transform="shrink-6" aria-hidden="true"></i>
      </span>
    </div>
     
       
    </div>
    <div class="timeline-content right">
      <p class="timeline-content-date">1934</p>
     <p><?php the_field('section_5'); ?>Mr. Jordan died in New York City. His legacy lives on through the Arthur Jordan Foundation.</p>
      
     
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-icon">
      <div class="fa-4x" style="font-size:3rem">
      <span class="fa-layers fa-fw">
        <i class="fas fa-circle" style="color: #F9C301" aria-hidden="true"></i>
        <i class="fa-inverse fas fa-bed" data-fa-transform="shrink-6" aria-hidden="true"></i>
      </span>
    </div>
    </div>
    <div class="timeline-content ">
       <p class="timeline-content-date">1937</p>
      <p><?php// the_field('section_6'); ?>In 1937, the foundation purchased the home of President Benjamin Harrison from his widow.  The mansion served as a women’s dormitory for the Arthur Jordan Conservatory of Music, and the trustees agreed that a portion of the home would remain a memorial to the former president.</p>
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-icon">
      <div class="fa-4x" style="font-size:3rem">
      <span class="fa-layers fa-fw">
        <i class="fas fa-circle" style="color: #F9C301" aria-hidden="true"></i>
        <i class="fa-inverse fas fa-music" data-fa-transform="shrink-6" aria-hidden="true"></i>
      </span>
    </div>
       
    </div>
    <div class="timeline-content right">
      <p class="timeline-content-date">1949</p>
      <p><?php// the_field('section_3'); ?>The Arthur Jordan Conservatory of Music is renamed in 1949 to the Jordan College of Music.</p> 
      
       
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-icon">
       <div class="fa-4x" style="font-size:3rem">
      <span class="fa-layers fa-fw">
        <i class="fas fa-circle" style="color: #F9C301" aria-hidden="true"></i>
        <i class="fa-inverse fas fa-university" data-fa-transform="shrink-6" aria-hidden="true"></i>
      </span>
    </div>
      
    </div>
    <div class="timeline-content">
      <p class="timeline-content-date">1951</p>   
         <p><?php// the_field('section_4'); ?>The Jordan College of Music merges with Butler University and moves to the Butler campus. Today it is know as the Jordan College of Fine Arts. Following the move of the school to Butler University, the Benjamin Harrison home becomes a museum.</p>
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-icon">
       
      <div class="fa-4x" style="font-size:3rem">

      <span class="fa-layers fa-fw">
        <i class="fas fa-circle" style="color: #F9C301" aria-hidden="true"></i>
        <i class="fa-inverse fas fa-flag-usa" data-fa-transform="shrink-6" aria-hidden="true"></i>
      </span>
    </div>
     
    </div>
    <div class="timeline-content right">
      <h2 class="timeline-content-date">1974 - 2008</h2>
      <p>A major renovation in 1974 and a Save America’s Treasures grant in 2008 have allowed this accredited museum, renamed the Benjamin Harrison Presidential Site, to become nationally renowned.</p>
    </div>
  </div>
</div>
<div class="grid-x grid-margin-x align-center">
  <div class="cell small-8 space-around">
         <h2 class="timeline-header"> In keeping with Mr. Jordan’s wishes, the Foundation makes grants each year to various charitable organizations in the Indianapolis area.  Since its inception, the Arthur Jordan Foundation has contributed over $25,000,000 to the community.</h2>
       </div> 
      </div> 
    </div>
  </div>

</section> 
 <?php// endwhile;   ?>  
  
<?php/// endif; ?>