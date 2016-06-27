
<footer class="block footer">
  <div class="content row">
    <div class="small-12 columns">
      <?php
        if (has_nav_menu('footer_navigation')) :
          wp_nav_menu(['theme_location' => 'footer_navigation', 'items_wrap' => '<ul class="menu nav">%3$s</ul>']);
        endif;
      ?>
    </div>
  </div>

</footer>


<nav id="nav-overlay" class="full reveal" data-reveal>
  <div class="overlay-content overlay-nav">
    <a href="#" class="close-button" title="Inchide" data-close>
      <i class="material-icons">&#xE5CD;</i>
    </a>
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'items_wrap' => '<ul class="menu nav">%3$s</ul>']);
      endif;
    ?>
  </div>
</nav>
