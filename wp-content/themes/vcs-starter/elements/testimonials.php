<?php
$testimonial_arguments = array(
	'post_type' => 'testimonials',
	'posts_per_page' => 3,
	'orderby' => 'date',
	'order' => 'DESC'
);
$testimonial_query = new WP_Query( $testimonial_arguments );
// echo "<pre>";
// var_dump($testimonial_arguments);
// echo "</pre>";
 ?>
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Faucibus consequat lorem</h2>
						<p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
					</header>
					<div class="testimonials">
						<?php while($testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>
						<section>
							<div class="content">
								<blockquote>
									<p> <?php the_excerpt(); ?> </p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src=" <?php the_post_thumbnail_url(); ?>" alt=" <?php the_title(); ?> " />
									</div>
									<p class="credit">- <strong> <?php the_title(); ?></strong> <span><?php the_field('job_title', get_the_ID());?> - <?php the_field('corporation_name', get_the_ID()); ?> </span></p>
								</div>
							</div>
						</section>
					<?php endwhile; ?>
					</div>
				</div>
			</section>
