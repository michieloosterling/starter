<?php // Template name: Sidebar
	get_header(); ?> 
	<div class="content-area">
		<main id="main" class="site-main"><?php

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; 
			?> 
		</main>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer();