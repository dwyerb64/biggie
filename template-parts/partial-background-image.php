<?php 
    	$image = get_sub_field('image');

      if( !empty($image) ): ?>
<div class="row portfolio-image landing" style="background-image: url('<?php echo $image['url'];  ?>')">
           
    
      <?php endif; ?>

</div>