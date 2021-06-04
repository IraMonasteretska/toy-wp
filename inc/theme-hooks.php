<?php
/**
 * Custom hooks.
 *
 * @package toy
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}



function address_mobile_address_bar() {
	$color = "#1bd0e0";
	//this is for Chrome, Firefox OS, Opera and Vivaldi
	echo '<meta name="theme-color" content="'.$color.'">';
	//Windows Phone **
	echo '<meta name="msapplication-navbutton-color" content="'.$color.'">';
	// iOS Safari
	echo '<meta name="apple-mobile-web-app-capable" content="yes">';
	echo '<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">';
}
add_action( 'wp_head', 'address_mobile_address_bar' );


// remove breadcrumb
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

// single product
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 35 );


remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

// hides the quantity field on the product page
add_filter( 'woocommerce_quantity_input_min', 'hide_woocommerce_quantity_input', 10, 2 );
add_filter( 'woocommerce_quantity_input_max', 'hide_woocommerce_quantity_input', 10, 2 );
function hide_woocommerce_quantity_input( $quantity, $product ) {
    // only on the product page
    if ( ! is_product() ) {
        return $quantity;
    }
    return 1;
}

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');

// end single product





// header cart count

add_filter('woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment', 30, 1);
function header_add_to_cart_fragment($fragments){
  global $woocommerce;
  ob_start();
  ?>
    <span class="header__cart-price">
      <?php echo WC()->cart->get_cart_contents_count(); ?>
    </span>
  <?php
  $fragments['span.header__cart-price'] = ob_get_clean();
  return $fragments;
}


