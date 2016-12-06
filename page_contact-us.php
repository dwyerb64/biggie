<?php
/* Template name: Contact Us */

get_header(); ?>

<section id="contact-us" class="container" >
	<div class="row">
		<div class="title-block col-md-6" >
			<h1><?php the_field('contact_details_title'); ?></h1>
		</div>
		<div class="content-block col-md-6">
			<div class="wrapper">
				<p class="contact-name hidden-xs"><?php the_field('company_name', 'option'); ?></p>
				<p class="contact-address"><?php the_field('address_line_1', 'option'); ?></p>
				<p class="contact-address"><?php the_field('address_line_2', 'option'); ?></p>
				<p class="contact-address"><?php the_field('country', 'option'); ?></p>
				<p class="contact-info"><strong>tel. </strong><?php the_field('telephone_number', 'option'); ?></p>
			</div>	
		</div>
	</div>	
</section>

<?php get_header(); ?>


