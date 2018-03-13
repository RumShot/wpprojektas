<?php get_header(); ?>
<!-- Heading -->
  <div id="heading" >
    <h1><?php the_title(); ?></h1>
  </div>

<!-- Main -->
<section id="main" class="wrapper">
  <div class="inner">
    <div class="content">
      <header>
        <h2><?php the_title(); ?></h2>
      </header>
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
