<?php
/* Template name: Inside Page */

get_header(); ?>

<section id="featured-image" class="container">
<?php
if ( has_post_thumbnail() ) {
	the_post_thumbnail('full', array( 'class' => 'img-responsive' ));
} 
the_content();
?>
</section>

<?php get_header(); ?>


