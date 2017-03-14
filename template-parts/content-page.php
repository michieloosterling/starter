<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content"><?php 

		if( ! class_exists( 'acf' ) || ! get_field('hide_title') ): ?> 
		<header class="entry-header"><?php
			the_title( '<h1 class="entry-title">', '</h1>');
			if( class_exists( 'acf' ) && get_field( 'subheading' ) ) { 
				echo '<p class="entry-subtitle">' . get_field( 'subheading' ) . '</p>';
			} ?>
		</header><?php 
		endif;

		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'strt' ),
			'after'  => '</div>',
		) ); ?> 
	</div><?php 

	if( class_exists( 'acf' ) ) { get_template_part( 'template-parts/content', 'acf' ); } ?> 

</article>