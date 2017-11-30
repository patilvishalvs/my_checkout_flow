<?php

namespace Drupal\my_checkout_flow\Plugin\Commerce\CheckoutPane;

use \Drupal\commerce_checkout\Plugin\Commerce\CheckoutPane\BillingInformation;

/**
 * Provides the billing information pane.
 *
 * @CommerceCheckoutPane(
 *   id = "custom_billing_information",
 *   label = @Translation("Billing information"),
 *   default_step = "order_information",
 *   wrapper_element = "fieldset",
 * )
 */
class CustomBillingInformation extends BillingInformation {

}
