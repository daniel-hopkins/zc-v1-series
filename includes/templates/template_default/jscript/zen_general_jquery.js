/**
 * @package templateSystem
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id$
 */

$(".autosubmit select, SELECT#seAddressPulldown").change(function() {
    $(this).closest('form').submit();
});

var productImageWrappers = $("html.js #productMainImage, html.js #productAdditionalImages");
productImageWrappers.find('.no-js').each(function() {
  $(this).remove();
});
productImageWrappers.find('.js').each(function() {
  $(this).show();
});