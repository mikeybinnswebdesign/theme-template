<?php
/**
 * Handles loading of stylesheets and javascript files.
 *
 * @package %%THEME_NAMESPACE%%
 */

/**
 * Enqueue stylesheets and script files
 *
 * This function automatically enqueues files from the relevant folders and enqueues hashed files correctly.
 */
function enqueue_files() {
	$js_files = new DirectoryIterator( get_template_directory() . '/assets/js' );
	foreach ( $js_files as $file ) {
		if ( pathinfo( $file, PATHINFO_EXTENSION ) === 'js' ) {
			$full_name = basename( $file );
			$name = substr( basename( $full_name ), 0, strpos( basename( $full_name ), '.' ) );
			switch ( $name ) {
				case 'site':
					$deps = array( 'wp-dom-ready' );
					break;

				default:
					$deps = array();
					break;
			}
			wp_enqueue_script( $name, get_template_directory_uri() . '/assets/js/' . $full_name, $deps, null, false ); // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
		}
	}
	$css_files = new DirectoryIterator( get_template_directory() . '/assets/css' );
	foreach ( $css_files as $file ) {
		if ( pathinfo( $file, PATHINFO_EXTENSION ) === 'css' ) {
			$full_name = basename( $file );
			$name = substr( basename( $full_name ), 0, strpos( basename( $full_name ), '.' ) );
	
			switch ( $name ) {
				default:
					$deps = array();
					break;
			}
			wp_enqueue_style( $name, get_template_directory_uri() . '/assets/css/' . $full_name, $deps, null, 'all' ); // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
		}
	}
}
add_action( 'wp_enqueue_scripts', 'enqueue_files' );

/**
 * Defer JS files.
 *
 * Deferring JS files is good for performance. It allows the browser to start downloading the file early (in the head) but doesn't block the HTML rendering and instead loads the JS afterwards.
 *
 * @param string $tag this is the tag to be filtered.
 * @param string $handle this is the name for the script as set when enqueued.
 * @param string $src this is the contents of the src attribute in the tag.
 */
function defer_scripts( $tag, $handle, $src ) {
	$defer = array(
		'site',
	);
	if ( in_array( $handle, $defer, true ) ) {
		$tag = str_replace( $src, $src . '" defer="defer', $tag );
	}

	return $tag;
}
add_filter( 'script_loader_tag', 'defer_scripts', 10, 3 );
