<?php
/**
 * The template for displaying all single work post.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bigo
 */


get_header(); ?>



    <?php 
        while ( have_posts() ) : the_post(); 
	        $work_unit_image = get_field('work_unit_image');
		 ?>

		<section class="container layout-portfolio">
		<?php

      // check if the flexible content field has rows of data
      if( have_rows('work_content') ):

           // loop through the rows of data
          while ( have_rows('work_content') ) : the_row();

              if( get_row_layout() == 'body_content' ):
                
                include('template-parts/partial-body-content.php');

              elseif( get_row_layout() == 'image' ): 

                $images = get_sub_field('images');
                
                $imageCount = count($images);
                switch ($imageCount) {
                    case 1:
                        include('template-parts/partial-images-1.php');
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

                elseif( get_row_layout() == 'video' ): 
                  include('template-parts/partial-video.php');

                
              endif;

          endwhile;

      else :

          // no layouts found

      endif;

    ?>
    </section>


    <?php endwhile; // End of the loop. 

include('template-parts/partial-portfolio-footer-links.php');

get_footer();
