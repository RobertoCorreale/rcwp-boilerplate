<?php

require_once ('vendor/autoload.php');

/** Various clean up functions */
require_once('library/cleanup.php');

/** Required for Foundation to work properly */
require_once('library/foundation.php');

/** Register all navigation menus */
require_once('library/navigation.php');

/** Add menu walkers for top-bar and off-canvas */
require_once('library/class-foundationpress-top-bar-walker.php');
require_once('library/class-foundationpress-mobile-walker.php');

/** Create widget areas in sidebar and footer */
//require_once('library/widget-areas.php');

/** Return entry meta information for posts */
require_once('library/entry-meta.php');

/** Enqueue scripts */
require_once('library/enqueue-scripts.php');

/** Add theme support */
require_once('library/theme-support.php');

/** Add Nav Options to Customer */
require_once('library/custom-nav.php');

/** Change WP's sticky post class */
//require_once('library/sticky-posts.php');

/** Configure responsive image sizes */
//require_once('library/responsive-images.php');

/** Gutenberg editor support */
require_once('library/gutenberg.php');

require_once ('library/content/custom-post-type.php');
require_once ('library/content/custom-taxonomy.php');

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );
