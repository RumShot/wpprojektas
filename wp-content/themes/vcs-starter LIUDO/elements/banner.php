<?php
define( 'ASSETSS_URL', get_template_directory_uri() . '/assets' );
?>
<section id="banner">
  <div class="inner">
    <h1><?php the_field('page_title', 48); ?></h1>
    <p><?php the_field('sub_title', 48); ?></p>
  </div>
  <video autoplay loop muted>
    <source src="<?php echo ASSETSS_URL . '/images/banner.mp4'; ?>" type="video/mp4">
  </video>
</section>
