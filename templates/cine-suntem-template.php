<?php /* Template Name: Cine suntem */ ?>

<section class="block block-hero block-content block-text wrap container">
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
        <?php echoFieldValueOrDefault('echipa_continut'); ?>
        <h2 class="title-team">Core team</h2>
      </div>
      <div class="small-offset-1 small-10 medium-11 columns">
        <div class="members row" data-equalizer data-equalize-on="small" data-equalize-on-stack="false" data-equalize-by-row="true" id="test-eq">
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

                if($poza === null || $poza === "") {
                  $poza = $defaultMemberPic;
                } ?>

                  <div class="small-12 medium-6 large-4 columns" data-equalizer-watch>
                    <div class="member media-object">
                      <div class="media-object-section middle">
                        <img src="<?php echo $poza; ?>" alt="<?php echo $nume; ?>">
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
        <h2 class="small-offset-1 small-10 medium-offset-4 medium-7 large-offset-5 large-6 columns title-team">Voluntari</h2>
        <div class="row">
          <div class="small-6 medium-4 large-3 columns">
            <div class="member member-small media-object">
              <div class="media-object-section">
                <img src="http://www.fillmurray.com/400/400" alt="Bogdan Ivănel">
              </div>
              <div class="media-object-section middle">
                <h3>Bogdan Ivănel</h3>
              </div>
            </div>
          </div>
          <div class="small-6 medium-4 large-3 columns">
            <div class="member member-small media-object">
              <div class="media-object-section">
                <img src="http://www.fillmurray.com/400/400" alt="Bogdan Ivănel">
              </div>
              <div class="media-object-section middle">
                <h3>Bogdan Ivănel</h3>
              </div>
            </div>
          </div>
          <div class="small-6 medium-4 large-3 columns">
            <div class="member member-small media-object">
              <div class="media-object-section">
                <img src="http://www.fillmurray.com/400/400" alt="Bogdan Ivănel">
              </div>
              <div class="media-object-section middle">
                <h3>Bogdan Ivănel</h3>
              </div>
            </div>
          </div>
          <div class="small-6 medium-4 large-3 columns">
            <div class="member member-small media-object">
              <div class="media-object-section">
                <img src="http://www.fillmurray.com/400/400" alt="Bogdan Ivănel">
              </div>
              <div class="media-object-section middle">
                <h3>Bogdan Ivănel</h3>
              </div>
            </div>
          </div>
          <div class="small-6 medium-4 large-3 columns">
            <div class="member member-small media-object">
              <div class="media-object-section">
                <img src="http://www.fillmurray.com/400/400" alt="Bogdan Ivănel">
              </div>
              <div class="media-object-section middle">
                <h3>Bogdan Ivănel</h3>
              </div>
            </div>
          </div>
          <div class="small-6 medium-4 large-3 columns">
            <div class="member member-small media-object">
              <div class="media-object-section">
                <img src="http://www.fillmurray.com/400/400" alt="Bogdan Ivănel">
              </div>
              <div class="media-object-section middle">
                <h3>Bogdan Ivănel</h3>
              </div>
            </div>
          </div>
          <div class="small-6 medium-4 large-3 columns">
            <div class="member member-small media-object">
              <div class="media-object-section">
                <img src="http://www.fillmurray.com/400/400" alt="Bogdan Ivănel">
              </div>
              <div class="media-object-section middle">
                <h3>Bogdan Ivănel</h3>
              </div>
            </div>
          </div>
          <div class="small-6 medium-4 large-3 columns">
            <div class="member member-small media-object">
              <div class="media-object-section">
                <img src="http://www.fillmurray.com/400/400" alt="Bogdan Ivănel">
              </div>
              <div class="media-object-section middle">
                <h3>Bogdan Ivănel</h3>
              </div>
            </div>
          </div>
          <div class="small-6 medium-4 large-3 columns">
            <div class="member member-small media-object">
              <div class="media-object-section">
                <img src="http://www.fillmurray.com/400/400" alt="Bogdan Ivănel">
              </div>
              <div class="media-object-section middle">
                <h3>Bogdan Ivănel</h3>
              </div>
            </div>
          </div>
          <div class="small-6 medium-4 large-3 columns">
            <div class="member member-small media-object">
              <div class="media-object-section">
                <img src="http://www.fillmurray.com/400/400" alt="Bogdan Ivănel">
              </div>
              <div class="media-object-section middle">
                <h3>Bogdan Ivănel</h3>
              </div>
            </div>
          </div>
          <div class="small-6 medium-4 large-3 columns">
            <div class="member member-small media-object">
              <div class="media-object-section">
                <img src="http://www.fillmurray.com/400/400" alt="Bogdan Ivănel">
              </div>
              <div class="media-object-section middle">
                <h3>Bogdan Ivănel</h3>
              </div>
            </div>
          </div>
          <div class="small-6 medium-4 large-3 columns">
            <div class="member member-small media-object">
              <div class="media-object-section">
                <img src="http://www.fillmurray.com/400/400" alt="Bogdan Ivănel">
              </div>
              <div class="media-object-section middle">
                <h3>Bogdan Ivănel</h3>
              </div>
            </div>
          </div>
          <div class="small-6 medium-4 large-3 columns">
            <div class="member member-small media-object">
              <div class="media-object-section">
                <img src="http://www.fillmurray.com/400/400" alt="Bogdan Ivănel">
              </div>
              <div class="media-object-section middle">
                <h3>Bogdan Ivănel</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="small-12 columns"></div>
    </div>
  </div>
</section>
