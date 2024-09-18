<?php
/**
 * The template for displaying product search form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/product-searchform.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 7.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<form role="search" method="get" class="search_form com_p border_right border_left" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
        <input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field" placeholder="<?php esc_attr_e( 'Search Product....', 'appland' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        <button type="submit" class="search" value="<?php echo esc_attr_x( 'Search', 'submit button', 'appland' ); ?>">
            <i class="ti-search"></i>
        </button>
        <input type="hidden" name="post_type" value="product" />
    </div>
</form>
