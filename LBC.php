<?php
/**
 * Plugin Name: Name of the plugin, must be unique.
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: A brief description of the plugin.
 * Version: The plugin's version number. Example: 1.0.0
 * Author: Name of the plugin author
 * Author URI: http://URI_Of_The_Plugin_Author
 * Text Domain: Optional. Plugin's text domain for localization. Example: mytextdomain
 * Domain Path: Optional. Plugin's relative directory path to .mo files. Example: /locale/
 * Network: Optional. Whether the plugin can only be activated network wide. Example: true
 * License: A short license name. Example: GPL2
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require "core.php";

// Init the LBC class
$LBC = new LBC();

// Register The menu items
$LBC->registerMenus();
