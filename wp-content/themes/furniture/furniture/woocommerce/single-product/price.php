<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>
<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

	<p class="price"><?php echo balanceTags($product->get_price_html()); ?></p>

	<meta itemprop="price" content="<?php echo balanceTags($product->get_price()); ?>" />
	<meta itemprop="priceCurrency" content="<?php echo get_woocommerce_currency(); ?>" />
	<link itemprop="availability" href="http://schema.org/<?php echo esc_url($product->is_in_stock()) ? 'InStock' : 'OutOfStock'; ?>" />

</div>