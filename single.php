<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bigo
 */

 get_header(); ?>



		<?php
		while ( have_posts() ) : the_post();
		?>
		
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<img src='<?php the_post_thumbnail_url( $size ); ?>' alt="">
					<heading><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></heading>
				</div>
			</div>
		</div>

		<h2><?php the_field('client') ?></h2>
		<h3>
		<?php the_field('brand_identity') ?>
		</h3>
		<div class="row"><div class="col-sm-6 col-sm-offset-6">
			<p><?php the_field('body_part_1') ?></p>	
		</div>
		
		



		<?php
		endwhile; // End of the loop.
		?>



<?php
// get_sidebar();
get_footer();
