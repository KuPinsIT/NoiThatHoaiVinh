<?php global $product; ?>
<li>
	<a href="<?php echo esc_url( get_permalink( $product->id ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
		<?php echo balanceTags($product->get_image()); ?>
		<?php echo balanceTags($product->get_title()); ?>
	</a>
	<?php if ( ! empty( $show_rating ) ) echo balanceTags($product->get_rating_html()); ?>
	<?php echo balanceTags($product->get_price_html()); ?>
</li>