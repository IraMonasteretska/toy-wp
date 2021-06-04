<?php

/**
 * Checkout billing information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-billing.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 * @global WC_Checkout $checkout
 */

defined('ABSPATH') || exit;
?>

<div class="checkout-whitesect checkout-two-step">
  <p class="title">Express checkout</p>
  <div class="infocheckout">
    <p class="name">PayPal</p>
    <div class="pics"><img src="img/pic2.png" alt=""></div>
  </div>
  <p class="infotext">Secure payment via PayPal.</p>
  <?php do_action('woocommerce_change_place_pay'); ?>

</div>

<div class="checkout-whitesect continf checkout-two-step">
  <p class="title">Contact information</p>
  <div class="boxform email-boxform">
    <input type="email" placeholder="Your EMAIL" class="email-js-checkout">
    <div class="checkfield">
      <input type="checkbox" id="checknews" checked>
      <label for="checknews">Keep me up to date on news and exclusive offers</label>


    </div>
  </div>
</div>

<div class="woocommerce-billing-fields checkout-whitesect billing checkout-two-step">
  <?php if (wc_ship_to_billing_address_only() && WC()->cart->needs_shipping()) : ?>

    <h3><?php esc_html_e('Billing &amp; Shipping', 'woocommerce'); ?></h3>

  <?php else : ?>

    <p class="title"><?php _e('Billing details'); ?></p>

  <?php endif; ?>

  <?php do_action('woocommerce_before_checkout_billing_form', $checkout); ?>


  <div class="woocommerce-billing-fields__field-wrapper boxform">
    <?php
    $fields = $checkout->get_checkout_fields('billing');

    foreach ($fields as $key => $field) {
      woocommerce_form_field($key, $field, $checkout->get_value($key));
    }
    ?>
  </div>


  <script>
    if (document.querySelector('.email-js-checkout')) {
      let defaultEmail = document.querySelector('#billing_email')
      let newEmail = document.querySelector('.email-js-checkout')
      newEmail.addEventListener('keyup', () => {
        defaultEmail.value = newEmail.value
      })

      let mainCheckbox = document.querySelector('#checknews')
      let newInput = document.querySelector('#billing_check_email')
      mainCheckbox.addEventListener('change', () => {
        if (mainCheckbox.checked) {
          newInput.value = 'checked'
        } else {
          newInput.value = 'not checked'
        }
      })
    }
  </script>


  <?php do_action('woocommerce_after_checkout_billing_form', $checkout); ?>
</div>