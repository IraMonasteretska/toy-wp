<?php

/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if (!defined('ABSPATH')) {
  exit;
}

do_action('woocommerce_before_checkout_form', $checkout);

// If checkout registration is disabled and not logged in, the user cannot checkout.
if (!$checkout->is_registration_enabled() && $checkout->is_registration_required() && !is_user_logged_in()) {
  echo esc_html(apply_filters('woocommerce_checkout_must_be_logged_in_message', __('You must be logged in to checkout.', 'woocommerce')));
  return;
}

?>

<section class="cartsect">
  <div class="container-fluid">

    <form name="checkout" method="post" class="checkout woocommerce-checkout " action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">
   <div class="row">
    <?php if ($checkout->get_checkout_fields()) : ?>
        <?php do_action('woocommerce_checkout_before_customer_details'); ?>
        <div class="col-lg-7" id="customer_details">
          <div class="checkout-whitesect checkout-first-step active">
            <p class="title">Delivery method</p>
            <div class="dilivmethods">
              <div class="dilivmethod">
                <div class="dilivmethod__main">
                  <input type="radio" id="deliv1" name="maindelivery" checked>
                  <label for="deliv1">
                    <span>UPS</span>
                    <img src="<?php echo SD_THEME_IMAGE_URI; ?>/delivery1.png" alt="delivery method">
                  </label>
                </div>
                <div class="dilivmethod__submain show">
                  <div class="dilivmethod__submaincheckblock">
                    <input type="radio" id="ups1" name="ups" checked>
                    <label for="ups1">UPS Access Point Economy (Access Point):
                      <span>18</span></label>
                  </div>
                  <div class="dilivmethod__submaincheckblock">
                    <input type="radio" id="ups2" name="ups">
                    <label for="ups2">UPS Express Saver (Access Point):
                      <span>94</span></label>
                  </div>
                  <div class="dilivmethod__submaincheckblock">
                    <input type="radio" id="ups3" name="ups">
                    <label for="ups3">UPS Express Saver (Access Point):
                      <span>110</span></label>
                  </div>
                </div>
              </div>
              <div class="dilivmethod">
                <div class="dilivmethod__main">
                  <input type="radio" id="deliv2" name="maindelivery">
                  <label for="deliv2">
                    <span>FedEx</span>
                    <img src="<?php echo SD_THEME_IMAGE_URI; ?>/delivery2.png" alt="delivery method">
                  </label>
                </div>
                <div class="dilivmethod__submain">
                  <div class="dilivmethod__submaincheckblock">
                    <input type="radio" id="feedex1" name="feedex" checked>
                    <label for="feedex1">FeedEx Access Point Economy (Access Point):
                      <span>18</span></label>
                  </div>
                  <div class="dilivmethod__submaincheckblock">
                    <input type="radio" id="feedex2" name="feedex">
                    <label for="feedex2">FeedEx Access Point Economy (Access Point):
                      <span>94</span></label>
                  </div>
                  <div class="dilivmethod__submaincheckblock">
                    <input type="radio" id="feedex3" name="feedex">
                    <label for="feedex3">FeedEx Access Point Economy (Access Point):
                      <span>110</span></label>
                  </div>
                </div>
              </div>
              <div class="dilivmethod">
                <div class="dilivmethod__main">
                  <input type="radio" id="deliv3" name="maindelivery">
                  <label for="deliv3">
                    <span>DHL</span>
                    <img src="<?php echo SD_THEME_IMAGE_URI; ?>/delivery3.png" alt="delivery method">
                  </label>
                </div>
                <div class="dilivmethod__submain">
                  <div class="dilivmethod__submaincheckblock">
                    <input type="radio" id="dhl1" name="dhl" checked>
                    <label for="dhl1">DHL Access Point Economy (Access Point):
                      <span>18</span></label>
                  </div>
                  <div class="dilivmethod__submaincheckblock">
                    <input type="radio" id="dhl2" name="dhl">
                    <label for="dhl2">DHL Access Point Economy (Access Point):
                      <span>94</span></label>
                  </div>
                  <div class="dilivmethod__submaincheckblock">
                    <input type="radio" id="dhl3" name="dhl">
                    <label for="dhl3">DHL Access Point Economy (Access Point):
                      <span>110</span></label>
                  </div>
                </div>
              </div>
            </div>

            <?php if (WC()->cart->needs_shipping() && WC()->cart->show_shipping()) : ?>
              <?php do_action('woocommerce_review_order_before_shipping'); ?>
              <?php wc_cart_totals_shipping_html(); ?>
              <?php do_action('woocommerce_review_order_after_shipping'); ?>
            <?php endif; ?>
          </div>
          <?php do_action('woocommerce_checkout_billing'); ?>
          <?php do_action('woocommerce_checkout_shipping'); ?>
        </div>

        <?php do_action('woocommerce_checkout_after_customer_details'); ?>

      <?php endif; ?>

      <?php do_action('woocommerce_checkout_before_order_review_heading'); ?>



      <?php do_action('woocommerce_checkout_before_order_review'); ?>

      <div id="order_review" class="woocommerce-checkout-review-order col-lg-5">
        <div class="sticky-wrapper">
          <div class="order-summary">

            <p class="title" id="order_review_heading"><?php esc_html_e('Order Summary'); ?></p>
            <?php do_action('woocommerce_checkout_order_review'); ?>
          </div>
        </div>
      </div>

      <?php do_action('woocommerce_checkout_after_order_review'); ?>
      </div>
    </form>

  </div>
</section>
<?php do_action('woocommerce_after_checkout_form', $checkout); ?>


<?php get_template_part('template-parts/sections/contact-block_white'); ?>