<?php /* Template Name: Proiecte */ ?>

<section class="block block-hero block-content block-actions wrap container">
  <div class="hero">
    <div class="hero-content content row">
      <h1 class="small-offset-1 small-10 medium-offset-0 medium-12 columns">Proiecte</h1>
      <div class="small-offset-1 small-10 medium-6 columns">
        <?php echoFieldValueOrDefault('proiecte_continut'); ?>
      </div>
      <div class="small-offset-1 small-10 columns actions actions-project">
        <a href="https://sebastiangabor1.typeform.com/to/fDNLY4" class="button large underline" target="_blank">Propune un proiect</a>
        <a href="/implica-te/" class="button large underline">Vrei să te implici?</a>
      </div>
      <div class="small-12"></div>
    </div>
  </div>
</section>

<section class="block block-content wrap container">
  <div class="content row">
    <div class="small-offset-1 small-10 columns actions actions-project">
      <?php
        $filters    = getCategoryActiveFilters();
        $columnClass  = "small-12 medium-" . (12 / count($filters));
        foreach ($filters as $filter) {
          $class  = $filter->slug . '-class';
          $cbID   = $filter->slug . '-cb';
        ?>

        <div class="form-item small-12 medium-6 large-4 columns">
          <input type="checkbox" class="project-filter-cb checkbox" checked="checked" id="<?php echo $cbID; ?>" data-category = "<?php echo $filter->slug; ?>" style="display: none;">
          <label for="<?php echo $cbID; ?>" class="<?php echo $class; ?> filter-button filter-checkbox ">
            <span class="custom checkbox">
              <i class="material-icons checked">&#xE834;</i>
              <i class="material-icons">&#xE835;</i>
            </span>
            <?php  echo $filter->name; ?>
          </label>
        </div>
        <?php
        }
      ?>
    </div>
    <?php
      $args = array(
        'post_type'      => 'proiect',
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC'
      );

      $query = new WP_Query($args);

      if($query->have_posts()) {
        $defaultProjectPic   = esc_url(get_template_directory_uri()) . "/assets/images/default-project.png";
              ?>
        <div class="small-offset-1 small-10 columns project-list">
          <?php
            $index = 0;

            while($query->have_posts()) {
                $query->the_post();

                $thumb_url      = "";
                $category       = get_the_category()[0];
                $titluCF        = get_post_meta($post->ID, 'titlu',true);
                $organizatieCF  = get_post_meta($post->ID, 'organizatie',true);

                $titlu       = $titluCF !== NULL && $titluCF !== ""  ? $titluCF : get_the_title();
                $organizatie = $organizatieCF !== NULL ? $organizatieCF : "";

                $content  = $titlu  . " // " . $organizatie;
                $class    = $category->slug . '-card' . ' ' . $category->slug . '-class';

                if (has_post_thumbnail()) {
                    $thumb_id  = get_post_thumbnail_id();
                    $thumb_url = wp_get_attachment_image_src($thumb_id, "full")[0];
                } else {
                  $thumb_url = $defaultProjectPic;
                }

                ?>
                <div class="small-6 large-4 columns">
                  <a href="<?php the_permalink(); ?>" class="project project-card card <?php echo $class; ?>" data-category="<?php echo $category->slug; ?>">
                    <div class="<?php echo $class; ?> badge"></div>
                    <img src="<?php echo $thumb_url; ?>">
                    <h2><?php echo $titlu; ?></h2>
                    <span class="project-org"><?php echo $organizatie; ?></span>
                  </a>
                </div>
                <?php

                $index++;
            }

          ?>
        </div>
    <?php } ?>
    <div class="small-12 columns"></div>
  </div>
</section>
