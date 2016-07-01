<?php while (have_posts()) : the_post(); ?>



  <?php
    $thumb_url    = "";
    $category     = get_the_category()[0];
    $class      = $category->slug . '-class';
    $titluCF    = get_post_meta($post->ID, 'titlu',true);
    $organizatieCF  = get_post_meta($post->ID, 'organizatie',true);
    $durataCF   = get_post_meta($post->ID, 'durata',true);
    $adresaSiteCF   = get_post_meta($post->ID, 'adresa_site',true);
    $adresaGithubCF = get_post_meta($post->ID, 'adresa_github',true);

    $titlu      = $titluCF !== NULL && $titluCF !== ""  ? $titluCF : get_the_title();
        $organizatie  = $organizatieCF !== NULL ? $organizatieCF : "";
        $durata     = $durataCF !== NULL ? $durataCF : "";
        $adresaSite   = $adresaSiteCF !== NULL ? $adresaSiteCF : "";
        $adresaGithub = $adresaGithubCF !== NULL ? $adresaGithubCF : "";

    if (has_post_thumbnail()) {
            $thumb_id  = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id, "full")[0];
        }
  ?>

  <div class = "row first-row ">
    <div class = "col s4">
      <img src="<?php echo $thumb_url;?>">
    </div>
    <div class = "col s8">
      <div class = "row">
        <div class = "col s12 right-align">
          <a id = "go-to-site-button" class="project-action-button waves-effect waves-light btn" href="<?php echo $adresaSite;?>">
            <span>VEZI PROIECTUL LIVE</span>
          </a>
        </div>
      </div>
      <div class = "row">
        <div class = "col s12 right-align">
          <a id = "go-to-github-button" class="project-action-button waves-effect waves-light btn" href="<?php echo $adresaGithub;?>">
            <span>GITHUB REPO</span>
          </a>
        </div>
      </div>
      <div class = "row">
        <div class = "col s12">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>



  <div class = "row">
    <div class="col s4">
          <div class="card project-parameter-card <?php echo $class;?>">
            <div class="card-image">
            </div>
            <div class="card-content">
              <p><?php echo $titlu;?></p>
            </div>
          </div>
    </div>
    <div class="col s4">
          <div class="card project-parameter-card <?php echo $class;?>">
            <div class="card-image">
            </div>
            <div class="card-content">
              <p><?php echo $organizatie;?></p>
            </div>
          </div>
    </div>
    <div class="col s4">
          <div class="card project-parameter-card <?php echo $class;?>">
            <div class="card-image">
            </div>
            <div class="card-content">
              <p><?php echo $durata;?></p>
            </div>
          </div>
    </div>
  </div>

  <div class = "row project-section-header-row">
    <div class = "col s12">
      <span class = "center <?php echo $class;?>">ECHIPA</span>
    </div>
  </div>

  <?php
    $membri = get_field('membri_echipa', $post->ID);
    $columnsNumber = ceil(count($membri) / 3) * 3;

    for($index = 0; $index < $columnsNumber; $index++) {
      if($index % 3 === 0) {
        ?>
        <div class = "row">
        <?php
      }

      if($index < count($membri)) {

        $membru = $membri[$index];
        $poza   = repeaterFieldValueOrDefault("poza", $membru);

        if($poza === null || $poza === "") {
          $poza   = esc_url(get_template_directory_uri()) . "/assets/images/default-member-pic.png";
        }


            ?>

            <div class = "col s4">
              <div class = "project-member">
                <img src="<?php echo $poza;?>">
                <div class="chip project-member-chip">
                <span class = "<?php echo $class;?>"><?php echoRepeaterFieldValueOrDefault("initiala", $membru); ?></span>
                <?php echoRepeaterFieldValueOrDefault("nume", $membru); ?>
            </div>
          </div>
            </div>

          <?php
          }
      if($index % 3 === 2) {
        ?>
        </div>
        <?php
      }

    }

  ?>

    <div class = "row project-section-header-row">
      <div class = "col s12">
        <span class = "center <?php echo $class;?>">PARTENERI</span>
      </div>
    </div>

  <?php
    $parteneri    = get_field('parteneri', $post->ID);
    $columnsNumber  = ceil(count($parteneri) / 2) * 2;

    for($index = 0; $index < $columnsNumber; $index++) {
      if($index % 2 === 0) {
        ?>
        <div class = "row">
        <?php
      }

      if($index < count($parteneri)) {

        $partener   = $parteneri[$index];
        $poza     = repeaterFieldValueOrDefault("poza", $partener);

            ?>
        <div class="col s6">
              <div class="card project-partner-card <?php echo $class; ?>">
                <div class="card-image">

                </div>
                <div class="card-content">
                  <p><?php echoRepeaterFieldValueOrDefault("nume", $partener);?></p>
                </div>
              </div>
        </div>
          <?php
          }
      if($index % 2 === 1) {
        ?>
        </div>
        <?php
      }

    }

  ?>


<?php endwhile; ?>