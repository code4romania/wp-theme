<?php /* Template Name: Sustinatori */ ?>

<section class="block block-content wrap container">
  <div class="hero">
    <div class="hero-content content row">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/page', 'header'); ?>

        <div class="small-offset-1 small-10 columns">
          <?php get_template_part('templates/content', 'page'); ?>

          <div class="partners">
            <h2>In-Kind</h2>

            <ul class="list-images row">
              <li class="small-6 medium-4 large-3 columns">
                <a href="https://www.github.com/" class="partner" target="_blank">
                  <img src="<?php bloginfo('template_url'); ?>/dist/images/github.png" alt="Github">
                </a>
              </li>
              <li class="small-6 medium-4 large-3 columns">
                <a href="https://www.google.com/nonprofits/" class="partner" target="_blank">
                  <img src="<?php bloginfo('template_url'); ?>/dist/images/google.png" alt="Google">
                </a>
              </li>
              <li class="small-6 medium-4 large-3 columns">
                <a href="https://slack.com/" class="partner" target="_blank">
                  <img src="<?php bloginfo('template_url'); ?>/dist/images/slack.png" alt="Slack">
                </a>
              </li>
            </ul>
          </div>

          <div class="partners">
            <h2>O societate mai puternică contribuie la un mediu de business mai sănătos.</h2>
            <p>Dacă vrei să susții proiecte care vor schimba încet încet România, ne-ar plăcea să ne prezentăm și să vedem cum putem lucra împreună.</p>
            <div class="actions">
              <a href="mailto:bani@code4.ro"class="button large underline">Dă-ne un mail</a>
            </div>
          </div>

        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
