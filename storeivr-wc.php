<?php

/**
 * @wordpress-plugin
 * Plugin Name:       StoreIVR for WC
 * Plugin URI:        https://storeivr.com
 * Description:       StoreIVR plugin for WooCommerce to send communications to customers, shop managers and admins.
 * Version:           1.0.0
 * Author:            KDC
 * Author URI:        https://kdc.in
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       storeivr-wc
 * Domain Path:       /languages
 *
 * @link              https://kdc.in
 * @since             1.0.0
 * @package           Storeivr_Wc
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'STOREIVR_WC_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-storeivr-wc-activator.php
 */
function activate_storeivr_wc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-storeivr-wc-activator.php';
	Storeivr_Wc_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-storeivr-wc-deactivator.php
 */
function deactivate_storeivr_wc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-storeivr-wc-deactivator.php';
	Storeivr_Wc_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_storeivr_wc' );
register_deactivation_hook( __FILE__, 'deactivate_storeivr_wc' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-storeivr-wc.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_storeivr_wc() {

	$plugin = new Storeivr_Wc();
	$plugin->run();

}
run_storeivr_wc();
