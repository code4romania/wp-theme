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

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-78737772-1', 'auto');
      ga('send', 'pageview');
    </script>

  </body>
</html>
