<?php
$cta_arguments = array(
  'post_type' => 'testimonials',
  'posts_per_page' => 1
);
 ?>
  <section id="cta" class="wrapper">
    <div class="inner">
      <h2> <?php the_field('cta_heading', 36) ?> </h2>
      <p> <?php the_field('cta_description', 36) ?> </p>
    </div>
  </section>
