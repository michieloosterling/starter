<?php
/*--------------------------------------------------------------
# Theme setup
--------------------------------------------------------------*/
if ( ! function_exists( 'strt_setup' ) ) :
function strt_setup() {
	load_theme_textdomain( 'strt', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'strt' ),
	) );
	add_theme_support( 'post-formats', array(
		'gallery',
		'image',
		'video',
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_image_size( 'standard_small', 560, 373, true );
	add_image_size( 'standard_medium', 1160, 774, true ); 
	add_image_size( 'standard_large', 2320, 1547, true ); 
	
	add_image_size( 'wide_small', 560, 315, true );
	add_image_size( 'wide_medium', 1160, 652, true ); 
	add_image_size( 'wide_large', 2320, 1305, true ); 
	
	add_image_size( 'ultrawide_small', 560, 240, true );
	add_image_size( 'ultrawide_medium', 1160, 497, true ); 
	add_image_size( 'ultrawide_large', 2320, 994, true ); 

}
endif;
add_action( 'after_setup_theme', 'strt_setup' );


/*--------------------------------------------------------------
# Make custom image sizes selectable in Admin
--------------------------------------------------------------*/
function strt_sizes( $sizes ) {
	unset( $sizes['thumbnail']);
	unset( $sizes['medium']);
	unset( $sizes['large']);
	return array_merge( $sizes, array(
		'standard_small' => __( 'Standard Small' , 'strt' ),
		'standard_medium' => __( 'Standard Medium' , 'strt' ),
		'standard_large' => __( 'Standard Large' , 'strt' ),
		'wide_small' => __( 'Wide Small' , 'strt' ),
		'wide_medium' => __( 'Wide Medium' , 'strt' ),
		'wide_large' => __( 'Wide Large' , 'strt' ),
	));
}
add_filter( 'image_size_names_choose', 'strt_sizes' );


/*--------------------------------------------------------------
# Content width
--------------------------------------------------------------*/
function strt_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'strt_content_width', 1160 );
}
add_action( 'after_setup_theme', 'strt_content_width', 0 );


/*--------------------------------------------------------------
# Widgets
--------------------------------------------------------------*/
function strt_widgets_init() {
	register_sidebar( array(
		'name' => esc_html__( 'Page Sidebar', 'strt' ),
		'id' => 'sidebar-1',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Blog Sidebar', 'strt' ),
		'id' => 'sidebar-2',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer 1', 'strt' ),
		'id' => 'footer-1',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer 2', 'strt' ),
		'id' => 'footer-2',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer 3', 'strt' ),
		'id' => 'footer-3',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
	) );
}
add_action( 'widgets_init', 'strt_widgets_init' );


