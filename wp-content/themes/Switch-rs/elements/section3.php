<div class="mcoil3">
 <div class="mcoil3-container">
   <div class="mcoil3up">
      <h2><?php the_field('s3_heading',104) ?></h2>
    <h3><?php the_field('s3_sub_heading',104) ?></h3>
    </div>
   <div class="textslide">
    <button class="slideleft" onclick="plusDivs(-1)">&#10094;</button>
      <p class="slide"> <?php the_field('testimonial1',104) ?> </p>
      <p class="slide"> <?php the_field('testimonial2',104) ?> </p>
      <p class="slide"> <?php the_field('testimonial3',104) ?> </p>
    <button class="slideright" onclick="plusDivs(1)">&#10095;</button>
  </div>
   <img src="<?php the_field('s3_image', 104); ?>" alt="coil3" >
 </div>
</div>
