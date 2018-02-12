<?php /* Template Name: Doneaza-alt */?>
<section class="block block-hero block-content block-donate wrap container">
  <div class="hero">
    <div class="content row">
      <?php get_template_part('templates/donate', 'card'); ?>
    </div>
  </div>
</section>

<section class="block block-content">
  <div class="row">
    <div class="columns small-12 large-6">
      <div class="boxer is-donate">
        <h2><?php the_field('doneaza_options_title'); ?></h2>
        <div class="boxer-content">

          <div class="donate-handler">
            <div class="donate-handlerTitle clearfix">
              <div class="donate-handlerLabel pull-left">prin</div>
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" class="donate-handlerAction pull-left">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="U4QBTHU9J5HUS">
                <input type="image" src="<?php bloginfo('template_url'); ?>/dist/images/paypal.png" name="submit" alt="Doneaza prin PayPal" class="img-button">
                <img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
            <div class="doante-handlerContent">
              <p><?php the_field('doneaza_option_paypal_content'); ?></p>
            </div>
          </div>

          <?php
            $donateOptions = get_field('doneaza_options');

            for($index = 0; $index < count($donateOptions); $index++) {
              $donateOption = $donateOptions[$index];

              $optionImage = repeaterFieldValueOrDefault('doneaza_option_image', $donateOption);
              $optionLink = repeaterFieldValueOrDefault('doneaza_option_link', $donateOption);
              $optionContent = repeaterFieldValueOrDefault('doneaza_option_content', $donateOption);
          ?>
            <div class="donate-handler">
              <div class="donate-handlerTitle clearfix">
                <div class="donate-handlerLabel pull-left">prin</div>
                <a href="<?php echo $optionLink;?>" target="_blank" class="donate-handlerAction pull-left">
                  <img src="<?php echo $optionImage;?>" alt="" />
                </a>
              </div>
              <div class="doante-handlerContent">
                <?php echo $optionContent; ?>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>
    </div>
    <div class="columns small-12 large-6">
      <div class="row">
        <div class="columns small-12 medium-6 large-12">
          <div class="boxer is-donate">
            <h2><?php the_field('doneaza_wire_title'); ?></h2>
            <div class="boxer-content">
              <?php the_field('doneaza_wire_content'); ?>
            </div>
          </div>
        </div>
        <div class="columns small-12 medium-6 large-12">
          <div class="boxer is-donate">
            <h2><?php the_field('doneaza_other_title'); ?></h2>
            <div class="boxer-content">
              <?php the_field('doneaza_other_content'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
