<?php
/**
 * TapHoaMMO Child Theme functions and definitions
 */

function taphoammo_child_enqueue_styles() {
    wp_enqueue_style( 'hello-elementor-parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'taphoammo-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'hello-elementor-parent-style' ) );
}
add_action( 'wp_enqueue_scripts', 'taphoammo_child_enqueue_styles' );

/**
 * OPTIMIZATION: REMOVE UNNECESSARY CHECKOUT FIELDS
 * Because we are selling digital goods, we don't need address/phone/company.
 */
add_filter( 'woocommerce_checkout_fields' , 'taphoammo_simplify_checkout_fields' );

function taphoammo_simplify_checkout_fields( $fields ) {
    // Remove Billing fields
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    
    // Note: Email and Name are usually required for account creation
    return $fields;
}

/**
 * UX: CHANGE "ADD TO CART" TEXT TO "BUY NOW" & REDIRECT TO CHECKOUT
 * Optional: Enable this if you want a faster flow.
 */
// add_filter( 'woocommerce_product_single_add_to_cart_text', 'taphoammo_custom_cart_button_text' ); 
// add_filter( 'woocommerce_product_add_to_cart_text', 'taphoammo_custom_cart_button_text' ); 

function taphoammo_custom_cart_button_text() {
    return __( 'Mua Ngay', 'woocommerce' );
}
