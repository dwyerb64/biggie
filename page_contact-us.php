<?php
/* Template name: Contact Us Page */

get_header(); ?>

<section id="contact-us">
	<div class="title-block">
		<p><?php the_field('contact_details_title'); ?></p>
	</div>
	<div class="content-block">
		<p><?php the_field('contact_details_content'); ?></p>
	</div>
</section>

<div class="test">test</div>

<?php get_header(); ?>


