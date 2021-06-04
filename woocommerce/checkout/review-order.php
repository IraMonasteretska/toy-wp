<?php

/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */

defined('ABSPATH') || exit;
?>
<div class="shop_table woocommerce-checkout-review-order-table">

  <div>
    <?php
    do_action('woocommerce_review_order_before_cart_contents');

    foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
      $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);

      if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key)) {
    ?>
        <div class="<?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item ordersummcontent__prodinfo', $cart_item, $cart_item_key)); ?>">
          <div class="ordersummcontent__lefts">
            <div class="pic">
              <?php
              $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);
              echo $thumbnail;
              ?>
            </div>
            <div class="ordersummcontent__descrall">
              <div class="descr">
                <p class="title"> <?php echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key)) . '&nbsp;'; ?> </p>
                <span class="count"><?php echo apply_filters('woocommerce_checkout_cart_item_quantity', ' ' . sprintf('x%s', $cart_item['quantity']) . ' ', $cart_item, $cart_item_key); ?></span>
              </div>
              <div class="descr">
                <div class="color">
                  <?php
                  echo wc_get_formatted_cart_item_data($cart_item);
                  ?>
                </div>
                <span class="price">
                  <?php echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); ?>
                </span>
              </div>
            </div>
          </div>
        </div>
    <?php
      }
    }

    do_action('woocommerce_review_order_after_cart_contents');
    ?>
  </div>


  <div>
    <div class="ordersummcontent__subtotsect">
      <div class="cart-subtotal subtot">
        <p class="subtotsect__title"><?php _e('Subtotal'); ?></p>
        <p class="subtotsect__price"><span><?php wc_cart_totals_subtotal_html(); ?></span></p>
      </div>

      <div class="shipping cart-subtotal subtot">
        <p class="subtotsect__title"><?php _e('Shipping'); ?></p>
        <p class="subtotsect__price"><span>0</span></p>
      </div>
    </div>

    <script>
      // start count shipping price
      if (document.querySelector('.ordersummcontent__total .totprice span bdi')) {
        let totalPriceShip = document.querySelector('.ordersummcontent__total .totprice span bdi')
        let suptotalPriceShip = document.querySelector('.ordersummcontent__subtotsect .subtot .subtotsect__price bdi')
        let priceShip = document.querySelector('.woocommerce-checkout-review-order-table .shipping .subtotsect__price span')
        priceShip.textContent = totalPriceShip.textContent.slice(1) - suptotalPriceShip.textContent.slice(1)
      }
      // end count shipping price
    </script>

    <?php foreach (WC()->cart->get_fees() as $fee) : ?>
      <tr class="fee">asdasd
        <th><?php echo esc_html($fee->name); ?></th>
        <td><?php wc_cart_totals_fee_html($fee); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php do_action('woocommerce_review_order_before_order_total'); ?>

    <div class="order-total ordersummcontent__total">
      <p class="title"><?php _e('Total'); ?></p>
      <div class="totprice"><span><?php wc_cart_totals_order_total_html(); ?></span></div>
    </div>
    <?php do_action('woocommerce_review_order_after_order_total'); ?>

    <?php do_action('woocommerce_review_order_before_submit'); ?>
    <p class="blackbtn btn-next-step-checkout">Continue</p>
    <?php $order_button_text = 'CONFIRM' ?>
    <?php echo apply_filters('woocommerce_order_button_html', '<button type="submit" class="button alt blackbtn btn-confirm-checkout" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr($order_button_text) . '" data-value="' . esc_attr($order_button_text) . '">' . esc_html($order_button_text) . '</button>'); // @codingStandardsIgnoreLine 
    ?>
    <div class="text-center">
      <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="ordersummcontent__return active return-to-checkout">RETURN TO CART</a>
      <p class="ordersummcontent__return return-to-shipping">RETURN TO Shipping</p>
    </div>
    <?php do_action('woocommerce_review_order_after_submit'); ?>

    <script>
      // start multistep checkout
      if (document.querySelector('.woocommerce-checkout')) {
        let returnToCheckout = document.querySelector('.return-to-checkout')
        let returnToShipping = document.querySelector('.return-to-shipping')
        let btnNextStep = document.querySelector('.btn-next-step-checkout')
        let btnConfirmStep = document.querySelector('.btn-confirm-checkout')
        let firstStep = document.querySelector('.checkout-first-step')
        let twoStep = document.querySelectorAll('.checkout-two-step')
        let bodyCheckClasss = document.querySelector('body')

        let getFirstStep = () => {
          btnConfirmStep.classList.add('active')
          btnNextStep.classList.remove('active')
          returnToCheckout.classList.remove('active')
          returnToShipping.classList.add('active')
        }

        let getTwoStep = () => {
          bodyCheckClasss.classList.remove('active')
          btnNextStep.classList.add('active')
          btnConfirmStep.classList.remove('active')
          returnToCheckout.classList.add('active')
          returnToShipping.classList.remove('active')
        }

        if (bodyCheckClasss.classList.contains('process-next-step')) {
          getFirstStep()
        } else {
          getTwoStep()
        }

        btnNextStep.addEventListener('click', () => {
          firstStep.classList.remove('active')
          for (let i of twoStep) {
            i.classList.add('active')
          }
          bodyCheckClasss.classList.add('process-next-step')
          getFirstStep()
        })

        returnToShipping.addEventListener('click', () => {
          firstStep.classList.add('active')
          for (let i of twoStep) {
            i.classList.remove('active')
          }
          bodyCheckClasss.classList.remove('process-next-step')
          getTwoStep()
        })
      }
      // end multistep checkout
    </script>

  </div>
</div>