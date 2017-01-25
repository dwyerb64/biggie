<?php
/* Template name: Contact Us */

get_header(); ?>

<section id="contact-us" class="container" >
	<div class="row">
		<div class="title-block col-md-6" >
			<h1><a href="mailto:<?php the_field('email_address', 'option');?>"><?php the_field('contact_details_title'); ?></a></h1>
		</div>
	</div>	
</section>

<?php
get_footer();


