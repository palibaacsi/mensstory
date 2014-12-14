<?
/*
if ( ! function_exists( 'quark_kid_setup' ) ) {
	function quark_kid_setup() {
		global $content_width;


		// Enable support for Custom Headers (or in our case, a custom logo)
		add_theme_support( 'custom-header', array(
				// Header image default
				'default-image' => trailingslashit( get_template_directory_uri() ) . 'images/logo.png',
				// Header text display default
				'header-text' => false,
				// Header text color default
				'default-text-color' => '000',
				// Flexible width
				'flex-width' => true,
				// Header image width (in pixels) => was 'width' => 300,
				'width' => 444,
				// Flexible height
				'flex-height' => true,
				// Header image height (in pixels)  => was 'width' => 80,
				'height' => 250
			) );

	}
}
add_action( 'after_setup_theme', 'quark_kid_setup' );

/ **
 * Register widgetized areas
 *
 * @since Quark 1.0 
 *
 * @return void
 */
function msp_quark_widgets_init() {

	register_sidebar( array(
			'name' => esc_html__( 'Banner Header', 'quark' ),
			'id' => 'bannerhdr',
			'description' => esc_html__( 'Banner Header', 'quark' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		) );

	register_sidebar( array(
			'name' => esc_html__( 'Front Page Mezzo Top', 'quark' ),
			'id' => 'mezzo-top',
			'description' => esc_html__( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'quark' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		) );

	register_sidebar( array(
			'name' => esc_html__( 'Front Page Mezzo Bottom', 'quark' ),
			'id' => 'mezzo-btm',
			'description' => esc_html__( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'quark' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		) );

	register_sidebar( array(
			'name' => esc_html__( 'Mezzo for Pages', 'quark' ),
			'id' => 'mezzo-page',
			'description' => esc_html__( 'Appears when using the optional Mezzo for Pages widget', 'quark' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		) );
	register_sidebar( array(
			'name' => esc_html__( 'Horizontal Left', 'quark' ),
			'id' => 'horiz-left',
			'description' => esc_html__( 'Appears when using the Horizontal Page template ', 'quark' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		) );
	register_sidebar( array(
			'name' => esc_html__( 'Horizontal Right', 'quark' ),
			'id' => 'horiz-right',
			'description' => esc_html__( 'Appears when using the Horizontal Page template ', 'quark' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		) );

/*
also remove 'left' from above name and id
	register_sidebar( array(
			'name' => esc_html__( 'Front Page Mezzo Right', 'quark' ),
			'id' => 'mezzo-right',
			'description' => esc_html__( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'quark' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		) );
*/
}
add_action( 'widgets_init', 'msp_quark_widgets_init' );

/* Removing Jetpack from end of loop*/
function jptweak_remove_share() {
    remove_filter( 'the_content', 'sharing_display',19 );
    remove_filter( 'the_excerpt', 'sharing_display',19 );
    if ( class_exists( 'Jetpack_Likes' ) ) {
        remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
    }
}
 
add_action( 'loop_start', 'jptweak_remove_share' );