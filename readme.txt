=== Network Menu Fallback ===
Contributors: rfair404
Donate link: http://q21.co/donate
Tags: multisite, menu
Requires at least: 4.0
Tested up to: 4.4
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Gives multisite administrators the ability to create menus that can be used throughout a network.

== Description ==

This plugin makes it possible to have a menu that is controlled by the primary site but used throughout all other sites in the network.

*   When a navigation menu position has no menu assigned, the "fallback" defaults to pages. This plugin over-rides that so that instead it uses the nav menu from the "main site" (site ID 1)


== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/network-menu-fallback` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the Appearance->Menus screen to configure and assign a menu on the main site
4. Remove any assigned menus from other sites in the network to allow them to fall back to the menu on the main site


== Frequently Asked Questions ==

= Does this work with dynamic menus? =

Doubtful

= Can I use a site other than ID 1 as the fallback? =

Not yet.

== Screenshots ==

none available

== Changelog ==

= 0.1 =
* Initial release to WordPress plugin repository

== Upgrade Notice ==

= 0.1 =
Please use the latest version.