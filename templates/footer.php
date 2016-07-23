<footer class="block footer">
  <div class="content row">
    <div class="small-12 columns">
      <?php
        if (has_nav_menu('footer_navigation')) :
          wp_nav_menu(['theme_location' => 'footer_navigation', 'items_wrap' => '<ul class="menu nav">%3$s</ul>']);
        endif;
      ?>

      <p class="copy mono">&copy; 2016 Code for Romania. Organizație apolitică și nepartizană. EIN: 27-1067272.</p>

      <a class="brand footer-logo" href="<?= esc_url(home_url('/')); ?>">
        <img src="<?php bloginfo('template_url'); ?>/dist/images/footer-logo.png">
      </a>

    </div>
  </div>
</footer>
