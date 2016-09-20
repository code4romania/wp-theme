<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

add_filter('show_admin_bar', '__return_false');



//Declare global properties and accessors
$headerId       = 55;
$homeId         = 2;
$footerId       = 57;
$filtreActiveId = 4;


function getFooterId() {
    global $footerId;
    return $footerId;
}

function getHomeId() {
    global $homeId;
    return $homeId;
}

function getHeaderId() {
    global $headerId;
    return $headerId;
}

function getFiltreActiveId() {
    global $filtreActiveId;
    return $filtreActiveId;
}

function getCategoryActiveFilters() {
    $filters = get_terms( 'category', array(
        'orderby'    => 'id',
        'parent'   => getFiltreActiveId()
    ));

    return $filters;
}


//add svg as allowed mime type
add_filter('upload_mimes', 'custom_upload_mimes');

//Adds post featured image support
add_theme_support('post-thumbnails');

function custom_upload_mimes ( $existing_mimes=array() ) {

  // add the file extension to the array

  $existing_mimes['svg'] = 'mime/type';

    // call the modified list of extensions

  return $existing_mimes;

}

//Return the vaule of a ACF or the default value
function fieldValueOrDefault ($field, $defaultValue = "", $pageId = "") {

    return $pageId != "" ? (get_field($field, $pageId) ? get_field($field, $pageId) : $defaultValue) :
                         (get_field($field)          ? get_field($field) : $defaultValue);

}


//Echo the vaule of a ACF or the default value
function echoFieldValueOrDefault ($field, $defaultValue = "", $pageId = "") {
  echo fieldValueOrDefault ($field, $defaultValue, $pageId);
}

//Return the vaule of a Repeater Field or the default value
function repeaterFieldValueOrDefault($item, $field, $defaultValue = "") {
    return array_key_exists($item, $field ) && $field[$item] ? $field[$item] : $defaultValue;
}

//Echo the vaule of a Repeater Field or the default value
function echoRepeaterFieldValueOrDefault ($item, $field, $defaultValue = "") {
  echo repeaterFieldValueOrDefault($item, $field, $defaultValue);
}

/**
 * Hide editor on specific pages.
 */
add_action( 'admin_init', 'hide_editor' );

function hide_editor() {
  $post_id = isset($_GET['post']) ? $_GET['post'] : '';

  if( !isset( $post_id ) ) return;

  $template_file = get_post_meta($post_id, '_wp_page_template', true);

  if( $template_file === 'templates/cine-suntem-template.php' ||
      $template_file === 'templates/acasa-template.php' ||
      $template_file === 'templates/implica-te-template.php' ||
      $template_file === 'templates/proiecte-template.php' ||
      $template_file === 'templates/proiect-template.php' ||
      $template_file === 'templates/cum-lucram-template.php'
    ) {
    remove_post_type_support('page', 'editor');
  }
}

add_filter( 'nav_menu_link_attributes', 'my_nav_menu_attribs', 10, 3 );

function my_nav_menu_attribs($atts, $item, $args) {
  $menu_target = 109;

  if ($item->ID == $menu_target) {
    $atts['href'] = '#';
    $atts['data-open'] = 'contact-overlay';
  }

  return $atts;
}

function category_title( $title ) {
  if ( is_category() ) {
      $title = single_cat_title( '', false );
  } elseif ( is_tag() ) {
      $title = single_tag_title( '', false );
  } elseif ( is_author() ) {
      $title = '<span class="vcard">' . get_the_author() . '</span>';
  } elseif ( is_post_type_archive() ) {
      $title = post_type_archive_title( '', false );
  } elseif ( is_tax() ) {
      $title = single_term_title( '', false );
  }

  return $title;
}

add_filter( 'get_the_archive_title', 'category_title' );


function new_excerpt_more($more) {
  global $post;
  return '...<div class="more"><a class="button medium underline" href="'. get_permalink($post->ID) . '">Citește articolul</a></div>';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>