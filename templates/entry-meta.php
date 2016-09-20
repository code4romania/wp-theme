<div class="entry-meta">
  <strong class="author">
    <?php echo ' ' . get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name'); ?>
  </strong>
  <i class="fa fa-circle" aria-hidden="true"></i>
  <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date('j F Y'); ?></time>
</div>