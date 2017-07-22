<?php /* Template Name: Proiecte */ ?>


<section class="block block-hero block-content block-actions wrap container">
  <div class="hero">
    <div class="hero-content content row">
      <h1 class="small-offset-1 small-10 medium-offset-0 medium-12 columns"><?php echo the_title(); ?></h1>
      <div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">
        <?php the_field('proiecte_hero'); ?>
      </div>
      <div class="small-offset-1 small-10 columns actions actions-project">

        <a href="<?php the_field('actiune_primara_link'); ?>" class="button large underline" target="<?php the_field('open_in_new_window_first'); ?>"><?php the_field('actiune_primara_text'); ?></a>
        <a href="<?php the_field('actiune_secundara_link'); ?>" class="button large underline" target="<?php the_field('open_in_new_window_second'); ?>"><?php the_field('actiune_secundara_text'); ?></a>

      </div>
      <div class="small-12"></div>
    </div>
  </div>
</section>

<section class="block block-content wrap container">
  <div class="content row">

    <?php
      $project_categories = get_categories();
      $terms = array(1 => 7, 2 => 6, 3 => 17);

      foreach ($project_categories as $category) {
          if ($category->term_id !== 1) {
            echo '<h2 class="small-offset-1 small-10 columns project-type ' . $category->slug . '-card' . ' ' . $category->slug . '-class' .'">' . $category->name . '</h2>';

            $args = array(
              'post_type'      => 'proiect',
              'post_status'    => 'publish',
              'category_name'  => $category->slug,
              'orderby'        => 'date',
              'order'          => 'DESC'
            );

            $query = new WP_Query($args);

            if($query->have_posts()) {
              $defaultProjectPic   = esc_url(get_template_directory_uri()) . "/assets/images/default-project.png";

              echo '<div class="small-offset-1 small-10 columns project-list" data-equalizer data-equalize-on="small" data-equalize-on-stack="false" data-equalize-by-row="true">';

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

                  if (has_post_thumbnail()) {
                      $thumb_id  = get_post_thumbnail_id();
                      $thumb_url = wp_get_attachment_image_src($thumb_id, "full")[0];
                  } else {
                    $thumb_url = $defaultProjectPic;
                  }

                  ?>
                    <div class="small-6 large-4 columns" data-equalizer-watch>
                      <a href="<?php the_permalink(); ?>" class="project project-card card">
                        <img src="<?php echo $thumb_url; ?>">
                        <h2><?php echo $titlu; ?></h2>
                        <span class="project-org"><?php echo $organizatie; ?></span>
                      </a>
                    </div>
                  <?php

                  $index++;
              }

              echo '</div>';
            }

            wp_reset_query();
          }
      }
    ?>

    <div class="small-offset-1 small-10 columns actions actions-project">
      <p class="donate-action">
        <span><?php the_field('doneaza_string_1'); ?></span> <a href="/doneaza/" class="button large underline button-donate"><?php the_field('doneaza_string_action_label'); ?></a><span> <?php the_field('doneaza_string_2'); ?></span>
      </p>
    </div>
    <div class="small-12 columns"></div>
  </div>
</section>
