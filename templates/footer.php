<footer class="block footer">
  <div class="content row">
    <div class="small-12 columns">
      <?php
        if (has_nav_menu('footer_navigation')) :
          wp_nav_menu(['theme_location' => 'footer_navigation', 'items_wrap' => '<ul class="menu nav">%3$s</ul>']);
        endif;
      ?>

      <p class="copy mono">Code for Romania este o organizație apolitică și nepartizană. EIN: 27-1067272.</p>

      <a class="brand footer-logo" href="<?= esc_url(home_url('/')); ?>">
        <img src="<?php echoFieldValueOrDefault('logo_image', '', getFooterId()); ?>">
      </a>

    </div>
  </div>
</footer>
