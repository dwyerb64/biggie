<div class="row  portfolio-background-image">
                      
    <?php 
      foreach( $images as $image ): 

      if( !empty($image) ): ?>
      <div class="col-xs-12 portfolio-image">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div> 
      <?php endif; ?>


    <?php 
    endforeach; ?>

</div>