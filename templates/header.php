<header class="banner">
  <div class="container">
    <nav class="nav-primary">
      <div class="nav-wrapper">
          <a class="brand brand-logo" href="<?= esc_url(home_url('/')); ?>">      
            <img src="<?php echoFieldValueOrDefault('logo_image', '', getHeaderId()); ?>">
          </a>
          <a class="twitter-logo social-logo right" href="<?php echoFieldValueOrDefault('twitter_link', '', getHeaderId()); ?>">      
            <img src="<?php echoFieldValueOrDefault('twitter_image', '', getHeaderId()); ?>">
          </a>
          <a class="facebook-logo social-logo right" href="<?php echoFieldValueOrDefault('facebook_link', '', getHeaderId()); ?>">      
            <img src="<?php echoFieldValueOrDefault('facebook_image', '', getHeaderId()); ?>">
          </a>
          <?php 
            wp_nav_menu(
              array(  
                'menu'            => 'header-menu',
                'container'       => '',
                'container_class' => '',
                'menu_class'      => 'right'
                )
          ); ?>
        </div>
    </nav>  
</header>