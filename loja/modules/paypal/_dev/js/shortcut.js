/*
 * 2007-2020 PayPal
 *
 *  NOTICE OF LICENSE
 *
 *  This source file is subject to the Academic Free License (AFL 3.0)
 *  that is bundled with this package in the file LICENSE.txt.
 *  It is also available through the world-wide-web at this URL:
 *  http://opensource.org/licenses/afl-3.0.php
 *  If you did not receive a copy of the license and are unable to
 *  obtain it through the world-wide-web, please send an email
 *  to license@prestashop.com so we can send you a copy immediately.
 *
 *  DISCLAIMER
 *
 *  Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 *  versions in the future. If you wish to customize PrestaShop for your
 *  needs please refer to http://www.prestashop.com for more information.
 *
 *  @author 2007-2020 PayPal
 *  @author 202 ecommerce <tech@202-ecommerce.com>
 *  @copyright PayPal
 *  @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
// init incontext
$(document).ready( () => {

  // Get source page from data attribute value
  let sourcePage = $('[data-container-express-checkout]').data('paypal-source-page');
  switch (sourcePage) {
    case 'product':

      // Get product's variables
      let vars = getProductVars();

      // Check chosen product's availability
      EcCheckProductAvailability(sourcePage, vars['qty'], vars['id_product'], vars['id_product_attribute']);
      prestashop.on('updatedProduct', function(e, xhr, settings) {
          let vars = getProductVars();
          EcCheckProductAvailability(sourcePage, vars['qty'], vars['id_product'], e.id_product_attribute);
      });
      break;
    case 'cart':

      // Check products added in cart availability
      prestashop.on('updateCart', () => EcCheckProductAvailability(sourcePage));
      break;
  }
  if (typeof ec_sc_in_context !== 'undefined' && ec_sc_in_context) {
    window.paypalCheckoutReady = () => {

      // Setup Express Checkout method
      paypal.checkout.setup(merchant_id, {
        environment: ec_sc_environment,
      });
    };
  }
});


// Get product's variables frm data attributes
const getProductVars = () => {
  let vars = new Object();
      vars['qty'] = $('input[name="qty"]').val();
      vars['id_product'] = $('[data-paypal-id-product]').val();
      vars['id_product_attribute'] = $('[data-paypal-id-product-attribute]').val();
  return vars;
}

// Click on shortcut button
$('[data-paypal-shortcut-btn]').on('click', () => {
  let sourcePage = $('[data-container-express-checkout]').data('paypal-source-page');

  // Replace current_shop_url attribute
  $('[data-paypal-url-page]').val(document.location.href);
  switch (sourcePage) {
    case 'product':
      let vars = getProductVars(),
          combination = [],
          re = /group\[([0-9]+)\]/;
      $('[data-paypal-qty]').val(vars['qty']);
      $.each($('#add-to-cart-or-refresh').serializeArray(), (key, item) => {
        if(res = item.name.match(re)) {
          combination.push(`${res[1]} : ${item.value}`);
        }
      });
      $('[data-paypal-combination]').val(combination.join('|'));
      if (typeof ec_sc_in_context !== 'undefined' && ec_sc_in_context) {

        // Express Checkout method for product page
        ECSInContext(sourcePage, combination, vars['qty'], vars['id_product']);
      } else {
        $('[data-paypal-payment-form-cart]').submit();
      }
      break;
    case 'cart':
      if (typeof ec_sc_in_context !== 'undefined' && ec_sc_in_context) {

        // Express Checkout method for cart page
        ECSInContext();
      } else {
        $('[data-paypal-payment-form-cart]').submit();
      }
      break;
  }
});

// Check product availability using shortcut product/cart page
const EcCheckProductAvailability = (sourcePage, qty=false, productId=false, productIdAttr=false) => {
  $.ajax({
    url: sc_init_url,
    type: 'POST',
    data: `checkAvailability=1&source_page=${sourcePage}${productId ? `&id_product=${productId}` : ''}${qty ? `&quantity=${qty}` : ''}${productIdAttr ? `&product_attribute=${productIdAttr}` : ''}`,
    success: (json) => {
      if (json.success) {
        $('[data-container-express-checkout]').show();
      } else {
        $('[data-container-express-checkout]').hide();
      }
    }
  });
}

const ECSInContext = (sourcePage=false, combination=false, qty=false, productId=false) => {
  paypal.checkout.closeFlow();
  paypal.checkout.initXO();
  $.support.cors = true;
  $.ajax({
    url: ec_sc_action_url,
    type: 'GET',
    data: `getToken=1&source_page=${sourcePage}${productId ? `&id_product=${productId}` : ''}${qty ? `&quantity=${qty}` : ''}${combination ? `&combination=${combination.join('|')}` : ''}`,
    success: (json) => {
      if (json.success) {
        var url = paypal.checkout.urlPrefix + json.token;
        paypal.checkout.startFlow(url);
      } else {
        paypal.checkout.closeFlow();
        window.location.replace(json.redirect_link);
      }
    },
    error: (responseData) => {
      alert(`Error in ajax post ${responseData.statusText}`);
      paypal.checkout.closeFlow();
    }
  });
}
