<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @since      2.0.0
 * @package    International_Telephone_Input_With_Flags_And_Dial_Codes
 * @author     Sajjad Hossain Sagor <sagorh672@gmail.com>
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	die;
}

/**
 * Remove plugin options on uninstall/delete
 */
delete_option( 'wpitfdc_basic_settings' );
