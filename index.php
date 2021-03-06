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

<?php
include('template-parts/home-featured-image.php');
?>

<div class="container" id="slogan-container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 no-left-padding">
			<a href="/"><h1 class="slogan-title grey-last-word no-left-padding"><?php echo $tagline; ?></h1></a>
		</div>
	</div>
	
</div>

<main class="container">
	<div class="row">
		<div class="col-xs-12 col-md-6 col-lg-5 col-md-offset-1 home-item no-left-padding" title="<?php echo $tagline; ?>" data-first="true">
			<div id="js_company_description" class="company-description">
				<p>
					<?php echo get_theme_mod( 'company_description' ); ?>
				</p>
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow2.png" class="text-center scroll-down-arrow">

		<?php

			
			$workQuery = getListOfPortfoliosForHomepage(8);
			
			if( $workQuery->have_posts() ) {
						$homeIndex = 0;
						while ($workQuery->have_posts()) : $workQuery->the_post();
						$homeIndex++;
						

		?>
			
							
		<?php
			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
			$thumb_url = $thumb_url_array[0];

			if($homeIndex % 2 == 0):
		?>

			<div class="col-xs-12 home-item" title="<?php the_title( ) ?>">
				<div class="row">
					<a class="col-sm-7 home-item-image" href="<?php echo get_permalink() ?> ">
						<?php the_post_thumbnail( 'medium_large', array( 'class' => 'img-responsive' ) ) ?>
						<div class="home-portfolio-title">
							<div class="text-container">
								<h2><?php the_title() ?></h2>
								<h3 class="hidden-xs"><?php the_field('client') ?></h3>
							</div>
						</div>
					</a>
				</div>
			</div>

			<?php 
			else:
				?>

			<div class="col-xs-12 home-item right" title="<?php the_title( ) ?>" data-url="<?php echo get_permalink() ?> ">
				<div class="row">
					
					</div>
					<a class="col-sm-7 col-sm-offset-5 home-item-image" href="<?php echo get_permalink() ?> ">
						<?php the_post_thumbnail( 'medium_large', array( 'class' => 'img-responsive' ) ) ?>
						<div class="home-portfolio-title">
							<div class="text-container">
								<h2><?php the_title() ?></h2>
								<h3 class="hidden-xs"><?php the_field('client') ?></h3>
							</div>
						</div>
					</a>
				</div>
			</div>


		<?php
				endif;
				endwhile;
				wp_reset_postdata();
			}
	
		?>

	</div><!-- #primary -->
</main><!-- #main -->



<?php

get_footer();
