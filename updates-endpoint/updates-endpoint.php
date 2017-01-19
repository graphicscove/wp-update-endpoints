<?php
/*
Plugin Name: Updates Endpoint
Plugin URI: http://graphicscove.io/updates-endpoint
Description: Adds additional endpoints to the WP REST API to expose the number of plugin and theme upgrades available
Author: Steven Noble
Version: 0.0.1
Author URI: http://graphicscove.com
*/

// Create the enpoint URLs for plugins and themes
function wp_register_update_api() {
	// Add updates/v1/plugins route
	// URL: /wp-json/updates/v1/plugins
	register_rest_route( 'updates/v1', '/plugins/', array(
		'methods' => 'GET',
		'callback' => 'wp_get_pluginCount',
	) );

	// Add updates/v1/themess route
	// URL: /wp-json/updates/v1/themes
	register_rest_route( 'updates/v1', '/themes/', array(
		'methods' => 'GET',
		'callback' => 'wp_get_themeCount',
	) );
}

// Add our function to the REST API
add_action( 'rest_api_init', 'wp_register_update_api' );

// Require core files to get the data we need
require_once ABSPATH . 'wp-admin/includes/update.php';
require_once ABSPATH . 'wp-admin/includes/plugin.php';

// Return all plugin updates
function wp_get_pluginCount() {
	$updates_plugin = get_plugin_updates();
	$pluginCount = 0;
		foreach ($updates_plugin AS $plugin) {
			$pluginCount++;
		}
	return $pluginCount;
}

// Return all theme updates
function wp_get_themeCount() {
	$updates_theme = get_theme_updates();
	$themeCount = 0;
		foreach ($updates_theme AS $theme) {
			$themeCount++;
		}
	return $themeCount;
} ?>
