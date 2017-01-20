<?php
/*
Plugin Name: WP Updates Endpoint
Plugin URI: http://graphicscove.io/updates-endpoint
Description: Adds additional endpoints to the WP REST API to expose the number of plugin and theme upgrades available
Author: Steven Noble
Author URI: http://graphicscove.com
Version: 0.0.2
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Require core files to get the data we need
require_once ABSPATH . 'wp-admin/includes/update.php';
require_once ABSPATH . 'wp-admin/includes/plugin.php';

// Create the enpoint URLs for core, plugins and themes
function wp_register_update_api() {
	// Add updates/v1/core route
	// URL: /wp-json/updates/v1/core
	register_rest_route( 'updates/v1', '/core/', array(
		'methods' => 'GET',
		'callback' => 'wp_get_coreCount',
	) );

	// Add updates/v1/plugins route
	// URL: /wp-json/updates/v1/plugins
	register_rest_route( 'updates/v1', '/plugins/', array(
		'methods' => 'GET',
		'callback' => 'wp_get_pluginCount',
	) );

	// Add updates/v1/themes route
	// URL: /wp-json/updates/v1/themes
	register_rest_route( 'updates/v1', '/themes/', array(
		'methods' => 'GET',
		'callback' => 'wp_get_themeCount',
	) );
}

// Add our function to the REST API
add_action( 'rest_api_init', 'wp_register_update_api' );

// Return all core updates
function wp_get_coreCount() {
	$updates_core = get_core_updates();
	return $updates_core;
}

// Return all plugin updates
function wp_get_pluginCount() {
	$updates_plugin = get_plugin_updates();
	return $updates_plugin;
}

// Return all theme updates
function wp_get_themeCount() {
	$updates_theme = get_theme_updates();
	return $updates_theme;
} ?>
