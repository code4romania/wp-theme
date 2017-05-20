<?php /* Template Name: Cine suntem */ ?>

<section class="block block-content block-text block-identity wrap container">
  <div class="hero">
    <div class="hero-content content row">
      <h1 class="small-offset-1 small-10 medium-offset-0 medium-12 columns">
        <?php the_title(); ?>
      </h1>
      <div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">

        <div class="purpose-intro">
          <?php the_field('cine_suntem_continut'); ?>
        </div>

        <div class="purpose row"  data-equalizer data-equalize-on="small" data-equalize-on-stack="false" data-equalize-by-row="true" >
          <?php
            $activitati = get_field('cine_suntem_activitati');
            $columnsNumber = ceil(count($activitati) / 4) * 4;

            for($index = 0; $index < $columnsNumber; $index++) {

              if($index < count($activitati)) {

                $activitate     = $activitati[$index];
                $icon       = repeaterFieldValueOrDefault("icon_activitate", $activitate);
                $text       = repeaterFieldValueOrDefault("text_activitate", $activitate);

                ?>

                <div class="small-6 medium-3 columns" data-equalizer-watch>
                  <div class="scope">
                    <i class="fa fa-<?php echo $icon; ?>" aria-hidden="true"></i>
                    <h3><?php echo $text; ?></h3>
                  </div>
                </div>

          <?php
              }
            }
          ?>

        </div>

      </div>
    </div>
  </div>
</section>

<section class="block block-hero block-content block-team wrap container">
  <div class="hero">
    <div class="hero-content content row">
      <div class="small-offset-1 small-10 medium-offset-3 medium-6 columns team-top">
        <h1><?php the_field('echipa_titlu'); ?></h1>
        <h2>Core team</h2>
      </div>
      <div class="small-offset-1 small-10 columns">
        <div class="members row" data-equalizer data-equalize-on="small" data-equalize-on-stack="false" data-equalize-by-row="false" id="members-eq">
          <?php
            $membri             = get_field('membri');
            $defaultMemberPic = 'http://www.fillmurray.com/400/400';
            // $defaultMemberPic   = esc_url(get_template_directory_uri()) . "/assets/images/default-member-pic.png";
            $columnsNumber      = ceil(count($membri) / 4) * 4;

            for($index = 0; $index < $columnsNumber; $index++) {

              if($index < count($membri)) {

                $membru     = $membri[$index];
                $nume       = repeaterFieldValueOrDefault("nume", $membru);
                $descriere  = repeaterFieldValueOrDefault("descriere", $membru);
                $poza       = repeaterFieldValueOrDefault("poza", $membru);
                $icon       = repeaterFieldValueOrDefault("icon", $membru);
                $social       = repeaterFieldValueOrDefault("social", $membru);

                if($poza === null || $poza === "") {
                  $poza = $defaultMemberPic;
                } ?>

                  <div class="small-6 large-4 columns" data-equalizer-watch>
                    <div class="member media-object">
                      <div class="media-object-section">
                        <img src="<?php echo $poza; ?>" alt="<?php echo $nume; ?>">
                        <a href="<?php echo $social; ?>" target="_blank" class="member-social">
                          <?php echo $icon; ?>
                        </a>
                      </div>
                      <div class="media-object-section middle">
                        <h3><?php echo $nume; ?></h3>
                        <p><?php echo $descriere; ?></p>
                      </div>
                    </div>
                  </div>

          <?php
              }
            }
          ?>
        </div>

      </div>

      <div class="small-offset-1 small-10 medium-offset-3 medium-6 columns team-top">
        <h2><?php the_field('colaboratori_titlu'); ?></h2>
        <?php the_field('colaboratori_continut'); ?>

        <a href="<?php the_field('colaboratori_button_link'); ?>" class="button large underline" target="_blank"><?php the_field('colaboratori_button_label'); ?></a>
      </div>

      <div class="small-offset-1 small-10 columns">
        <div class="members members-all row" id="volunteers-eq">
          <?php
            $colaboratori = get_field('colaboratori');
            $defaultMemberPic = 'http://www.fillmurray.com/400/400';
            // $defaultMemberPic   = esc_url(get_template_directory_uri()) . "/assets/images/default-member-pic.png";

            $columnsNumber      = ceil(count($colaboratori) / 4) * 4;

            for($index = 0; $index < $columnsNumber; $index++) {

              if($index < count($colaboratori)) {

                $colaborator     = $colaboratori[$index];
                $nume       = repeaterFieldValueOrDefault("nume", $colaborator);
                $poza       = repeaterFieldValueOrDefault("poza", $colaborator);

                if($poza === null || $poza === "") {
                  $poza = $defaultMemberPic;
                } ?>

                  <div class="small-6 large-4 columns">
                    <div class="member member-small media-object">
                      <div class="media-object-section">
                        <img src="<?php echo $poza; ?>" alt="<?php echo $nume; ?>">
                      </div>
                      <div class="media-object-section middle">
                        <h3><?php echo $nume; ?></h3>
                      </div>
                    </div>
                  </div>
          <?php
              }
            }
          ?>

        </div>
      </div>
      <div class="small-offset-1 small-10 columns team-top press">
        <h2><?php echo the_field('presa_titlu_h2'); ?></h2>
        <div class="partners press">
          <ul class="list-images row">
            <?php
              $presa = get_field('presa_articole');
              $defaultMemberPic = 'http://www.fillmurray.com/400/400';
              // $defaultMemberPic   = esc_url(get_template_directory_uri()) . "/assets/images/default-member-pic.png";

              $columnsNumber = count($presa);

              for($index = 0; $index < $columnsNumber; $index++) {

                if($index < count($presa)) {

                  $articol     = $presa[$index];
                  $nume       = repeaterFieldValueOrDefault("articole_presa_titlu", $articol);
                  $logo       = repeaterFieldValueOrDefault("articole_presa_logo", $articol);
                  $link       = repeaterFieldValueOrDefault("articole_presa_link", $articol);

                  if($logo === null || $logo === "") {
                    $logo = $defaultMemberPic;
                  } ?>

                    <li class="small-4 medium-3 large-2 columns">
                      <a href="<?php echo $link; ?>" class="partner" target="_blank" title="<?php echo $nume; ?>">
                        <img src="<?php echo $logo; ?>" alt="">
                      </a>
                    </li>
            <?php
                }
              }
            ?>
          </ul>
        </div>
      </div>
      <div class="small-offset-1 small-10 columns action-line">
        <p class="donate-action">
          <span><?php echo the_field('propozitie_part_1'); ?></span> <a href="/doneaza/" class="button large underline button-donate"><?php echo the_field('propozitie_cta_label'); ?></a><span> <?php echo the_field('propozitie_part_2'); ?></span>
        </p>
      </div>
      <div class="small-12 columns"></div>
    </div>
  </div>
</section>
