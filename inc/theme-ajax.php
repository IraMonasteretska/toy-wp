<?php
/**
 * chopovskyi ajax
 *
 * @package toy
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}



////////////////// projects filter date   //////////////////
//////////////////////////////////////////////////
add_action('wp_ajax_addProductAjax', 'addProductAjax_function'); 
add_action('wp_ajax_nopriv_addProductAjax', 'paddProductAjax_function');
 
function addProductAjax_function(){
 
	global $woocommerce;
	$woocommerce->cart->add_to_cart(12, 1, 156);
	
	echo $items_count = WC()->cart->get_cart_contents_count(); 
	die();
}
