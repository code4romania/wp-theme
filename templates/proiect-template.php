<section class="block block-hero block-content block-project wrap container">
  <div class="hero">
    <div class="hero-content content row">
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

      <div class="small-12 large-offset-1 large-10 columns">
        <div class="hero-project media-object">
          <div class="media-object-section middle">
            <img src="<?php echo $thumb_url; ?>" alt="<?php echo $titlu; ?>">
          </div>
          <div class="media-object-section">
            <h1><?php echo $titlu; ?></h1>
            <p class="project-owner"><?php echo $organizatie; ?></p>
            <div class="project-desc">
              <?php the_content(); ?>
            </div>
            <div class="actions actions-project">
              <a href="<?php echo $actiunePrimaraLink; ?>" class="button large underline inverted" target="_blank"><?php echo $actiunePrimaraText; ?></a>
              <a href="<?php echo $actiuneSecundaraLink; ?>" class="button large underline inverted"><?php echo $actiuneSecundaraText; ?></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="block block-content block-details wrap container">
  <div class="content row">
    <div class="small-12 columns">
      <div class="ui-help">
        <i class="material-icons">&#xE5CB;</i>
        <i class="material-icons">&#xE925;</i>
        <i class="material-icons">&#xE5CC;</i>
      </div>
      <div class="table-scroll">
        <table class="progress-wrap">
          <tr class="progress">
            <td class="progress-step step-past">
              <strong class="progress-no">1</strong>
              <span class="progress-state">Definirea proiectului</span>
            </td>
            <td class="progress-step step-past">
              <strong class="progress-no">2</strong>
              <span class="progress-state">Evaluare</span>
            </td>
            <td class="progress-step step-past">
              <strong class="progress-no">3</strong>
              <span class="progress-state">Redactarea specificațiilor</span>
            </td>
            <td class="progress-step step-past">
              <strong class="progress-no">4</strong>
              <span class="progress-state">Publicarea proiectului</span>
            </td>
            <td class="progress-step step-past">
              <strong class="progress-no">5</strong>
              <span class="progress-state">Formarea echipei</span>
            </td>
            <td class="progress-step step-active">
              <strong class="progress-no">6</strong>
              <span class="progress-state">Arhitectură</span>
            </td>
            <td class="progress-step">
              <strong class="progress-no">7</strong>
              <span class="progress-state">Dezvoltare</span>
            </td>
            <td class="progress-step">
              <strong class="progress-no">8</strong>
              <span class="progress-state">Lansare și promovare</span>
            </td>
            <td class="progress-step">
              <strong class="progress-no">9</strong>
              <span class="progress-state">Monitorizare</span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</section>


<?php echo $class; ?>
<?php if($substadiu != "") { ?>
  <?php echo $substadiu; ?>
<?php } ?>

  <?php
    $membri         = get_field('membri_echipa', $post->ID);
    $columnsNumber  = ceil(count($membri) / 3) * 3;

    for($index = 0; $index < $columnsNumber; $index++) {
      if($index < count($membri)) {

        $membru = $membri[$index];
        $poza   = repeaterFieldValueOrDefault("poza", $membru);

        if($poza === null || $poza === "") {
          $poza   = esc_url(get_template_directory_uri()) . "/assets/images/default-member-pic.png";
        }
  ?>

        <img src="<?php echo $poza; ?>">
        <?php echoRepeaterFieldValueOrDefault("initiala", $membru); ?>
        <?php echoRepeaterFieldValueOrDefault("nume", $membru); ?>

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
