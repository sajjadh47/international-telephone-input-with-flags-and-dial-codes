<?php
/**
 * This file contains the definition of the International_Telephone_Input_With_Flags_And_Dial_Codes_I18n class, which
 * is used to load the plugin's internationalization.
 *
 * @package       International_Telephone_Input_With_Flags_And_Dial_Codes
 * @subpackage    International_Telephone_Input_With_Flags_And_Dial_Codes/includes
 * @author        Sajjad Hossain Sagor <sagorh672@gmail.com>
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since    2.0.0
 */
class International_Telephone_Input_With_Flags_And_Dial_Codes_I18n {
	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since     2.0.0
	 * @access    public
	 */
	public function load_plugin_textdomain() {
		load_plugin_textdomain(
			'international-telephone-input-with-flags-and-dial-codes',
			false,
			dirname( INTERNATIONAL_TELEPHONE_INPUT_WITH_FLAGS_AND_DIAL_CODES_PLUGIN_BASENAME ) . '/languages/'
		);
	}
}
