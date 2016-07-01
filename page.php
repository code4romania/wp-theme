<section class="wrap container">
  <div class="content row">
    <div class="small-12 columns">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/page', 'header'); ?>
        <?php get_template_part('templates/content', 'page'); ?>
      <?php endwhile; ?>
    </div>
  </div>
</section>
