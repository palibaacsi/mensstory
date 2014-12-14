<?php
/*
Plugin Name: SIS Accordion
Plugin URI: https://wordpress.org/plugins/sis-accordion/
Description: This plugin will displays collapsible content panels for presenting information in a limited amount of space.
Author: Sayful Islam
Author URI: http://sayful.net
Version: 2.1
*/
// Set up our WordPress Plugin
function sis_accordion_check_WP_ver()
{
	$options_array = array(
      	'collapsible' => 'true', 
        'active' => '0',
        'event' => 'click',
        'heightstyle' => 'content',
        'headericon' => 'ui-icon-plusthick',
        'activeheadericon' => 'ui-icon-minusthick',
    );
	if ( get_option( 'sis_accordion_settings' ) !== false ) {
		// The option already exists, so we just update it.
      	update_option( 'sis_accordion_settings', $options_array );
   } else{
   		// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
   		add_option( 'sis_accordion_settings', $options_array );
   }
}
register_activation_hook( __FILE__, 'sis_accordion_check_WP_ver' );

//register our settings.
function register_sis_accordion_settings(){
	register_setting('sis_accordion_settings','sis_accordion_settings');
}
add_action( 'admin_init', 'register_sis_accordion_settings' );

/*Plugin options page */
function sis_accordion_custom_menu_page(){
    add_options_page( 'Accordion Settings', 'Accordion', 'manage_options', 'sis-accordion/accordion-options.php');
}
add_action( 'admin_menu', 'sis_accordion_custom_menu_page' );


/*Plugin Activation hook*/
function sis_accordion_activation_hook(){
	$options = get_option( 'sis_accordion_settings' );
	?><script type="text/javascript">
		jQuery(function() {
			var icons = {
				header: "<?php echo $options['headericon']; ?>",
				activeHeader: "<?php echo $options['activeheadericon']; ?>"
			};
			jQuery( "#accordion" ).accordion({
				collapsible: <?php echo $options['collapsible']; ?>,
				active: <?php echo $options['active']; ?>,
				heightStyle: "<?php echo $options['heightstyle']; ?>",
				event: "<?php echo $options['event']; ?>",
				icons: icons,
			});
		});
	</script><?php
}
add_action('wp_footer','sis_accordion_activation_hook');

/* Adding Latest jQuery from Wordpress plugin */
function sis_accordion_plugin_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('jquery-ui-widget');
	wp_enqueue_script('jquery-ui-accordion');
	
	wp_enqueue_style('sis_accordion_custom_style',plugins_url( '/css/jquery-ui.min.css' , __FILE__ ));
}
add_action('init', 'sis_accordion_plugin_scripts');


/* Add Accordion Shortcode Button on Post Visual Editor */

function sisaccordion_button() {
	add_filter ("mce_external_plugins", "sisaccordion_button_js");
	add_filter ("mce_buttons", "sisaccordionb");
}

function sisaccordion_button_js($plugin_array) {
	$plugin_array['sisaccbutton'] = plugins_url('js/accordian-button.js', __FILE__);
	return $plugin_array;
}

function sisaccordionb($buttons) {
	array_push ($buttons, 'sisaccordiontriger');
	return $buttons;
}
add_action ('init', 'sisaccordion_button'); 




/* Generates Old Accordion Shortcode */
function sis_accordion_main($atts, $content = null) {
	return ('<div id="accordion">'.do_shortcode($content).'</div>');
}
add_shortcode ("sisaccordion", "sis_accordion_main");

function sis_accordion_toggles($atts, $content = null) {
	extract(shortcode_atts(array(
        'title'      => '',
        'desc'      => ''
    ), $atts));
	
	return ('<h3>' .$title. '</h3><div>' .$desc. '</div>');
}
add_shortcode ("sistoggle", "sis_accordion_toggles");

/* Generates New Accordion Shortcode */
function sis_accordion_main_new($atts, $content = null) {

	extract(shortcode_atts(array(
        'id'      			=> 'accordion',
        'collapsible'      	=> 'true',
        'active'      		=> '0',
        'event'				=> 'click',
        'heightstyle'      	=> 'content',
        'headericons'      	=> 'ui-icon-plusthick',
        'activeheadericons'	=> 'ui-icon-minusthick',
    ), $atts));

	return ('<div id="'.$id.'">'.do_shortcode($content).'</div>
		<script>
			jQuery(function() {
				var icons = {
					header: "'.$headericons.'",
					activeHeader: "'.$activeheadericons.'"
				};
				jQuery( "#'.$id.'" ).accordion({
					collapsible: '.$collapsible.',
					active: '.$active.',
					heightStyle: "'.$heightstyle.'",
					event: "'.$event.'",
					icons: icons,
				});
			});
		</script>');
}
add_shortcode ("accordion", "sis_accordion_main_new");

function sis_accordion_toggles_new($atts, $content = null) {
	extract(shortcode_atts(array(
        'title'      => '',
    ), $atts));
	
	return ('<h3>' .$title. '</h3><div>' .$content. '</div>');
}
add_shortcode ("item", "sis_accordion_toggles_new");

// Register Custom Post Type
function sis_accordion_custom_post_type() {

	$labels = array(
		'name'                => _x( 'Accordions', 'Post Type General Name', 'accordion' ),
		'singular_name'       => _x( 'Accordion', 'Post Type Singular Name', 'accordion' ),
		'menu_name'           => __( ' Accordion', 'accordion' ),
		'parent_item_colon'   => __( 'Parent  Accordion Item:', 'accordion' ),
		'all_items'           => __( 'All  Accordion Items', 'accordion' ),
		'view_item'           => __( 'View Accordion Item', 'accordion' ),
		'add_new_item'        => __( 'Add New Accordion Item', 'accordion' ),
		'add_new'             => __( 'Add New', 'accordion' ),
		'edit_item'           => __( 'Edit Accordion Item', 'accordion' ),
		'update_item'         => __( 'Update Accordion Item', 'accordion' ),
		'search_items'        => __( 'Search Accordion Item', 'accordion' ),
		'not_found'           => __( 'Not found', 'accordion' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'accordion' ),
	);
	$args = array(
		'label'               => __( 'sis_accordion', 'accordion' ),
		'description'         => __( 'Post Type Description', 'accordion' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => ''.plugins_url( 'images/accordion.png' , __FILE__ ).'',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'sis_accordion', $args );

}

// Hook into the 'init' action
add_action( 'init', 'sis_accordion_custom_post_type', 0 );

/* accordion Loop */
function sis_get_accordion(){
	$accordion= '<div id="accordion">';
	$accefs_query= "post_type=sis_accordion&posts_per_page=-1";
	query_posts($accefs_query);
	if (have_posts()) : while (have_posts()) : the_post(); 
		$accordion.='<h3>'.get_the_title().'</h3><div>'.get_the_content().'</div>';
	endwhile; endif; wp_reset_query();
	$accordion.= '</div>';
	return $accordion;
}

/**add the shortcode for the accordion- for use in editor**/
function sis_insert_accordion($atts, $content=null){
	$accordion= sis_get_accordion();
	return $accordion;
}
add_shortcode('all-accordion', 'sis_insert_accordion');