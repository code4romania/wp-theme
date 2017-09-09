<?php /* Template Name: Doneaza */?>

<section class="block block-hero block-donate wrap container">
  <div class="hero">
    <div class="hero-content content row">
      <div class="small-12 medium-10 large-offset-1 large-8 columns">
        <div class="donate-form">
          <h1>Donează online</h1>
          <p>Aici poți vedea toate proiectele Code for Romania, inclusiv cele în lucru sau deja finalizate. Proiectele Code for Romania sunt fie proiecte proprii, fie proiecte dezvoltate pentru ONG-uri sau instituții publice.</p>
          <ol class="donate-steps">
            <li>
              <span class="donate-no">1.</span>
              <p class="donate-copy">Cu <span class="js-donate-value">50</span> lei ne luam una alta, nu foarte mult.</p>
              <div class="row">
                <div class="small-6 medium-3 columns">
                  <div class="input-donate">
                    <input type="radio" name="donate-value" value="25" id="pokemonRed">
                    <label for="pokemonRed">25 lei</label>
                  </div>
                </div>
                <div class="small-6 medium-3 columns">
                  <div class="input-donate">
                    <input type="radio" name="donate-value" value="50" id="pokemonBlue">
                    <label for="pokemonBlue">50 lei</label>
                  </div>
                </div>
                <div class="small-6 medium-3 columns">
                  <div class="input-donate">
                    <input type="radio" name="donate-value" value="100" id="pokemonYellow">
                    <label for="pokemonYellow">100 lei</label>
                  </div>
                </div>
                <div class="small-6 medium-3 columns">
                  <div class="input-donate is-custom">
                    <!-- TODO: fix max & min length attributes, something fishy -->
                    <!-- TODO: add behavior js for focusing between these values -->
                    <input type="number" name="donate-value" placeholder="2" id="pokemonGreen" min="1" max="10000" maxlength="5">
                    <label for="pokemonGreen">lei</label>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <span class="donate-no">2.</span>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="block block-hero block-content wrap container">
  <div class="hero-content content row">

    <div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">

      <div class="donate row">

        <?php get_template_part('templates/page', 'header'); ?>

        <div class="small-12 columns">
          <?php the_field('doneaza_hero'); ?>
        </div>

        <div class="small-12 columns dontate-intro">
          <?php the_field('doneaza_intro'); ?>
        </div>

        <div class="small-12 large-6 columns">
          <div class="donate-option">
            <a href="https://www.patreon.com/bePatron?u=3907223&redirect_uri=http%3A%2F%2Fwww.code4.ro%2Fmultumim%2F" class="button large underline donate-cta" target="_blank">
              <img src="<?php the_field('doneaza_call_to_action_icon'); ?>" alt="<?php the_field('doneaza_call_to_action_string'); ?>" class="button-ui" aria-hidden="true">
              <?php the_field('doneaza_call_to_action_string'); ?>
            </a>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" class="dontate-cta">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="U4QBTHU9J5HUS">
              <input type="image" src="<?php the_field('doneaza_secondary_image'); ?>" name="submit" alt="Doneaza prin PayPal" class="img-button">
              <img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
            <div class="donate-info">
              <?php the_field('doneaza_secondary_content'); ?>
            </div>
          </div>
        </div>
        <div class="small-12 large-6 columns banks">
          <h2><?php the_field('doneaza_tertiary_title'); ?></h2>
          <div class="donate-content">
            <?php the_field('doneaza_tertiary_content'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
