<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">

		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php strt_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header>
		
		<?php the_excerpt(); ?>

		<footer class="entry-footer">
			<?php strt_entry_footer(); ?>
		</footer>

	</div>
</article>