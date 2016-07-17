

<section class="block wrap container">
  <div class="content row">
    <div class="small-12 columns">
      <?php while (have_posts()) : the_post(); ?>


  <?php
    $thumb_url      = "";
    $defaultProjectPic   = esc_url(get_template_directory_uri()) . "/assets/images/default-project.png";
    $category       = get_the_category()[0];
    $class          = $category->slug . '-class';
    $titluCF        = get_post_meta($post->ID, 'titlu',true);
    $organizatieCF  = get_post_meta($post->ID, 'organizatie',true);
    $durataCF       = get_post_meta($post->ID, 'durata',true);
    $actiunePrimaraTextCF   = get_post_meta($post->ID, 'actiune_primara_text',true);
    $actiunePrimaraLinkCF   = get_post_meta($post->ID, 'actiune_primara_link',true);
    $actiuneSecundaraTextCF = get_post_meta($post->ID, 'actiune_secundara_text',true);
    $actiuneSecundaraLinkCF = get_post_meta($post->ID, 'actiune_secundara_link',true);
    $substadiuCF            = get_post_meta($post->ID, 'substadiu',true);

    $titlu        = $titluCF !== NULL && $titluCF !== ""  ? $titluCF : get_the_title();
    $organizatie  = $organizatieCF !== NULL ? $organizatieCF : "";
    $durata       = $durataCF !== NULL ? $durataCF : "";
    $actiunePrimaraText   = $actiunePrimaraTextCF !== NULL ? $actiunePrimaraTextCF : "";
    $actiunePrimaraLink   = $actiunePrimaraLinkCF !== NULL ? $actiunePrimaraLinkCF : "";
    $actiuneSecundaraText = $actiuneSecundaraTextCF !== NULL ? $actiuneSecundaraTextCF : "";
    $actiuneSecundaraLink = $actiuneSecundaraLinkCF !== NULL ? $actiuneSecundaraLinkCF : "";
    $substadiu    = $substadiuCF !== NULL ? $substadiuCF : "";

    if (has_post_thumbnail()) {
          $thumb_id  = get_post_thumbnail_id();
          $thumb_url = wp_get_attachment_image_src($thumb_id, "full")[0];
    } else {
          $thumb_url = $defaultProjectPic;    
    }
    
    ?>

  <div class = "">
    <div class = "">
      <img src="<?php echo $thumb_url; ?>">
    </div>
    <div class = "">
      <div class = "">
        <div class = "">
          <a id = "" class="" href="<?php echo $actiunePrimaraLink; ?>">
            <span><?php echo $actiunePrimaraText; ?></span>
          </a>
        </div>
      </div>
      <div class = "">
        <div class = "">
          <a id = "" class="" href="<?php echo $actiuneSecundaraLink; ?>">
            <span><?php echo $actiuneSecundaraText; ?></span>
          </a>
        </div>
      </div>
      <div class = "">
        <div class = "">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>



  <div class = "">
    <div class="">
          <div class="<?php echo $class; ?>">
            <div class="">
              <p><?php echo $titlu; ?></p>
            </div>
          </div>
    </div>
    <div class="">
          <div class="<?php echo $class; ?>">
            <div class="">
            </div>
            <div class="">
              <p><?php echo $organizatie; ?></p>
            </div>
          </div>
    </div>
    <div class="">
          <div class="<?php echo $class; ?>">
            <div class="">
            </div>
            <div class="">
              <p><?php echo $durata; ?></p>
            </div>
          </div>
    </div>
  </div>

  <?php

    if($substadiu != "") { ?>
      <p>BARA PROGRES:</p>
      <p>
        <?php echo $substadiu; ?>
      </p>

  <?php

    }

  ?>

  <div class = "">
    <div class = "">
      <span class = "<?php echo $class; ?>">ECHIPA</span>
    </div>
  </div>

  <?php
    $membri         = get_field('membri_echipa', $post->ID);
    $columnsNumber  = ceil(count($membri) / 3) * 3;

    for($index = 0; $index < $columnsNumber; $index++) {
      if($index % 3 === 0) {
        ?>
        <div>
        <?php
      }

      if($index < count($membri)) {

        $membru = $membri[$index];
        $poza   = repeaterFieldValueOrDefault("poza", $membru);

        if($poza === null || $poza === "") {
          $poza   = esc_url(get_template_directory_uri()) . "/assets/images/default-member-pic.png";
        }


        ?>

            <div class = "">
              <div class = "">
                <img src="<?php echo $poza; ?>">
                <div class="">
                <span class = "<?php echo $class;?>"><?php echoRepeaterFieldValueOrDefault("initiala", $membru); ?></span>
                <?php echoRepeaterFieldValueOrDefault("nume", $membru); ?>
            </div>
          </div>
            </div>

          <?php
          }
        if($index % 3 === 2) {
        ?>
        </div>
        <?php
      }

    }

  ?>


    <?php
    $voluntari      = get_field('voluntari', $post->ID);

    if($voluntari !== NULL && $voluntari[0] != NULL && array_key_exists('descriere', $voluntari[0]))
    {

      $columnsNumber  = ceil(count($voluntari) / 3) * 3;

      for($index = 0; $index < $columnsNumber; $index++) {
        if($index % 3 === 0) {
          ?>
          <div>
          <?php
        }

        if($index < count($voluntari)) {

          $voluntar = $voluntari[$index];
          $poza   = repeaterFieldValueOrDefault("poza", $voluntar);

          if($poza === null || $poza === "") {
            $poza   = esc_url(get_template_directory_uri()) . "/assets/images/default-member-pic.png";
          }


          ?>

              <div class = "">
                <div class = "">
                  <img src="<?php echo $poza; ?>">
                  <div class="">
                    <?php echoRepeaterFieldValueOrDefault("descriere", $voluntar); ?>
                  </div>
            </div>
              </div>

            <?php
            }
          if($index % 3 === 2) {
          ?>
          </div>
          <?php
        }

      }
    }

  ?>

    <div class = "">
      <div class = "">
        <span class = "<?php echo $class; ?>">PARTENERI</span>
      </div>
    </div>

  <?php
    $parteneri      = get_field('parteneri', $post->ID);
    $columnsNumber  = ceil(count($parteneri) / 2) * 2;

    for($index = 0; $index < $columnsNumber; $index++) {
      if($index % 2 === 0) {
        ?>
        <div class = "">
        <?php
      }

      if($index < count($parteneri)) {

        $partener = $parteneri[$index];
        $poza     = repeaterFieldValueOrDefault("poza", $partener);

            ?>
        <div class="">
              <div class="<?php echo $class; ?>">
                <div class="">

                </div>
                <div class="">
                  <p><?php echoRepeaterFieldValueOrDefault("nume", $partener); ?></p>
                </div>
              </div>
        </div>
          <?php
          }
      if($index % 2 === 1) {
        ?>
        </div>
        <?php
      }

    }

  ?>


      <?php endwhile; ?>

    </div>
  </div>
</section>
