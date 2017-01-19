=== Plugin Name ===
Contributors: graphicscove
Tags: REST api, Updates, Plugin Updates, Theme Updates
Requires at least: 4.7
Tested up to: 4.7.1
Stable tag: 0.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds additional endpoints to the WP REST API to expose the number of plugin and theme upgrades available

== Description ==

Adds additional endpoints to the WP REST API to expose the number of plugin and theme upgrades available

== Installation ==

1. Upload the plugin directory to to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. View the number of available updates from the frontend at either /wp-json/updates/v1/plugins or /wp-json/updates/v1/themes

== Frequently Asked Questions ==

None

== Screenshots ==

== Changelog ==

= 1.0 =
* Initial version.

== Roadmap ==

* Only allow secure connections to avoid prying eyes
* List out the names of plugins/themes available to update
* Add /wp-json/updates/v1/core to get core update notifications
