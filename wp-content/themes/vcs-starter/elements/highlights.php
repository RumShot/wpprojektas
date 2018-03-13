<?php
$highlights_arguments = array(
  'post_type' => 'highlights' ,
  'posts_per_page' => -1 ,
  'order' => 'ASC'
 ) ;
 $highlights = new WP_Query( $highlights_arguments );

 // var_dump($highlights);
 ?>
  <section class="wrapper">
    <div class="inner">
      <header class="special">
        <h2>Sem turpis amet semper</h2>
        <p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
      </header>
      <div class="highlights">
        <?php if($highlights->have_posts()) : while ($highlights->have_posts()) : $highlights->the_post(); ?>
        <section>
          <div class="content">
            <header>
              <a href="#" class="icon"><img src="<?php the_post_thumbnail_url(); ?>" style="font-size: 100%"> </a>
              <h3> <?php the_title(); ?> </h3>
            </header>
            <p> <?php the_content(); ?> </p>
          </div>
        </section>
<?php endwhile;endif; ?>
      </div>
    </div>
  </section>
