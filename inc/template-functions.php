<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package kapitalno
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function kapitalno_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'kapitalno_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function kapitalno_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'kapitalno_pingback_header');

if (!function_exists('get_home_link')) {
	function get_home_link()
	{
		if (is_front_page()) {
			return home_url();
		} else {
			return '#';
		}
	}
}


if (!function_exists('get_vd')) {
	function get_vd($vd)
	{
		echo '<pre>';
		var_dump($vd);
		echo '</pre>';
	}
}

if (!function_exists('get_crb_contacts')) {
	function get_crb_contacts()
	{
		return array(
			'email' => carbon_get_theme_option('kapitalno_email'),
			'phone' => carbon_get_theme_option('kapitalno_phone'),
			'phone_raw' => '+' . preg_replace('/\D/i', '', carbon_get_theme_option('kapitalno_phone')),
			'address' => carbon_get_theme_option('kapitalno_address'),
			'instagram' => carbon_get_theme_option('kapitalno_instagram'),
			'facebook' => carbon_get_theme_option('kapitalno_facebook'),
			'vk' => carbon_get_theme_option('kapitalno_vk'),
		);
	}
}
