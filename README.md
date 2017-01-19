# wp-update-endpoints
Adds additional endpoints to the WP REST API to expose the number of plugin and theme upgrades available

## Installation

* Upload the plugin directory to to the '/wp-content/plugins/' directory
* Activate the plugin through the 'Plugins' menu in WordPress
* View the number of available updates from the frontend at either /wp-json/updates/v1/plugins or /wp-json/updates/v1/themes

## Roadmap

* Only allow secure connections to avoid prying eyes
* List out the names of plugins/themes available to update
* Add /wp-json/updates/v1/core to get core update notifications
