<?php
/**
 * The plugin bootstrap file
 *
 *
 * @link              https://www.leadbi.com
 * @since             1.0.0
 * @package           leadbi_wordpress_sdk
 *
 * @wordpress-plugin
 * Plugin Name:       LeadBI Wordpress SDK
 * Plugin URI:        https://www.leadbi.com
 * Description:       This plugin allows you to send data to leadbi from the server side
 * Version:           1.0.0
 * Author:            LeadBI
 * Author URI:        https://www.leadbi.com
 * License:           MIT
 * License URI:       https://github.com/leadbi/leadbi-wordpress-sdk/blob/master/LICENSE
 * Text Domain:       leadbi_wordpress_sdk
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
 if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_leadbi_wordpress_sdk() {
	// do nothing
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_leadbi_wordpress_sdk() {
	// do nothing
}

register_activation_hook( __FILE__, 'activate_leadbi_wordpress_sdk' );
register_deactivation_hook( __FILE__, 'deactivate_leadbi_wordpress_sdk' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */

define('LEADBI_API_VERSION', '1.0');
define('LEADBI_TRACKING_ENDPOINT', 'https://b.leadbi.com');

require plugin_dir_path( __FILE__ ) . 'includes/LeadBIUTMInfo.php';
require plugin_dir_path( __FILE__ ) . 'includes/LeadBIPageInfo.php';
require plugin_dir_path( __FILE__ ) . 'includes/LeadBIIdentity.php';
require plugin_dir_path( __FILE__ ) . 'includes/LeadBIFormAPI.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_leadbi_wordpress_sdk() {
	// do nothing
}

run_leadbi_wordpress_sdk();