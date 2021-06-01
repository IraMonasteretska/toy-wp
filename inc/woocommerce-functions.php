<?php
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