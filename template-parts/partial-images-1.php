<div class="row">
                      
    <?php 
      foreach( $images as $image ): 
    ?>
        
        <div class="col-xs-12 portfolio-image" style="background-size: cover; background-repeat: no-repeat; height: 600px; background-image: url(<?php echo $image['sizes']['medium']; ?>) ">
        </div> 

    <?php 
    endforeach; ?>

</div>