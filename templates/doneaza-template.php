<?php /* Template Name: Doneaza */?>

<section class="block block-hero block-content block-donate wrap container">
  <div class="hero">
    <div class="hero-content content row">

      <?php get_template_part('templates/page', 'header'); ?>

      <div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">
        <p>Îți place ce facem? Ajută-ne să continuăm! </br>Vrem să creștem sustenabil. De aceea avem nevoie de susținere constantă, prin sume oricât de mici, lunare. Te invităm să ne sprijini pe Patreon, o platformă de crowd-funding folosită de ONG-uri din întreaga lume. Poți seta o plată recurentă, oricât de mică. Code for Romania depinde de asta.</p>
      </div>

      <div class="small-offset-1 small-10 columns actions">
        <a href="https://www.patreon.com/bePatron?u=3907223&redirect_uri=http%3A%2F%2Fwww.code4.ro%2Fmultumim%2F" class="button large underline donate-cta" target="_blank">
          <img src="<?php bloginfo('template_url'); ?>/dist/images/patreon.png" alt="Patreon" class="button-ui" aria-hidden="true">
          Donează prin Patreon
        </a>
      </div>
    </div>
  </div>
</section>

<section class="block block-hero block-content wrap container">
  <div class="hero-content content row">

    <div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">
      <div class="donate row">
        <div class="small-12 large-6 columns">
          <div class="donate-option">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" class="dontate-cta">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="U4QBTHU9J5HUS">
              <input type="image" src="<?php bloginfo('template_url'); ?>/dist/images/donate-paypal.png" name="submit" alt="Doneaza prin PayPal" class="img-button">
              <img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
            <a href="http://www.paypal.com" target="_blank" class="donate-info">
              <img src="<?php bloginfo('template_url'); ?>/dist/images/paypal.png" alt="PayPal">
            </a>
            <p>PayPal este un procesator de plăţi online cu peste 14 ani experienţă în siguranţa datelor si <a href="http://66.media.tumblr.com/3e2170e16a9d5cf0bdb4af264fae1534/tumblr_nugr8k4aqS1r3kmkso4_r1_500.gif" target="_blank" class="easter">tehnologii</a> de ultimă generaţie.</p>
          </div>
        </div>
        <div class="small-12 large-6 columns">
          <h2>Donează prin transfer bancar</h2>
          <p>ASOCIAȚIA CODE FOR SOCIETY</p>
          <p>Sediul: Piața Alba Iulia nr. 7, bloc I6, etaj 1, ap. 9, sect. 3, București</p>
          <p>CUI: 36317167</p>
          <p>
            Cont bancar RON: <strong>RO38BTRLRONCRT0348260401</strong><br>
            Cont bancar EUR: <strong>RO85BTRLEURCRT0348260401</strong><br>
            Cont bancar USD: <strong>RO89BTRLUSDCRT0348260401</strong>
          <p>
            Deschis la Banca Transilvania Sucursala Unirii <br>
            Swift: BTRLRO22
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
