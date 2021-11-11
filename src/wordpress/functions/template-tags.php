<?php
/**
 * A place to define custom template tags.
 *
 * @package %%THEME_NAMESPACE%%
 */

namespace %%THEME_NAMESPACE%%\tags;

use WP_Error;

/**
 * Create markup for a WordPress error.
 *
 * @param WP_Error $the_error The WP_Error to output markup for.
 * 
 * @return string
 */
function get_error_markup( WP_Error $the_error ) {
	$markup = '';
	if ( count( $the_error->get_error_messages() ) > 1 ) {
		$markup = '<div class="error_bubble"><p class="error_title">' . esc_html__( 'Uh oh, something went wrong.', '%%THEME_NAME_SLUG%%' ) . '</p><p>' . esc_html__( 'Please rectify the following errors:', '%%THEME_NAME_SLUG%%' ) . '</p><ul>';
		foreach ( $the_error->get_error_messages() as $error_message ) {
			$markup .= '<li>' . esc_html( $error_message ) . '</li>';
		}
		$markup .= '</ul></div>';
	} elseif ( count( $the_error->get_error_messages() ) === 1 ) {
		$markup = '<div class="error_bubble"><p class="error_title">' . esc_html__( 'Uh oh, something went wrong.', '%%THEME_NAME_SLUG%%' ) . '</p>';
		$markup .= '<p>' . esc_html( $the_error->get_error_message() ) . '</p>';
		$markup .= '</div>';
	}
	return $markup;
}

/**
 * Echo markup for a WordPress error.
 *
 * @param WP_Error $the_error The WP_Error to echo markup for.
 *
 * @see function get_error_markup()
 * 
 * @return void
 */
function display_error( $the_error ) {
	echo wp_kses( get_error_markup( $the_error ), \%%THEME_NAMESPACE%%\esc\error() );
}
