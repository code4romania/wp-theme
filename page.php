<div class="block-hero wrap container">
  <div class="content row">
    <div class="small-12 columns">
      <div class="hero">
        <h1>Salut,</h1>
        <h2 class="mono">Noi suntem Code for Romania.</h2>
        <p>Ca să-ți placă mai mult România, vino alături de noi. Suntem o <a href="#">comunitate de oameni</a> care dezvoltă <a href="#">soluții IT</a> ce rezolvă probleme sociale. Pe termen lung, credem ca putem ajuta pe fiecare dintre noi sa fie mai informat si mai implicat.</p>
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
