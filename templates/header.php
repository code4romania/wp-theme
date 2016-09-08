<header class="top">
  <div class="title-bar clearfix">
    <div class="content row">
      <div class="small-12 columns">
        <a class="brancusi show-for-small-only" href="<?= esc_url(home_url('/')); ?>">
          <img src="<?php bloginfo('template_url'); ?>/dist/images/brand-brancusi.png" alt="Brancusi">
        </a>

        <a class="brand hide-for-small-only" href="<?= esc_url(home_url('/')); ?>">
          <img src="<?php bloginfo('template_url'); ?>/dist/images/brand-logotype.png" alt="<?php bloginfo('name'); ?>">
        </a>

        <button class="burger show-for-small-only" data-open="nav-overlay">
          <i class="material-icons">&#xE5D2;</i>
        </button>

        <nav id="nav" class="nav hide-for-small-only">
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
