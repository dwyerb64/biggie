<div class="row">
                      
    <?php 

      foreach( $images as $image ): 
        ?>
                <div class="col-xs-6 portfolio-image" style="background-image: url(<?php echo $image['sizes']['medium']; ?>) ">
                </div> 
                


    <?php 
    endforeach; ?>

</div>