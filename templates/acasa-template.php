<?php /* Template Name: Acasa */ ?>
	
	<div class = "row intro-row first-row">
		<div class = "col s12"> 
		    <div class = "row center">
		      <div class = "col s12">
		        <h1><?php echoFieldValueOrDefault('intro_titlu'); ?></h1>
		      </div>
		    </div>
		    <div class = "row center">
		      <div class = "col s6 offset-s3">
		      	<h2><?php echoFieldValueOrDefault('intro_subtitlu'); ?></h2>
		      </div>
		    </div>
		    <div class = "row center">
		      <div class = "col s6 offset-s3">
		        <?php echoFieldValueOrDefault('intro_continut'); ?>
		      </div>
		    </div>
		    <div class = "row center">
		      <div class = "col s12">
		        <a id = "afla-cine-suntem-button" class="intro-action-button waves-effect waves-light btn" href="<?php echoFieldValueOrDefault('intro_button_link'); ?>">
		          <span><?php echoFieldValueOrDefault('intro_button_text'); ?></span>
		        </a>
		      </div>
		    </div>
		</div>
	</div>
    <div class = "row center">
      <div class = "col s12">
        <h2><?php echoFieldValueOrDefault('proiecte_titlu'); ?></h2>
      </div>
    </div>
    <div class = "row center">
      <div class = "col s6 offset-s3">
      	<a id = "vezi-toate-proiectele-link" href = "<?php echoFieldValueOrDefault('proiecte_link'); ?>">
      		<?php echoFieldValueOrDefault('proiecte_link_text'); ?>
      	</a>
      </div>
    </div>


	<?php
		$args = array(
	      'post_type'     	=> 'proiect',
	      'post_status'   	=> 'publish',
	      'orderby'       	=> 'date',
	      'posts_per_page'  => 4
	    );

      $query = new WP_Query($args);

      if($query->have_posts()) {
            	?>
        <div class = "row project-list-row">
           <?php
            	while($query->have_posts()) {
              	  $query->the_post();

              	  $thumb_url 		= "";
              	  $category 		= get_the_category()[0];
                  $titluCF 		    = get_post_meta($post->ID, 'titlu',true);
				  $organizatieCF 	= get_post_meta($post->ID, 'organizatie',true);
                    
                  $titlu 	   = $titluCF !== NULL && $titluCF !== ""  ? $titluCF : get_the_title();
              	  $organizatie = $organizatieCF !== NULL ? $organizatieCF : "";

                  $content 	= $titlu  . " // " . $organizatie;                    
                  $class 	= $category->slug . '-card' . ' ' . $category->slug . '-class';

              	if (has_post_thumbnail()) {
              		$thumb_id  = get_post_thumbnail_id();
                    $thumb_url = wp_get_attachment_image_src($thumb_id, "full")[0];
              	}

              		?>
              	<div class="col s12 m6 l3">     		
	              	<div class="card project-card <?php echo $class; ?>" data-category = "<?php echo $category->slug; ?>">
		              	<a href="<?php the_permalink(); ?>">
      						<div class="card-image">
      						    <img src="<?php echo $thumb_url;?>">
      						    <span class="card-title"></span>
      						</div>
      						<div class="card-content">
      						    <p class = "center"><?php echo $content;?></p>
      						</div>
      					</a>
      				</div>
      			</div>
          	<?php } ?>
			</div>
		<?php 

		wp_reset_query();

	} ?>



    <div class = "row center">
      <div class = "col s12">
        <h2><?php echoFieldValueOrDefault('implica-te_titlu'); ?></h2>
      </div>
    </div>
    <div class = "row center">
      <div class = "col s6 offset-s3">
        <?php echoFieldValueOrDefault('implica-te_continut'); ?>
      </div>
    </div>

    <?php 
        if(get_field('implica-te_entitati')) { ?>
          <div class = "row entitati-list-row">
            <div class = "col s12">
              <ul class="entitati-list">
                <?php 
                  $entities         = get_field('implica-te_entitati');
                  $defaultEntityPic = esc_url(get_template_directory_uri()) . "/assets/images/default-entity-pic.png";




                  foreach ($entities as $entity) {
                  	$titlu 		 = repeaterFieldValueOrDefault("titlu", $entity);
                  	$descriere 	 = repeaterFieldValueOrDefault("descriere", $entity);
                  	$poza 		 = repeaterFieldValueOrDefault("poza", $entity); 
                  	if($poza === null || $poza === "") {
          				$poza = $defaultEntityPic;
          			}

                  	?>
                    <li>
                      <img src="<?php echo $poza;?>">
                      <p class = "entitate-titlu"><?php echo $titlu;?></p>
                      <p class = "entitate-descriere"><?php echo $descriere;?></p>
                    </li>
                    
                  <?php } ?>
              </ul>
            </div>
          </div>
          <?php }?>