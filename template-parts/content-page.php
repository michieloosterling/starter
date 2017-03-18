<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content"><?php 

		if( ! class_exists( 'acf' ) || ! get_field('hide_title') ): ?> 
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title() ?></h1><?php 
			if( class_exists( 'acf' ) && get_field( 'subheading' ) ) { ?> 
			<p class="entry-subtitle"><?php the_field( 'subheading' ) ?></p><?php 
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