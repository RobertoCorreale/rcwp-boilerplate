<?php

if ( ! function_exists( 'foundationpress_gutenberg_support' ) ) :
	function foundationpress_gutenberg_support() {

    // Add foundation color palette to the editor
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'Primary Color', 'rcwp' ),
            'slug' => 'primary',
            'color' => '#1779ba',
        ),
        array(
            'name' => __( 'Secondary Color', 'rcwp' ),
            'slug' => 'secondary',
            'color' => '#767676',
        ),
        array(
            'name' => __( 'Success Color', 'rcwp' ),
            'slug' => 'success',
            'color' => '#3adb76',
        ),
        array(
            'name' => __( 'Warning color', 'rcwp' ),
            'slug' => 'warning',
            'color' => '#ffae00',
        ),
        array(
            'name' => __( 'Alert color', 'rcwp' ),
            'slug' => 'alert',
            'color' => '#cc4b37',
        )
    ) );

	}

	add_action( 'after_setup_theme', 'foundationpress_gutenberg_support' );
endif;
