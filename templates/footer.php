<footer class="block footer">
  <div class="content row">
    <div class="small-12 columns">
      <?php
        if (has_nav_menu('footer_navigation')) :
          wp_nav_menu(['theme_location' => 'footer_navigation', 'items_wrap' => '<ul class="menu nav">%3$s</ul>']);
        endif;
      ?>

      <p class="copy mono">&copy; 2016 Code for Romania. Organizație apolitică și nepartizană.</p>

      <a class="brand footer-logo" href="<?= esc_url(home_url('/')); ?>">
        <img src="<?php bloginfo('template_url'); ?>/dist/images/footer-logo.png" alt="<?php bloginfo('name'); ?>">
      </a>

    </div>
  </div>
</footer>

<nav id="nav-overlay" class="full reveal" data-reveal>
  <div class="overlay-content overlay-nav">
    <a href="#" class="close-button" title="Inchide" data-close>
      <i class="material-icons">&#xE5CD;</i>
    </a>
    <!-- <button class="button" data-open="contact-overlay">Contact</button> -->
    <!-- <a href="/">Home</a> -->
    <?php if (has_nav_menu('primary_navigation')) : ?>
      <div class="overlay-middle">
        <?php wp_nav_menu(['theme_location' => 'primary_navigation', 'items_wrap' => '<ul class="menu">%3$s</ul>']); ?>
      </div>
    <?php endif; ?>
  </div>
</nav>


<div id="contact-overlay" class="large reveal" data-reveal>
  <div class="overlay-content overlay-contact">
    <a href="#" class="close-button" title="Inchide" data-close>
      <i class="material-icons">&#xE5CD;</i>
    </a>

    <div class="row interact">
      <div class="small-12 medium-offset-1 medium-10 columns">
        <h2>Salut!</h2>
        <p>Lorem ipsum bla bla, avem nevoie de un text aici.</p>
        <?php echo do_shortcode('[contact-form-7 id="106" title="Contact"]'); ?>
      </div>
    </div>
  </div>
</div>


<div id="add-project-overlay" class="large reveal" data-reveal>
  <div class="overlay-content overlay-contact">
    <a href="#" class="close-button" title="Inchide" data-close>
      <i class="material-icons">&#xE5CD;</i>
    </a>

    <div class="row interact">
      <div class="small-12 medium-offset-1 medium-10 columns">
        <?php echo do_shortcode('[contact-form-7 id="110" title="Propune un proiect"]'); ?>
      </div>
    </div>
  </div>
</div>
