<?php /* Template Name: Sustinatori */ ?>

<section class="block block-content wrap container">
  <div class="hero">
    <div class="hero-content content row">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/page', 'header'); ?>

        <div class="small-offset-1 small-10 columns">
          <?php get_template_part('templates/content', 'page'); ?>

          <div class="partners">
            <h2>In-Kind</h2>

            <ul class="list-images row">
              <?php
                // if(get_field('sustinatori')) {

                  $sustinatori = get_field('sustinatori');
                  $columnsNumber  = ceil(count($sustinatori) / 3) * 3;

                  for($index = 0; $index < $columnsNumber; $index++) {
                    if($index < count($sustinatori)) {

                      $sustinator = $sustinatori[$index];
                      $poza   = repeaterFieldValueOrDefault("logo", $sustinator);

                      if($poza === null || $poza === "") {
                        $poza = "http://www.fillmurray.com/400/400";
                      }
              ?>
                <li class="small-6 medium-4 large-3 columns">
                  <a href="<?php echoRepeaterFieldValueOrDefault("link", $sustinator); ?>" class="partner" target="_blank" title="<?php echoRepeaterFieldValueOrDefault("nume", $sustinator); ?>">
                    <img src="<?php echo $poza; ?>" alt="<?php echoRepeaterFieldValueOrDefault("nume", $sustinator); ?>">
                  </a>
                </li>
              <?php
                    }
                  }
                // }
              ?>
            </ul>

          </div>

          <div class="partners">
            <h2>O societate mai puternică contribuie la un mediu de business mai sănătos.</h2>
            <p>Dacă vrei să susții proiecte care vor schimba încet încet România, ne-ar plăcea să ne prezentăm și să vedem cum putem lucra împreună.</p>
            <div class="actions">
              <a href="mailto:<?php echo antispambot('parteneriate@code4.ro'); ?>"class="button large underline">Scrie-ne un e-mail</a>
            </div>
          </div>

        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
