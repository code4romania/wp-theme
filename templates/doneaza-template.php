<?php /* Template Name: Doneaza */?>

<section class="block block-hero block-content block-donate wrap container">
  <div class="hero">
    <div class="content row">
      <div class="small-12 medium-offset-1 medium-10 large-offset-0 large-8">
        <div class="donate-hero">
          <h1><?php echo the_title(); ?></h1>
          <p class="donate-copy">Aici poți vedea toate proiectele Code for Romania, inclusiv cele în lucru sau deja finalizate. Proiectele Code for Romania sunt fie proiecte proprii, fie proiecte dezvoltate pentru ONG-uri sau instituții publice.</p>
          <div class="donate-form">
            <div class="donate-step">
              <div class="media-object">
                <div class="media-object-section">
                  <span class="donate-count">1</span>
                </div>
                <div class="media-object-section">
                  <div>
                    <div class="donate-label js-label-donate" data-value="50">Cu 50 lei ne luam una alta, nu foarte mult.</div>
                    <div class="donate-options row">
                      <div class="small-6 medium-3 columns">
                        <div class="donate-option">
                          <input type="radio" name="donate-value" value="20" id="donate-value-20" >
                          <label for="donate-value-20">20 lei</label>
                        </div>
                      </div>
                      <div class="small-6 medium-3 columns">
                        <div class="donate-option">
                          <input type="radio" name="donate-value" value="50" id="donate-value-50" checked >
                          <label for="donate-value-50">50 lei</label>
                        </div>
                      </div>
                      <div class="small-6 medium-3 columns">
                        <div class="donate-option">
                          <input type="radio" name="donate-value" value="100" id="donate-value-100" >
                          <label for="donate-value-100">100 lei</label>
                        </div>
                      </div>
                      <div class="small-6 medium-3 columns">
                        <div class="donate-option">
                          <label class="donate-input-custom">
                            <input type="text" class="js-donate-value-custom" name="donate-value" id="donate-value-custom" placeholder="...">
                            <span class="donate-label-after">lei</span>
                          </label>
                        </div>
                      </div>
                      <div class="small-12 columns">
                        <div class="donate-recurrent">
                          <input id="donate-monthly-recurrence" type="checkbox" checked >
                          <label for="donate-monthly-recurrence">Vreau sa va ajut in fiecare luna.</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="donate-step">
              <div class="media-object">
                <div class="media-object-section">
                  <span class="donate-count">2</span>
                </div>
                <div class="media-object-section">
                  <div>
                    <div class="donate-label js-label-donate" data-value="50"> By coming together, we can solve the challenges we face today. If you want to contribute with your resources.</div>
                    <div class="row">
                      <div class="small-12 medium-7 columns">
                        <div class="donate-person">
                          <input type="text" name="donate-name" placeholder="Numele tau complet" required>
                        </div>
                      </div>
                      <div class="small-12 medium-7 columns">
                        <div class="donate-person">
                          <input type="email" name="donate-email" placeholder="Adresa ta de e-mail" required>
                        </div>
                      </div>
                      <div class="small-12 medium-5 columns">
                        <button class="button donate-button">Donează</button>
                      </div>
                    </div>
                    <p class="donate-secure">
                      <i class="fa fa-lock"></i>
                      Ceva gen: Vei fi redirectionat catre Mobipay pentru finalizarea tranzactiei indata ce dai click click.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="block block-hero block-content wrap container">
  <div class="hero-content content row">

    <div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">

      <div class="donate row">
        <div class="small-12 columns dontate-intro">
          <?php the_field('doneaza_intro'); ?>
        </div>

        <div class="small-12 large-6 columns">
          <div class="">
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
          <a href="https://www.patreon.com/bePatron?u=3907223&redirect_uri=http%3A%2F%2Fwww.code4.ro%2Fmultumim%2F" class="button large underline donate-cta" target="_blank">
            <img src="<?php the_field('doneaza_call_to_action_icon'); ?>" alt="<?php the_field('doneaza_call_to_action_string'); ?>" class="button-ui" aria-hidden="true">
            <?php the_field('doneaza_call_to_action_string'); ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section> -->
