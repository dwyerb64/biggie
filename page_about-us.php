<?php
/* Template name: About Us */

get_header(); ?>

<section id="about-us" class="container" >
	<div class="row">
		<div class="title-block col-md-6" >
			<h1><?php the_field('about_us_title'); ?></h1>
		</div>
		<div class="content-block col-md-6">
			<p><?php the_field('about_us_details'); ?></p>
		</div>
	</div>	
</section>

<?php
get_footer();

