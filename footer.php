	</div><?php

	if( ! class_exists( 'acf' ) || ! get_field('hide_footer') ) { 
	if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) { ?> 

	<footer id="colophon">
		<aside class="widget-area">
			<?php dynamic_sidebar( 'footer-1' ); ?>
			<?php dynamic_sidebar( 'footer-2' ); ?>
			<?php dynamic_sidebar( 'footer-3' ); ?>
		</aside>
	</footer><?php

	} } ?> 
	<div id="socket">
		<span>
			<?php echo date("Y") ?> &copy; <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php echo get_bloginfo('name'); ?></a>
			<span class="sep"> | </span>
			<?php echo get_bloginfo( 'description' ) ?> - <?php printf( esc_html__( 'Website by %1$s.', 'strt' ), '<a href="https://middelham.nl">Bas Middelham</a>' ); ?>
		</span>
	</div>

</div>

<?php wp_footer(); ?>

</body>
</html>
