<?php /* Template Name: Doneaza */?>

<section class="block block-hero block-content block-donate wrap container">
  <div class="hero">
    <div class="hero-content content row">

      <?php get_template_part('templates/page', 'header'); ?>

      <div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">
        <?php the_field('doneaza_hero'); ?>
      </div>

      <div class="small-offset-1 small-10 columns actions">
        <a href="https://www.patreon.com/bePatron?u=3907223&redirect_uri=http%3A%2F%2Fwww.code4.ro%2Fmultumim%2F" class="button large underline donate-cta" target="_blank">
          <img src="<?php the_field('doneaza_call_to_action_icon'); ?>" alt="<?php the_field('doneaza_call_to_action_string'); ?>" class="button-ui" aria-hidden="true">
          <?php the_field('doneaza_call_to_action_string'); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="block block-hero block-content wrap container">
  <div class="hero-content content row">

    <div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">

      <div class="donate row">
<<<<<<< HEAD
        <div class="small-12 columns" style="margin-bottom: 40px;">
          <h3>Vrei sa ne susţii cu cei 2% din impozitul pe venit?</h3>
          <p>Gasești <a href="https://drive.google.com/open?id=1eGJ1rSiuTxWzLrqtt-y90uk25Dk1wHBd1iRWaZ92j5A" target="_blank">aici</a> instrucțiunile, iar aici formularele <a href="https://drive.google.com/open?id=0BytTRZxTh5diWUo3VGFRRVRpRHc" target="_blank">200</a> și <a href="https://drive.google.com/open?id=0BytTRZxTh5diV2lFTWY3RTB5NEE" target="_blank">230</a>.</p>
        </div>
=======
        <div class="small-12 columns dontate-intro">
          <?php the_field('doneaza_intro'); ?>
        </div>

>>>>>>> master
        <div class="small-12 large-6 columns">
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
