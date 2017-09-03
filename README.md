# wp-updates-endpoint
Adds additional endpoints to the WP REST API to expose the number of plugin and theme upgrades available

**NOTE** This plugin is in an alpha stage and is really just for testing what's possible with the API. I don't recommend using this on a production environment as people will be able to see when you're running older versions of plugins and potentially exploit this! You have been warned..

## Installation

* Upload the plugin directory to to the '/wp-content/plugins/' directory
* Activate the plugin through the 'Plugins' menu in WordPress
* View the number of available updates from the frontend at: /wp-json/updates/v1/core, /wp-json/updates/v1/plugins or /wp-json/updates/v1/themes

## Changelog

### 0.0.2
* Changed directory and plugin name
* Added an index.php to avoid directory listing
* Stopped the plugin file being loaded directly
* Added a route for /wp-json/updates/v1/core
* Corrected spelling in comment - 'themes' not 'themess'
* All routes now produce full json output rather than just the number of updates available

### 0.0.1
* Initial version.

## Roadmap

* Only allow secure connections to avoid prying eyes

## Contributions

Contributions are always welcome. I'm not a backend developer so feel free to submit a pull request if you think anything could be done more efficiently, or help add in something on the roadmap!
