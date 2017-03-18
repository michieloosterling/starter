<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<header class="entry-header">
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
	
			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php strt_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
	
			<?php if( ! is_single() || ! class_exists( 'acf' ) || ! get_field('hide_featured_image') ) { ?>
				<?php if ( has_post_thumbnail() ) { ?>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('ultrawide_medium'); ?>
					</a>
				<?php } ?>
			<?php } ?>
	
		</header><!-- .entry-header -->

		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'strt' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'strt' ),
				'after'  => '</div>',
			) );
		?>

		<footer class="entry-footer">
			<?php strt_entry_footer(); ?>
		</footer><!-- .entry-footer -->

	</div><!-- .entry-content -->

</article><!-- #post-## -->
