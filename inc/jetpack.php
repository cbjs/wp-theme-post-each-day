<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package post_each_day
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function post_each_day_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'post_each_day_jetpack_setup' );
