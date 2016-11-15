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
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <img src="http://placehold.it/350x150" alt="">
    </div>
  </div>
</div>

    <?php endwhile; // End of the loop. ?>





<?php
get_footer();
