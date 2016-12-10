<?php if($rowIndex == 2) : ?>
    <div class="col-xs-12 col-sm-3 portfolio-title">
      <?php 
        if( get_field('enable_custom_title') ): 
          the_field('custom_title');
        else:
      ?>

        <h1><?php  the_title();  ?></h1> 

      <?php 
        endif;
      ?>
    </div>
  <?php endif; ?>