<?php
/**
 * The template for displaying all single work post.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bigo
 */


get_header(); ?>



    <?php  while ( have_posts() ) : the_post(); ?>
		<?php 
		$work_unit_image = get_field('work_unit_image');
		 ?>

		<section id="featured-image" class="container">
		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail('full', array( 'class' => 'img-responsive' ));
		} 
		the_content();
		?>
		</section>
    
    <section class="container">
    <?php

      // check if the flexible content field has rows of data
      if( have_rows('work_content') ):

           // loop through the rows of data
          while ( have_rows('work_content') ) : the_row();

              if( get_row_layout() == 'body_content' ):
                ?>
              
              <div class="row">
                <div class="col-xs-12 col-sm-7 col-sm-offset-5">
                  <?php  the_sub_field('body_content');  ?>
                </div>
              </div>
              
              <?php

              elseif( get_row_layout() == 'image' ): 

                $images = get_sub_field('images');
                
                $imageCount = count($images);
                switch ($imageCount) {
                    case 1:
                        
                        break;
                    case 2:
                        include('template-parts/partial-images-2.php');
                        break;
                    case 3:
                        include('template-parts/partial-images-3.php');
                        break;
                    default:
                        // nothing yet;
                }

              endif;

          endwhile;

      else :

          // no layouts found

      endif;

    ?>
    </section>


    <?php endwhile; // End of the loop. ?>

<div class="container">

		<?php

      
      $type = 'portfolio';
      $queryArgs=array(
        'post_type' => $type,
        'post_status' => 'publish',
        'post__not_in' => array(get_the_ID()),
        'posts_per_page' => 3);
      $workQuery = null;
      $workQuery = new WP_Query($queryArgs);
      
      if( $workQuery->have_posts() ) {
            while ($workQuery->have_posts()) : $workQuery->the_post();
      
    ?>

    

    <div class="row">
    	<div class="xs-col-12">
        <h1>
    		  <?php the_title() ?>
        </h1>
    	</div>
    </div>

    

 		<?php
				endwhile;
				wp_reset_postdata();
			}
		?>
		</div>

<?php
get_footer();
