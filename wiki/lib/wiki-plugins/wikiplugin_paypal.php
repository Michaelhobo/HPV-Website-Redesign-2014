<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: wikiplugin_paypal.php 45723 2013-04-26 17:31:12Z changi67 $

// NB, all PayPal supported "HTML Variables" will be passed on to the button, even if not mentioned here

function wikiplugin_paypal_info()
{

	global $prefs;

	return array(
		'name' => tra('PayPal Button'),
		'documentation' => 'Payment',
		'description' => tra('Display a PayPal button'),
		'introduced' => 11.0,
		'prefs' => array('wikiplugin_paypal'),		// not dependent on 'payment_feature', would be annoying if you just want one donate button for instance
		'icon' => 'img/icons/basket.png',
		'format' => 'html',
		'extraparams' => true,
		'validate' => 'all',
		'params' => array(
			'cmd' => array(
				'required' => false,
				'name' => tra('Type'),
				'description' => tra('Type of PayPal button'),
				'filter' => 'word',
				'options' => array(
					array('text' => tra('Shopping cart'), 'value' => '_cart'),
					array('text' => tra('Buy Now'), 'value' => '_xclick'),
					array('text' => tra('Donations'), 'value' => 'donations'),
//					array('text' => tra('Gift vouchers'), 'value' => 'gift_certs'),	TODO?
//					array('text' => tra('Subscriptions'), 'value' => 'subscriptions'),
//					array('text' => tra('Automatic Billing'), 'value' => 'auto_billing'),
//					array('text' => tra('Instalment Plan'), 'value' => 'payment_plan'),
				),
				'default' => '_cart',
			),
			'cart_action' => array(
				'required' => false,
				'name' => tra('Cart Action'),
				'description' => tra('Action if Shopping Cart selected for type'),
				'filter' => 'text',
				'options' => array(
					array('text' => tra('Add to Cart'), 'value' => 'add'),
					array('text' => tra('View Cart'), 'value' => 'display'),
					//array('text' => tra('Cart Upload'), 'value' => 'upload'),	// N/A
				),
				'default' => 'add',
			),
			'item_name' => array(
				'required' => false,
				'name' => tra('Item Name'),
				'description' => tra('Item name or description. Required for Shopping cart'),
				'filter' => 'text',
				'default' => '',
			),
			'amount' => array(
				'required' => false,
				'name' => tra('Price'),
				'description' => tra('Item price'),
				'filter' => 'text',
				'default' => '',
			),
			'paypal_button' => array(
				'required' => false,
				'name' => tra('PayPal Button'),
				'description' => tra('Button appearance'),
				'filter' => 'text',
				'options' => array(
					array('text' => tra('Normal'), 'value' => ''),
					array('text' => tra('Smaller'), 'value' => 'small_button'),
					array('text' => tra('Custom'), 'value' => 'custom'),
				),
				'default' => '',
			),
			'custom_image_url' => array(
				'required' => false,
				'name' => tra('Custom Button'),
				'description' => tra('Custom button image URL'),
				'filter' => 'url',
				'default' => '',
			),
			'item_number' => array(
				'required' => false,
				'name' => tra('Product ID'),
				'description' => tra('Optional item identifier, often a tracker itemId'),
				'filter' => 'text',
				'default' => '',
			),
			'quantity' => array(
				'required' => false,
				'name' => tra('Quantity'),
				'description' => tra('Number of items, empty or 0 to have an input the user can fill in'),
				'filter' => 'text',
				'default' => '',
			),
			'shipping' => array(
				'required' => false,
				'name' => tra('Shipping Cost'),
				'description' => tra('The cost of shipping this item'),
				'filter' => 'text',
				'default' => '',
				'advanced' => true,
			),
			'shipping2' => array(
				'required' => false,
				'name' => tra('Additional Shipping Cost'),
				'description' => tra('The cost of shipping each additional unit of this item'),
				'filter' => 'text',
				'default' => '',
				'advanced' => true,
			),
			'weight' => array(
				'required' => false,
				'name' => tra('Weight'),
				'description' => tra('Weight of item'),
				'filter' => 'text',
				'default' => '',
				'advanced' => true,
			),
			'weight_unit' => array(
				'required' => false,
				'name' => tra('Weight Unit'),
				'description' => tra('The unit of measure if weight is specified'),
				'filter' => 'text',
				'options' => array(
					array('text' => tra('Kilos'), 'value' => 'kgs'),
					array('text' => tra('Pounds'), 'value' => 'lbs'),
				),
				'default' => 'kgs',
				'advanced' => true,
			),
			'business' => array(
				'required' => false,
				'name' => tra('Business Id'),
				'description' => tra('PayPal business name/ID') . ' ' . tra('(Uses value in admin/payment if not set here)'),
				'filter' => 'text',
				'default' => $prefs['payment_paypal_business'],
				'advanced' => !empty($prefs['payment_paypal_business']),	// if set in prefs shouldn't need to change it here
			),
			'minicart' => array(
				'required' => false,
				'name' => tra('Use MiniCart'),
				'description' => tra('See https://github.com/jeffharrell/MiniCart'),
				'filter' => 'text',
				'options' => array(
					array('text' => tra('Yes'), 'value' => 'y'),
					array('text' => tra('No'), 'value' => 'n'),
				),
				'default' => 'y',
				'advanced' => true,
			),
			'no_shipping' => array(
				'required' => false,
				'name' => tra('Shipping Address Prompt'),
				'description' => tra('0 – prompt for an address, but do not require one, 1 – do not prompt for an address, 2 – prompt for an address, and require one (default)'),
				'filter' => 'int',
				'default' => 2,
				'advanced' => true,
			),
			'return' => array(
				'required' => false,
				'name' => tra('Completed payment return URL'),
				'description' => tra('Empty for current page, "n" to disable'),
				'filter' => 'text',
				'default' => '',
				'advanced' => true,
			),
			'shopping_url' => array(
				'required' => false,
				'name' => tra('Continue Shopping URL'),
				'description' => tra('Empty for current page, "n" to disable'),
				'filter' => 'text',
				'default' => '',
				'advanced' => true,
			),
			'cancel_return' => array(
				'required' => false,
				'name' => tra('Cancel payment URL'),
				'description' => tra('Empty for current page, "n" to disable'),
				'filter' => 'text',
				'default' => '',
				'advanced' => true,
			),
			'title' => array(
				'required' => false,
				'name' => tra('Form title'),
				'description' => tra('Tooltip for the form and alt attribute for the image'),
				'filter' => 'text',
				'default' => tra('PayPal — The safer, easier way to pay online.'),
				'advanced' => true,
			),
			'stringButton' => array(
				'required' => false,
				'name' => tra('Button text'),
				'description' => tra('The checkout button text'),
				'filter' => 'text',
				'default' => 'Checkout',
				'advanced' => true,
			),
			'stringSubtotal' => array(
				'required' => false,
				'name' => tra('Subtotal text'),
				'description' => tra('The subtotal text'),
				'filter' => 'text',
				'default' => 'Subtotal: ',
				'advanced' => true,
			),
			'stringDiscount' => array(
				'required' => false,
				'name' => tra('Discount text'),
				'description' => tra('The discount text'),
				'filter' => 'text',
				'default' => 'Discount: ',
				'advanced' => true,
			),
			'stringShipping' => array(
				'required' => false,
				'name' => tra('Shipping text'),
				'description' => tra('The shipping text'),
				'filter' => 'text',
				'default' => 'does not include shipping &amp; tax',
				'advanced' => true,
			),
			'stringProcessing' => array(
				'required' => false,
				'name' => tra('Processing text'),
				'description' => tra('The processing text'),
				'filter' => 'text',
				'default' => 'Processing...',
				'advanced' => true,
			),
		),
	);
}

