<?php /* Template Name: Cine suntem */ ?>

<section class="block wrap container">
  <div class="content row">
    <div class="small-12 columns">
      <?php get_template_part('templates/page', 'header'); ?>



    </div>
  </div>
</section>


    <!-- <div class = "row first-row center">
      <div class = "col s12">
        <h1><?php /* echoFieldValueOrDefault('cine_suntem_titlu'); */?></h1>
      </div>
    </div>
    <div class = "row center">
      <div class = "col s6 offset-s3">
        <?php /* echoFieldValueOrDefault('cine_suntem_continut'); */?>
      </div>
    </div>
    <div class = "row center">
      <div class = "col s12">
        <h2><?php /* echoFieldValueOrDefault('echipa_titlu'); */?></h2>
      </div>
    </div>
    <div class = "row center">
      <div class = "col s6 offset-s3">
        <?php /* echoFieldValueOrDefault('echipa_continut'); */?>
      </div>
    </div>


 <?php /*
    $membri             = get_field('membri');
    $defaultMemberPic   = esc_url(get_template_directory_uri()) . "/assets/images/default-member-pic.png";
    $columnsNumber      = ceil(count($membri) / 4) * 4;

    for($index = 0; $index < $columnsNumber; $index++) {
      if($index % 4 === 0) {
        */?>
        <div class = "row cine-suntem-list-row">
        <?php /*
      }

      if($index < count($membri)) {

        $membru     = $membri[$index];
        $nume       = repeaterFieldValueOrDefault("nume", $membru);
        $descriere  = repeaterFieldValueOrDefault("descriere", $membru);
        $poza       = repeaterFieldValueOrDefault("poza", $membru);

        if($poza === null || $poza === "") {
          $poza = $defaultMemberPic;
        } */?>

            <div class = "col s12 m6 l3">
              <div class = "cine-suntem-membru">
                <img src="<?php /* echo $poza;*/?>">
                <p class = "membru-echipa-nume"><?php /* echo $nume;*/?></p>
                <p class = "membru-echipa-descriere"><?php /* echo $descriere;*/?></p>
              </div>
            </div>

          <?php /*
          }
      if($index % 4 === 3) { */?>

        </div>
      <?php /*
      }

    }

  */?> -->
