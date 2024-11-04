<?php
/**
 * Plugin Name: Custom Social
 * Author: Amrah Imtiaz
 * Author URI: https://www.linkedin.com/in/amrahimtiaz/
 * Version: 5.0
 * License: GPL3
 * Text Domain: Custom Social
**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Define global constants
 */
$plugin_data = get_file_data( __FILE__,
                              array(
                                     'name'    => 'Plugin Name',
                                     'version' => 'Version',
                                     'text'    => 'Text Domain'
                                   )
                            );
function custom_social_define_constants( $constant_name, $value ) {
    $constant_name = 'CUSTOM_SOCIAL_' . $constant_name;
    if ( ! defined( $constant_name ) )
        define( $constant_name, $value );
}
custom_social_define_constants( 'FILE', __FILE__ );
custom_social_define_constants( 'DIR', dirname( plugin_basename( __FILE__ ) ) );
custom_social_define_constants( 'BASE', plugin_basename( __FILE__ ) );
custom_social_define_constants( 'URL', plugin_dir_url( __FILE__ ) );
custom_social_define_constants( 'PATH', plugin_dir_path( __FILE__ ) );
custom_social_define_constants( 'SLUG', dirname( plugin_basename( __FILE__ ) ) );
custom_social_define_constants( 'NAME', $plugin_data['name'] );
custom_social_define_constants( 'VERSION', $plugin_data['version'] );
custom_social_define_constants( 'TEXT', $plugin_data['text'] );
custom_social_define_constants( 'PREFIX', 'custom_social' );
custom_social_define_constants( 'SETTINGS', 'custom_social' );

/**
 * A useful function that returns an array with the contents of the plugin constants
 */
function custom_social_plugin() {
    $array = array(
        'file'     => CUSTOM_SOCIAL_FILE,
        'dir'      => CUSTOM_SOCIAL_DIR,
        'base'     => CUSTOM_SOCIAL_BASE,
        'url'      => CUSTOM_SOCIAL_URL,
        'path'     => CUSTOM_SOCIAL_PATH,
        'slug'     => CUSTOM_SOCIAL_SLUG,
        'name'     => CUSTOM_SOCIAL_NAME,
        'version'  => CUSTOM_SOCIAL_VERSION,
        'text'     => CUSTOM_SOCIAL_TEXT,
        'prefix'   => CUSTOM_SOCIAL_PREFIX,
        'settings' => CUSTOM_SOCIAL_SETTINGS
    );
    return $array;
}

/**
 * Put value of plugin constants into an array for easier access
 */
$plugin = custom_social_plugin();

/**
 * Load the plugin modules
 */
require_once( $plugin['path'] . 'inc/php/core.php' );
require_once( $plugin['path'] . 'inc/php/items.php' );
require_once( $plugin['path'] . 'inc/php/items-handler.php' );
require_once( $plugin['path'] . 'inc/php/options.php' );
require_once( $plugin['path'] . 'inc/php/upgrade.php' );
require_once( $plugin['path'] . 'inc/php/versioning.php' );
require_once( $plugin['path'] . 'inc/php/enqueue.php' );
require_once( $plugin['path'] . 'inc/php/functional.php' );
require_once( $plugin['path'] . 'inc/php/controls.php' );
require_once( $plugin['path'] . 'inc/php/page.php' );
require_once( $plugin['path'] . 'inc/php/messages.php' );