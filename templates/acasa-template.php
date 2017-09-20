<?php /* Template Name: Acasa */?>

<section class="block block-hello container">
  <div class="hero">
    <div class="hero-content content row">
      <div class="small-offset-1 small-10 medium-offset-0 medium-7 columns">
        <h1 class="title">
          <?php the_field('mission_titlu_part_1'); ?><br/>
          <?php the_field('mission_titlu_part_2'); ?>
        </h1>
        <?php  the_field('mission_content_body');?>
      </div>
      <div class="small-12 columns actions">
        <a href="<?php
          the_field('mission_link_url_1');?>" class="button large underline">
          <?php the_field('mission_link_label_1'); ?>
        </a>
        <span class="spacer"><?php the_field('mission_separator'); ?></span>
        <a href="<?php the_field('mission_link_url_2'); ?>" class="button large underline">
          <?php the_field('mission_link_label_2'); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="block block-inverted container">
  <div class="hero">
    <div class="hero-content content row">
      <div class="small-12 columns">
        <h1 class="title"><?php the_field('what_we_work_title'); ?></h1>
      </div>
      <div class="small-offset-1 small-10 medium-offset-6 medium-6 columns hero-description">
        <?php the_field('what_we_work_content'); ?>
      </div>
      <div class="small-12 medium-offset-6 medium-6 columns actions">
        <a href="<?php the_field('what_we_work_link_url'); ?>" class="button large underline inverted">
          <?php the_field('what_we_work_link_label'); ?>
        </a>
      </div>
      <?php
        $args = array(
          'post_type'       => 'proiect',
          'post_status'     => 'publish',
          'orderby'         => 'date',
          'posts_per_page'  => 4
        );

        $query = new WP_Query($args);

        if($query->have_posts()) { ?>

        <div class="small-12 columns project-list" data-equalizer data-equalize-on="small" data-equalize-on-stack="false" data-equalize-by-row="true">
          <?php
            while($query->have_posts()) {
              $query->the_post();

              $thumb_url      = "";
              $defaultProjectPic   = esc_url(get_template_directory_uri()) . "/assets/images/default-project.png";
              $category       = get_the_category()[0];
              $titluCF        = get_post_meta($post->ID, 'titlu',true);
              $organizatieCF  = get_post_meta($post->ID, 'organizatie',true);

              $titlu     = $titluCF !== NULL && $titluCF !== ""  ? $titluCF : get_the_title();
              $organizatie = $organizatieCF !== NULL ? $organizatieCF : "";

              $content  = $titlu  . " // " . $organizatie;
              $class  = $category->slug . '-card' . ' ' . $category->slug . '-class';

              if (has_post_thumbnail()) {
                $thumb_id  = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id, "full")[0];
                } else {
                $thumb_url = $defaultProjectPic;
              } ?>

              <div class="small-6 large-3 columns" data-equalizer-watch>
                <a href="<?php the_permalink(); ?>" title="Nume proiect" class="project" data-category="<?php echo $category->slug; ?>">
                  <img src="<?php echo $thumb_url;?>">
                  <h2><?php echo $titlu;?></h2>
                  <span class="project-org"><?php echo $organizatie;?></span>
                </a>
              </div>

          <?php } ?>

        </div>
      <?php wp_reset_query(); } ?>
    </div>
    <div class="hero-media">
      <div class="image-wrap image-wrap-landscape">
        <!-- TODO: change with other visual -->
        <!-- <img src="<?php bloginfo('template_url'); ?>/dist/images/hero-proiecte.jpg"> -->
      </div>
    </div>
  </div>
</section>

<section class="block block-activity container">
  <div class="hero">
    <div class="hero-content content row">
      <div class="small-offset-1 small-10 medium-offset-0 medium-12 columns">
        <h1 class="title"><?php the_field('implica-te_titlu'); ?></h1>
      </div>
      <div class="small-offset-1 small-10 medium-7 large-4 columns">
        <?php the_field('implica-te_continut'); ?>
        <div class="row activities">
          <?php
            $entities = get_field('implica-te_entitati');

            $defaultEntityPic = esc_url(get_template_directory_uri()) . "/assets/images/default-entity-pic.png";

            foreach ($entities as $entity) {
              $titlu     = repeaterFieldValueOrDefault("implica_titlu", $entity);
              $descriere = repeaterFieldValueOrDefault("implica_descriere", $entity);
              $icon      = repeaterFieldValueOrDefault("implica_icon", $entity);

              $html = "<div class='small-12 medium-6 columns'>" .
                        "<a href='/implica-te/#" . $icon . "' class='activity activity-visual'>" .
                          "<h2>" .
                            "<i class='svg-icons svg-" . $icon ."'></i>" .
                            "<span>" . $titlu . "</span>" .
                            "<i class='fa fa-angle-right' aria-hidden='true'></i>" .
                          "</h2>" .
                          "<p>" . $descriere . "</p>" .
                        "</a>" .
                      "</div>";


              echo $html;

            }

          ?>
        </div>
      </div>
      <div class="small-12 columns"></div>
    </div>
  </div>
</section>

