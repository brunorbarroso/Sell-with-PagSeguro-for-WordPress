<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://facebook.com/brunobarrosor
 * @since      1.0.0
 *
 * @package    Sell_With_Pagseguro
 * @subpackage Sell_With_Pagseguro/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Sell_With_Pagseguro
 * @subpackage Sell_With_Pagseguro/includes
 * @author     Bruno Barroso <brunobinfo@gmail.com>
 */
class Sell_With_Pagseguro_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'sell-with-pagseguro',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
