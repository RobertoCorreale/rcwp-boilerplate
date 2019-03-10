<?php

// Check to see if rev-manifest exists for CSS and JS static asset revisioning
//https://github.com/sindresorhus/gulp-rev/blob/master/integration.md

if ( ! function_exists( 'foundationpress_asset_path' ) ) :
	function foundationpress_asset_path( $filename ) {
		$filename_split = explode( '.', $filename );
		$dir            = end( $filename_split );
		$manifest_path  = dirname( dirname( __FILE__ ) ) . '/dist/assets/' . $dir . '/rev-manifest.json';

		if ( file_exists( $manifest_path ) ) {
			$manifest = json_decode( file_get_contents( $manifest_path ), true );
		} else {
			$manifest = array();
		}

		if ( array_key_exists( $filename, $manifest ) ) {
			return $manifest[ $filename ];
		}
		return $filename;
	}
endif;


if ( ! function_exists( 'foundationpress_scripts' ) ) :
	function foundationpress_scripts() {

		// Enqueue the main Stylesheet.
		wp_enqueue_style( 'main-stylesheet', get_stylesheet_directory_uri() . '/dist/assets/css/' . foundationpress_asset_path( 'app.css' ), array(), '2.10.4', 'all' );

		// Deregister the jquery version bundled with WordPress.
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );


		wp_enqueue_script('scrollMagic', "//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js", [], '1.0', false);
		wp_enqueue_script('scrollMagicGSAP', "//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.min.js", [], '1.0', false);
		wp_enqueue_script('TweenMax', "https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js", [], '1.0', false);
		wp_enqueue_script('CSSPlugin', "https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/plugins/CSSPlugin.min.js", [], '1.0', false);
		wp_enqueue_script('CSSRulePlugin', "https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/plugins/CSSRulePlugin.min.js", [], '1.0', false);

		wp_enqueue_script( 'foundation', get_stylesheet_directory_uri() . '/dist/assets/js/' . foundationpress_asset_path( 'app.js' ), [], '2.10.4', true );

		wp_localize_script('foundation', 'Calls', array(
			'url' => admin_url('admin-ajax.php'),
		));

}

	add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
endif;
