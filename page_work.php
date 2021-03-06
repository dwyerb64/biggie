<?php
/* Template name: Work Page */
get_header(); ?>


<main class="container">
  <div class="row">
      <div class="col-xs-12 col-sm-6">
          <div class="work-title">
            <h1><?php echo get_the_title() ?></h1>
          </div>
        </div>

    <?php

      
      $type = 'portfolio';
      $queryArgs=array(
        'post_type' => $type,
        'post_status' => 'publish',
        'post__not_in' => array(get_the_ID()),
        'posts_per_page' => 20);
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

      <div class="col-xs-12 col-sm-6 work-item work-item-enter">
        <a href="<?php echo get_permalink() ?> ">
          <div class="img-container">
            <?php the_post_thumbnail( 'medium_large', array( 'class' => 'img-responsive' ) ) ?>
          </div>
          <h2><?php the_title( ) ?></h2>
          <h3 class="hidden-xs"><?php the_field('client') ?></h3>
        </a>
      </div>
    <?php
        endwhile;
        wp_reset_postdata();
      }
  
    ?>

    </div><!-- #primary -->
  </main><!-- #main -->


<?php

get_footer();
