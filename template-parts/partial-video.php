<div class="row">
  <div class="col-xs-12">
    <div class="portfolio-video">
      <?php   the_sub_field('video_url');  ?> 

      
      <?php 

      $placeholderImage = get_sub_field('video_placeholder');

      if( !empty($placeholderImage) ): ?>

        <img class="portfolio-placeholder" src="<?php echo $placeholderImage['url']; ?>" alt="<?php echo $placeholderImage['alt']; ?>" />

      <?php endif; ?>
      <span class="play-button" style="border-color: <?php echo the_sub_field('play_button_colour') ?>">
        <i class="fa fa-4x fa-chevron-right js-play-video" style="color: <?php echo the_sub_field('play_button_colour') ?>; " aria-hidden="true"></i>
      </span>
    </div>
  </div>
</div>