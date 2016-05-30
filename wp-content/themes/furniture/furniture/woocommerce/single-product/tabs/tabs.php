<?php
/**
 * Single Product tabs
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.4.0
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );
if ( ! empty( $tabs ) ) : 

	$icons = array('description'=> '<i class="fa fa-align-left"></i>', 'reviews' => '<i class="fa fa-thumbs-up"></i>'); ?>

			<div class="row m0 tabRow">
                <ul class="nav nav-tabs" role="tablist" id="shortcodeTab">
                    
					<?php $count = 0;
					foreach( $tabs as $key => $tab ): 
						
						$active = ( $count == 0 ) ? ' active' : '';?>
						<li role="presentation" class="<?php echo esc_attr( $active); ?>">
							<a href="#<?php echo esc_attr( $key ); ?>" aria-controls="<?php echo esc_attr( $key ); ?>" role="tab" data-toggle="tab">
								<?php echo sh_set( $icons, $key ); ?>
								<?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', $tab['title'], $key ) ?>
							</a>
						</li>
					<?php $count++;
					endforeach; ?>
					
                </ul>
                <div class="tab-content shortcodeTabContent">
                    <?php $count = 0;
					foreach ( $tabs as $key => $tab ) : 
					
						$active = ( $count == 0 ) ? ' active' : '';?>
						
						<div role="tabpanel" class="tab-pane row m0<?php echo esc_attr( $active ); ?>" id="<?php echo esc_attr( $key ); ?>">
							<?php call_user_func( $tab['callback'], $key, $tab ) ?>
						</div>
					<?php $count++;
					endforeach; ?>
					
				
                </div>
            </div> <!--Tabs Row-->

<?php endif; 

return;
if ( ! empty( $tabs ) ) : //printr(array_keys($tabs));?>
	<div class="woocommerce-tabs tabbable shop-tab row m0 tabRow">
		
		<?php $icons = array('description'=> '<i class="fa fa-align-left"></i>', 'reviews' => '<i class="fa fa-thumbs-up"></i>'); ?>
		<ul id="myTab" class="tabs nav nav-tabs"  role="tablist">
			<?php foreach ( $tabs as $key => $tab ) : ?>
				<li role="presentation"  class="<?php echo esc_attr($key); ?>_tab">
					<a href="#tab-<?php echo esc_attr($key); ?>" role="tab" data-toggle="tab" aria-controls="tab-<?php echo esc_attr($key); ?>">
						<?php echo sh_set( $icons, $key ); ?>
						<?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', $tab['title'], $key ) ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
		
		<?php foreach ( $tabs as $key => $tab ) : ?>
			<div role="tabpanel" class="panel entry-content tab-content tab-pane row m0" id="tab-<?php echo esc_attr($key); ?>">
				<?php call_user_func( $tab['callback'], $key, $tab ) ?>
			</div>
		<?php endforeach; ?>
	
	</div>
<?php endif; ?>