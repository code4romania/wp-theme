<section class="block block-content block-text block-articles wrap container">
  <div class="hero">
    <div class="hero-content content row">
      <?php get_template_part('templates/page', 'header'); ?>

      <div class="small-offset-1 small-10 columns">
        <?php if (!have_posts()) : ?>
          <div class="alert alert-warning">
            <?php _e('Cum ai ajuns aici? <a href="#" data-open="contact-overlay" class="trigger">Scrie-ne, te rog</a>.', 'sage'); ?>
          </div>
        <?php endif; ?>

        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>
      </div>
    </div>
  </div>
</section>