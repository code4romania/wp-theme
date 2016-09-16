<?php /* Template Name: Cine suntem */ ?>

<section class="block block-hero block-inverted block-content block-text wrap container">
  <div class="hero">
    <div class="hero-content content row">
      <h1 class="small-offset-1 small-10 medium-offset-0 medium-12 columns">
        <?php echoFieldValueOrDefault('cine_suntem_titlu'); ?>
      </h1>
      <div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">
        <?php echoFieldValueOrDefault('cine_suntem_continut'); ?>
      </div>
    </div>
  </div>
</section>

<section class="block block-hero block-content block-team wrap container">
  <div class="hero">
    <div class="hero-content content row">
      <div class="small-offset-1 small-10 medium-offset-4 medium-7 large-offset-5 large-6 columns">
        <h1><?php echoFieldValueOrDefault('echipa_titlu'); ?></h1>
        <h2 class="title-team">Core team</h2>
      </div>
      <div class="small-offset-1 small-10 columns">
        <div class="members row" data-equalizer data-equalize-on="small" data-equalize-on-stack="false" data-equalize-by-row="true" id="members-eq">
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

      <div class="small-offset-1 small-10 medium-offset-4 medium-7 large-offset-5 large-6 columns">
        <h2 class="title-team"><?php echoFieldValueOrDefault('colaboratori_titlu'); ?></h2>
        <?php echoFieldValueOrDefault('colaboratori_continut'); ?>
      </div>

      <div class="small-offset-1 small-10 columns">
        <div class="members row" data-equalizer data-equalize-on="small" data-equalize-on-stack="false" data-equalize-by-row="true" id="volunteers-eq">
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

                  <div class="small-6 large-4 columns" data-equalizer-watch>
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
      <div class="small-offset-1 small-10 medium-offset-4 medium-7 large-offset-5 large-6 action-line columns">
        <a href="https://sebastiangabor1.typeform.com/to/fDNLY4" class="button large underline" target="_blank">Hai cu noi!</a>
      </div>
      <div class="small-12 columns"></div>
    </div>
  </div>
</section>
