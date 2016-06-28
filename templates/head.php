<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('title'); ?></title>

    <!-- Compiled and minified materialize CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

  <!-- Site style -->
  <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" media="all" type="text/css" />

  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/scripts/jquery-3.0.0.min.js"></script>
  
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/scripts/main.js"></script>


  <!-- Compiled and minified materialize JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
  
  <?php wp_head(); ?>
</head>
