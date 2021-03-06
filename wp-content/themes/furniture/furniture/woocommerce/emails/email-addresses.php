<?php
/**
 * Email Addresses
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?><table cellspacing="0" cellpadding="0" style="width: 100%; vertical-align: top;" border="0">

	<tr>

		<td valign="top" width="50%">

			<h3><?php esc_html_e( 'Billing address', 'woocommerce' ); ?></h3>

			<p><?php echo balanceTags($order->get_formatted_billing_address()); ?></p>

		</td>

		<?php if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() && ( $shipping = $order->get_formatted_shipping_address() ) ) : ?>

		<td valign="top" width="50%">

			<h3><?php esc_html_e( 'Shipping address', 'woocommerce' ); ?></h3>

			<p><?php echo balanceTags($shipping); ?></p>

		</td>

		<?php endif; ?>

	</tr>

</table>
