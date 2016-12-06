<!-- Featured image for homepage -->

<?php 
$image = get_field('featured_image', 'option');

if( !empty($image) ): ?>
<div class="featured-image" style="background-image: url(<?php echo $image['url']; ?>)"></div>	

<?php endif; ?>