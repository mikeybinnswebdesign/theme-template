<?php
/**
 * A place for misc. WP actions.
 *
 * @package %%THEME_NAMESPACE%%
 */

namespace %%THEME_NAMESPACE%%\actions;

/**
 * Remove comments from the WP menu.
 */
function remove_menus() {
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', __NAMESPACE__ . '\\remove_menus' );
