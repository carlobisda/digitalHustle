<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package digitalHustle
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				digitalhustle_posted_on();
				digitalhustle_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php digitalhustle_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			if ( is_home () || is_category() || is_archive() ) {
				the_excerpt('');
			} else {
			} // end of if statements
						
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'digitalhustle' ),
			'after'  => '</div>',
		) );

		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php digitalhustle_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
