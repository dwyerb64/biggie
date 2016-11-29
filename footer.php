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
		<footer id="colophon" class=" container site-footer" role="contentinfo">
			<div class="row site-info">

				<div class="col-xs-6 footer-content">
					<p><?php the_field('footer_body', 'option'); ?></p>
				</div><!-- .footer-content -->

				<div class="col-xs-6 social-icons-container">
					<?php include 'template-parts\footer-social-icons.php' ?>;
				</div><!-- .social-icons-container -->	

			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</section>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
