<?php
/**
 * A place for misc. WP filters.
 *
 * @package %%THEME_NAMESPACE%%
 */

namespace %%THEME_NAMESPACE%%\filters;

/**
 * Remove archive labels.
 *
 * @param  string $title Current archive title to be displayed.
 * @return string        Modified archive title to be displayed.
 */
function change_default_archive_titles( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	} elseif ( is_home() ) {
		$title = single_post_title( '', false );
	}
	
	return $title;
}
add_filter( 'get_the_archive_title', __NAMESPACE__ . '\\change_default_archive_titles' );
