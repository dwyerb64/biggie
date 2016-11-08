<?php
/* Template name: Work Page */

get_header(); ?>




    <?php

      
      $type = 'work';
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
      
              
    <?php
      $thumb_id = get_post_thumbnail_id();
      $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
      $thumb_url = $thumb_url_array[0];
    ?>
      
      <h2><?php the_title() ?></h2>
      <h4><?php the_field('client') ?></h4>
      <?php the_post_thumbnail( 'medium_large', array( 'class' => 'work-item work-item-enter' ) ) ?>
      
    <?php
        endwhile;
        wp_reset_postdata();
      }
  
    ?>


<?php

get_footer();
