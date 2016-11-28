<div class="row">
                      
    <?php 

      $count = 1;

      foreach( $images as $image ): 
        switch ($count) {
            case 1:
                ?>
                <div class="col-xs-12 col-sm-6 portfolio-image">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </div> 
                <?php
                break;
            case 2:
                ?>
                <div class="col-xs-12 col-sm-6 portfolio-image right">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </div> 
                <?php
                break;
            case 3:
                ?>
                <div class="col-xs-12 col-sm-6 portfolio-image">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
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