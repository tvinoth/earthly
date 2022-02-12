<?php
/**
 * Product
 *
 * This template can be overridden by copying it to yourtheme/templates/side-cart-woocommerce/global/body/product.php.
 *
 * HOWEVER, on occasion we will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen.
 * @see     https://docs.xootix.com/side-cart-woocommerce/
 * @version 2.1
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$productClasses = apply_filters( 'xoo_wsc_product_class', $productClasses );

?>

<div data-key="<?php echo $cart_item_key ?>" class="<?php echo implode( ' ', $productClasses ) ?>">

	<?php do_action( 'xoo_wsc_product_start', $_product, $cart_item_key ); ?>

	<?php if( $showPimage ): ?>

		<div class="xoo-wsc-img-col">

			<?php echo $thumbnail; ?>

			<?php do_action( 'xoo_wsc_product_image_col', $_product, $cart_item_key ); ?>

		</div>

	<?php endif; ?>

	<div class="xoo-wsc-sum-col">

		<?php do_action( 'xoo_wsc_product_summary_col_start', $_product, $cart_item_key ); ?>

		<div class="xoo-wsc-sm-info">

			<div class="xoo-wsc-sm-left">

				<?php if( $showPname ): ?>
					<span class="xoo-wsc-pname"><?php echo $product_name; ?></span>
				<?php endif; ?>
				
				<?php if( $showPmeta ) echo $product_meta ?>

				<?php if( $showPprice && ( $qtyPriceDisplay === 'separate' ) ): ?>
					<div class="xoo-wsc-pprice">
						<?php //echo __( 'Price: ', 'side-cart-woocommerce' ) . $product_price ?>
					</div>
				<?php endif; ?>

				<!-- Quantity -->

				<div class="xoo-wsc-qty-price">

					<?php if( $showPprice && $qtyPriceDisplay === 'one_liner' ): ?>
						<span><?php echo $cart_item['quantity']; ?></span> X <span><?php echo $product_price; ?>
						
						</span>
						<?php if( $showPtotal ): ?>
							<span> = <?php echo $product_subtotal ?>
							</span>
						<?php endif; ?>

					<?php else: ?>
						<span><?php //_e( 'Qty:', 'side-cart-woocommerce' ) ?></span> <span><?php //echo $cart_item['quantity']; ?></span>
						<span class="xoo-wsc-smr-ptotal" style="font-size: 14px;
    font-family: 'Rubik';
    font-weight: 500;"><?php echo $product_subtotal ?>
	
	</span>
					<?php endif; ?>
					
		<div class="elementor-element elementor-element-2df8363 elementor-button-success elementor-align-center sidecartaddtocartBtn elementor-widget elementor-widget-wc-add-to-cart" style="margin-top: -35px;">
			<!--<form action="http://localhost/earthly/product/earthly-vibes/" class="sidecart" method="post" enctype="multipart/form-data">-->
		
			<div class="qib-button qib-button-wrapper">
                <button type="button" class="minus qib-button">-</button>
                <div class="quantity wqpmb_quantity">
                    <input type="number" style="background-color:white;" class="wqpmb_input_text sidecartqty input-text qty text" step="1" min="1" max="" name="quantity" value="<?php echo $cart_item['quantity'];?>" title="Qty" size="4" placeholder="" inputmode="numeric" readonly="readonly">		                    
                </div>
                <span class="wqpmb_plain_input hidden">1</span>
				<input type="text" name="sidecartopenornot" value="sidecartopenornot" style="display:none"/>
                <button type="button" class="plus sidecartplus qib-button">+</button>
				<input type="hidden" name="sidecart_item_key" class="sidecart_item_key" value="<?php echo $cart_item_key;?>"/>
			</div>
	
			<button type="submit" name="add-to-cart" value="16" class="sidecart_add_to_cart_button elementor-button button alt" style="display:none;">
				<span class="elementor-button-content-wrapper">
					<span class="elementor-button-text">Add to cart</span>
				</span>
			</button>

			<!--</form>-->
		</div>
			
					
				</div>
				
			

			
			
			</div>

			<!-- End Quantity -->

		

			<div class="xoo-wsc-sm-right">

				<?php if( $showPdel ): ?>
					<span class="xoo-wsc-smr-del" style="font-family:'Rubik';color:red;font-weight: 300;font-size: 12px;cursor:pointer;"><u>Remove</u></span>
				<?php endif; ?>

				<?php if( $showPtotal && ( $qtyPriceDisplay === 'separate' ) ): ?>
					
				<?php endif; ?>

			</div>

		</div>

		<?php do_action( 'xoo_wsc_product_summary_col_end', $_product, $cart_item_key ); ?>

	</div>

	<?php do_action( 'xoo_wsc_product_end', $_product, $cart_item_key ); ?>

</div>