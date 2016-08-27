<div class="wrap container">
  <div class="content row">
    <div class="small-12 columns">
      <?php
        $postType = get_post_type();

        if($postType === "proiect") {
          get_template_part('templates/proiect', 'template');
        }
        else {
          get_template_part('templates/content-single', get_post_type());
        }
      ?>
    </div>
  </div>
</div>
