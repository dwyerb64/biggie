<div class="row">
                      
    <?php 

      $count = 1;

      foreach( $images as $image ): 
        switch ($count) {
            case 1:
                ?>
                <div class="col-xs-6 portfolio-image left" style="background-image: url(<?php echo $image['sizes']['medium']; ?>) ">
                </div> 
                <?php
                break;
            case 2:
                ?>
                <div class="col-xs-6 portfolio-image right" style="background-image: url(<?php echo $image['sizes']['medium']; ?>) ">
                </div> 
                <?php
                break;
            case 3:
                ?>
                <div class="col-xs-6 portfolio-image left" style="background-image: url(<?php echo $image['sizes']['medium']; ?>) ">
                </div> 
                <?php
                break;
            default:
                // code to be executed if n is different from all labels;
        }

    ?>


    <?php 
    $count = $count + 1;
    endforeach; ?>

</div>