<?php /* Template Name: Implica-te */ ?>

<section class="block block-hero block-content block-actions wrap container">
  <div class="hero">
    <div class="hero-content content row">
      <?php get_template_part('templates/page', 'header'); ?>
      <div class="small-offset-1 small-10 medium-6 columns">
        <p>Comunitățile active creează o societate mai puternică, deci mai eficientă în rezolvarea problemelor. Pe termen lung, ele pot duce la o Românie mai bună, în care am vrea cu toții să trăim.</p>
        <p>Dacă vrei să contribui și tu, vino alături de noi.<br/>Câteva ore din timpul tău, know-how sau o sumă cât de mică donată, totul ajută.</p>
      </div>
      <div class="small-12"></div>
    </div>
  </div>
</section>


<section class="block wrap container">
  <div class="content row">
    <div class="small-offset-1 small-10 columns">

      <ul class="tabs involve row" data-tabs id="people-tabs">
        <li class="small-6 columns tabs-title is-active">
          <a href="#panel1" aria-controls="panel1" aria-selected="true" id="panel1-label">
            Timp
          </a>
        </li>
        <li class="small-6 columns tabs-title">
          <a href="#panel2" aria-controls="panel2" aria-selected="false" id="panel2-label">
            Bani
          </a>
        </li>
      </ul>

      <div class="tabs-content" data-tabs-content="people-tabs">
        <div class="tabs-panel is-active" id="panel1" aria-hidden="true" aria-labelledby="panel1-label">
          <p>one</p>
          <p>Check me out! I'm a super cool Tab panel with text content!</p>
        </div>
        <div class="tabs-panel" id="panel2" aria-hidden="true" aria-labelledby="panel2-label">
          <p>two</p>
          <img class="thumbnail" src="assets/img/generic/rectangle-7.jpg">
        </div>
      </div>

      <ul class="tabs involve row" data-tabs id="entities-tabs">
         <li class="small-6 medium-3 columns tabs-title is-active">
          <a href="#panel3" aria-controls="panel3" aria-selected="true" id="panel3-label">
            Companii
          </a>
        </li>
        <li class="small-6 medium-3 columns tabs-title">
          <a href="#panel4" aria-controls="panel4" aria-selected="false" id="panel4-label">
            Instituții
          </a>
        </li>
        <li class="small-6 medium-3 columns tabs-title">
          <a href="#panel5" aria-controls="panel5" aria-selected="false" id="panel5-label">
            ONG-uri
          </a>
        </li>
        <li class="small-6 medium-3 columns tabs-title">
          <a href="#panel6" aria-controls="panel6" aria-selected="false" id="panel6-label">
            Universități
          </a>
        </li>
      </ul>

      <div class="tabs-content" data-tabs-content="entities-tabs">
        <div class="tabs-panel is-active" id="panel3" aria-hidden="true" aria-labelledby="panel3-label">
          <p>three</p>
          <p>Check me out! I'm a super cool Tab panel with text content!</p>
        </div>
        <div class="tabs-panel" id="panel4" aria-hidden="true" aria-labelledby="panel4-label">
          <p>four</p>
          <img class="thumbnail" src="assets/img/generic/rectangle-2.jpg">
        </div>
        <div class="tabs-panel" id="panel5" aria-hidden="true" aria-labelledby="panel5-label">
          <p>five</p>
          <p>Check me out! I'm a super cool Tab panel with text content!</p>
        </div>
        <div class="tabs-panel" id="panel6" aria-hidden="true" aria-labelledby="panel6-label">
          <p>six</p>
          <p>Check me out! I'm a super cool Tab panel with text content!</p>
        </div>
      </div>
    </div>
  </div>
</section>
