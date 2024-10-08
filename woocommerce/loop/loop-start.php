<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$opt = get_option('appland_opt');
$products = !is_active_sidebar( 'shop_sidebar' ) ? 'products columns-'.wc_get_loop_prop('columns') : '';
$shop_sidebar = !empty($opt['shop_sidebar']) ? $opt['shop_sidebar'] : '';
$is_reverse_column = $shop_sidebar == 'left' ? ' flex-row-reverse' : '';

?>
<section class="shop_grid_area">
    <div class="container custome_container">
        <div class="row <?php echo esc_attr( $products.$is_reverse_column ); ?>">
