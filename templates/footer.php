<footer class="content-info">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    	<?php 
    	    wp_nav_menu(
    	      array(  
    	        'menu'            => 'footer-menu',
    	        'container'       => '',
    	        'container_class' => '',
    	        'menu_class'      => ''
    	        )
    	); ?>

    	<a class="brand footer-logo" href="<?= esc_url(home_url('/')); ?>">      
          <img src="<?php echoFieldValueOrDefault('logo_image', '', getFooterId()); ?>">
        </a>
  </div>
</footer>
