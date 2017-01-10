<section class="portfolio-footer-links">
  <div class="container">

  <?php

    $workQuery = getListOfPortfoliosForHomepage(6);
    
    if( $workQuery->have_posts() ) {
          while ($workQuery->have_posts()) : $workQuery->the_post();
    
  ?>

  <div class="row">
    <div class="col-xs-12">
      <h1>
        <a href="<?php echo get_permalink() ?> " class="letter-by-letter-transition"><?php the_title() ?></a>
      </h1>
    </div>
  </div>



  <?php
      endwhile;
      wp_reset_postdata();
    }
  ?>
  </div>
</section>