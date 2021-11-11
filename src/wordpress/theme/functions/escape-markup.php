<?php
/**
 * A place to define escape markup for safe echoing of content.
 *
 * @package %%THEME_NAMESPACE%%
 */

namespace %%THEME_NAMESPACE%%\esc;

/**
 * Returns select field allowed markup
 *
 * @return array
 */
function select_field() {
	return array(
		'div' => global_safe_tags(),
		'label' => global_safe_tags(),
		'p' => global_safe_tags(),
		'abbr' => global_safe_tags(),
		'span' => global_safe_tags(),
		'select' => array_merge(
			array(
				'name' => true,
				'required' => true,
				'disabled' => true,
			),
			global_safe_tags()
		),
		'option' => array(
			'value' => true,
			'selected' => true,
		),
	);
}

/**
 * Returns text field allowed markup
 *
 * @return array
 */
function text_field() {
	return array(
		'div' => global_safe_tags(),
		'label' => global_safe_tags(),
		'p' => global_safe_tags(),
		'abbr' => global_safe_tags(),
		'span' => global_safe_tags(),
		'input' => array_merge(
			array(
				'type' => true,
				'name' => true,
				'value' => true,
				'required' => true,
				'minlength' => true,
				'maxlength' => true,
				'pattern' => true,
			),
			global_safe_tags()
		),
	);
}

/**
 * Returns hidden field allowed markup
 *
 * @return array
 */
function hidden_field() {
	return array(
		'input' => array(
			'type' => true,
			'name' => true,
			'value' => true,
			'id' => true,
		),
	);
}

/**
 * Returns textarea allowed markup
 *
 * @return array
 */
function textarea_field() {
	return array(
		'div' => global_safe_tags(),
		'label' => global_safe_tags(),
		'p' => global_safe_tags(),
		'span' => global_safe_tags(),
		'textarea' => array_merge(
			array(
				'name' => true,
				'required' => true,
				'rows' => true,
				'cols' => true,
			),
			global_safe_tags()
		),
	);
}

/**
 * Returns link allowed markup
 *
 * @return array
 */
function links() {
	return array(
		'a' => array_merge(
			array(
				'href' => array(),
				'target' => array(),
				'rel' => array(),
			),
			global_safe_tags()
		),
	);
}

/**
 * Returns button allowed markup
 *
 * @return array
 */
function button() {
	return array(
		'button' => global_safe_tags(),
	);
}

/**
 * Returns image allowed markup
 *
 * @return array
 */
function images() {
	return array(
		'img' => array_merge(
			array(
				'src' => array(),
				'width' => array(),
				'height' => array(),
				'alt' => array(),
				'loading' => array(),
				'srcset' => array(),
				'sizes' => array(),
			),
			global_safe_tags()
		),
	);
}

/**
 * Returns pagination allowed markup
 *
 * @return array
 */
function pagination() {
	return array(
		'p' => array(),
		'em' => array(),
		'strong' => array(),
		'br' => array(),
		'span' => array(
			'id' => array(),
			'class' => array(),
			'aria-current' => array(),
		),
		'div' => array(
			'class' => array(),
		),
		'a' => array(
			'class' => array(),
			'href' => array(),
		),
		'nav' => array(
			'class' => array(),
			'role' => array(),
			'aria-label' => array(),
		),
		'h2' => array(
			'class' => array(),
		),
	);
}

/**
 * Returns error display allowed markup
 *
 * @return array
 */
function error() {
	return array(
		'p' => global_safe_tags(),
		'em' => global_safe_tags(),
		'strong' => global_safe_tags(),
		'div' => global_safe_tags(),
		'ul' => global_safe_tags(),
		'li' => global_safe_tags(),
	);
}

/**
 * Returns SVG allowed markup
 *
 * @return array
 */
function svg() {
	return array(
		'svg' => array_merge(
			array(
				'xmlns' => true,
				'width' => true,
				'height' => true,
				'viewbox' => true, // <= Must be lower case!
				'fill' => true,
			),
			global_safe_tags()
		),
		'g' => array(
			'fill' => true,
			'clip-path' => true,
		),
		'rect' => array(
			'x' => true,
			'y' => true,
			'width' => true,
			'height' => true,
			'fill' => true,
			'rx' => true,
			'stroke' => true,
			'transform' => true,
		),
		'path'  => array(
			'd' => true,
			'stroke' => true,
			'stroke-width' => true,
			'stroke-linecap' => true,
			'stroke-linejoin' => true,
			'fill' => true,
			'class' => true,
			'opacity' => true,
		),
		'lineargradient' => array(
			'gradientunits' => true,
			'id' => true,
			'x1' => true,
			'y1' => true,
			'x2' => true,
			'y2' => true,
			'gradienttransform' => true,
		),
		'stop' => array(
			'offset' => true,
			'stop-color' => true,
		),
		'style' => true,
		'defs' => true,
		'clipPath' => array(
			'id' => true,
		),
		'circle' => array(
			'cx' => true,
			'cy' => true,
			'r' => true,
			'fill' => true,
			'stroke' => true,
			'stroke-dasharray' => true,
			'stroke-width' => true,
		),
		'animatetransform' => array(
			'attributename' => true,
			'dur' => true,
			'keytimes' => true,
			'repeatcount' => true,
			'type' => true,
			'values' => true,
		),
	);
}

/**
 * Returns global allowed markup
 *
 * @return array
 */
function global_safe_tags() {
	return array(
		'aria-describedby' => true,
		'aria-details' => true,
		'aria-label' => true,
		'aria-labelledby' => true,
		'aria-hidden' => true,
		'class' => true,
		'id' => true,
		'style' => true,
		'title' => true,
		'role' => true,
		'data-*' => true,
	);
}