function wikiplugin_paypal($data, $params)
{
	global $prefs, $language, $base_uri, $base_host;
	static $id = 0;

	$unique = 'wppaypal-' . ++$id;
	$smarty = TikiLib::lib('smarty');

	// process default
	$plugininfo = wikiplugin_paypal_info();
	foreach ($plugininfo['params'] as $key => $p) {
		$default[$key] = $p['default'];
	}
	$params = array_merge($default, $params);

	// check required params
	if (empty($params['business'])) {
		global $access;
		$access->check_feature('payment_paypal_business');
	}

	if ($params['cmd'] === '_cart') {
		if (empty($params['item_name'])) {
			return '<span class="error">' . tra('PayPal button:') . ' ' . tra('Item name (item_name) required') . '</span>';
		}
		if (empty($params['amount'])) {
			return '<span class="error">' . tra('PayPal button:') . ' ' . tra('Price (amount) required') . '</span>';
		}

		$params[$params['cart_action']] = 1;
		unset($params['cart_action']);
	}

	// process others
	if ($prefs['payment_feature'] === 'y' && !empty($prefs['payment_currency'])) {
		$params['currency_code'] = $prefs['payment_currency'];
	}

	if (empty($params['weight'])) {
		unset($params['weight_unit']);
	}

	// logic handled in the tpl
	$smarty->assign('wppaypal_quantity', $params['quantity']);
	unset($params['quantity']);
	$smarty->assign('wppaypal_title', $params['title']);
	unset($params['title']);

	global $paypallib;
	include_once('lib/payment/paypallib.php');
	$locale = $paypallib->localeMap($language);		// 'lc' locale param TODO maybe

	// button image
	if (!empty($params['custom_image_url']) && $params['paypal_button'] === 'custom') {
		$button_url = $params['custom_image_url'];
	} else {
		switch ($params['cmd']) {
			case '_cart':
				if (isset($params['add'])) {
					$button_type = 'cart';
				} else if (isset($params['display'])) {
					$button_type = 'viewcart';
				}
				break;
			case '_xclick':
				$button_type = 'buynow';
				break;
			case 'donations':
				$button_type = 'donate';
				break;
			default:
				$button_type = 'paynow';
		}
		$size = $params['paypal_button'] === 'small_button' ? 'SM' : 'LG';
		$button_url = "http://www.paypalobjects.com/{$locale}/i/btn/btn_{$button_type}_{$size}.gif";
	}
	$pixel_url = "http://www.paypalobjects.com/{$locale}/i/scr/pixel.gif";

	$smarty->assign('wppaypal_button', $button_url);
	$smarty->assign('wppaypal_pixel', $pixel_url);
	unset($params['custom_image_url']);
	unset($params['paypal_button']);

	// return params
	if (!empty($_SERVER['REQUEST_URI'])) {
		$returnUrl = $base_host . $_SERVER['REQUEST_URI'];
	} else {
		$returnUrl = $base_uri;
	}
	if (strpos($returnUrl, 'tiki-ajax_services.php') !== false ||
			(isset($_REQUEST['controller']) && $_REQUEST['controller'] === 'search_customsearch')) {

		$csearchEvent = 'pageSearchReady';
		if (!empty($_SERVER['HTTP_REFERER'])) {
			$returnUrl = $_SERVER['HTTP_REFERER'];
		}
		$csearchInit = 'PAYPAL = {}; $("#PPMiniCart").fadeOut().remove();';
	} else {
		$csearchEvent = 'ready';
		$csearchInit = '';
	}
	foreach (array('return', 'shopping_url', 'cancel_return') as $ret) {
		if (empty($params[$ret])) {
			$params[$ret] = $returnUrl;
		} else if ($params[$ret] === 'n') {
			unset($params[$ret]);
		}
	}

	// just add javascript?
	$jsfile = 'vendor/jquery/minicart/dist/minicart' . ($prefs['tiki_minify_javascript'] === 'y' ? '.min' : '') . '.js';
	if ($params['minicart'] === 'y' && file_exists($jsfile)) {
		// it appears currently if you set any of these all must be set
		$miniParams = array('strings' => array());
		$miniParams['strings']['button']     = tra($params['stringButton']);
		$miniParams['strings']['subtotal']   = tra($params['stringSubtotal']);
		$miniParams['strings']['discount']   = tra($params['stringDiscount']);
		$miniParams['strings']['shipping']   = tra($params['stringShipping']);
		$miniParams['strings']['processing'] = tra($params['stringProcessing']);
		$miniParamStr = json_encode($miniParams);

		TikiLib::lib('header')->add_js(
			'
$(document).bind("' . $csearchEvent . '", function () {
	' .  $csearchInit . ' $.getScript("' . $jsfile . '", function() {
			PAYPAL.apps.MiniCart.render(' . $miniParamStr . ');
		});
});'
		);
	}
	unset($params['minicart']);


	//$params['item_name'] = htmlentities($params['item_name']);	// FIXME encoding problems!

	// all remaining non-empty params get turned into hidden form inputs
	$params = array_filter($params);
	$smarty->assign_by_ref('wppaypal_hiddens', $params);

	return $smarty->fetch('wiki-plugins/wikiplugin_paypal.tpl');


}
