<?php /* Template Name: Proiecte */ ?>

<div class="row">
    <div class="col s12">
        <div class = "frame-container">
        	<span>
        		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus aliquam feugiat erat, eu placerat sem faucibus eu. Nullam eget faucibus eros, non auctor nisl. Nullam eleifend sodales risus, id porta erat. Curabitur dictum elementum ex. Aliquam orci mauris, viverra sit amet laoreet eu, scelerisque ac dui. Aenean dignissim erat nulla, facilisis maximus mauris varius a. Praesent ornare vulputate bibendum. Vivamus convallis luctus gravida.

				    Nullam tellus odio, tincidunt sed justo et, maximus elementum odio. Quisque vel congue leo. Praesent laoreet, felis ac accumsan efficitur, sapien lectus facilisis tellus, sit amet ultricies nisi dui ut lorem. Vivamus vitae magna cursus, euismod ligula ut, mattis ligula. Aenean eleifend tellus at justo pellentesque, et volutpat justo commodo. Morbi quis ullamcorper felis. Morbi vitae purus finibus, viverra justo eu, lacinia quam.
        	</span>
        </div>
    </div>
</div> 
<div class="row">
    <div class="col s12">
        <div class = "frame-container">
        	<div class="row center proiecte-filtre-row">
				<?php
					$filters 		= getCategoryActiveFilters();
					$columnClass 	= "s" . (12 / count($filters));
					foreach ($filters as $filter) { 
						$class 	= $filter->slug . '-class';
						$cbID  	= $filter->slug . '-cb';
					?>

						<div class="col <?php echo $columnClass;?>">
							 <a class="<?php echo $class;?> filter-button waves-effect waves-light btn" href="#!">
			           <span><?php echo $filter->name;?></span>
			         </a>
			                
			         <input type="checkbox" class="filled-in project-filter-cb" checked="checked" id="<?php echo $cbID;?>" data-category = "<?php echo $filter->slug; ?>" />
			         <label class = "project-filter-cb-label" for="<?php echo $cbID;?>"></label>
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
            	?>
        <div class = "row">
					<div class="col s12">
						<ul class = "project-list">
            	<?php
            	$index = 0;

            	while($query->have_posts()) {
              		$query->the_post();

              		$thumb_url 		  = "";
              		$category 		  = get_the_category()[0];
                  $titluCF 		    = get_post_meta($post->ID, 'titlu',true);
					        $organizatieCF 	= get_post_meta($post->ID, 'organizatie',true);
                    
                  $titlu 		   = $titluCF !== NULL && $titluCF !== ""  ? $titluCF : get_the_title();
              		$organizatie = $organizatieCF !== NULL ? $organizatieCF : "";

                  $content 	= $titlu  . " // " . $organizatie;                    
                  $class 		= $category->slug . '-card' . ' ' . $category->slug . '-class';

              		if (has_post_thumbnail()) {
              		    $thumb_id  = get_post_thumbnail_id();
                      $thumb_url = wp_get_attachment_image_src($thumb_id, "full")[0];
              		}

              		?>
              		<li class = "center">              		
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
              		</li>
              		<?php

              		$index++;
              	}

              	?>
              </ul>
			</div>
		</div>
		<?php } ?>
		

