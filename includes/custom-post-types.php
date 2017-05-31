<?php
function customIcons_customPostTypes(){
?>
 <style>
	  #adminmenu .menu-icon-advertise div.wp-menu-image:before { content: "\f319"; }
 </style>
<?php }
	add_action( 'admin_head', 'customIcons_customPostTypes' );
	
	/*******************************
		DEFINE CONSTANTS
	*******************************/
	
	define("PRODUCT_CAT", "product-category");
	
	// -- START post type PRODUCT
	add_action('init', 'lym_postTypeProduct', 1); // Set priority to avoid plugin conflicts
	function lym_postTypeProduct() { // A unique name for our function
		$labels = array( // Used in the WordPress admin
			'name' 			=> _x('Advertise', 'post type general name'),
			'singular_name' => _x('Advertise', 'post type singular name'),
			'add_new' 		=> _x('Add Advertise', ''),
			'add_new_item' 	=> __('Add Advertise'),
			'edit_item' 	=> __('Edit Advertise'),
			'new_item' 		=> __('New Advertise'),
			'view_item' 	=> __('View the Advertise'),
			'search_items' 	=> __('Search for Advertise'),
			'not_found' 	=>  __('Nothing found'),
			'not_found_in_trash' => __('Nothing found in Trash')
		);
		$args = array(
			'labels' 		=> $labels, // Set above
			'public' 		=> true, // Make it publicly accessible
			'menu_icon' 	=> '',
			'hierarchical' 	=> false, // No parents and children here
			'menu_position' => 5, // Appear right below "Posts"
			'has_archive' 	=> 'advertise', // Activate the archive
			'supports' 		=> array('title'),
		);
		register_post_type( 'advertise', $args ); // Create the post type, use options above
	}
	// -- END post type PRODUCT