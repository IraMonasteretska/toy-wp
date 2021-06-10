<?php
/**
 * Single variation cart button
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
$rating_count = $product->get_rating_count();
?>
<div class="woocommerce-variation-add-to-cart variations_button">

	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
    
        <?php
            do_action( 'woocommerce_before_add_to_cart_quantity' );

            woocommerce_quantity_input(
                array(
                    'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
                    'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
                    'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
                )
            );

            do_action( 'woocommerce_after_add_to_cart_quantity' );
        ?>

    <div class="product__btn">

        <button type="submit" class="single_add_to_cart_button  blackbtn">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.7998 19.0172L18.5401 4.8319C18.5131 4.51697 18.2477 4.27853 17.9372 4.27853H15.3458C15.3098 1.91207 13.3753 0 10.9998 0C8.62435 0 6.68979 1.91207 6.6538 4.27853H4.06239C3.74746 4.27853 3.48652 4.51697 3.45953 4.8319L2.19981 19.0172C2.19981 19.0352 2.19531 19.0532 2.19531 19.0712C2.19531 20.6863 3.67548 22 5.49756 22H16.5021C18.3241 22 19.8043 20.6863 19.8043 19.0712C19.8043 19.0532 19.8043 19.0352 19.7998 19.0172ZM10.9998 1.21472C12.7049 1.21472 14.0951 2.58241 14.1311 4.27853H7.86852C7.90451 2.58241 9.2947 1.21472 10.9998 1.21472ZM16.5021 20.7853H5.49756C4.35482 20.7853 3.42803 20.0294 3.41004 19.0982L4.61576 5.49775H6.6493V7.34233C6.6493 7.67975 6.91924 7.94969 7.25666 7.94969C7.59409 7.94969 7.86402 7.67975 7.86402 7.34233V5.49775H14.1311V7.34233C14.1311 7.67975 14.401 7.94969 14.7385 7.94969C15.0759 7.94969 15.3458 7.67975 15.3458 7.34233V5.49775H17.3794L18.5896 19.0982C18.5716 20.0294 17.6403 20.7853 16.5021 20.7853Z" fill="#EAA8C6"/>
            </svg>
            <span><?php echo esc_html( $product->single_add_to_cart_text() ); ?></span>
        </button>
        <div class="product__rev">
            <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/comm.svg" alt="">
            <p>
                <span><?php echo $rating_count; ?> </span> 
                Reviews
            </p>

        </div>
    </div>


	<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

	<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="variation_id" class="variation_id" value="0" />
</div>
