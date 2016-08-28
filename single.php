<?php
  $postType = get_post_type();

  if ($postType === "proiect") {
    get_template_part('templates/proiect', 'template');
  } else {
    get_template_part('templates/content-single', get_post_type());
  }
?>
