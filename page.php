<div class="block block-hero wrap container">
  <div class="hero">
    <div class="hero-content-wrap">
      <div class="hero-content">
        <div class="content row">
          <div class="small-12 columns block-title">
            <h1>Salut, noi suntem<br/> <span class="mono">Code for Romania</span>.</h1>
            <p>Ca să-ți placă mai mult România, vino alături de noi. Suntem o <a href="#">comunitate de oameni</a> care dezvoltă <a href="#">soluții IT</a> ce rezolvă probleme sociale. Pe termen lung, credem ca putem ajuta pe fiecare dintre noi sa fie mai informat si mai implicat.</p>
            <p class="actions">
              <a href="#" class="button hollow">Află mai multe despre noi</a>
              <span>sau</span>
              <a href="#" class="button hollow">Vezi proiectele</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-media">
      <div class="image-wrap image-wrap-landscape">
        <img src="<?php bloginfo('template_url'); ?>/dist/images/hero.jpg">
      </div>
    </div>
  </div>
</div>

<div class="block wrap container">
  <div class="content row">
    <div class="small-12 columns">
      <div class="block-title">
        <h1>Proiectele noastre</h1>
        <p>Ca să-ți placă mai mult România, vino alături de noi. Suntem o ce rezolvă probleme sociale. Pe termen lung, credem ca putem.</p>
        <p class="actions">
          <a href="#" class="button hollow">Implică-te într-un proiect</a>
        </p>
      </div>
    </div>
  </div>
</div>


<div class="wrap container">
  <div class="content row">
    <div class="small-12 columns">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/page', 'header'); ?>
        <?php get_template_part('templates/content', 'page'); ?>
      <?php endwhile; ?>
    </div>
  </div>
</div>
