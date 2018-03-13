<?php
 $gallerys_arguments = array(
    'post_type' => 'sec2_gallery',
    'posts_per_page' => -1,
    'order' => 'ASC'
  );

$gallery = new WP_Query($gallerys_arguments);
$show_gallery = get_field('show_section_sec2_gallery', 255);
 ?>


<div class="mcoil2">
   <div class="mcoil2-container">
     <div class="mcoil2up">
       <h2><?php the_field('s2_heading',104) ?></h2>
       <h3><?php the_field('s2_sub_heading',104) ?></h3>
    <div class="mcoil2-buttons">
         <button class="button21">Photography</button>
         <button class="button22">Design</button>
         <button class="button23">Print</button>
    </div>
    </div>
     <div class="mcoil2down">
       <?php if( $gallery->have_posts() ) : while( $gallery->have_posts() ) : $gallery->the_post(); ?>
     <div class="imgsec">
       <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="coil2" >
     </div>
        <?php endwhile;endif; ?>
   </div>
     <button class="button24">View more work    <i class="fa fa-arrow-right" ></i></button>
   </div>
 </div>
