<?php
/**
 * Main access to the Code-Library.
 * Access via function `lib2()`.
 *
 * Inspired by Jigsaw plugin by Jared Novack (http://jigsaw.upstatement.com/)
 *
 * @since  1.0.0
 */
class TheLib_2_0_2_Core extends TheLib_2_0_2 {

	/**
	 * Interface to the array component.
	 *
	 * @since 1.1.5
	 * @api
	 *
	 * @var   TheLib_Array
	 */
	public $array = null;

	/**
	 * Interface to the Debug component.
	 *
	 * @since 1.1.0
	 * @api
	 *
	 * @var   TheLib_Debug
	 */
	public $debug = null;

	/**
	 * Interface to the HTML component.
	 *
	 * @since 1.1.0
	 * @api
	 *
	 * @var   TheLib_Html
	 */
	public $html = null;

	/**
	 * Interface to the Net component.
	 *
	 * @since 1.1.0
	 * @api
	 *
	 * @var   TheLib_Net
	 */
	public $net = null;

	/**
	 * Interface to the session component.
	 *
	 * @since 1.1.5
	 * @api
	 *
	 * @var   TheLib_Session
	 */
	public $session = null;

	/**
	 * Interface to the updates component.
	 *
	 * @since 1.1.5
	 * @api
	 *
	 * @var   TheLib_Updates
	 */
	public $updates = null;

	/**
	 * Interface to the UI component.
	 *
	 * @since 1.1.5
	 * @api
	 *
	 * @var   TheLib_Ui
	 */
	public $ui = null;

	/**
	 * Class constructor
	 *
	 * @since 1.0.0
	 * @internal
	 */
	public function __construct() {
		parent::__construct();

		self::$core = $this;

		// A List of all components.
		$components = array(
			'array',
			'debug',
			'html',
			'net',
			'session',
			'updates',
			'ui',
		);

		// Create instances of each component.
		foreach ( $components as $component ) {
			if ( ! property_exists( $this, $component ) ) { continue; }

			$class_name = str_replace( 'Core', ucfirst( $component ), __CLASS__ );
			$this->$component = new $class_name();
		}
	}

	/**
	 * Short way to load the textdomain of a plugin.
	 *
	 * @since  1.0.0
	 * @api
	 *
	 * @param  string $domain Translations will be mapped to this domain.
	 * @param  string $rel_dir Path to the dictionary folder; relative to ABSPATH.
	 */
	public function translate_plugin( $domain, $rel_dir ) {
		$this->_add( 'textdomain', compact( 'domain', 'rel_dir' ) );

		$this->add_action( 'plugins_loaded', '_translate_plugin_callback' );
	}

	/**
	 * Create function callback for load textdomain (for PHP <5.3 only)
	 *
	 * @since  1.0.1
	 * @internal
	 */
	public function _translate_plugin_callback() {
		$items = $this->_get( 'textdomain' );
		foreach ( $items as $item ) {
			extract( $item ); // domain, rel_dir
			load_plugin_textdomain( $domain, false, $rel_dir );
		}
	}

	/**
	 * Checks if the provided value evaluates to a boolean TRUE.
	 *
	 * Following values are considered true:
	 *  - Boolean: true
	 *  - Number: anything except 0
	 *  - Strings: true, yes, on (case insensitive)
	 *
	 * @since  1.1.0
	 * @api
	 *
	 * @param  mixed $value A value that will be evaluated into a boolean.
	 * @return bool True if the specified $value evaluated to true.
	 */
	public function is_true( $value ) {
		if ( false === $value || null === $value || '' === $value ) {
			return false;
		} elseif ( true === $value ) {
			return true;
		} elseif ( is_numeric( $value ) ) {
			$value = intval( $value );
			return $value != 0;
		} elseif ( is_string( $value ) ) {
			$value = strtolower( trim( $value ) );
			return in_array(
				$value,
				array( 'true', 'yes', 'on', '1' )
			);
		}
		return false;
	}

};
