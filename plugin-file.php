<?php
/**
 * Plugin Name:       WordPress Plugin Boilerplate
 * Description:       Your Plugin description,
 * Requires at least: 6.0
 * Requires PHP:      8.0
 * Version:           1.0.0
 * Author:            Krupal Panchal
 * Author URI:        https://krupalpanchal.in/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-plugin-boiler-plate
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Set the constants to use for references.
define( 'WP_PLUGIN_ROOT', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
define( 'WP_PLUGIN_VERSION', '1.0.0' );
define( 'WP_PLUGIN_NAME', 'wp-test' );

// Load Admin files.
require_once 'admin/classes/class-admin-ui.php';

// Load public files.
require_once 'public/classes/class-public-ui.php';

// Create an instances.
new Admin_UI();
new Public_UI();