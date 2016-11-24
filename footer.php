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
				</div>
				<div class="col-xs-6 social-icons-container">
					<ul class="social-icons">
						<li class="fa-stack fa-2x">
							<a href="#">
								<i class="fa fa-circle fa-stack-2x fa-inverse"></i>
								<i class="fa fa-vimeo fa-stack-1x"></i>
							</a>
						</li>
						<li class="fa-stack fa-2x">
							<a href="#">
								<i class="fa fa-circle fa-stack-2x fa-inverse"></i>
								<i class="fa fa-youtube fa-stack-1x"></i>
							</a>
						</li>
						<li class="fa-stack fa-2x">
							<a href="#">
								<i class="fa fa-circle fa-stack-2x fa-inverse"></i>
								<i class="fa fa-twitter fa-stack-1x"></i>
							</a>
						</li>
					</ul>
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</section>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
