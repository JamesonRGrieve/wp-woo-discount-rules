<?php

// SPDX-License-Identifier: AGPL-3.0-or-later

/**
 * Plugin Name: WP Woo Discount Rules
 * Description: Discount rules beyond plain coupons for WooCommerce, enforced exactly as the source store enforced them.
 * Version: 0.0.1
 * Requires at least: 6.6
 * Requires PHP: 8.3
 * Requires Plugins: woocommerce
 * WC requires at least: 9.6
 * Author: Jameson Grieve
 * License: AGPL-3.0-or-later
 * License URI: https://www.gnu.org/licenses/agpl-3.0.html
 * Text Domain: wp-woo-discount-rules
 */

declare(strict_types=1);

if (!defined('ABSPATH')) {
    return;
}

require_once __DIR__ . '/vendor/autoload.php';

WooDiscountRules\Wp\Plugin::boot(__FILE__);
