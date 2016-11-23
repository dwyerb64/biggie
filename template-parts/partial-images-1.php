<div class="row">
                      
    <?php 

      $count = 1;

      foreach( $images as $image ): 
    ?>
        
        <div class="col-xs-12" style="background-size: cover; height: 600px; background: url(<?php echo $image['sizes']['medium']; ?>) no-repeat center center">
        </div> 

    <?php 
    $count = $count + 1;
    endforeach; ?>

</div>