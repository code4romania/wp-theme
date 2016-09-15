<?php /* Template Name: Acasa */?>

<section class="block block-hero block-hello wrap container">
  <div class="hero">
    <div class="hero-content content row">
      <div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">
        <h1>
          <?php echoFieldValueOrDefault('intro_titlu'); ?><br/>
          <?php echoFieldValueOrDefault('intro_subtitlu'); ?>
        </h1>
        <?php echoFieldValueOrDefault('intro_continut'); ?>
      </div>
      <div class="small-12 columns actions">
        <a href="<?php echoFieldValueOrDefault('afla_cine_suntem_link'); ?>" class="button large underline">
          <?php echoFieldValueOrDefault('afla_cine_suntem_text'); ?>
        </a>
        <span class="spacer">sau</span>
        <a href="<?php echoFieldValueOrDefault('vezi_proiectele_link'); ?>" class="button large underline">
          <?php echoFieldValueOrDefault('vezi_proiectele_text'); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="block block-hero block-inverted wrap container">
  <div class="hero">
    <div class="hero-content content row">
      <h1 class="small-12 columns"><?php echoFieldValueOrDefault('proiecte_titlu'); ?></h1>
      <div class="small-offset-1 small-10 medium-offset-6 medium-6 columns">
        <p>Ca să-ți placă mai mult România, vino alături de noi. Suntem o ce rezolvă probleme sociale. Pe termen lung, credem ca putem.</p>
      </div>
      <div class="small-12 medium-offset-6 medium-6 columns actions">
        <a href="<?php echoFieldValueOrDefault('proiecte_link'); ?>" class="button large underline inverted">
          <?php echoFieldValueOrDefault('proiecte_link_text'); ?>
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

          <div class="small-12 columns project-list">
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

                <div class="small-6 large-3 columns">
                  <a href="<?php the_permalink(); ?>" title="Nume proiect" class="project" data-category="<?php echo $category->slug; ?>">
                    <div class="<?php echo $class; ?> badge"></div>
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
        <img src="<?php bloginfo('template_url'); ?>/dist/images/hero-proiecte.jpg">
      </div>
    </div>
  </div>
</section>

<section class="block block-hero block-activity wrap container">
  <div class="hero">
    <div class="hero-content content row">
      <h1 class="small-offset-1 small-10 medium-offset-0 medium-12 columns">
        <?php echoFieldValueOrDefault('implica-te_titlu'); ?>
      </h1>
      <div class="small-offset-1 small-10 medium-7 large-4 columns">
        <?php echoFieldValueOrDefault('implica-te_continut'); ?>
        <div class="row activities">
          <?php

          if(get_field('implica-te_entitati')) {
            $entities         = get_field('implica-te_entitati');
            $defaultEntityPic = esc_url(get_template_directory_uri()) . "/assets/images/default-entity-pic.png";

            foreach ($entities as $entity) {
              $titlu     = repeaterFieldValueOrDefault("titlu", $entity);
              $descriere = repeaterFieldValueOrDefault("descriere", $entity);
              $poza      = repeaterFieldValueOrDefault("poza", $entity);
              if($poza === null || $poza === "") {
                $poza = $defaultEntityPic;
              }

              ?>
              <div class="small-12 medium-6 columns">
                <a href="/implica-te/" class="activity activity-visual">
                  <h2>
                    <i class="svg-icons"></i>
                    <span><?php echo $titlu;?></span>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                  </h2>
                  <p><?php echo $descriere;?></p>
                </a>
              </div>

            <?php  }
          } ?>
        </div>
      </div>
      <div class="small-12 columns"></div>
    </div>
    <div class="hero-media">
      <div class="image-wrap image-wrap-landscape">
        <img src="<?php bloginfo('template_url'); ?>/dist/images/hero-implica-te.jpg">
      </div>
    </div>
  </div>
</section>

