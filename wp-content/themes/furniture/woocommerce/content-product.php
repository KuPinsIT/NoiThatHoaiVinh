<?php

/**

 * The template for displaying product content within loops.

 *

 * Override this template by copying it to yourtheme/woocommerce/content-product.php

 *

 * @author 		WooThemes

 * @package 	WooCommerce/Templates

 * @version     2.4.0

 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop;

// Store loop count we're currently on

if ( empty( $woocommerce_loop['loop'] ) )

	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid

if ( empty( $woocommerce_loop['columns'] ) )

	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 3 );

// Ensure visibility

if ( ! $product || ! $product->is_visible() )

	return;

// Increase loop count

$woocommerce_loop['loop']++;

// Extra post classes

$classes = array();

if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )

	$classes[] = 'first1';

if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )

	$classes[] = 'last1';

	

$meta = _WSH()->get_meta('_sh_layout_settings', get_option( 'woocommerce_shop_page_id' ));

$layout = sh_set( $meta, 'layout', 'full' );

$layout = sh_set( $_GET, 'layout' ) ? $_GET['layout'] : $layout;

if( !$layout || $layout == 'full' || sh_set($_GET, 'layout_style')=='full' ) $classes[] = 'col-lg-3 col-md-3 col-sm-3 col-xs-12'; else $classes[] = 'col-lg-4 col-md-4 col-sm-4 col-xs-12'; 

$attachment_ids = $product->get_gallery_attachment_ids();
$options = _WSH()->option();
$hide_overlay = sh_set($options,'hide_overlay');		


?>

<div <?php  //post_class( $classes ); ?>>

	



	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>

	

	<?php /** Customized add to cart button */

	$cart_button = apply_filters( 'woocommerce_loop_add_to_cart_link',

		sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="price a1 %s product_type_%s"><i class="icon-cart"></i></a>',

			esc_url( $product->add_to_cart_url() ),

			esc_attr( $product->id ),

			esc_attr( $product->get_sku() ),

			esc_attr( isset( $quantity ) ? $quantity : 1 ),

			$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',

			esc_attr( $product->product_type ),

			esc_html( $product->add_to_cart_text() )

		),

	$product ); ?>

	

	<div class="col-sm-3 product">

		

		 <div class="productInner row m0">

			<div class="row m0 imgHov">
			
				<?php the_post_thumbnail('270x341', array('class' => 'img-responsive'));?>
				
				<?php 
					$post_thumbnail_id = get_post_thumbnail_id($post->ID);
					$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
				?>
				<?php if (!$hide_overlay) :?>
				<div class="row m0 hovArea">
					<div class="row m0 icons">
						<ul class="list-inline">
							<li><a href="javascript:void(0);" class="add_to_wishlist" data-id="<?php the_ID(); ?>"><i class="fa fa-heart"></i></a></li>
							<li><a href="javascript:void(0);" class="add_to_compare" data-id="<?php the_ID(); ?>"><i class="fa fa-exchange"></i></a></li>
							<li><a href="<?php echo esc_url($post_thumbnail_url);?>" data-lightbox="product4" data-title="WOW SOFAS"><i class="fa fa-expand"></i></a></li>
						</ul>                                    
					</div>
					<div class="row m0 proType"><?php the_terms( $post->ID, 'product_cat', '', ' , ' ); ?></div>
					<div class="row m0 proRating">
						<?php woocommerce_template_loop_rating(); ?>
					</div>
					<div class="row m0 proPrice"><i class="fa fa-usd"></i><?php woocommerce_template_loop_price();?></div>
				</div>
				<?php endif; ?>
              </div>
			  
			  <?php

				/**

				 * woocommerce_before_shop_loop_item_title hook

				 *

				 * @hooked woocommerce_show_product_loop_sale_flash - 10

				 * @hooked woocommerce_template_loop_product_thumbnail - 10

				 */

				do_action( 'woocommerce_before_shop_loop_item_title' );

			  ?>
			  
			  <div class="row m0 proName"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>	
			  
			  <?php

				/**
		
				 * woocommerce_after_shop_loop_item_title hook
		
				 *
		
				 * @hooked woocommerce_template_loop_rating - 5
		
				 * @hooked woocommerce_template_loop_price - 10
		
				 */
		
				do_action( 'woocommerce_after_shop_loop_item_title' );
		
			  ?>
			  
			  <div class="row m0 proBuyBtn">
				<button class="addToCart btn" onClick="location.href='<?php the_permalink();?>'"><?php esc_html_e('add to cart', SH_NAME);?></button>
			  </div>
			
	</div>
</div>

<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>		