<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="alternate" hreflang="<?php bloginfo( 'language' ); ?>" href="<?php echo esc_url( home_url() ); ?>" />
<link rel="preconnect" href="http://fonts.googleapis.com/" crossorigin>
<script>
	document.documentElement.className += ' wf-loading';
	WebFontConfig = {google:{families:['Open Sans:400,400i,600','Oswald:400']},timeout: 2000};
</script>
<?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'strt' ); ?></a>
	<div id="masthead" itemscope itemtype="http://schema.org/Organization">
		<header>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url">
				<span itemprop="name"><?php bloginfo( 'name' ); ?></span>
				<span itemprop="description"><?php echo get_bloginfo( 'description' ); ?></span>
				<img width="190" height="48" id="site-logo" itemprop="logo" src="<?php echo get_template_directory_uri() ?>/img/starter-logo.png" alt="Logo <?php bloginfo( 'name' ); ?>" srcset="<?php echo get_template_directory_uri() ?>/img/starter-logo@2x.png 2x">
			</a>
			<nav id="site-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span><?php esc_html_e( 'Menu', 'strt' ); ?></span></button><?php 
				wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?> 
			</nav>
		</header>
	</div>
	<div id="content">