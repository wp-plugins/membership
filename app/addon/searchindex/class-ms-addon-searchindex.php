<?php
/**
 * Add-on: Allow Search-Engines to index protected content.
 *
 * @since  1.0.1.0
 */
class MS_Addon_Searchindex extends MS_Addon {

	/**
	 * The Add-on ID
	 *
	 * @since  1.0.1.0
	 */
	const ID = 'addon_searchindex';


	/**
	 * Checks if the current Add-on is enabled.
	 *
	 * @since  1.0.1.0
	 * @return bool
	 */
	static public function is_active() {
		return false;
	}

	/**
	 * Returns the Add-on ID (self::ID).
	 *
	 * @since  1.0.1.0
	 * @return string
	 */
	public function get_id() {
		return self::ID;
	}

	/**
	 * Initializes the Add-on. Always executed.
	 *
	 * @since  1.0.1.0
	 */
	public function init() {
		MS_Model_Addon::disable( self::ID );
	}

	/**
	 * Registers the Add-On.
	 *
	 * @since  1.0.1.0
	 * @param  array $list The Add-Ons list.
	 * @return array The updated Add-Ons list.
	 */
	public function register( $list ) {
		$list[ self::ID ] = (object) array(
			'name' => __( 'Search Index', MS_TEXT_DOMAIN ),
			'description' => __( 'Allow Search Engines to index protected content.', MS_TEXT_DOMAIN ),
			'icon' => 'wpmui-fa wpmui-fa-search',
			'details' => array(
				array(
					'type' => MS_Helper_Html::TYPE_HTML_TEXT,
					'value' => sprintf(
						'%s<br><br>%s',
						__( 'The special Membership "<b>Search Index</b>" is available in your Protection Rules page.<br>All content that is made available for that Membership is always visible to search engine crawlers.', MS_TEXT_DOMAIN ),
						__( 'Supported Search Engines: Google, Yahoo, Bing', MS_TEXT_DOMAIN )
					),
				),
				array(
					'id' => 'first_click_free',
					'type' => MS_Helper_Html::INPUT_TYPE_RADIO_SLIDER,
					'title' => __( 'First Click Free', MS_TEXT_DOMAIN ),
					'desc' => sprintf(
						__( 'All content that is available for Search engines is also available for all visitors that <b>directly arrive from a search engine</b> ("%sFirst Click Free%s" policy)<br>Disabling this feature might earn your site penalties by Google', MS_TEXT_DOMAIN ),
						'<a href="http://googlewebmastercentral.blogspot.com/2008/10/first-click-free-for-web-search.html" target="_blank">',
						'</a>'
					),
					'class' => 'has-labels',
					'before' => __( 'Disable "First Click Free"', MS_TEXT_DOMAIN ),
					'after' => __( 'Allow "First Click Free"', MS_TEXT_DOMAIN ),
					'value' => true,
					'wrapper_class' => 'disabled',
				),
			),
			'action' => array( __( 'Pro Version', MS_TEXT_DOMAIN ) ),
		);

		return $list;
	}

}
