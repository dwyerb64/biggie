<div class="row">
  <div class="col-xs-12">
    <div class="portfolio-video">
      <?php   the_sub_field('video_url');  ?> 

      
      <?php 

      $placeholderImage = get_sub_field('video_placeholder');

      if( !empty($placeholderImage) ): ?>

        <img class="portfolio-placeholder" src="<?php echo $placeholderImage['url']; ?>" alt="<?php echo $placeholderImage['alt']; ?>" />

      <?php endif; ?>
     
      <div class="play-button play-button-img"></div>
    </div>
  </div>
</div>