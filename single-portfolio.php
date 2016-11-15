<?php
/**
 * The template for displaying all single work post.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bigo
 */


get_header(); ?>



    <?php  while ( have_posts() ) : the_post(); ?>
		<?php 
		$work_unit_image = get_field('work_unit_image');
		 ?>

		<section id="featured-image" class="container">
		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail('full', array( 'class' => 'img-responsive' ));
		} 
		the_content();
		?>
		</section>

		<section class="container">
			<div class="row">
				<div class="col-md-6">
					<h2><?php the_field('work_unit_title'); ?></h2>
					<figure>
						<img src="<?php echo $work_unit_image['url']; ?>" alt="<?php echo $work_unit_image['alt']; ?>" />
						<figcaption><?php the_field('work_unit_image_caption'); ?></figcaption>
					<figure>
				</div>
				<div class="col-md-6">
					<p><?php the_field('work_unit_text_area'); ?></p>
				</div>
			</div>
		</section>

    <?php endwhile; // End of the loop. ?>





<?php
get_footer();
