<?php
/**
 * Render Paypal cancel button for subscriptions.
 *
 * Extends MS_View for rendering methods and magic methods.
 *
 * @since 1.0.0
 * @package Membership2
 * @subpackage View
 */
class MS_Gateway_Paypalstandard_View_Cancel extends MS_View {

	/**
	 * Create the Cancel Button.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function get_button() {
		$gateway = $this->data['gateway'];
		$button = null;

		return apply_filters(
			'ms_gateway_paypalstandard_cancel_button',
			$button,
			$this
		);
	}
}