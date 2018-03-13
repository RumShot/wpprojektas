<?php
$highlight_arguments = array(
  'post_type' => 'highlights',
  'posts_per_page' => -1,
  'order' => 'ASC'
);
$highlights = new WP_Query( $highlight_arguments );
$show_highlights = get_field('show_section_highlights', 48);
?>
<section class="wrapper" style="<?php echo !$show_highlights ? 'display:none' : ''; ?>">
  <div class="inner">
    <header class="special">
      <h2><?php the_field('highlights_heading', 48); ?></h2>
      <p><?php the_field('highlights_subheading', 48); ?></p>
    </header>
    <div class="highlights">
      <?php if( $highlights->have_posts() ) : while( $highlights->have_posts() ) : $highlights->the_post(); ?>
      <section>
        <div class="content">
          <header>
            <a href="#" class="icon"><img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" style="max-width:100%"></a>
            <h3><?php the_title(); ?></h3>
          </header>
          <p><?php the_content(); ?></p>
        </div>
      </section>
      <?php endwhile;endif; ?>
    </div>
  </div>
</section>
