<footer class="block footer">
  <div class="content row">
    <div class="small-12 columns">

      <?php
        if (has_nav_menu('footer_navigation')) :
          wp_nav_menu(['theme_location' => 'footer_navigation', 'items_wrap' => '<ul class="menu nav">%3$s</ul>']);
        endif;
      ?>

      <ul class="social">
        <li>
          <a href="https://www.facebook.com/code4romania/" target="_blank">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
        </li>
        <li>
          <a href="https://twitter.com/Code4Romania" target="_blank">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
        </li>
        <li>
          <a href="https://github.com/code4romania/" target="_blank">
            <i class="fa fa-github" aria-hidden="true"></i>
          </a>
        </li>
        <li>
          <a href="https://www.linkedin.com/company/code-for-romania" target="_blank">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>
        </li>
      </ul>


      <p class="copy mono">
        <?php if(qtrans_getLanguage() === "ro") { ?>
          &copy; <?php echo date('Y'); ?> Code for Romania.<br/> Organizație neguvernamentală independentă, neafiliată politic și apolitică.
        <?php } else { ?>
          &copy; <?php echo date('Y'); ?> Code for Romania.<br/> An independent, non-partisan, non-political, non-govermental organization.
        <?php } ?>
      </p>

      <a class="brand footer-logo" href="<?= esc_url(home_url('/')); ?>">
        <img src="<?php bloginfo('template_url'); ?>/dist/images/footer-logo.png" alt="<?php bloginfo('name'); ?>">
      </a>

    </div>
  </div>
</footer>

<nav id="nav-overlay" class="full reveal" data-reveal>
  <div class="overlay-content overlay-nav">
    <a href="#" class="close-button" title="Inchide" data-close>
      <i class="fa fa-times" aria-hidden="true"></i>
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
