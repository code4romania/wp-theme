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
    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="donate-form">
      <div class="donate-step">
        <div class="media-object">
          <div class="media-object-section">
            <span class="donate-count">1</span>
          </div>
          <div class="media-object-section">
            <div class="donate-label js-label-donate"><?php the_field('doneaza_step_1'); ?></div>
            <div class="donate-options row">
              <?php
                $donations_config = apply_filters('donations_gateway_get_config');

                foreach ($donations_config['amounts'] as $i => $amount) {
                  printf(
                    '<div class="donate-option small-4 medium-3 columns">'.
                    '<input type="radio" name="donate[amount]" value="%2$d" id="donate-value-%2$d" class="donate-value"%3$s>'.
                    '<label for="donate-value-%2$d">%2$d %1$s</label></div>',
                    $donations_config['currencyName'], $amount, checked($i, 1, false)
                  );
                }
              ?>
              <div class="donate-option small-4 small-offset-4 medium-3 columns">
                <input type="radio" name="donate[amount]" value="custom" id="donate-value-custom" class="donate-value">
                <label class="donate-input-custom">
                  <input type="number" class="js-donate-value-custom" step="1" min="15" name="donate[amount-custom]" id="donate-value-custom" placeholder="&nbsp;">
                  <span class="donate-label-after"><?php echo $donations_config['currency']['name']; ?></span>
                </label>
              </div>
              <div class="donate-recurrence small-12 columns">
                <input name="action" value="donations_gateway" type="hidden">
                <input name="donate[recurrence]" value="0" type="hidden">
                <input name="donate[recurrence]" value="1" type="checkbox" id="donate-monthly-recurrence">
                <label for="donate-monthly-recurrence"><?php the_field('doneaza_recurrent'); ?></label>
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
            <div class="donate-label js-label-donate"><?php the_field('doneaza_step_2'); ?></div>
            <div class="row">
              <div class="small-12 medium-7 columns">
                <div class="donate-person">
                  <input type="text" name="donate[name]" placeholder="<?php the_field('doneaza_label_nume'); ?>" required>
                </div>
              </div>
              <div class="small-12 medium-7 columns">
                <div class="donate-person">
                  <input type="email" name="donate[email]" placeholder="<?php the_field('doneaza_label_e-mail'); ?>" required>
                </div>
              </div>
              <div class="small-12 medium-5 columns">
                <?php wp_nonce_field('donate_action', 'donate[nonce]', false, true ); ?>
                <input type="submit" class="button donate-button" value="<?php the_field('doneaza_label_cta'); ?>">
              </div>
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
