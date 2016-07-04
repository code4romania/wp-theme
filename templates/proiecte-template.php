<?php /* Template Name: Proiecte */ ?>



 <div>
    <div>
        <div>
          <?php echoFieldValueOrDefault('proiecte_continut'); ?>
        </div>
    </div>
</div>
<div>
    <div>
        <div>
          <div>
        <?php
          $filters    = getCategoryActiveFilters();
          $columnClass  = "s" . (12 / count($filters));
          foreach ($filters as $filter) {
            $class  = $filter->slug . '-class';
            $cbID   = $filter->slug . '-cb';
          ?>

            <div class="<?php echo $columnClass; ?>">
               <a class="<?php echo $class; ?> filter-button" href="#!">
                 <span><?php  echo $filter->name; ?></span>
               </a>

               <input type="checkbox" class="project-filter-cb" checked="checked" id="<?php echo $cbID; ?>" data-category = "<?php echo $filter->slug; ?>" />
            </div>


          <?php
          }
        ?>
      </div>
        </div>
    </div>
</div>


  <?php
        $args = array(
              'post_type'      => 'proiect',
              'post_status'    => 'publish',
              'orderby'        => 'date',
              'order'          => 'DESC'
            );

      $query = new WP_Query($args);

      if($query->have_posts()) {
        $defaultProjectPic   = esc_url(get_template_directory_uri()) . "/assets/images/default-project.png";
              ?>
        <div>
          <div>
            <ul class = "project-list">
              <?php
              $index = 0;

              while($query->have_posts()) {
                  $query->the_post();

                  $thumb_url      = "";
                  $category       = get_the_category()[0];
                  $titluCF        = get_post_meta($post->ID, 'titlu',true);
                  $organizatieCF  = get_post_meta($post->ID, 'organizatie',true);

                  $titlu       = $titluCF !== NULL && $titluCF !== ""  ? $titluCF : get_the_title();
                  $organizatie = $organizatieCF !== NULL ? $organizatieCF : "";

                  $content  = $titlu  . " // " . $organizatie;
                  $class    = $category->slug . '-card' . ' ' . $category->slug . '-class';

                  if (has_post_thumbnail()) {
                      $thumb_id  = get_post_thumbnail_id();
                      $thumb_url = wp_get_attachment_image_src($thumb_id, "full")[0];
                  } else {
                    $thumb_url = $defaultProjectPic;    
                  }

                  ?>
                  <li>
                     <div class="card project-card <?php echo $class; ?>" data-category = "<?php echo $category->slug; ?>">
                        <a href="<?php the_permalink(); ?>">
                         <div>
                           <img src="<?php echo $thumb_url; ?>">
                         </div>
                         <div>
                           <p><?php echo $content; ?></p>
                         </div>
                      </a>
                    </div>
                  </li>
                  <?php

                  $index++;
                }

                ?>
              </ul>
      </div>
    <?php } ?>
    </div>


<!--
<section class="block wrap container">
  <div class="content row">
    <div class="small-12 columns">
      <?php //get_template_part('templates/page', 'header'); ?>



    </div>
  </div>
</section>

-->