<?php
/* Template name: Contact Us */

get_header(); ?>

<section id="contact-us" class="container" >
	<div class="row">
		<div class="title-block col-md-6" >
			<h1><?php the_field('contact_details_title'); ?></h1>
		</div>
		<div class="content-block col-md-6">
			<p><?php the_field('contact_details_content'); ?></p>
		</div>
	</div>	
</section>

<?php get_header(); ?>


