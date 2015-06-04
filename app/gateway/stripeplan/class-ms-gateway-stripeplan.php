<?php
/**
 * @copyright Incsub (http://incsub.com/)
 *
 * @license http://opensource.org/licenses/GPL-2.0 GNU General Public License, version 2 (GPL-2.0)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston,
 * MA 02110-1301 USA
 *
*/

/**
 * Stripe Gateway Integration for repeated payments (payment plans).
 *
 * Persisted by parent class MS_Model_Option. Singleton.
 *
 * @since 2.0.0
 * @package Membership2
 * @subpackage Model
 */
class MS_Gateway_Stripeplan extends MS_Gateway {

	const ID = 'stripeplan';

	/**
	 * Gateway singleton instance.
	 *
	 * @since 2.0.0
	 * @var string $instance
	 */
	public static $instance;

	/**
	 * Initialize the object.
	 *
	 * @since 2.0.0
	 */
	public function after_load() {
		parent::after_load();

		$this->id = self::ID;
		$this->name = __( 'Stripe Subscriptions Gateway', MS_TEXT_DOMAIN );
		$this->group = 'Stripe';
		$this->manual_payment = false;
		$this->pro_rate = true;
	}

	/**
	 * Verify required fields.
	 *
	 * @since 1.0.0
	 * @return boolean True if configured.
	 */
	public function is_configured() {
		return false;
	}

}
