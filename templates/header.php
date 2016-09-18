<header class="top">
  <div class="title-bar clearfix">
    <div class="content row">
      <div class="small-12 columns">
        <a class="brancusi hide-for-large hide-for-xlarge" href="<?= esc_url(home_url('/')); ?>">
          <img src="<?php bloginfo('template_url'); ?>/dist/images/brand-brancusi.png" alt="Brancusi">
        </a>

        <a class="brand show-for-large show-for-xlarge" href="<?= esc_url(home_url('/')); ?>">
          <img src="<?php bloginfo('template_url'); ?>/dist/images/brand-logotype.png" alt="<?php bloginfo('name'); ?>">
        </a>

        <button class="burger hide-for-large hide-for-xlarge" data-open="nav-overlay">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>

        <nav id="nav" class="nav show-for-large show-for-xlarge">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'items_wrap' => '<ul class="menu">%3$s</ul>']);
            endif;
          ?>
        </nav>
      </div>
    </div>
  </div>
</header>
