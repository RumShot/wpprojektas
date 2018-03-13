<?php
$mcoil1downs_arguments = array(
    'post_type' => 'mcoil1down',
    'posts_per_page' => -1,
    'order' => 'ASC'
);

$mcoil1down = new WP_Query($mcoil1downs_arguments);
$show_mcoil1down = get_field('show_section_mcoil1down', 104);
 ?>


<main>
  <div class="main-container">
   <div class="mcoil1">
      <div class="mcoil1-container">
        <div class="mcoil1up">
          <section class="down"><h2><?php the_field('s1_heading',104) ?></h2></section>
                                    <?php the_field('s1_sub_heading',104) ?>
        </div>
        <div class="mcoil1down">
          <?php if( $mcoil1down->have_posts() ) : while( $mcoil1down->have_posts() ) : $mcoil1down->the_post(); ?>
          <div class="inner-coil">
           <img src="<?php the_post_thumbnail_url(); ?>" alt="" style="max-width:100%" >
            <h5><?php the_title(); ?></h5>
            <?php the_content(); ?>
            <button>Learn more</button>
          </div>
        <?php endwhile;endif; ?>
         </div>
       </div>
    </div>
  </div>
