<?php
  // TODO: Figure out text translations options
  // TODO: Newsletter subscribe integration
  // TODO: Add nonce

  // TODO: fetch from options
  $currency = [
    'code' => 'RON',
    'name' => 'lei',
  ];

  // TODO: fetch from options
  $amounts = [
    [
      'value'   => 20,
      'message' => sprintf(__('Lorem ipsum dolor sit amet, %%d %s consectetur adipisicing elit.'), $currency['name']),
      'checked' => false,
    ],
    [
      'value'   => 50,
      'message' => sprintf(__('Perferendis labore, expedita minus %%d %s! Veritatis consequatur nesciunt eos facilis.'), $currency['name']),
      'checked' => true,
    ],
    [
      'value'   => 100,
      'message' => sprintf(__('Inventore temporibus voluptate impedit quod commodi, officia quam %%d %s, et magnam cupiditate maxime.'), $currency['name']),
      'checked' => false,
    ],
  ];

?>

<div class="small-12 medium-offset-1 medium-10 large-offset-0 large-8">
  <div class="donate-hero">
    <h1><?php echo the_title(); ?></h1>
    <p class="donate-copy">
      <?php the_field('donate_content_body'); ?>
    </p>
    <form action="" method="post" class="donate-form">
      <div class="donate-step">
        <div class="media-object">
          <div class="media-object-section">
            <span class="donate-count">1</span>
          </div>
          <div class="media-object-section">
            <div class="donate-label js-label-donate donate-label-amount-text"></div>
            <div class="donate-options row">
              <?php
                foreach ($amounts as $amount) {
                  printf(
                    '<div class="donate-option small-4 medium-3 columns" data-label="%3$s">'.
                    '<input type="radio" name="donate[value]" value="%2$d" id="donate-value-%2$d" class="donate-value"%4$s>'.
                    '<label for="donate-value-%2$d">%2$d %1$s</label></div>',
                    $currency['name'], $amount['value'], esc_attr( sprintf($amount['message'], $amount['value']) ),
                    checked($amount['checked'], true, false)
                  );
                }
              ?>
              <div class="donate-option small-4 small-offset-4 medium-3 columns">
                <input type="radio" name="donate[value]" value="" id="donate-value-custom" class="donate-value">
                <label class="donate-input-custom">
                  <input type="number" class="js-donate-value-custom" step="5" min="10" name="donate[value]" id="donate-value-custom" placeholder=" ">
                  <span class="donate-label-after">lei</span>
                </label>
              </div>
              <div class="donate-recurrent small-12 columns">
                <input name="donate[recurrent]" value="0" type="hidden">
                <input name="donate[recurrent]" value="1" type="checkbox" id="donate-monthly-recurrence" >
                <label for="donate-monthly-recurrence">Vreau sa va ajut in fiecare luna.</label>
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
                    <input type="text" name="donate[name]" placeholder="Numele tau complet" required>
                  </div>
                </div>
                <div class="small-12 medium-7 columns">
                  <div class="donate-person">
                    <input type="email" name="donate[email]" placeholder="Adresa ta de e-mail" required>
                  </div>
                </div>
                <div class="small-12 medium-5 columns">

                  <input type="submit" class="button donate-button" value="Donează">
                </div>
              </div>
              <p class="donate-secure">
                <i class="fa fa-lock"></i>
                Vei fi redirectionat catre Mobipay pentru finalizarea tranzactiei indata ce dai click click.</p>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
