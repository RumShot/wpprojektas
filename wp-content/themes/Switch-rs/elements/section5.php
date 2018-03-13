<?php
 $theteams_arguments = array(
    'post_type' => 'theteam',
    'posts_per_page' => -1,
    'order' => 'ASC'
  );

$theteam = new WP_Query($theteams_arguments);
$show_theteam = get_field('show_section_theteam', 154);
 ?>

<div class="mcoil5">
   <div class="mcoil5-container">
     <div class="mcoil5up">
       <h2><?php the_field('s5_heading',104) ?></h2>
       <h3><?php the_field('s5_sub_heading',104) ?></h3>
   </div>
     <div class="mcoil5down">
       <?php if( $theteam->have_posts() ) : while( $theteam->have_posts() ) : $theteam->the_post(); ?>
       <div class="facesec">
           <img src="<?php the_post_thumbnail_url(); ?>" alt="coil5">
           <div class="vl"></div>
           <p><?php echo strip_tags(the_content() ); ?></p>
           <div class="links">
             <!-- ?php if(get_field('dribbble_link', 187) != '' ) :?> -->
             <a target="_blank" href="http://<?php the_field('dribbble_link', 155)?>"><i class="fa fa-dribbble" style="font-size: 1.5rem;color:#e95089"></i></a>
           <!-- ?php endif; if(get_field('twitter_link', 187) != '' ) :?> -->
             <a target="_blank" href="http://<?php the_field('twitter_link', 155)?>"><i class="fa fa-twitter-square" style="font-size: 1.5rem;color:#00abed"></i></a>
           <!-- ?php endif; if(get_field('behance_link', 187) != '' ) :?> -->
             <a target="_blank" href="http://<?php the_field('behance_link', 155)?>"><i class="fa fa-behance" style="font-size: 1.5rem; color: #0062fe"></i></a>
           <!-- ?php endif; ?> -->
           </div>
       </div>
       <?php endwhile;endif; ?>
     </div>
   </div>
   <div class="sub-mcoil53">
       <button class="button52">WORK WITH US</button>
   </div>
 </div>
</div>
</main>
