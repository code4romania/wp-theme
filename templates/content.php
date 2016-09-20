<article <?php post_class(); ?>>
  <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date('j F Y'); ?></time>
  <div class="entry-excerpt">
    <header>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <strong class="author">
        <?php echo ' ' . get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name'); ?>
      </strong>
    </header>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  </div>
</article>
