
<header class="top">
  <div class="title-bar" data-responsive-toggle="nav" data-hide-for="medium">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <button class="menu-icon" type="button" data-toggle></button>
  </div>

  <nav class="top-bar" id="nav">
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'items_wrap' => '<ul class="dropdown menu" data-dropdown-menu>%3$s</ul>']);
      endif;
    ?>
  </nav>

</header>
