<section class="block block-content wrap container">
  <div class="hero">
    <div class="hero-content content row">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/page', 'header'); ?>

        <div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">
          <?php get_template_part('templates/content', 'page'); ?>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
