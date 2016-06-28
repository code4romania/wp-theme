<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

    <?php include Wrapper\template_path(); ?>

    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
