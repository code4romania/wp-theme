<?php /* Template Name: Tranzactie */ ?>

<section class="block block-content wrap container">
  <div class="hero">
    <div class="hero-content content row">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/page', 'header'); ?>

        <div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">

          <?php the_content(); ?>

          <ul class="social social-thanks">
            <li>
              <a href="https://www.facebook.com/code4romania/" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/Code4Romania" target="_blank">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="https://github.com/code4romania/" target="_blank">
                <i class="fa fa-github" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/company/code-for-romania" target="_blank">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </div>

      <?php endwhile; ?>
    </div>
  </div>
</section>
