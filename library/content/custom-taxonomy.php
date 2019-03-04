<?php
if (!function_exists('generate_taxonomy_label')) {
	function generate_taxonomy_label($singular, $plural = NULL)
	{
		if (!isset($plural)) {
			$plural = $singular;
		}
		$labels = array(
			'name' => _x($singular, 'Tassonomia', 'rcwp'),
			'singular_name' => _x($plural, 'Tassonomia', 'rcwp'),
			'search_items' => __('Search ' . $plural),
			'all_items' => __('All ' . $plural),
			'parent_item' => __('Parent Genre' . $plural),
			'parent_item_colon' => __('Parent Genre:' . $plural),
			'edit_item' => __('Edit Genre' . $plural),
			'update_item' => __('Update Genre' . $plural),
			'add_new_item' => __('Add New ' . $singular),
			'new_item_name' => __('New Name'),
			'menu_name' => __($plural),
		);
		return $labels;
	}
}

if (!function_exists('register_custom_taxonomy')) {
	function register_custom_taxonomy() {
		/*
		register_taxonomy('numerocategory', array('numero'),
			array(
				'labels' 				=> generate_taxonomy_label('Categoria'),
				'hierarchical' 	=> true,
				'public' 				=> true,
				'show_ui' 			=> true,
				'show_admin_column' => true,
				'show_in_nav_menus' => false,
				'show_tagcloud' => false,
				'rewrite' 			=> false,
				'query_var' 		=> true,
				'capabilities' 	=> ['manage_terms', 'edit_terms', 'delete_terms', 'assign_terms']
			)
		);
		*/
	}
}

add_action('init', 'register_custom_taxonomy', 0);
