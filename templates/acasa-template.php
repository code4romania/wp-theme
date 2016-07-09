<?php /* Template Name: Acasa */?>

<section class="block block-hero wrap container">
  <div class="hero">
    <div class="hero-content-wrap">
      <div class="hero-content">
        <div class="content row">
          <div class="small-12 columns block-title">
            <h1>
              <?php echoFieldValueOrDefault('intro_titlu'); ?><br/>
              <?php echoFieldValueOrDefault('intro_subtitlu'); ?>
            </h1>
            <div class="block-content">
              <?php echoFieldValueOrDefault('intro_continut'); ?>
              <p class="actions">
                <a href="<?php echoFieldValueOrDefault('intro_button_link'); ?>" class="button hollow">
                  <?php echoFieldValueOrDefault('intro_button_text'); ?>
                </a>
                <span>sau</span>
                <a href="#" class="button hollow">Vezi proiectele</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="hero-media">
      <div class="image-wrap image-wrap-landscape">
        <img src="<?php bloginfo('template_url'); ?>/dist/images/hero.jpg">
      </div>
    </div>
  </div>
</section>

<section class="block wrap container">
  <div class="content row">
    <div class="small-12 columns">
      <div class="block-title">
        <h1><?php echoFieldValueOrDefault('proiecte_titlu'); ?></h1>
        <p>Ca să-ți placă mai mult România, vino alături de noi. Suntem o ce rezolvă probleme sociale. Pe termen lung, credem ca putem.</p>
        <p class="actions">
          <a href="<?php echoFieldValueOrDefault('proiecte_link'); ?>" class="button hollow">
            <?php echoFieldValueOrDefault('proiecte_link_text'); ?>
          </a>
        </p>
      </div>
    </div>
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

      <div class="content row project-list">
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
                <span class="mono"><?php echo $organizatie;?></span>
              </a>
            </div>

        <?php } ?>

      </div>
  <?php wp_reset_query(); } ?>
</section>

<section class="block wrap container">
  <div class="content row">
    <div class="small-12 columns">
      <div class="block-title">
        <h1><?php echoFieldValueOrDefault('implica-te_titlu'); ?></h1>
        <?php echoFieldValueOrDefault('implica-te_continut'); ?>
      </div>
    </div>
  </div>
  <div class="content row">
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
        <a href="#" class="activity small-6 large-3 columns">
          <i class="material-icons">&#xE54B;</i>
          <h2><span><?php echo $titlu;?></h2>
          <p><?php echo $descriere;?></p>
        </a>

      <?php  }
    } ?>
  </div>
</section>


