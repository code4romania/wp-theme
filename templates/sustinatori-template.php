<?php /* Template Name: Sustinatori */ ?>

<section class="block block-content wrap container">
  <div class="hero">
    <div class="hero-content content row">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/page', 'header'); ?>

        <div class="small-offset-1 small-10 columns">
          <?php get_template_part('templates/content', 'page'); ?>

          <div class="partners">
            <h2><?php the_field('sponsors_title'); ?></h2>


            <ul class="list-images row">

              <?php
                $sponsori = get_field('sponsors_list');

                for($index = 0; $index < count($sponsori); $index++) {

                  if($index < count($sponsori)) {

                    $sponsor = $sponsori[$index];
                    $image = repeaterFieldValueOrDefault("sponsor_item_image", $sponsor);
                    $link = repeaterFieldValueOrDefault("sponsor_item_link", $sponsor);
                    $target = strlen($link) ? "_blank" : "_self";

                    ?>


                    <li class="small-6 medium-4 large-3 columns">
                      <a href="<?php echo $link; ?>" class="partner" target="<?php echo $target; ?>">
                        <img src="<?php echo $image; ?>" alt="">
                      </a>
                    </li>

              <?php
                  }
                }
              ?>

            </ul>
          </div>

          <div class="partners">
            <h2><?php the_field('in_kind_title'); ?></h2>

            <ul class="list-images row">

              <?php
                $sponsori = get_field('in_kind_list');

                for($index = 0; $index < count($sponsori); $index++) {

                  if($index < count($sponsori)) {

                    $sponsor = $sponsori[$index];
                    $image = repeaterFieldValueOrDefault("in_kind_item_image", $sponsor);
                    $link = repeaterFieldValueOrDefault("in_kind_item_link", $sponsor);
                    $target = strlen($link) ? "_blank" : "_self";

                    ?>


                    <li class="small-6 medium-4 large-3 columns">
                      <a href="<?php echo $link; ?>" class="partner" target="<?php echo $target; ?>">
                        <img src="<?php echo $image; ?>" alt="">
                      </a>
                    </li>

              <?php
                  }
                }
              ?>
            </ul>
          </div>

          <div class="partners">
            <div>
              <?php the_field('support_call_to_action_content'); ?>
            </div>
            <div class="actions">
              <a href="<?php the_field('support_call_to_action_link'); ?>" class="button large underline"><?php the_field('support_call_to_action_label'); ?></a>
            </div>
          </div>

        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
