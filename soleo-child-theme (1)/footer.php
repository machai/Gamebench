<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Soleo
 */

?>

	<footer id="colophon" class="site-footer container">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'soleo-child-theme' ) ); ?>">

			</a>
			<span class="sep"> </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'soleo-child-theme' ), 'soleo-child-theme', '<a href="https://www.linkedin.com/in/machai-bulawayo-1891a5122/">Machai</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

 <?php wp_footer(); ?>

</body>
</html>
