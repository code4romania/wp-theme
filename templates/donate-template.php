<?php /* Template Name: Doneaza-alt */?>
<section class="block block-hero block-content block-donate wrap container">
  <div class="hero">
    <div class="content row">
      <?php get_template_part('templates/donate', 'card'); ?>
    </div>
  </div>
</section>

<section class="block block-content donate">
  <div class="row">
    <div class="columns small-12 large-6">
      <div class="boxer is-donate">
        <h2><?php the_field('doneaza_options_title'); ?></h2>
        <div class="boxer-content">

          <?php
            $donateOptions = get_field('doneaza_options');

            for($index = 0; $index < count($donateOptions); $index++) {
              $donateOption = $donateOptions[$index];

              $optionImage = repeaterFieldValueOrDefault('doneaza_option_image', $donateOption);
              $optionLink = repeaterFieldValueOrDefault('doneaza_option_link', $donateOption);
              $optionContent = repeaterFieldValueOrDefault('doneaza_option_content', $donateOption);
          ?>
            <div class="donate-handler">
              <div class="donate-handlerTitle clearfix">
                <div class="donate-handlerLabel pull-left"><?php the_field('doneaza_label_prin'); ?></div>
                <a href="<?php echo $optionLink;?>" target="_blank" class="donate-handlerAction pull-left">
                  <img src="<?php echo $optionImage;?>" alt="" />
                </a>
              </div>
              <div class="doante-handlerContent">
                <?php echo $optionContent; ?>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>
      <div class="boxer is-donate">
        <h2><?php the_field('doneaza_wire_title'); ?></h2>
        <div class="boxer-content">
          <?php the_field('doneaza_wire_content'); ?>
        </div>
      </div>
    </div>
    <div class="columns small-12 large-6">
      <div class="boxer is-donate">
        <h2><?php the_field('doneaza_other_title'); ?></h2>
        <div class="boxer-content">
          <?php the_field('doneaza_other_content'); ?>
          <ul class="social social-project">
            <li>
              <a href="#" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo urlencode(bloginfo('url')); ?>', 'sharer','status=no,height=500,width=500,resizable=no,toolbar=no,menubar=no,scrollbars=no,location=no,directories=no');" class="social-icon social-facebook" >
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="#" onclick="window.open('https://twitter.com/home?status=<?php echo urlencode('Code for Romania #code4romania #opendata #romania' . bloginfo('url')); ?>', 'sharer','status=no,height=500,width=500,resizable=no,toolbar=no,menubar=no,scrollbars=no,location=no,directories=no');" class="social-icon social-twitter">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="#" onclick="window.open('https://plus.google.com/share?url=<?php echo urlencode(bloginfo('url')); ?>', 'sharer','status=no,height=500,width=500,resizable=no,toolbar=no,menubar=no,scrollbars=no,location=no,directories=no')" class="social-icon social-google-plus">
                <i class="fa fa-google-plus" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="#" onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(bloginfo('url')); ?>&title=<?php echo urlencode(get_the_title()); ?>', 'sharer','status=no,height=500,width=500,resizable=no,toolbar=no,menubar=no,scrollbars=no,location=no,directories=no')" class="social-icon social-linkedin">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
