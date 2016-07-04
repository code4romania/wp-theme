<?php /* Template Name: Acasa */?>

  <div>
    <div>
        <div>
          <div>
            <h1><?php echoFieldValueOrDefault('intro_titlu'); ?></h1>
          </div>
        </div>
        <div>
          <div >
            <h2><?php echoFieldValueOrDefault('intro_subtitlu'); ?></h2>
          </div>
        </div>
        <div>
          <div>
            <?php echoFieldValueOrDefault('intro_continut'); ?>
          </div>
        </div>
        <div>
          <div>
            <a href="<?php echoFieldValueOrDefault('intro_button_link'); ?>">
              <span><?php echoFieldValueOrDefault('intro_button_text'); ?></span>
            </a>
          </div>
        </div>
    </div>
  </div>
    <div>
      <div>
        <h2><?php echoFieldValueOrDefault('proiecte_titlu'); ?></h2>
      </div>
    </div>
    <div>
      <div>
        <a href = "<?php echoFieldValueOrDefault('proiecte_link'); ?>">
          <?php echoFieldValueOrDefault('proiecte_link_text'); ?>
        </a>
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

      if($query->have_posts()) {
              ?>
        <div>
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
                }

                ?>
                <div>
                  <div class="<?php echo $class; ?>" data-category = "<?php echo $category->slug; ?>">
                    <a href="<?php the_permalink(); ?>">
                  <div>
                      <img src="<?php echo $thumb_url;?>">
                  </div>
                  <div>
                      <p><?php echo $content;?></p>
                  </div>
                </a>
              </div>
            </div>
            <?php } ?>
      </div>
    <?php

    wp_reset_query();

  } ?>



    <div>
      <div>
        <h2><?php echoFieldValueOrDefault('implica-te_titlu'); ?></h2>
      </div>
    </div>
    <div>
      <div>
        <?php echoFieldValueOrDefault('implica-te_continut'); ?>
      </div>
    </div>

    <?php
        if(get_field('implica-te_entitati')) { ?>
          <div>
            <div>
              <ul>
                <?php
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
                    <li>
                      <img src="<?php echo $poza;?>">
                      <p><?php echo $titlu;?></p>
                      <p><?php echo $descriere;?></p>
                    </li>

                  <?php } ?>
              </ul>
            </div>
          </div>
          <?php }?>








<!--
<section class="block block-hero wrap container">
  <div class="hero">
    <div class="hero-content-wrap">
      <div class="hero-content">
        <div class="content row">
          <div class="small-12 columns block-title">
            <h1>Salut, noi suntem<br/> <span class="mono">Code for Romania</span>.</h1>
            <p>Ca să-ți placă mai mult România, vino alături de noi. Suntem o <a href="#">comunitate de oameni</a> care dezvoltă <a href="#">soluții IT</a> ce rezolvă probleme sociale. Pe termen lung, credem ca putem ajuta pe fiecare dintre noi sa fie mai informat si mai implicat.</p>
            <p class="actions">
              <a href="#" class="button hollow">Află mai multe despre noi</a>
              <span>sau</span>
              <a href="#" class="button hollow">Vezi proiectele</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-media">
      <div class="image-wrap image-wrap-landscape">
        <img src="<?php //bloginfo('template_url'); ?>/dist/images/hero.jpg">
      </div>
    </div>
  </div>
</section>

<section class="block wrap container">
  <div class="content row">
    <div class="small-12 columns">
      <div class="block-title">
        <h1>Proiectele noastre</h1>
        <p>Ca să-ți placă mai mult România, vino alături de noi. Suntem o ce rezolvă probleme sociale. Pe termen lung, credem ca putem.</p>
        <p class="actions">
          <a href="#" class="button hollow">Implică-te într-un proiect</a>
        </p>
      </div>
    </div>
  </div>
  <div class="content row">
    <div class="small-12 medium-3 columns">
      <a href="#" title="Nume proiect">
        <h2>Nume mic</h2>
      </a>
    </div>
    <div class="small-12 medium-3 columns">
      <a href="#" title="Nume proiect">
        <h2>Nume proiect maricel</h2>
      </a>
    </div>
    <div class="small-12 medium-3 columns">
      <a href="#" title="Nume proiect">
        <h2>Nume proiect foarte foarte ultra lung</h2>
      </a>
    </div>
    <div class="small-12 medium-3 columns">
      <a href="#" title="Nume proiect">
        <h2>Nume proiect</h2>
      </a>
    </div>
  </div>
</section>

<section class="block wrap container">
  <div class="content row">
    <div class="small-12 columns">
      <div class="block-title">
        <h1>Implică-te</h1>
        <p>Ca să-ți placă mai mult România, vino alături de noi. Suntem o ce rezolvă probleme sociale. Pe termen lung, credem ca putem.</p>
      </div>
    </div>
  </div>
  <div class="content row">
    <a href="#" class="activity small-6 large-3 columns">
      <i class="material-icons">&#xEB3F;</i>
      <h2><span>Pentru</span> Companii</h2>
      <p>Este diferită de un articol deoarece va rămâne în același loc</p>
    </a>
    <a href="#" class="activity small-6 large-3 columns">
      <i class="material-icons">&#xE84F;</i>
      <h2><span>Pentru</span> Instituții</h2>
      <p>Este diferită de un articol deoarece va rămâne în același loc</p>
    </a>
    <a href="#" class="activity small-6 large-3 columns">
      <i class="material-icons">&#xE7EF;</i>
      <h2><span>Pentru</span> ONG-uri</h2>
      <p>Este diferită de un articol deoarece va rămâne în același loc</p>
    </a>
    <a href="#" class="activity small-6 large-3 columns">
      <i class="material-icons">&#xE54B;</i>
      <h2><span>Pentru</span> Universități</h2>
      <p>Este diferită de un articol deoarece va rămâne în același loc</p>
    </a>
  </div>
</section>

-->