/*--------------------------------------------------------------
# Enqueue JS + CSS
--------------------------------------------------------------*/
function strt_enqueue_scripts() {
	wp_enqueue_style( 'strt-style', get_template_directory_uri() . '/stylesheets/style-min.css', array(), null );
	wp_enqueue_script( 'strt-scripts', get_template_directory_uri() . '/js/strt-scripts-min.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'strt_enqueue_scripts' );


// Add CSS to wp_head
function strt_inline_css() {
	$css = file_get_contents( get_template_directory() . '/stylesheets/style-min.css');
	echo '<style>' . $css . '</style>';
}
// add_action( 'wp_head', 'strt_inline_css', 999 );


// Add scripts to wp_footer
function strt_inline_scripts() {
	$scripts = file_get_contents( get_template_directory() . '/js/strt-scripts-min.js');
	echo '<script>' . $scripts . '</script>';
}
// add_action( 'wp_footer', 'strt_inline_scripts', 999 );


/*--------------------------------------------------------------
# Includes
--------------------------------------------------------------*/
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/cleanup.php';
require get_template_directory() . '/inc/icon-functions.php';
require get_template_directory() . '/inc/social-widget.php';


/*--------------------------------------------------------------
# ACF
--------------------------------------------------------------*/
require get_template_directory() . '/inc/acf-options.php';
require get_template_directory() . '/inc/acf-layouts.php';


/*--------------------------------------------------------------
# Custom login logo
--------------------------------------------------------------*/
function strt_login_logo() {
	echo '<style type="text/css">h1 a { 
		background-image: url('.get_template_directory_uri().'/img/starter-logo@2x.png)!important; 
		background-size: 320px!important; 
		height: 80px!important; 
		width: 320px!important;
	}</style>';
}
add_action('login_head', 'strt_login_logo');


/*--------------------------------------------------------------
# Gravityforms 
--------------------------------------------------------------*/
// Place Gravityforms jquery in footer from https://bjornjohansen.no/load-gravity-forms-js-in-footer
add_filter( 'gform_init_scripts_footer', '__return_true' );
function wrap_gform_cdata_open( $content = '' ) {
	$content = 'document.addEventListener( "DOMContentLoaded", function() { ';
	return $content;
}
function wrap_gform_cdata_close( $content = '' ) {
	$content = ' }, false );';
	return $content;
}
add_filter( 'gform_cdata_open', 'wrap_gform_cdata_open' );
add_filter( 'gform_cdata_close', 'wrap_gform_cdata_close' );


//  Remove Gravity Forms 'Add Form' button
if( !current_user_can('administrator') ) {
	add_filter( 'gform_display_add_form_button', '__return_false');
}

//  Enable 'Hide labels' option in Gravity Forms
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

// Add all Gravity Forms capabilities to Editor role
function grant_gforms_editor_access() {
	$role = get_role( 'editor' );
	$role -> add_cap( 'gform_full_access' );
}
add_action( 'after_switch_theme', 'grant_gforms_editor_access' );

// Set tabindex to 0 al all Gravity Forms
function change_tabindex( $tabindex, $form ) {
	return 0;
}
add_filter( 'gform_tabindex', 'change_tabindex' , 10, 2 );


/*--------------------------------------------------------------
# WP Admin
--------------------------------------------------------------*/
// Add WP Editor style
function strt_editor_styles() {
	add_editor_style( 'stylesheets/editor-style.css' );
}
add_action( 'admin_init', 'strt_editor_styles' );

// Add WP Admin style
function strt_admin_style() {
	wp_enqueue_style('admin-styles', get_template_directory_uri().'/stylesheets/admin-style.css');
}
add_action('admin_enqueue_scripts', 'strt_admin_style');

// Remove admin menu items
if( !current_user_can('administrator') ) {
	function remove_menus(){
		remove_menu_page( 'edit-comments.php' );	 // Comments
		remove_menu_page( 'tools.php' );			 // Tools
		global $submenu; 
		unset($submenu['themes.php'][6]);			 // Customizer
	}
	add_action( 'admin_menu', 'remove_menus' );
}

// Grant editor access to widgets 
$role = get_role('editor'); 
$role->add_cap('edit_theme_options');


/*--------------------------------------------------------------
# Button shortcode
--------------------------------------------------------------*/
function strt_button_shortcode( $atts ) {
	extract( shortcode_atts(
		array(
			'text' => 'button text',
			'link' => '#',
			'align' => '',
			'class' => '',
		), $atts )
	);
	return '<div class="btn_container ' . $align . '"><span><a href="' . $link . '" class="button ' . $class . '">' . $text . '</a></span></div>';
}
add_shortcode( 'button', 'strt_button_shortcode' );


/*--------------------------------------------------------------
# Custom Excerpt Length
--------------------------------------------------------------*/
function strt_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'strt_excerpt_length', 999 );


/*--------------------------------------------------------------
# Custom Excerpt "read more" string
--------------------------------------------------------------*/
function strt_excerpt_more( $more ) {
	return sprintf( '... <a class="read-more" href="%1$s">%2$s</a>',
		get_permalink( get_the_ID() ), __( 'Read More', 'strt' )
	);
}
add_filter( 'excerpt_more', 'strt_excerpt_more' ); 


/*--------------------------------------------------------------
# Prevent page scroll when clicking the More link
--------------------------------------------------------------*/
function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );


/*--------------------------------------------------------------
# Add wrapper to embeds to make them responsive with CSS
--------------------------------------------------------------*/
function strt_oembed_html($cache, $url, $attr, $post_id) {
	if (strpos($cache, 'youtube') || strpos($cache, 'vimeo') !== false) {
		return '<div class="embed-responsive">' . $cache . '</div>';
	} else {
		return $cache;
	}
}
add_filter('embed_oembed_html', 'strt_oembed_html', 99, 4);


/*--------------------------------------------------------------
# Add link protocols for Social Menu
--------------------------------------------------------------*/
function strt_allow_protocol( $protocols ){
	$protocols[] = 'skype';
	return $protocols;
}
add_filter( 'kses_allowed_protocols' , 'strt_allow_protocol' );


/*--------------------------------------------------------------
# Remove Gallery Inline Styling
--------------------------------------------------------------*/
add_filter( 'use_default_gallery_style', '__return_false' );


/*--------------------------------------------------------------
# Remove paragraph tags from images in WP and ACF
--------------------------------------------------------------*/
function filter_ptags_on_images($content) {
	$content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
	return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}
add_filter('acf_the_content', 'filter_ptags_on_images', 9999);
add_filter('the_content', 'filter_ptags_on_images', 9999);


/*--------------------------------------------------------------
# Add descriptions to menu items
--------------------------------------------------------------*/
function strt_nav_description( $item_output, $item, $depth, $args ) {
	if ( $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}
	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'strt_nav_description', 10, 4 );
