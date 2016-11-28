<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bigo
 */

get_header(); 

$tagline = get_bloginfo('description');
?>



<div class="container" id="slogan-container">
	<h1 class="slogan-title"><?php echo $tagline; ?></h1>
</div>

<main class="container">
	<div class="row">
		<div class="col-xs-12 home-item" title="<?php echo $tagline; ?>">
			<div class="company-description">
				<p>
					<?php echo get_theme_mod( 'company_description' ); ?>
				</p>
			</div>
		</div>

		<?php

			
			$workQuery = getListOfPortfolios(10);
			
			if( $workQuery->have_posts() ) {
						while ($workQuery->have_posts()) : $workQuery->the_post();
			
		?>
			
							
		<?php
			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
			$thumb_url = $thumb_url_array[0];
		?>

			<div class="col-xs-12 home-item" title="<?php the_title( ) ?>">
				
				<a href="<?php echo get_permalink() ?> ">
					<?php the_post_thumbnail( 'medium_large', array( 'class' => '' ) ) ?>
				</a>
				<h2><?php the_title() ?></h2>
				<h3><?php the_field('client') ?></h3>
			</div>
		<?php
				endwhile;
				wp_reset_postdata();
			}
	
		?>

	</div><!-- #primary -->
</main><!-- #main -->



<?php

get_footer();
