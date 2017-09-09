<?php /* Template Name: Doneaza */?>

<section class="block block-donate container">
  <div class="hero">
    <div class="hero-content content row">
      <div class="small-12 medium-11 large-8 columns">
        <div class="donate-form">
          <h1 class="title"><?php get_template_part('templates/page', 'header'); ?></h1>
          <p><?php the_field('doneaza_hero'); ?></p>
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
              <p class="donate-copy">Some smart copy about keeping it legal?</p>
              <div class="donate-fields row">
                <div class="small-12 columns">
                  <input type="text" name="first-name" placeholder="Numele tau complet">
                </div>
                <div class="small-12 medium-8 columns">
                  <input type="text" name="first-name" placeholder="Adresa ta de e-mail">
                </div>
                <div class="small-12 medium-4 columns">
                  <button class="button success">Donează</button>
                </div>
              </div>
            </li>
            <li>
              <span class="donate-no">3.</span>
              <p class="donate-copy">Ceva gen: Vei fi redirectionat catre Mobipay pentru finalizarea tranzactiei indata ce dai click click.
              </p>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="block block-boxes container">
  <div class="row">
    <div class="small-12 medium-12 large-6 columns">
      <div class="box is-donate">
        <!-- TODO: add all additional options and layout styles -->
        <h2 class="title">Donează altfel</h2>
        <div class="donate-option">
          <a href="https://www.patreon.com/bePatron?u=3907223&redirect_uri=http%3A%2F%2Fwww.code4.ro%2Fmultumim%2F" class="button large underline donate-cta" target="_blank">
            <!-- <img src="<?php the_field('doneaza_call_to_action_icon'); ?>" alt="<?php the_field('doneaza_call_to_action_string'); ?>" class="button-ui" aria-hidden="true"> -->
            <?php the_field('doneaza_call_to_action_string'); ?>
          </a>
        </div>
        <div class="donate-option">
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
    </div>
    <div class="small-12 medium-12 large-6 columns">
      <div class="row">
        <div class="small-12 medium-6 large-12 columns">
          <div class="box is-donate">
            <h2 class="title"><?php the_field('doneaza_tertiary_title'); ?></h2>
            <?php the_field('doneaza_tertiary_content'); ?>
          </div>
        </div>
        <div class="small-12 medium-6 large-12 columns">
          <div class="box is-donate">
            <h2 class="title">Te-ai gandit la alte metode?</h2>
            <p>Aici poți vedea toate proiectele Code for Romania, inclusiv cele în lucru sau deja finalizate. Proiectele Code for Romania sunt fie proiecte proprii, fie proiecte dezvoltate pentru ONG-uri sau instituții publice.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
