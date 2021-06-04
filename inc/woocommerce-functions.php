<?php
// start add option page acf
if (function_exists('acf_add_options_page')) {
  acf_add_options_page('Theme Settings');
}
// end add option page acf

// start add support woocommerce
function mytheme_add_woocommerce_support()
{
  add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');
// end add support woocommerce

// start disabled all woocommerce style
add_filter('woocommerce_enqueue_styles', '__return_false');
// end disabled all woocommerce style

// start add dispaly variation in cart
add_filter('woocommerce_product_variation_title_include_attributes', '__return_false');
add_filter('woocommerce_is_attribute_in_product_name', '__return_false');
// end add dispaly variation in cart


// start delate fields checkout
add_filter('woocommerce_checkout_fields', 'customize_checkout_fields');
function customize_checkout_fields($fields)
{
  unset($fields['billing']['billing_company']);
  unset($fields['billing']['billing_address_2']);
  return $fields;
}
// end delate fields checkout



// start change placeholder fields checkout
add_filter('woocommerce_checkout_fields', 'change_plaseholder_first');

function change_plaseholder_first($checkout_fields)
{
  $checkout_fields['billing']['billing_first_name']['placeholder'] = 'First name';
  $checkout_fields['billing']['billing_last_name']['placeholder'] = 'LAst name';
  $checkout_fields['billing']['billing_address_1']['placeholder'] = 'Address';
  $checkout_fields['billing']['billing_city']['placeholder'] = 'City';
  $checkout_fields['billing']['billing_postcode']['placeholder'] = 'Postal code';
  $checkout_fields['billing']['billing_phone']['placeholder'] = 'Phone number';
  return $checkout_fields;
}
// end change placeholder fields checkout




// start change place payment
remove_action('woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20);
add_action('woocommerce_change_place_pay', 'woocommerce_checkout_payment');

// end change place payment
