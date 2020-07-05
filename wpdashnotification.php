<?php
/**
 * Plugin Name: Bestwebsite Hide Dashboard Notification
 * Plugin URI:  https://github.com/Bestwebsite/Hide-Dashboard-Notifications
 * Description: A plugin to remove WordPress Core, Theme and Plugin Notifictions in WordPress Dashboard
 * Author:      Bestwebsite
 * Author URI:  https://www.Bestwebsite.com
 * Version:     1.0
 * Text Domain: Bestwebsite
 */

 // If this file is called directly, abort.
 if ( ! defined( 'ABSPATH' ) ) {
     exit;
 }

// hide update notifications
function remove_core_updates () {
     global $wp_version;
     return(object) array(
          'last_checked'=> time(),
          'version_checked'=> $wp_version,
          'updates' => array()
     );
}
add_filter('pre_site_transient_update_core','remove_core_updates');
add_filter('pre_site_transient_update_plugins','remove_core_updates');
add_filter('pre_site_transient_update_themes','remove_core_updates');
