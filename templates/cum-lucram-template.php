<?php /* Template Name: Cum lucram */ ?>

<section class="block block-hero block-content wrap container">
  <div class="hero">
    <div class="hero-content content row">
      <h1 class="small-offset-1 small-10 medium-offset-0 medium-12 columns">
        <?php the_title(); ?>
      </h1>
      <div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">
        <ol class="steps">
          <?php
            $steps = get_field('pasi_cum_lucram');

            for($index = 0; $index < count($steps); $index++) {

              if($index < count($steps)) {

                $step = $steps[$index];
                $titlu = repeaterFieldValueOrDefault("pas_titlu", $step);
                $continut = repeaterFieldValueOrDefault("pas_continut", $step);

                ?>

                <li class="step">
                  <h2>
                    <span class="step-no">
                      <i class="fa fa-terminal" aria-hidden="true"></i>
                      <?php echo $index + 1; ?>
                    </span>
                    <span><?php echo $titlu; ?></span>
                  </h2>
                  <div class="step-content"><?php echo $continut; ?></div>
                </li>

          <?php
              }
            }
          ?>

        </ol>

      </div>
      <div class="small-offset-1 small-10 columns actions actions-project">
        <a href="<?php echo the_field('actiune_primara_link'); ?>" class="button large underline" target="<?php echo the_field('open_in_new_window_first'); ?>"><?php echo the_field('actiune_primara_text'); ?></a>
        <a href="<?php echo the_field('actiune_secundara_link'); ?>" class="button large underline" target="<?php echo the_field('open_in_new_window_second'); ?>"><?php echo the_field('actiune_secundara_text'); ?></a>
      </div>
    </div>
  </div>
</section>