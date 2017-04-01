<?php /* Template Name: Implica-te */ ?>

<section class="block block-hero block-content block-actions wrap container">
  <div class="hero">
    <div class="hero-content content row">
      <?php get_template_part('templates/page', 'header'); ?>

      <div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">
        <?php echo the_field('implica-te_hero'); ?>
      </div>

    </div>
  </div>
</section>

<section class="block wrap container">
  <div class="content row" data-equalizer data-equalize-on="small" data-equalize-on-stack="false" data-equalize-by-row="true">
      <?php
        $implicari = get_field("implicari");

        for($index = 0; $index < count($implicari); $index++) {

          if($index < count($implicari)) {

            $implicare = $implicari[$index];
            $titlu = repeaterFieldValueOrDefault("implica_titlu", $implicare);
            $continut = repeaterFieldValueOrDefault("implica_continut", $implicare);
            $icon = repeaterFieldValueOrDefault("implica_icon", $implicare);
            $tema = repeaterFieldValueOrDefault("implica_tema", $implicare);
            $ctaURL = repeaterFieldValueOrDefault("implica_call_to_action_url", $implicare);
            $ctaLabel = repeaterFieldValueOrDefault("implica_call_to_action_string", $implicare);
            $buttonInverted = "";
            $iconInverted = "";

            $emailRx = '/[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})/';

            if(preg_match($emailRx, $ctaURL, $email_is)) {
              $ctaURL = antispambot($ctaURL);
            }

            if($tema == "action" || $tema == "special") {
              $buttonInverted = " inverted";
              $iconInverted = " svg-inverted";
            }

            $hasAction = $tema !== "default" ? " involve-action" : "";
            $hasDonate = $tema === "special" ? " svg-donate" : "";

            $html = "<div class='small-12 medium-6 columns'>" .
                      "<div class='involve " . $hasAction . " involve-" . $icon ."' data-equalizer-watch id='" . $icon ."'>" .
                        "<h2>" .
                          "<i class='svg-icons " . $iconInverted . $hasDonate . " svg-" . $icon ."'></i>" .
                          "<span>" . $titlu ."</span>" .
                        "</h2>" .
                        "<div class='involve-content'>" .
                          $continut .
                        "</div>" .
                        "<p>" .
                          "<a href='" . $ctaURL . "' class='button large underline" . $buttonInverted . "'>" . $ctaLabel . "</a>" .
                        "</p>" .
                      " </div>" .
                    " </div>";

            echo $html;
          }
        }
      ?>
  </div>
</section>
