<!-- Footer -->
  <footer id="footer">
    <div class="inner">
      <div class="content">
        <section>
          <h3><?php the_field('footer_heading', 48) ?></h3>
          <p><?php the_field('footer_decription', 48) ?></p>
        </section>
        <section>
          <h4>Sem turpis amet semper</h4>
          <?php
          wp_nav_menu( array(
            'theme_location' => 'footer-menu',
            'menu_class' => 'alt',
            'container' => false
          ) );
          ?>
          <!-- <ul class="alt">
            <li><a href="#">Dolor pulvinar sed etiam.</a></li>
            <li><a href="#">Etiam vel lorem sed amet.</a></li>
            <li><a href="#">Felis enim feugiat viverra.</a></li>
            <li><a href="#">Dolor pulvinar magna etiam.</a></li>
          </ul> -->
        </section>
        <section>
          <h4>Magna sed ipsum</h4>
          <ul class="plain">
          <?php if( get_field('twitter_link', 48) != '' ) : ?>
            <li><a target="_blank" href="http://<?php the_field('twitter_link',48); ?>"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
          <?php endif; if( get_field('facebook_link', 48) != '' ) :?>
            <li><a target="_blank" href="http://<?php the_field('facebook_link',48); ?>"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
          <?php endif; if( get_field('instagram_link', 48) != '' ) :?>
            <li><a target="_blank" href="http://<?php the_field('instagram_link',48); ?>"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
          <?php endif; if( get_field('github_link', 48) != '' ) :?>
            <li><a target="_blank" href="http://<?php the_field('github_link',48); ?>"><i class="icon fa-github">&nbsp;</i>Github</a></li>
          <?php endif; ?>
          </ul>
        </section>
      </div>
      <div class="copyright">
        &copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
