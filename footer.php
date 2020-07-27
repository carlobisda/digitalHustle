<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package digitalHustle
 */

?>

</div><!-- #content -->

<nav class="navbar navbar-light bg-light">
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'digitalhustle' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'powered by %s', 'digitalhustle' ), 'wordpress' );
				?>
			</a>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'theme: %1$s by %2$s.', 'digitalhustle' ), 'digitalhustle', '<a href="http://carlobisda.com">carlobisda</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</nav>

<?php wp_footer(); ?>

	<!-- OPTIONAL JS, JQUERY 1ST, POPPER.JS, THEN BOOTSTRAP JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
