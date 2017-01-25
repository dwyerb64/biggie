<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bigo
 */

?>

</div><!-- #content -->
	<section id="footer-container">
		<footer id="colophon" class="container site-footer" role="contentinfo">
			<div class="row site-info">
				<div class="col-xs-6 footer-content">
					<div class="company-name">
						<p class="contact-name"><?php the_field('company_name', 'option'); ?></p>
					</div>
					<div class="contact-address1">
						<p><?php the_field('address_line_1', 'option'); ?></p>
					</div>
					<div class="contact-address2">
						<p><?php the_field('address_line_2', 'option'); ?> - <?php the_field('country', 'option'); ?></p>
					</div>
					<div class="contact-info">
						<p><strong>tel. </strong><?php the_field('telephone_number', 'option'); ?></p>
						<p><a href="mailto:<?php the_field('email_address', 'option');?>"><strong>email: </strong><?php the_field('email_address', 'option'); ?></a></p>
					</div>
				</div><!-- .footer-content -->

				<div class="col-xs-6 social-icons-container">
					<?php include 'template-parts/footer-social-icons.php' ?>;
				</div><!-- .social-icons-container -->	

			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</section>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
