<?php while (have_posts()) : the_post(); ?>
<section class="block block-content block-single wrap container">
  <article class="hero">
    <div class="hero-content content row">
      <header class="small-offset-1 small-10 medium-offset-2 medium-8 columns">
        <a href="#" class="back" onclick="history.go(-1);">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
          <span>Înapoi</span>
        </a>
        <h1><?php the_title(); ?></h1>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>
      <div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </article>
</section>

<?php endwhile; ?>
