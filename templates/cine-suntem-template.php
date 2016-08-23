<?php /* Template Name: Cine suntem */ ?>

<section class="block block-hero block-content wrap container">
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

<section class="block block-hero block-content wrap container">
  <div class="hero">
    <div class="hero-content content row">
      <h1 class="small-offset-1 small-10 medium-offset-0 medium-12 columns">
        <?php echoFieldValueOrDefault('echipa_titlu'); ?>
      </h1>
      <div class="small-offset-1 small-10 medium-offset-4 medium-7 large-offset-5 large-6 columns">
        <?php echoFieldValueOrDefault('echipa_continut'); ?>
      </div>
      <div class="small-offset-1 small-10 medium-8 columns">
        <div class="members row" data-equalizer data-equalize-on="small" id="test-eq">
          <?php
            $membri             = get_field('membri');
            $defaultMemberPic   = esc_url(get_template_directory_uri()) . "/assets/images/default-member-pic.png";
            $columnsNumber      = ceil(count($membri) / 4) * 4;

            for($index = 0; $index < $columnsNumber; $index++) {

              if($index < count($membri)) {

                $membru     = $membri[$index];
                $nume       = repeaterFieldValueOrDefault("nume", $membru);
                $descriere  = repeaterFieldValueOrDefault("descriere", $membru);
                $poza       = repeaterFieldValueOrDefault("poza", $membru);

                if($poza === null || $poza === "") {
                  $poza = $defaultMemberPic;
                } ?>

                  <div class="small-6 columns" data-equalizer-watch>
                    <div class="member media-object">
                      <div class="media-object-section">
                        <img src="<?php echo $poza; ?>" alt="<?php echo $nume; ?>">
                      </div>
                      <div class="media-object-section">
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
      <div class="small-12 columns"></div>
    </div>
  </div>
</section>
