<?php
  // TODO: Figure out text translations options
  // TODO: Newsletter subscribe integration
  // TODO: Maybe move nonce action name to database
?>
<div class="small-12 medium-offset-1 medium-10 large-offset-0 large-8">
  <div class="donate-hero">
    <h1><?php echo the_title(); ?></h1>
    <p class="donate-copy">
      <?php the_field('doneaza_intro'); ?>
    </p>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <div class="donate-step">
        <div class="media-object">
          <div class="media-object-section">
            <span class="donate-count">1</span>
          </div>
          <div class="media-object-section">
            <div class="donate-label"><?php the_field('doneaza_step_1'); ?></div>
            <div class="donate-options row">
              <div class="small-12 medium-7 columns">
                <div class="donate-select">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="YED2GFGKUFXBJ">
                  <input type="hidden" name="on0" value="">
                  <select name="os0">
                    <option value="5">€5.00 / lună</option>
                    <option value="10">€10.00 / lună</option>
                    <option value="20">€20.00 / lună</option>
                    <option value="50">€50.00 / lună</option>
                    <option value="100">€100.00 / lună</option>
                  </select>
                  <input type="hidden" name="currency_code" value="EUR">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </div>
              </div>
              <div class="small-12 medium-5 columns">
                <input type="submit" name="submit" class="button donate-button" value="<?php the_field('doneaza_recurent_label_cta'); ?>">
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <div class="donate-step">
        <div class="media-object">
          <div class="media-object-section">
            <span class="donate-count">2</span>
          </div>
          <div class="media-object-section">
            <div class="donate-label"><?php the_field('doneaza_step_2'); ?></div>
            <div class="donate-option">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="C39VZYTTZGF82">
              <input type="submit" name="submit" class="button donate-button" value="<?php the_field('doneaza_single_label_cta'); ?>">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </div>
            <p class="donate-secure">
              <i class="fa fa-lock"></i>
              <?php the_field('doneaza_security'); ?>
            </p>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
