<?php

/**
 * Plugin Name:       WooCommerce Mix and Match - Disable Shipstation Compat
 * Plugin URI:        https://woocommerce.com/products/woocommerce-mix-and-match-products/
 * Description:       Disable the built-in Mix and Match compatibility module.
 * Version:           1.0.0
 * Author:            Kathy Darling
 * Author URI:        kathyisawesome.com
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

// If this file is called directly, abort.
defined( 'ABSPATH' ) || exit;

/**
 * Turn off default module.
 * 
 * @param array $modules
 * @return array
 */
function wc_mnm_disable_shipstation_compatibility_module( $modules ) {
    unset( $modules['shipstation'] );
    return $modules;
}
add_filter( 'wc_mnm_compatibility_modules', 'wc_mnm_disable_shipstation_compatibility_module' );
