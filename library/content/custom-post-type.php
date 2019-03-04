<?php

class CPT {
	public static $domain = 'rcwp';
	private static $defaults = [
		'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'author', 'page-attributes'],
		'menu_position' => 21,
		'menu_icon' => 'dashicons-store',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => true,
	];

	public function __construct() {
		$this->registerCustomPostType();
		//add_action('admin_menu', [$this,'removeDefaults']);
		//add_filter('redirect_canonical', [$this,'ep_no_redirect']);
	}

	public function ep_no_redirect($redirect_url) {
		if (is_404()) {
			return false;
		}
		return $redirect_url;
	}


	public function removeDefaults() {
		//remove_menu_page( 'index.php' );                   //Posts
		//remove_menu_page( 'edit.php' );                   //Posts
		//remove_menu_page( 'edit-comments.php' );          //Commenti
	}


	private function generateLabels($label) {
		$labels = array(
			'name' 					=> _x(ucfirst($label), 'custom post type label', self::$domain),
			'singular_name' => _x(ucfirst($label), 'Post Type Singular Name', self::$domain),
			'menu_name' 		=> __(ucfirst($label), self::$domain),
			'parent_item_colon' => __('Parent Item:', self::$domain),
			'all_items' 		=> __('Visualizza tutti ' . ucfirst($label), self::$domain),
			'view_item' 		=> __('Visualizza ' . ucfirst($label), self::$domain),
			'add_new_item' 	=> __('Aggiungi nuovo ' . ucfirst($label), self::$domain),
			'add_new' 			=> __('Aggiungi nuovo ' . ucfirst($label), self::$domain),
			'edit_item' 		=> __('Modifica ' . ucfirst($label), self::$domain),
			'update_item' 	=> __('Aggiorna ' . ucfirst($label), self::$domain),
			'search_items'	=> __('Cerca ' . ucfirst($label), self::$domain),
			'not_found' 		=> __('Nessun ' . ucfirst($label) . ' trovato', self::$domain),
			'not_found_in_trash' => __('No ' . ucfirst($label) . ' founded in trash', self::$domain),
		);
		return $labels;
	}

	private function registerCustomPostType() {
		/*register_post_type('numero', [
				'labels' => $this->generateLabels('Numeri'),
				'supports' => array('title', 'page-attributes', 'thumbnail', 'custom-fields', 'editor'),
				'menu_position' => 8,
				'menu_icon' => 'dashicons-cart',
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'query_var' => true,
				'rewrite' => [
					'slug' => 'archivio',
					'with_front' => false,
				],
				'capability_type' => 'post',
				'has_archive' => 'archivio',
				'hierarchical' => false
			]
		);*/
	}
}

$epcpt = new CPT();
add_post_type_support('page', 'excerpt');
