<?php
/**
 * Device Body Class
 *
 * Appends device-specific class names onto the body tag
  *
 * @package   device-body-class
 * @author    Brad Vincent <brad@fooplugins.com>
 * @license   GPL-2.0+
 * @link      https://github.com/fooplugins/device-body-class
 * @copyright 2013 FooPlugins LLC
 *
 * @wordpress-plugin
 * Plugin Name: Device Body Class
 * Plugin URI:  https://github.com/fooplugins/device-body-class
 * Description: Appends device-specific class names onto the body tag
 * Version:     1.0.0
 * Author:      bradvin
 * Author URI:  http://fooplugins.com
 * Text Domain: devicebodyclass-locale
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

//include plugin class
require_once( plugin_dir_path( __FILE__ ) . 'class-devicebodyclass.php' );

//include mobile detect class
if (!class_exists('Mobile_Detect')) {
	require_once( plugin_dir_path( __FILE__ ) . 'includes/Mobile_Detect.php');
}

//run it baby!
DeviceBodyClass::get_instance();